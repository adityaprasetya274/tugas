$ (document).on("click",'.tombol', function(e){
	var id = $(this).data('id');
	var pass = $(this).data('pass');
	var nama = $(this).data('nama');	
	var ttl = $(this).data('ttl');
	var alamat = $(this).data('alamat');
	var jk = $(this).data('jk');
	var no_telp = $(this).data('no_telp');
	var jp = $(this).data('jp');
	var status = $(this).data('status');

	$(".id").val(id);
	$(".pass").val(pass);
	$(".nama").val(nama);
	$(".ttl").val(ttl);
	$(".alamat").val(alamat);

	if(jk == 'L'){
		$("#jkl").attr('selected', true);
	} else if(jk == 'P'){
		$("#jkp").attr('selected', true);
	};

	$(".no_telp").val(no_telp);

	if(jp == '1'){
		$("#jp1").attr('selected', true);
	} else if(jp == '2'){
		$("#jp2").attr('selected', true);
	} else if(jp == '3'){
		$("#jp3").attr('selected', true);
	};

	if(status == '1'){
		$("#jp1").attr('selected', true);
	} else if(status == '2'){
		$("#jp2").attr('selected', true)
	};
	$(".status").html('Apakah anda yakin pasien data dengan nama <strong>"' + nama + '"</strong> telah selesai?');
	$(".edit").text('Edit From for "' + nama + '"');
	$(".delete").html('Apakah anda yakin akan menghapus data dengan nama <strong>"' + nama + '"</strong> ?');
	$("#pass").tooltip({
		'placement': 'top',
		'title': 'Kosongkan kolom password bila tidak ada perubahan',
		'trigger': 'focus'

	});

});