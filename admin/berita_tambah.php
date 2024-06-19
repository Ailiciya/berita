<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="berita_tambah_action.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td width="150">Judul Berita</td>
                <td>:</td>
                <td><input type="text" name="Judul" size="60"></td>
            </tr>
            <tr>
                <td>Isi Berita</td>
                <td>:</td>
                <td><textarea name="isi" rows="6" cols="60"></textarea></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" name="gambar"> </td>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggal"> </td>
            </tr>
            <tr>
                <td>Nama User / Admin</td> 
                <td>:</td>
                <td>
                    <input type="text" name="user_nama" size="60" value="<?php echo $_SESSION['username']; ?>" readonly>
                </td>
                <td colspan="3">
                    <input type="submit" name="simpan" value="simpan">
                    <input type="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
