<form action="input-siswa.php" method="POST">
    <label for="nis">Nomor Induk Siswa :</label>
    <input type="number" name="nis" placeholder="Ex. 12001142" /><br>

    <label for="nama">Nama Lengkap :</label>
    <input type="text" name="nama" placeholder="Ex. David Lutfi" /><br>

    <label for="jk">Jenis Kelamin :</label>
    <input type="radio" name="jk" value="L"/>Laki-laki
    <input type="radio" name="jk" value="P"/>Perempuan<br>

    <label for="kelas" >kelas</label>
    <select name="kelas">
        <option>10 RPL 1</option>
        <option>10 RPL 2</option>
        <option>11 RPL 1</option>
        <option>11 RPL 2</option>
        <option>12 RPL 1</option>
        <option>12 RPL 2</option>
    </select><br>

    <label for="tanggal_lahir">Tanggal lahir:</label>
    <input type="date" name="tanggal_lahir" /><br>

    <label for="alamat">Alamat :</label>
    <textarea name="alamat" placeholder="Ex. Jl. Arief Rahman"></textarea><br>

    <label for="nilai">Nilai :</label>
    <input type="number" name="nilai" placeholder="Ex. 88.56" /> <br>

    <input type="submit" name="simpan" value="simpan data" />
    <input type="reset" name="reset" value="reset input" />
</from>

<?php
    if (isset($_POST["simpan"]) ){
        echo "<hr>";

    //Deklarasi Variabel
    $nis =$_POST["nis"];
    $namalengkap =$_POST["nama"];
    $jeniskelamin =$_POST["jk"];
    $kelas =$_POST["kelas"];
    $tanggal_lahir =$_POST["tanggal_lahir"];
    $alamat =$_POST["alamat"];
    $nilai =$_POST["nilai"];

    // Tampil Data Variabel
    echo "
        Hasil Inputan Sebagai Berikut: <br>
        Nomor Induk Siswa : $nis <br>
        Nama Lengkap : $namalengkap <br>
        Jenis Kelamin : $jeniskelamin <br>
        Kelas : $kelas <br>
        tanggal Lahir : $tanggal_lahir <br>
        Alamat : $alamat <br>
        Nilai : $nilai <br>
        ";

     }                                       
    

   




    