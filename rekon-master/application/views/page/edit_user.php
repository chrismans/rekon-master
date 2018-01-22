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
                            <h5 class="breadcrumbs-title">user</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?=base_url('administrator');?>">Dashboard</a></li>
                                <li><a href="<?php echo site_url('administrator/main/user');?>">user</a></li>
                                <li class="active">Edit user</li>
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
                        <?=form_open('action/edit_user', "class='stdform stdform2'")?>
                        <?php $id = $this->uri->segment(4);
                        $show_item = $this->db->get_where('tbl_user', array("id_user"=>"$id"));
                        foreach ($show_item->result() as $reduce) { ?> 
                        <input type="hidden" value="<?=$reduce->id_user;?>" id="id" name="id">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->userid;?>" id="userid" name="userid" type="text">
                            <label for="userid" class="active">User Name</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->userpass;?>" id="userpass" name="userpass" type="text">
                            <label for="userpass" class="active">Password</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->nama;?>" id="nama" name="nama" type="text">
                            <label for="nama" class="active">Nama</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                          <select name="hak_akses" id="hak_akses">
                            <option value="Administrator">Administrator</option>
                            <option value="Karyawan">Karyawan</option>
                          </select>
                            <label for="hak_akses" class="active">Hak Akses</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                          <select name="status" id="status">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                          </select>
                            <label for="hak_akses" class="active">Status</label>
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
