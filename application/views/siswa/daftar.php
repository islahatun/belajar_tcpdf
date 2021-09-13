<div class="container-fluid">
    <div class="row">
        <div class="col-7">
            <table class="table ">
                <thead>
                    <tr class="text-center">
                        <th scope="col">NO</th>
                        <th scope="col">NISN</th>
                        <th scope="col">NIS</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i = 1; ?>
                        <?php foreach ($siswa as $s) : ?>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $s['nisn'] ?></td>
                            <td><?= $s['nis'] ?></td>
                            <td><?= $s['nama'] ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('Siswa/ubah/' . $s['id']) ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ubahsiswa" <?= $s['id'] ?>>UBAH</a>
                                <a href="" class="btn btn-danger">HAPUS</a>
                            </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ubahsiswa">
    Launch demo modal
</button> -->
<?php foreach ($siswa as $si) : ?>
    <!-- Modal -->
    <div class="modal fade" id="ubahsiswa" <?= $si['id'] ?> tabindex="-1" aria-labelledby="ubahsiswaLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahsiswaLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('Siswa/ubah/') . $si['id'] ?>" method="post">

                        <div class="row g-3 align-items-center">
                            <div class="row">
                                <div class="col">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">NISN</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="nisn" value="<?= $si['nisn'] ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">NIS</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="nis" value="<?= $si['nis'] ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">NAMA</label>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" name="nama" value="<?= $si['nama'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
    </div>