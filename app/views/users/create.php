<?php
$title = "Add New Account";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .hover-bg-light:hover {
            background-color: #212529;
            border: 2px solid lightgray;
        }

        .box {
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            background-color: #e4e9f1;
            border-radius: 0.5rem;
        }

        .legend-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }
    </style>
</head>

<body class="d-flex vh-100" style="background-color: #f1f4fb">
    <div class="d-flex flex-column text-white p-3" style="max-width: 250px; position: relative; background-image: url('<?= ROOT ?>/assets/images/bg.jpg'); background-size: cover;">
        <div class="d-flex align-items-center mb-4 px-4 py-2">
            <img src="assets/images/logo.png" class="me-2" alt="Logo" style="width: 20px; height: 30px;">
            <h3 class="text-white m-0">SmartBox™</h3>
        </div>

        <a href="<?= ROOT ?>/home" class="d-flex align-items-center text-white text-decoration-none hover-bg-light rounded mb-2 px-5 py-3 w-100">
            <i class="bi bi-house-door me-2"></i>Dashboard
        </a>
        <a href="<?= ROOT ?>/lockers" class="d-flex align-items-center text-white text-decoration-none hover-bg-light rounded mb-2 px-5 py-3 w-100">
            <i class="bi bi-lock me-2"></i>Lockers
        </a>
        <a href="<?= ROOT ?>/transactions" class="d-flex align-items-center text-white text-decoration-none hover-bg-light rounded mb-2 px-5 py-3 w-100">
            <i class="bi bi-credit-card me-2"></i>Transactions
        </a>
        <a href="<?= ROOT ?>/users" class="d-flex align-items-center text-white text-decoration-none hover-bg-light rounded mb-2 px-5 py-3 w-100">
            <i class="bi bi-person me-2"></i>Admins
        </a>
        <a href="<?= ROOT ?>/reports" class="d-flex align-items-center text-white text-decoration-none hover-bg-light rounded mb-2 px-5 py-3 w-100">
            <i class="bi bi-file-earmark-text me-2"></i>Reports
        </a>
        <a href="<?= ROOT ?>/logs" class="d-flex align-items-center text-white text-decoration-none hover-bg-light rounded mb-2 px-5 py-3 w-100">
            <i class="bi bi-card-checklist me-2"></i>Logs
        </a>
        <a href="<?= ROOT ?>/loginhistory" class="d-flex align-items-center text-white text-decoration-none hover-bg-light rounded px-5 py-3 w-100">
            <i class="bi bi-clock-history me-2"></i>Login History
        </a>
        <div class="mt-auto w-100">
            <a href="<?= ROOT ?>/logout" class="d-flex align-items-center text-white text-decoration-none hover-bg-light rounded px-5 py-3 w-100">
                <i class="bi bi-box-arrow-right me-2"></i>Logout
            </a>
        </div>
    </div>

    <div class="flex-fill">
        <div class="d-flex justify-content-between align-items-center bg-white shadow-sm p-3 mb-4">
            <h3 class="m-0"><?php echo $title; ?></h3>
            <div class="d-flex align-items-center">
                <input type="text" class="form-control me-4" placeholder="⌕ Search" style="width: 200px;">
                <i class="bi bi-bell me-4" style="font-size: 1.5rem;"></i>

                <?php if (empty($_SESSION['USER'])): ?>

                    <a href="<?= ROOT ?>/login" class="fw-bold text-black text-decoration-none me-4">Login</a>

                <?php else: ?>

                    <span class="fw-bold me-4">
                        <img class="rounded-circle me-3" height="30px" width="30px" src="<?= ROOT ?>/<?= $_SESSION['USER']->image ?>"
                            alt="">
                        <?= $_SESSION['USER']->firstname ?>
                    </span>

                <?php endif; ?>
            </div>
        </div>
<div class="px-4 overflow-auto">
    <div class="row g-3">
        <div class="col-12">
            <div class="bg-white p-4 rounded shadow-sm">
                <form action="" method="POST" enctype="multipart/form-data" class="w-50">

                    <?php if (!empty($errors)): ?>

                        <div class="alert alert-danger alert-dismissible fade show p-2" role="alert">
                            <?php foreach ($errors as $error): ?>
                                <?= $error . "<br>" ?>
                            <?php endforeach; ?>

                            <button type="button" class="btn-close mt-1 py-2" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    <?php endif; ?>

                    <input type="hidden" name="token">
                    <div class="mb-3">
                        <label for="" class="mb-2">Image</label>
                        <input type="file" name="image" class="form-control border-secondary">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">First Name</label>
                        <input name="firstname" value="<?= get_var('firstname') ?>" type="text" class="form-control border-secondary">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Last Name</label>
                        <input name="lastname" value="<?= get_var('lastname') ?>" type="text" class="form-control border-secondary">
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="mb-2">Contact</label>
                        <input name="contact" value="<?= get_var('contact') ?>" type="tel" class="form-control border-secondary" pattern="[0-9]*" inputmode="numeric" oninput="this.value=this.value.replace(/[^0-9]/g,'')">
                    </div>
                    <div class="mb-3">
                        <label for="" class="mb-2">Email</label>
                        <input name="email" value="<?= get_var('email') ?>" type="text" class="form-control border-secondary">
                    </div>
                    <div class="mb-4">
                        <label for="" class="mb-2">Password</label>
                        <input name="password" value="<?= get_var('password') ?>" type="password" class="form-control border-secondary">
                    </div>
                    <button type="submit" class="btn btn-dark me-3 px-5">Save</button>
                    <button type="button" class="btn btn-light border-secondary px-5" onclick="window.location.href='<?= ROOT ?>/users'">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= ROOT ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    function validateInput(input) {
        input.value = input.value.replace(/[^0-9]/g, '');
    }
</script>
</body>

</html>