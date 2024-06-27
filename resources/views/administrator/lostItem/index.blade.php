<x-app-layout>
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Lost Items</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="modal fade" id="info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio magnam illo quos porro. Velit porro itaque quia ipsa magni rerum sapiente unde ducimus, exercitationem aliquid perferendis ea eum illo dolorum consequuntur iure non fugiat molestiae iste voluptatibus eveniet animi numquam labore tempore? Odit placeat porro libero magni, consequatur molestias dignissimos repellendus facere? Sequi nostrum sint officia accusantium consectetur dolorum sunt pariatur necessitatibus, harum quis ipsa soluta assumenda fugiat voluptas similique corrupti, nulla magnam saepe nemo sapiente incidunt suscipit eius aspernatur perferendis. Officiis repudiandae reiciendis quisquam voluptates quo sint quaerat, saepe qui ipsa placeat impedit doloribus molestiae ratione similique omnis non illo aliquam explicabo sequi. Fugiat modi laudantium animi illum dolorum ratione ad consectetur assumenda nemo sint reiciendis doloremque nihil libero autem aut commodi pariatur non, dolorem est. Veritatis aspernatur rerum illum eos nihil voluptas nam, tempore quis expedita est cupiditate qui, nobis molestiae molestias animi impedit! Sequi recusandae fugit ipsa.
                        </div>
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
                                        <td>Title</td>
                                        <td>Status</td>
                                        <td>Date</td>
                                        <td>No Telp</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Heru Kristanto</td>
                                        <td>Kehilangan botol minum di sekitar basemant gedung 5</td>
                                        <td><span class="badge badge-danger">Belum Ditemukan</span></td>
                                        <td>2024-06-25 01:00</td>
                                        <td>085123456789</td>
                                        <td>
                                            <a href="#" class="btn btn-danger tombol-hapus m-1">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#info" class="btn btn-info m-1">
                                                <i class="fas fa-info"></i>
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