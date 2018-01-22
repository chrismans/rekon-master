;<section id="content">

        <!--start container-->

        <div id="breadcrumbs-wrapper" class="" style="width:100%;">
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">New Finance</h5>
                            <ol class="breadcrumb">
                                <li><a href="index-2.html">Dashboard</a></li>
                                <li><a href="<?=site_url('administrator/main/finance')?>">Finance</a></li>
                                <li class="active">New Finance</li>
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
                        <?=form_open('');?>
                          <div class="input-field col s12">
                            <input type="hidden" name="spk_hidden" id="spk_hidden">
                            <label for="spk" class="active">Surat Perintah Kerja</label>
                            <select id="spk" name="spk">
                            <?php $query = $this->db->query("SELECT DISTINCT spk FROM tbl_spk");
                            foreach ($query->result() as $datap) { ?>
                              <option value="<?=$datap->spk;?>"><?=$datap->spk;?></option>
                             <?php } ?>
                            </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="nilai_kontrak" type="text" name="nilai_kontrak">
                            <label for="nilai_kontrak" class="active">Nilai Kontrak</label>
                          </div>    
                          </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="progres" type="text" name="progres">
                            <label for="progres" class="active">Progres</label>
                          </div>    
                          </div>                    
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="Tgl_tagih" type="text" name="Tgl_tagih">
                            <label for="Tgl_tagih" class="active">Tanggal Penagihan</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="jumlah_tagih" type="text" name="jumlah_tagih">
                            <label for="jumlah_tagih" class="active">Nilai Tagihan</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="Tglbayar" type="text" name="Tglbayar">
                            <label for="Tglbayar" class="active">Tanggal Bayar</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="nilai_byr" type="text" name="nilai_byr">
                            <label for="nilai_byr" class="active">Nilai Pembayaran</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="kurang_tgh" type="text" name="kurang_tgh">
                            <label for="kurang_tgh" class="active">Kurang Tagih</label>
                          </div>
                        </div>                                                                                                                                           
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light" type="submit" name="action">Submit
                              </button>
                              <button onclick="goBack()" class="btn cyan waves-effect waves-light" type="submit" name="action">Cancel
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
<script>
    $("#spk").on('change', function(){
      $('#spk_hidden').val($(this).val());
      $.ajax({
        url: '<?php echo site_url("action/gtfn")?>',
        type: 'POST',
        data: {spk : $(this).val()},
        dataType : 'json',
        success : function(data){
        $("#nilai_kontrak").val(data.nilai_kontrak)
        console.log(data);
        }
      })
      
    })
</script>

