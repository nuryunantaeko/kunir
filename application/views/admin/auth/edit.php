<div class="card shadow mb-4 col-8">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Edit Administrator</h6>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <?php echo form_open("admin/auth/edit_user/$user->id_admin") ?>
        <div class="form-group">
            <label class="col-form-label" for="username">Username</label>
            <input class="form-control" id="username" type="text"
                   placeholder="Username" name="username" disabled="disabled"
                   value="<?php echo set_value('username') ? set_value('username') : $user->username  ?>">
        </div>
        <div class="form-group">
            <label class="col-form-label" for="password">Password</label>
            <input class="form-control" id="password" type="password"
                   placeholder="Super secret text" name="password" disabled="disabled"
                   value="<?php echo set_value('password') ? set_value('password') : $user->password ?>">
        </div>
        <div class="form-group">
            <label class="col-form-label" for="alamat">Alamat</label>
            <input class="form-control <?php echo form_error('alamat')
                ? 'is-invalid' : '' ?>" id="alamat" type="text"
                   placeholder="Jalan suka maju" name="alamat"
                   value="<?php echo set_value('alamat') ? set_value('alamat') : $user->alamat ?>">
            <span class="text-danger"><?php echo form_error('alamat') ?></span>
        </div>
        <div class="form-group">
            <label class="col-form-label" for="noHp">No. Hp</label>
            <input class="form-control <?php echo form_error('noHp')
                ? 'is-invalid' : '' ?>" id="noHp" type="number"
                   placeholder="098080" name="noHp"
                   value="<?php echo set_value('noHp') ? set_value('noHp') : $user->no_hp ?>">
            <span class="text-danger"><?php echo form_error('noHp') ?></span>
        </div>
        <button type="submit" class="btn btn-md btn-success">Submit</button>
        <?php echo form_close() ?>
    </div>
</div>
