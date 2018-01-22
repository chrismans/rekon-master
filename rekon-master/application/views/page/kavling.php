    <script src="<?php echo base_url('asset/js/jquery.min.js');?>"></script>
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
                            <h5 class="breadcrumbs-title">Kavling</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator');?>">Dashboard</a></li>
                                <li class="active">Kavling</li>
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
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 1px;">
                           <p>
                              <input type="checkbox" id="selecctall"/>
                              <label for="selecctall"></label>
                            </p>                            
                        </th>
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 1px;">NO.</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 121px;">N.Proyek</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 88px;">SPK</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 88px;">N.Kavling</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Type/Ukuran</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 33px;">Satuan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 33px;">Status</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 33px;">Harga Satuan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 64px;">Modify</th></tr>
                    </thead>
                  <tfoot>
                        <tr><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1">No.</th><th rowspan="1" colspan="1">N.Proyek</th><th rowspan="1" colspan="1">SPK</th><th rowspan="1" colspan="1">N.Kavling</th><th rowspan="1" colspan="1">Type/Ukuran</th><th rowspan="1" colspan="1">Satuan</th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Harga Satuan</th><th rowspan="1" colspan="1">Modify</th></tr>
                    </tfoot>
                 
                    <tbody>
                    <?php 
                    $no=0;
                    $query = $this->db->get('tbl_kavling');
                    foreach ($query->result() as $datak) {
                    $no++; ?>
                    <tr role="row" class="odd"> 
                            <td>                           <p>
                              <input type="checkbox" name="checkbox[]" class="checkbox1" type="checkbox" id="checkbox_<?php echo $no;?>" value="<?php echo $datak->id_kavling ?>" />
                              <label for="checkbox_<?php echo $no;?>"></label>
                            </p></th></td>
                    
                            <td class="sorting_1"><?=$no;?>.</td>
                            <td><?=$datak->nama_proyek;?></td>
                            <td><?=$datak->spk;?></td>
                            <td><?=$datak->nama_kavling;?></td>
                            <td><?=$datak->type;?></td>
                            <td><?=$datak->satuan;?></td>
                            <td><?=$datak->status;?></td>
                            <td><?= 'Rp.'.number_format($datak->harga_satuan).',-';?></td>
                            <td> 
                            <a style="color:#000; padding-right:5px;" href="<?=site_url('administrator/main/edit_kavling/'.$datak->id_kavling)?>" title="Edit"><li class="mdi-editor-border-color"></li></a>
                            <a style="color:#000; padding-left:5px;" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?=site_url('action/deletekavling/'.$datak->id_kavling)?>" title="Delete"><li class="mdi-action-delete"></li></a>
                            </td>
                        </tr>
                    <?php } ?></tbody>
                    <br><br>
                </div>
              </div>
            </div>
            </table>
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">            
                <a href="<?=site_url('administrator/main/new_kavling')?>" class="btn-floating waves-effect waves-light brown right" alt"New Kavling" title="New Kavling">
                  <i class="mdi-content-create"></i>
                </a>
            </div>
            <tfoot>
            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/excelkavling')?>" title="Export to Excel"><li class="mdi-file-file-download"></li>
            </a>            
            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/print_kavling');?>" title="Print"><li class="mdi-action-print"></li>
            </a>
            <br>
            <a  style="background-color:#F95D13;" id="del_all" href="<?php echo site_url('action/deletekavlingbox'); ?>" class="btn waves-effect waves-light right"> Hapus Data Terpilih</a>
            </tfoot>            
            </div>
            </div>
            </div>
            <script>
            $(document).ready(function() {
                resetcheckbox();
                $('#selecctall').click(function(event) {  //on click
                    if (this.checked) { // check select status
                        $('.checkbox1').each(function() { //loop through each checkbox
                            this.checked = true;  //select all checkboxes with class "checkbox1"              
                        });
                    } else {
                        $('.checkbox1').each(function() { //loop through each checkbox
                            this.checked = false; //deselect all checkboxes with class "checkbox1"                      
                        });
                    }
                });


                $("#del_all").on('click', function(e) {
                    e.preventDefault();
                    var checkValues = $('.checkbox1:checked').map(function()
                    {
                        return $(this).val();
                    }).get();
                    console.log(checkValues);
                    
                    $.each( checkValues, function( i, val ) {
                        $("#"+val).remove();
                        });
//                    return  false;
                    $.ajax({
                        url: '<?php echo base_url()?>action/deletekavlingbox',
                        type: 'post',
                        data: 'ids=' + checkValues
                    }).done(function(data) {
                        $('#selecctall').attr('checked', false);
                        window.location.reload();
                    });
                });

                $(".addrecord").click(function(e) {
                    e.preventDefault();
                    var url = $(this).attr('href');
                    $.ajax({
                        type: 'POST',
                        url: url
                    }).done(function() {
                        window.location.reload();
                    });
                });
                
                function  resetcheckbox(){
                $('input:checkbox').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
                   });
                }
            });
        </script>
