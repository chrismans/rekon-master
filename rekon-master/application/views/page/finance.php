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
                            <h5 class="breadcrumbs-title">Finance</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator');?>">Dashboard</a></li>
                                <li class="active">Finance</li>
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
                         </p>
                        </th>
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 1px;">No.</th>
                        <th class="sorting_asc" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 200px;">SPK</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Nilai Kontrak</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Progres</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Tanggal Penagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Nilai Tagihan</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Tanggal Bayar</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Nilai Pembayaran</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="2" aria-label="Age: activate to sort column ascending" style="width: 200px;">Kurang Tagih</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table-simple" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 200px;">Modify</th></tr>
                    </thead>
                    <tfoot>
                        
                    </tfoot>
                 
                    <tbody>
                <?php
                                        
                    $no=0;
                    $query = $this->db->get('tbl_finance');
                    foreach ($query->result() as $dataf ) {

                        $no++;?>
                    <tr role="row" class="odd">
                   <td>                           <p>
                              <input type="checkbox" name="checkbox[]" class="checkbox1" type="checkbox" id="checkbox_<?php echo $no;?>" value="<?php echo $dataf->id_finance ?>" />
                              <label for="checkbox_<?php echo $no;?>"></label>
                            </p></th></td>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $dataf->spk; ?></td>
                            <td><?php echo "Rp.".number_format($dataf->nilai_kontrak).",-";?></td>
                            <td><?php echo $dataf->progres;?></td>
                            <td><?=date('d-m-Y', strtotime($dataf->tgl_tagih));?></td>
                            <td><?php echo "Rp.".number_format($dataf->jumlah_tagih).",-";?></td>
                            <td><?=date('d-m-Y', strtotime($dataf->tglbayar));?></td>
                            <td><?php echo "Rp.".number_format($dataf->nilai_byr).",-"; ?></td>
                            <td><?php echo "Rp.".number_format($dataf->kurang_tgh).",-"; ?></td>
                            <td> 
                                <?php 
                                    $datetime1 = date_create($dataf->tglbayar);
                                    $datetime2 = new DateTime("now");
                                    $datetime12 = date_create($dataf->tgl_tagih);
                                    $datetime22 = new DateTime("now");
                                    $interval = date_diff($datetime1, $datetime2);
                                    $interval1 = date_diff($datetime12,$datetime22);
                                    if (intval($interval->format('%R%a'))>=14) {
                                         echo '<div class="btn btn-large waves-effect waves-light red darken-4">tagihan</div>';
                                     }elseif (intval($interval1->format('%R%a'))>=14) {
                                         echo '<div class="btn btn-large waves-effect waves-light red darken-4">tagihan</div>';
                                     }
                                 ?>
                             </td>
                            <td>
                            <a  style="color:#000; padding-right:5px;"href="<?=site_url('administrator/main/update_finance/'.$dataf->id_finance)?>" title="Edit"><li style="color:<?php if ($dataf->kurang_tgh==0) {
                                echo "green";
                                
                            }else{
                                echo "yellow";
                                } ?>;" class="mdi-action-done">Approve</li></a>
                            <a style="color:#000; padding-left:5px;" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="<?=site_url('action/deletefinance/'.$dataf->id_finance)?>" title="Delete"><li class="mdi-action-delete"></li></a>
                            </td>
                        </tr>
                    <?php } ?></tbody>
                    <br><br>
                </div>
              </div>
            </div>
            </table>

            <tfoot>
            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/exportfinance')?>" title="Export to Excel"><li class="mdi-file-file-download"></li>
            </a>            
            <a style="color:#000; padding-left:5px;" href="<?=site_url('action/print_finance');?>" title="Print"><li class="mdi-action-print"></li>
            </a>
            <br>
                        <a  style="background-color:#F95D13;" id="del_all" href="<?php echo site_url('action/deletefinancebox'); ?>" class="btn waves-effect waves-light right"> Hapus Data Terpilih</a>
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
                        url: '<?php echo base_url()?>action/deletefinancebox',
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