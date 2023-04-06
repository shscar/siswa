<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?> 

    <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Data Siswa</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="table-wrap">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Ali</td>
                            <td>3646</td>
                            <td>L</td>
                            <td>02</td>
                            <td>Japan</td>
                            <td>
                                <!-- <a href="#" class="btn btn-success">Progress</a> -->
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?= $this->endSection() ?>