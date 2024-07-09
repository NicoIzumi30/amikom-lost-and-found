<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section wallet-card-section pt-1">
            <div class="wallet-card">
                <!-- Balance -->
                <div class="balance">
                    <div class="left">
                        <span class="title mb-0">{{ $greeting }}</span>
                        <h2>{{ auth()->user()->name }}</h2>
                    </div>
                </div>
                <div class="wallet-footer">

                    <div class="item">
                        <a href="{{ route('itemFound') }}">
                            <div class="icon-wrapper bg-primary">
                                <i class="fas fa-hands-bound"></i>
                            </div>
                            <strong>Barang Ditemukan</strong>
                        </a>
                    </div>

                    <div class="item">
                        <a href="{{ route('lostItems') }}">
                            <div class="icon-wrapper bg-success">
                                <i class="fas fa-person-circle-question"></i>
                            </div>
                            <strong>Barang Hilang</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('history') }}">
                            <div class="icon-wrapper bg-danger">
                                <i class="fas fa-rotate-right"></i>
                            </div>
                            <strong>History</strong>
                        </a>
                    </div>
                    <div class="item">
                        <a href="{{ route('profile') }}">
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
                    @foreach ($banners as $banner)
                        <swiper-slide><a href="{{ route('detailBanner', ['slug' => $banner->slug]) }}"><img
                                    src="{{ asset('storage/announcement') }}/{{ $banner->image }}" class="image-banner"
                                    alt=""></a></swiper-slide>
                    @endforeach
                </swiper-container>
            </div>
            <hr>
            {{-- <div class="container"> --}}
                @if ($itemfound->isEmpty())
                    <h3 class="text-muted">Belum ada barang yang ditemukan</h3>
                @else
                    <h3 class="mb-2 mt-2 text-muted">Barang Terbaru Ditemukan</h3>
                @endif
                <div class="row">
                    @foreach ($itemfound as $key => $found)
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <a href="{{ route('itemFound.detail', ['slug' => $found->slug]) }}"
                                class="text-decoration-none">
                                <div class="card h-100"style="box-shadow: 0px 4px 14px 2px rgba(0,0,0,0.50);">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="col-2">
                                                <img src="{{ $found->user->image ? asset('storage/users/' . $found->user->image) : asset('images/user.png') }}"
                                                    class="w-100" style="aspect-ratio: 1;border-radius: 50%;margin-top:1px"
                                                    alt="{{ $found->user->name }}">
                                            </div>
                                            <div class="col-10 mt-1">
                                                <h5 class="mb-0">{{ $found->user->name }}</h5>
                                                <small>{{ $found->created_at->diffForHumans() }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ asset('storage/item-found/' . $found->image) }}"
                                                class="img-fluid" style="max-height: 180px; max-width: 100%;"
                                                alt="...">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <h6 class="card-title mb-0">{{ $found->title }}</h6>
                                        <small class="card-text">{{ $found->description }}</small>
                                        <div class="text-right">
                                            <small class="text-muted">{{ $found->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            {{-- </div> --}}
        </div>
    </div>
</x-app-main-layout>
