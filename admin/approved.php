<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['is_admin'])) {
    header("location:index.php");
    exit(0);
}

$query = $db->query("SELECT * FROM project_requests WHERE status = 'approved' ORDER BY id DESC");
$project_requests = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container mt-5">
    <h2 class="mb-4 text-light">Approved Projects List</h2>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Action</th>
                <th>Company</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Project Type</th>
                <th>Budget Min</th>
                <th>Budget Max</th>
                <th>Since</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($project_requests)): ?>
                <tr>
                    <td colspan="8" class="text-center text-light">No projects</td>
                </tr>
            <?php else: ?>
            <?php foreach ($project_requests as $project_request): ?>
                <tr>
                    <td>
                        <a href="manager.php?s=view&id=<?= $project_request['id'] ?>"><i class="bi bi-eye text-info" style="font-size: 1.2rem;"></i></a>
                    </td>
                    <td><?= $project_request['company_name'] ?></td>
                    <td><?= $project_request['full_name'] ?></td>
                    <td><?= $project_request['email'] ?></td>
                    <td><?= $project_request['project_type'] ?></td>
                    <td>$<?= $project_request['budget_min'] ?></td>
                    <td>$<?= $project_request['budget_max'] ?></td>
                    <?php
                        $created_at = new DateTime($project_request['created_at']);
                        $now = new DateTime();
                        $diff = $now->diff($created_at);

                        $time_passed = '';
                        if ($diff->y > 0) {
                            $time_passed = $diff->y . ' year' . ($diff->y > 1 ? 's' : '') . ' ago';
                        } elseif ($diff->m > 0) {
                            $time_passed = $diff->m . ' month' . ($diff->m > 1 ? 's' : '') . ' ago';
                        } elseif ($diff->d > 0) {
                            $time_passed = $diff->d . ' day' . ($diff->d > 1 ? 's' : '') . ' ago';
                        } elseif ($diff->h > 0) {
                            $time_passed = $diff->h . ' hour' . ($diff->h > 1 ? 's' : '') . ' ago';
                        } elseif ($diff->i > 0) {
                            $time_passed = $diff->i . ' minute' . ($diff->i > 1 ? 's' : '') . ' ago';
                        } else {
                            $time_passed = $diff->s . ' second' . ($diff->s > 1 ? 's' : '') . ' ago';
                        }
                    ?>
                    <td><span class="badge badge-warning"><?= $time_passed ?></span></td>
                </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>