<div class="container">

    <?php if ( $this->session->flashdata('flash') ) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-7">
                                <?= $mhs['nama']; ?>
                            </div>
                            <div class="col-md-5">
                                <a href="<?= base_url()?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge btn btn-primary float-right">Detail</a>
                                <a href="<?= base_url()?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge btn btn-success float-right">Ubah</a>
                                <a href="<?= base_url()?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge btn btn-danger float-right" onclick="return confirm('Yakin mau menghapus?')">Hapus</a>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>