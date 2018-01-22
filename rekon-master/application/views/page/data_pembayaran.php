        <div id="breadcrumbs-wrapper" class="" style="width:100%;"> 
                  <div class="header-search-wrapper grey hide-on-large-only">
                      <i class="mdi-action-search active"></i>
                      <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                  </div>
                <div class="container">
                  <div class="row">
                    <div class="col s12 m12 l12">
                      <h5 class="breadcrumbs-title">Data Pembayaran</h5>
                      <ol class="breadcrumb">
                          <li><a href="<?php echo site_url('administrator');?>">Dashboard</a></li>
                          <li class="active">Data Pembayaran</li>
                      </ol>
                    </div>
                  </div>
                </div> 
              </div>

            <div class="container">
              
                <div class="col s12 m8 l9">
                  
                  <table id="data-table-simple" class="responsive-table display dataTable" cellspacing="0" role="grid" aria-describedby="data-table-simple_info">
                    <thead>
                        <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 1px;">No.</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 121px;">Nama Proyek</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 88px;">No.SPK</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 88px;">Nilai Kontrak</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 88px;">Jenis Pekerjaan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Tgl.Tagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">DP</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Tgl.Tagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">1st Progres</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Tgl.Tagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">2nd Progres</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Tgl. Tagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">3rd Progres</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Tgl. Tagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">4th Progres</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Tgl. Tagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">5th</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Tgl. Tagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Retensi</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Jumlah Tagih</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Sisa Tagih</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Persentase</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Modify</th>
                    </thead>
                 
                 
                    <tbody>
                    <?php
                    $no=0;
                     $query = $this->db->get('tbl_sp'); 
                    $persenan = array('10%'=>10,'25%'=>21.25,'50%'=>21.25,'85%'=>31.25,'100%'=>11.25,'5%'=>5);

                    foreach ($query->result() as $data) {
                        $persentase = 0; 
                        $no++;
                     ?>
                    <tr role="row" class="odd">
                            <!-- <td class="sorting_1"><?=$data->nama_proyek;?></td> -->
                            <td><?=$no;?>.</td>
                            <td><?=$data->nama_proyek?></td>
                            <td><?=$data->spk?></td>
                            <td><?='Rp.'.number_format($data->nilai_kontrak).',-';?></td>
                            <td><?=$data->jenis_pekerjaan;?></td>
                            <td><?=$data->tgl_tagih1=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih1));?></td>
                            <td>
                            <?php 
                            if (!empty($data->dp)) {
                                $persentase += intval($data->dp);
                            echo $data->dp;
                            echo ' Rp.'.number_format(($data->nilai_kontrak * ($persenan[$data->dp]/100)),0,',','.').',-';
                                
                            } else {
                             echo "Data Kosong";
                            }
                            
                            ?>
                            </td>
                            <td><?=$data->tgl_tagih2=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih2));?></td>
                            <td>
                            <?php
                            if (!empty($data->progres1)) {
                                 $persentase += intval($data->progres1);
                            echo  $data->progres1;
                            echo 'Rp.'.number_format(($data->nilai_kontrak * ($persenan[$data->progres1]/100)),0,',','.').',-';
                            
                             } else {
                            echo "Data Kosong";
                             }
                              
                            ?>
                            </td>
                            <td><?=$data->tgl_tagih3=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih3));?></td>
                            <td>
                            <?php
                            if (!empty($data->progres2)) {
                                 $persentase += intval($data->progres2);
                            echo  $data->progres2; 
                            echo ' Rp.'.number_format(($data->nilai_kontrak * ($persenan[$data->progres2]/100)),0,',','.').',-';
                            
                            } else {
                                echo "Data Kosong";
                            }
                            ?>
                            </td>
                            <td><?=$data->tgl_tagih4=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih4));?></td>
                            <td>
                            <?php 
                            if (!empty($data->progres3)) {
                                 $persentase += intval($data->progres3);
                                 echo $data->progres3;
                                echo ' Rp.'.number_format(($data->nilai_kontrak * ($persenan[$data->progres3]/100)));
                             } 
                             else{
                                echo "Data Kosong";
                             }
                            ?>
                            </td>
                            <td><?=$data->tgl_tagih5=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih5));?></td>                            
                            <td>
                            <?php 
                            if (!empty($data->progres4)) {
                                 $persentase += intval($data->progres4);
                            echo $data->progres4;
                            echo ' Rp.'.number_format(($data->nilai_kontrak * ($persenan[$data->progres4]/100)));
                            
                            } else {
                            echo "Data Kosong";
                            }
                            
                            ?>
                            </td>
                            <td><?=$data->tgl_tagih6=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih6));?></td>
                            <td>
                            <?php 
                            if (!empty($data->progres5)) {
                                 $persentase += intval($data->progres5);
                            echo $data->progres5;
                            echo ' Rp.'.number_format(($data->nilai_kontrak * ($persenan[$data->progres5]/100)));
                            
                            } else {
                            echo "Data Kosong";
                            }
                            
                            ?>
                            </td>
                            <td><?=$data->tgl_tagih7=='0000-00-00'?'00-00-0000':date('d-m-Y', strtotime($data->tgl_tagih7));?></td>                                                        
                            <td><?php

                            echo 'Rp'.number_format($data->sisa_tagih);?></td>
                            <td><?php
                            echo 'Rp.'.number_format($data->jumlah_tagih);?></td>
                            <td><?php 
                            echo 'Rp'.number_format($data->sisa_tagih);?></td>
                            <td><?=$persentase.'%';?></td>
                            <td>
                            <a style="color:#000; padding-right:5px;" href="" title="Edit"><li class="mdi-editor-border-color"></li></a>
                            <a style="color:#000; padding-left:5px;" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?=site_url('action/deletedatap/'.$data->id_sp)?>" title="Delete"><li class="mdi-action-delete"></li></a>
                            </td>
        
                        </tr>
                    <?php } ?></tbody>
                    <br><br>
        
                </div>
              </div>

            </div>
            </table>
                <tfoot>
            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/exceldp')?>" title="Export to Excel"><li class="mdi-file-file-download"></li>
            </a>            
            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/print_datapembayaran');?>" title="Print"><li class="mdi-action-print"></li>
            </a>
            </tfoot> 
            </div>
            </div>
            </div>