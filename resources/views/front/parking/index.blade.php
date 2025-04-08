<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thông tin xe đang đỗ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 font-sans">

    <div class="max-w-xl mx-auto bg-white shadow-lg rounded-xl p-6 mt-10">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Thông tin xe đang đỗ</h2>

        <div class="space-y-4">
          @foreach ($vehicles as $vehicle)
              
            <div class="flex justify-between">
                <span class="text-gray-600 font-medium">Tên người gửi:</span>
                <span class="text-gray-800 font-semibold">{{$user->name}}</span>
            </div>

            <div class="flex justify-between">
                <span class="text-gray-600 font-medium">Biển số:</span>
                <span class="text-blue-600 font-bold text-lg">{{$vehicle->bienso}}</span>
            </div>

            <div class="flex justify-between">
                <span class="text-gray-600 font-medium">Loại xe:</span>
                <span class="text-gray-800">{{$vehicle->vehicle_types_id}}</span>
            </div>

            <div class="flex justify-between">
                <span class="text-gray-600 font-medium">Ngày gửi:</span>
                <span class="text-gray-800">{{$vehicle->ngaygui}}</span>
            </div>

            @endforeach

        </div>
    </div>
    </div>

</body>

</html>
