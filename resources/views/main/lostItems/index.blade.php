<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="container mt-3">
                <div class="row mb-1">
                    <div class="col-2">
                        <img src="{{auth()->user()->image ? asset('storage/users/' . auth()->user()->image) : asset('images/user.png')}}"
                            class="w-75" style="aspect-ratio: 1;border-radius: 50%;" alt="">
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control createLostItems" readonly
                            style="height: 45px;margin-top: 1px;margin-left: -20px;border-radius: 50px;background-color:white !important;"
                            placeholder="Apakah Anda Kehilangan Barang?">
                    </div>
                </div>
                <div class="row mt-5" id="itemKategori">
                    <div class="col-3 mb-1">
                        <a href="{{ route('lostItems') }}">
                            <div class="card {{!isset($category_id) ? 'card-active' : ''}}">
                                <div class="card-body" style="text-align: center;padding:8px">
                                    <h4 class="mb-0">Semua</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    @foreach ($categories as $category)
                        <div class="col-3 mb-1">
                            <a href="{{ route('lostItems.category', ['id' => $category->id]) }}">
                                <div class="card {{isset($category_id) && $category->id == $category_id ? 'card-active' : ''}}">
                                    <div class="card-body" style="text-align: center;padding:8px">
                                        <h4 class="mb-0">{{ $category->category_name  }}</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-3">
                    @foreach ($lostitems as $lost)
                        <div class="card w-100 mb-3">
                            <div class="card-body text-muted">
                                <div class="row">
                                    <div class="col-2"><img
                                            src="{{auth()->user()->image ? asset('storage/users/' . auth()->user()->image) : asset('images/user.png')}}"
                                            class="w-75" style="aspect-ratio: 1;border-radius: 50%" alt=""></div>
                                    <div class="col-10">
                                        <h3 class="mb-0" style="margin-left: -20px;margin-top:3px">{{$lost->user->name}}
                                        </h3>
                                        <small style="margin-left:-20px;">{{$lost->created_at->diffForHumans()}}</small>
                                    </div>
                                </div>
                                <p class="mt-2">{{$lost->postingan}}</p>
                                @if($lost->image !== null)
                                    <div class="text-center">
                                        <img src="{{ asset('storage/lostItems/' . $lost->image) }}" class="w-75" height="300px"
                                            alt="">
                                    </div>
                                @endif
                                <div class="text-right">
                                    <a href="https://wa.me/{{$lost->no_tlp}}" class="btn btn-success py-3 mt-3 mb-1"><i
                                            class="fa-brands fa-whatsapp fa-2x" style="margin-right: 10px"></i>Chat
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