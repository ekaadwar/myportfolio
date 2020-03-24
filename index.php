<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Portfolio</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#home" class="navbar-brand page-scroll">Eka Fajhari Adwar</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#about" class="page-scroll">About</a></li>
              <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
              <li><a href="#contact" class="page-scroll">Contact</a></li>
            </ul>
          </div> 
            
        </div>
      </nav>
    <!-- /Navbar -->

    <!-- jumbotron -->
    <div class="jumbotron text-center">
      <img src="gambar/poto1x1.jpg" class="img-circle">
      <h1>Eka Fajhari Adwar</h1>
      <p>Physicist | Web Programmer | Graphic Designer</p>
    </div>
    <!-- akhir jumbotron -->

    <!-- About -->
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
            <p class="pKiri">Hai, Anda dapat menyapa saya dengan Eka. Saya adalah lulusan program sarjana dari Jurusan Fisika Fakultas Matematika dan Ilmu Pengetahuan Alam Universitas Andalas, salah satu perguruan tinggi negeri di Kota Padang. Saya sangat suka dalam dunia Web Programming dan desain grafis disamping ilmu fisika.</p>
            <p class="pKiri">Semasa kuliah, saya mengisi waktu luang dengan berorganisasi yang berlandas pada teknologi. Disana saya terus mengasah ilmu desain grafis yang juga merupakan hobi sejak SMA. Saya mulai mengenal pemrograman website dari salah satu dosen saya yang bernama Bapak Dr. Zulfi. Beliau memperkenalkan salah satu proyek nya yang bernama Appskep. Dari sinilah saya mulai jatuh cinta akan dunia website.</p>
            <hr class="white-section aboutContent">
          </div>
          <div class="col-sm-4">
            <p class="pKanan">English Version is not found.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir About -->
    
    <!-- portfolio -->
    <section class="portfolio brown-section" id="portfolio">
      <div class="container content">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Portfolio</h2>
            <hr>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="gambar/portfolio/1.jpg">  
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="gambar/portfolio/2.jpg">  
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="gambar/portfolio/3.jpg">  
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="gambar/portfolio/4.jpg">  
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="gambar/portfolio/5.jpg">  
            </a>
          </div>
          <div class="col-sm-4">
            <a href="" class="thumbnail">
              <img src="gambar/portfolio/6.jpg">  
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- /portfolio -->

    <!-- contact -->
    <section class="contact" id="contact">
      <div class="container content">
        <div class="row text-center">
          <div class="col-sm-12">
            <h2 class="white-section">Contact</h2>
            <hr class="white-section">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control" placeholder="masukkan nama">
              </div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" id="email" class="form-control" placeholder="masukkan E-Mail">
              </div>
              <div class="form-group">
                <label for="telp">No. Telp</label>
                <input type="tel" id="telp" class="form-control" placeholder="masukkan nomor telepon">
              </div>
              <select class="form-control">
                <option>-- Pilih Kategori --</option>
                <option>Graphic Design</option>
                <option>Web Development</option>
              </select>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="10" placeholder="masukkan pesan"></textarea>  
              </div>
              <button type="submit" class="btn btn-warning">Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /contact -->

    <!-- Footer -->
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
                      JL. PELITA NO. 13, LUBUK SIKAPING, PASAMAN<BR>
                      SUMATERA BARAT - INDONESIA
                    </p>
                  </td>
                  <td class="goToRight">
                    <a href="">
                      Eka Fajhari Adwar
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
                      082169150233
                    </p>
                  </td>
                  <td class="goToRight">
                    <a href="">
                      https://github.com/ekaadwar
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
                      ekafajhariadwar@gmail.com
                    </p>
                  </td>
                  <td class="goToRight">
                    <a href="">
                      @ekaadwar
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
              <p>&copy 2020 | built by <a href="">Eka Fajhari Adwar</a>.</p>
            </div>
          </div>
      </div>
    </footer>
    <!-- /Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->

    <script src="js/jquery-3.4.1.min.js"></script>
    
    <!-- jquery untuk efek scroll -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>