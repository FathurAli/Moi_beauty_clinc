<?php

namespace App\Http\Controllers\Modules\Service;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
{
    $services = Service::all(); // ambil semua data layanan
    return view('admin.services.index', compact('services'));
}
    

    public function create()
    {
        return view('admin.services.create');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'img' => 'required|mimes:jpg,jpeg,png|max:2048',
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);
    
        try {
            // Simpan file gambar
            $imgName = null;
            if ($request->hasFile('img')) {
                $originalName = $request->file('img')->getClientOriginalName();
                $imgPath = $request->file('img')->storeAs('store/services', $originalName, 'public');
                $imgName = basename($imgPath);
            }
    
            // Simpan ke database
            Service::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'img' => $imgName,
            ]);
    
            // Redirect ke halaman index dengan pesan sukses
            return redirect()->route('services.index')->with('success', 'Layanan berhasil ditambahkan.');
        } catch (\Exception $e) {
            // Redirect kembali dengan pesan error
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
    }
    

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'img' => 'nullable|mimes:jpg,jpeg,png|max:2048',
                'name' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|numeric',
            ]);

            $data = Service::findOrFail($id);

            if ($request->hasFile('img')) {
                if ($data->img) {
                    \Storage::disk('public')->delete('store/services/' . $data->img);
                }

                $imgName = $request->file('img')->getClientOriginalName();
                $request->file('img')->storeAs('store/services', $imgName, 'public');
            } else {
                $imgName = $data->img;
            }

            $data->update([
                'img' => $imgName,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
            ]);

            return ApiFormatter::sendResponse(200, 'Data successfully updated', $data);
        } catch (\Exception $err) {
            return ApiFormatter::sendResponse(400, 'Not found', $err->getMessage());
        }
    }

    public function show($id)
    {
        try {
            $data = Service::findOrFail($id);
            return ApiFormatter::sendResponse(200, 'Data successfully show', $data);
        } catch (\Exception $err) {
            return ApiFormatter::sendResponse(400, 'Not found', $err->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $data = Service::findOrFail($id);
            $data->delete();
            return ApiFormatter::sendResponse(200, 'Data successfully delete', $data);
        } catch (\Exception $err) {
            return ApiFormatter::sendResponse(400, 'Not found', $err->getMessage());
        }
    }

    public function restore($id)
    {
        try {
            $data = Service::onlyTrashed()->findOrFail($id);
            $data->restore();
            return ApiFormatter::sendResponse(200, 'Data successfully restore', $data);
        } catch (\Exception $err) {
            return ApiFormatter::sendResponse(404, 'not found', $err->getMessage());
        }
    }

    public function forceDeletes($id)
    {
        try {
            $data = Service::withTrashed()->findOrFail($id);
            $data->forceDelete();
            return ApiFormatter::sendResponse(200, 'Data Successfully forceDeletes', $data);
        } catch (\Exception $err) {
            return ApiFormatter::sendResponse(404, 'not found', $err->getMessage());
        }
    }
}
