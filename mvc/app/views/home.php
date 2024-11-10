<?php
$title = "Dashboard";
include PATH . "partials/sidebar.php"
?>

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
                    <div class="fs-1 fw-bold">P150</div>
                </div>
            </div>

            <div class="col-3">
                <div class="bg-white p-4 rounded shadow-sm">
                    <div>Number of Rentals (Today)</div>
                    <div class="fs-1 fw-bold">3</div>
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
                    <div class="mb-3">Lockers</div>
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
                                    <div>Rented</div>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="legend-dot bg-secondary"></div>
                                        <span class="fs-4 fw-bold">1</span>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <div>Available</div>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="legend-dot" style="background-color: #e4e9f1;"></div>
                                        <span class="fs-4 fw-bold">3</span>
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
                    <canvas id="usageChart" height="108"></canvas>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-12">
                <div class="bg-white p-4 rounded shadow-sm">
                    <div class="mb-1">Recent</div>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Locker</th>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Size</th>
                                <th>Amount</th>
                                <th>Total</th>
                                <th>Hours</th>
                                <th>Date</th>
                                <th>Start</th>
                                <th>End</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>James Smith</td>
                                <td>09182735467</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>P50</td>
                                <td>1 Hour</td>
                                <td>12/08/2024</td>
                                <td>7:12 PM</td>
                                <td>8:12 PM</td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Emily Johnson</td>
                                <td>09174928356</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P60</td>
                                <td>3 Hours</td>
                                <td>12/08/2024</td>
                                <td>12:50 PM</td>
                                <td>3:50 PM</td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Michael Brown</td>
                                <td>09321648759</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>P40</td>
                                <td>2 Hours</td>
                                <td>12/08/2024</td>
                                <td>10:03 AM</td>
                                <td>12:03 PM</td>
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
    const today = new Date();
    const weekLabels = [];

    for (let i = 0; i < 14; i++) {
        let labelDate = new Date(today);
        labelDate.setDate(today.getDate() - (13 - i));
        const date = labelDate.getDate();
        const month = labelDate.toLocaleString('en-US', {
            month: 'short'
        });
        weekLabels.push(`${month} ${date}`);
    }

    var ctx = document.getElementById('usageChart').getContext('2d');
    var usageChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: weekLabels,
            datasets: [{
                data: [3, 5, 3, 4, 5, 9, 4, 5, 4, 5, 4, 5, 5, 3],
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