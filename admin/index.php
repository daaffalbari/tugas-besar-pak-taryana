<html>
    <head>
        <link rel="stylesheet" href="../pages/w3.css">
        <title>daffapedia | bookstore</title>
    </head>
    <body>
    <div id="header">
        <img src="daffapedia.jpg"  width=100% height=40%>
    </div>
    <div class="w3-bar w3-border w3-grey">
        <button class="w3-bar-item w3-button w3-text-white w3-mobile" onclick="openMenu('home')">Home</button>
        <button class="w3-bar-item w3-button w3-text-white w3-mobile" onclick="openMenu('insert')">Insert</button>
        <button class="w3-bar-item w3-button w3-text-white w3-mobile" onclick="openMenu('select')">Select</button>
        <button class="w3-bar-item w3-button w3-text-white w3-mobile" onclick="openMenu('update')">Update</button>
        <button class="w3-bar-item w3-button w3-text-white w3-mobile" onclick="openMenu('delete')">Delete</button>
        <button class="w3-bar-item w3-button w3-text-white w3-mobile" onclick="openMenu('penjualan')">Penjualan</button>
        <div class="w3-dropdown-hover w3-mobile">
            <button class="w3-button w3-text-white">Dropdown</button>
            <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <button class="w3-bar-item w3-button w3-text-black w3-mobile" onclick="openMenu('insert')">Insert</button>
            <button class="w3-bar-item w3-button w3-text-black w3-mobile" onclick="openMenu('select')">Select</button>
            <button class="w3-bar-item w3-button w3-text-black w3-mobile" onclick="openMenu('update')">Update</button>
            <button class="w3-bar-item w3-button w3-text-black w3-mobile" onclick="openMenu('delete')">Delete</button>
            <button class="w3-bar-item w3-button w3-text-black w3-mobile" onclick="openMenu('penjualan')">Penjualan</button>
            <a href="../index.php" class="w3-bar-item w3-button w3-mobile">Toko</a>
            </div>
        </div>
    </div>

    <div id="home" class= "Menu w3-animate-right ">
        <div class="w3-blue-grey w3-container" style="height:600px">
            <div class="w3-padding-64 w3-center">
                <h1>TENTANG SAYA</h1>
                <img src="img_avatar3.png" class="w3-margin w3-circle" alt="Person" style="width:25%">
                <div class="w3-left-align w3-padding-large w3-center">
                    <h3>10120212_DAFFA ALBARI</h3>
                    <h3>TEKNIK INFORMATIKA UNIKOM</h3>
                </div>
            </div>
        </div>
    </div>

    <div id="insert" class="w3-container Menu" style="display:none">
    <center>
		<div class="w3-container">	
			<div class="w3-panel w3-round-xxlarge w3-cyan">
			<h3>MASUKKAN DATA BARANG</h3> 
			</div>
			<hr>
				<form action="savebarang.php" method="post">
					<table border="1">
						<tr>
							<td>
								<table border="0">
								<tr>
									<td>
										KODE BARANG
									</td>
									<td>
										<input class='w3-input' name="kodebrg" size="10">
									</td>
								</tr>
								<tr>
									<td>
										NAMA BARANG
									</td>
									<td>
										<input class='w3-input' name="namabarang" size="30">
									</td>
								</tr>
								<tr>
									<td>
										HARGA
									</td>
									<td>
										<input class='w3-input' name="harga" size="10">
									</td>
								</tr>
								<tr>
									<td>
										STOK
									</td>
									<td>
										<input class='w3-input' name="stok" size="10">
									</td>
								</tr>
								<tr>
									<td>
										DESKRIPSI
									</td>
									<td>
										<input class='w3-input' name="deskripsi" size="20">
									</td>
								</tr>
							</table>
							</td>
						</tr>
					</table>
					<hr>
					<button class="w3-button w3-blue w3-round-xxlarge">SIMPAN</button>
					<button type="reset" class="w3-button w3-red w3-round-xxlarge">RESET</button>
				</form>		
		</div>
		<div class="w3-container w3-green w3-round-xxlarge">
			<p>
				Masukan data dengan benar, kemudian klik tombol Simpan
			</p>
		</div>
    </div>

        <div id="select" class="w3-container Menu" style="display:none"">
            <div class="w3-container">
            <center>	
			<div class="w3-panel w3-round-xxlarge w3-cyan">
				<h3>TAMPIL SEMUA DATA BARANG</h3> 
			</div>
				<hr>
			    <table class="w3-table-all">
					<tr class="w3-green">
                        <td><center>No</center></td>
                        <td><center>Kode Barang</center></td>
                        <td><center>Nama Barang</center></td>
                        <td><center>Harga</center></td>
                        <td><center>Stok</center></td>
                        <td><center>Deskripsi</center></td>
                        <td colspan=2><center>Action</center></td>
                    </tr>

                    <?php
                    require ("koneksi.php");
                    $sql="select * from barang";
                    $hasil=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_row($hasil);
                    $n=1;
                    do
                    {
                        list($kodebrg,$namabarang,$harga,$stok,$deskripsi)=$row;
                        echo ("<tr><td>$n<td>$kodebrg<td>$namabarang<td>$harga<td>$stok<td>$deskripsi");
                        echo ("<td><a href='editdata.php?kodebrg=$kodebrg'>Edit");
                        echo ("<td><a href='deletedata.php?kodebrg=$kodebrg'>Delete");
                        $n++;
                    }
                        while ($row=mysqli_fetch_row($hasil));
                    ?>
                    </table>
                </center>
                </div>
        </div> 

        <div id="update" class="w3-container Menu" style="display:none">
            <center>
            <div class="w3-container">
				<div class="w3-panel w3-round-xxlarge w3-cyan">
			        <h3>EDIT DATA BARANG</h3> 
				</div>
				<hr>
				<form action="editdata.php" method=GET>
					<table border="1">
						<tr>
							<td>
								<table border="0">
									<tr>
										<td>KODE BARANG</td>
										<td><input name="kodebrg" class="w3-input"></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<hr>
					<button class="w3-button w3-blue w3-round-xxlarge">SAVE</button>
					<button type="reset" class="w3-button w3-red w3-round-xxlarge">RESET</button>
                    <br>
                    <br>
                    <div class="w3-container w3-teal">
                        <p>Masukan data dengan benar, kemudian Click Tombol Save</p>
                    </div>
				</form>
			</div>
            </center>
        </div>            
        
        <div id="delete" class="w3-container Menu" style="display:none">
            <center>
            <div class="w3-container">
				<div class="w3-panel w3-round-xxlarge w3-cyan">
			        <h3>HAPUS DATA BARANG</h3> 
				</div>
				<hr>
				<form action="deletedata.php" method=GET>
					<table border="1">
						<tr>
							<td>
								<table border="0">
									<tr>
										<td>KODE BARANG</td>
										<td><input name="kodebrg" class="w3-input"></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<hr>
					<button class="w3-button w3-blue w3-round-xxlarge">SAVE</button>
					<button type="reset" class="w3-button w3-red w3-round-xxlarge">RESET</button>
                    <br>
                    <br>
                    <div class="w3-container w3-teal">
                        <p>Masukan data dengan benar, kemudian Click Tombol Save</p>
                    </div>
				</form>
			</div>
            </center>
        </div>            

        <div id="penjualan" class="w3-container Menu" style="display:none">
        <center>
			<div class="w3-container">
				<div class="w3-panel w3-round-xxlarge w3-cyan">
				<h3>DAFTAR PENJUALAN BARANG</h3> 
				</div>
				<hr>
                <table class="w3-table-all">
					<tr class="w3-green">
                        <td><center>No</center></td>
                        <td><center>Id</center></td>
                        <td><center>Kode Barang</center></td>
                        <td><center>Jumlah</center></td>
                        <td><center>Nama Pembeli</center></td>
                        <td><center>Alamat</center></td>
                        <td><center>Kota</center></td>
                        <td><center>Kode Pos</center></td>
                        <td><center>Telepon</center></td>
                        <td><center>Email</center></td>
                        <td><center>Action</center></td>
                    </tr>    

                    <?php
                        require ("koneksi.php");
                         $sql="select * from penjualan";
                        $hasil=mysqli_query($conn,$sql);
                        $row=mysqli_fetch_row($hasil);
                        $n=1;
                        do
                        {
                            list($id,$kodebrg,$jumlah,$namapembeli,$alamat,$kota,$kodepos,$telepon,$email)=$row;
                            echo("<center>");
                            echo ("<tr><td>$n
                            <td>$id
                            <td>$kodebrg
                            <td>$jumlah
                            <td>$namapembeli
                            <td>$alamat
                            <td>$kota
                            <td>$kodepos
                            <td>$telepon
                            <td>$email");
                            echo ("<td><a href='deletepenjualan.php?kodebrg=$kodebrg'>Delete");
                            echo("<center>");
                            $n++;
                        }
                            while ($row=mysqli_fetch_row($hasil));
                        ?>
                        </table>
                    </center>
                    </div>
        </div>      

        <!-- Java Script -->
    <script>
        function openMenu(namaMenu) {
        var i;
        var x = document.getElementsByClassName("Menu");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(namaMenu).style.display = "block";
    }
    </script>

</body>
</html>
