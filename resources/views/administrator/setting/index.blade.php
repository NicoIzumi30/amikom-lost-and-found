<x-app-admin-layout>
    <div class="right_col" role="main">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-5 mt-3   pb-3">
                    <div class="card-header">
                        <h5>Application Setting</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('administrator.setting.update')}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="">Company Name</label>
                                    <input type="text" class="form-control" value="{{$setting->company_name}}" name="company_name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Application Name</label>
                                    <input type="text" class="form-control" value="{{$setting->application_name}}" name="application_name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Application Description</label>
                                    <textarea name="application_description" id="" class="form-control">{{$setting->application_description}}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Application Theme</label>
                                    <input type="color" class="form-control" value="{{$setting->application_theme}}" name="application_theme" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Permitted Email</label>
                                    <input type="text" class="form-control" value="{{$setting->permitted_email}}" name="permitted_email" required>
                                    <small class="text-danger">If there is more than one email, use a comma to separate
                                        them, for example: students.amikom.ac.id, amikom.ac.id</small>
                                </div>
                                <!-- <input type="file" name="image" id=""> -->
                                <div class="col-md-6 mb-3">
                                    <p>Company Logo</p>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="logo" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <img src="{{ $setting->company_logo ? asset('storage/logo/' . $setting->company_logo) : asset('icon512_rounded.png')}}" class="img-fluid mt-3" width="150px" alt="">
                                </div>
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
</x-app-admin-layout>