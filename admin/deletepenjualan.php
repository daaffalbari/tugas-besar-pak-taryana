<html>
    <head>
    <link rel="stylesheet" href="../pages/w3.css">
    <title>daffapedia | bookstore</title>
    </head>
    <div id="header">
        <img src="daffapedia.jpg"  width=100% height=40%>
    </div>
    <form action="prosesdeletepenjualan.php" method=post>
        <center>
        <div class="w3-container">
			<div class="w3-panel w3-round-xxlarge w3-light-blue" style="background:#6B5B95;color: white">
                <h3>Hapus Data Barang</h3>
            </div>
            <hr>
        </div>    
            <table class="w3-panel w3-leftbar w3-border-blue w3-pale-blue">
                <tr>
                    <td><table class="w3-panel w3-border w3-hover-border-red"></td>
                </tr>
                <?php
                    require ("koneksi.php");
                    $kodebrg=$_GET['kodebrg'];
                    $sql="select * from penjualan where kodebrg = '$kodebrg' ";
                    $hasil=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_row($hasil);
                    do
                    {
                        list($id,$kodebrg,$jumlah,$namapembeli,$alamat)=$row;
                        echo ("<tr><td>ID<td><input name=id value='$id' readonly size=10>");
                        echo("<tr><td>KODE BARANG<td><input name=kodebrg value='$kodebrg' readonly size=10>");
                        echo ("<tr><td>Nama Pembeli<td><input name=namapembeli value='$namapembeli' class=w3-input");
                    }
                    while ($row=mysqli_fetch_row($hasil));    
                ?>
                    </table>
                </table>
                    <hr width=400>
                    <input class="w3-button w3-green w3-round-xxlarge" type="submit" value="Proses Delete">
                    <a href="index.php" class="w3-button w3-red w3-round-xxlarge">Kembali</a>
            </table>
        </center>
</html>