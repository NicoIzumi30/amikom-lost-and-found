<x-app-layout>
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Students</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <!-- Modal Edit Data-->
        @foreach ($students as $student)
            <div class="modal fade" id="editData{{$student->phone_number}}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Students</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route('administrator.students.update', ['id' => $student->id])}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="col-md-12 mb-3 form-group has-feedback">
                                    <input type="text" class="form-control has-feedback-left" value="{{$student->name}}"
                                        id="inputSuccess2" placeholder="Full Name" name="name" required>
                                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                </div>

                                <div class="col-md-12 mb-3  form-group has-feedback">
                                    <input type="email" class="form-control has-feedback-left"
                                        value="{{$student->email}}" name="email" id="inputSuccess3"required
                                        placeholder="Email">
                                    <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
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
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td width="4%">No</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Image</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$student->name}}</td>
                                            <td>{{$student->email}}</td>
                                            <td><img src="{{$student->image ? asset('storage/users/' . $student->image) : asset('storage/users/user.png')}}"
                                                    width="60" alt=""></td>
                                            <td>
                                            <a href="{{route('administrator.students.destroy', ['id' => $student->id])}}" class="btn tombol-hapus btn-danger m-1">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                <a href="#" data-toggle="modal"
                                                    data-target="#editData{{$student->phone_number}}"
                                                    class="btn btn-info m-1">
                                                    <i class="fas fa-pen"></i>
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
</x-app-layout>