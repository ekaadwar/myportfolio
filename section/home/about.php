<?php 
  $sqlAbout = "SELECT * FROM about";
  $resAbout = $connPortfolio->query($sqlAbout);
  if($resAbout->num_rows>0){
    $about = $resAbout->fetch_assoc();
  }
 ?>
<section class="about" id="about">
  <div class="container content">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="text-center white-section">About</h2>
        <hr class="white-section">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 col-sm-offset-2">
        <p class="pKiri"><?php echo $about['indo1']; ?></p>
        <p class="pKiri"><?php echo $about['indo2']; ?></p>
        <hr class="white-section aboutContent">
      </div>
      <div class="col-sm-4">
        <p class="pKanan"><?php echo $about['eng1']; ?></p>
      </div>
    </div>
  </div>
</section>