<?php
$title = "Logs";
include PATH . "partials/sidebar.php"
?>

<div class="px-4 overflow-auto" style="max-height: calc(100vh - 100px);">
    <?php if (empty($_SESSION['USER'])): ?>
        <a href="<?= ROOT ?>/login" class="fw-bold text-black text-decoration-none me-4">Login</a>
    <?php else: ?>
        <div class="bg-white p-4 rounded shadow-sm mb-4">
            <form id="logForm">
                <div class="mb-3">
                    <label for="note" class="form-label fw-bold">Endorsement Log</label>
                    <textarea class="form-control" id="note" rows="3" placeholder="Write a log note..." required></textarea>
                </div>
                <button type="submit" class="btn btn-dark px-5">Submit</button>
            </form>
        </div>
        <div class="bg-white p-4 rounded shadow-sm">
            <table class="table table-borderless mt-3">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Log/Note</th>
                        <th>User</th>
                    </tr>
                </thead>
                <tbody id="logTableBody">
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= ROOT ?>../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        let logs = [{
                date: "11/09/2024",
                note: "Lockers inspected. Everything is in order.",
                user: "Jameson Lee"
            },
            {
                date: "12/01/2024",
                note: "Lockers inspected. Everything is in order.",
                user: "Jameson Lee"
            }
        ];

        function formatDate(dateString) {
            const date = new Date(dateString);
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const day = String(date.getDate()).padStart(2, '0');
            const year = date.getFullYear();
            return `${month}/${day}/${year}`;
        }

        function renderLogs() {
            const logTableBody = $('#logTableBody');
            logTableBody.empty();

            logs.slice().reverse().forEach(log => {
                const formattedDate = formatDate(log.date);
                const logRow = `<tr>
                    <td>${formattedDate}</td>
                    <td>${log.note}</td>
                    <td>${log.user}</td>
                </tr>`;
                logTableBody.append(logRow);
            });
        }

        renderLogs();

        $('#logForm').submit(function(e) {
            e.preventDefault();

            const note = $('#note').val().trim();
            const user = "<?= $_SESSION['USER']->firstname ?> <?= $_SESSION['USER']->lastname ?>";

            if (note && user) {
                const newLog = {
                    date: new Date(),
                    note: note,
                    user: user
                };

                logs.push(newLog);
                renderLogs();

                $('#note').val('');
            } else {
                alert('Please fill out both fields.');
            }
        });
    });
</script>
</body>

</html>