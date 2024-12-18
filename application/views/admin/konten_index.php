<div id="ngilang">
  <?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">
  <div class="mt-1 mb-3">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
      Tambah Konten
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype='multipart/form-data'>
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalCenterTitle">Tambah Konten</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control" placeholder="Masukkan judul" name="judul" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="id_kategori" class="form-control" required>
                  <option value="">Pilih Kategori</option>
                  <?php foreach ($kategori as $kat) { ?>
                    <option value="<?= $kat['id_kategori'] ?>"><?= $kat['nama_kategori'] ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <textarea name="keterangan" class="form-control"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">Link</label>
                <textarea name="link" class="form-control"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <h5 class="card-header">Kategori Konten</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Kategori Konten</th>
          <th>Tanggal</th>
          <th>Kreator</th>
          <th>Foto</th>
          <th>Aksi</th>
          <th>link</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <?php $no = 1; foreach ($konten as $aa) { ?>
        <tr>
          <td><?= $no; ?></td>
          <td><?= $aa['judul'] ?></td>
          <td><?= $aa['nama_kategori'] ?></td>
          <td><?= $aa['tanggal'] ?></td>
          <td><?= $aa['nama'] ?></td>
          <td><?= $aa['link'] ?></td>
          <td>
            <a href="<?= base_url('assets/Modernize/upload/konten/' . $aa['foto']) ?>" target="_blank">
              <i class="ti ti-search"></i> Lihat Foto
            </a>
          </td>
          <td>
            <a href="<?= site_url('admin/konten/delete_data/' . $aa['foto']); ?>" 
               class="btn btn-sm btn-danger mt-1" 
               onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
              <i class="ti ti-trash"></i> 
            </a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-primary mt-1" data-bs-toggle="modal" data-bs-target="#konten<?= $no; ?>">
            <i class="ti ti-edit"></i> 
            </button>

            <!-- Modal -->
            <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <form action="<?= base_url('admin/konten/update') ?>" method="post" enctype='multipart/form-data'>
                <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" value="<?= $aa['judul'] ?>" name="judul">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="id_kategori" class="form-control" required>
                        <?php foreach ($kategori as $uu) { ?>
                            <option 
                            <?php if($uu['id_kategori']==$aa['id_kategori']){ echo"selected"; }?>
                            value="<?= $uu['id_kategori'] ?>"><?= $uu['nama_kategori'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">link</label>
                        <textarea name="link" class="form-control"><?= $aa['keterangan'] ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg" required>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
                </form>
            </div>
            </div>
          </td>
        </tr>
        <?php $no++; } ?>
      </tbody>
    </table>
  </div>
</div>
