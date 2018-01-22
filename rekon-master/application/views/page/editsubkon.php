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
                            <h5 class="breadcrumbs-title">subkon</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?=base_url('administrator');?>">Dashboard</a></li>
                                <li><a href="<?php echo site_url('administrator/main/subkon');?>">subkon</a></li>
                                <li class="active">Edit subkon</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>          

              <div class="row">
                <div class="col s12 m12 l6"  style="width:100%;">
                  <div class="card-panel" style="width:100%;">
                    <div class="row">
                        <div class="row">
                        <?=form_open('action/edit_subkon', "class='stdform stdform2'")?>
                        <?php $id = $this->uri->segment(4);
                        $show_item = $this->db->get_where('tbl_subkon', array("id_proyek"=>"$id"));
                        foreach ($show_item->result() as $reduce) { ?> 
                        <input type="hidden" value="<?=$reduce->id_proyek;?>" id="id" name="id">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->nama_subkon;?>" id="nama_subkon" name="nama_subkon" type="text">
                            <label for="nama_subkon" class="active">Nama Subkon</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->nama_pemborong;?>" id="nama_pemborong" name="nama_pemborong" type="text">
                            <label for="nama_pemborong" class="active">Nama Pemborong</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->no_telp;?>" id="no_telp" name="no_telp" type="text">
                            <label for="no_telp" class="active">No Telp</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->uraian_pekerjaan;?>" id="uraian_pekerjaan" name="uraian_pekerjaan" type="text">
                            <label for="uraian_pekerjaan" class="active">Uraian Pekerjaan</label>
                          </div>
                        </div>                       
                        <div class="row">
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" onclick="return confirm('Apakah data yang di ubah sudah sesuai?')" name="action" style="margin-left:10px;">Submit
                              </button>
                              <button onclick="goBack()" class="btn cyan waves-effect waves-light right" type="submit" name="action">Cancel
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
