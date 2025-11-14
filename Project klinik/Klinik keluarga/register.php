<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="card p-4 shadow" style="width: 400px;">
    <h2 class="text-center mb-4 text-primary">Register</h2>
    <form id="registerForm">
      <!-- Nama -->
      <div class="mb-3 position-relative">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control ps-5" id="name" name="name" placeholder="Nama lengkap" autocomplete="off" required>
        <i class="bi bi-person position-absolute" style="top: 38px; left: 15px;"></i>
      </div>

      <!-- Jenis Kelamin -->
      <div class="mb-3 position-relative">
        <label for="gender" class="form-label">Jenis Kelamin</label>
        <select class="form-select ps-5" id="gender" name="gender" required>
          <option value="">Pilih</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
        <i class="bi bi-gender-ambiguous position-absolute" style="top: 38px; left: 15px;"></i>
      </div>

      <!-- Umur -->
      <div class="mb-3 position-relative">
        <label for="age" class="form-label">Umur</label>
        <input type="number" class="form-control ps-5" id="age" name="age" placeholder="Umur" min="1" required>
        <i class="bi bi-calendar position-absolute" style="top: 38px; left: 15px;"></i>
      </div>

      <!-- Email -->
      <div class="mb-3 position-relative">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control ps-5" id="email" name="email" placeholder="Email" autocomplete="off" required>
        <i class="bi bi-envelope position-absolute" style="top: 38px; left: 15px;"></i>
      </div>

      <!-- Password -->
      <div class="mb-3 position-relative">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control ps-5" id="password" name="password" placeholder="Password" autocomplete="off" required>
        <i class="bi bi-lock position-absolute" style="top: 38px; left: 15px;"></i>
      </div>

      <button type="submit" class="btn btn-primary w-100">Register</button>
    </form>
    <p class="text-center mt-3">Sudah punya akun? <a href="login.php" class="text-primary">Login</a></p>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="JS/script.js"></script>
</body>
</html>
