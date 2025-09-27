<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Success</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4 text-center" style="max-width: 500px; border-radius: 15px;">
      <div class="mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03a.75.75 0 0 0 1.07.02l3.992-3.992a.75.75 0 0 0-1.08-1.04L7.477 9.477 5.383 7.383a.75.75 0 0 0-1.06 1.06l2.647 2.647z"/>
        </svg>
      </div>
      <h3 class="text-success fw-bold">Payment Successful!</h3>
      <p class="mt-2">Thank you for your purchase. Your order has been placed successfully.</p>
      
      <div class="alert alert-success mt-3">
        <strong>Order ID:</strong> <?= $payment; ?>
      </div>

      <div class="d-grid gap-2 mt-4">
        <a href="/" class="btn btn-primary">Go to Homepage</a>
        <!-- <a href="/orders" class="btn btn-outline-secondary">View Orders</a> -->
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
