<html> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="w3.css"> 
<script> 
    function goBack() {         
        window.history.back(); 
    } 
</script> 
<center> 
<hr width=320> 
<table> 
<?php 
    require ("koneksi.php"); 
    $kodebrg=$_POST['kodebrg']; 
    $jumlah=$_POST['jumlah']; 
    $namapembeli=$_POST['namapembeli']; 
    $alamat=$_POST['alamat']; 
    $kota=$_POST['kota']; 
    $kodepos=$_POST['kodepos']; 
    $telp=$_POST['telp']; 
    $email=$_POST['email']; 
    if(($namapembeli=='') || ($alamat=='') || ($kota=='') || ($kodepos=='') || ($telp=='') || ($email=='')) 
    { 
        echo "<h1>Maaf ada data belum diisi<br><br> "; 
        echo "<button onclick='goBack()'>Back</button>";   
        exit;  
    } 
    echo ("<tr><td width=150>Kode Barang<td>$kodebrg"); 
    echo ("<tr><td>Jumlah Beli<td>$jumlah"); 
    echo ("<tr><td>Nama Pembeli<td>$namapembeli");    
    echo ("<tr><td>Alamat<td>$alamat"); 
    echo ("<tr><td>Kota<td>$kota"); 
    echo ("<tr><td>Kode Pos<td>$kodepos");
    echo ("<tr><td>Telp<td>$telp"); 
    echo ("<tr><td>E-Mail<td>$email"); 
    echo ("</table>"); 
    echo ("<hr width=320>"); 
    $sql="insert into penjualan values ('','$kodebrg','$jumlah','$namapembeli','$alamat','$kota','$kodepos','$telp','$email')"; 
    $hasil=mysqli_query($conn,$sql); 
?> 
</table> 
<h1>Data Penjualan telah di Simpan </h1>
<hr> 
<br> 
<a class="w3-btn w3-round-xxlarge w3-red" href="index.php">Kembali ke Toko</a> 
</html>