<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post" class="needs-validation">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="nrp" class="form-label">NRP</label>
                            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Masukkan NRP anda" value="<?= $mahasiswa['nrp']; ?>">
                            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email anda" value="<?= $mahasiswa['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" aria-label="Default select example" id="jurusan" name="jurusan" >
                                <option selected disabled>- Pilih Jurusan Anda -</option>
                                <?php foreach ($jurusan as $jur) : 
                                    if ( $jur == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $jur; ?>" selected><?= $jur; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $jur; ?>"><?= $jur; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url() ?>mahasiswa" class="btn btn-secondary mt-3 me-3">Kembali</a>
                            <button type="submit" name="ubah" class="btn btn-primary mt-3">Ubah Data</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>