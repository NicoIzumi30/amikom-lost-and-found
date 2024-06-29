<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="container mt-3">
                    <div class="row mb-1">
                        <div class="col-2">
                            <img src="{{auth()->user()->image ? asset('storage/users/'.auth()->user()->image) : asset('storage/users/user.png')}}" class="w-75" style="aspect-ratio: 1;border-radius: 50%" alt="">
                        </div>
                        <div class="col-10">
                        <input type="text" class="form-control createItemFound" readonly style="height: 45px;margin-top: 1px;margin-left: -20px;border-radius: 50px" placeholder="Apakah Anda Menemukan Barang?">
                        </div>
                    </div>
                <div class="row my-3" id="itemKategori">
                    
                    <div class="col-3 mb-1">
                        <div class="card">
                            <div class="card-body" style="text-align: center;padding:8px">
                                <h4 class="mb-0">Elekronik</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-1">
                        <div class="card">
                            <div class="card-body" style="text-align: center;padding:8px">
                                <h4 class="mb-0">Elekronik</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-1">
                        <div class="card">
                            <div class="card-body" style="text-align: center;padding:8px">
                                <h4 class="mb-0">Elekronik</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-1">
                        <div class="card">
                            <div class="card-body" style="text-align: center;padding:8px">
                                <h4 class="mb-0">Elekronik</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-1">
                        <div class="card">
                            <div class="card-body" style="text-align: center;padding:8px">
                                <h4 class="mb-0">Elekronik</h4> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 mb-2">
                        <a href="{{route('itemFound.detail')}}">
                            <div class="card w-100">
                                <div class="card-body">
                                    <div class="text-center">
                                        <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="150px" alt="...">
                                    </div>
                                    <h5 class="card-title mt-2">Ditemukan sepatu Casual di gedung 5</h5>
                                    <div class="text-right">
                                        <small class="text-dark">3 Jam Yang Lalu</small>
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
                                        <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="150px" alt="...">
                                    </div>
                                    <h5 class="card-title mt-2">Ditemukan sepatu Casual di gedung 5 Ditemukan sepatu
                                        Casual di gedung 5</h5>
                                    <div class="text-right">
                                        <small class="text-dark">3 Jam Yang Lalu</small>
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
                                        <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="150px" alt="...">
                                    </div>
                                    <h5 class="card-title mt-2">Ditemukan sepatu Casual di gedung 5</h5>
                                    <div class="text-right">
                                        <small class="text-dark">3 Jam Yang Lalu</small>
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
                                        <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="150px" alt="...">
                                    </div>
                                    <h5 class="card-title mt-2">Ditemukan sepatu Casual di gedung 5</h5>
                                    <div class="text-right">
                                        <small class="text-dark">3 Jam Yang Lalu</small>
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
                                        <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="150px" alt="...">
                                    </div>
                                    <h5 class="card-title mt-2">Ditemukan sepatu Casual di gedung 5</h5>
                                    <div class="text-right">
                                        <small class="text-dark">3 Jam Yang Lalu</small>
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
                                        <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="150px" alt="...">
                                    </div>
                                    <h5 class="card-title mt-2">Ditemukan sepatu Casual di gedung 5</h5>
                                    <div class="text-right">
                                        <small class="text-dark">3 Jam Yang Lalu</small>
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
                                        <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="150px" alt="...">
                                    </div>
                                    <h5 class="card-title mt-2">Ditemukan sepatu Casual di gedung 5</h5>
                                    <div class="text-right">
                                        <small class="text-dark">3 Jam Yang Lalu</small>
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
                                        <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="150px" alt="...">
                                    </div>
                                    <h5 class="card-title mt-2">Ditemukan sepatu Casual di gedung 5</h5>
                                    <div class="text-right">
                                        <small class="text-dark">3 Jam Yang Lalu</small>
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
                                        <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="150px" alt="...">
                                    </div>
                                    <h5 class="card-title mt-2">Ditemukan sepatu Casual di gedung 5</h5>
                                    <div class="text-right">
                                        <small class="text-dark">3 Jam Yang Lalu</small>
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
                                        <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="150px" alt="...">
                                    </div>
                                    <h5 class="card-title mt-2">Ditemukan sepatu Casual di gedung 5</h5>
                                    <div class="text-right">
                                        <small class="text-dark">3 Jam Yang Lalu</small>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                </div>
               
            </div>
        </div>
    </div>
</x-app-main-layout>