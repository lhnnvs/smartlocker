<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="<?= ROOT ?>../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex flex-nowrap bg-dark vh-100">
    <div class="d-flex flex-column align-items-start text-white p-3" style="width: 250px; position: relative; background-image: url('../public/assets/images/bg.jpg'); background-size: cover;">
        <div class="d-flex align-items-center mb-4 px-4 py-2">
            <img src="../public/assets/images/logo.png" class="me-2" alt="Logo" style="width: 20px; height: 30px;">
            <h3 class="text-white m-0">SmartBox™</h3>
        </div>

        <a href="#" class="d-flex align-items-center text-white py-3 px-5 text-decoration-none hover-bg-light rounded mb-2 w-100">
            <i class="bi bi-house-door me-2"></i> Dashboard
        </a>
        <a href="#" class="d-flex align-items-center text-white py-3 px-5 text-decoration-none hover-bg-light rounded mb-2 w-100">
            <i class="bi bi-lock me-2"></i> Lockers
        </a>
        <a href="#" class="d-flex align-items-center text-white py-3 px-5 text-decoration-none hover-bg-light rounded mb-2 w-100">
            <i class="bi bi-credit-card me-2"></i> Transactions
        </a>
        <a href="#" class="d-flex align-items-center text-white py-3 px-5 text-decoration-none hover-bg-light rounded w-100">
            <i class="bi bi-person me-2"></i> Users
        </a>

        <div class="mt-auto w-100">
            <a href="#" class="d-flex align-items-center text-white py-3 px-5 text-decoration-none hover-bg-light rounded w-100">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>
        </div>
    </div>

    <div class="flex-fill">
        <div class="d-flex justify-content-between align-items-center bg-white p-3 mb-4">
            <h3 class="m-0">Dashboard</h3>

            <div class="d-flex align-items-center">
                <input type="text" class="form-control me-4" placeholder="Search..." style="width: 200px;">

                <i class="bi bi-bell me-4" style="font-size: 1.5rem;"></i>

                <div class="d-flex align-items-center">
                    <img src="../public/assets/images/s.jpg" alt="Admin Picture" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                    <span class="fw-bold mx-3">Admin</span>
                </div>
            </div>
        </div>

        <div class="px-4 text-white">
            <h1>Welcome to SmartBox™ Admin Panel</h1>
            <p>Your content goes here...</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= ROOT ?>../assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <style>
        .hover-bg-light:hover {
            background-color: #212529;
            border: 1px solid dimgray;
        }
    </style>
</body>

</html>