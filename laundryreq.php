<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['full_name'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $topWearNames = $_POST['top_wear_names'];
    $bottomWearNames = $_POST['bottom_wear_names'];
    $serviceType = $_POST['service_type'];
    $description = $_POST['description'];

   
    $query = "INSERT INTO laundry_requests (full_name, address, date, top_wear_names, bottom_wear_names, service_type, description) 
              VALUES ('$fullName', '$address', '$date', '$topWearNames', '$bottomWearNames', '$serviceType', '$description')";

    if (mysqli_query($conn, $query)) {
        echo "<p>Request submitted successfully!</p>";
    } else {
        echo "<p>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Laundry Request</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="form-container">
        <h1>New Laundry Request</h1>
        <form action="" method="post">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="top_wear_names">Top Wear Names:</label>
            <input type="text" id="top_wear_names" name="top_wear_names" placeholder="Enter top wear names" required>

            <label for="bottom_wear_names">Bottom Wear Names:</label>
            <input type="text" id="bottom_wear_names" name="bottom_wear_names" placeholder="Enter bottom wear names" required>

            <label for="service_type">Service Type:</label>
            <select id="service_type" name="service_type" required>
                <option value="Pickup">Pickup</option>
                <option value="Deliver">Deliver</option>
            </select>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" placeholder="Add any additional details or instructions"></textarea>

            <button type="submit" class="form-btn">Submit Request</button>
        </form>
    </div>
</body>
</html>
