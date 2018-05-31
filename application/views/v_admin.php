<div class="container">
          <table  class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>No_RM</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>No.Telp</th>
                <th>Jenis Poli</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $i = 1;
                foreach ($pasien as $key => $value) {
              ?>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $value['no_rm'];?></td>
                  <td><?php echo $value['nama'];?></td>
                  <td><?php echo $value['ttl'];?></td>
                  <td><?php if ($value['jk'] == 'P') {
                    echo "Perempuan";
                  }else{
                    echo "Laki-laki";
                  }  ;?></td>
                  <td><?php echo $value['alamat'];?></td>
                  <td><?php echo $value['no_telp'];?></td>
                  <td><?php if ($value['jp'] == '1') {
                    echo "Poliklinik Umum";
                  }elseif ($value['jp'] == '2') {
                    echo "Poliklinik Anak";
                  }else {
                    echo "Poliklinik Kandungan";
                  }  ;?></td>
                  <td>                    
                      <form method="post" action="<?php echo base_url('crud/coba')?>">                    
                          <input type="hidden" name="status" class="form-control" id="status" value="1">                        
                        <div class="form-group">
                          <button type="button" class="btn btn-primary">Selesai
                      <!-- <?php
                       //  if ($value['status'] == '1') {                          
                       //    echo 'class="btn btn-primary"';
                       //  } else {                          
                       //    echo 'class="btn btn-secondary" style="color:white;"';
                       //  }
                       // ?>
                       //   <?php
                       //  if ($value['status'] == '1') {                          
                       //    echo 'Selesai';
                       //  } else {                          
                       //    echo 'Belum';
                       //  }
                       ?> -->
                       </button>
                     </div>
                   </form>
                  </td>
                  <td>
          <a href="edit" type="button" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
            
          </button>
          <button type="button" class="btn btn-danger tombol" 
          data-toggle="modal" data-target="#deleteModal" 
          data-id="<?php echo $value['id'];?>" 
          data-nama="<?php echo $value['nama'];?>"
          class="tombol delete">
            <span class="glyphicon glyphicon-trash"></span>
          </button>
        </td>
                </tr>
                <?php
                $i++;
                }
              ?>
            </tbody>
          </table>
      </div>
