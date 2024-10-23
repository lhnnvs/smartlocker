<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Available Lockers</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: linear-gradient(to bottom, #4a4a4a, #1a1a1a);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container {
            max-width: 800px;
            width: 90%;
            margin: 40px auto;
            text-align: center;
        }

        h2 {
            font-size: 2em;
            margin: 1rem 0;
            font-weight: bold;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .box {
            background-color: #4CAF50;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3em;
            border-radius: 10px;
            margin: 10px 5px;
            box-sizing: border-box;
        }

        .box1 {
            height: 30vh;
        }

        .box4 {
            height: 30vh;
            width: 101%;
            margin-left: -4px;
        }

        .box2,
        .box3 {
            height: 14.2vh;
        }

        .btn-secondary {
            transition: background-color 0.3s;
            font-size: 1.5em;
            width: 100%;
            height: 8vh;
            border-radius: 100px;
            background-color: #414761;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #2f3c4d;
        }

        .col-md-6 {
            padding: 5px;
        }

        .rent-now-container {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="mb-4">Available Lockers</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="box box1">001</div>
            </div>
            <div class="col-md-6 d-flex flex-column">
                <div class="box box2 mb-2">002</div>
                <div class="box box3">003</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box box4">004</div>
            </div>
        </div>
        <div class="text-center rent-now-container">
            <a href="<?= ROOT ?>/kiosk/rent" class="btn btn-secondary">
                RENT NOW
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
