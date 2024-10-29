<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Available Lockers</title>
    <style>
        html, body {
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
            font-size: 2.5em;
            margin: 1rem 0;
            font-weight: bold;
        }

        .row {
            display: flex;
            justify-content: center;
        }

        .box {
            background-color: #4CAF50;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3em;
            border-radius: 15px;
            margin: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .box:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        .btn-secondary {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 60px;
            border: none;
            border-radius: 30px;
            background-color: #3a4058;
            color: white;
            font-size: 1.8em;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-secondary:hover {
            background-color: #5c637d;
            transform: scale(1.05);
        }

        .col-md-6 {
            padding: 5px;
        }

        .rent-now-container {
            margin-top: 30px;
        }

        .box1 {
            height: 30vh;
        }

        .box2, .box3 {
            height: 14.2vh;
        }

        .box4 {
            height: 30vh;
            width: 100%;
            margin-left: 0;
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
            <a href="<?= ROOT ?>/kiosk/rent" class="btn btn-secondary">RENT NOW</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
