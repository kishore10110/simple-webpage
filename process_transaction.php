<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $vehicle_number = htmlspecialchars($_POST['vehicle_number']);
    $fuel_type = htmlspecialchars($_POST['fuel_type']);
    $payment_mode = htmlspecialchars($_POST['payment_mode']);
    $datetime = htmlspecialchars($_POST['datetime']);
    $bay_number = htmlspecialchars($_POST['bay_number']);

    // Format the date and time
    $formatted_datetime = date('F j, Y, g:i a', strtotime($datetime));
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transaction Details</title>
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
                padding: 20px;
            }

            .receipt {
                max-width: 600px;
                margin: 0 auto;
                background: rgba(255, 255, 255, 0.95);
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
                backdrop-filter: blur(10px);
            }

            .receipt-header {
                text-align: center;
                margin-bottom: 30px;
                padding-bottom: 20px;
                border-bottom: 2px dashed #dee2e6;
            }

            .receipt-header h2 {
                color: #343a40;
                font-weight: 600;
            }

            .receipt-details {
                margin-bottom: 30px;
            }

            .receipt-row {
                display: flex;
                justify-content: space-between;
                margin-bottom: 15px;
                padding-bottom: 10px;
                border-bottom: 1px solid #eee;
            }

            .receipt-label {
                font-weight: 600;
                color: #495057;
            }

            .receipt-value {
                color: #212529;
                font-weight: 500;
            }

            .print-btn {
                width: 100%;
                padding: 12px;
                font-size: 18px;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .print-btn:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(0, 123, 255, 0.3);
            }

            .transaction-id {
                color: #6c757d;
                font-size: 0.9em;
                margin-top: 10px;
            }

            .btn-secondary {
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .btn-secondary:hover {
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(108, 117, 125, 0.3);
            }

            @media print {
                body {
                    background: none;
                    padding: 0;
                }

                .receipt {
                    box-shadow: none;
                    background: white;
                }

                .btn {
                    display: none;
                }
            }
        </style>
    </head>

    <body>
        <div class="receipt">
            <div class="receipt-header">
                <h2><i class="fas fa-gas-pump"></i> Fuel Transaction Receipt</h2>
                <p class="transaction-id">Transaction ID: <?php echo strtoupper(uniqid()); ?></p>
            </div>

            <div class="receipt-details">
                <div class="receipt-row">
                    <span class="receipt-label">Vehicle Number:</span>
                    <span class="receipt-value"><?php echo $vehicle_number; ?></span>
                </div>
                <div class="receipt-row">
                    <span class="receipt-label">Fuel Type:</span>
                    <span class="receipt-value"><?php echo ucfirst($fuel_type); ?></span>
                </div>
                <div class="receipt-row">
                    <span class="receipt-label">Payment Mode:</span>
                    <span class="receipt-value"><?php echo strtoupper($payment_mode); ?></span>
                </div>
                <div class="receipt-row">
                    <span class="receipt-label">Date & Time:</span>
                    <span class="receipt-value"><?php echo $formatted_datetime; ?></span>
                </div>
                <div class="receipt-row">
                    <span class="receipt-label">Bay Number:</span>
                    <span class="receipt-value"><?php echo $bay_number; ?></span>
                </div>
            </div>

            <button onclick="window.print()" class="btn btn-primary print-btn">
                <i class="fas fa-print"></i> Print Receipt
            </button>

            <a href="fuel_management.php" class="btn btn-secondary mt-3" style="width: 100%;">
                <i class="fas fa-arrow-left"></i> Back to Form
            </a>
        </div>

        <!-- Bootstrap 4 JS and dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location: fuel_management.php");
    exit();
}
?>