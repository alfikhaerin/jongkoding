<?php
    $nama = array( 
  "Doni" => array ("Fisika" => 90, "Matematika" => 65, "Kimia" => 83 ),
  "Didi" => array ("Fisika" => 90, "Matematika" => 78, "Kimia" => 87 ),
  "Reza" => array ("Fisika" => 78, "Matematika" => 90, "Kimia" => 78 )
 );
 
  /* Mengakses nilai array dua dimensi secara manual */
  echo "<b>Cetak Nilai secara manual</b>"."</br>";
  // Untuk Doni
  echo "Nilai Doni dalam mata pelajaran Fisika : ".$nama['Doni']['Fisika'] . "<br />" ;
  echo "Nilai Doni dalam mata pelajaran Matematika : ".$nama['Doni']['Matematika'] . "<br />" ; 
  echo "Nilai Doni dalam mata pelajaran Kimia : ".$nama['Doni']['Matematika'] . "<br />" ; 
  
  // Untuk Didi
  echo "Nilai Didi dalam mata pelajaran Fisika : ".$nama['Didi']['Fisika'] . "<br />" ;
  echo "Nilai Didi dalam mata pelajaran Matematika : ".$nama['Didi']['Matematika'] . "<br />" ; 
  echo "Nilai Didi dalam mata pelajaran Kimia : ".$nama['Didi']['Matematika'] . "<br />" ;
  
  // Untuk Didi
  echo "Nilai Reza dalam mata pelajaran Fisika : ".$nama['Reza']['Fisika'] . "<br />" ;
  echo "Nilai Reza dalam mata pelajaran Matematika : ".$nama['Reza']['Matematika'] . "<br />" ; 
  echo "Nilai Reza dalam mata pelajaran Kimia : ".$nama['Reza']['Matematika'] . "<br /></br>" ;
  
  /*Mengakses nilai array dua dimensi dengan foreach*/
  echo "<b>Cetak Nilai dengan looping foreach bersarang</b>"."</br>";
  foreach ($nama as $mahasiswa => $nilai)
 {
   
   foreach ($nilai as $nama => $value)
   {
    //echo "Nilai".$mahasiswa." alam mata pelajaran ".$value."<br>";
     echo "Nilai"." ".$mahasiswa." dalam mata pelajaran ".$nama." adalah"." ".$value."<br>";
   }   
 }
