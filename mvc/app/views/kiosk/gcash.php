<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>GCash Payment</title>
    <style>
        body {
            background-image: url('../assets/images/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .container {
            max-width: 600px;
        }

        .btn-secondary {
            background-color: #3a4058;
        }
    </style>
</head>

<body class="d-flex text-white min-vh-100 fs-3 p-5">
    <div class="container d-flex flex-column">
        <div class="d-flex justify-content-between">
            <a href="<?= ROOT ?>/kiosk/rent" style="color: white;"><i class="bi bi-chevron-left"></i></a>
            <div></div>
        </div>
        <div class="d-flex flex-fill flex-column align-items-center justify-content-center">
            <img src="../../public/assets/images/gcash.png" class="w-75" alt="GCash Logo">
            <h1 class="fw-bold mt-3">SCAN TO PAY HERE</h1>
            <div class="d-flex justify-content-center border rounded-5 bg-white mt-3 p-4 w-50">
                <canvas class="w-100" id="qr-code"></canvas>
            </div>
            <button class="btn btn-secondary border-0 rounded-pill text-white fs-3 mt-5 w-75" id="setButton" onclick="window.location.href='<?= ROOT ?>/kiosk/setpin'">SET YOUR 6-DIGIT PIN</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/neocotic/qrious/master/dist/qrious.min.js"></script>
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