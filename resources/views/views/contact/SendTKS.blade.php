<!DOCTYPE html>
<<!DOCTYPE html>
<html>
<head>
    <title>Thank you for contacting us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            font-size: 28px;
            font-weight: bold;
            margin: 30px 0;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .thank-you-message {
            background-color: #f8f8f8;
            border: 1px solid #ccc;
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="thank-you-message">
    <h1>Thank you for contacting us!</h1>
    <p>We have received your message and will get back to you as soon as possible.</p>
    <p>Here is a summary of the information you provided:</p>

<p><strong>Name:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Phone:</strong> {{ $data['phone'] }}</p>
<p><strong>Title:</strong> {{ $data['title'] }}</p>
<p><strong>Message:</strong> {{ $data['message'] }}</p>
</body>
</html>
