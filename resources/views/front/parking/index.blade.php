<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin xe của tôi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Thông tin xe của tôi</h1>

        <h2>Danh sách phương tiện</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Biển số</th>
                    <th>Loại xe</th>
                    <th>Hãng xe</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>29A-12345</td>
                    <td>Ô tô</td>
                    <td>Toyota</td>
                </tr>
            </tbody>
        </table>

        <h2>Vị trí đỗ xe</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Số vị trí</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>A1</td>
                    <td>Đang sử dụng</td>
                </tr>
            </tbody>
        </table>

        <h2>Vé đỗ xe</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Biển số xe</th>
                    <th>Vị trí đỗ</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>29A-12345</td>
                    <td>A1</td>
                    <td>10/05/2025 08:00</td>
                    <td>10/05/2025 10:00</td>
                </tr>
            </tbody>
        </table>

        <h2>Lịch sử thanh toán</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Số vé</th>
                    <th>Số tiền</th>
                    <th>Trạng thái</th>
                    <th>Ngày thanh toán</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1234</td>
                    <td>50,000 VND</td>
                    <td>Hoàn thành</td>
                    <td>10/05/2025</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
