<x-app-main-layout>
    <div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="container mt-3">
                <!-- Cek apik sek tak comment po sek saiki -->
                <form action="{{ route('lostItems.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="">Tulis judul postingan anda</label>
                    <input type="text" name="title" id="" class="form-control form-custom">
                </div>
                <div class="mb-3">
                    <label for="">Berikan informasi tambahan</label>
                    <textarea name="description" class="form-control" rows="5" id=""></textarea>
                </div>
                <div class="mb-3">
                    <label for="">Barang tersebut masuk kategori apa?</label>
                    @foreach ($categories as $category)
                        <select name="category_id" id="" class="form-control form-custom">
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        </select>
                    @endforeach
                    {{-- <small class="text-warning">Jika bukan salah satunya, silahkan pilin 'Lain nya'</small> --}}
                    {{-- buat category lainnya aja --}}
                </div>
                <div class="mb-3">
                    <label for="">No yang bisa dihubungi</label>
                    <input type="text" name="no_tlp" id="" placeholder="Gunakan format 62"
                        class="form-control form-custom">
                </div>
                <p class="mb-0">Foto barang yang hilang (opsional)</p>
                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" name="image" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-lg">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</x-app-main-layout>
