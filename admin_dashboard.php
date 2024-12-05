<?php
include 'config.php';

// Handle Approve/Cancel actions
if (isset($_GET['action']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $action = $_GET['action'];

    if ($action === 'approve') {
        $status = 'Approved';
    } elseif ($action === 'cancel') {
        $status = 'Cancelled';
    }

    $updateQuery = "UPDATE laundry_requests SET status = '$status' WHERE id = $id";
    mysqli_query($conn, $updateQuery);
}


$totalQuery = "SELECT 
    COUNT(*) AS total_requests,
    SUM(status = 'Pending') AS pending,
    SUM(status = 'Approved') AS approved,
    SUM(status = 'Cancelled') AS cancelled
    FROM laundry_requests";
$totalResult = mysqli_query($conn, $totalQuery);
$counts = mysqli_fetch_assoc($totalResult);


$fetchQuery = "SELECT * FROM laundry_requests ORDER BY date DESC";
$requestsResult = mysqli_query($conn, $fetchQuery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    <div class="summary-cards">
        <div class="card">
            <h3>Total Requests</h3>
            <p><?php echo $counts['total_requests']; ?></p>
        </div>
        <div class="card">
            <h3>Pending Requests</h3>
            <p><?php echo $counts['pending']; ?></p>
        </div>
        <div class="card">
            <h3>Approved Requests</h3>
            <p><?php echo $counts['approved']; ?></p>
        </div>
        <div class="card">
            <h3>Cancelled Requests</h3>
            <p><?php echo $counts['cancelled']; ?></p>
        </div>
    </div>
    <main>
        <h2>Manage Laundry Requests</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Top Wear Names</th>
                    <th>Bottom Wear Names</th>
                    <th>Service Type</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($request = mysqli_fetch_assoc($requestsResult)): ?>
                    <tr>
                        <td><?php echo $request['id']; ?></td>
                        <td><?php echo $request['full_name']; ?></td>
                        <td><?php echo $request['address']; ?></td>
                        <td><?php echo $request['date']; ?></td>
                        <td><?php echo $request['top_wear_names']; ?></td>
                        <td><?php echo $request['bottom_wear_names']; ?></td>
                        <td><?php echo $request['service_type']; ?></td>
                        <td><?php echo $request['description']; ?></td>
                        <td><?php echo $request['status']; ?></td>
                        <td>
                            <?php if ($request['status'] === 'Pending'): ?>
                                <a href="?action=approve&id=<?php echo $request['id']; ?>" class="approve-btn">Approve</a>
                                <a href="?action=cancel&id=<?php echo $request['id']; ?>" class="cancel-btn">Cancel</a>
                            <?php else: ?>
                                <span class="status-label"><?php echo $request['status']; ?></span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>Copyright LALA'S LAUNDRY 2024</p>
    </footer>
</body>
</html>
