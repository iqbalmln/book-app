<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Optional CSS -->
    @stack('styles')

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/@coreui/icons@2.0.0-beta.3/css/all.min.css">

    <title>CoreUI</title>
</head>
<body class="c-app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card mx-4">
            <form action="{{ route('auth.register.post') }}" class="card-body p-4" method="POST">
              @csrf
              <h1>Register</h1>
              <p class="text-muted">Create your account</p>
              <div class="form-row">
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="/icons/sprites/free.svg#cil-user"></use>
                        </svg></span></div>
                    <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" placeholder="First Name">
                    @error('first_name')
                      <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col">
                  <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">
                        <svg class="c-icon">
                          <use xlink:href="/icons/sprites/free.svg#cil-user"></use>
                        </svg></span></div>
                    <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" placeholder="Last Name">
                    @error('last_name')
                      <div class="text-sm text-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>
              <div class="input-group mt-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="/icons/sprites/free.svg#cil-envelope-open"></use>
                    </svg></span></div>
                <input class="form-control @error('email_address') is-invalid @enderror" type="email" name="email_address" placeholder="Email Address">
              </div>
              @error('email_address')
                  <div class="text-sm text-danger">{{ $message }}</div>
                @enderror
              <div class="input-group mt-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="/icons/sprites/free.svg#cil-lock-locked"></use>
                    </svg></span></div>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
              </div>
              @error('password')
                  <div class="text-sm text-danger">{{ $message }}</div>
                @enderror
              <button class="btn btn-block btn-success mt-4" type="submit">Create Account</button>
            </form>
            <div class="card-footer p-4">
              <span>Already have an account ? <a href="{{ url('/auth/login') }}">Login</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CoreUI JS -->
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
  </body>
</html>