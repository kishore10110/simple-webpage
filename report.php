<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sales Report</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: gold;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        canvas {
            margin-top: 40px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Monthly Sales Report</h1>

        <table>
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Sales (in inr)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>January</td>
                    <td>₹8,000</td>
                </tr>
                <tr>
                    <td>February</td>
                    <td>₹9,500</td>
                </tr>
                <tr>
                    <td>March</td>
                    <td>₹100,200</td>
                </tr>
                <tr>
                    <td>April</td>
                    <td>₹7,800</td>
                </tr>
                <tr>
                    <td>May</td>
                    <td>₹11,300</td>
                </tr>
                <tr>
                    <td>June</td>
                    <td>₹9,900</td>
                </tr>
            </tbody>
        </table>

        <canvas id="salesChart" width="850" height="400"></canvas>
    </div>

    <script>
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Monthly Sales (USD)',
                    data: [8000, 9500, 10200, 7800, 11300, 9900],
                    backgroundColor: 'rgba(0, 123, 255, 0.2)',
                    borderColor: '#007bff',
                    borderWidth: 2,
                    tension: 0.3,
                    fill: true,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    },
                    title: {
                        display: true,
                        text: 'Sales Trends (First Half of the Year)',
                        font: {
                            size: 18
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: value => '$' + value
                        }
                    }
                }
            }
        });
    </script>

</body>

</html>