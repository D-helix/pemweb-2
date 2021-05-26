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
	$ nama = $ _POST [ 'nama' ];
	$ email = $ _POST [ 'email' ];
	$ alamat = $ _POST [ 'alamat' ];
	$ telepon = $ _POST [ 'telepon' ];
	$ pesan = $ _POST [ 'pesan' ];

// sql entry data pada tabel
$ sql = "MASUKKAN KE tamu (nama, email, alamat, telepon, pesan)
NILAI ('$ nama', '$ email', '$ alamat', '$ telepon', '$ pesan') " ;

jika ( $ koneksi -> kueri ( $ sql ) === BENAR ) {
    echo  "Pesan telah terkirim!" ;
} lain {
    echo  "Kesalahan:" . $ sql . "<br>" . $ koneksi -> kesalahan ;
}

$ koneksi -> tutup ();
?>
</ body >
</ html >