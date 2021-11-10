<!DOCTYPE html>
<html>

<head>
    <title>Luas Permukaan Tabung</title>
</head>

<body>
    <title>LUAS </title>
    <form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        <table style="width: 300px">
            <tr>
                <td><strong>Jari Jari</strong></td>
                <td><strong>Tinggi</strong></td>

            </tr>
            <tr>
                <td><input type="text" name="r" placeholder="JARI-JARI" /></td>
                <td><input type="text" name="tinggi" placeholder="TINGGI" /></td>

            </tr>
            <tr>
                <td><br />
                    <!--Button HITUNG-->
                    <label>
                        <input type="submit" name="submit" value="HITUNG">
                    </label>
                </td>
            </tr>
        </table>
    </form>

    <div id="hasil">
        <?php
        error_reporting(E_ALL ^ E_NOTICE);
        ?>

        <?php

        define("PHI", 3.14);

        /*Proses Penghitungan*/
        $r      = $_POST['r'];
        $tinggi = $_POST['tinggi'];
        $luas   = 2 * PHI * ($r + $tinggi);

        /*Proses Cetak*/
        echo ("<BR>");
        echo "JARI JARI = $r";
        echo ("<BR>");
        echo "Tinggi    = $tinggi";
        echo ("<BR>");
        echo "Luas Permukaan Tabung = $luas"
        ?>
    </div>
</body>

</html>