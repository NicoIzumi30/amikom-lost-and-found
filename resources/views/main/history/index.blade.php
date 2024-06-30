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
                <div class="row mt-5">
                    @foreach ($lostitems as $lost)
                        <div class="card w-100 mb-3">
                            <div class="card-body text-muted">
                                <div class="row">
                                    <div class="col-2"><img
                                            src="{{ auth()->user()->image ? asset('storage/users/' . auth()->user()->image) : asset('images/user.png') }}"
                                            class="w-75" style="aspect-ratio: 1;border-radius: 50%" alt="">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="mb-0" style="margin-left: -20px;margin-top:3px">
                                            {{ $lost->user->name }}
                                        </h3>
                                        <small
                                            style="margin-left:-20px;">{{ $lost->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                                <p class="mt-2">{{ $lost->postingan }}</p>
                                @if ($lost->image !== null)
                                    <div class="text-center">
                                        <img src="{{ asset('storage/lost-item/' . $lost->image) }}" class="w-75"
                                            height="300px" alt="">
                                    </div>
                                @endif
                                <div class="text-right">
                                    <div class="text-right">
                                        <a href="{{ route('lostItems.destroy', ['id' => $lost->id]) }}"
                                            class="btn btn-red py-3 m-1 tombol-hapus2">Hapus</a>
                                        <a href="{{ route('lostItems.edit', ['id' => $lost->id]) }}"
                                            class="btn btn-info py-2 m-1">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
