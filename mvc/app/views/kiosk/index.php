<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Available Lockers</title>
    <style>
        body {
            background-image: url('assets/images/bg.jpg');
            background-color: black;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .container {
            max-width: 600px;
        }

        .box {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 1rem;
            background-color: #4CAF50;
        }

        .box1,
        .box4 {
            height: 15rem;
        }

        .box2,
        .box3 {
            height: 6.7rem;
        }

        .btn-secondary {
            background-color: #3a4058;
        }
    </style>
</head>

<body class="d-flex align-items-center text-white min-vh-100 fs-2 p-5">
    <div class="container text-center">
        <h1 class="fw-bold">Available Lockers</h1>
        <div class="mt-4">
            <div class="container d-flex justify-content-center gap-4">
                <div class="col-6">
                    <div class="box box1">001</div>
                </div>
                <div class="col-6 d-flex flex-column">
                    <div class="box box2">002</div>
                    <div class="box box3 mt-4">003</div>
                </div>
            </div>
            <div class="col-12">
                <div class="box box4 mt-4">004</div>
            </div>
        </div>
        <button class="btn btn-secondary border-0 rounded-pill text-white fs-3 mt-4 w-100" id="rentButton" onclick="window.location.href='<?= ROOT ?>/kiosk/rent'">RENT NOW</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>