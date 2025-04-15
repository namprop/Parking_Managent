@extends('admin.layout.master1')

@section('title', 'vehicle')


@section('body')

    <section id="users">

        <!-- Nút Thêm Người Dùng -->

        <section id="edit-pricingrule-type" class="mt-6">

            <form action="/admin/pricingrule/{{$pricingRule->id}}" method="POST"
                class="max-w-md mx-auto p-6 bg-white rounded-2xl shadow-md space-y-4">
                @csrf
                @method('PUT')
                <h2 class="text-2xl font-bold text-center"> Cập Nhật </h2>
                <div>
                    <label for="Vehicle_type_id" class="block text-sm font-medium text-gray-700">Chọn Phương Tiện</label>
                    <select id="vehicle_type_id" name="vehicle_type_id" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                        <option value="1" {{ $pricingRule->vehicle_type_id == 1 ? 'selected' : '' }}>Xe Đạp</option>
                        <option value="2" {{ $pricingRule->vehicle_type_id == 2 ? 'selected' : '' }}>Xe Máy</option>
                        <option value="3" {{ $pricingRule->vehicle_type_id == 3 ? 'selected' : '' }}>Ô Tô</option>
                    </select>
                </div>

                <div>
                    <label for="day_of_week" class="block text-sm font-medium text-gray-700">Ngày Trong Tuần</label>
                    <input value="{{ $pricingRule->day_of_week }}" type="day_of_week" id="day_of_week" name="day_of_week"
                        required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                        required>
                </div>

                <div>
                    <label for="start_time" class="block text-sm font-medium text-gray-700">Thời Gian Bắt Đầu</label>
                    <input value="{{ $pricingRule->start_time }}" type="start_time" id="start_time" name="start_time"
                        required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                        required>
                </div>

                <div>
                    <label for="end_time" class="block text-sm font-medium text-gray-700">Thời Gian Kết Thúc</label>
                    <input value="{{ $pricingRule->end_time }}" type="end_time" id="end_time" name="end_time" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                        required>
                </div>

                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700">Giá (VNĐ)</label>
                    <input value="{{ $pricingRule->price }}" type="price" id="price" name="price" required
                        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                        required>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                    Cập Nhật
                </button>
            </form>
        </section>





    </section>

@endsection
