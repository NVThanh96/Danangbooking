<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        li {
            margin-bottom: 10px;
        }

        .bold {
            font-weight: bold;
        }

        p {
            margin: 0;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Booking Confirmation</h1>
    <p>Dear <span class="bold">{{ $transaction[1] }}</span>,</p>
    <p>Thank you for your booking with us. We have reserved the following room for you:</p>
    <ul>
        <li><span class="bold">Room Number:</span> {{ $room->roomNumber }}</li>
        <li><span class="bold">Bed Number:</span> {{ $room->bedNumber }}</li>
        <li><span class="bold">Adults:</span> {{ $room->adultNumber }}</li>
        <li><span class="bold">Children:</span> {{ $room->childNumber }}</li>
    </ul>
    <p><span class="bold">Check-in date:</span> {{ $bookingDetail->checkin }}</p>
    <p><span class="bold">Check-out date:</span> {{ $bookingDetail->checkout }}</p>
    <p><span class="bold">Total amount:</span> {{ $bookingDetail->total }}</p>
    <p>If you have any questions or concerns, please feel free to contact us at any time.</p>
    <p>Best regards,<br><span class="bold">{{ $transaction[1] }}</span></p>
</div>
</body>
</html>
