<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Retrieve</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(to bottom, #4a4a4a, #1a1a1a);
            color: white;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 390px;
            padding: 1rem;
            background: linear-gradient(to bottom, #4a4a4a, #1a1a1a);
            color: white;
        }

        .label-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 0 1rem;
        }

        .back-button {
            color: white;
            font-size: 1.5em;
        }

        .label {
            font-size: 1.5rem;
            margin-top: 2rem;
        }

        .pin-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
            width: 100%;
            margin-top: 1rem;
        }

        .pin-display {
            display: flex;
            justify-content: space-between;
            width: 15rem;
            margin-left: 3rem;
        }

        .digit {
            font-size: 3rem;
        }

        .toggle-button {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
        }

        .confirm-button {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 3rem 0;
            width: 90%;
            height: 4rem;
            background-color: white;
            color: black;
            border: none;
            font-weight: bold;
            font-size: 1.5rem;
            text-align: center;
        }

        .keypad-bg {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
            width: 100%;
            max-width: 390px;
            padding: 1rem;
            background-color: white;
        }

        .keypad {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin-top: 1rem;
        }

        .keypad button {
            width: 5rem;
            height: 4.5rem;
            margin: 0.5rem;
            font-size: 2rem;
            border-radius: 100%;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="label-container">
            <a href="<?= ROOT ?>/mobile/home" class="back-button"><i class="fas fa-arrow-left"></i></a>
            <label class="label" for="pinDisplay">Enter 6-digit PIN:</label>
            <div></div>
        </div>
        <div class="pin-container">
            <div class="pin-display" id="pinDisplay">
                <div class="digit" id="digit1">_</div>
                <div class="digit" id="digit2">_</div>
                <div class="digit" id="digit3">_</div>
                <div class="digit" id="digit4">_</div>
                <div class="digit" id="digit5">_</div>
                <div class="digit" id="digit6">_</div>
            </div>
            <button class="toggle-button" id="toggleButton" onclick="toggleShow()">
                <i class="fas fa-eye" id="eyeIcon"></i>
            </button>
        </div>
        <a class="btn btn-secondary confirm-button" id="confirmButton" href="#">Confirm</a>
    </div>

    <div class="keypad-bg">
        <div class="keypad">
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
            eyeIcon.className = isShowing ? 'fas fa-eye-slash' : 'fas fa-eye';
            updateDisplay();
        }

        function confirmPin() {
            if (pin.length === 6) {
                alert("PIN confirmed!");
                window.location.href = '<?= ROOT ?>/mobile/terminate';
            } else {
                alert("Please enter a valid 6-digit PIN to proceed.");
            }
        }

        document.getElementById('confirmButton').onclick = confirmPin;
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>