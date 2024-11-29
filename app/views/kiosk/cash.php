<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Payment</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex bg-dark vh-100">
    <div class="container d-flex flex-column flex-fill text-white fs-3 px-5 py-4" style="max-width: 768px; background-image: url('../assets/images/bg.jpg'); background-size: cover;">
        <div class="d-flex justify-content-between">
            <a href="<?= ROOT ?>/kiosk" class="text-white"><i class="bi bi-chevron-left"></i></a>
            <div></div>
        </div>
        <div class="d-flex flex-fill align-items-center justify-content-center px-5">
            <div class="text-center">
                <h1 class="fw-bold mb-5">INSERT YOUR PAYMENT BELOW</h1>
                <div class="text-light mb-4">Please put the exact amount</div>
                <div class="d-flex justify-content-center mb-5">
                    <div class="fw-bold">Amount:</div>
                    <div class="fw-bold ms-2" id="amountDisplay">P<?= isset($_GET['amount']) ? htmlspecialchars($_GET['amount']) : '0' ?></div>
                </div>
                <button class="btn btn-dark border rounded-pill fs-3 w-75" id="setButton" onclick="window.location.href='<?= ROOT ?>/kiosk/setpin'">SET YOUR 6-DIGIT PIN</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= ROOT ?>../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
