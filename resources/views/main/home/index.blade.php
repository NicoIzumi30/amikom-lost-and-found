<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title">Selamat Datang</span>
                        <h1 class="total">{{auth()->user()->name}}</h1>
                    </div>
                </div>
                <!-- * Balance -->
                <!-- Wallet Footer -->
                <div class="wallet-footer">

                    <div class="item">
                        <a href="{{route('home')}}">
                            <div class="icon-wrapper bg-warning">
                            <i class="fas fa-home"></i>
                            </div>
                            <strong>Home</strong>
                        </a>
                    </div>

                    <div class="item">
                        <a href="{{route('itemFound')}}">
                            <div class="icon-wrapper bg-primary">
                            <i class="fas fa-hands-bound"></i>
                            </div>
                            <strong>Barang Ditemukan</strong>
                        </a>
                    </div>

                    <div class="item">
                        <a href="{{route('lostItems')}}">
                            <div class="icon-wrapper bg-success">
                            <i class="fas fa-person-circle-question"></i>
                            </div>
                            <strong>Barang Hilang</strong>
                        </a>
                    </div>

                    <div class="item">
                        <a href="{{route('profile')}}">
                            <div class="icon-wrapper bg-warning">
                            <i class="fas fa-user"></i>
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
                      @foreach ($itemfound as $key => $found)
                        <div class="col-6 mb-2">
                            <a href="{{ route('itemFound.detail',['id'=>$found->id]) }}">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ asset('storage/item-found/' . $found->image) }}" class="w-75"
                                                height="150px" alt="...">
                                        </div>
                                        <h5 class="card-title mt-2">{{ $found->title }}</h5>
                                        <div class="text-right">
                                            <small class="text-dark">3 Jam Yang Lalu</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-main-layout>
