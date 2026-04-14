<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
</head>
<body>
    <h2>Bilangan Genap</h2>
    <form method="post">
        <label for="input">Masukkan Bilangan Awal:</label>
        <input type="number" id="input" name="input1" required>

        <label for="input">Masukkan Bilangan Akhir:</label>
        <input type="number" id="input" name="input2" required>
        <button type="submit">Submit</button> <br> <br>
    </form>

    <?php
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
       
        for($i = $input1; $i <= $input2; $i += 2) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    ?>

</body>
</html>