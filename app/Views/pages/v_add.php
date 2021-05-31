<?php $this->extend('layout/template'); ?>


<?php $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="container-fluid">
                <div class="row">
                    <h2>Form tambah data</h2>
                    <!-- left column -->
                    <form role="form" action="/Product/save" method="POST">
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <label class="form-label">Nama Produk</label>
                            <input class="form-control" placeholder="Input nama produk" name="nama_produk" required>
                        </div>

                        <div class="col-md-8 mt-3">
                            <!-- general form elements -->
                            <label class="form-label">Deskripsi Produk</label>
                            <input class="form-control" placeholder="Input deskripsi produk" name="deskripsi_produk" required>
                        </div>

                        <div class="col-md-8 mt-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
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