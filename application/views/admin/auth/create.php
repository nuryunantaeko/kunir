<div class="card shadow mb-4 col-8">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Administrator</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <?php echo form_open('admin/auth/create_user') ?>
        <div class="form-group">
            <label class="col-form-label" for="username">Username</label>
            <input class="form-control <?php echo form_error('username')
                ? 'is-invalid' : '' ?>" id="username" type="text"
                   placeholder="Username" name="username"
                   value="<?php echo set_value('username') ?>">
            <span class="text-danger"><?php echo form_error('username') ?></span>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="password">Password</label>
            <input class="form-control <?php echo form_error('password')
                ? 'is-invalid' : '' ?>" id="password" type="password"
                   placeholder="Super secret text" name="password"
                   value="<?php echo set_value('password') ?>">
            <span class="text-danger"><?php echo form_error('password') ?></span>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="alamat">Alamat</label>
            <input class="form-control <?php echo form_error('alamat')
                ? 'is-invalid' : '' ?>" id="alamat" type="text"
                   placeholder="Jalan suka maju" name="alamat"
                   value="<?php echo set_value('alamat') ?>">
            <span class="text-danger"><?php echo form_error('alamat') ?></span>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="noHp">No. Hp</label>
            <input class="form-control <?php echo form_error('noHp')
                ? 'is-invalid' : '' ?>" id="noHp" type="number"
                   placeholder="098080" name="noHp"
                   value="<?php echo set_value('noHp') ?>">
            <span class="text-danger"><?php echo form_error('noHp') ?></span>
        </div>
        <button type="submit" class="btn btn-md btn-success">Submit</button>
        <?php echo form_close() ?>
    </div>
</div>
