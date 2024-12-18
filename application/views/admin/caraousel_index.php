<div id="ngilang">
  <?= $this->session->flashdata('alert') ?>
</div>
<div class="col-x1-12">
    <div class="card">
    <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype='multipart/form-data'>
        <h5 class="card-header">Caraousel</h5>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control" placeholder="judul foto" name="judul" required>
              </div>
            <div class="mb-4">
                <label for="formFile" class="form-label">Pilih Foto dengan ukuran (1:3)</label>
                <input class="form-control" type="file" name="foto">
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>
</div>
<?php foreach ($caraousel as $aa) { ?>
<div class="col-md-10 mb-0 mt-3">
    <div class="card">
        <img src="<?= base_url('assets/Modernize/upload/caraousel/' . $aa['foto']) ?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><?= $aa['judul'] ?></h5>
            <a href="<?= site_url('admin/caraousel/delete_data/' . $aa['foto']); ?>" 
                class="btn btn-sm btn-danger mt-1" 
                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                <i class="ti ti-trash"></i> 
            </a>
        </div>
    </div>
</div>
<?php } ?>
