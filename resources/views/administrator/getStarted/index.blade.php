<x-app-layout>
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Get Started</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <!-- Modal Add Data-->
        <div class="modal fade" id="addData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Announcement</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('administrator.getStarted.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <span>Image</span>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                <label class="custom-file-label" for="customFile">Choose file</label>
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

        <!-- Modal Edit Data-->
        @foreach ($data as $key => $getstarted)
            <div class="modal fade" id="editData{{ $getstarted->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Employees</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('administrator.getStarted.update', ['id' => $getstarted->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $getstarted->title }}">
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Description</label>
                                    <textarea name="description" class="form-control">{{ $getstarted->description }}</textarea>
                                </div>
                                <span>Image</span>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="image">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
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
                        @if (count($data) == 3)
                        @else
                            <div class="modal-footer border-0">
                                <button class="btn btn-info m-1 rounded" data-toggle="modal" data-target="#addData"><i
                                        class="fas fa-plus"></i> Add New Data</button>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td width="4%">No</td>
                                        <td>Title</td>
                                        <td>Description</td>
                                        <td>Image</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $getstarted)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $getstarted->title }}</td>
                                            <td>{{ $getstarted->description }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('storage/get-started/' . $getstarted->image) }}"
                                                    alt="" width="60">
                                            </td>
                                            <td>
                                                <a href="{{route('administrator.getStarted.destroy', ['id' => $getstarted->id])}}" class="btn btn-danger m-1">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                                <a href="#" data-toggle="modal" data-target="#editData{{ $getstarted->id }}" class="btn btn-info m-1">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
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
