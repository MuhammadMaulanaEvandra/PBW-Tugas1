<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4</title>
</head>
<body>
    <h2>Bilangan Ganjil atau Genap</h2>

    <form method="post">
        <label for="input">Masukkan Bilangan:</label>
        <input type="number" id="input" name="input" required>
        <button type="submit">Submit</button> <br> <br>
    </form>
    
    <?php
        $input = $_POST['input'];
        
        $input = (int)$input;
        $status = ($input % 2 == 0) ? "Genap" : "Ganjil";
        echo "Bilangan " . $input . " adalah " . $status;
    ?>


</body>
</html>