<section id="content">

        <!--start container-->

        <div id="breadcrumbs-wrapper" style="width:100%;">
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">New Proyek</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator') ?>">Dashboard</a></li>
                                <li><a href="<?=site_url('administrator/main/proyek')?>">Proyek</a></li>
                                <li class="active">New Proyek</li>
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
                        <?=form_open('action/saveProyek');?>
                          <div class="input-field col s12">
                            <input id="nama_proyek" name="nama_proyek" type="text">
                            <label for="nama_proyek" class="">Nama Proyek</label>
                          </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="nama_owner" name="nama_owner" type="text">
                            <label for="nama_owner" class="">Nama Owner</label>
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="alamat" name="alamat" type="text">
                            <label for="alamat" class="">Alamat</label>
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="email" name="email" type="text">
                            <label for="email" class="">Email Owner</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="telp" name="telp" type="text">
                            <label for="telp" class="">Telepon</label>
                          </div>
                        </div>                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="pic" name="pic" type="text">
                            <label for="pic" class="">PIC</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="hp" name="hp" type="text">
                            <label for="hp" class="">HandPhone</label>
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
