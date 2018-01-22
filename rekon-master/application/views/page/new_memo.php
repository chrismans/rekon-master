<section id="content">

        <!--start container-->

        <div id="breadcrumbs-wrapper" style="width:100%;">
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Memo Pembayaran</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator') ?>">Dashboard</a></li>
                                <li><a href="<?=site_url('administrator/main/memo_pembayaran')?>">Memo Pembayaraan</a></li>
                                <li class="active">New Pembayaraan</li>
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
                        <?=form_open('action/save_memo');?>
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
                            <input id="uraian" name="uraian" type="text" placeholder="">
                            <label for="uraian" class="active">Uraian Pekerjaan</label>
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="tanggal" name="tanggal" type="date">
                            <label for="tanggal" class="active">Tanggal</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" name="type_hidden" id="type_hidden">
                            <label for="type" class="active">type</label>
                            <select id="type">
                              <option></option>
                            </select>
                          </div>
                        </div>                       
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" name="nama_kavling_hidden" id="nama_kavling_hidden">
                            <select name="nama_kavling" id="nama_kavling">
                              <option></option>
                            </select>
                            <label for="nama_kavling" class="">Kavling</label>
                          </div>                          
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="unit" name="unit" type="number">
                            <label for="unit" class="">Jumlah Unit Yang Dikerjakaan</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input id="progres" name="progres" type="number">
                            <label for="progres" class="">Progress Pekerjaan Dilapangan</label>
                          </div>
                        </div>

                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light" type="submit" name="action">Submit
                              </button>
                              <button onclick="goBack()" class="btn cyan waves-effect waves-light" type="submit" name="action">Cancel
                              </button>                              
                              <?=form_close();?>
                             <a id="print" href="javascript:;"> <button class="btn cyan waves-effect waves-light" name=""> <font color="white">Print </font> </button></a>
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
 $('#print').on('click',function(e){
  var url = '<?=site_url("action/printout_memo");?>';
  url += '?nama_proyek='+$('#nama_proyek').val();
  url += '&unit='+$('#unit').val();
  url += '&progres='+$('#progres').val();
  url += '&type='+$('#type').val();
  url += '&uraian='+$('#uraian').val();
  url += '&spk='+$('#spk').val();
  url += '&tanggal='+$('#tanggal').val();
  url += '&nama_kavling_hidden='+$('#nama_kavling_hidden').val();
 window.location=url;
   });
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
                $('#uraian').val(dataSpk.uraian);
                // $('#tanggal').val(dataSpk.tgl_spk);
              }
            });
              $.ajax({
              url: "<?php echo site_url('action/typememo') ?>", 
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
  $("#type").on('change', function(){
    var id = $(this).val();
    $.ajax({
      url: '<?php echo site_url("action/kavlingmemo")?>',
      type: 'POST',
      data: {id: id},
      dataType:'json',
      success : function(data){
        console.log(data);
    $("#nama_kavling").on('change', function(){
      $('#nama_kavling_hidden').val($(this).val());})
        $("#nama_kavling").append('<option selected>------</option>');
        for(var index in data){
          $("#nama_kavling").html('<option value='+data[index].nama_kavling+'>'+data[index].nama_kavling+'</option>');
        }
        $("#nama_kavling").material_select();
      }
    })
    });
</script>