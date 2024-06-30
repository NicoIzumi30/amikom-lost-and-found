<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <select name="" class="form-control form-custom" onchange="changeValue()" id="kategori">
                            <option value="1">Kehilangan Barang</option>
                            <option value="2" selected>Menemukan Barang</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-5">
                    @foreach ($data as $userfound)
                        <div class="card w-100 mb-3">
                            <div class="card-body text-muted">
                                <div class="row">
                                    <div class="col-2"><img
                                            src="{{ asset('storage/users/' . $userfound->user->image) }}" class="w-75"
                                            style="aspect-ratio: 1;border-radius: 50%" alt=""></div>
                                    <div class="col-10">
                                        <h3 class="mb-0" style="margin-left: -20px;margin-top:3px">{{$userfound->user->name}}</h3>
                                        <small style="margin-left:-20px;">{{ $userfound->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                                <p class="mt-2">{{ $userfound->title }}</p>
                                <div class="text-center">
                                    <img src="{{ asset('storage/item-found/' . $userfound->image) }}" class="img-fluid"
                                        height="300px" alt="">
                                </div>
                                <div class="text-right">
                                    <a href="{{ route('itemFound.destroy', ['id' => $userfound->id]) }}"
                                        class="btn btn-red tombol-hapus m-1">
                                        Hapus
                                    </a>
                                    <a href="{{ route('history.itemFound.edit', $userfound->id) }}"
                                        class="btn btn-info py-2 m-1">Edit</a>
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
