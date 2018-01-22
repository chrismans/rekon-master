 
                <!--start container-->

                	<!-- START WRAPPER -->
				<div id="breadcrumbs-wrapper" class=" grey lighten-3" style="width:100%;">
			            
			          <div class="container">
			            <div class="row">
			              <div class="col s12 m12 l12">
			                <h5 class="breadcrumbs-title">Data Register</h5>
			                <ol class="breadcrumb">
			                    <li><a href="<?php echo base_url('Home');?>">Dashboard</a></li>
			                    <li class="active">Data Register</li>
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
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 121px;">Nama Proyek</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 88px;">Telepon</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 88px;">HP</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">PIC</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 76px;">Alamat</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 64px;">Modify</th></tr>
                    </thead>
                 
                 
                    <tbody>
                    <?php $query = $this->db->get('tbl_proyek');
                    foreach ($query->result() as $data) { ?>
                    <tr role="row" class="odd">
                            <td class="sorting_1"><?=$data->nama_proyek;?></td>
                            <td><?=$data->telp;?></td>
                            <td><?=$data->hp;?></td>
                            <td><?=$data->pic?></td>
                            <td><?=$data->alamat?></td>
                            <td> 
                            <a style="color:#000; padding-right:5px;" href="<?=site_url('home/main/edit_proyek/'.$data->id_proyek)?>" title="Edit"><li class="mdi-content-create"></li></a>
                            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/delete/'.$data->id_proyek)?>" title="Delete"><li class="mdi-action-delete"></li></a>
                            </td>
                        </tr>
                    <?php } ?></tbody>
                    <br><br>
                </div>
              </div>
            </div>
			<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a href="<?=site_url('home/main/register')?>" class="btn-floating btn-large red" alt"New Proyek" title="New Proyek">
                  <i class="large mdi-content-add-circle"></i>
                </a>
            </div>
            </table>
            </div>
            </div>
            </div>
