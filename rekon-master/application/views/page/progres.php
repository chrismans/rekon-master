
                <!--start container-->

                    <!-- START WRAPPER -->
                <div id="breadcrumbs-wrapper" class="" style="width:100%;">
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">SPK</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?=site_url('administrator')?>">Dashboard</a></li>
                                <li class="active">SPK</li>
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
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 50px;">Tanggal Penagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 50px;">DP</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">Tanggal Penagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">1st Progres</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">Tanggal Penagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">2nd Progres</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">Tanggal Penagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">3rd Progres</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">Tanggal Penagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">4th Progres</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">Tanggal Penagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">5th Progres</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">Tanggal Penagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 50px;">Retensi</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Modify</th></tr>
                    </thead>
                 
                 
                    <tbody>
                    <?php $query = $this->db->get('tbl_spk');
                    foreach ($query->result() as $data1) { ?>
                    <tr role="row" class="odd">
                            <td class="sorting_1"><?=$data1->tgl_tagih1;?></td>
                            <td><?=$data1->dp;?></td>
                            <td><?=$data1->tgl_tagih2;?></td>
                            <td><?=$data1->progres1;?></td>
                            <td><?=$data1->tgl_tagih3;?></td>
                            <td><?=$data1->progres2;?></td>
                            <td><?=$data1->tgl_tagih4;?></td>
                            <td><?=$data1->progres3;?></td>
                            <td><?=$data1->tgl_tagih5;?></td>
                            <td><?=$data1->progres4;?></td> 
                            <td><?=$data1->tgl_tagih6;?></td>
                            <td><?=$data1->progres5;?></td>
                            <td><?=$data1->tgl_tagih7;?></td>
                            <td><?=$data1->retensi;?></td>     
                            <td>
                            <a style="color:#000; padding-right:5px;" href="<?=site_url('administrator/main/edit_progres/'.$data1->id_spk)?>" title="Edit"><li class="mdi-editor-border-color"></li></a>
                            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/deletespk/'.$data1->id_spk)?>" title="Delete"><li class="mdi-action-delete"></li></a>
                            </td>
                        </tr>
                    <?php } ?></tbody>
                    <br><br>
                </div>
              </div>
            </div>

            </table>
            </div>
            </div>
            </div>
