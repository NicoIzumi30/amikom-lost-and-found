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
                    <div class="card w-100 mb-3">
                        <div class="card-body text-muted">
                            <div class="row">
                                <div class="col-2"><img src="{{asset('storage/users/user.png')}}" class="w-75"
                                        style="aspect-ratio: 1;border-radius: 50%" alt=""></div>
                                <div class="col-10">
                                    <h3 class="mb-0" style="margin-left: -20px;margin-top:3px">Heru Kristanto</h3>
                                    <!-- <h4 style="margin-left:-20px;">Kehilangan botol minum bewarna abu abu di basement 5</h4> -->
                                    <small style="margin-left:-20px;">1 Jam yang lalu</small>
                                </div>
                            </div>
                            <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa blanditiis
                                iste quasi cupiditate, architecto totam voluptas id consequuntur inventore cumque
                                est quibusdam excepturi rem? Fuga quaerat ratione quos ullam doloribus.</p>

                            <div class="text-right">
                                <!-- <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="300px" alt=""> -->
                                <a href="#" class="btn btn-red py-3 m-1">Hapus</a>
                                <a href="{{route('lostItems.edit')}}" class="btn btn-info py-2 m-1">Edit</a>
                            </div>

                        </div>
                    </div>
                    <div class="card w-100 mb-3">
                        <div class="card-body text-muted">
                            <div class="row">
                                <div class="col-2"><img src="{{asset('storage/users/user.png')}}" class="w-75"
                                        style="aspect-ratio: 1;border-radius: 50%" alt=""></div>
                                <div class="col-10">
                                    <h3 class="mb-0" style="margin-left: -20px;margin-top:3px">Heru Kristanto</h3>
                                    <small style="margin-left:-20px;">1 Jam yang lalu</small>
                                </div>
                            </div>
                            <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa blanditiis
                                iste quasi cupiditate, architecto totam voluptas id consequuntur inventore cumque
                                est quibusdam excepturi rem? Fuga quaerat ratione quos ullam doloribus.</p>

                            <div class="text-center">
                                <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="300px" alt="">
                            </div>
                            <div class="text-right">
                                <div class="text-right">
                                    <!-- <img src="{{asset('images')}}/prod-1.jpg" class="w-75" height="300px" alt=""> -->
                                    <a href="#" class="btn btn-red py-3 m-1">Hapus</a>
                                    <a href="{{route('lostItems.edit')}}" class="btn btn-info py-2 m-1">Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function changeValue() {
            var kategorival = document.getElementById('kategori').value;
            if(kategorival == 1){
                window.location.href = "{{url('/history')}}";
            }else{
                window.location.href = "{{url('/history/item-found')}}";
            }
        }
    </script>
</x-app-main-layout>
