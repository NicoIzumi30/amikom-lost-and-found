<x-app-main-layout>
<div id="appCapsule">
        <!-- Wallet Card -->
        <div class="section pt-1">
            <div class="container mt-3">
                <div class="mb-3">
                    <label for="">Tulis postingan Anda</label>
                    <textarea name="postingan" class="form-control" rows="5" id="" style="border-radius:10px">Kehilangan Tumbler</textarea>
                </div>
                <div class="mb-3">
                    <label for="">No yang bisa dihubungi</label>
                    <input type="text" name="no_tlp" id="" placeholder="Gunakan format 62" class="form-control form-custom" value="087283728342">
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