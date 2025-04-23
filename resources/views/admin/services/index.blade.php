@extends('layout')

@section('content')
<div class="container mt-4">
    <h2>Data Layanan</h2>
    <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Tambah Layanan</a>

    <table id="servicesTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#servicesTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.services.data') }}',
            columns: [
                {
                    data: 'img',
                    render: function(data) {
                        return `<img src="/storage/store/services/${data}" width="80" class="img-thumbnail"/>`;
                    },
                    orderable: false,
                    searchable: false
                },
                { data: 'name' },
                { data: 'description' },
                { 
                    data: 'price',
                    render: $.fn.dataTable.render.number(',', '.', 0, 'Rp ')
                },
                {
                    data: 'action',
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });
</script>
@endpush
