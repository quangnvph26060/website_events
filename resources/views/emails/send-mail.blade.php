<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yêu Cầu Liên Hệ Mới</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h1 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #444;
        }
        p {
            margin: 10px 0;
        }
        .field {
            font-weight: bold;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thông Tin Yêu Cầu Liên Hệ Mới</h1>
        <p><span class="field">Họ và Tên:</span> {{ $data['fullName'] }}</p>
        <p><span class="field">Email:</span> {{ $data['email'] }}</p>
        <p><span class="field">Số Điện Thoại:</span> {{ $data['phone'] }}</p>
        <p><span class="field">Công Ty:</span> {{ $data['company'] }}</p>
        <p><span class="field">Chủ Đề:</span> {{ $data['subject'] }}</p>
        <p><span class="field">Tin Nhắn:</span></p>
        <p>{{ $data['message'] }}</p>
        <p><span class="field">Ngày Gửi:</span> {{ \Carbon\Carbon::parse($data['created_at'])->format('d/m/Y H:i') }}</p>
        <div class="footer">
            Đây là email thông báo từ hệ thống. Vui lòng không trả lời email này.
        </div>
    </div>
</body>
</html>
