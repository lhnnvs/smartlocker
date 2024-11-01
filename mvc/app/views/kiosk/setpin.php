<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIN Entry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-image: url('../assets/images/bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .container {
            max-width: 600px;
        }

        .flex-fill {
            flex: 1;
        }

        .digit {
            width: 3rem;
            font-size: 4rem;
        }

        .keypad {
            max-width: 400px;
        }

        .col-4 {
            display: flex;
            justify-content: center;
        }

        .keypad button {
            width: 8rem;
            height: 4rem;
            font-size: 2rem;
            border-radius: 50rem;
            font-weight: bold;
            margin: 1rem;
        }
    </style>
</head>

<body class="d-flex flex-column justify-content-center text-white min-vh-100 fs-3">
    <div class="container d-flex flex-fill flex-column py-4" style="background-image: url('../assets/images/bg.jpg');">
        <div class="d-flex justify-content-between">
            <a href="<?= ROOT ?>/kiosk/rent" style="color: white;"><i class="bi bi-chevron-left"></i></a>
            <div></div>
        </div>
        <div class="d-flex flex-fill align-items-center justify-content-center text-center">
            <div class="d-flex flex-column align-items-center">
                <label class="" for="pinDisplay">Enter 6-digit PIN:</label>
                <div class="d-flex">
                    <div class="d-flex ms-5" id="pinDisplay">
                        <div class="digit" id="digit1">_</div>
                        <div class="digit" id="digit2">_</div>
                        <div class="digit" id="digit3">_</div>
                        <div class="digit" id="digit4">_</div>
                        <div class="digit" id="digit5">_</div>
                        <div class="digit" id="digit6">_</div>
                    </div>
                    <button class="bg-transparent border-0 ms-3" id="toggleButton" onclick="toggleShow()" style="color: lightgray;">
                        <i class="bi bi-eye-fill" id="eyeIcon"></i>
                    </button>
                </div>
                <button class="btn btn-light border-0 rounded-1 fw-bold fs-3 mt-4 w-75" id="confirmButton" onclick="window.location.href='<?= ROOT ?>/kiosk/qr'">Confirm</button>
            </div>
        </div>
    </div>
    <div class="d-flex flex-fill">
        <div class="container d-flex align-items-center bg-white">
            <div class="keypad d-flex flex-wrap justify-content-center mx-auto">
                <div class="col-4"><button class="btn btn-light" onclick="addDigit(1)">1</button></div>
                <div class="col-4"><button class="btn btn-light" onclick="addDigit(2)">2</button></div>
                <div class="col-4"><button class="btn btn-light" onclick="addDigit(3)">3</button></div>
                <div class="col-4"><button class="btn btn-light" onclick="addDigit(4)">4</button></div>
                <div class="col-4"><button class="btn btn-light" onclick="addDigit(5)">5</button></div>
                <div class="col-4"><button class="btn btn-light" onclick="addDigit(6)">6</button></div>
                <div class="col-4"><button class="btn btn-light" onclick="addDigit(7)">7</button></div>
                <div class="col-4"><button class="btn btn-light" onclick="addDigit(8)">8</button></div>
                <div class="col-4"><button class="btn btn-light" onclick="addDigit(9)">9</button></div>
                <div class="col-4"></div>
                <div class="col-4"><button class="btn btn-light" onclick="addDigit(0)">0</button></div>
                <div class="col-4"><button class="btn btn-light" onclick="removeDigit()">&#x232B;</button></div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        let pin = "";
        let isShowing = false;

        function addDigit(digit) {
            if (pin.length < 6) {
                pin += digit;
                updateDisplay();
            }
        }

        function removeDigit() {
            pin = pin.slice(0, -1);
            updateDisplay();
        }

        function updateDisplay() {
            for (let i = 1; i <= 6; i++) {
                const digitElement = document.getElementById(`digit${i}`);
                digitElement.innerText = isShowing ? (pin[i - 1] || "_") : (pin[i - 1] ? "*" : "_");
            }
        }

        function toggleShow() {
            isShowing = !isShowing;
            const eyeIcon = document.getElementById('eyeIcon');
            eyeIcon.className = isShowing ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill';
            updateDisplay();
        }

        function confirmPin() {
            if (pin.length === 6) {
                alert("PIN saved!");
                setTimeout(() => {
                    window.location.href = "<?= ROOT ?>/kiosk/qr";
                }, 1000);
            } else {
                alert("Please enter a 6-digit PIN.");
            }
        }

        document.getElementById('confirmButton').onclick = confirmPin;
    </script>
</body>

</html>