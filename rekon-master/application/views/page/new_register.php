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
                            <h5 class="breadcrumbs-title">New Register</h5>
                            <ol class="breadcrumb">
                                <li><a href="index-2.html">Dashboard</a></li>
                                <li><a href="<?=site_url('administrator/main/register')?>">Register</a></li>
                                <li class="active">New Register</li>
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
                        <?=form_open('action/saveRegister');?>
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
                          <div class="input-field col s12">
                            <input type="hidden" name="spk_hidden" id="spk_hidden">
                            <label for="spk" class="active">Pilih Surat Perintah Kerja</label>
                            <select id="spk">
                              <option></option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="nilai_kontrak" type="text" readonly="1" name="nilai_kontrak">
                            <label for="nilai_kontrak" class="active">Nilai Kontrak</label>
                          </div>                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="uraian" type="text" readonly="1" name="uraian">
                            <label for="uraian" class="active">Uraian</label>
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
<script type="text/javascript">
$(document).ready(function() {
    $('#nama_proyek').on('change', function(){
    var dataProyek = $(this).val();
    $('#spk').empty();
      $.ajax({
        url: "<?php echo site_url('action/token') ?>",
        type: "POST",
        data: {proyek: dataProyek},
        success: function(notice){
          var htmlSpk = '';
          notice.map(function(obj) {
            var data = '<option value="{0}">{0}</option>';
            htmlSpk += data.format([obj.spk]);
          });

          $('#spk').html(htmlSpk);
          $("#spk").material_select();

          $('#spk').on('change', function(e) {
            var value = $(this).val();
            $('#spk_hidden').val(value);

            $.ajax({
              url: "<?php echo site_url('action/datar') ?>", 
              type: "POST", 
              data: {proyek: dataProyek, spk: value},
              success: function(dataSpk) {
                $('#nilai_kontrak').val(dataSpk.nilai_kontrak);
                $('#uraian').val(dataSpk.uraian);
              }
            });
          });
        }
      })
  })
})
</script>
