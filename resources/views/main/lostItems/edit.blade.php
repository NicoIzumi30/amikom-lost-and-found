<x-app-main-layout>
<div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="container mt-3">
                <form action="{{route('lostItems.update', $lostitem->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Tulis postingan Anda</label>
                    <textarea name="postingan" class="form-control" rows="5" id="" style="border-radius:10px">{{$lostitem->postingan}}</textarea>
                </div>
                <div class="mb-3">
                        <label for="">Barang tersebut masuk kategori apa?</label>
                        <select name="category_id" id="" class="form-control form-custom">
                            <option value="" disabled selected>Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $lostitem->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                <div class="mb-3"           >
                    <label for="">No yang bisa dihubungi</label>
                    <input type="text" name="no_tlp" id="" placeholder="Gunakan format 62" class="form-control form-custom" value="{{$lostitem->no_tlp}}">
                </div>
                <div class="mb-3">
                          <label for="">Status</label>
                    <select name="status" class="form-control" id="">
                        <option value="belum" @if($lostitem->status == 'belum') selected @endif>Belum ditemukan</option>
                        <option value="sudah" @if($lostitem->status == 'sudah') selected @endif>Sudah ditemukan</option>
                    </select>
                </div>
                <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" name="image" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-app-main-layout>