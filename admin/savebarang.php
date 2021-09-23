<html>
    <head>
        <link rel="stylesheet" href="../pages/w3.css">
        <title>daffapedia | bookstore</title>
    </head>    
<body>
<div id="header">
        <img src="daffapedia.jpg"  width=100% height=40%>
</div>
    <center>
	<div class="w3-container">	
		<div class="w3-panel w3-round-xxlarge w3-cyan">
			<h3>SIMPAN DATA BARANG</h3> 
		</div>
	</div>
	<hr>
    <table class="w3-panel w3-border-left w3-pale-red w3-border-red">
        <?php
            require ("koneksi.php");
            $kodebrg=$_POST['kodebrg'];
            $namabarang=$_POST['namabarang'];
            $harga=$_POST['harga'];
            $stok=$_POST['stok'];
            $deskripsi=$_POST['deskripsi'];

			echo ("<center>");
            echo ("<tr><td>Kode Barang<td>:$kodebrg");
            echo ("<tr><td>Nama Barang<td>:$namabarang");
            echo ("<tr><td>Harga<td>:$harga");
            echo ("<tr><td>Stok<td>:$stok");
            echo ("<tr><td>Deskripsi<td>:$deskripsi");
            echo ("</table>");
            echo ("<hr width=320>");

            if($kodebrg!='')
            {
                $sql="insert into barang values ('$kodebrg','$namabarang','$harga','$stok','$deskripsi')";
                $hasil=mysqli_query($conn,$sql);
                echo ('Data Telah ditambakan');                
            }
            else
            {
                echo ('Kode Barang Tidak Boleh Kosong');
            }
        ?>
        </table>
        <br>
        <a class="w3-btn w3-round-xxlarge w3-green"  href="index.php">Kembali ke halaman admin</a>       
</body>    
</html>