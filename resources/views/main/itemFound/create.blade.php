<x-app-main-layout>
    <div id="appCapsule">
        <div class="section pt-1">
            <div class="container mt-3">
                <form action="{{ route('itemFound.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Barang apa yang Anda  temukan?</label>
                        <input type="text" name="title" id="" class="form-control form-custom">
                    </div>
                    <div class="mb-3">
                        <label for="">Dimana Anda menemukan barang tersebut?</label>
                        <input type="text" name="location" id="" class="form-control form-custom">
                    </div>
                    <div class="mb-3">
                        <label for="">Barang tersebut masuk kategori apa?</label>
                        <select name="category_id" id="" class="form-control form-custom">
                            <option value="" disabled selected>Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Tulikan lebih detail terkait barang tersebut</label>
                        <textarea name="description" class="form-control" rows="3" id=""></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">No yang bisa dihubungi</label>
                        <input type="text" name="no_tlp" id="" placeholder="Gunakan format 62"
                            class="form-control form-custom" value="{{auth()->user()->phone_number ? auth()->user()->phone_number : ''}}">
                    </div>
                    <p class="mb-0">Berikan gambar barang tersebut</p>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" name="image" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-lg">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-main-layout>
