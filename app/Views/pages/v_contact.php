<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
            <table class="table table-striped" style="margin-top:50px;">
                <tr>
                    <td><b>No</td>
                    <td><b>Tipe</td>
                    <td><b>Alamat</td>
                    <td><b>Kota</td>
                </tr>
                <?php $no = 1; ?>
                <?php foreach ($alamat as $a) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $a['tipe']; ?></td>
                        <td><?= $a['alamat']; ?></td>
                        <td><?= $a['kota']; ?></td>

                    </tr>
                <?php endforeach; ?>

            </table>

        </div>
    </div>
</div>

<?= $this->endsection('content'); ?>