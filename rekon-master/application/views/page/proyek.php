<html>
<head>
    <script src="<?php echo base_url('asset/js/jquery.min.js');?>"></script>
</head>
<body>
                <!--start container-->
                    <!-- START WRAPPER -->
                <div id="breadcrumbs-wrapper" style="width:100%;">
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Proyek</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator')?>">Dashboard</a></li>
                                <li class="active">Proyek</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>

                <div class="container">
              
                <div class="col s12 m8 l9">
                  
                  <table id="data-table-simple" class="responsive-table display dataTable centered" cellspacing="0" role="grid" aria-describedby="data-table-simple_info">
                    <thead>
                        <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 1px;"> 
                           <p>
                              <input type="checkbox" id="selecctall"  />
                              <label for="selecctall"></label>
                            </p></th>
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 1px;">No.</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 150px;">N.Proyek</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">N.Owner</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Email Owner</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 150px;">Alamat</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 150px;">TLP</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 150px;">PIC</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 150px;">HP</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 150px;">Modify</th></tr>
                    </thead>
                    <tfoot>
                        <tr><th rowspan="1" colspan="1" align="center"></th><th rowspan="1" colspan="1" align="center">No.</th><th rowspan="1" colspan="1" align="center">N.Proyek</th><th rowspan="1" colspan="1" align="center">N.Owner</th><th rowspan="1" colspan="1">Email Owner</th><th rowspan="1" colspan="1">Alamat</th><th rowspan="1" colspan="1">TLP</th><th rowspan="1" colspan="1">PIC</th><th rowspan="1" colspan="1">Handphone</th><th rowspan="1" colspan="1">Modify</th></tr>
                    </tfoot>
                    <tbody>
                    <?php
                    $no=0;
                     $query = $this->db->get('tbl_proyek');
                    foreach ($query->result() as $data) {
                    $no++; ?>
                    <tr role="row" class="odd">
                    <td>                           <p>
                              <input type="checkbox" name="checkbox[]" class="checkbox1" type="checkbox" id="checkbox_<?php echo $no;?>" value="<?php echo $data->id_proyek ?>" />
                              <label for="checkbox_<?php echo $no;?>"></label>
                            </p></th></td>
                            <td><?php echo $no; ?></td>
                            <td class="sorting_1"><?=$data->nama_proyek;?></td>
                            <td><?=$data->nama_owner;?></td>
                            <td><?=$data->email;;?></td>
                            <td><?=$data->alamat?></td>
                            <td><?=$data->telp?></td>
                            <td><?=$data->pic;?></td>
                            <td><?=$data->hp;?></td>
                            <td> 
                            <a style="color:#000; padding-right:5px;" href="<?=site_url('administrator/main/edit_proyek/'.$data->id_proyek)?>" title="Edit"><li class="mdi-editor-border-color"></li></a>
                            <a style="color:#000; padding-left:5px;" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?=site_url('action/delete/'.$data->id_proyek)?>" title="Delete"><li class="mdi-action-delete"></li></a>
                            </td>
                        </tr>
                    <?php } ?></tbody>
                    <br><br>
                </div>
              </div>
            </div>
            </table>
            <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                <a href="<?=site_url('administrator/main/new_proyek')?>" class="btn-floating waves-effect waves-light brown right" alt"New Proyek" title="New Proyek">
                  <i class="mdi-content-create"></i>
                </a>
                </div>
            <tfoot>

            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/exporttoexcel')?>" title="Export to Excel"><li class="mdi-file-file-download"></li>
            </a>            
            <a target="_blank" style="color:#000; padding-left:5px;" href="<?=site_url('action/print_proyek');?>" title="Print"><li class="mdi-action-print"></li>
            </a>
            <br>
                       <a  style="background-color:#F95D13;" id="del_all" href="<?php echo site_url('action/deleteproyekbox'); ?>" class="btn waves-effect waves-light right"> Hapus Data Terpilih</a>
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
                        url: '<?php echo base_url()?>action/deleteproyekbox',
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
 </body>