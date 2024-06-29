<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">Selamat Siang</span>
                        <h1 class="total">Heru Kristanto</h1>
                    </div>
                </div>
                <!-- * Balance -->
                <!-- Wallet Footer -->
                <div class="wallet-footer">

                    <div class="item">
                        <a href="{{route('home')}}">
                            <div class="icon-wrapper bg-warning">
                                <ion-icon name="home-outline"></ion-icon>
                            </div>
                            <strong>Home</strong>
                        </a>
                    </div>

                    <div class="item">
                        <a href="{{route('itemFound')}}">
                            <div class="icon-wrapper bg-primary">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <strong>Barang Ditemukan</strong>
                        </a>
                    </div>

                    <div class="item">
                        <a href="{{route('lostItems')}}">
                            <div class="icon-wrapper bg-success">
                                <ion-icon name="refresh-outline"></ion-icon>
                            </div>
                            <strong>Barang Hilang</strong>
                        </a>
                    </div>

                    <div class="item">
                        <a href="{{route('profile')}}">
                            <div class="icon-wrapper bg-warning">
                                <ion-icon name="person-outline"></ion-icon>
                            </div>
                            <strong>Profil</strong>
                        </a>
                    </div>


                </div>
                <!-- * Wallet Footer -->
            </div>
            <div class="mt-3 text-center">
                <swiper-container>
                    <swiper-slide><img src="{{asset('images')}}/cropper.jpg" class="image-banner" alt=""></swiper-slide>
                    <swiper-slide><img src="{{asset('images')}}/cropper.jpg" class="image-banner" alt=""></swiper-slide>
                    <swiper-slide><img src="{{asset('images')}}/cropper.jpg" class="image-banner" alt=""></swiper-slide>
                    <swiper-slide><img src="{{asset('images')}}/cropper.jpg" class="image-banner" alt=""></swiper-slide>
                </swiper-container>
            </div>

            <div class="container mt-3">
                <h2>Barang Ditemukan</h2>
                <div class="row">
                    <div class="col-6 mb-2">
                        <a href="#">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset('images')}}/prod-1.jpg" class="w-75" alt="...">
                                </div>
                                <h5 class="card-title">Ditemukan sepatu Casual di gedung 5</h5>
                                <div class="text-right">
                                    <small class="text-dark">3 Jam Yang Lalu</small>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-6 mb-2">
                        <a href="#">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset('images')}}/prod-1.jpg" class="w-75" alt="...">
                                </div>
                                <h5 class="card-title">Ditemukan sepatu Casual di gedung 5</h5>
                                <div class="text-right">
                                    <small class="text-dark">3 Jam Yang Lalu</small>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-6 mb-2">
                        <a href="#">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset('images')}}/prod-1.jpg" class="w-75" alt="...">
                                </div>
                                <h5 class="card-title">Ditemukan sepatu Casual di gedung 5</h5>
                                <div class="text-right">
                                    <small class="text-dark">3 Jam Yang Lalu</small>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-6 mb-2">
                        <a href="#">
                        <div class="card w-100">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="{{asset('images')}}/prod-1.jpg" class="w-75" alt="...">
                                </div>
                                <h5 class="card-title">Ditemukan sepatu Casual di gedung 5</h5>
                                <div class="text-right">
                                    <small class="text-dark">3 Jam Yang Lalu</small>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-main-layout>