<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Termination</title>
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
        }

        .back-button {
            font-size: 1.5em;
            color: white;
        }

        .terminate {
            margin: 5rem 0 1rem 0;
        }

        .notification-message {
            font-weight: bold;
            font-size: 1.4rem;
            text-align: center;
            margin-bottom: 1rem;
        }

        .info-message {
            font-size: 1rem;
            text-align: center;
            color: lightgray;
        }

        #confirmButton {
            width: 100%;
            height: 3.5rem;
            font-size: 1.5em;
            background-color: red;
            margin-top: 2rem;
            border: none;
        }

        #backButton {
                        width: 100%;
            height: 3.5rem;
            font-size: 1.5em;
            background-color: #3a4058;
            margin-top: 1rem;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="label-container">
            <a href="<?= ROOT ?>/mobile/home" class="back-button"><i class="fas fa-arrow-left"></i></a>
            <label class="label">Retrieve</label>
            <div></div>
        </div>
        <img src="../../public/assets/images/terminate.png" class="terminate" alt="">
        <div class="notification-message">Are you sure to end your rent?</div>
        <div class="info-message">Make sure to retrieve all items before<br>closing</div>
        <button class="btn btn-secondary" id="confirmButton" onclick="window.location.href='<?= ROOT ?>/mobile/error'">Confirm</button>
        <button class="btn btn-secondary" id="backButton" onclick="window.location.href='<?= ROOT ?>/mobile/home'">Back to safety</button>
    </div>
</body>

</html>