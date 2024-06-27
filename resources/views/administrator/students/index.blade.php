<x-app-layout>
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Students</h3>
            </div>
        </div>
        <div class="clearfix"></div>

         <!-- Modal Edit Data-->
         <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Students</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="col-md-12 mb-3 form-group has-feedback">
                                <input type="text" class="form-control has-feedback-left" value="Heru Kristanto" id="inputSuccess2"
                                    placeholder="Full Name" name="name">
                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 mb-3  form-group has-feedback">
                                <input type="email" class="form-control has-feedback-left" value="herukristanto@students.amikom.ac.id" name="email" id="inputSuccess3" placeholder="Email">
                                <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                            </div>

                            <div class="col-md-12 mb-3  form-group has-feedback">
                                <input type="tel" class="form-control has-feedback-left" value="085123456789" id="inputSuccess5" name="phone" placeholder="Phone">
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
                                    <tr>
                                        <td>1</td>
                                        <td>Heru Kristanto</td>
                                        <td>herukristanto@students.amikom.ac.id</td>
                                        <td><img src="{{asset('images/img.jpg')}}" width="60" alt=""></td>
                                        <td>
                                            <a href="#" class="btn btn-danger tombol-hapus m-1">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#editData" class="btn btn-info m-1">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>