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
                <div class="row mt-3">
                    @foreach ($data as $userfound)
                        <div class="card w-100 mb-3">
                            <div class="card-body text-muted">
                                <div class="row">
                                    <div class="col-2"><img
                                            src="{{ $userfound->user->image ? asset('storage/users/' . $userfound->user->image) : asset('images/user.png') }}" class="w-100"
                                            style="aspect-ratio: 1;border-radius: 50%;margin-top:3px;" alt=""></div>
                                    <div class="col-10">
                                        <h4 class="mb-0">{{$userfound->user->name}}</h4>
                                        <small>{{ $userfound->created_at->diffForHumans() }}</small>
                                    </div>
                                </div>
                                <p class="mt-2">{{ $userfound->title }}</p>
                                <div class="text-center px-2">
                                    <img src="{{ asset('storage/item-found/' . $userfound->image) }}" class="w-100 rounded-lg"
                                        style="max-height:200px" alt="">
                                </div>
                                <div class="text-right mt-1 px-2">
                                    <a href="{{ route('itemFound.destroy', ['id' => $userfound->id]) }}"
                                        class="btn btn-red tombol-hapus me-1">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="{{ route('itemFound.edit', ['slug' => $userfound->slug]) }}"
                                        class="btn btn-info py-1"><i class="fas fa-pencil"></i></a>
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
