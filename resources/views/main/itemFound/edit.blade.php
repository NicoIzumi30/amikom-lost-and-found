<x-app-main-layout>
    <div id="appCapsule">
        <div class="section pt-1">
            <div class="container mt-3">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Barang apa yang Anda temukan?</label>
                        <input type="text" name="title" id="" value="{{ $data->title }}"
                            class="form-control form-custom">
                    </div>
                    <div class="mb-3">
                        <label for="">Lokasi</label>
                        <input type="text" name="location" id="" class="form-control form-custom"
                            value="{{ $data->location }}" >
                    </div>
                    <div class="mb-3">
                        <label for="">Kategori</label>
                        <select name="category_id" id="" class="form-control form-custom">
                            <option value="" disabled selected>Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $data->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                            @endforeach
                        </select>>
                    </div>
                    <div class="mb-3">
                        <label for="">Tulikan lebih detail terkait barang tersebut</label>
                        <textarea name="description" class="form-control" rows="3"
                            id="">{{ $data->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control form-custom">
                            <option value="belum" @if($data->status == 'belum') selected @endif>Belum ditemukan</option>
                            <option value="ditemukan" @if($data->status == 'ditemukan') selected @endif>Sudah ditemukan
                            </option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="">No yang bisa dihubungi</label>
                        <input type="text" name="no_tlp" id="" placeholder="Gunakan format 62"
                            class="form-control form-custom" value="{{ $data->no_tlp }}">
                    </div>
                    <p class="mb-0">Berikan gambar barang tersebut</p>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" name="image" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <img src="{{ asset('storage/item-found/' . $data->image) }}" class="img-fluid" height="150px"
                            alt="...">
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-lg">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-main-layout>