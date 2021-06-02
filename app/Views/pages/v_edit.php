<?php $this->extend('layout/template'); ?>


<?php $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div class="row">
                    <h2>Form tambah data</h2>
                    <!-- left column -->
                    <form role="form" action="/Product/edit/ <?= $product['id_produk']; ?>" method="POST">
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <label class="form-label">Nama Produk</label>
                            <input class="form-control" value="<?= $product['nama_produk']; ?>" placeholder="Input nama produk" name="nama_produk" required>
                        </div>

                        <div class="col-md-8 mt-3">
                            <!-- general form elements -->
                            <label class="form-label">Deskripsi Produk</label>
                            <input class="form-control" value="<?= $product['deskripsi_produk']; ?>" placeholder="Input deskripsi produk" name="deskripsi_produk" required>
                        </div>

                        <div class="col-md-8 mt-3">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                        <a class="btn btn-sm btn-danger mt-2 mb-5" href="/product/add">Cancel</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.card --
        </div>
    </div>
</div>
<?php $this->endsection(); ?>