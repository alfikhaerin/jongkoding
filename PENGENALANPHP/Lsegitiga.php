<!DOCTYPE html>
<html>

<head>
    <title>Luas Segitiga</title>
</head>

<body>
    <title>LUAS </title>
    <form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        <table style="width: 300px">
            <tr>
                <td><strong>Alas</strong></td>
                <td><strong>Tinggi</strong></td>
            </tr>
            <tr>
                <td><input type="text" name="alas" placeholder="ALAS" /></td>
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
        /*Proses Penghitungan*/
        $alas      = $_POST['alas'];
        $tinggi    = $_POST['tinggi'];

        $luas      = 1 / 2 * $alas * $tinggi;

        /*Proses Cetak*/
        echo ("<BR>");
        echo "alas = $alas";
        echo ("<BR>");
        echo "tinggi = $tinggi";
        echo ("<BR>");
        echo "Luas Segitiga = $luas";
        ?>
    </div>
</body>

</html>