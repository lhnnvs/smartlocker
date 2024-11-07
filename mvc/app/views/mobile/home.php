<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartLocker</title>
    <link rel="stylesheet" href="<?= ROOT ?>../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .status-locked {
            color: lightgreen;
        }

        .status-unlocked {
            color: red;
        }
    </style>
</head>

<body class="d-flex text-white bg-dark vh-100 fs-6">
    <div class="container d-flex flex-column align-items-center p-4" style="max-width: 390px; background-image: url('../assets/images/bg.jpg'); background-size: cover;">
        <div class="d-flex align-items-center justify-content-between mb-3 w-100">
            <a href="<?= ROOT ?>/mobile/notifications" class="text-white fs-4 mb-2"><i class="bi bi-bell-fill"></i></a>
            <h2 class="fw-bold ms-3">SmartLocker</h2>
            <a href="<?= ROOT ?>/mobile/verify" class="text-white fs-4 mb-1 me-1"><i class="bi bi-box-arrow-left"></i></a>
        </div>
        <div class="d-flex align-items-center justify-content-center bg-black mb-3 px-4 py-3 w-100" style="min-width: 390px">
            <div class="d-flex justify-content-between rounded-1 bg-dark px-3 py-2 w-100">
                <div class="fw-bold">Guest</div>
                <div>09012345678</div>
            </div>
        </div>
        <h1 class="fw-bold" style="font-size: 3rem;">001</h1>
        <div class="text-light mb-4">Locker</div>

        <?php
        $status = isset($_GET['status']) ? $_GET['status'] : 'locked';

        if ($status === 'unlocked') {
            $actionLabel = "Touch to Lock";
            $statusValueClass = "status-unlocked";
            $statusValueText = "Unlocked";
        } else {
            $actionLabel = "Touch to Unlock";
            $statusValueClass = "status-locked";
            $statusValueText = "Locked";
        }
        ?>

        <button class="d-flex align-items-center justify-content-center bg-dark rounded-circle text-white fs-1 mb-4" id="lockButton" onclick="window.location.href='<?= ROOT ?>/mobile/access?action=<?= $status === 'locked' ? 'unlock' : 'lock' ?>'" style="height: 10rem; width: 10rem; border: 0.5rem solid gray">
            <i class="bi bi-<?= $status === 'locked' ? 'lock-fill' : 'unlock-fill' ?>" id="lockIcon"></i>
        </button>
        <div class="text-light mb-4" id="actionLabel"><?= $actionLabel ?></div>

        <div class="bg-dark rounded-3 text-start p-3 w-100">
            <label for="" class="fw-bold mb-1">Locker 001</label>
            <div class="d-flex justify-content-between">
                <div class="text-light">
                    <div class="mb-1">Size</div>
                    <div class="mb-1">Status</div>
                    <div class="mb-1">From</div>
                    <div>Until</div>
                </div>
                <div class="text-end">
                    <div class="mb-1">Medium</div>
                    <div class="mb-1 <?= $statusValueClass ?>" id="statusValue"><?= $statusValueText ?></div>
                    <div class="mb-1" id="fromTime"></div>
                    <div id="untilTime"></div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= ROOT ?>../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        function getQueryParams() {
            const params = {};
            window.location.search.substring(1).split('&').forEach(param => {
                const [key, value] = param.split('=');
                params[decodeURIComponent(key)] = decodeURIComponent(value || '');
            });
            return params;
        }

        const params = getQueryParams();
        if (params.name) {
            document.querySelector('.name').textContent = params.name;
        }
        if (params.phone) {
            document.querySelector('.info-container div:nth-child(2)').textContent = params.phone;
        }

        function formatTime(date) {
            return date.toLocaleTimeString([], {
                hour: '2-digit',
                minute: '2-digit'
            });
        }

        const now = new Date();
        const fromTime = formatTime(now);
        const untilTime = formatTime(new Date(now.getTime() + 60 * 60 * 1000));

        document.getElementById('fromTime').textContent = fromTime;
        document.getElementById('untilTime').textContent = untilTime;
    </script>
</body>

</html>