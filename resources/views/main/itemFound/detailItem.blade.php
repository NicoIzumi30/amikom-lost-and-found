<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="container mt-3">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{asset('/storage/item-found/'.$data->image)}}" class="w-75 mt-5" height="200px" alt="...">
                        </div>
                        <div class="table-responsive mt-5">
                            <table class="table">
                                <tr>
                                    <td width="30%">Nama Barang</td>
                                    <td width="5%"> : </td>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <td width="37%">Yang Menemukan</td>
                                    <td width="5%"> : </td>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Lokasi DItemukan</td>
                                    <td width="5%"> : </td>
                                    <td>{{$data->location}}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Kategori</td>
                                    <td width="5%"> : </td>
                                    <td>{{$data->category->category_name}}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Deskripsi</td>
                                    <td width="5%"> : </td>
                                    <td>{{$data->description}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-center mt-5 mb-3">
                            <a href="https://wa.me/{{$data->no_tlp}}" class="btn btn-success py-3"><i class="fa-brands fa-whatsapp fa-2x" style="margin-right: 10px"></i>Chat Ke Penemu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-main-layout>
