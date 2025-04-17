@extends('admin.layout.master1')

@section('body')

<div class="w-full max-w-2xl mx-auto mt-10">
  <h1 class="text-2xl font-bold text-gray-700 uppercase mb-6">Sửa Bảng Giá: {{$pricelist->vehicleType->vehicle_name}}</h1>

  <form method="POST" action="/admin/pricelist/{{$pricelist->id}}" class="space-y-4 bg-white p-6 rounded-lg shadow-md">
    @csrf
    @method('PUT')

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Số Giờ</label>
      <input type="number" name="duration" value="{{ $pricelist->duration }}" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Thời Gian</label>
      <input type="string" name="duration_label" value="{{$pricelist->duration_label}}" class="w-full border rounded px-3 py-2" required>
    </div>

    <div>
      <label class="block text-sm font-medium text-gray-700 mb-1">Gia (VND)</label>
      <input type="number" name="price" value="{{ $pricelist->price }}" class="w-full border rounded px-3 py-2" required>
    </div>


    <div class="flex justify-end gap-3">
        <a href="/admin/pricelist"
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
