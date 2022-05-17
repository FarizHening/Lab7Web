<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>
    <form style="" action="form_output.php" method="post">
        Nama :
            <input type="text" name="nama" id="nama">
            <br></br>
        Tanggal Lahir :
            <input type="date" name="tgl_lahir" id="tgl_lahir">
            <br></br>
        Pekerjaan :
            <select name="pekerjaan" id="pekerjaan">
                <option value="Guru">Guru</option>
                <option value="Karyawan">Karyawan Swasta</option>
                <option value="Dokter">Dokter</option>
                <option value="Programing">Web Developer</option>
            </select>
            <br></br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>