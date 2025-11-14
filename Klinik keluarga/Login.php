<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="Asset/CSS/Login.css">
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="card p-4 shadow" style="width: 350px;">
    <h2 class="text-center mb-4 text-primary">Login</h2>
    <form id="loginForm">
      <div class="mb-3 position-relative">
        <label for="loginEmail" class="form-label">Email</label>
        <input type="email" class="form-control ps-5" id="loginEmail" name="email" placeholder="Email" autocomplete="off" required>
        <i class="bi bi-envelope position-absolute" style="top: 38px; left: 15px;"></i>
      </div>

      <div class="mb-3 position-relative">
        <label for="loginPassword" class="form-label">Password</label>
        <input type="password" class="form-control ps-5" id="loginPassword" name="password" placeholder="Password" autocomplete="off" required>
        <i class="bi bi-lock position-absolute" style="top: 38px; left: 15px;"></i>
      </div>

      <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
     <div class="mb-3 mt-4">
  <a href="Home.php" class="btn btn-secondary w-100">
    <i class="bi bi-arrow-left-circle"></i> Kembali
  </a>
</div>
    <p class="text-center mt-3">Belum punya akun? <a href="register.php" class="text-primary">Register</a></p>
    
  </div>
</div>
<script src="Asset/JS/script.js"></script>
</body>
</html>
