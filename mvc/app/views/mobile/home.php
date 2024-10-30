<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartLocker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 1rem;
            background: linear-gradient(to bottom, #4a4a4a, #1a1a1a);
            color: white;
        }

        .container {
            display: flex;
            align-items: center;
            flex-direction: column;
            max-width: 390px;
        }

        .heading-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .heading {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 1.5rem;
            margin-left: 4rem;
        }

        .icon-container {
            display: flex;
            gap: 1rem;
        }

        .icon {
            display: inline-block;
            color: white;
            font-size: 1.5rem;
        }

        .dark-section {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 1rem;
            min-width: 390px;
            padding: 1rem 2rem;
            background-color: #333;
            font-size: 1rem;
        }

        .info-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            background-color: #444;
            height: 2.5rem;
        }

        .name {
            font-weight: bold;
        }

        .locker-number {
            font-size: 3rem;
            font-weight: bold;
            margin: 0;
            color: white;
        }

        .sub-label {
            font-size: 1rem;
            color: lightgray;
        }

        .lock-button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 10rem;
            height: 10rem;
            margin-top: 2rem;
            border-radius: 100%;
            background-color: #3a4058;
            color: white;
            font-size: 2rem;
            border: 0.5rem solid rgba(255, 255, 255, 0.2);
        }

        .action-label {
            font-size: 1rem;
            margin-top: 2rem;
            color: lightgray;
        }

        .box-container {
            width: 100%;
            margin-top: 2rem;
            padding: 1rem;
            border-radius: 0.5rem;
            background-color: rgba(65, 71, 97, 0.4);
            text-align: left;
        }

        .box-heading {
            font-size: 1rem;
            font-weight: bold;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
        }

        .info-label {
            font-size: 1rem;
            margin-top: 0.5rem;
            color: lightgray;
        }

        .info-value {
            font-size: 1rem;
            color: white;
        }

        .status-locked {
            color: lightgreen;
        }

        .status-unlocked {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="heading-container">
            <div></div>
            <div class="heading">SmartLocker</div>

            <div class="icon-container">
                <a href="<?= ROOT ?>/mobile/notifications" class="icon-link">
                    <i class="fas fa-bell icon"></i>
                </a>
                <a href="<?= ROOT ?>/mobile/verify" class="icon-link">
                    <i class="fas fa-sign-out-alt icon"></i>
                </a>
            </div>
        </div>
        <div class="dark-section">
            <div class="info-container">
                <div class="name">Guest</div>
                <div>09012345678</div>
            </div>
        </div>
        <div class="locker-number">002</div>
        <div class="sub-label">Locker</div>

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

        <button class="lock-button" id="lockButton" onclick="window.location.href='<?= ROOT ?>/mobile/access?action=<?= $status === 'locked' ? 'unlock' : 'lock' ?>'">
            <i class="fas fa-<?= $status === 'locked' ? 'lock' : 'unlock' ?>" id="lockIcon"></i>
        </button>
        <div class="action-label" id="actionLabel"><?= $actionLabel ?></div>

        <div class="box-container">
            <div class="box-heading">Locker 002</div>
            <div class="info-row">
                <div class="info-label">Size</div>
                <div class="info-value">Small</div>
            </div>
            <div class="info-row">
                <div class="info-label">Status</div>
                <div class="info-value <?= $statusValueClass ?>" id="statusValue"><?= $statusValueText ?></div>
            </div>
            <div class="info-row">
                <div class="info-label">From</div>
                <div class="info-value" id="fromTime"></div>
            </div>
            <div class="info-row">
                <div class="info-label">Until</div>
                <div class="info-value" id="untilTime"></div>
            </div>
        </div>
    </div>
    
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
