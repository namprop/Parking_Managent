@extends(Auth::user()->level === \App\Utilities\Constant::user_level_admin ? 'admin.layout.master1' : 'admin.layout.masterEmployee')

@section('body')

<div class="w-full max-w-2xl mx-auto mt-10">
  <h1 class="text-2xl font-bold text-gray-700 uppercase mb-6">Sửa Bảng Giá: {{$pricelist->vehicleType->vehicle_name}}</h1>

  <form method="POST" action="/admin/pricelist/{{$pricelist->id}}" class="space-y-4 bg-white p-6 rounded-lg shadow-md">
    @csrf
    @method('PUT')

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Giá Một Giờ</label>
      <input type="number" name="price_one_hour" value="{{ $pricelist->price_one_hour }}" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Giá Nửa Ngày</label>
      <input type="number" name="price_half_day" value="{{  $pricelist->price_half_day }}" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Giá Một Ngày</label>
      <input type="number" name="price_full_day" value="{{ $pricelist->price_full_day }}" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Giá Một Tuần</label>
      <input type="number" name="price_week" value="{{$pricelist->price_week }}" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Giá Một Tháng</label>
      <input type="number" name="price_month" value="{{ $pricelist->price_month }}" class="w-full border rounded px-3 py-2" required>
    </div>

    <div class="flex justify-end gap-3">
        <a href="{{ route('pricelist.index') }}"
           class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 transition">
           Huỷ
        </a>
        <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
          Lưu Thay Đổi
        </button>
    </div>
  </form>
</div>

@endsection
