<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <link rel="stylesheet" href="<?= ROOT ?>../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex text-white min-vh-100" style="background-color: #222">
    <div class="container d-flex flex-column align-items-center fs-4 p-4" style="max-width: 390px; background-image: url('../assets/images/bg.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="d-flex flex-fill flex-column align-items-center justify-content-center text-center p-4">
            <img src="../../public/assets/images/error.png">
            <h3 class="fw-bold mt-5">Unfortunately, your rental period has ended</h3>
            <div class="text-light fs-6 mt-2">or it looks like you haven't completed your rental process yet</div>
            <button class="btn btn-secondary border-0 rounded-1 text-white fs-4 mt-4 w-100" id="proceedButton" onclick="window.location.href='<?= ROOT ?>/mobile'" style="background-color: #3a4058">Go Back</button>
        </div>
    </div>
</body>

</html>