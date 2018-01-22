<section id="content"> 

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
                                <li><a href="<?=base_url('administrator');?>">Dashboard</a></li>
                                <li><a href="<?=base_url('administrator/main/Kavling');?>">Kavling</a></li>
                                <li class="active">Edit Kavling</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>          

        <div class="col s12 m12 l6">
                  <div class="card-panel">
                    <h4 class="header2">Edit Kavling</h4>
                    <div class="row">
                        <div class="row">
                       <form id="form1" method="post" action="<?php echo base_url('action/edit_kavling');?>">
                        <?php $id = $this->uri->segment(4);
                        $show_item = $this->db->get_where('tbl_kavling', array("id_kavling"=>"$id"));
                        foreach ($show_item->result() as $reduce) { ?>
                        <input type="hidden" value="<?=$reduce->id_kavling;?>" id="id" name="id">
                          <div class="input-field col s12">
                            <label for="nama_proyek" class="active">Nama Proyek</label>
                            <input value="<?=$reduce->nama_proyek;?>" id="nama_proyek" name="nama_proyek" type="text" readonly="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" name="spk_hidden" id="spk_hidden" >
                            <label for="spk" class="active">Pilih Surat Perintah Kerja</label>
                            <input value="<?=$reduce->spk;?>" id="spk" name="spk" type="text" readonly="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->nama_kavling;?>" id="nama_kavling" name="nama_kavling" type="text">
                            <label for="nama_kavling" class="active">Nama Kavling</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->type;?>" id="type" onkeyup="Calculate()" name="type" type="text">
                            <label for="type" class="active">Type</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->satuan;?>" id="satuan" name="satuan" type="text">
                            <label for="satuan" class="active">Satuan</label>
                          </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->status;?>" id="status" name="status" type="text">
                            <label for="status" class="active">Status</label>
                          </div>                          
                          <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->harga_satuan;?>" id="harga_satuan" name="harga_satuan" type="text" onkeyup="Calculate()">
                            <label for="harga_satuan" class="active">Harga Satuan</label>
                          </div>                        
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light" type="submit" onclick="return confirm('Apakah data yang di ubah sudah sesuai?')" name="action">Submit
                              </button>
                              <button onclick="goBack()" class="btn cyan waves-effect waves-light" type="submit" name="action">Cancel
                              </button>
                              <?php } ?>


                           </form>
                            </div>
                          </div>
                        </div> 
                    </div>
                  </div>
                </div>
        <!--start container-->
</section>   
           
        <!--end container-->
      <!-- END CONTENT -->
                <!--end container-->
    <script>
function goBack() {
    window.history.go(-1);
}
</script>


 <script type="text/javascript">


function Calculate(){
 var a =document.getElementById('luas_bangunan').value;
var b = document.getElementById('harga_satuan').value;
document.getElementById('jumlah_borong').value=(a*b);
}


</script>