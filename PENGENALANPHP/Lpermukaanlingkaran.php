<!DOCTYPE html>
<html>

<head>
    <title>Luas Permukaan Lingkaran</title>
</head>

<body>
    <title>LUAS </title>
    <form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        <table style="width: 300px">
            <tr>
                <td><strong>Jari Jari</strong></td>
            </tr>
            <tr>
                <td><input type="text" name="r" placeholder="JARI-JARI" /></td>
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
        $luas   = 4 * PHI * ($r * $r);

        /*Proses Cetak*/
        echo "JARI JARI = $r";
        echo ("<BR>");
        echo "Luas Permukaan lingkaran = $luas";
        echo ""
        ?>
    </div>
</body>

</html>