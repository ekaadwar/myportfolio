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
        <form method="POST" action="">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="masukkan nama">
          </div>
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="masukkan E-Mail">
          </div>
          <div class="form-group">
            <label for="telp">No. Telp</label>
            <input type="tel" name="hp" id="telp" class="form-control" placeholder="masukkan nomor telepon">
          </div>
          <select name="kategori" class="form-control">
            <option>-- Pilih Kategori --</option>
            <option value="Web Development">Web Development</option>
            <option value="Graphic Design">Graphic Design</option>
          </select>
          <div class="form-group">
            <label for="pesan">Pesan</label>
            <textarea name="pesan" class="form-control" rows="10" placeholder="masukkan pesan"></textarea>  
          </div>
          <button type="submit" name="kirim" class="btn btn-warning">Kirim Pesan</button>
        </form>
      </div>
    </div>
  </div>
</section>