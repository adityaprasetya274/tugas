<div class="container">
				<form method="post" action="<?php echo base_url('crud/insert_data')?>">
					<div class="form-group">
						<label for="id" class="control-label">Username</label>
						<input type="text" name="id" class="form-control" id="id">
					</div>
					<div class="form-group">
						<label for="pass" class="control-label">Password</label>
						<input type="password" name="pass" class="form-control" id="pass">
					</div>
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
					<div class="form-group">
						<a href="<?php echo base_url().'index.php/login'?>" type="button" class="btn btn-default">Cancel</a>
						<button class="btn btn-primary">Daftar</button>
					</div>
				</form>	
</div>