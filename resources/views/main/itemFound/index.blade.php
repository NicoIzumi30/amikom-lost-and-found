<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="container mt-3">
                <div class="row mb-1">
                    <div class="col-2">
                        <img src="{{ auth()->user()->image ? asset('storage/users/' . auth()->user()->image) : asset('images/user.png') }}"
                            class="w-100" style="aspect-ratio: 1;border-radius: 50%;border:1px solid rgba(0,0,0,0.50);"
                            alt="">
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control createItemFound" readonly
                            style="height: 35px;margin-left: -10px;border-radius: 50px;background-color:white !important;font-size:12px;"
                            placeholder="Apakah Anda Menemukan Barang?">
                    </div>
                </div>
                <div class="row mt-3 mb-2" id="itemKategori">
                    <div class="col-4 mb-1">
                        <a href="{{ route('itemFound') }}">
                            <div class="card {{ !isset($category_id) ? 'card-active' : '' }}">
                                <div class="card-body" style="text-align: center;padding:8px">
                                    <h6 class="mb-0">Semua</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @foreach ($categories as $category)
                        <div class="col-4 mb-1">
                            <a href="{{ route('itemFound.category', ['slug' => $category->slug]) }}">
                                <div
                                    class="card {{ isset($category_id) && $category->id == $category_id ? 'card-active' : '' }}">
                                    <div class="card-body" style="text-align: center;padding:8px">
                                        <h6 class="mb-0">{{ $category->category_name }}</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row mb-3" id="item-container">
                    @forelse ($data as $key => $itemfound)
                        <div class="col-12 mb-2">
                            <a href="{{ route('itemFound.detail', ['slug' => $itemfound->slug]) }}">
                                <div class="card w-100" style="box-shadow: 0px 4px 14px 2px rgba(0,0,0,0.50);">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-2"><img
                                                    src="{{ $itemfound->user->image ? asset('storage/users/' . $itemfound->user->image) : asset('images/user.png') }}"
                                                    class="w-100" style="aspect-ratio: 1;border-radius: 50%;margin-top:5px"
                                                    alt=""></div>
                                            <div class="col-10">
                                                <h4 class="mb-0">{{ $itemfound->user->name }}</h4>
                                                <small>{{ $itemfound->created_at->diffForHumans() }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="{{ asset('storage/item-found/' . $itemfound->image) }}" class="w-100"
                                                style="max-height:180px" alt="...">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <h6 class="card-title mb-0">{{ $itemfound->title }}</h6>
                                        <small class="card-description mb-1">{{ $itemfound->description }}</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 my-3 text-center">
                            <h3>Belum ada barang yang ditemukan</h3>
                        </div>
                    @endforelse
                </div>

                @if (count($data) >= 10)
                    <div class="text-center mb-3">
                        <button id="load-more" class="btn btn-primary">Show More</button>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            var skip = 10;

            $('#load-more').click(function () {
                $.ajax({
                    url: '{{ route('itemFound.loadMore') }}',
                    method: 'GET',
                    data: {
                        skip: skip
                    },
                    success: function (response) {
                        skip += 10;
                        response.forEach(function (found) {
                            $('#item-container').append(
                                `<div class="col-12 mb-2">
                                    <a href="/item-found/detail/${found.slug}">
                                        <div class="card w-100" style="box-shadow: 0px 4px 14px 2px rgba(0,0,0,0.50);">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-2"><img
                                                        src="${found.user_image}"
                                                        class="w-100" style="aspect-ratio: 1;border-radius: 50%;margin-top:5px"
                                                        alt=""></div>
                                                    <div class="col-10">
                                                        <h4 class="mb-0">${found.name}</h4>
                                                        <small>${found.created_at}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="text-center">
                                                    <img src="${found.image}" class="w-100"
                                                        style="max-height:180px" alt="...">
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <h6 class="card-title mb-0">${found.title}</h6>
                                                <small class="card-description mb-1">${found.description}</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>`
                            );
                        });
                    }
                });
            });
        });
    </script>
</x-app-main-layout>