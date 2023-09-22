
<!DOCTYPE html>
<html>
<head>
    <title>Form Data Diri</title>
</head>
<body>
    <h2>Form Data Diri</h2>
    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="nama" id="nama"><br><br>

        <label>Pekerjaan:</label>
        <select name="pekerjaan" id="pekerjaan">
            <option value="Manager">Manager</option>
            <option value="W. Manager">W. Manager</option>
            <option value="Sekretaris">Sekretaris</option>
            <option value="Bendahara">Bendahara</option>
            <option value="Staff 1">Staff 1</option>
            <option value="Staff 2">Staff 2</option>
            <option value="Staff 3">Staff 3</option>
            <option value="Staff 4">Staff 4</option>
            <option value="Staff 5">Staff 5</option>
            <option value="Staff 6">staff 6</option>
        </select><br><br>

        <label>Hobby:</label><br>
        <?php
        for ($hobby = 1; $hobby <= 10; $hobby++) {
            echo '<input type="radio" name="hobby" value="hobby' . $hobby . '"> Hobby ' . $hobby . '<br>';
        }
        ?><br>

        <input type="submit" name="simpan" value="Simpan">
    </form>

    <?php
    // Proses form jika tombol "Simpan" diklik
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $pekerjaan = $_POST['pekerjaan'];
        $hobby = $_POST['hobby'];

        // Tampilkan data dalam bentuk tabel
        echo '<h2>Output Data:</h2>';
        echo '<table border="1">
                <tr>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>Hobby</th>
                </tr>
                <tr>
                    <td>' . $nama . '</td>
                    <td>' . $pekerjaan . '</td>
                    <td>' . $hobby . '</td>
                </tr>
              </table>';
    }
    ?>
</body>
</html>