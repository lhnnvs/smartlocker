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
            max-width: 390px;
        }

        .back-button {
            color: white;
            font-size: 1.5em;
        }

        .label {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 1rem;
            color: white;
        }

        .input-container {
            margin-top: 2rem;
        }

        label {
            font-size: 1rem;
            color: lightgray;
        }

        input.form-control {
            height: 3.5rem;
            font-size: 1.5em;
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
        <a href="<?= ROOT ?>/mobile" class="back-button"><i class="fas fa-arrow-left"></i></a>
        <label class="label" for="userName">Enter your name<br>and your phone number:</label>
        <div class="input-container">
            <label for="userName">NAME</label>
            <input type="text" id="userName" class="form-control" placeholder="Enter your name" required>
        </div>
        <div class="input-container">
            <label for="userPhone">PHONE NUMBER</label>
            <input type="tel" id="userPhone" class="form-control" placeholder="Enter your phone number" required inputmode="numeric" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
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

                window.location.href = `<?= ROOT ?>/mobile/home?name=${encodeURIComponent(userName)}&phone=${encodeURIComponent(userPhone)}`;
            } else {
                alert('Please fill in both fields.');
            }
        });
    </script>
</body>

</html>