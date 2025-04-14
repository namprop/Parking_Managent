@extends(Auth::user()->level === \App\Utilities\Constant::user_level_admin ? 'admin.layout.master1' : 'admin.layout.masterEmployee')

@section('title', 'vehicle')


@section('body')

       <!-- Thêm xe mới -->
       <section id="dashboard">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Thêm xe mới</h2>
        <form action="{{ Auth::user()->level === \App\Utilities\Constant::user_level_admin ? route('admin.vehicle.store') : route('employee.vehicle.store') }}" method="POST" class="space-y-4">
            @csrf
            <div class="form-group">
                <label for="vehicle_types_id" class="block text-gray-600">Chọn loại xe:</label>
                <select name="vehicle_types_id" id="vehicle_types_id" required class="w-full p-2 border rounded-lg">
                    @foreach ($vehicleTypes as $vehicleType)
                        <option value="{{ $vehicleType->id }}">{{ $vehicleType->vehicle_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tennguoigui" class="block text-gray-600">Tên người gửi:</label>
                <input type="text" name="sender_name" placeholder="Tên người gửi" required class="w-full p-2 border rounded-lg">
            </div>
            <div class="form-group">
                <label for="bienso" class="block text-gray-600">Biển số:</label>
                <input type="text" name="license_plate" placeholder="Biển số" class="w-full p-2 border rounded-lg">
            </div>

            <div class="form-group">
                <label for="account_code" class="block text-gray-600">Mã tài khoản:</label>
                <input type="text" name="account_code" placeholder="VD: 123454" class="w-full p-2 border rounded-lg">
            </div>

            <button type="submit" class="inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">Thêm xe</button>
        </form>
    </section>


        


    @endsection
