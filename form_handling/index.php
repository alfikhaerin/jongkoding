<html>
  <head>
    <title>Input form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="form" class="pt-5">
      
      <div class="container">

        <div class="row d-flex justify-content-center">

          <div class="col col-8 p-4 bg-light">

            <form action="action.php" method="POST">

              <div class="form-group mb-2">
                <label for="name">Nama lengkap</label>
                <input name="name" type="text" id="name" class="form-control" placeholder="Nama lengkap" required>
              </div>

              <div class="form-group mb-2">
                <label for="email">Surel</label>
                <input name="email" type="email" id="email" class="form-control" placeholder="Surel Anda" required>
              </div>

              <div class="form-group mb-2">
                <label for="age">Usia</label>
                <input name="age" type="number" id="age" class="form-control" placeholder="Usia Anda" required>
              </div>

              <div class="form-group mb-2">
                <label for="password">Password</label>
                <input name="password" type="password" id="password" class="form-control" placeholder="Password Anda" required>
              </div>

              <div class="form-group mb-2">
                <label for="re-password">Ulangi Password</label>
                <input name="re-password" type="password" id="re-password" class="form-control" placeholder="Ulangi Password" required>
              </div>

              <hr>

              <div class="form-group mb-2">
                <label for="address">Tulis alamat Anda</label>
                <textarea name="address" id="address" rows="3" class="form-control"></textarea>
              </div>

              <div class="form-group mb-2">
                <label for="cities">Pilih kota Anda</label>
                <select name="cities" id="cities" class="form-control">
                  <option value="">Pilih kota Anda</option>
                  <option value="batam">batam</option>
                  <option value="solok">solok</option>
                  <option value="pandeglang">pandeglang</option>
                  <option value="kutai">kutai</option>
                  <option value="manggarai">manggarai</option>
                </select>
              </div>

              <div class="form-group mb-2">
                <label for="">Data hasil tes COVID-19</label>
                <div  class="form-check">
                  <input name="swabStatus" type="checkbox" id="check1" class="form-check-input" value="swabStatus">
                  <label for="check1" class="form-check-label">Hasil swab negatif</label>
                </div>
                <div class="form-check">
                  <input name="vaccineStatus" type="checkbox" id="check2" class="form-check-input" value="vaccineStatus">
                  <label for="check2" class="form-check-label">Sudah vaksin</label>
                </div>
              </div>

              <div class="form-group mb-2">
                <label for="">Jenis Kelamin</label>
                <div class="form-check">
                  <input name="gender" type="radio" id="male" class="form-check-input" value="male">
                  <label for="male">Laki - laki</label>
                </div>
                <div class="form-check">
                  <input name="gender" type="radio" id="female" class="form-check-input" value="female">
                  <label for="female">Perempuan</label>
                </div>
              </div>

              <input name="submit" type="submit" value="Kirim" class="btn btn-primary">

            </form>

          </div>

        </div>

      </div>

    </div>
  </body>
</html>