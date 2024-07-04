<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <select name="" class="form-control form-custom" onchange="changeValue()" id="kategori">
                            <option value="1">Kehilangan Barang</option>
                            <option value="2">Menemukan Barang</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    @forelse ($lostitems as $lost)
                        <div class="card w-100 mb-3">
                            <div class="card-body text-muted">
                                <div class="row">
                                    <div class="col-2"><img
                                            src="{{ $lost->user->image ? asset('storage/users/' . $lost->user->image) : asset('images/user.png') }}"
                                            class="w-100" style="aspect-ratio: 1;border-radius: 50%;margin-top:5px"
                                            alt="">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="mb-0">
                                            {{ $lost->user->name }}
                                        </h3>
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
                                    <div class="text-right">

                                        <a href="{{ route('lostItems.destroy', ['slug' => $lost->slug]) }}"
                                            class="btn btn-red py-3 m-1 tombol-hapus2">Hapus</a>
                                        <a href="{{ route('history.lostItems.edit', ['slug' => $lost->slug]) }}"
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
            </div>
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
