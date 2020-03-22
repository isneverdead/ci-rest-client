<div class="container">
    <div class="col-md-6 mt-3">
            <div class="card text-grey mb-3 ml-5 neo1" >
                <div class="card-header tx">Form Ubah Mahasiswa</div>
                <div class="card-body">
                <!-- <?php if(validation_errors()) : ?>
                    <div class="alert tx alert-danger" role"alert>
                    <?= validation_errors(); ?>
                    </div>
                <?php endif; ?> -->
                    <form action="" method="post">
                    <div class="form-group tx">
                            <label for="nama">ID</label>
                            <input type="text" name="id" class="form-control" id="nama" value="<?= $mahasiswa['id'] ?>">
                            <small class="form-text  text-danger"><?= form_error('id'); ?></small>
                        </div>
                        <div class="form-group tx">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama'] ?>">
                            <small class="form-text  text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group tx">
                            <label for="nim">Nim</label>
                            <input type="text" name="nim" class="form-control" id="nim" value="<?= $mahasiswa['nim'] ?>">
                            <small class="form-text  text-danger"><?= form_error('nim'); ?></small>
                        </div>
                        <div class="form-group tx">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan" value="<?= $mahasiswa['jurusan'] ?>">
                            <small class="form-text  text-danger"><?= form_error('jurusan'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn tx neo2">Ubah Data</button>
                    </form>
                </div>
            </div>
    </div>
</div>
<style>
    body{
            background-color: #f0f2f4;
    }
    .neo1 {
        height: auto;
        width: auto;
        margin: 1rem;
        padding: 1rem;
        background: #f0f2f4;
        border-radius: 5px;
        box-shadow: -3px -3px 7px #ffffffb2, 3px 3px 5px rgba(94, 104, 121, 0.945);
    }

    .neo2 {
        height: auto;
        width: auto;
        margin: 1rem 0 0 0;
        padding: 1rem;
        background: #f0f2f4;
        border-radius: 5px;
        box-shadow: -3px -3px 7px #ffffffb2, 3px 3px 5px rgba(94, 104, 121, 0.945);
    }
    .neo2:focus {
        box-shadow: inset -3px -3px 7px #ffffffb0, inset 3px 3px 5px rgba(94, 104, 121, 0.692);
    }
    

    .nou1 {
        margin: 50px;
        height: 250px;
        width: 250px;
        background: #f0f2f4;
        border-radius: 5px;
        box-shadow: inset -3px -3px 7px #ffffffb0, inset 3px 3px 5px rgba(94, 104, 121, 0.692);
    }
    .tx {
        font-family: Arial, Helvetica, sans-serif;
        color: black;
        font-weight: bold;
    }
    .tc {
        color: #ff66cc;
    }
    .neu1 {
        margin: 0 0 1rem 0;
        display: flex;
        /* justify-content: center; */
        /* align-items: center; */
        height: 3.5rem;
        width: 60rem;
        background: #f0f2f4;
        border-radius: 5px;
        box-shadow: -3px -3px 7px #ffffffa6, 3px 3px 5px rgba(94, 104, 121, 0.712);
        position: relative;
    }
    .neu1:after {
        content: '';
        position: absolute;
        height: 60%;
        width: 96%;
        background-color: transparent;
        border-radius: 5px  ;
        box-shadow: inset -3px -3px 7px #ffffffb0, inset 3px 3px 5px rgba(94, 104, 121, 0.671);
    }
</style>