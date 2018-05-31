<div class="container">
	<h4 style="text-align: center;" class="modal-title">Edit data</h4>
	<form method="post" action="crud/edit_data">
		<div class="form-group">
			<label for="nama" class="control-label">Nama</label>
			<input type="text" name="nama" class="form-control" id="nama">
		</div>
		<div class="form-group">
			<label for="ttl" class="control-label">TTL(YYYY/MM/DD)</label>
			<input type="text" name="ttl" class="form-control" id="ttl">
		</div>
		<div class="form-group">
			<label for="alamat" class="control-label">Alamat</label>
			<input type="text" name="alamat" class="form-control" id="alamat">
		</div>
		<div class="form-group">
			<label for="jk" class="control-label">Jenis Kelamin</label>
			<select class="form-control" name="jk">
				<option value="L">Laki-laki</option>
				<option value="P">Perempuan</option>
			</select>
		</div>
		<div class="form-group">
			<label for="no_telp" class="control-label">No. Telepon</label>
			<input type="text" name="no_telp" class="form-control" id="no_telp">
		</div>
		<div class="form-group">
			<label for="jp" class="control-label">Jenis Perawatan</label>
			<select class="form-control" name="jp">
				<option value="1">Umum</option>
				<option value="2">Inap</option>
				<option value="3">UGD</option>
			</select>
		</div>
			<a type="button" class="btn btn-default" href="index">Cancel</a>
			<button class="btn btn-primary">Update</button>
	</form>	
</div>		