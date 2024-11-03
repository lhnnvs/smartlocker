<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Lockers</title>
    <link rel="stylesheet" href="<?= ROOT ?>../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .box {
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 1rem;
            background-color: #4CAF50;
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body class="d-flex min-vh-100" style="background-color: #333;">
    <div class="container d-flex flex-column justify-content-center text-center text-white fs-3 px-5 py-4" style="max-width: 768px; background-image: url('assets/images/bg.jpg'); background-size: cover;">
        <h1 class="fw-bold">Available Lockers</h1>
        <div class="mt-5 px-5">
            <div class="container d-flex justify-content-center gap-4">
                <div class="col-6">
                    <a href="<?= ROOT ?>/kiosk/rent?locker=1&size=medium&price=50.00" class="box" style="height: 15rem;">001</a>
                </div>
                <div class="col-6 d-flex flex-column">
                    <a href="<?= ROOT ?>/kiosk/rent?locker=2&size=small&price=20.00" class="box" style="height: 6.7rem;">002</a>
                    <a href="<?= ROOT ?>/kiosk/rent?locker=3&size=small&price=20.00" class="box mt-4" style="height: 6.7rem;">003</a>
                </div>
            </div>
            <div class="col-12">
                <a href="<?= ROOT ?>/kiosk/rent?locker=4&size=large&price=100.00" class="box mt-4" style="height: 15rem;">004</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= ROOT ?>../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
