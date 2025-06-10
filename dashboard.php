<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANNAI AGENCY</title>
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
            min-height: 10vh;
        }

        .sidebar {
            min-height: 1000vh;
            background: rgba(52, 58, 64, 0.95);
            color: white;
            padding-top: 20px;
            backdrop-filter: blur(10px);
        }

        .sidebar a {
            color: white;
            text-decoration: /var/www/html/test/fuel_management.phpnone;
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
            ANNAI AGENCY transform: translateY(-5px);
        }

        .stat-card {
            padding: 20px;
            margin-bottom: 20px;
        }

        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            ANNAI AGENCY
        }

        .stat-value {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #6c757d;
            font-size: 1rem;
        }

        .profile-section {
            padding: 20px;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid #007bff;
        }

        .wallet-section {
            padding: 20px;
        }

        .transaction-list {
            max-height: 300px;
            overflow-y: auto;
        }

        .transaction-item {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        .transaction-item:last-child {
            border-bottom: none;
        }

        .sales-chart {
            height: 200px;
            padding: 20px;
        }

        .header {
            background: rgba(52, 58, 64, 0.95);
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar">
                <h3 class="text-center mb-4">ANNAI AGENCY</h3>
                <nav>
                    <a href="dashboard.php" class="active"><i class="fas fa-home"></i> Dashboard</a>
                    <a href="fuel_management.php"><i class="fas fa-gas-pump"></i> New Transaction</a>
                    <a href="transaction.php"><i class="fas fa-history"></i> Transaction History</a>
                    <a href="report.php  "><i class="fas fa-chart-bar"></i> Reports</a>
                    <a href="settings.php" fas fa-cog"></i> Settings</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 main-content">
                <div class="header">
                    <h4><i class="fas fa-tachometer-alt"></i> Dashboard</h4>
                </div>

                <!-- Stats Cards -->
                <div class="col">
                    <div class="col-md-3">
                        <div class="card stat-card">
                            <div class="stat-icon text-primary">
                                <i class="fas fa-gas-pump"></i>
                            </div>
                            <div class="stat-value">₹45,2050</div>
                            <div class="stat-label">Today's Sales</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card">
                            <div class="stat-icon text-success">
                                <i class="fas fa-wallet"></i>
                            </div>
                            <div class="stat-value">₹1,25,0000</div>
                            <div class="stat-label">Total Revenue</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card">
                            <div class="stat-icon text-info">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="stat-value">156</div>
                            <div class="stat-label">Vehicles Served</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card stat-card">
                            <div class="stat-icon text-warning">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-value">0</div>
                            <div class="stat-label">Add Staff</div>
                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <meta charset="UTF-8" />
                                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                                <title>Add Staff Member</title>
                                <style>
                                    body {
                                        font-family: Arial, sans-serif;
                                        background-color: #f2f2f2;
                                        padding: 20px;
                                    }

                                    .container {
                                        max-width: 600px;
                                        margin: auto;
                                        background-color: #fff;
                                        padding: 30px;
                                        border-radius: 10px;
                                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                                    }

                                    h2 {
                                        text-align: center;
                                        color: #333;
                                    }

                                    form {
                                        display: flex;
                                        flex-direction: column;
                                    }

                                    label {
                                        margin: 10px 0 5px;
                                        font-weight: bold;
                                    }

                                    input,
                                    select {
                                        padding: 10px;
                                        border: 1px solid #ccc;
                                        border-radius: 6px;
                                        font-size: 16px;
                                    }

                                    button {
                                        margin-top: 20px;
                                        padding: 12px;
                                        background-color: #28a745;
                                        color: white;
                                        border: none;
                                        border-radius: 6px;
                                        font-size: 16px;
                                        cursor: pointer;
                                    }

                                    button:hover {
                                        background-color: #218838;
                                    }
                                </style>
                            </head>

                            <body>

                                <div class="container">
                                    <h2>Add Staff Member</h2>
                                    <form action="/submit-staff" method="POST">
                                        <label for="name">Full Name</label>
                                        <input type="text" id="name" name="name" required>

                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" name="email" required>

                                        <label for="phone">Phone Number</label>
                                        <input type="tel" id="phone" name="phone" required>

                                        <label for="role">Role</label>
                                        <input type="text" id="role" name="role" required>

                                        <label for="department">Department</label>
                                        <select id="department" name="department" required>
                                            <option value="">Select Department</option>
                                            <option value="HR">HR</option>
                                            <option value="Sales">Sales</option>
                                            <option value="IT">IT</option>
                                            <option value="Finance">Finance</option>
                                        </select>

                                        <button type="submit">Add Staff</button>

                                        <html lang="en">
                                    </form>
                                </div>

                            </body>

                            </html>
                        </div>
                    </div>
                </div>

                <!-- Profile and Wallet Section -->
                <div class="row mt-4">
                    <!-- Profile Section -->
                    <div class="col-md-4">
                        <div class="card profile-section">
                            <div class="text-center">
                                <img src="https://via.placeholder.com/100" alt="Profile" class="profile-image">
                                <h5>John Doe</h5>
                                <p class="text-muted">Station Manager</p>
                            </div>
                            <hr>
                            <div class="mt-3">
                                <p><i class="fas fa-envelope mr-2"></i> john.doe@example.com</p>
                                <p><i class="fas fa-phone mr-2"></i> +91 98765 43210</p>
                                <p><i class="fas fa-map-marker-alt mr-2"></i> Chennai, Tamil Nadu</p>
                            </div>
                        </div>
                    </div>

                    <!-- Wallet Section -->
                    <div class="col-md-8">
                        <div class="card wallet-section">
                            <h5><i class="fas fa-wallet mr-2"></i> Recent Transactions</h5>
                            <div class="transaction-list">
                                <div class="transaction-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <strong>Vehicle: TN 01 AB 1234</strong>
                                            <p class="mb-0 text-muted">Petrol - ₹500</p>
                                        </div>
                                        <div class="text-right">
                                            <span class="badge badge-success">Completed</span>
                                            <p class="mb-0 text-muted">10:30 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="transaction-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <strong>Vehicle: TN 02 CD 5678</strong>
                                            <p class="mb-0 text-muted">Diesel - ₹800</p>
                                        </div>
                                        <div class="text-right">
                                            <span class="badge badge-success">Completed</span>
                                            <p class="mb-0 text-muted">10:15 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="transaction-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <strong>Vehicle: TN 03 EF 9012</strong>
                                            <p class="mb-0 text-muted">Speed Petrol - ₹600</p>
                                        </div>
                                        <div class="text-right">
                                            <span class="badge badge-success">Completed</span>
                                            <p class="mb-0 text-muted">10:00 AM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sales Chart -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="card sales-chart">
                            <h5><i class="fas fa-chart-line mr-2"></i> Sales Overview</h5>
                            <canvas id="salesChart"></canvas>
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
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Sales Chart
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['6 AM', '8 AM', '10 AM', '12 PM', '2 PM', '4 PM', '6 PM'],
                datasets: [{
                    label: 'Sales (₹)',
                    data: [5000, 8000, 12000, 15000, 18000, 22000, 25000],
                    borderColor: '#007bff',
                    backgroundColor: 'rgba(0, 123, 255, 0.1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.1)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>