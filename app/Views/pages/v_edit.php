<?php $this->extend('layout/template'); ?>


<?php $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div class="row">
                    <h2>Form edit data</h2>
                    <!-- left column -->
                    <form role="form" action="/Product/editData/<?= $product['id_produk']; ?>" method="POST">
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <label class="form-label">Nama Produk</label>
                            <input class="form-control" value="<?= $product['nama_produk']; ?>" placeholder="Edit nama produk" name="nama_produk" required>
                        </div>

                        <div class="col-md-8 mt-3">
                            <!-- general form elements -->
                            <label class="form-label">Deskripsi Produk</label>
                            <input class="form-control" value="<?= $product['deskripsi_produk']; ?>" placeholder="Edit deskripsi produk" name="deskripsi_produk" required>
                        </div>

                        <div class="col-md-8 mt-3">
                            <button type="submit" class="btn btn-sm btn-primary mt-2 mb-5">Edit</button>
                            <a type="Cancel" class="btn btn-sm btn-danger mt-2 mb-5" href="/Product">Cancel</a>
                        </div>
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