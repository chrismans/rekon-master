<section id="content">
 
        <!--start container-->

        <div id="breadcrumbs-wrapper" class="" style="width:100%;">
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">IPL</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?=base_url('administrator');?>">Dashboard</a></li>
                                <li><a href="<?=base_url('administrator/main/ipl');?>">IPL</a></li>
                                <li class="active">Edit IPL</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>        	

        <div class="col s12 m12 l6">
                  <div class="card-panel">
                    <h4 class="header2">Edit Proyek</h4>
                    <div class="row">
                        <div class="row">
                        <?=form_open('action/edit_ipl', "class='stdform stdform2'")?>
                        <?php $id = $this->uri->segment(4);
                        $show_item = $this->db->get_where('tbl_ipl', array("id_ipl"=>"$id"));
                        foreach ($show_item->result() as $reduce) { ?> 
                        <input type="hidden" value="<?=$reduce->id_ipl;?>" id="id" name="id">
                          <div class="input-field col s12">
                            <input readonly="1" value="<?=$reduce->nama_proyek;?>" id="nama_proyek" name="nama_proyek" type="text">
                            <label for="nama_proyek" class="active">Nama Proyek</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input readonly="1" value="<?=$reduce->spk;?>" id="spk" name="spk" type="text">
                            <label for="spk" class="active">SPK</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->nama_subkon;?>" id="nama_subkon" name="nama_subkon" type="text">
                            <label for="nama_subkon" class="active">Nama SUbkon</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->nama_pemborong;?>" id="nama_pemborong" name="nama_pemborong" type="text">
                            <label for="nama_pemborong" class="active">nama_pemborong</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->jenis_pekerjaan;?>" id="jenis_pekerjaan" name="jenis_pekerjaan" type="text">
                            <label for="jenis_pekerjaan" class="active">Uraian Pekerjaan</label>
                          </div>
                        </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light" onclick="return confirm('Apakah data yang di ubah sudah sesuai?')" type="submit" name="action">Submit
                              </button>
                              <button onclick="goBack()" class="btn cyan waves-effect waves-light" type="submit" name="action">Cancel
                              </button>
                              <?php } ?>
                              <?php echo form_close(); ?>
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
