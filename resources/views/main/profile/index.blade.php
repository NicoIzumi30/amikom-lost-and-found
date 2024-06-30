<x-app-main-layout>
<div id="appCapsule">
    <form action="" id="update" method="POST">
        <div class="section mt-3 text-center">
            <div class="avatar-section">
                <a href="#">
                        <img src="{{auth()->user()->image ? asset('storage/users/' . auth()->user()->image) : asset('image/user.png')}}" alt="image" class="imaged w100 rounded">
                   
                </a>
            </div>
        </div>

        <div class="section mt-2 mb-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <form action="#" method="post">
                        <div class="section-title">Profil</div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group boxed">
                                    <div class="input-wrapper">
                                        <label class="label" for="name">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="Tegar" disabled required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group boxed">
                                    <div class="input-wrapper">
                                        <label class="label" for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="tegar@gmail.com" disabled required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group boxed">
                                    <div class="input-wrapper">
                                        <label class="label" for="email">No Telepon</label>
                                        <input type="email" class="form-control" id="email" name="email" value="082628763978" disabled required>
                                        <i class="clear-input">
                                            <ion-icon name="close-circle"></ion-icon>
                                        </i>
                                    </div>
                                </div>
                                <div class="form-group boxed">
                                <small class="mb-0 text-dark">Pilih File</small>
                <div class="custom-file mb-0">
                    <input type="file" class="custom-file-input" name="image" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                                </div>
                               
                                <hr>
                                <button type="submit" class="btn btn-danger mr-1 btn-lg btn-block btn-profile">Update</button>
                            </div>
                        </div>
                        </form>
                    </div>
    <div class="col-12 col-md-6">
        <div class="section-title">Update Password</div>
        <form action="#" method="post">
        <div class="card">
            <div class="card-body">
                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <label class="label" for="current_password">Current Password</label>
                            <input type="password" class="form-control" id="current_password" name="current_password" required>
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="new_password">New Password</label>
                        <input type="password" class="form-control" id="new_password" name="new_password" required>
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="konfirmasi_password">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" required>
                        <i class="clear-input">
                            <ion-icon name="close-circle"></ion-icon>
                        </i>
                    </div>
                </div>
                <hr>
                <button type="submit" class="btn btn-danger mr-1 btn-lg btn-block btn-profile">Update</button>
            </div>
        </div>
        </form>
    </div>
</div>
</div>


</div>
</div>
</x-app-main-layout>