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
            <div class="card-body p-4">
              <h1>Register</h1>
              <p class="text-muted">Create your account</p>
              <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="/icons/sprites/free.svg#cil-user"></use>
                    </svg></span></div>
                <input class="form-control" type="text" placeholder="Username">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="/icons/sprites/free.svg#cil-envelope-open"></use>
                    </svg></span></div>
                <input class="form-control" type="text" placeholder="Email">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="/icons/sprites/free.svg#cil-lock-locked"></use>
                    </svg></span></div>
                <input class="form-control" type="password" placeholder="Password">
              </div>
              <div class="input-group mb-4">
                <div class="input-group-prepend"><span class="input-group-text">
                    <svg class="c-icon">
                      <use xlink:href="/icons/sprites/free.svg#cil-lock-locked"></use>
                    </svg></span></div>
                <input class="form-control" type="password" placeholder="Repeat password">
              </div>
              <button class="btn btn-block btn-success" type="button">Create Account</button>
            </div>
            <div class="card-footer p-4">

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CoreUI JS -->
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
  </body>
</html>