<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
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

        .error {
            margin: 10rem 0 1rem 0;
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

        .btn-secondary {
            width: 100%;
            height: 3.5rem;
            font-size: 1.5em;
            background-color: #3a4058;
            margin-top: 3rem;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="../../public/assets/images/error.png" class="error" alt="">
        <div class="notification-message">Unfortunately, your<br>rental period has ended</div>
        <div class="info-message">or it looks like you haven't<br>completed your rental process yet</div>
        <button class="btn btn-secondary" id="backButton" onclick="window.location.href='<?= ROOT ?>/mobile'">Go back</button>
    </div>
</body>

</html>