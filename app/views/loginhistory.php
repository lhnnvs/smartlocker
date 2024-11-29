<?php
$title = "Login History";
include "sidebar.php";
?>

<div class="px-4 overflow-auto" style="max-height: calc(100vh - 100px);">
    <div class="row g-3">
        <div class="col-12">
            <div class="bg-white p-4 rounded shadow-sm">
                <div class="d-flex justify-content-between mb-1 w-100">
                    <div class="d-flex gap-2">
                        <div class="fw-bold">Showing:</div>
                        <div class="text-decoration-underline">All</div>
                    </div>
                    <input type="text" class="form-control border-secondary me-4" placeholder="⌕ Search" style="width: 200px;">
                </div>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Account</th>
                            <th>Last Seen</th>
                            <th>Login Time</th>
                            <th>Device</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img class="rounded-circle me-3" height="30px" width="30px" src="assets/images/s.jpg">Jameson Lee</td>
                            <td>3 seconds ago</td>
                            <td>12/08/2024 9:00 AM</td>
                            <td>Chrome 124, Windows</td>
                            <td>Malolos, Philippines</td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle me-3" height="30px" width="30px" src="assets/images/s.jpg">Jameson Lee</td>
                            <td>1 day ago</td>
                            <td>12/07/2024 8:54 AM</td>
                            <td>Chrome 124, Windows</td>
                            <td>Malolos, Philippines</td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle me-3" height="30px" width="30px" src="assets/images/s.jpg">Jameson Lee</td>
                            <td>2 days ago</td>
                            <td>12/06/2024 8:55 AM</td>
                            <td>Chrome 124, Windows</td>
                            <td>Malolos, Philippines</td>
                        </tr>
                        <tr>
                            <td><img class="rounded-circle me-3" height="30px" width="30px" src="assets/images/s.jpg">Jameson Lee</td>
                            <td>3 days ago</td>
                            <td>12/05/2024 8:30 AM</td>
                            <td>Chrome 124, Windows</td>
                            <td>Malolos, Philippines</td>
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