<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amikom Lost and Found</title>
    <meta name="description"
        content="Cari dan temukan barangmu yang hilang">
    <link rel="icon" href="{{ asset('images') }}/logo.png" type="image/ico" />

    <link rel="stylesheet" href="{{ asset('main') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('main') }}/css/sw-custom.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <script src="{{ asset('main') }}/js/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <style>
        .card-title {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            text-overflow: ellipsis;
            max-height: 3em;
            /* 2 baris, 1.5em per baris */
        }

        #itemKategori .card:hover {
            transform: scale(1.05);
        }

        .form-custom {
            height: 45px;
            border-radius: 10px;
        }

        .form-control[readonly] {
            background-color: #fff;
            cursor: pointer;
        }
        .card-active{
            transform: scale(1.1);
            border: 1px solid #4A1B9D;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')
    @if ($errors->any())
        <script>
            Swal.fire({
                title: "Failed",
                text: "{{ $errors->first() }}",
                icon: "error"
            });
        </script>
    @endif
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Success",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
    <div class="loading">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <div id="loader">
        <img src="{{ asset('main') }}/image/logo-icon.png" alt="icon" class="loading-icon">
    </div>
    <div class="appHeader bg-danger text-light">
        <div class="pageTitle">
            <h2 style="font-family: Black Ops One;color:#dbdada" class="mt-2">Amikom Lost and Found</h2>
        </div>
        <div class="right">
            <div class="headerButton" data-toggle="dropdown" id="dropdownMenuLink" aria-haspopup="true">
                <img src="{{ auth()->user()->image ? asset('storage/users/' . auth()->user()->image) : asset('images/user.png') }}"
                    alt="image" style="aspect-ratio: 1;border-radius: 50%" class="imaged w32">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" onclick="location.href='{{ route('profile') }}'" href="#"><ion-icon
                            size="small" name="person-outline"></ion-icon>Profil</a>
                    <a class="dropdown-item" onclick="location.href='{{ route('logout') }}'" href="#"><ion-icon
                            size="small" name="log-out-outline"></ion-icon>Keluar</a>
                </div>
            </div>
        </div>
        <div class="progress" style="display:none;position:absolute;top:50px;z-index:4;left:0px;width: 100%">
            <div id="progressBar" class="progress-bar progress-bar-striped bg-success" role="progressbar"
                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                <span class="sr-only">0%</span>
            </div>
        </div>
    </div>

    {{ $slot }}

    <div class="appBottomMenu">
        <a href="{{route('home')}}" class="item {{request()->routeIs('home') ? 'active' : ''}}">
            <div class="col text-dark">
                <i class="fas fa-home fa-2x"></i>
                <!-- <ion-icon name="home-outline"></ion-icon> -->
                <strong>Home</strong>
            </div>
        </a>
        <a href="{{route('itemFound')}}" class="item {{request()->routeIs('itemFound') ? 'active' : ''}}">
            <div class="col text-dark">
                <i class="fas fa-hands-bound fa-2x"></i>
                <!-- <ion-icon name="document-text-outline"></ion-icon> -->
                <strong>Barang Ditemukan</strong>
            </div>
        </a>
        <a href="{{route('lostItems')}}" class="item {{request()->routeIs('lostItems') ? 'active' : ''}}">
            <div class="col text-dark">
                <i class="fas fa-person-circle-question fa-2x"></i>
                <strong>Barang Hilang</strong>
            </div>
        </a>
        <a href="{{route('history')}}" class="item {{request()->routeIs('history') ? 'active' : ''}}">
            <div class="col text-dark">
                <i class="fas fa-rotate-right fa-2x"></i>
                <!-- <ion-icon name="chatbubbles-outline"></ion-icon> -->
                <strong>History</strong>
            </div>
        </a>
        <a href="{{route('profile')}}" class="item {{request()->routeIs('profile') ? 'active' : ''}}">
            <div class="col text-dark">
                <i class="fas fa-user fa-2x"></i>
                <strong>Profil</strong>
            </div>
        </a>
    </div>
    <!-- Bootstrap-->
    <script src="{{ asset('main') }}/js/popper.min.js"></script>
    <script src="{{ asset('main') }}/js/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/0ccb04165b.js" crossorigin="anonymous"></script>
    <!-- Base Js File -->
    <script src="{{ asset('main') }}/js/base.js"></script>
    <script src="{{ asset('main') }}/js/sweetalert.min.js"></script>
    <script src="{{ asset('build') }}/js/script.js"></script>
    <script src="{{ asset('main') }}/js/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('main') }}/js/datatables/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.createItemFound').click(function() {
                window.location.href = "{{ route('itemFound.create') }}";
            });
            $('.createLostItems').click(function() {
                window.location.href = "{{ route('lostItems.create') }}";
            });
        });
    </script>
      <script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
</body>

</html>
