<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "petrol_bunk_db");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Last month range
$startDate = date("Y-m-01", strtotime("first day of last month"));
$endDate = date("Y-m-t", strtotime("last day of last month"));

// Fetch sales
$sql = "SELECT sale_date, fuel_type, SUM(litres) AS total_litres, SUM(amount) AS total_amount
        FROM sales
        WHERE sale_date BETWEEN '$startDate' AND '$endDate'
        GROUP BY sale_date, fuel_type
        ORDER BY sale_date ASC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Last Month Sales Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-4">
        <h3 class="mb-4">⛽ Last Month Sales Report (<?= date("F Y", strtotime($startDate)) ?>)</h3>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Date</th>
                    <th>Fuel Type</th>
                    <th>Total Litres</th>
                    <th>Total Amount (₹)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total_litres = 0;
                $total_amount = 0;
                if ($result->num_rows > 0):
                    while ($row = $result->fetch_assoc()):
                        $total_litres += $row['total_litres'];
                        $total_amount += $row['total_amount'];
                ?>
                        <tr>
                            <td><?= $row['sale_date'] ?></td>
                            <td><?= $row['fuel_type'] ?></td>
                            <td><?= $row['total_litres'] ?></td>
                            <td>₹<?= number_format($row['total_amount'], 2) ?></td>
                        </tr>
                    <?php endwhile; ?>
                    <tr class="fw-bold bg-success text-white">
                        <td colspan="2">Total</td>
                        <td><?= number_format($total_litres, 2) ?> L</td>
                        <td>₹<?= number_format($total_amount, 2) ?></td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No sales data found for last month.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>