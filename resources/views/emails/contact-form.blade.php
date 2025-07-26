<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni İletişim Formu Mesajı</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dee2e6;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            color: #495057;
        }
        .field-value {
            padding: 8px;
            background-color: #f8f9fa;
            border-radius: 3px;
            margin-top: 5px;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #6c757d;
            border-radius: 0 0 5px 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="{{ config('app.url') }}/media/logo.png" alt="Aktaş Kuyumculuk" style="max-width: 200px; height: auto;">
        </div>
        <h2>Yeni İletişim Formu Mesajı</h2>
        <p>Web sitenizden yeni bir iletişim formu mesajı alındı.</p>
    </div>

    <div class="content">
        <div class="field">
            <div class="field-label">Ad Soyad:</div>
            <div class="field-value">{{ $mailData['name'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">E-posta:</div>
            <div class="field-value">{{ $mailData['email'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">Telefon:</div>
            <div class="field-value">{{ $mailData['phone'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">Mesaj:</div>
            <div class="field-value">{{ $mailData['message'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">Gönderim Tarihi:</div>
            <div class="field-value">{{ $mailData['submitted_at'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">IP Adresi:</div>
            <div class="field-value">{{ $mailData['ip_address'] }}</div>
        </div>
    </div>

    <div class="footer">
        <p>Bu e-posta Aktaş Kuyumculuk web sitesinden otomatik olarak gönderilmiştir.</p>
    </div>
</body>
</html>
