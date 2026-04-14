<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 1</title>
</head>
<body>
    <h2>Jenis kendaraan berdasarkan roda</h2>

    
    <form action="" method="POST">
        <label for="roda">Jumlah Roda:</label>
        <input type="number" id="roda" name="roda" required>
        <button type="submit">Submit</button> <br> <br>
    </form>

    <?php
        $roda = $_POST['roda'];
        
        switch($roda){
            case 2:
                echo "Sepeda dan Motor";
                break;
            case 3:
                echo "Becak";
                break;
            case 4:
                echo "Mobil dan Truk dan Bus";
                break;
            default:
                echo "Kendaraan tidak diketahui";
        }
    ?>

</body>
</html>



