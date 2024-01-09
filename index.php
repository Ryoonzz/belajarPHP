<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Perkalian dan Pembagian</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h2 {
    color: #333;
    text-align: center;
}

form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    color: #333;
}

input[type="text"],
select,
input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background: url('data:image/svg+xml;utf8,<svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>') no-repeat right 10px center;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

p {
    color: #333;
    margin-top: 15px;
    text-align: center;
}

/* Optional: Center the form on the page */
html, body {
    height: 100%;
    align-items: center;
    justify-content: center;
}

/* Hover effect for form elements */
input[type="text"]:hover,
select:hover,
input[type="submit"]:hover {
    border-color: #4caf50;
}

/* Add transition effect for smoother hover */
input[type="text"],
select,
input[type="submit"] {
    transition: border-color 0.3s ease;
}

/* Style for result message */
.result {
    margin-top: 15px;
    padding: 10px;
    border-radius: 4px;
    font-size: 16px;
    background-color: #dff0d8;
    border: 1px solid #d6e9c6;
    color: #3c763d;
}

.error {
    background-color: #f2dede;
    border: 1px solid #ebccd1;
    color: #a94442;
}

/* Optional: Style for displaying error messages */
.error-message {
    color: #a94442;
    margin-top: 5px;
}

/* Optional: Add some margin to the form */
form {
    margin-top: 20px;
}
    </style>
</head>
<body>

<h2>Kalkulator Perkalian dan Pembagian</h2>

<form method="post" action="">
    <label for="angka1">Angka 1:</label>
    <input type="text" name="angka1" required>

    <label for="angka2">Angka 2:</label>
    <input type="text" name="angka2" required>

    <label for="operator">Pilih Operator:</label>
    <select name="operator" required>
        <option value="perkalian">Perkalian</option>
        <option value="pembagian">Pembagian</option>
    </select>

    <input type="submit" value="Hitung">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nilai dari form
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    // Validasi input numerik
    if (!is_numeric($angka1) || !is_numeric($angka2)) {
        echo '<p>Masukkan angka yang valid.</p>';
    } else {
        // Hitung berdasarkan operator
        switch ($operator) {
            case 'perkalian':
                $hasil = $angka1 * $angka2;
                echo '<p>Hasil perkalian: ' . $hasil . '</p>';
                break;
            case 'pembagian':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                    echo '<p>Hasil pembagian: ' . $hasil . '</p>';
                } else {
                    echo '<p>Tidak bisa melakukan pembagian dengan nol.</p>';
                }
                break;
            default:
                echo '<p>Operator tidak valid.</p>';
        }
    }
}
?>

</body>
</html>