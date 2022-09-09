<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('back/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/@fortawesome/fontawesome-free/css/all.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('back/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('back/assets/sweet-alert/sweetalertt2.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/assets/ckeditor/samples/css/samples.css')}}">
    <link rel="stylesheet" href="{{asset('back/assets/ckeditor/toolbarconfigurator/lib/codemirror/neo.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('back/assets/images/favicon.png')}}" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="{{route('admin.index')}}"><img src="{{asset('back/assets/images/logo.svg')}}" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="{{route('admin.index')}}"><img src="{{asset('back/assets/images/logo-mini.svg')}}" alt="logo" /></a>
        </div>
        <ul class="nav">
            <li class="nav-item profile">
                <div class="profile-desc">
                    <div class="profile-pic">
                        <div class="count-indicator">
                            <img class="img-xs rounded-circle " src="{{asset('back/assets/images/faces/face15.jpg')}}" alt="">
                            <span class="count bg-success"></span>
                        </div>
                        <div class="profile-name">
                            <h5 class="mb-0 font-weight-normal">{{auth()->user()->name}}</h5>
                            <span>Gold Member</span>
                        </div>
                    </div>
                    <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-settings text-primary"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-onepassword  text-info"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-dark rounded-circle">
                                    <i class="mdi mdi-calendar-today text-success"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item nav-category">
                <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items {{Route::is('admin.index') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('admin.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                    <span class="menu-title">Admin Panel</span>
                </a>
            </li>
            <li class="nav-item menu-items {{Route::is('admin.education.list') ? 'active' : ''}}">
                <a class="nav-link " href="{{route('admin.education.list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">Eğitim Bilgileri</span>
                </a>
            </li>
            <li class="nav-item menu-items {{Route::is('admin.experience.list') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('admin.experience.list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                    <span class="menu-title">İş Tecrübeleri</span>
                </a>
            </li>
            <li class="nav-item menu-items {{Route::is('personalInformation.index') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('personalInformation.index')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                    <span class="menu-title">Kişisel Bilgiler</span>
                </a>
            </li>

            <li class="nav-item menu-items {{Route::is('admin.socialMedia.list') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('admin.socialMedia.list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                    <span class="menu-title">Sosyal Medya Bilgileri</span>
                </a>
            </li>

            <li class="nav-item menu-items {{Route::is('admin.socialMedia.list') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('admin.socialMedia.list')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
                    <span class="menu-title">Portfolio Bilgileri</span>
                </a>
            </li>

        </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="{{route('admin.index')}}"><img src="{{asset('back/assets/images/logo-mini.svg')}}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav w-100">
                    <li class="nav-item w-100">
                        <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                            <input type="text" class="form-control" placeholder="Search products">
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Create New Project</a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                            <h6 class="p-3 mb-0">Projects</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-file-outline text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Software Development</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-web text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">UI Development</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-layers text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Software Testing</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">See all projects</p>
                        </div>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-view-grid"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown border-left">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-email"></i>
                            <span class="count bg-success"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                            <h6 class="p-3 mb-0">Messages</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('back/assets/images/faces/face4.jpg')}}" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                    <p class="text-muted mb-0"> 1 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('back/assets/images/faces/face2.jpg')}}" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Cregh send you a message</p>
                                    <p class="text-muted mb-0"> 15 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{asset('back/assets/images/faces/face3.jpg')}}" alt="image" class="rounded-circle profile-pic">
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1">Profile picture updated</p>
                                    <p class="text-muted mb-0"> 18 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">4 new messages</p>
                        </div>
                    </li>
                    <li class="nav-item dropdown border-left">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <span class="count bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Event today</p>
                                    <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Settings</p>
                                    <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-link-variant text-warning"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Launch Admin</p>
                                    <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">See all notifications</p>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                            <div class="navbar-profile">
                                <img class="img-xs rounded-circle" src="{{asset('back/assets/images/faces/face15.jpg')}}" alt="">
                                <p class="mb-0 d-none d-sm-block navbar-profile-name">{{auth()->user()->name}}</p>
                                <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                            <h6 class="p-3 mb-0">Profile</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-logout text-danger"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Log out</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <p class="p-3 mb-0 text-center">Advanced settings</p>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
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
<script src="{{asset('back/assets/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('back/assets/ckeditor/samples/js/sample.js')}}"></script>

<!-- Education Scripts -->
<script>

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr("content")
        }
    });

    $('.changeStatus').click(function ()
    {
        //let educationID = $(this).data('id');
        let educationID = $(this).attr('data-id');//Üstteki yöntemin başka bir formatı
        let self=$(this);
        $.ajax({
            url:"{{route('admin.education.changeStatus')}}",
            // method:"POST"
            type:"POST",
            async:false,
            data : {
                educationID:educationID
            },
            success:function (response)
            {
                console.log(response)
                Swal.fire({
                    icon: 'success',
                    title: 'Başarılı',
                    text: response.educationID+" ID'li kayıt durumu "+response.newStatus+" olarak güncellenmiştir",
                    confirmButtonText:"Tamam",

                });

                if (response.status==1)
                {
                    self[0].innerHTML="Aktif";
                    self.removeClass("btn-danger");
                    self.addClass("btn-success");
                }
                else if(response.status==0)
                {
                    self[0].innerHTML="Pasif";
                    self.remove("btn-success");
                    self.addClass("btn-danger");
                }

            },
            error:function ()
            {

            }
        });



    });

    $('.deleteEducation').click(function () {
        //let educationID = $(this).data('id');
        let educationID = $(this).attr('data-id');//Üstteki yöntemin başka bir formatı

        Swal.fire({
            title: educationID+"Emin Misiniz",
            text: educationID+" ID'li Eğitim Bilgisini Silmek İstiyor musunuz?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet',
            cancelButtonText: "Hayır",
        }).then((result) => {

            if (result.isConfirmed) {
                $.ajax({
                    url:"{{route('admin.education.delete')}}",
                    // method:"POST"
                    type:"POST",
                    async:false,
                    data : {
                        educationID:educationID
                    },
                    success:function (response)
                    {
                        console.log(response)
                        Swal.fire({
                            icon: 'success',
                            title: 'Başarılı',
                            text:  "Silme İşlemi Başarılı",
                            confirmButtonText:"Tamam",

                        });
                        $("tr#"+educationID).remove();



                    },
                    error:function ()
                    {

                    }
                });
                // Swal.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // )
            }
        })


    });

</script>

@include('sweetalert::alert')
<script>
    let createButton =$("#createButton");
    createButton.click(function (){

        $('#createEducationForm').submit();

        if($('#education_date').val().trim()=='')
        {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'Lütfen Eğitim Tarihini Kontrol Edin!',
                confirmButtonText:"Tamam",

            });
        }
        else if($('#university_name').val().trim()=='')
        {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'Lütfen Üniversite Adınızı Kontrol Edin!',
                confirmButtonText:"Tamam",

            });
        }
        else if($('#university_branch').val().trim()=='')
        {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'Lütfen Üniversite Bölümünüzü Kontrol Edin!',
                confirmButtonText:"Tamam",

            });
        }
        else
        {
            $('#createEducationForm').submit();
        }
    });
</script>

<!-- Experience Scripts -->

<script>

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr("content")
        }
    });

    $('.changeExperienceStatus').click(function ()
    {
        //let educationID = $(this).data('id');
        let experienceID = $(this).attr('data-id');//Üstteki yöntemin başka bir formatı
        let self=$(this);
        $.ajax({
            url:"{{route('admin.experience.changeStatus')}}",
            // method:"POST"
            type:"POST",
            async:false,
            data : {
                experienceID:experienceID
            },
            success:function (response)
            {
                console.log(response)
                Swal.fire({
                    icon: 'success',
                    title: 'Başarılı',
                    text: response.experienceID+" ID'li kayıt durumu "+response.newStatus+" olarak güncellenmiştir",
                    confirmButtonText:"Tamam",

                });

                if (response.status==1)
                {
                    self[0].innerHTML="Aktif";
                    self.removeClass("btn-danger");
                    self.addClass("btn-success");
                }
                else if(response.status==0)
                {
                    self[0].innerHTML="Pasif";
                    self.remove("btn-success");
                    self.addClass("btn-danger");
                }


            },
            error:function ()
            {

            }
        });



    });

    $('.changeActive').click(function ()
    {
        //let educationID = $(this).data('id');
        let experienceID = $(this).attr('data-id');//Üstteki yöntemin başka bir formatı
        let self=$(this);
        $.ajax({
            url:"{{route('admin.experience.changeActive')}}",
            // method:"POST"
            type:"POST",
            async:false,
            data : {
                experienceID:experienceID
            },
            success:function (response)
            {
                console.log(response)
                Swal.fire({
                    icon: 'success',
                    title: 'Başarılı',
                    text: response.experienceID+" ID'li kayıt aktif durumu "+response.newStatus+" olarak güncellenmiştir",
                    confirmButtonText:"Tamam",

                });

                if (response.active==1)
                {
                    self[0].innerHTML="Aktif";
                    self.removeClass("btn-danger");
                    self.addClass("btn-success");
                }
                else if(response.active==0)
                {
                    self[0].innerHTML="Pasif";
                    self.remove("btn-success");
                    self.addClass("btn-danger");
                }


            },
            error:function ()
            {

            }
        });



    });

    $('.deleteExperience').click(function () {
        //let experienceID = $(this).data('id');
        let experienceID = $(this).attr('data-id');//Üstteki yöntemin başka bir formatı

        Swal.fire({
            title: experienceID+"Emin Misiniz",
            text: experienceID+" ID'li Deneyim Bilgisini Silmek İstiyor musunuz?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet',
            cancelButtonText: "Hayır",
        }).then((result) => {

            if (result.isConfirmed) {
                $.ajax({
                    url:"{{route('admin.experience.delete')}}",
                    // method:"POST"
                    type:"POST",
                    async:false,
                    data : {
                        experienceID:experienceID
                    },
                    success:function (response)
                    {
                        console.log(response)
                        Swal.fire({
                            icon: 'success',
                            title: 'Başarılı',
                            text:  "Silme İşlemi Başarılı",
                            confirmButtonText:"Tamam",

                        });
                        $("tr#"+experienceID).remove();



                    },
                    error:function ()
                    {

                    }
                });
                // Swal.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // )
            }
        })


    });

</script>
<script>
    let createButton =$("#createExperienceButton");
    createButton.click(function (){

        $('#createExperienceForm').submit();

        if($('#date').val().trim()=='')
        {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'Lütfen Deneyim Tarihini Kontrol Edin!',
                confirmButtonText:"Tamam",

            });
        }
        else if($('#task_name').val().trim()=='')
        {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'Lütfen Pozisyonunuzu Kontrol Edin!',
                confirmButtonText:"Tamam",

            });
        }
        else if($('#company_name').val().trim()=='')
        {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'Lütfen Şirket Adınızı Kontrol Edin!',
                confirmButtonText:"Tamam",

            });
        }
        else
        {
            $('#createExperienceForm').submit();
        }
    });
</script>

<!-- PersonalInformation Scripts -->

<script>
    var editor1 =CKEDITOR.replace('editor1',{
        extraAllowedContent: 'div',
        height:150
    });

    var editorLang =CKEDITOR.replace('editorLang',{
        extraAllowedContent: 'div',
        height:150
    });

    var editorInterests =CKEDITOR.replace('editorInterests',{
        extraAllowedContent: 'div',
        height:150
    });
</script>

<!-- Social Media Scripts -->

<script>

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr("content")
        }
    });

    $('.changeSocialMediaStatus').click(function ()
    {
        //let socialMediaID = $(this).data('id');
        let socialMediaID = $(this).attr('data-id');//Üstteki yöntemin başka bir formatı
        let self=$(this);
        $.ajax({
            url:"{{route('admin.socialMedia.changeStatus')}}",
            // method:"POST"
            type:"POST",
            async:false,
            data : {
                socialMediaID:socialMediaID
            },
            success:function (response)
            {
                console.log(response)
                Swal.fire({
                    icon: 'success',
                    title: 'Başarılı',
                    text: response.socialMediaID+" ID'li kayıt durumu "+response.newStatus+" olarak güncellenmiştir",
                    confirmButtonText:"Tamam",

                });

                if (response.status==1)
                {
                    self[0].innerHTML="Aktif";
                    self.removeClass("btn-danger");
                    self.addClass("btn-success");
                }
                else if(response.status==0)
                {
                    self[0].innerHTML="Pasif";
                    self.remove("btn-success");
                    self.addClass("btn-danger");
                }

            },
            error:function ()
            {

            }
        });



    });


    $('.deleteSocialMedia').click(function () {
        //let educationID = $(this).data('id');
        let socialMediaID = $(this).attr('data-id');//Üstteki yöntemin başka bir formatı

        Swal.fire({
            title: socialMediaID+"Emin Misiniz",
            text: socialMediaID+" ID'li Sosyal Medya Bilgisini Silmek İstiyor musunuz?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet',
            cancelButtonText: "Hayır",
        }).then((result) => {

            if (result.isConfirmed) {
                $.ajax({
                    url:"{{route('admin.socialMedia.delete')}}",
                    // method:"POST"
                    type:"POST",
                    async:false,
                    data : {
                        socialMediaID:socialMediaID
                    },
                    success:function (response)
                    {
                        console.log(response)
                        Swal.fire({
                            icon: 'success',
                            title: 'Başarılı',
                            text:  "Silme İşlemi Başarılı",
                            confirmButtonText:"Tamam",

                        });
                        $("tr#"+socialMediaID).remove();



                    },
                    error:function ()
                    {

                    }
                });
                // Swal.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // )
            }
        })


    });
</script>

<!-- Portfolio Scripts -->

<script>
    var aboutCk =CKEDITOR.replace('aboutCk',{
        extraAllowedContent: 'div',
        height:150
    });

    $('#images').change(function ()
    {
        let images = $(this);
        let imagesCheckStatus =imageCheck(images);
    });

    function imageCheck(images)
    {
        let length =images[0].files.length;
        let files = images[0].files;
        let checkImage=['png','jpg','jpeg'];
        for (let i=0;i<length;i++)
        {
            let type =files[i].type.split('/').pop();
            let size =files[i].size;
            if ($.inArray(type,checkImage)=='-1')
            {
                console.log(files[i]);
                console.log(files);
                Swal.fire({
                    icon: 'error',
                    title: 'Uyarı',
                    text: "Yüklemek İstediğiniz Dosya Belirlenen Formatlarda Değildir",
                    confirmButtonText:"Tamam",

                });
                return false;


            }
            if (size>2048000)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Uyarı',
                    text: "Yüklemek İstediğiniz Dosya 2Mb'den  Fazladır",
                    confirmButtonText:"Tamam",

                });
                return false;
            }
        }
        return true;

    }

    $('#createPortfolioButton').click(function ()
    {
        let imageCheckStatus =imageCheck($('#images'));
        if (!imageCheckStatus)
        {
            Swal.fire({
                icon: 'error',
                title: 'Uyarı',
                text: "Seçtiğiniz Resimleri Kontrol Ediniz",
                confirmButtonText:"Tamam",

            });
        }
        else if ($('#title').val().trim()=='')
        {
            Swal.fire({
                icon: 'error',
                title: 'Uyarı',
                text: "Başlık Boş Bırakılamaz",
                confirmButtonText:"Tamam",

            });
        }

        else if ($('#tags').val().trim()=='')
        {
            Swal.fire({
                icon: 'error',
                title: 'Uyarı',
                text: "Etiket Boş Bırakılamaz",
                confirmButtonText:"Tamam",

            });
        }
        else
        {
            $('#PortfolioForm').submit();
        }
    });

</script>


<!-- endinject -->
<!-- Custom js for this page -->
<!-- End custom js for this page -->
</body>
</html>
