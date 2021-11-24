<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if ( validation_errors() ) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda">
                        </div>
                        <div class="mb-3">
                            <label for="nrp" class="form-label">NRP</label>
                            <input type="text" class="form-control" id="nrp" name="nrp" placeholder="Masukkan NRP anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email anda">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" aria-label="Default select example" id="jurusan" name="jurusan">
                                <option selected disabled>- Pilih Jurusan Anda -</option>
                                <option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Mekatronika">Teknik Mekatronika</option>
                                <option value="Teknik Elektronika">Teknik Elektronika</option>
                                <option value="Teknik Elektro Industri">Teknik Elektro Industri</option>
                                <option value="Sistem Pembangkit Energi">Sistem Pembangkit Energi</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" name="tambah" class="btn btn-primary mt-3">Tambah Data</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>