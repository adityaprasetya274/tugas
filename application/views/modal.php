<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="statusModalLabel">Status</h4>
			</div>
			<div class="modal-body">
				<div class="status alert alert-danger" role="alert"></div>
			</div>
			<div class="modal-footer">
				<form method="post" action="crud/status">
					<input type="hidden" name="id" class="form-control" id="id">
						<button type="button" class="btn btn-default" data-dismiss="modal">Belum</button>
						<button class="btn btn-success">Selesai</button>
				</form>	
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title edit" id="editModalLabel"></h4>
			</div>
			<div class="modal-body">
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
			</div>
			<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button class="btn btn-primary">Update</button>
				</form>	
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="deleteModalLabel">Delete Data</h4>
			</div>
			<div class="modal-body">
				<div class="delete alert alert-danger" role="alert"></div>
			</div>
			<div class="modal-footer">
				<form method="post" action="crud/delete_data">
					<input type="hidden" name="id" class="form-control" id="id">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<button class="btn btn-danger">DELETE</button>
				</form>	
			</div>
		</div>
	</div>
</div>