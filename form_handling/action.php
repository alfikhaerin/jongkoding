<?php 

if ( isset($_POST["submit"])) {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $address = $_POST['address'];
  $cities = $_POST['cities'];
  $gender = $_POST['gender'];

  $swabStatus = $_POST['swabStatus'];
  $vaccineStatus = $_POST['vaccineStatus'];
  
  if ( $gender == "male") {
    $genderText = "laki laki";
  }else {
    $genderText = 'perempuan';
  }

  if ( $swabStatus == true) {
    $swabCondition = "Hasil swab negatif";
  }else {
    $swabCondition= 'Hasil swab positif';
  }

  if ( $vaccineStatus == true) {
    $vaccineCondition = "Telah di vaksin";
  }else {
    $vaccineCondition= 'Belum di vaksin';
  }
} 

?>

<html>
  <head>
    <title>Action PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    
    <div id="profile">

      <div class="container">

        <div class="row d-flex justify-content-center">

          <div class="col col-8">

            <h4>Nama = <?=$name?></h4>
            <h4>Jenis kelamin = <?=$genderText?></h4>
            <h4>Email = <?=$email?></h4>
            <h4>Umur = <?=$age?></h4>
            <h4>Alamat = <?=$address?></h4>
            <h4>Kota = <?=$cities?></h4>
            <h4>Hasil Swab = <?=$swabCondition?></h4>
            <h4>Vaksinasi = <?=$vaccineCondition?></h4>

          </div>

        </div>
      
      </div>

    </div>

  </body>
</html>