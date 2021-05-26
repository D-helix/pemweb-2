<! DOCTYPE html >
< html >
< kepala >
	< judul > Kontak </ judul >
</ head >
< body >
	< h1 > BUKU TAMU </ h1 >
	< A  href = " index.php " > Kembali Ke Buku Tamu </ a >
	< Br >
	< h2 > BUKU TAMU </ h2 >
	< A  href = " tampil.php " > Lihat Buku Tamu </ a >
	< hr  size = 1 >

	<? php
	sertakan ( "koneksi.php" );
	// sql menampilkan record
	$ sql = "PILIH ID, nama, email, alamat, telepon, pesan DARI tamu" ;
	$ hasil = $ koneksi -> kueri ( $ sql );

	if ( $ result -> num_rows > 0 ) {
    // keluaran data setiap baris
    sementara ( $ row = $ result -> fetch_assoc ()) {

  	echo  "<br>" .
  	"id:" . $ row [ "id" ]. "<br>" .
  	"Nama:" . $ row [ "name" ]. "<br>" .
  	"Email:" . $ row [ "email" ]. "<br>" .
 	"Alamat:" . $ row [ "address" ]. "<br>" .
  	"Telepon:" . $ row [ "phone" ]. "<br>" .
  	"Pesan:" . $ row [ "message" ]. "<br>" ;
    }
} lain {
    echo  "0 hasil" ;
}
$ koneksi -> tutup ()
?>

</ body >
</ html >