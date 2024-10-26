<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Renting Process</title>
    <style>
        html, body {
            margin: 0;
            height: 100%;
            width: 100%;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to bottom, #4a4a4a, #1a1a1a);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .container {
            max-width: 800px;
            width: 90%;
            padding: 20px;
            margin: 20px;
        }

        h2 {
            font-size: 2.5em;
            margin-bottom: 1.5rem;
            font-weight: bold;
            text-align: center;
        }

        .price-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 1rem 0;
        }

        .amount-label, .amount-value {
            font-weight: bold;
            font-size: 2em;
        }

        .label {
            text-align: left;
            margin-top: 1rem;
            font-size: 1.8em;
        }

        .dropdown-container {
            width: 100%;
            text-align: left;
            margin-bottom: 2rem;
        }

        .btn-secondary {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 60px;
            margin-top: 20px;
            border: none;
            border-radius: 30px;
            background-color: #414761;
            color: white;
            font-size: 1.8em;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-secondary:hover {
            background-color: #2f3c4d;
            transform: scale(1.05);
        }

        .dropdown-container select {
            width: 100%;
            height: 60px;
            padding: 10px;
            font-size: 1.8em;
            border-radius: 10px;
            color: #000;
            background-color: #ffffff;
        }

        select option[disabled] {
            color: #aaa;
        }

        .time-display {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 1.8em;
        }

        .back-button {
            position: absolute;
            left: 5px;
            top: 5px;
            color: white;
            padding: 15px;
            text-decoration: none;
            font-size: 1.8em;
            transition: color 0.3s;
        }

        .back-button:hover {
            color: #ccc;
        }
    </style>
</head>

<body>
    <div class="time-display" id="currentTime"></div>
    <a href="<?= ROOT ?>/kiosk" class="back-button"><i class="fas fa-chevron-left"></i></a>
    <div class="container">
        <h2 class="mb-4">SELECT A LOCKER</h2>

        <div class="dropdown-container">
            <select id="lockerSelect" class="form-control" aria-label="Select locker">
                <option value="" disabled selected>Select locker</option>
                <option value="001" data-price="50">Locker 001 - Medium</option>
                <option value="002" data-price="20">Locker 002 - Small</option>
                <option value="003" data-price="20">Locker 003 - Small</option>
                <option value="004" data-price="100">Locker 004 - Large</option>
            </select>
        </div>

        <div class="price-container">
            <span class="amount-label">Amount:</span>
            <span id="amountDisplay" class="amount-value">P0</span>
        </div>

        <div class="dropdown-wrapper">
            <label class="label" for="timeSelect">Select a time</label>
            <div class="dropdown-container">
                <select id="timeSelect" class="form-control" aria-label="Select time">
                    <option value="" disabled selected>Select time</option>
                    <option value="1">1 Hour</option>
                    <option value="2">2 Hours</option>
                    <option value="3">3 Hours</option>
                    <option value="4">4 Hours</option>
                    <option value="5">5 Hours</option>
                    <option value="6">6 Hours</option>
                    <option value="7">7 Hours</option>
                    <option value="8">8 Hours</option>
                    <option value="9">9 Hours</option>
                    <option value="10">10 Hours</option>
                    <option value="11">11 Hours</option>
                    <option value="12">12 Hours</option>
                </select>
            </div>
        </div>

        <div class="dropdown-wrapper">
            <label class="label" for="paymentSelect">Payment method</label>
            <div class="dropdown-container">
                <select id="paymentSelect" class="form-control" aria-label="Select payment method">
                    <option value="" disabled selected>Select payment</option>
                    <option value="gcash">GCash</option>
                    <option value="cash">Cash</option>
                </select>
            </div>
        </div>

        <button id="payButton" class="btn-secondary">PAY NOW</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            let lockerPrice = 0;

            function updateAmount() {
                const selectedHours = $('#timeSelect').val() || 1;
                const totalAmount = lockerPrice * selectedHours;
                $('#amountDisplay').text(`P${totalAmount.toFixed(2)}`);
            }

            $('#lockerSelect').change(function () {
                const selectedOption = $(this).find(':selected');
                lockerPrice = selectedOption.data('price') || 0;
                updateAmount();
                updateTimeOptions();
            });

            $('#timeSelect').change(function () {
                updateAmount();
            });

            $('#payButton').click(function (e) {
                e.preventDefault();
                const lockerSelected = $('#lockerSelect').val();
                const timeSelected = $('#timeSelect').val();
                const paymentSelected = $('#paymentSelect').val();

                if (!lockerSelected || !timeSelected || !paymentSelected) {
                    alert("Please select a locker, time, and payment method before proceeding.");
                    return;
                }

                const totalAmount = $('#amountDisplay').text().replace('P', '').trim();
                const baseUrl = `<?= ROOT ?>/kiosk/`;
                const paymentType = paymentSelected === 'gcash' ? 'gcash' : 'cash';

                window.location.href = `${baseUrl}${paymentType}?locker=${lockerSelected}&time=${timeSelected}&amount=${totalAmount}`;
            });

            function updateTime() {
                const now = new Date();
                const options = { hour: '2-digit', minute: '2-digit' };
                $('#currentTime').text(now.toLocaleTimeString([], options));
                updateTimeOptions();
            }

            function updateTimeOptions() {
                const now = new Date();
                const currentHour = now.getHours();
                const timeSelect = $('#timeSelect');

                timeSelect.find('option').prop('disabled', false);

                for (let i = 1; i <= 12; i++) {
                    if (currentHour + i > 20) {
                        timeSelect.find(`option[value="${i}"]`).prop('disabled', true);
                    }
                }
            }

            setInterval(updateTime, 60000);
            updateTime();
        });
    </script>
</body>

</html>
