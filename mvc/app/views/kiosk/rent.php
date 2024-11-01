<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Renting Process</title>
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

        select option[disabled] {
            color: lightgray;
        }

        .btn-secondary {
            background-color: #3a4058;
        }
    </style>
</head>

<body class="d-flex text-white min-vh-100 fs-3 p-5">
    <div class="container d-flex flex-column">
        <div class="d-flex justify-content-between">
            <a href="<?= ROOT ?>/kiosk" style="color: white;"><i class="bi bi-chevron-left"></i></a>
            <label id="currentTime"></label>
        </div>
        <div class="d-flex flex-fill align-items-center justify-content-center w-100">
            <div class="w-100">
                <div class="text-center">
                    <h2 class="fw-bold">SELECT A LOCKER</h2>
                    <div class="mt-4">
                        <select class="border-0 rounded-1 p-2 w-100" id="lockerSelect">
                            <option value="" disabled selected>Select locker</option>
                            <option value="001" data-price="50">Locker 001 - Medium</option>
                            <option value="002" data-price="20">Locker 002 - Small</option>
                            <option value="003" data-price="20">Locker 003 - Small</option>
                            <option value="004" data-price="100">Locker 004 - Large</option>
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4 w-100">
                    <label class="fw-bold">Amount:</label>
                    <label class="fw-bold" id="amountDisplay">P0</label>
                </div>

                <div class="mt-4">
                    <label class="text-start text-light" for="timeSelect">Select a time</label>
                    <div class="mt-2">
                        <select class="border-0 rounded-1 p-2 w-100" id="timeSelect">
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

                <div class="mt-4">
                    <label class="text-start text-light" for="paymentSelect">Payment method</label>
                    <div class="mt-2">
                        <select class="border-0 rounded-1 p-2 w-100" id="paymentSelect">
                            <option value="" disabled selected>Select payment</option>
                            <option value="gcash">GCash</option>
                            <option value="cash">Cash</option>
                        </select>
                    </div>
                </div>

                <button class="btn btn-secondary border-0 rounded-pill text-white fs-3 mt-5 w-100" id="payButton" disabled>PAY NOW</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            let lockerPrice = 0;

            function updateAmount() {
                const selectedHours = $('#timeSelect').val() || 1;
                const totalAmount = lockerPrice * selectedHours;
                $('#amountDisplay').text(`P${totalAmount.toFixed(2)}`);
                togglePayButton();
            }

            function togglePayButton() {
                const isReady = $('#lockerSelect').val() && $('#timeSelect').val() && $('#paymentSelect').val();
                $('#payButton').prop('disabled', !isReady);
            }

            $('#lockerSelect').change(function() {
                lockerPrice = $(this).find(':selected').data('price') || 0;
                updateAmount();
                updateTimeOptions();
            });

            $('#timeSelect, #paymentSelect').change(updateAmount);

            $('#payButton').click(function(e) {
                e.preventDefault();
                const params = new URLSearchParams({
                    locker: $('#lockerSelect').val(),
                    time: $('#timeSelect').val(),
                    amount: $('#amountDisplay').text().replace('P', '').trim(),
                    payment: $('#paymentSelect').val()
                });
                window.location.href = `<?= ROOT ?>/kiosk/${params.get('payment')}?${params.toString()}`;
            });

            function updateCurrentTime() {
                $('#currentTime').text(new Date().toLocaleTimeString([], {
                    hour: '2-digit',
                    minute: '2-digit'
                }));
            }

            function updateTimeOptions() {
                const currentHour = new Date().getHours();
                $('#timeSelect option').prop('disabled', false).filter(function() {
                    return currentHour + parseInt($(this).val()) > 20;
                }).prop('disabled', true);
            }

            setInterval(updateCurrentTime, 60000);
            updateCurrentTime();
        });
    </script>

</body>

</html>