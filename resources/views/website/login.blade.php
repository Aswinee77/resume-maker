<!DOCTYPE html>


<html
  lang="en"
  class="light-style customizer-hide">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <title>Login</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{url('/')}}/sneat/assets/img/favicon/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{url('/')}}/sneat/assets/vendor/fonts/boxicons.css"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{url('/')}}/sneat/assets/vendor/css/core.css" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{url('/')}}/sneat/assets/vendor/css/theme-default.css" class="template-customizer-theme-css"/>
    <link rel="stylesheet" href="{{url('/')}}/sneat/assets/css/demo.css"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{url('/')}}/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"/>

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{url('/')}}/sneat/assets/vendor/css/pages/page-auth.css"/>
    <!-- Helpers -->
    <script src="{{url('/')}}/sneat/assets/vendor/js/helpers.js"></script>
    <script src="{{url('/')}}/sneat/assets/js/config.js"></script>
    <style>
      .toast-bottom-right {
       position: fixed;
       bottom: 1rem;
       right: 1rem;
       z-index: 1050;
      }
    </style>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <div class="app-brand justify-content-center">
               <a href="{{url('/')}}/viewall" type="button" class="btn btn-primary" href="_blank">View All</a>
              </div>
              <form id="formAuthentication" class="mb-3" action="" method="POST">
                {{csrf_field()}}
                <div class="mb-3">
                  <label for="username" class="form-label">Enter Your Username <span style="color: red;">(Required)</span></label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username"  value ="{{old('username')}}"autofocus required>

                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Enter Your Password <span style="color: red;">(Required)</span></label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Submit</button>
                </div>
              </form>
              <p class="text-center">
                <span>New on our platform ?</span>
                <a href="{{url('/')}}/register" >
                  <span>Register Yourself.</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{url('/')}}/sneat/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{url('/')}}/sneat/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{url('/')}}/sneat/assets/vendor/js/bootstrap.js"></script>
    <script src="{{url('/')}}/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{url('/')}}/sneat/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{url('/')}}/sneat/assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{url('/')}}/sneat/assets/js/ui-toasts.js"></script>
    @if(Session::has('message'))
    <div class="bs-toast toast fade show bg-success toast-bottom-right"role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <i class="bx bx-bell me-1"></i>{{ Session::get('message') }}
      </div>
    </div>
    @endif
    @if(isset($message))
    <div class="bs-toast toast fade show bg-danger toast-bottom-right"role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <i class="bx bx-bell me-1"></i>{{ ($message) }}
      </div>
    </div>
    @endif
  </body>
</html>
