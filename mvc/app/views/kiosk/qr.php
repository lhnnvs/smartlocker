<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Scan QR Code</title>
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
        }

        h2 {
            font-size: 4em;
            font-weight: bold;
            font-style: italic;
            text-align: center;
            margin: 0;
        }

        .access-text {
            font-size: 1.8em;
            margin: 10px 0;
        }

        canvas {
            margin: 20px 0;
            border: 16px solid white;
            border-radius: 10px;
            width: 400px;
            height: 400px;
            background: #f7f7f7;
            box-sizing: border-box;
        }

        .btn-secondary {
            width: 400px;
            height: 60px;
            margin-top: 20px;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #414761;
            border-radius: 100px;
            font-size: 1.8em;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-secondary:hover {
            background-color: #2f3c4d;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <h2 class="mt-3">SCAN HERE</h2>
    <div class="access-text">To Access Your Locker!</div>
    <canvas id="qr-code" width="400" height="400"></canvas>
    <a href="<?= ROOT ?>/kiosk" class="btn btn-secondary">Back</a>

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
