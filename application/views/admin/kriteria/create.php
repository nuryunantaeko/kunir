<div class="card shadow mb-4 col-8">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Kriteria</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <?php echo form_open('admin/kriteria/create') ?>
        <div class="form-group">
            <label class="col-form-label" for="namaKriteria">Nama
                Kriteria</label>
            <input class="form-control <?php echo form_error('namaKriteria')
                ? 'is-invalid' : '' ?>" id="namaKriteria" type="text"
                   placeholder="Nama Kriteria" name="namaKriteria"
                   value="<?php echo set_value('namaKriteria') ?>">
            <span class="text-danger"><?php echo form_error('namaKriteria') ?></span>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="bobotKriteria">Bobot
                Kriteria</label>
            <input class="form-control <?php echo form_error('bobotKriteria')
                ? 'is-invalid' : '' ?>" id="bobotKriteria" type="number"
                   max="5" min="1" step="1"
                   placeholder="Bobot Kriteria" name="bobotKriteria"
                   value="<?php echo set_value('bobotKriteria') ?>">
            <span class="text-danger"><?php echo form_error('bobotKriteria') ?></span>
        </div>
        <button type="submit" class="btn btn-md btn-success">Submit</button>
        <?php echo form_close() ?>
    </div>
</div>
