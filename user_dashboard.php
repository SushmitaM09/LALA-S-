<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header><h1>Dashboard</h1></header>
    <aside class="sidebar">
        <h2>LALA'S LAUNDRY</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Laundry Request</a></li>
            <li><a href="#">Request Status</a></li>
            </ul>
    </aside>
    <main class="content">
        <nav class="breadcrumbs"><p>Dashboard / Overview</p></nav>

        <section class="cards">
            <div class="card-yellow">
                <p> <a href="laundryreq.php">New Request</a></p>
                <a href="#">View Details</a>
            </div>
            
            <div class="card-blue">
                <p> Accpet</p>
                <a href="#">View Details</a>
            </div>

            <div class="card-green">
                <p>Inprogress</p>
                <a href="#">View Details</a>
            </div>

            <div class="card-red">
                <p>Finish</p>
                <a href="#">View Details</a>
            </div>
        </section>

<section class="table-section">
    <h3>Laundry Price(Per UNit)</h3>
    <table>
        <tr class="text">
            <th>Bottom Wear Laundry Price</th>
            <td></td>
        </tr>

        <tr class="text">
            <th>Top Wear Laundry Price</th>
            <td></td>
        </tr>
        <tr class="text">
            <th>Woolen Wear Laundry Price</th>
            <td></td>
        </tr>
        <tr class="text">
            <th>Other Laundry Price</th>
            <td>Depends</td>
        </tr>
    </table>
</section>


    </main>
    <footer><p>Copyright LALA'S LAUNDRY 2024</p></footer>
</body>
</html>