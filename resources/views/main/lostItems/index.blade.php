<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="container mt-3">
                <div class="row mb-1">
                    <div class="col-2">
                        <img src="{{ auth()->user()->image ? asset('storage/users/' . auth()->user()->image) : asset('images/user.png') }}"
                            class="w-100" style="aspect-ratio: 1;border-radius: 50%;border: 1px solid rgba(0,0,0,0.50);"
                            alt="">
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control createLostItems" readonly
                            style="height: 35px;margin-left: -10px;border-radius: 50px;background-color:white !important;font-size:12px;"
                            placeholder="Apakah Anda Kehilangan Barang?">
                    </div>
                </div>
                <div class="row mt-3" id="itemKategori">
                    <div class="col-4 mb-1">
                        <a href="{{ route('lostItems') }}">
                            <div class="card {{ !isset($category_id) ? 'card-active' : '' }}">
                                <div class="card-body" style="text-align: center;padding:8px">
                                    <h6 class="mb-0">Semua</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @foreach ($categories as $category)
                        <div class="col-4 mb-1">
                            <a href="{{ route('lostItems.category', ['slug' => $category->slug]) }}">
                                <div
                                    class="card {{ isset($category_id) && $category->id == $category_id ? 'card-active' : '' }}">
                                    <div class="card-body" style=   "text-align: center;padding:8px">
                                        <h6 class="mb-0">{{ $category->category_name }}</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-2">
                    @foreach ($lostitems as $lost)
                        <div class="card w-100 mb-3 " style="box-shadow: 0px 4px 14px 2px rgba(0,0,0,0.50);">
                            <div class="card-body text-muted">
                                <div class="row">
                                    <div class="col-2"><img
                                            src="{{ $lost->user->image ? asset('storage/users/' . $lost->user->image) : asset('images/user.png') }}"
                                            class="w-100" style="aspect-ratio: 1;border-radius: 50%;margin-top:1px"
                                            alt=""></div>
                                    <div class="col-10">
                                        <h4 class="mb-0">{{ $lost->user->name }}
                                        </h4>
                                        <small>{{ $lost->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                                <p class="mt-1">{{ $lost->postingan }}</p>
                                @if ($lost->image !== null)
                                    <div class="text-center px-3">
                                        <img src="{{ asset('storage/lostItems/' . $lost->image) }}"
                                            class="w-100 rounded-lg" style="max-height:200px" alt="">
                                    </div>
                                @endif
                                <div class="text-right">
                                    <a href="https://wa.me/{{ $lost->no_tlp }}"
                                        class="btn btn-success py-3 mt-2 mb-1"><i class="fa-brands fa-whatsapp fa-2x"
                                            style="margin-right: 10px"></i>Chat
                                        Ke Whatsapp</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-main-layout>
