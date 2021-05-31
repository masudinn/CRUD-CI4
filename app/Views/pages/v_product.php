<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>list product</h1>

            <div class="container">

                <table class="table table-striped">
                    <tr>
                        <td>No</td>
                        <td>Nama Produk</td>
                        <td>Deskripsi Produk</td>
                        <td>Aksi</td>
                    </tr>

                    <?php $no = 1; ?>
                    <?php foreach ($product as $p) :  ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?= $p['nama_produk']; ?></td>
                            <td><?= $p['deskripsi_produk']; ?></td>
                            <td>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>

                            </td>
                        </tr>
                    <?php endforeach; ?>

                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection('content'); ?>