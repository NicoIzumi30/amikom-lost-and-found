<x-app-main-layout>
    <div id="appCapsule">
        <div class="section pt-1">
            <div class="container mt-3">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input type="text" name="title" id="" class="form-control form-custom"
                            value="{{ $data->title }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="">Lokasi</label>
                        <input type="text" name="location" id="" class="form-control form-custom"
                            value="{{ $data->location }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="">Kategory</label>
                        <input type="text" name="category_id" id="" class="form-control form-custom"
                            value="{{ $data->category->category_name }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="">Detail</label>
                        <textarea name="description" class="form-control" rows="3" id="" disabled>{{ $data->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="">Status</label>
                            <select name="status" id="" class="form-control form-custom">
                                <option value="{{$data->status}}" selected>{{$data->status}}</option>
                                <option value="belum">belum</option>
                                <option value="ditemukam">ditemukan</option> {{--migration fresh database ada yang typo bagian ditemukan  --}}
                            </select>
                    </div>

                    <div class="mb-3">
                        <label for="">No yang bisa dihubungi</label>
                        <input type="text" name="no_tlp" id="" placeholder="Gunakan format 62"
                            class="form-control form-custom" value="{{ $data->no_tlp }}">
                    </div>
                    <p class="mb-0">Berikan gambar barang tersebut</p>
                    <div class="mb-3">
                        <img src="{{ asset('storage/item-found/' . $data->image) }}" class="img-fluid" height="150px"
                            alt="...">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-lg">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-main-layout>
