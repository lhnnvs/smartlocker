<?php
$title = "Lockers";
include PATH . "partials/sidebar.php"
?>

    <div class="px-4 overflow-auto" style="max-height: calc(100vh - 100px);">
        <div class="row g-3">
            <div class="col-12">
                <div class="bg-white p-4 rounded shadow-sm">
                    <div class="d-flex justify-content-between mb-3 w-100">
                        <div class="d-flex gap-2">
                            <div class="fw-bold">Showing:</div>
                            <div class="text-decoration-underline">All (4)</div>
                        </div>
                    </div>
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Locker Number</th>
                                <th>Size</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Access</th>
                                <th>Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Medium</td>
                                <td>P50</td>
                                <td>Rented</td>
                                <td>Locked</td>
                                <td>
                                    <i class="bi bi-lock me-2" title="Lock"></i>
                                    <i class="bi bi-pencil-square me-2" title="Edit"></i>
                                    <i class="bi bi-trash" title="Delete"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>Available</td>
                                <td>Locked</td>
                                <td>
                                    <i class="bi bi-lock" title="Lock"></i>
                                    <i class="bi bi-pencil-square" title="Edit" style="margin-left: 10px;"></i>
                                    <i class="bi bi-trash" title="Delete" style="margin-left: 10px;"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Small</td>
                                <td>P20</td>
                                <td>Available</td>
                                <td>Locked</td>
                                <td>
                                    <i class="bi bi-lock" title="Lock"></i>
                                    <i class="bi bi-pencil-square" title="Edit" style="margin-left: 10px;"></i>
                                    <i class="bi bi-trash" title="Delete" style="margin-left: 10px;"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Large</td>
                                <td>P100</td>
                                <td>Available</td>
                                <td>Locked</td>
                                <td>
                                    <i class="bi bi-lock" title="Lock"></i>
                                    <i class="bi bi-pencil-square" title="Edit" style="margin-left: 10px;"></i>
                                    <i class="bi bi-trash" title="Delete" style="margin-left: 10px;"></i>
                                </td>
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
</body>

</html>