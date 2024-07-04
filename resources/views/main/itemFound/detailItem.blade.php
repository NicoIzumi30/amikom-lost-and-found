<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="container my-3">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="text-center px-2">
                            <img src="{{asset('/storage/item-found/' . $data->image)}}" class="w-100 mt-2 rounded-lg" height="200px"
                                alt="...">
                        </div>
                        <div class="table-responsive mt-5">
                            <table class="table">
                                <tr>
                                    <td width="25%">Barang </td>
                                    <td width="5%"> : </td>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <td width="25%">Penemu</td>
                                    <td width="5%"> : </td>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <td width="25%">Lokasi DItemukan</td>
                                    <td width="5%" class="align-middle"> : </td>
                                    <td class="align-middle">{{$data->location}}</td>
                                </tr>
                                <tr>
                                    <td width="25%">Kategori</td>
                                    <td width="5%"> : </td>
                                    <td>{{$data->category->category_name}}</td>
                                </tr>
                                <tr>
                                    <td width="25%">Deskripsi</td>
                                    <td width="5%"> : </td>
                                    <td class="text-justify">{{$data->description}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-center mt-5 mb-3">
                            <a href="https://wa.me/{{$data->no_tlp}}" class="btn btn-success py-3"><i
                                    class="fa-brands fa-whatsapp fa-2x" style="margin-right: 10px"></i>Chat Ke
                                Penemu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-main-layout>
