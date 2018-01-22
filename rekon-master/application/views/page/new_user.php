<section id="content">

        <!--start container-->

        <div id="breadcrumbs-wrapper" style="width:100%;">
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">New User</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator') ?>">Dashboard</a></li>
                                <li><a href="<?=site_url('administrator/main/user')?>">User</a></li>
                                <li class="active">New User</li>
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
                        <?=form_open('action/saveuser');?>
                          <div class="input-field col s12">
                            <input id="username" name="username" type="text">
                            <label for="username" class="">Username</label>
                          </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="password" name="password" type="text">
                            <label for="password" class="">Password</label>
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="nama" name="nama" type="text">
                            <label for="nama" class="">Nama</label>
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <select name="hak_akses">
                            	<option>Administrator</option>
                              <option>Pegawai Lapangan</option>
                            	<option>Pegawai Kantor</option>
                            </select>
                            <label for="hak_akses" class="">Hak Akses</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <select name="status">
                            	<option>Aktif</option>
                            	<option>Tidak Aktif</option>
                            </select>
                            <label for="status" class="">Status</label>
                          </div>
                        </div>                        
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action" style="margin-left:10px;">Submit
                              </button>
                              <button onclick="goBack()" class="btn cyan waves-effect waves-light right" type="submit" name="action">Cancel
                              </button>
                              <?=form_close();?>
                            </div>
                          </div>
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
