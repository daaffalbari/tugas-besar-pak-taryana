<html>
    <head>
        <link rel="stylesheet" href="../pages/w3.css">
        <title>daffapedia | bookstore</title>        
    </head>
    <div id="header">
        <img src="daffapedia.jpg"  width=100% height=200px>
    </div>
    <center>
    <div class="w3-container">
			<div class="w3-panel w3-round-xxlarge w3-light-blue" style="background:#6B5B95;color: white">
                <h3>Proses Hapus Data Barang</h3>
            </div>
            <hr>
    </div>    
    <table class="w3-panel w3-border-left w3-pale-red w3-border-red">
        <?php
            require ("koneksi.php");
            $kodebrg=$_POST['kodebrg'];
            $namabarang=$_POST['namabarang'];
            $harga=$_POST['harga'];
            $stok=$_POST['stok'];
            $deskripsi=$_POST['deskripsi'];

            echo ("<tr><td>Kode Barang<td>:$kodebrg");
            echo ("<tr><td>Nama Barang<td>:$namabarang");
            echo ("<tr><td>Harga<td>:$harga");
            echo ("<tr><td>Stok<td>:$stok");
            echo ("<tr><td>Deskripsi<td>:$deskripsi");
            echo ("</table>");
            echo ("<hr width=320>");
            $sql="delete from barang where kodebrg='$kodebrg' ";
            $hasil=mysqli_query($conn,$sql);            
        ?>
    </table>
    Data Barang Sudah Dihapus
    <hr>
    <a class="w3-btn w3-round-xxlarge w3-pale-red"  href="index.php">Kembali ke Toko</a>
    </html>