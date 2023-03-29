<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OTP Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            background-color: #f5f5f5;
        }

        p {
            margin-bottom: 1em;
        }

        strong {
            color: #007bff;
        }
    </style>
</head>
<body>
<p>Dear {{ $customer->first_name }},</p>
<p>Your OTP for verification is <strong>{{ $otp }}</strong>.</p>
<p>Please enter this OTP on the verification page to complete your check-in process.</p>
</body>
</html>
