<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renting Process</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="d-flex min-vh-100" style="background-color: #333">
    <div class="container d-flex flex-column flex-fill text-white fs-3 px-5 py-4" style="max-width: 768px; background-image: url('../assets/images/bg.jpg'); background-size: cover;">
        <div class="d-flex justify-content-between">
            <a href="<?= ROOT ?>/kiosk" class="text-white"><i class="bi bi-chevron-left"></i></a>
            <div id="currentTime"></div>
        </div>
        <div class="d-flex flex-fill align-items-center justify-content-center px-5">
            <div class="w-100">
                <div class="text-center">
                    <h1 class="fw-bold border-bottom border-1 pb-5">
                        <?php
                        if (isset($_GET['locker'], $_GET['size'], $_GET['price'])) {
                            $locker = htmlspecialchars($_GET['locker']);
                            $size = htmlspecialchars($_GET['size']);
                            $price = htmlspecialchars($_GET['price']);
                            echo "LOCKER 00{$locker}";
                        } else {
                            echo "LOCKER";
                        }
                        ?>
                    </h1>
                </div>

                <div class="d-flex justify-content-between mt-4 w-100">
                    <div class="fw-bold" id="sizeDisplay"><?= isset($size) ? ucfirst($size) : 'Size' ?></div>
                    <div class="fw-bold" id="amountDisplay">P<?= isset($price) ? $price : '0' ?></div>
                </div>

                <div class="mt-5">
                    <label for="timeSelect" class="text-start text-light">Select a time</label>
                    <div class="mt-3">
                        <select class="border-0 rounded-1 p-2 w-100" id="timeSelect">
                            <option value="" disabled selected>Select time</option>
                            <?php for ($i = 1; $i <= 12; $i++): ?>
                                <option value="<?= $i ?>"><?= $i ?> Hour<?= $i > 1 ? 's' : '' ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>

                <div class="mt-5">
                    <label for="paymentSelect" class="text-start text-light">Payment method</label>
                    <div class="mt3">
                        <select class="border-0 rounded-1 p-2 w-100" id="paymentSelect">
                            <option value="" disabled selected>Select payment</option>
                            <option value="gcash">GCash</option>
                            <option value="cash">Cash</option>
                        </select>
                    </div>
                </div>

                <button class="btn btn-secondary border-0 rounded-pill text-white fs-3 mt-5 w-100" id="payButton" style="background-color: #3a4058" disabled>PAY NOW</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            const basePrice = parseFloat("<?= isset($price) ? $price : '0' ?>");
            const amountDisplay = $('#amountDisplay');
            const payButton = $('#payButton');
            const paymentSelect = $('#paymentSelect');
            const locker = "<?= isset($_GET['locker']) ? $_GET['locker'] : '' ?>";

            function updatePayButtonState() {
                const selectedHours = parseInt($('#timeSelect').val());
                const paymentMethod = paymentSelect.val();
                const isTimeSelected = !isNaN(selectedHours);
                payButton.prop('disabled', locker === '' || !isTimeSelected || paymentMethod === null);
            }

            $('#timeSelect').on('change', function() {
                const selectedHours = parseInt($(this).val());
                const totalPrice = (basePrice * selectedHours).toFixed(2);
                amountDisplay.text(`P${totalPrice}`);

                updatePayButtonState();
            });

            paymentSelect.on('change', function() {
                updatePayButtonState();
            });

            payButton.on('click', function() {
                const paymentMethod = paymentSelect.val();
                const selectedHours = parseInt($('#timeSelect').val());
                const totalPrice = (basePrice * selectedHours).toFixed(2);

                if (paymentMethod === 'gcash') {
                    window.location.href = "<?= ROOT ?>/kiosk/gcash";
                } else if (paymentMethod === 'cash') {
                    window.location.href = "<?= ROOT ?>/kiosk/cash?amount=" + totalPrice;
                }
            });
        });
    </script>

</body>

</html>
