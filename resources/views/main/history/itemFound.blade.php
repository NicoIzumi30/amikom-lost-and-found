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
                    <div class="col-6 mb-2">
                        <a href="#">
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('images') }}/prod-1.jpg" class="w-75" height="150px"
                                            alt="...">
                                    </div>
                                    <h5 class="card-title mt-2">Botol minum warna coklat</h5>
                                    <div class="text-right">
                                    <a href="#" class="btn btn-red py-3 m-1">Hapus</a>
                                    <a href="{{route('itemFound.edit')}}" class="btn btn-info py-2 m-1">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 mb-2">
                        <a href="#">
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{ asset('images') }}/prod-1.jpg" class="w-75" height="150px"
                                            alt="...">
                                    </div>
                                    <h5 class="card-title mt-2">Botol minum warna coklat</h5>
                                    <div class="text-right">
                                    <a href="#" class="btn btn-red py-3 m-1">Hapus</a>
                                    <a href="{{route('itemFound.edit')}}" class="btn btn-info py-2 m-1">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function changeValue() {
            var kategorival = document.getElementById('kategori').value;
            if (kategorival == 1) {
                window.location.href = "{{url('/history')}}";
            } else {
                window.location.href = "{{url('/history/item-found')}}";
            }
        }
    </script>
</x-app-main-layout>