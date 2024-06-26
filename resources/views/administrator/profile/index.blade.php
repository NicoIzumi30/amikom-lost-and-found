<x-app-layout>
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Profile</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-5 pb-3">
                    <div class="card-header">
                        <h5>Edit Profile</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('images/logo.png') }}" class="w-100" alt="">
                            </div>
                            <div class="col-md-9">
                                <form action="">
                                    <div class="mb-3">
                                        <label for="">Full Name</label>
                                        <input type="text" class="form-control" value="{{$data->name}}" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" value="{{$data->email}}" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Phone Number</label>
                                        <input type="tel" class="form-control" value="{{$data->no_tlp}}" name="phone">
                                    </div>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mb-3 pb-3">
                    <div class="card-header">
                        <h5>Change Password</h5>
                    </div>
                    <div class="card-body">
                            <form action="">
                                <div class="mb-3">
                                    <label for="">Current Password</label>
                                    <input type="password" class="form-control" name="current_password">
                                </div>
                                <div class="mb-3">
                                    <label for="">New Password</label>
                                    <input type="password" class="form-control" name="new_password">
                                </div>
                                <div class="mb-3">
                                    <label for="">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password">
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
