<section id="content">

        <!--start container-->

        <div id="breadcrumbs-wrapper" style="width:100%;">
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Data Mandor</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator') ?>">Dashboard</a></li>
                                <li><a href="<?=site_url('administrator/main/proyek')?>">Data Mandor</a></li>
                                <li class="active">New Data Mandor</li>
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
                        <?=form_open('action/saveSubkon');?>
                           <div class="input-field col s12">
                            <label for="nama_proyek" class="active">Pilih Nama Proyek</label>
                            <select name="nama_proyek" id="nama_proyek">
                            <?php $query = $this->db->get('tbl_proyek');
                            foreach ($query->result() as $datap) { ?>
                              <option value="<?=$datap->nama_proyek;?>"><?=$datap->nama_proyek;?></option>
                             <?php } ?>
                            </select>
                          </div>
                          <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" name="spk_hidden" id="spk_hidden">
                            <label for="spk" class="active">Surat Perintah Kerja</label>                            
                            <select id="spk">
                              <option></option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="nama_subkon" name="nama_subkon" type="text">
                            <label for="nama_subkon" class="">Nama Subkon</label>
                          </div>                          
                        </div>
                         <div class="input-field col s12">
                            <input id="nama_pemborong" name="nama_pemborong" type="text">
                            <label for="nama_pemborong" class="">Nama Pemborong</label>
                          </div>                          
                        </div>
                        <div class="input-field col s12">
                            <input id="no_telp" name="no_telp" type="text">
                            <label for="no_telp" class="">No Telp</label>
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="uraian_pekerjaan" name="uraian_pekerjaan" type="text">
                            <label for="uraian_pekerjaan" class="">Uraian Pekerjaan</label>
                          </div>                          
                        </div>
<!--                         <div class="row">
                          <div class="input-field col s12">
                          <input type="hidden" name="type_hidden" id="type_hidden">
                           <select class="type"  id="type">
                             <option></option>
                           </select>
                            <label for="type">Type</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="satuan" name="satuan" type="text">
                            <label for="satuan" class="">Satuan</label>
                          </div>
                        </div>                        
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="harga" name="harga" type="text">
                            <label for="harga" class="">Harga</label>
                          </div>
                        </div>
 -->                      
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
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
              url: "<?php echo site_url('action/ambildata') ?>", 
              type: "POST", 
              data: {proyek: dataProyek, spk: value},
              success: function(dataSpk) {
                var htmlSpk = '';
                dataSpk.map(function(obj) {
                  var data = '<option value="{0}">{0}</option>';
                  htmlSpk += data.format([obj.type]);
                });
                console.log(htmlSpk);
                $('#type').html(htmlSpk);
                $("#type").material_select();
                $('#type').on('change', function(e) {
                var value = $(this).val();
                $('#type_hidden').val(value);

              });
              }
            });
          });
        }
      })
  })
})
</script>                