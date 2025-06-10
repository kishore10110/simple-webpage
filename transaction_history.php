<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History - Fuel Management</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
        }

        .sidebar {
            min-height: 100vh;
            background: rgba(52, 58, 64, 0.95);
            color: white;
            padding-top: 20px;
            backdrop-filter: blur(10px);
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            transition: all 0.3s ease;
        }

        .sidebar a:hover {
            background: rgba(73, 80, 87, 0.9);
            transform: translateX(5px);
        }

        .main-content {
            padding: 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .header {
            background: rgba(52, 58, 64, 0.95);
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .fuel-summary {
            padding: 20px;
            margin-bottom: 20px;
        }

        .fuel-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .fuel-value {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .fuel-label {
            color: #6c757d;
            font-size: 0.9rem;
        }

        .transaction-table {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            overflow: hidden;
        }

        .transaction-table th {
            background: rgba(52, 58, 64, 0.95);
            color: white;
            border: none;
        }

        .transaction-table td {
            vertical-align: middle;
        }

        .badge {
            padding: 8px 12px;
            font-size: 0.8rem;
        }

        .date-filter {
            background: rgba(255, 255, 255, 0.95);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h3 class="text-center mb-4">Fuel Management</h3>
                <nav>
                    <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                    <a href="fuel_management.php"><i class="fas fa-gas-pump"></i> New Transaction</a>
                    <a href="transaction_history.php" class="active"><i class="fas fa-history"></i> Transaction History</a>
                    <a href="#"><i class="fas fa-chart-bar"></i> Reports</a>
                    <a href="settings.php"><i class="fas fa-cog"></i> Settings</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 main-content">
                <div class="header">
                    <h4><i class="fas fa-history"></i> Transaction History</h4>
                </div>

                <!-- Date Filter -->
                <div class="date-filter">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <h5 class="mb-0">This Month's Summary</h5>
                        </div>
                        <div class="col-md-8 text-right">
                            <div class="btn-group">
                                <button class="btn btn-outline-primary active">This Month</button>
                                <button class="btn btn-outline-primary">Last Month</button>
                                <button class="btn btn-outline-primary">Custom Range</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fuel Summary Cards -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card fuel-summary">
                            <div class="text-center">
                                <div class="fuel-icon text-primary">
                                    <i class="fas fa-gas-pump"></i>
                                </div>
                                <div class="fuel-value">₹2,45,000</div>
                                <div class="fuel-label">Petrol Sales</div>
                                <small class="text-success"><i class="fas fa-arrow-up"></i> 12% from last month</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card fuel-summary">
                            <div class="text-center">
                                <div class="fuel-icon text-success">
                                    <i class="fas fa-oil-can"></i>
                                </div>
                                <div class="fuel-value">₹1,85,000</div>
                                <div class="fuel-label">Diesel Sales</div>
                                <small class="text-success"><i class="fas fa-arrow-up"></i> 8% from last month</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card fuel-summary">
                            <div class="text-center">
                                <div class="fuel-icon text-warning">
                                    <i class="fas fa-tint"></i>
                                </div>
                                <div class="fuel-value">₹45,000</div>
                                <div class="fuel-label">Oil Sales</div>
                                <small class="text-danger"><i class="fas fa-arrow-down"></i> 3% from last month</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card fuel-summary">
                            <div class="text-center">
                                <div class="fuel-icon text-info">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <div class="fuel-value">₹75,000</div>
                                <div class="fuel-label">Speed Petrol Sales</div>
                                <small class="text-success"><i class="fas fa-arrow-up"></i> 15% from last month</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transaction Table -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Recent Transactions</h5>
                        <div class="table-responsive">
                            <table class="table table-hover transaction-table">
                                <thead>
                                    <tr>
                                        <th>Date & Time</th>
                                        <th>Vehicle No.</th>
                                        <th>Fuel Type</th>
                                        <th>Quantity (L)</th>
                                        <th>Amount (₹)</th>
                                        <th>Payment Mode</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2024-03-15 10:30</td>
                                        <td>TN 01 AB 1234</td>
                                        <td>Petrol</td>
                                        <td>10.5</td>
                                        <td>₹1,050</td>
                                        <td>UPI</td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>2024-03-15 10:15</td>
                                        <td>TN 02 CD 5678</td>
                                        <td>Diesel</td>
                                        <td>15.0</td>
                                        <td>₹1,500</td>
                                        <td>Cash</td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>2024-03-15 10:00</td>
                                        <td>TN 03 EF 9012</td>
                                        <td>Speed Petrol</td>
                                        <td>8.0</td>
                                        <td>₹960</td>
                                        <td>Card</td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>2024-03-15 09:45</td>
                                        <td>TN 04 GH 3456</td>
                                        <td>Oil</td>
                                        <td>1.0</td>
                                        <td>₹450</td>
                                        <td>UPI</td>
                                        <td><span class="badge badge-success">Completed</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>