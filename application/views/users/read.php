<?php
 	require_once(APPPATH.'views/include/header.php');
?>
<div class="col-md-12">
  <div class="card">
    <div class="card card-plain">
      <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>Username</th>
              <th>Departement</th>
              <th>Levels</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach ($users as $usr): ?>
              <tr>
                <td class="col-xs-3"><?php echo $usr->username; ?></td>
                <td><?php echo $usr->divisi; ?></td>
                <td><?php echo $usr->levels; ?></td>
                <td class="col-xs-3">
                  <a class="btn-fill btn-warning btn" href="<?php echo site_url('welcome/chuser/'.$usr->username); ?>" title="Ubah Data User" type="button"><i class="pe-7s-config"></i> Ubah</a>
                  <a class="btn btn-fill btn-danger" href="<?php echo site_url('welcome/dluser/'.$usr->username); ?>" title="Hapus Data User" type="button"><i class="pe-7s-close"></i> Hapus</a>
                </td>
              </tr>
          <?php endforeach; ?>
        </tbody>
        <tbody>
          <tr>
            <td colspan="4">
              <a class="btn-fill btn-info btn" href="<?php echo site_url('welcome/add_user/'); ?>" title="Tambah Data User" type="button"><i class="pe-7s-config"></i> Tambah</a>
            </td>
          </tr>
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php
 	require_once(APPPATH.'views/include/footer.php');
?>