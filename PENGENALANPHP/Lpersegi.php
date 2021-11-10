<!DOCTYPE html>
<html>

<head>
    <title>Luas Persegi</title>
</head>

<body>
    <form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        <table style="width: 300px">
            <tr>
                <td><strong>Sisi</strong></td>
            </tr>
            <tr>
                <td><input type="text" name="sisi" placeholder="MASUKKAN SISI" /></td>
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
        $sisi      = $_POST['sisi'];

        $luas      = $sisi * 4;

        /*Proses Cetak*/
        echo ("<BR>");
        echo "siis = $sisi";
        echo ("<BR>");
        echo "Luas Persegi = $luas";
        ?>
    </div>
</body>

</html>