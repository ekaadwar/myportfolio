<footer>
  <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <table>
            <tr>
              <td class="td-icon goToRight">
                <img src="gambar/icon/location.png" class="icon">
              </td>
              <td class="goToLeft">
                <p>
                  <?php 
                  echo $privasi['alamat1']."<br>";
                  echo $privasi['alamat2'];
                  ?>
                </p>
              </td>
              <td class="goToRight">
                <a href="<?php echo $privasi['url_linkedin']; ?>">
                  <?php echo $privasi['linkedin']; ?>
                </a>
              </td>
              <td class="td-icon goToLeft">
                <img src="gambar/icon/linkedin.png" class="icon">
              </td>
            </tr>

            <tr>
              <td class="td-icon goToRight">
                <img src="gambar/icon/call.png" class="icon">
              </td>
              <td class="goToLeft">
                <p>
                  <?php echo $privasi['hp']; ?>
                </p>
              </td>
              <td class="goToRight">
                <a href="<?php echo $privasi['github']; ?>">
                  <?php echo $privasi['github']; ?>
                </a>
              </td>
              <td class="td-icon goToLeft">
                <img src="gambar/icon/github.png" class="icon">
              </td>
            </tr>

            <tr>
              <td class="td-icon goToRight">
                <img src="gambar/icon/email.png" class="icon">
              </td>
              <td class="goToLeft">
                <p>
                  <?php echo $privasi['email']; ?>
                </p>
              </td>
              <td class="goToRight">
                <a href="<?php echo $privasi['url_ig']; ?>">
                  <?php echo $privasi['ig']; ?>
                </a>
              </td>
              <td class="td-icon goToLeft">
                <img src="gambar/icon/ig.png" class="icon">
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-sm-12">
          <p>&copy 2020 | built by <a href="<?php echo $privasi['url_fb']; ?>">Eka Fajhari Adwar</a>.</p>
        </div>
      </div>
  </div>
</footer>