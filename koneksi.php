<? php
	$ hostmysql = "localhost" ;
	$ username = "root" ;
	$ password = "" ;
	$ database = "bukutamu" ;
	$ koneksi = mysqli_connect ( $ hostmysql , $ username , $ password , $ database );
	jika ( $ koneksi ) {
 		echo  "<b> Koneksi Berhasil </b>" ;
	}
	lain {
 		mati ( "<b> Koneksi Gagal </b>" );
	}
?>