<div class="container">   
        </div class="row mt-3">
        
        <div>

        <div class="row mt-3">
        <div class="ml-5 col-md-8">
        
            <h3>Daftar Mahasiswa</h3>
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <ul class="list-group" style="position: relative;">
                <div class="list-group-item neu1 tx" >
                    <span class="pl-5 pt-1 pb-1 ml-2 float-left" style="width: 25%;">Nama</span>
                    <span class="pl-5 pt-1 pb-1 float-left" style="width: 25%;">NIM</span>
                    <span class="pl-5 pt-1 pb-1 float-left" style="width: 25%;">Jurusan</span>
                </div>
                    <span class="tbh" style=""><a href="home/tambah" class="neo1" ><i class="fas fa-user-plus" style="color: black;"></i></a></span>
                
                <?php foreach( $mahasiswa as $mhs ) : ?>
                <div class="list-group-item neu2">
                    <span class="list-group-item float-left mr-2 tx neo3" style="width: 25%;"><?= $mhs['nama'] ?></span>
                    <span class="list-group-item float-left mr-2 tx neo3" style="width: 25%;"><?= $mhs['nim'] ?></span>
                    <span class="list-group-item float-left mr-2 tx neo3" style="width: 30%;"><?= $mhs['jurusan'] ?></span>
                    <a href="home/ubah/<?= $mhs['id']?>"><button class="neo2" ><i class="fas fa-edit" style="color: black; padding: 0.3rem;"></i></button></a>
                    <a href="home/hapus/<?= $mhs['id']?>"><button class="neo2" ><i class="fas fa-trash-alt" style="color: black; padding: 0.3rem;"></i></button></a>
                    
                    
                    
                </div>
                
                <?php endforeach; ?>
            </ul>
            
        </div>

        </div>
    </div>
</div>
<style>
    
    body{
            background-color: #f0f2f4;
    }
    .tbh {
        position: absolute;
        top: 1rem;
        right: -7%;
    }
    
    .neo1 {
        height: 2rem;
        width: 2rem;
        top: 1rem;
        left: 3rem;
        margin: 0;
        padding: 1rem;
        background: #f0f2f4;
        border-radius: 5px;
        box-shadow: -3px -3px 7px #ffffffb2, 3px 3px 5px rgba(94, 104, 121, 0.945);
    }
    .neo1:focus {
        box-shadow: inset -3px -3px 7px #ffffffb0, inset 3px 3px 5px rgba(94, 104, 121, 0.692);
    }

    .neo2 {
        align: center;
        height: 3rem;
        width: 4rem;
        margin: 0 0 0 0.5rem;
        padding: 0.5rem;
        background: #f0f2f4;
        border-radius: 5px;
        box-shadow: -3px -3px 7px #ffffffb2, 3px 3px 5px rgba(94, 104, 121, 0.945);
    }
    .neo2:focus {
        box-shadow: inset -3px -3px 7px #ffffffb0, inset 3px 3px 5px rgba(94, 104, 121, 0.692);
    }
    .neo3 {
        align: center;
        height: 3rem;
        width: 4rem;
        margin: 0rem;
        padding: 0;
        background: #66ff99;
        border-radius: 5px;
        box-shadow: -3px -3px 7px #ffffffb2, 3px 3px 5px rgba(94, 104, 121, 0.945);
    }
    .neo3:focus {
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
        width: 55rem;
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
    .neu2 {
        margin: 0 0 0.5rem 0;
        display: flex;
        /* justify-content: center; */
        /* align-items: center; */
        height: 6rem;
        width: 60rem;
        background: #f0f2f4;
        border-radius: 2%;
        box-shadow: -3px -3px 7px #ffffffa6, 3px 3px 5px rgba(94, 104, 121, 0.712);
        position: relative;
    }
    /* .neu2:after {
        content: '';
        position: absolute;
        height: 75%;
        width: 96%;
        background-color: transparent;
        border-radius: 5%;
        box-shadow: inset -3px -3px 7px #ffffffb0, inset 3px 3px 5px rgba(94, 104, 121, 0.671);
    } */


    .btn-list {
        width: 100%;
        max-width:98rem;
        padding: 0 1.5rem;
        display: flex;
        justify-content: space-between;
    }
    .btn-item {
        list-style: none;
    }
    .btn-link {
        margin: 5rem 0 2rem 5rem;
        display: flex;
        font-size: 1rem;
        text-decoration: none;
        color: #b6bbc5;
        width: 10rem;
        height: 1.5rem;
        /* background-color: red;  */
        border-radius: 10%;
        box-shadow:
                1rem 1rem 2rem rgba(0,0,0,.1),
                -1rem -1rem 2rem rgba(255,255,255,.5);
    }

</style>

