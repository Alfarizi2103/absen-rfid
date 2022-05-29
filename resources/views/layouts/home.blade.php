<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @yield('title')
    </title>
    <!-- Favicon -->
    <link href="{{ url('template_backend/argon') }}/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ url('template_backend/argon') }}/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="{{ url('template_backend/argon') }}/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ url('template_backend/argon') }}/assets/css/argon-dashboard.css?v=1.1.2" rel="stylesheet" />
    @yield('styles')

</head>

<body class="bg-default" onload="getData()">
    
    <div class="main-content">
        <div class="header bg-blue py-3">
        @if (Route::has('login'))
            <div class="header-body text-right mr-4">
                @auth
                    <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                @else
                    <a href="{{ route('auth.index') }}" class="btn btn-primary">Login</a>
                @endauth
            </div>
        @endif
        </div>
        <!-- End Navbar -->

        <!-- Header -->
        <div class="header bg-blue py-7 py-lg-8">
            
            <div class="container">
                <div class="header-body text-center ">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6">
                            <h1 class="text-white">Selamat Datang!</h1>
                            <h1 class="text-white">Daftar Kehadiran Ini!</h1>
                        </div>
                    </div>
                </div>
            </div>
                <div class="separator separator-bottom separator-skew zindex-100">
                    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                    </svg>
                </div>
        </div>
        <!-- Page content -->
                        
                            <!-- @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif -->
                            @yield('content')
                        
                    
       
    </div>
    <!--   Core   -->
    <script src="{{ url('template_backend/argon') }}/assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('template_backend/argon') }}/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!--   Optional JS   -->
    @stack('scripts')

    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
        
    </script>
    <script>
        function getData(){
            $.get('/get-data', function (data) {
            setTimeout(getData, 500);
            var temple = `
                    ${data.map((data, i) => `
                         <tr>
                            <th>${i+1}</th>
                            <td>${data.user.nama}</td>
                            <td>${data.user.no_kartu}</td>
                            <td>${data.user.email}</a></td>
                            <td>${data.keterangan}</td>
                            <td>${data.jam_masuk}</td>
                            <td>${data.jam_keluar}</td>
                        </tr>
                    `).join('')}
                    `
                    $(".data").html(temple); 
        });
        }
    </script>

</body>

</html>
