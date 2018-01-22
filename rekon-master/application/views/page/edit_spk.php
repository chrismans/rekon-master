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
                            <h5 class="breadcrumbs-title">SPK</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?=base_url('administrator');?>">Dashboard</a></li>
                                <li><a href="<?php echo site_url('administrator/main/spk');?>">SPK</a></li>
                                <li class="active">Edit SPK</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>          

        <div class="col s12 m12 l6">
                  <div class="card-panel">
                    <h4 class="header2">Edit SPK</h4>
                    <div class="row">
                        <div class="row">
                        <?=form_open('action/edit_spk', "class='stdform stdform2'")?>
                        <?php $id = $this->uri->segment(4);
                        $show_item = $this->db->get_where('tbl_spk', array("id_spk"=>"$id"));
                        foreach ($show_item->result() as $reduce) { ?>
                        <input type="hidden" value="<?=$reduce->id_spk;?>" id="id" name="id">
                          <div class="input-field col s12">
                            <label for="nama_proyek" class="active">Nama Proyek</label>
                            <select name="nama_proyek" id="nama_proyek" value="<?=$reduce->nama_proyek;?>">
                            <?php $query = $this->db->get_where('tbl_proyek');
                            foreach ($query->result() as $datap) { ?>
                              <option value="<?=$datap->nama_proyek;?>"><?=$datap->nama_proyek;?></option>
                             <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->tgl_spk;?>" type="date" class="datepicker picker__input" readonly="" id="tgl_spk" name="tgl_spk" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P1879109591_root">
                            <label for="tgl_spk" class="active">Tanggal Surat Perintah Kerja</label>
                          </div>
                        </div>                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->spk;?>" id="spk" name="spk" type="text">
                            <label for="spk" class="active">SPK</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->nilai_kontrak;?>" id="nilai_kontrak" name="nilai_kontrak" type="text">
                            <label for="nilai_kontrak" class="active">Nilai Kontrak</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input value="<?=$reduce->uraian;?>" id="uraian" name="uraian" type="text">
                            <label for="uraian" class="active">Uraian</label>
                          </div>
                        </div>
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" onclick="return confirm('Apakah data yang di ubah sudah sesuai?')" type="submit" name="action" style="margin-left:10px;">Submit
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
