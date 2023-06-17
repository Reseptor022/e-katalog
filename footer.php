<div id="templatemo_bottom"><span class="bf bft"></span><span class="bf bfb"></span>
  <div class="col col_3">
    <h4>Social</h4>
    <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM tb_social");
    while ($data = mysqli_fetch_array($query)) {
    ?>
      <ul class="nobullet">
        <li><img width="30" src="admin/Social/icon/<?= $data['icon'] ?>" /></li>
        <li><a href='#'> <?= $data['nama_sosmed'] ?></a></li>
      </ul>
    <?php } ?>
  </div>
  <div class="col col_3">

    <h4>Twitter</h4>
    <ul class="nobullet twitter">
      <?php
      include "koneksi.php";
      $query = mysqli_query($koneksi, "SELECT * FROM tb_twitter");
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <h6><?= $data['judul'] ?></h6>
        <p><?= $data['isi'] ?></p>
    </ul>
  <?php } ?>
  </div>
  <div class="col col_3">
    <h4>About</h4>
    <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "SELECT * FROM tb_about");
    while ($data = mysqli_fetch_array($query)) {
    ?>
      <h6><?= $data['judul'] ?></h6>
      <p><?= $data['isi'] ?></p>
    <?php } ?>
  </div>

  <div class="clear"></div>
</div>