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
        html, body {
            margin: 0;
            height: 100%;
            background: linear-gradient(to bottom, #4a4a4a, #1a1a1a);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Roboto', sans-serif;
        }

        .upper-bg {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 30px 20px;
            max-width: 400px;
            width: 100%;
            margin-top: 40px;
        }

        .label-container {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            flex-direction: column;
            width: 100%;
        }

        .label {
            font-size: 1.6rem;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.2;
        }

        .back-button {
            color: white;
            font-size: 1.6em;
            transition: color 0.3s;
            margin-bottom: 20px;
        }

        .input-container {
            margin-bottom: 20px;
            width: 100%;
        }

        label {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        input.form-control {
            height: 60px;
            font-size: 1.5em;
        }

        .btn-secondary {
            width: 100%;
            height: 60px;
            font-size: 1.5em;
            border-radius: 10px;
            background-color: #414761;
            color: white;
            margin-top: 20px;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #2f3c4d;
        }
    </style>
</head>

<body>

    <div class="upper-bg">
        <div class="label-container">
            <a href="<?= ROOT ?>/mobile" class="back-button" aria-label="Go back"><i class="fas fa-arrow-left"></i></a>
            <label class="label" for="userName">Enter your name<br>and your phone number:</label>
        </div>

        <div class="input-container">
            <label for="userName">NAME</label>
            <input type="text" id="userName" class="form-control" placeholder="Enter your name" required>
        </div>

        <div class="input-container">
            <label for="userPhone">PHONE NUMBER</label>
            <input type="tel" id="userPhone" class="form-control" placeholder="Enter your phone number" required>
        </div>

        <button class="btn btn-secondary" id="proceedButton">PROCEED</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('proceedButton').addEventListener('click', function() {
            const userName = document.getElementById('userName').value;
            const userPhone = document.getElementById('userPhone').value;

            if (userName && userPhone) {
                alert('Credentials saved!');
            } else {
                alert('Please fill in both fields.');
            }
        });
    </script>
</body>

</html>
