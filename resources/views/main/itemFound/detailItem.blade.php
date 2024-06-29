<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="container mt-3">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{asset('images')}}/prod-1.jpg" class="w-75 mt-5" height="200px" alt="...">
                        </div>
                        <div class="table-responsive mt-5">
                            <table class="table">
                                <tr>
                                    <td width="30%">Nama Barang</td>
                                    <td width="5%"> : </td>
                                    <td>Sepatu Kuda</td>
                                </tr>
                                <tr>
                                    <td width="37%">Yang Menemukan</td>
                                    <td width="5%"> : </td>
                                    <td>Heru Kristanto</td>
                                </tr>
                                <tr>
                                    <td width="30%">Lokasi DItemukan</td>
                                    <td width="5%"> : </td>
                                    <td>Basement Gedung 5</td>
                                </tr>
                                <tr>
                                    <td width="30%">Kategori</td>
                                    <td width="5%"> : </td>
                                    <td>Sepatu</td>
                                </tr>
                                <tr>
                                    <td width="30%">Deskripsi</td>
                                    <td width="5%"> : </td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, alias expedita nulla modi laborum quaerat animi veritatis, corporis soluta dolores quos provident facere ex consequuntur laudantium quis, perspiciatis est minus.</td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-center mt-5 mb-3">
                            <button type="button" onclick="chatWA()" class="btn btn-success py-3"><i class="fa-brands fa-whatsapp fa-2x" style="margin-right: 10px"></i>Chat Ke Penemu</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function chatWA(){
            window.location.href = "https://wa.me/62859126462972?text=" + encodeURIComponent('{{$message}}');
        }
    </script>
</x-app-main-layout>