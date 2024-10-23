<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Cash Payment</title>
    <style>
        body {
            background: linear-gradient(to bottom, #4a4a4a, #1a1a1a);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        h2 {
            font-size: 3em;
            margin: 40px 0;
            text-align: center;
            font-weight: bold;
        }

        .instruction {
            font-size: 1.8em;
            margin: 20px 0;
        }

        .price-container {
            margin: 30px 0;
        }

        .price-container span {
            font-size: 3em;
            font-weight: bold;
        }

        .btn-secondary {
            width: 400px;
            margin-top: 40px;
            margin-bottom: 40px;
            height: 8vh;
            font-size: 1.6em;
            border-radius: 100px;
            background-color: #414761;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #2f3c4d;
            color: white;
        }

        .back-button {
            position: absolute;
            left: 20px;
            top: 20px;
            color: white;
            font-size: 2em;
            text-decoration: none;
            transition: color 0.3s;
        }

        .back-button:hover {
            color: #ccc;
        }
    </style>
</head>

<body>
    <a href="<?= ROOT ?>/kiosk/rent" class="back-button"><i class="fas fa-chevron-left"></i></a>
    <h2>INSERT YOUR PAYMENT BELOW</h2>
    <div class="instruction">Please insert the exact amount</div>
    <div class="price-container">
        <span>Amount:</span>
        <span id="amountDisplay">P<?= isset($_GET['amount']) ? htmlspecialchars($_GET['amount']) : '0' ?></span>
    </div>
    <a href="<?= ROOT ?>/kiosk/setup" class="btn btn-secondary">SET YOUR 6-DIGIT PIN</a>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>

</html>
