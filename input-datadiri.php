<form action="input-datadiri.php" method="POST">
	<label for="nis">Nomor Induk Siswa:</label>
	<input type="text" name="nama" placeholder="Ex. David Lutfi" /><br>
	<input type="number" name="nis" placeholder="Ex. 12003102" /><br>

	<label for="nama">Nama Lengkap :</label>
    <input type="text" name="nama" placeholder="Ex. Firdaus" /><br>

    <label for="tanggal_lahir">Tanggal lahir:</label>
    <input type="date" name="tanggal_lahir" /><br>

    <label for="nilai">Nilai :</label>
    <input type="number" name="nilai" placeholder="Ex. 80.56" /> <br>

    <input type="submit" name="simpan" value="Simpan Data" />
</from>


<?php
	  include('./input-config.php');
	  echo "<hr>";

	  //Menampilkan data diri databse
	  $no = 1;
	  $tabledata = "";
	  $data = mysqli_query($mysqli," SELECT * FROM datadiri ");
	  while ($row = mysqli_fetch_array($data)){
	  		 $tabledata .="
	  		 <tr>
	  		 		<td>".$row["nis"]."</td>
	  		 		<td>".$row["namalengkap"]."</td>
	  		 		<td>".$row["tanggal_lahir"]."</td>
	  		 		<td>".$row["nilai"]."</td>
	  		 </tr>
 	";
 	$no++;
	  }

	  echo "
	  		<table cellpading=5 border=1 cellspacing=0>
	  			<tr>
	  				<th>NIS</th>
	  				<th>Nama Lengkap</th>
	  				<th>Tanggal Lahir</th>
	  				<th>Nilai</th>
	  			</tr>
	  			$tabledata
	  		</table>
	  ";
	?>