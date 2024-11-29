<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex text-white bg-dark vh-100">
    <div class="container d-flex flex-column align-items-center fs-4 p-4" style="max-width: 480px; background-image: url('../assets/images/bg.jpg'); background-size: cover;">
        <div class="d-flex flex-fill flex-column align-items-center justify-content-center text-center p-4">
            <img src="../assets/images/error.png" class="mb-5">
            <h4 class="fw-bold mb-3">Unfortunately, your rental period has ended</h4>
            <div class="text-light fs-6 mb-5">or it looks like you haven't completed your rental process yet</div>
            <button class="btn btn-dark border fs-4 w-100" id="proceedButton" onclick="window.location.href='<?= ROOT ?>/mobile'">Go Back</button>
        </div>
    </div>
</body>

</html>