<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>KANBY - Register</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('assets')}}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{asset('assets')}}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{asset('assets')}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('assets')}}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-3 mx-auto">
            <div class="auth-form-light py-5 px-4 px-sm-5">
              <div class="brand-logo text-center">
                <h3 class="text-primary"><i class="ti-view-grid"></i> KANBY</h3>
              </div>
              <h4>Baru disini ?</h4>
              <h6 class="font-weight-light">Daftar dengan mudah untuk menjadi member</h6>

              <form method="POST" action="{{ route('register') }}" class="mt-4">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control @error('name') is-invalid @enderror form-control-lg" id="name" name="name" placeholder="Nama Lengkap" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <input type="email" class="form-control @error('name') is-invalid @enderror form-control-lg" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                  @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control @error('password') is-invalid @enderror form-control-lg" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
                  @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" value="{{ old('password_confirmation') }}">
                    @error('password_confirmation')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                    @enderror
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Daftar Sekarang</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Sudah punya akun? <a href="/login" class="text-primary">Login disini</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('assets')}}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('assets')}}/js/off-canvas.js"></script>
  <script src="{{asset('assets')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('assets')}}/js/template.js"></script>
  <script src="{{asset('assets')}}/js/settings.js"></script>
  <script src="{{asset('assets')}}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
