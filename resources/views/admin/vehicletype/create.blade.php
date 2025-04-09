@extends('admin.layout.master1')

@section('title', 'vehicle_type')


@section('body')

    <!-- Main content -->
    <!-- Thêm Loại Xe -->
    <section id="add-vehicle-type" class="mt-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Thêm Loại Xe</h2>
        <form action="/admin/vehicletype" method="POST">
            @csrf
            <div class="form-group mb-4">
                <input type="text" name="vehicle_code" placeholder="Mã Loại Xe" class="p-2 border border-gray-300 rounded w-full" required>
            </div>
            <div class="form-group mb-4">
                <input type="text" name="vehicle_name" placeholder="Tên Loại Xe" class="p-2 border border-gray-300 rounded w-full" required>
            </div>
            <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700">Thêm Loại Xe</button>
        </form>
    </section>

    @endsection
