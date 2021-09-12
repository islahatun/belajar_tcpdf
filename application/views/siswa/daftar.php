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
                                <a href="" class="btn btn-primary">UBAH</a>
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