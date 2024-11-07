<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="<?= ROOT ?>../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js Library -->
    <style>
        .hover-bg-light:hover {
            background-color: #212529;
            border: 2px solid lightgray;
        }

        .box {
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            background-color: #e4e9f1;
            border-radius: 0.5rem;
        }

        .legend-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }
    </style>
</head>

<body class="d-flex vh-100" style="background-color: #f1f4fb">
    <div class="d-flex flex-column text-white p-3" style="max-width: 250px; position: relative; background-image: url('../public/assets/images/bg.jpg'); background-size: cover;">
        <div class="d-flex align-items-center mb-4 px-4 py-2">
            <img src="../public/assets/images/logo.png" class="me-2" alt="Logo" style="width: 20px; height: 30px;">
            <h3 class="text-white m-0">SmartBox™</h3>
        </div>

        <a href="#" class="d-flex align-items-center text-white px-5 py-3 text-decoration-none hover-bg-light rounded mb-2 w-100">
            <i class="bi bi-house-door me-2"></i>Dashboard
        </a>
        <a href="#" class="d-flex align-items-center text-white px-5 py-3 text-decoration-none hover-bg-light rounded mb-2 w-100">
            <i class="bi bi-lock me-2"></i>Lockers
        </a>
        <a href="#" class="d-flex align-items-center text-white ps-5 py-3 text-decoration-none hover-bg-light rounded mb-2 w-100">
            <i class="bi bi-card-checklist me-2"></i>Maintenance Log
        </a>
        <a href="#" class="d-flex align-items-center text-white px-5 py-3 text-decoration-none hover-bg-light rounded mb-2 w-100">
            <i class="bi bi-credit-card me-2"></i>Transactions
        </a>
        <a href="#" class="d-flex align-items-center text-white px-5 py-3 text-decoration-none hover-bg-light rounded mb-2 w-100">
            <i class="bi bi-person me-2"></i>Users
        </a>
        <a href="#" class="d-flex align-items-center text-white px-5 py-3 text-decoration-none hover-bg-light rounded w-100">
            <i class="bi bi-clock-history me-2"></i>Login History
        </a>

        <div class="mt-auto w-100">
            <a href="#" class="d-flex align-items-center text-white px-5 py-3 text-decoration-none hover-bg-light rounded w-100">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>
        </div>
    </div>

    <div class="flex-fill">
        <div class="d-flex justify-content-between align-items-center bg-white shadow-sm p-3 mb-4">
            <h3 class="m-0">Dashboard</h3>
            <div class="d-flex align-items-center">
                <input type="text" class="form-control me-4" placeholder="Search..." style="width: 200px;">
                <i class="bi bi-bell me-4" style="font-size: 1.5rem;"></i>
                <div class="d-flex align-items-center">
                    <img src="../public/assets/images/s.jpg" alt="Admin Picture" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover;">
                    <span class="fw-bold mx-3">Admin</span>
                </div>
            </div>
        </div>

        <div class="px-4 overflow-auto" style="max-height: calc(100vh - 100px);">
            <div class="row g-3 mb-4">
                <div class="col-3">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <div>Active Rentals</div>
                        <div class="fs-1 fw-bold">1</div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <div>Profit</div>
                        <div class="fs-1 fw-bold">P700</div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <div>Number of Rentals (This Day)</div>
                        <div class="fs-1 fw-bold">7</div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <div>Most Used Locker</div>
                        <div class="fs-1 fw-bold">001</div>
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-6">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <div class="mb-4">Lockers</div>
                        <div class="d-flex gap-5">
                            <div class="ms-5 w-50">
                                <div class="row g-2 mb-2">
                                    <div class="col-12 col-md-8 w-50">
                                        <div class="box bg-secondary text-white" style="height: 6rem;">
                                            <div>001</div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4 w-50">
                                        <div class="row g-2">
                                            <div class="col-12">
                                                <div class="box" style="height: 2.7rem;">
                                                    <div>002</div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="box" style="height: 2.7rem;">
                                                    <div>003</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="box" style="height: 6rem;">
                                            <div>004</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center w-50">
                                <div>
                                    <div class="mb-2">
                                        <div>Available</div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="legend-dot" style="background-color: #e4e9f1;"></div>
                                            <span class="fs-4 fw-bold">3</span>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div>Occupied</div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="legend-dot bg-secondary"></div>
                                            <span class="fs-4 fw-bold">1</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div>Maintenance</div>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="legend-dot bg-warning"></div>
                                            <span class="fs-4 fw-bold">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <div class="mb-3">Usage</div>
                        <canvas id="usageChart" height="112"></canvas>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-12">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <div class="mb-3">Recent</div>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Locker Number</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Amount</th>
                                    <th>Hours</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Alex Carter</td>
                                    <td>09012345678</td>
                                    <td>P50</td>
                                    <td>1 Hour</td>
                                    <td>10/01/2024</td>
                                    <td>7:15 PM</td>
                                    <td>8:15 PM</td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Jamie Lee</td>
                                    <td>09123456789</td>
                                    <td>P40</td>
                                    <td>2 Hours</td>
                                    <td>10/01/2024</td>
                                    <td>6:30 PM</td>
                                    <td>8:30 PM</td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>Sam Rivera</td>
                                    <td>09098765432</td>
                                    <td>P300</td>
                                    <td>3 Hours</td>
                                    <td>10/01/2024</td>
                                    <td>4:00 PM</td>
                                    <td>7:00 PM</td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>Taylor Kim</td>
                                    <td>09876543210</td>
                                    <td>P60</td>
                                    <td>3 Hours</td>
                                    <td>10/01/2024</td>
                                    <td>2:15 PM</td>
                                    <td>5:15 PM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= ROOT ?>../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        var ctx = document.getElementById('usageChart').getContext('2d');
        var usageChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['10 AM', '11 AM', '12 PM', '1 PM', '2 PM', '3 PM', '4 PM', '5 PM', '6 PM', '7 PM', '8 PM', '9 PM'],
                datasets: [{
                    data: [3, 5, 3, 4, 5, 9, 4, 5, 4, 5, 5, 3],
                    borderColor: '#343a40',
                    fill: false,
                    borderWidth: 2.5,
                    pointBackgroundColor: 'white'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>