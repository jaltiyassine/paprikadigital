<?php
require_once "../config/connect_db.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];

    $stmt = $db->prepare("SELECT * FROM project_requests WHERE id = :id");
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $project_request = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$project_request) {
        echo "<p class='text-light'>Project request not found.</p>";
        exit;
    }
} else {
    echo "<p class='text-light'>Invalid ID.</p>";
    exit;
}
?>
<div class="container mt-5">
    <h1 class="mb-4 text-light">Project Details <span class="text-info">#<?= $project_request['id'] ?></span></h1>
    <a href="manager.php?s=projects" class="btn btn-primary mb-4"><i class="bi bi-arrow-left-circle"></i>&nbsp;Back to List</a>
    <table class="table table-dark table-striped">
        <tr>
            <th>ID</th>
            <td><?= $project_request['id'] ?></td>
        </tr>
        <tr>
            <th>Company Name</th>
            <td><?= $project_request['company_name'] ?></td>
        </tr>
        <tr>
            <th>Full Name</th>
            <td><?= $project_request['full_name'] ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= $project_request['email'] ?></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><?= $project_request['phone'] ?: 'N/A' ?></td>
        </tr>
        <tr>
            <th>Project Type</th>
            <td><?= $project_request['project_type'] ?></td>
        </tr>
        <tr>
            <th>Description</th>
            <td class="text-wrap" style="max-height: 300px; overflow-y: auto; padding: 10px; white-space: pre-wrap;">
                <?= nl2br(htmlspecialchars($project_request['description'])) ?>
            </td>
        </tr>
        <tr>
            <th>Budget Range</th>
            <td>$<?= $project_request['budget_min'] ?> - $<?= $project_request['budget_max'] ?></td>
        </tr>
        <tr>
            <th>Timeline</th>
            <td><?= $project_request['timeline'] ?></td>
        </tr>
        <tr>
            <th>Preferred</th>
            <td><?= $project_request['preferred'] ?: 'N/A' ?></td>
        </tr>
        <tr>
            <th>Attached File</th>
            <td>
                <?php if ($project_request['attached_file']): ?>
                    <a href="../uploads/<?= $project_request['attached_file'] ?>" target="_blank"><?= $project_request['attached_file'] ?></a>
                <?php else: ?>
                    No file attached.
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <?php
                $created_at = new DateTime($project_request['created_at']);
                $now = new DateTime();
                $formatted_date = $created_at->format('F j, Y, g:i a');
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
            <th>Created At</th>
            <td>
                <?= $formatted_date ?>&emsp;(<?= $time_passed ?>)
            </td>
        </tr>
    </table>
    <?php if($project_request['status'] == "pending"): ?>
        <a class="btn btn-danger" onclick="return confirm('are you sure?')" href="delete.php?id=<?= $project_request['id'] ?>"><i class="bi bi-x-circle"></i>&nbsp;Delete</a>&emsp;
        <a class="btn btn-success" href="approve.php?id=<?= $project_request['id'] ?>"><i class="bi bi-check-circle"></i>&nbsp;Approve</a>
    <?php elseif($project_request['status'] == "approved"): ?>
        <a class="btn btn-danger disabled "><i class="bi bi-x-circle"></i>&nbsp;Delete</a>&emsp;
        <a class="btn btn-info" href="finish.php?id=<?= $project_request['id'] ?>"><i class="bi bi-check-circle"></i>&nbsp;Finish</a>
    <?php else: ?>
        <a class="btn btn-danger disabled "><i class="bi bi-x-circle"></i>&nbsp;Delete</a>&emsp;
    <?php endif ?>
</div>