
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý hệ thống đỗ xe</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            padding: 20px;
        }

        .sidebar-header {
            text-align: center;
        }

        .sidebar-header .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .sidebar-menu {
            list-style: none;
            margin-top: 20px;
        }

        .sidebar-menu li {
            margin: 15px 0;
        }

        .sidebar-menu li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            display: block;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar-menu li a:hover {
            background-color: #34495e;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background-color: white;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        section {
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        table th {
            background-color: #2c3e50;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .avatar {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .stat-box {
            background: #2c3e50;
            color: white;
            padding: 20px;
            border-radius: 8px;
            width: 30%;
            text-align: center;
        }

        .form-group {
            margin-bottom: 10px;
        }

        input, button {
            padding: 10px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: #2c3e50;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #34495e;
        }

        .search-login-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .login-form {
            margin-right: auto;
        }

        .login-form button {
            background: #2c3e50;
            color: white;
            border: none;
            font-size: 18px;
            padding: 8px 12px;
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-form button:hover {
            background: #34495e;
        }

        .search-form {
            display: flex;
            gap: 5px;
        }

        .search-form input {
            padding: 6px 10px;
            width: 160px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .search-form button {
            background: #2c3e50;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-form button:hover {
            background-color: #34495e;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h3>Parking_Managent</h3>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#dashboard">User</a></li>
                <li><a href="#users">Vehicle</a></li>
                <li><a href="#vehicles">VehicleType</a></li>
                <li><a href="#transactions">Transaction</a></li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="main-content">

            <!-- Tìm kiếm và đăng nhập -->
            <div class="search-login-bar">
                <form class="login-form">
                    <button type="submit" title="Đăng nhập">👤</button>
                </form>

                <form class="search-form">
                    <input type="text" placeholder="Tìm kiếm...">
                    <button type="submit">🔍</button>
                </form>
            </div>

        @yield('content')


    </div>
</div>
</body>
</html>




