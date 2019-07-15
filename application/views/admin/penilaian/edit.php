<div class="card shadow mb-4 col-8">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Edit Penilaian</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <?php echo form_open("admin/penilaian/edit/$penilaian->id_kunir") ?>
        <div class="form-group">
            <label class="col-form-label" for="kodeKunir">Kode Kunir</label>
            <input class="form-control <?php echo form_error('kodeKunir')
                ? 'is-invalid' : '' ?>" id="kodeKunir" type="text"
                   placeholder="Kode Kunir" name="kodeKunir"
                   value="<?php echo $penilaian->kode_kunir ?>"
                   disabled="disabled">
            <span class="text-danger"><?php echo form_error('kodeKunir') ?></span>
        </div>

        <div class="form-group">
            <label class="col-form-label" for="aromaRimpang">Aroma
                Rimpang</label>
            <input class="form-control <?php echo form_error('aromaRimpang')
                ? 'is-invalid' : '' ?>" id="aromaRimpang" type="number"
                   min="0" max="1" step="0.1"
                   placeholder="0" name="aromaRimpang"
                   value="<?php echo $penilaian->c1 ? $penilaian->c1
                       : set_value('aromaRimpang') ?>">
            <span class="text-danger"><?php echo form_error('aromaRimpang') ?></span>
        </div>

        <div class="form-group">
            <label class="col-form-label" for="kondisiRimpang">Kondisi
                Rimpang</label>
            <input class="form-control <?php echo form_error('kondisiRimpang')
                ? 'is-invalid' : '' ?>" id="kondisiRimpang" type="number"
                   min="0" max="1" step="0.1"
                   placeholder="0" name="kondisiRimpang"
                   value="<?php echo $penilaian->c2 ? $penilaian->c2
                       : set_value('kondisiRimpang') ?>">
            <span class="text-danger"><?php echo form_error('kondisiRimpang') ?></span>
        </div>

        <div class="form-group">
            <label class="col-form-label" for="warnaRimpang">Warna
                Rimpang</label>
            <input class="form-control <?php echo form_error('warnaRimpang')
                ? 'is-invalid' : '' ?>" id="warnaRimpang" type="number"
                   min="0" max="1" step="0.1"
                   placeholder="0" name="warnaRimpang"
                   value="<?php echo $penilaian->c3 ? $penilaian->c3
                       : set_value('warnaRimpang') ?>">
            <span class="text-danger"><?php echo form_error('warnaRimpang') ?></span>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="seranggaHidup">Serangga
                Hidup</label>
            <input class="form-control <?php echo form_error('seranggaHidup')
                ? 'is-invalid' : '' ?>" id="seranggaHidup" type="number"
                   min="0" max="1" step="0.1"
                   placeholder="0" name="seranggaHidup"
                   value="<?php echo $penilaian->c4 ? $penilaian->c4
                       : set_value('seranggaHidup') ?>">
            <span class="text-danger"><?php echo form_error('seranggaHidup') ?></span>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="ukuran">Ukuran</label>
            <input class="form-control <?php echo form_error('ukuran')
                ? 'is-invalid' : '' ?>" id="ukuran" type="number"
                   min="0" max="1" step="0.1"
                   placeholder="0" name="ukuran"
                   value="<?php echo $penilaian->c5 ? $penilaian->c1
                       : set_value('ukuran') ?>">
            <span class="text-danger"><?php echo form_error('ukuran') ?></span>
        </div>
        <button type="submit" class="btn btn-md btn-success">Submit</button>
        <?php echo form_close() ?>
    </div>
</div>
