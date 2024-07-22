<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            {{-- <div class="container mt-3"> --}}
            <div class="row">
                <div class="col mt-3">
                    <select name="" class="form-control form-custom" onchange="changeValue()" id="kategori">
                        <option value="1">Kehilangan Barang</option>
                        <option value="2" selected>Menemukan Barang</option>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                @forelse ($data as $userfound)
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="card w-100  " style="box-shadow: 0px 4px 14px 2px rgba(0,0,0,0.50);">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-2"><img
                                            src="{{ $userfound->user->image ? asset('storage/users/' . $userfound->user->image) : asset('images/user.png') }}"
                                            class="w-100" style="aspect-ratio: 1;border-radius: 50%;margin-top:3px;"
                                            alt=""></div>
                                    <div class="col-10 mt-1">
                                        <h4 class="mb-0">{{ $userfound->user->name }}</h4>
                                        <small>{{ $userfound->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-muted">

                                <p class="mt-1">{{ $userfound->title }}</p>
                                <div class="text-center px-2">
                                    <img src="{{ asset('storage/item-found/' . $userfound->image) }}"
                                        class="img-fluid"
                                            style="max-height: 180px; max-width: 100%;" alt="...">
                                </div>
                                <div class="text-right">
                                    <a href="{{ route('itemFound.destroy', ['slug' => $userfound->slug]) }}"
                                        class="btn btn-red tombol-hapus m-1">
                                        Hapus
                                    </a>
                                    <a href="{{ route('history.itemFound.edit', ['slug' => $userfound->slug]) }}"
                                        class="btn btn-info py-1"><i class="fas fa-pencil"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 my-3 text-center">
                        <h3 class="text-muted">Belum ada postingan yang ditemukan</h3>
                    </div>
                @endforelse
            </div>
            {{-- </div> --}}
        </div>
    </div>
    <script>
        function changeValue() {
            var kategorival = document.getElementById('kategori').value;
            if (kategorival == 1) {
                window.location.href = "{{ url('/history') }}";
            } else {
                window.location.href = "{{ url('/history/item-found') }}";
            }
        }
    </script>
</x-app-main-layout>
