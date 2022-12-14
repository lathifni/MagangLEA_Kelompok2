<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Admin-Pro lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Admin-Pro lite design, Admin-Pro lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Admin-Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Anggota</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminpro-lite/" />
    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png"> -->
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link href={{asset("../css/style.css")}} rel="stylesheet">
    <link href={{asset("../css/bootstrap.min.css")}} rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <!-- <link href="css/colors/default-dark.css" id="theme" rel="stylesheet"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Pro</p>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" style="background-color:#8d448b ;">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <a class="nav-link waves-effect" style="color: white" href="#"><img src="../assets/images/users/1.jpg"
                                    alt="user" class="profile-pic" /> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="/admin/admin" aria-expanded="false"><i
                            class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                <li> <a class="waves-effect waves-dark" href="/user/list" aria-expanded="false"><i
                            class="mdi mdi-account-check"></i><span class="hide-menu">Data User</span></a></li>
                <li> <a class="waves-effect waves-dark" href="/inventaris/list" aria-expanded="false"><i
                            class="mdi mdi-table"></i><span class="hide-menu">Inventaris</span></a></li>
                <li> <a class="waves-effect waves-dark" href="/admin/peminjaman_sewa" aria-expanded="false"><i
                            class="mdi mdi-emoticon"></i><span class="hide-menu">Pinjam-Sewa</span></a></li>
                <li> <a class="waves-effect waves-dark" href="/admin/pengembalian/list" aria-expanded="false"><i
                            class="mdi mdi-earth"></i><span class="hide-menu">Pengembalian</span></a></li>
                <li> <a class="waves-effect waves-dark" href="/admin/anggota/list" aria-expanded="false"><i
                            class="mdi mdi-book-open-variant"></i><span class="hide-menu">Data Anggota</span></a></li>
                <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i
                            class="mdi mdi-help-circle"></i><span class="hide-menu">Profile</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text">Edit Data Anggota</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="container mt-5">
                                    <form action="/admin/anggota/{{$anggota->id}}" method="post">
                                        @method('put')
                                        @csrf
                                        <div class="mb-3">
                                            <label for="Nama" class="form-label">Nama Anggota</label>
                                            <input type="text" class="form-control" id="nama" value="{{$anggota->nama}}" name="nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Nama" class="form-label">Nomor HP</label>
                                            <input type="text" class="form-control" id="no_hp" value="{{$anggota->no_hp}}" name="no_hp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Nama" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="email" value="{{$anggota->email}}" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Harga" class="form-label">Jenis Kelamin</label>
                                            <input type="text" class="form-control" value="{{$anggota->jenis_kelamin}}" readonly>
                                            <select name="jenis_kelamin" id="jenis_kelamin">
                                              <option value="laki-laki">Laki-Laki</option>
                                              <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Nama" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" value="{{$anggota->alamat}}" name="alamat">
                                        </div>
                                          <div class="mb-3">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                          </div>
                                </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer" style="text-align: center ;"> ?? 2022 E-Inventory by <a>Kelompok 2</a></footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.min.js"></script>

    <script src="{{ asset('../assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('../assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('../js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('../js/waves.js')}}"></script>
    <script src="{{ asset('../js/sidebarmenu.js')}}"></script>
    <script src="{{ asset('../js/custom.min.js')}}"></script>

</body>

</html>
