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
                            <h5 class="breadcrumbs-title">Proyek</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?=base_url('administrator');?>">Dashboard</a></li>
                                <li><a href="<?php echo site_url('administrator/main/proyek');?>">Proyek</a></li>
                                <li class="active">Edit Proyek</li>
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
                        <?=form_open('action/save_edit', "class='stdform stdform2'")?>
                        <?php $id = $this->uri->segment(4);
                        $show_item = $this->db->get_where('tbl_proyek', array("id_proyek"=>"$id"));
                        foreach ($show_item->result() as $reduce) { ?> 
                        <input type="hidden" value="<?=$reduce->id_proyek;?>" id="id" name="id">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->nama_proyek;?>" id="nama_proyek" name="nama_proyek" type="text">
                            <label for="nama_proyek" class="active">Nama Proyek</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->nama_owner;?>" id="nama_owner" name="nama_owner" type="text">
                            <label for="nama_owner" class="active">Nama Owner</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->alamat;?>" id="alamat" name="alamat" type="text">
                            <label for="alamat" class="active">Alamat</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->email;?>" id="email" name="email" type="text">
                            <label for="email" class="active">Email Owner</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->telp;?>" id="telp" name="telp" type="text">
                            <label for="telp" class="active">Telepon</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->pic;?>" id="pic" name="pic" type="text">
                            <label for="pic" class="active">PIC</label>
                          </div>
                        </div>                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->hp;?>" id="hp" name="hp" type="text">
                            <label for="hp" class="active">HandPhone</label>
                          </div>
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
