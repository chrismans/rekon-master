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
                            <h5 class="breadcrumbs-title">New SPK</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator') ?>">Dashboard</a></li>
                                <li><a href="<?=site_url('administrator/main/spk')?>">SPK</a></li>
                                <li class="active">New SPK</li>
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
                        <?=form_open('action/saveSPK');?>
                          <div class="input-field col s12">
                            <label for="nama_proyek" class="active">Pilih Nama Proyek</label>
                            <select name="nama_proyek" id="nama_proyek">
                            <?php $query = $this->db->get('tbl_proyek');
                            foreach ($query->result() as $datap) { ?>
                              <option value="<?=$datap->nama_proyek;?>"><?=$datap->nama_proyek;?></option>
                             <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                        <div class="input-field col s12" style="width:20%;">
                            <input id="tgl_spk" name="tgl_spk" type="date">
                            <label for="tgl_spk" class="active">Tanggal Surat Perintah Kerja</label>
                          </div>
                        </div>           
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="spk" name="spk" type="text">
                            <label for="spk" class="">Surat Perintah Kerja</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="uraian" name="uraian" type="text">
                            <label for="uraian" class="">Uraian</label>
                          </div>
                        </div>                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="nilai_kontrak" name="nilai_kontrak" type="text">
                            <label for="nilai_kontrak" class="">Nilai Kontrak</label>
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
