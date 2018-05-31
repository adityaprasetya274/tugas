       <div class="container">
        <div class="row">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No Antrian</th>
                <th>No_RM</th>
                <th>Nama</th>
                <th>TTL</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>No.Telp</th>
                <th>Jenis Poli</th>
                <th>Status</th>
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
                    <form method="post" action="<?php echo base_url('crud/insert_status')?>"><input type="button" name="status" 
                      <?php
                      if ($value['status'] == '1') {
                         echo "value='Selesai'";
                         echo "class='btn btn-success'";
                       }else{
                        echo "value='Belum'";
                        echo "class='btn btn-primary'";
                       } ?>></form>
                  </td>

                </tr>
                <?php
                $i++;
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>