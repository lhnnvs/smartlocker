<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
    <link rel="stylesheet" href="<?= ROOT ?>../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex text-white min-vh-100" style="background-color: #222">
    <div class="container d-flex flex-column align-items-center fs-4 p-4" style="max-width: 390px; background-image: url('../assets/images/bg.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <div class="d-flex align-itmes-center justify-content-between w-100">
            <a href="<?= ROOT ?>/mobile/home" class="text-white"><i class="bi bi-arrow-left"></i></a>
            <div class="fw-bold me-2">Retrieve</div>
            <div></div>
        </div>
        <div class="d-flex flex-fill flex-column align-items-center justify-content-center text-center px-5">
            <img src="../../public/assets/images/terminate.png">
            <h4 class="fw-bold mt-2">This will end your rent. Are you sure?</h4>
            <div class="text-light fs-6 mt-2">Make sure to retrieve all items before closing</div>
            <button class="btn btn-danger border-0 rounded-1 text-white fs-4 mt-4 w-100" onclick="window.location.href='<?= ROOT ?>/mobile/error'">Confirm</button>
            <button class="btn btn-secondary border-0 rounded-1 text-white fs-4 mt-2 w-100" onclick="window.location.href='<?= ROOT ?>/mobile/home'" style="background-color: #3a4058">Back to safety</button>
        </div>
    </div>
</body>

</html>