<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANNAI AGENCYs</title>
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
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 15px;
        }

        .form-group label {
            font-weight: 500;
            color: #343a40;
        }

        .radio-group {
            display: flex;
            gap: 20px;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .header {
            background: rgba(52, 58, 64, 0.95);
            color: white;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 10px 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            border-color: #80bdff;
        }

        .btn-primary {
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
        }

        .radio-option input[type="radio"] {
            margin-right: 5px;
        }

        .radio-option label {
            margin-bottom: 0;
            cursor: pointer;
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
                    <a href="#"><i class="fas fa-gas-pump"></i> New Transaction</a>
                    <a href="transaction.php"><i class="fas fa-history"></i> Transaction History</a>
                    <a href="#"><i class="fas fa-chart-bar"></i> Reports</a>
                    <a href="settings.php"><i class="fas fa-cog"></i> Settings</a>
                </nav>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 main-content">
                <div class="header">
                    <h4><i class="fas fa-gas-pump"></i> New Fuel Transaction</h4>
                </div>

                <div class="card">
                    <div class="card-body">
                        <form action="process_transaction.php" method="POST">
                            <!-- Vehicle Number -->
                            <div class="form-group">
                                <label for="vehicle_number">Vehicle Number</label>
                                <input type="text" class="form-control" id="vehicle_number" name="vehicle_number" required>
                            </div>

                            <!-- Fuel Type -->
                            <div class="form-group">
                                <label>Fuel Type</label>
                                <div class="radio-group">
                                    <div class="radio-option">
                                        <input type="radio" id="petrol" name="fuel_type" value="petrol" required>
                                        <label for="petrol">Petrol</label>
                                    </div>
                                    <div class="radio-option">
                                        <input type="radio" id="diesel" name="fuel_type" value="diesel">
                                        <label for="diesel">Diesel</label>
                                    </div>
                                    <div class="radio-option">
                                        <input type="radio" id="speed_petrol" name="fuel_type" value="speed_petrol">
                                        <label for="speed_petrol">Speed Petrol</label>project
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Mode -->
                            <div class="form-group">
                                <label>Payment Mode</label>
                                <div class="radio-group">
                                    <div class="radio-option">
                                        <input type="radio" id="cash" name="payment_mode" value="cash" required>
                                        <label for="cash">Cash</label>
                                    </div>
                                    <div class="radio-option">
                                        <input type="radio" id="card" name="payment_mode" value="card">
                                        <label for="card">Card</label>
                                    </div>
                                    <div class="radio-option">
                                        <input type="radio" id="upi" name="payment_mode" value="upi">
                                        <label for="upi">UPI</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Date and Ti

                            <!-- Bay Number -->
                            <div class="form-group">
                                <label for="bay_number">Bay Number</label>
                                <select class="form-control" id="bay_number" name="bay_number" required>
                                    <option value="">Select Bay Number</option>
                                    <option value="1">Bay 1</option>
                                    <option value="2">Bay 2</option>
                                    <option value="3">Bay3</option>
                                    <option value="4">Bay 4</option>
                                    <option value="4">Bay 4</option>
                                    <option value="4">Bay 5</option>
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Save Transaction
                            </button>
                        </form>
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