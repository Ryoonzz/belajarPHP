
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelompokan Usia</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

h1 {
    text-align: center;
    color: #333;
}

p {
    text-align: center;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
    box-sizing: border-box;
}

button {
    background-color: #3498db;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #2980b9;
}
    </style>
</head>
<body>
    <h1>Pengelompokan Usia</h1>
    <form method="post" action="">
        <label for="berusia">Masukkan usia mu:</label>
        <input type="text" name="berusia" required>
        <br>
        <button type="submit">Proses</button>
    </form>
</body>
<?php
// Fungsi untuk menentukan kategori usia
function mengelompokkanUsia($usia) {
    if ($usia <= 12) return "Anak-anak";
    elseif ($usia <= 18) return "Remaja";
    elseif ($usia <= 35) return "Dewasa Muda";
    elseif ($usia <= 60) return "Dewasa";
    else return "Lansia";
}

// Antarmuka Pengguna
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $berusia = $_POST['berusia'];

    // Validasi input
    if (empty($berusia)) {
        echo "Masukkan usia terlebih dahulu.";
    } else {
        // Perulangan untuk menampilkan hasil pengelompokan usia
        foreach (explode(',', $berusia) as $usia) {
            $usia = intval($usia); // Konversi input ke integer
            $kelompokUsia = mengelompokkanUsia($usia);

            echo "<p>Usia $usia termasuk dalam kategori: $kelompokUsia<br></p>";
        }
    }
}
?>
</html>
