<! DOCTYPE html>
< html >
< kepala >
	< title > Buku Tamu </ title >
</ head >
< body >
	< h2 > Data Buku Tamu </ h2 >
	< hr  size = " 1 " >
	< form  method = " post "  action = " simpan.php "  name = " tamu " >
		< fieldset >
			< legenda > Kontak Tamu: </ legend >
			< table  align = " left " >
				< tr >
					< td > nama </ td >
					< td >: </ td >
					< td > < input  type = " text "  name = " name "  placeholder = " Nama Lengkap " > </ td >
				</ tr >
				< tr >
					< td > Email </ td >
					< td >: </ td >
					< td > < input  type = " text "  name = " email "  placeholder = E-mail> </ td >
				</ tr >
				< tr >
					< td > Alamat </ td >
					< td >: </ td >
					< td > < input  type = " text "  name = " address "  placeholder = " Alamat Lengkap " > </ td >
				</ tr >
				< tr >
					< td > Telepon </ td >
					< td >: </ td >
					< td > < input  type = " text "  name = " phone "  placeholder = " Telepon " > </ td >
				</ tr >
				< tr >
					< td > Pesan </ td >
					< td >: </ td >
					< td > < textarea  style = " width: 210px; margin-bottom: 10px; "  name = " message " > </ textarea > </ td >
				</ tr >
				< tr >
					< td > < input  type = " submit "  name = " submit "  value = " Send " > < input  type = " reset "  name = " reset "  value = " Reset " > </ td >
				</ tr >
			</ table >
		</ fieldset >>
	</ form >
</ body >
</ html >