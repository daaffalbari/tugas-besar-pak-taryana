<html>
    <head>
    <link rel="stylesheet" href="../pages/w3.css">
    <title>daffapedia | bookstore</title>
    </head>
    <div id="header">
        <img src="daffapedia.jpg"  width=100% height=40%>
    </div>
    <form action="saveeditdata.php" method=post>
        <center>
        <div class="w3-container">
			<div class="w3-panel w3-round-xxlarge w3-light-blue" style="background:#6B5B95;color: white">
                <h3>Edit Data Barang</h3>
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
                    $sql="select * from barang where kodebrg = '$kodebrg' ";
                    $hasil=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_row($hasil);
                    do
                    {
                        list($kodebrg,$namabarang,$harga,$stok,$deskripsi)=$row;
                        echo ("<tr><td>Kode Barang<td><input name=kodebrg value='$kodebrg' readonly size=8>");
                        echo ("<tr><td>Nama Barang<td><input name=namabarang class='w3-input' value='$namabarang' size=50>");
                        echo ("<tr><td>Harga<td><input name=harga class='w3-input' value='$harga' size=20> ");
                        echo ("<tr><td>Stok<td><input name=stok class='w3-input' value='$stok' size=3> ");
                        echo ("<tr><td>Deskripsi<td><input name=deskripsi class='w3-input'value='$deskripsi' size=20> ");
                    }
                    while ($row=mysqli_fetch_row($hasil));    
                ?>
                    </table>
                    </table>
                    <hr width=400>
                    <input class="w3-button w3-green w3-round-xxlarge" type="submit" value="Save Edit">
                    <input class="w3-button w3-red w3-round-xxlarge" type="reset" value="Reset">
            </table>
        </center>
</html>