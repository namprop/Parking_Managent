<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Hệ thống quản lý bãi xe</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <div class="w-64 bg-gray-800 text-white flex flex-col p-6">
            <h2 class="text-2xl font-bold mb-6">🚗 Parking System</h2>
            <nav class="space-y-4">
                <a href="/admin/user" class="block py-2 px-3 rounded hover:bg-gray-700 transition">User</a>
                <a href="/admin/vehicle" class="block py-2 px-3 rounded hover:bg-gray-700 transition">Vehicle</a>
                <a href="/admin/vehicletype" class="block py-2 px-3 rounded hover:bg-gray-700 transition">Vehicle Type</a>
                <a href="#transactions" class="block py-2 px-3 rounded hover:bg-gray-700 transition">Transaction</a>
            </nav>
        </div>

        <!-- Main Content -->
        <main class="flex-1 p-8 bg-white">

            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Quản lý hệ thống đỗ xe</h1>
                <!-- Phần Tên Người Dùng và Nút Đăng Xuất -->
                <div class="flex items-center space-x-4">
                    <p class="text-lg text-gray-700">Xin chào,</p>
                    <!-- Nút Đăng Xuất với icon -->
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600 hover:text-red-800" title="Đăng xuất">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12H3m12 0l-4-4m4 4l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            @yield('body')

        </main>

    </div>

</body>

</html>
