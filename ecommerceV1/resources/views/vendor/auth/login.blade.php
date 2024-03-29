<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Espace Admin | Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.c') }}ss">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.c') }}ss">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-info bg-info">
    <div class="card-header text-center text-default">
      <span class="h4"><b>Espace</b>@Fournisseur</span>
    </div>
    <div class="card-body">
      <p class="login-box-msg">{{ __('Veuillez vous Authentifier...') }} <i class="fa fa-key"></i></p>

      <form action="{{ route('vendor.login') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Adresse e-mail...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

          @error('email')
          <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

          @error('password')
          <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-default">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                <h6>{{ __('Restez connecté(e)') }}</h6>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class=" btn btn-outline-light btn-sm">{{ __('Se connecter') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <hr class="bg-light">
      <p class="mb-1">
        <a href="forgot-password.html" class="text-center text-white">{{ __('* Mot de passe oublié?') }}</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center text-white">{{ __('* Créer un nouveau compte.') }}</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.') }}js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
