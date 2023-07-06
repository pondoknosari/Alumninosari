<?php
date_default_timezone_set(
"asia/bangkok"
); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form Data Alumni</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Form Data Alumni</h2>
    <form class="" action="submit.php" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label>Alamat:</label>
        <textarea name="alamat" required></textarea><br><br>

        <label>Angkatan Tahun:</label>
        <input type="text" name="angkatan_tahun" required><br><br>

        <label>No. Telepon:</label>
        <input type="text" name="telepon" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
