<!DOCTYPE html>
<html>

<head>
    <title>Luas Trapesium</title>
</head>

<body>
    <title>LUAS </title>
    <form method='post' action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        <table style="width: 300px">
            <tr>
                <td><strong>Sisi A</strong></td>
                <td><strong>Sisi C</strong></td>
                <td><strong>Tinggi</strong></td>

            </tr>
            <tr>
                <td><input type="text" name="sisiA" placeholder="SISI A" /></td>
                <td><input type="text" name="sisiC" placeholder="SISI C" /></td>
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
        $sisiA = $_POST['sisiA'];
        $sisiC = $_POST['sisiC'];
        $tinggi = $_POST['tinggi'];
        $luas      = (($sisiA + $sisiC) * $tinggi) / 2;

        /*Proses Cetak*/
        echo ("<BR>");
        echo "Sisi A = $sisiA";
        echo ("<BR>");
        echo "Sisi C = $sisiC";
        echo ("<BR>");
        echo "Tinggi = $tinggi";
        echo ("<BR>");
        echo "Luas Trapesium = $luas"
        ?>
    </div>
</body>

</html>