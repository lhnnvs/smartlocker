<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIN Entry</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
        }

        .upper-bg {
            flex: 1;
            background: linear-gradient(to bottom, #4a4a4a, #1a1a1a);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            padding: 20px;
        }

        .pin-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .pin-display {
            font-size: 4rem;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            width: 260px;
        }

        .digit {
            width: 40px;
            text-align: center;
            font-size: 3rem;
        }

        .lower-bg {
            flex: 1;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .keypad {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            max-width: 320px;
        }

        .keypad button {
            width: 65px;
            height: 65px;
            font-size: 2rem;
            border-radius: 50%;
            margin: 8px;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        .keypad button:hover {
            background-color: #e9ecef;
        }

        .confirm-container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }

        .confirm-button {
            width: 80%;
            max-width: 280px;
            height: 55px;
            background-color: white;
            color: black;
            border: 1px solid #ccc;
            font-weight: bold;
            transition: background-color 0.2s;
            font-size: 1.5rem;
        }

        .confirm-button:hover {
            background-color: #f8f9fa;
        }

        .toggle-button {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            margin-left: 10px;
        }

        label {
            font-size: 1.5rem;
        }
    </style>
</head>

<body>

    <div class="upper-bg">
        <label class="mb-3" for="pinDisplay">Enter 6-digit PIN:</label>
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
        <div class="confirm-container">
            <button class="btn confirm-button" id="confirmButton">Confirm</button>
        </div>
    </div>

    <div class="lower-bg">
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
            } else {
                alert("Please enter a 6-digit PIN.");
            }
        }

        document.getElementById('confirmButton').onclick = confirmPin;
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>