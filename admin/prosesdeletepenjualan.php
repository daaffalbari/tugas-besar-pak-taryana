<html>
    <head>
        <link rel="stylesheet" href="../pages/w3.css">
        <title>daffapedia | bookstore</title>        
    </head>
    <div id="header">
        <img src="daffapedia.jpg"  width=100% height=40%>
    </div>
    <center>
    <div class="w3-container">
			<div class="w3-panel w3-round-xxlarge w3-light-blue" style="background:#6B5B95;color: white">
                <h3>Proses Hapus Data Penjualan</h3>
            </div>
            <hr>
    </div>    
    <table class="w3-panel w3-border-left w3-pale-red w3-border-red">
        <?php
            require ("koneksi.php");
            $id=$_POST['id'];
            $kodebrg=$_POST['kodebrg'];
            $namapembeli=$_POST['namapembeli'];

            echo ("<tr><td>Id<td>$id");
            echo ("<tr><td>Kode Barang<td>$kodebrg");
            echo ("<tr><td>Nama Pembeli<td>$namapembeli");
            echo ("<hr width=320>");
            $sql="delete from penjualan where kodebrg='$kodebrg' ";
            $hasil=mysqli_query($conn,$sql);            
        ?>
    </table>
    Data Barang Sudah Dihapus
    <hr>
    <a class="w3-btn w3-round-xxlarge w3-cyan"  href="index.php">Kembali ke Toko</a>
    </html>