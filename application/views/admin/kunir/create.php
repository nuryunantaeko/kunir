<div class="card shadow mb-4 col-8">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Kunir</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <?php echo form_open('admin/kunir/create') ?>
        <div class="form-group">
            <label class="col-form-label" for="namaKriteria">Kode Kunir</label>
            <input class="form-control <?php echo form_error('kodeKunir')
                ? 'is-invalid' : '' ?>" id="kodeKunir" type="text"
                   placeholder="Kode Kunir" name="kodeKunir"
                   value="<?php echo set_value('kodeKunir') ?>">
            <span class="text-danger"><?php echo form_error('kodeKunir') ?></span>
        </div>
        <button type="submit" class="btn btn-md btn-success">Submit</button>
        <?php echo form_close() ?>
    </div>
</div>
