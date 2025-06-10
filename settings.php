<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['feedback'])) {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);

    // Save to a file or database (example: saving to file)
    file_put_contents("feedback.txt", "Name: $name\nMessage: $message\n\n", FILE_APPEND);
    $success = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Petrol Bunk - Website Settings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <style>
        {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
        }
    </style>
    <div class="container mt-5">
        <h2 class="mb-4">SETTINGS</h2>

        <!-- Contact Info -->
        <div class="card mb-3">
            <div class="card-header">Contact Info</div>
            <div class="card-body">
                <p><strong>Phone:</strong> +91 98765 43210</p>
                <p><strong>Email:</strong> contact@petrolbunk.in</p>
            </div>
        </div>

        <!-- Business Hours -->
        <div class="card mb-3">
            <div class="card-header">Business Hours</div>
            <div class="card-body">
                <p><strong>Mon - Sat:</strong> 6:00 AM - 10:00 PM</p>
                <p><strong>Sunday:</strong> 7:00 AM - 8:00 PM</p>
            </div>
        </div>

        <!-- Address -->
        <div class="card mb-3">
            <div class="card-header">Location</div>
            <div class="card-body">
                <p>Petrol Bunk, NH-44, Near Bypass Road,<br> Hyderabad, Telangana - 500001</p>
            </div>
        </div>

        <!-- Social Media -->
        <div class="card mb-3">
            <div class="card-header">Follow Us</div>
            <div class="card-body">
                <p>
                    <a href="#" class="me-3">Facebook</a>
                    <a href="#" class="me-3">Instagram</a>
                    <a href="#">Twitter</a>
                </p>
            </div>
        </div>

        <!-- Feedback Form -->
        <div class="card mb-3">
            <div class="card-header">Customer Feedback</div>
            <div class="card-body">
                <?php if (isset($success)): ?>
                    <div class="alert alert-success">Thank you for your feedback!</div>
                <?php endif; ?>
                <form method="POST" action="">
                    <input type="hidden" name="feedback" value="1">
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Feedback</label>
                        <textarea name="message" id="message" rows="4" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>