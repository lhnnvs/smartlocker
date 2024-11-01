<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Cash Payment</title>
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

<body class="d-flex text-white min-vh-100 fs-2 p-5">
    <div class="container d-flex flex-column flex-fill">
        <div class="d-flex justify-content-between">
            <a href="<?= ROOT ?>/kiosk/rent" style="color: white;"><i class="bi bi-chevron-left"></i></a>
            <div></div>
        </div>
        <div class="d-flex flex-fill align-items-center justify-content-center w-100">
            <div class="text-center border-0 rounded-5 p-5" style="background-image: url('../assets/images/bg.jpg');">
                <h1 class="fw-bold">INSERT YOUR PAYMENT BELOW</h1>
                <label class="text-light mt-4">Please put the exact amount</label>
                <div class="mt-4">
                    <label class="fw-bold">Amount: </label>
                    <label class="fw-bold" id="amountDisplay">P<?= isset($_GET['amount']) ? htmlspecialchars($_GET['amount']) : '0' ?></label>
                </div>
                <button class="btn btn-secondary border-0 rounded-pill text-white fs-3 mt-5 w-75" id="setButton" onclick="window.location.href='<?= ROOT ?>/kiosk/setpin'">SET YOUR 6-DIGIT PIN</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>