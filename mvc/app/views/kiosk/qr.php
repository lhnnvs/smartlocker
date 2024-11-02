<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCash Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex min-vh-100" style="background-color: #333">
    <div class="container d-flex flex-column text-white fs-3 px-5 py-4" style="max-width: 768px; background-image: url('../assets/images/bg.jpg'); background-size: cover;">
        <div class="d-flex justify-content-between">
            <a href="<?= ROOT ?>/kiosk" class="text-white"><i class="bi bi-chevron-left"></i></a>
            <div></div>
        </div>
        <div class="d-flex flex-column flex-fill align-items-center justify-content-center px-5">
            <h1 class="fw-bold" style="font-size: 4rem;"><i>SCAN HERE</i></h1>
            <div class="mt-2">To Access Your Locker!</div>
            <div class="d-flex justify-content-center border rounded-5 bg-white mt-4 p-4 w-50">
                <canvas class="w-100" id="qr-code"></canvas>
            </div>
            <button class="btn btn-secondary border-0 rounded-pill text-white fs-3 mt-5 w-75" id="BackButton" onclick="window.location.href='<?= ROOT ?>/kiosk'" style="background-color: #3a4058">Back</button>
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