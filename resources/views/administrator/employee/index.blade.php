<x-app-admin-layout>
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Employees</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Modal Import-->
        <div class="modal fade" id="importData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Import Data Employees</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('administrator.employees.import')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <ul>
                                <li style="font-size:15px;">Maximum file size 10 MB</li>
                                <li style="font-size:15px;">File extension must be xlxs</li>
                                <li style="font-size:15px;">Use this <a href="{{route('administrator.download.template')}}" style="text-decoration:underline">excel
                                        template</a> to import data</li>
                            </ul>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="file" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Import</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!-- Modal Add Data-->
        <div class="modal fade" id="addData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Data Employees</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('administrator.employees.store')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="col-md-12 mb-3 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" id="inputSuccess2"
                                    placeholder="Full Name" name="name" required>
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 mb-3  form-group has-feedback">
                                <input type="number" class="form-control has-feedback-left" name="nik" id="inputSuccess3"  required placeholder="NIK">
                                <span class="fa fa-address-card form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 mb-3  form-group has-feedback">
                                <input type="tel" class="form-control has-feedback-left" id="inputSuccess5" name="phone_number" required placeholder="Phone">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true" ></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        @foreach ($employees as $employee)
         <!-- Modal Edit Data-->
         <div class="modal fade" id="editData{{$employee->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Employees</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('administrator.employees.update', $employee->id)}}" method="post" >
                        @csrf
                        @method("PUT")
                        <div class="modal-body">
                            <div class="col-md-12 mb-3 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" value="{{$employee->name}}" id="inputSuccess2"
                                    placeholder="Full Name" name="name" required>
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 mb-3  form-group has-feedback">
                                <input type="number" class="form-control has-feedback-left" value="{{$employee->nik}}" name="nik" required id="inputSuccess3" placeholder="NIK">
                                <span class="fa fa-address-card form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 mb-3  form-group has-feedback">
                                <input type="tel" class="form-control has-feedback-left" value="{{$employee->phone_number}}" required id="inputSuccess5" name="phone_number" placeholder="Phone">
                                <span class="fa fa-phone form-control-feedback left" aria-hidden="true" ></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="modal-footer border-0">
                            <button class="btn btn-success rounded m-1" data-toggle="modal" data-target="#importData"><i
                                    class="fas fa-upload"></i> Import
                                Data</button>
                            <button class="btn btn-info m-1 rounded" data-toggle="modal" data-target="#addData"><i
                                    class="fas fa-plus"></i> Add New Data</button>
                        </div>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td width="4%">No</td>
                                        <td>Name</td>
                                        <td>NIK</td>
                                        <td>Phone Number</td>
                                        <td class="text-center">Image</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$employee->name}}</td>
                                        <td>{{$employee->nik}}</td>
                                        <td>{{$employee->phone_number}}</td>
                                        <td class="text-center"><img src="{{$employee->image ? asset('storage/users/'.$employee->image) : asset('storage/users/user.png')}}" width="60" alt=""></td>
                                        <td>
                                        <a href="{{route('administrator.employees.destroy', ['id' => $employee->id])}}" class="btn tombol-hapus btn-danger m-1">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            <a href="#" data-toggle="modal" data-target="#editData{{$employee->id}}" class="btn btn-info m-1">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <a href="{{route('administrator.employees.reset_password', ['id' => $employee->id])}}" class="btn reset btn-warning m-1">
                                                <i class="fas fa-rotate-right"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-admin-layout>