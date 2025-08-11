<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log In</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-color: #343a40; /* Same as your background color */
    }

    .login-box {
      width: 360px;
      /* Adjust the width as needed */
    }
  </style>

</head>
<body class="hold-transition login-page" style=" background-color: #343a40;">
<div class="login-box">
  <!-- /.login-logo -->
  {{-- <center><img src="{{asset('assets/img/prod-1.jpg')}}" alt="error" style="width: 250; height: 250px;"></center> --}}

  <div class="card">
    <div class="card-header text-center">
      <a class="h1"><b>Fast</b>Direct</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Isi form dibawah ini</p>

      <form action="{{route ('actionLogin')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-15">
            <button type="submit" class="btn btn-secondary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Handling SweetAlert2 flash messages
    @if(session('success'))
      Swal.fire({
        icon: 'success',
        title: 'BERHASIL!',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 4000
      });
    @elseif(session('error'))
      Swal.fire({
        icon: 'error',
        title: 'GAGAL!',
        text: '{{ session('error') }}',
        showConfirmButton: false,
        timer: 4000
      });
    @endif

</script>

</body>
</html>
