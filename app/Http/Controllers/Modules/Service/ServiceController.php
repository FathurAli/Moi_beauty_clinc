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
        try {
            // $data = Service::with('Admin')->get();
            $data = Service::all();

            return ApiFormatter::sendResponse(200, 'Successfully get data', $data);
        } catch (\Exception $err) {
            return ApiFormatter::sendResponse(400, 'Not found', $err->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'img' => 'required|mimes:jpg,jpeg,png|max:2048', // Hanya gambar dengan ukuran max 2MB
                'stock' => 'required|integer',
                'name' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|numeric',
            ]);
    
            // Simpan file gambar dengan nama asli
            if ($request->hasFile('img')) {
                $originalName = $request->file('img')->getClientOriginalName(); // Ambil nama asli file
                $imgPath = $request->file('img')->storeAs('store/services/', $originalName, 'public');
                $imgName = basename($imgPath); // Ambil hanya nama file
            } else {
                return ApiFormatter::sendResponse(400, 'Image not found');
            }
    
            // Simpan data ke database
            $data = Service::create([
                'name' => $request->name,
                'stock' => $request->stock,
                'description' => $request->description,
                'price' => $request->price,
                'img' => $imgName, // Simpan hanya nama file asli
            ]);
    
            return ApiFormatter::sendResponse(200, 'Data successfully created', $data);
        } catch (\Exception $err) {
            return ApiFormatter::sendResponse(400, 'Not found', $err->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Validasi input
            $request->validate([
                'img' => 'required|mimes:jpg,jpeg,png|max:2048', // Gambar opsional, max 2MB
                'stock' => 'required|integer',
                'name' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|numeric',
            ]);

            // Ambil data berdasarkan ID
            $data = Service::findOrFail($id);

            // Cek apakah ada file gambar baru yang di-upload
            if ($request->hasFile('img')) {
                // Hapus gambar lama dari storage
                if ($data->img) {
                    \Storage::disk('public')->delete('store/services/' . $data->img);
                }

                // Simpan gambar baru dengan nama asli tanpa tambahan waktu
                $imgName = $request->file('img')->getClientOriginalName();
                $request->file('img')->storeAs('store/services', $imgName, 'public');
            } else {
                // Jika tidak ada gambar baru, gunakan gambar lama
                $imgName = $data->img;
            }

            // Update data di database
            $data->update([
                'img' => $imgName, // Simpan nama file baru
                'stock' => $request->stock,
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
        } catch (\exception $err) {
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
            return ApiFormatter::sendResponse(404, 'not found', $err->getMessage);
        }
    }

    public function forceDeletes($id)
    {
        try {
            $data = Service::withTrashed()->findOrFail($id);
            $data->forceDelete();
            return ApiFormatter::sendResponse(200, 'Data Successfully forceDeletes', $data);
        } catch (\Exception $err) {
            return ApiFormatter::sendResponse(404, 'not found', $err->getMessage);
        }
    }
}
