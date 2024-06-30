<x-app-main-layout>
    <div id="appCapsule">
        <form action="" id="update" method="POST">
            <div class="section mt-3 text-center">
                <div class="avatar-section">
                    <a href="#">
                        <img src="{{auth()->user()->image ? asset('storage/users/' . auth()->user()->image) : asset('images/user.png')}}"
                            alt="image" class="imaged w100 rounded" style="aspect-ratio: 1/1;">

                    </a>
                </div>
            </div>

            <div class="section mt-2 mb-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <form action="{{route('profile.update')}}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                @method('PUT')
                                <div class="section-title">Profil</div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group boxed">
                                            <div class="input-wrapper">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{auth()->user()->name}}" required>
                                                <i class="clear-input">
                                                    <ion-icon name="close-circle"></ion-icon>
                                                </i>
                                            </div>
                                        </div>
                                        @if(auth()->user()->role == 'employee')
                                        <div class="form-group boxed">
                                            <div class="input-wrapper">
                                                <label class="label" for="nik">NIK</label>
                                                <input type="number" class="form-control" id="nik" name="nik"
                                                    value="{{auth()->user()->nik}}" disabled required>
                                                <i class="clear-input">
                                                    <ion-icon name="close-circle"></ion-icon>
                                                </i>
                                            </div>
                                        </div>
                                        @else
                                        <div class="form-group boxed">
                                            <div class="input-wrapper">
                                                <label class="label" for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="{{auth()->user()->email}}" disabled required>
                                                <i class="clear-input">
                                                    <ion-icon name="close-circle"></ion-icon>
                                                </i>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="form-group boxed">
                                            <div class="input-wrapper">
                                                <label class="label" for="phone_number">No Telepon</label>
                                                <input type="number" class="form-control" id="phone_number" placeholder="Gunakan Format 62" name="phone_number"
                                                    value="{{auth()->user()->phone_number}}" required>
                                                <i class="clear-input">
                                                    <ion-icon name="close-circle"></ion-icon>
                                                </i>
                                            </div>
                                        </div>
                                        <div class="form-group boxed">
                                            <small class="mb-0 text-dark">Foto Profile</small>
                                            <div class="custom-file mb-0">
                                                <input type="file" class="custom-file-input" name="image"
                                                    id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>

                                        <hr>
                                        <button type="submit"
                                            class="btn btn-primary mr-1 btn-lg btn-block btn-profile">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @if(auth()->user()->role == 'employee')
                        <div class="col-12 col-md-6">
                            <div class="section-title">Update Password</div>
                            <form action="{{route('changePassword')}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group boxed">
                                            <div class="input-wrapper">
                                                <label class="label" for="current_password">Current Password</label>
                                                <input type="password" class="form-control" id="current_password"
                                                    name="current_password" required>
                                                <i class="clear-input">
                                                    <ion-icon name="close-circle"></ion-icon>
                                                </i>
                                            </div>
                                        </div>
                                        <div class="form-group boxed">
                                            <div class="input-wrapper">
                                                <label class="label" for="new_password">New Password</label>
                                                <input type="password" class="form-control" id="new_password"
                                                    name="new_password" required>
                                                <i class="clear-input">
                                                    <ion-icon name="close-circle"></ion-icon>
                                                </i>
                                            </div>
                                        </div>
                                        <div class="form-group boxed">
                                            <div class="input-wrapper">
                                                <label class="label" for="new_password_confirmation">Konfirmasi
                                                    Password</label>
                                                <input type="password" class="form-control" id="new_password_confirmation"
                                                    name="new_password_confirmation" required>
                                                <i class="clear-input">
                                                    <ion-icon name="close-circle"></ion-icon>
                                                </i>
                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit"
                                            class="btn btn-primary mr-1 btn-lg btn-block btn-profile">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>


            </div>
    </div>
</x-app-main-layout>