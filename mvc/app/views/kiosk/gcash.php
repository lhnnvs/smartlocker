<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>GCash Payment</title>
    <style>
        body {
            background: linear-gradient(to bottom, #4a4a4a, #1a1a1a);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            position: relative;
        }

        .logo {
            width: 400px;
            height: auto;
            margin-bottom: 15px;
        }

        h2 {
            font-size: 2.5em;
            margin: 15px 0;
            font-weight: bold;
            text-align: center;
        }

        canvas {
            margin: 15px 0;
            border: 16px solid white;
            border-radius: 10px;
            background: #f7f7f7;
            width: 400px;
            height: 400px;
            box-sizing: border-box;
        }

        .btn-secondary {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 400px;
            height: 60px;
            margin-top: 20px;
            border: none;
            border-radius: 100px;
            background-color: #414761;
            color: white;
            text-decoration: none;
            font-size: 1.8em;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-secondary:hover {
            background-color: #2f3c4d;
            transform: scale(1.05);
        }

        .back-button {
            position: absolute;
            left: 20px;
            top: 20px;
            color: white;
            font-size: 1.8em;
            text-decoration: none;
            transition: color 0.3s;
        }

        .back-button:hover {
            color: #ccc;
        }
    </style>
</head>

<body>
    <a href="<?= ROOT ?>/kiosk/rent" class="back-button"><i class="fas fa-chevron-left"></i></a>
    <img src="../../public/assets/images/gcash.svg" class="logo" alt="GCash Logo">
    <h2>SCAN TO PAY HERE</h2>
    <canvas id="qr-code" width="400" height="400"></canvas>
    <a href="<?= ROOT ?>/kiosk/setpin" class="btn btn-secondary">SET YOUR 6-DIGIT PIN</a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <script>
        const qr = new QRious({
            element: document.getElementById('qr-code'),
            size: 400,
        });

        function generateRandomData() {
            return Math.random().toString(36).substring(2, 15);
        }

        qr.value = generateRandomData();
    </script>
</body>

</html>
