<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Credentials</title>
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
            flex-direction: column;
            align-items: center;
            max-width: 390px;
        }

        .label-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .label {
            font-size: 1.5rem;
            font-weight: bold;
            margin-right: 1rem;
        }

        .back-button {
            font-size: 1.5em;
            color: white;
        }

        .notifications {
            margin: 15rem 0 1rem 0;
        }

        .notification-message {
            font-weight: bold;
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 1rem;
        }

        .info-message {
            font-size: 1rem;
            text-align: center;
            color: lightgray;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="label-container">
            <a href="<?= ROOT ?>/mobile/home" class="back-button"><i class="fas fa-arrow-left"></i></a>
            <label class="label">Notifications</label>
            <div></div>
        </div>
        <img src="../../public/assets/images/notifications.png" class="notifications" alt="">
        <div class="notification-message">No notifications yet</div>
        <div class="info-message">Your notification will appear here<br>once you’ve received them.</div>
    </div>
</body>

</html>