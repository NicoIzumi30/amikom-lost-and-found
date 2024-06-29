<x-app-admin-layout>
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Item Found</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        @foreach ($data as $key => $itemfound)
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
                            {{ $itemfound->description }}
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal fade" id="image" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Image</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset('storage/item-found'.$itemfound->image) }}" class="w-100" alt="">
                        </div>
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
                                        <td>Title</td>
                                        <td>Location</td>
                                        <td>Status</td>
                                        <td>Date</td>
                                        <td>No Telp</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $itemfound)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $itemfound->name }}</td>
                                            <td>{{ $itemfound->title }}</td>
                                            <td>{{ $itemfound->location }}</td>
                                            <td><span class="badge badge-danger">{{ $itemfound->status }}</span></td>
                                            <td>{{ itemfound->update_at }}</td>
                                            <td>{{ $itemfound->no_tlp }}</td>
                                            <td>
                                                <a href="{{ route('administrator.itemFound.destroy', ['id' => $itemfound->id]) }}"
                                                    class="btn btn-danger tombol-hapus m-1">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#info"
                                                    class="btn btn-info m-1">
                                                    <i class="fas fa-info"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#image"
                                                    class="btn btn-warning m-1">
                                                    <i class="fas fa-image"></i>
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
