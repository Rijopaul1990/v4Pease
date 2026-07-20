<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .info-row {
            margin-bottom: 15px;
            padding: 10px;
            background: white;
            border-radius: 5px;
        }
        .label {
            font-weight: bold;
            color: #667eea;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Contact Form Submission</h2>
        </div>
        <div class="content">
            <div class="info-row">
                <span class="label">Name:</span> {{ $name }}
            </div>
            <div class="info-row">
                <span class="label">Email:</span> {{ $email }}
            </div>
            <div class="info-row">
                <span class="label">Subject:</span> {{ $subject }}
            </div>
            <div class="info-row">
                <span class="label">Message:</span><br>
                {{ $user_message }}
            </div>
        </div>
    </div>
</body>
</html>

