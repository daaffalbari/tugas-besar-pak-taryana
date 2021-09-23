<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <form action="index.php?p=savebeli" method=post>
        <center>
            <table border=0>
                <?php
                    require("koneksi.php");
                    $kodebrg=$_GET['kodebrg'];
                    echo ("<center><img src='./images/$kodebrg.jpg' width=20%></center>");
                    echo ("<br>");
                    $sql="select * from barang where kodebrg= '$kodebrg' ";
                    $hasil=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_row($hasil);
                    do {
                        list($kodebrg,$namabrg,$harga,$stok,$deskripsi)=$row;
                        echo "
                        <tr>
                            <td width=150>Kode Barang</td>
                            <td><input class=w3-input name=kodebrg value='$kodebrg' readonly size=10></td>
                        </tr>
                        <tr>
                            <td>Nama Barang</td>
                            <td><input class=w3-input name=namabrg value='$namabrg' readonly size=30></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td><input class=w3-input name=deskripsi value='$deskripsi' size=20 readonly></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input class=w3-input name=harga value='$harga' readonly size=10></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><input class=w3-input name=stok value='$stok' size=5 readonly></td>
                        </tr>
                        <tr>
                            <td>Jumlah Beli</td>
                            <td>
                                <select class=w3-input name=jumlah>
                                    ";
                                for($i=1;$i<=$stok;$i++)
                                {
                                    echo "<option>$i</option>";
                                }
                                echo "
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Pembeli</td>
                            <td><input class=w3-input name=namapembeli size=30></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input class=w3-input name=alamat size=50></td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td><input class=w3-input name=kota size=20></td>
                        </tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td><input class=w3-input name=kodepos size=5></td>
                        </tr>
                        <tr>
                            <td>Telp</td>
                            <td><input class=w3-input name=telp size=20></td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td><input class=w3-input name=email size=30></td>
                        </tr>";
                    } while($row=mysqli_fetch_row($hasil));
                ?>
            </table>
            <hr width=400>
            <button class="w3-btn w3-round-xxlarge w3-blue">Save Pembelian</button>
            <a class="w3-btn w3-round-xxlarge w3-red"  href="index.php">Kembali ke Toko</a>
        </center>
</html>