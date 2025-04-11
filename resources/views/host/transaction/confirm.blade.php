<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Xác nhận thanh toán</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f4f6;
      padding: 40px;
    }

    .container {
      max-width: 600px;
      margin: auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 20px;
      color: #1f2937;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      text-align: left;
      padding: 8px 0;
    }

    th {
      color: #374151;
      width: 40%;
    }

    td {
      color: #111827;
    }

    .total {
      font-weight: bold;
      color: #dc2626;
    }

    .buttons {
      text-align: right;
    }

    .btn {
      padding: 10px 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 14px;
      margin-left: 10px;
      text-decoration: none;
    }

    .btn-cancel {
      background-color: #e5e7eb;
      color: #1f2937;
    }

    .btn-confirm {
      background-color: #10b981;
      color: white;
    }

    .btn-confirm:hover {
      background-color: #059669;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Xác Nhận Thanh Toán</h2>

    <table>
      <tr><th>Tên người gửi:</th><td>{{$vehicle->sender_name}}</td></tr>
      <tr><th>Loại xe:</th><td>{{$vehicle->vehicleType->vehicle_name}}</td></tr>
      <tr><th>Biển số:</th><td>{{$vehicle->license_plate}}</td></tr>
      <tr><th>Ngày gửi:</th><td>{{$timeIn}}</td></tr>
      <tr><th>Thời gian ra:</th><td>{{$timeOut}}</td></tr>
      <tr><th>Số ngay:</th><td>{{$days}}</td></tr>
      <tr><th>Đơn giá:</th><td>{{$rate}} đ / ngày</td></tr>
      <tr><th class="total">Tổng tiền:</th><td class="total">{{$amount}} đ</td></tr>
    </table>

    <div class="buttons">
      <a href="/host/vehicle" class="btn btn-cancel">Hủy</a>

      <form action="{{ route('transaction.pay', $vehicle->id) }}" method="POST">
        @csrf
        <input type="hidden" name="sender" value="{{$vehicle->sender_name}}">
        <input type="hidden" name="vehicle_name" value="{{$vehicle->vehicleType->vehicle_name}}">
        <input type="hidden" name="license_plate" value="{{$vehicle->license_plate}}">
        <input type="hidden" name="check_in" value="{{$timeIn}}">
        <input type="hidden" name="check_out" value="{{$timeOut}}">
        <input type="hidden" name="price" value="{{$amount}}">
        <input type="hidden" name="payment_method" value="{{$tienmat}}">
        <input type="hidden" name="employee_name" value="{{Auth::user()->name}}">
        <button type="submit" class="btn btn-confirm">Xác Nhận Thanh Toán</button>
    </form>

    </div>
  </div>
</body>
</html>
