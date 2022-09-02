<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('back/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('back/assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('back/assets/images/favicon.png')}}"/>
    <link rel="stylesheet" href="{{asset('back/assets/sweet-alert/sweetalertt2.min.css')}}">
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                <div class="card col-lg-4 mx-auto">
                    <div class="card-body px-5 py-5">
                        <h3 class="card-title text-left mb-3">Login</h3>
                        <form action="{{route('login')}}" method="POST" id="loginForm">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control p_input" name="email" id="email" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password *</label>
                                <input type="password" class="form-control p_input" name="password" id="password">
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"> Remember me </label>
                                </div>
                                <a href="#" class="forgot-pass">Forgot password</a>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-primary btn-block enter-btn" id="btnlogin">Login</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('back/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('back/assets/js/off-canvas.js')}}"></script>
<script src="{{asset('back/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('back/assets/js/misc.js')}}"></script>
<script src="{{asset('back/assets/js/settings.js')}}"></script>
<script src="{{asset('back/assets/js/todolist.js')}}"></script>
<script src="{{asset('back/assets/sweet-alert/sweetalert2.all.js')}}"></script>
<script>
    $('#btnlogin').click(function ()
    {
        let email=document.querySelector('#email').value;
        let password=document.querySelector('#password').value;

        if (email.trim() == '')
        {

            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'Email Adresinizi Yazmalısınız!',
                confirmButtonText:'Tamam',

            });
        }
        else if (!emailControl(email))
        {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'Geçerli BirEmail Adresi Yazmalısınız!',
                confirmButtonText:'Tamam',

            });
        }
        else if (password.trim() == '')
        {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'Parolanızı Yazmalısınız!',
                confirmButtonText:'Tamam',

            });
        }
        else {
            $('#loginForm').submit();
        }
    });
    function emailControl(email){
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
</script>
<!-- endinject -->
</body>
</html>
