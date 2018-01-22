<section id="content"> 

        <!--start container-->

        <div id="breadcrumbs-wrapper" class=" grey lighten-3" style="width:100%;">
                        <div class="header-search-wrapper grey hide-on-large-only">
                            <i class="mdi-action-search active"></i>
                            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                        </div>
                      <div class="container">
                        <div class="row">
                        </div>
                      </div>
                    </div>          

              <div class="row">
                <div class="col s12 m12 l6"  style="width:100%;">
                  <div class="card-panel" style="width:100%;">
                    <div class="row">
                        <div class="row">
                        <?=form_open('action/save_ipl');?>
                          <div class="input-field col s12">
                            <label for="nama_proyek" class="active">Pilih Nama Proyek</label>
                            <select name="nama_proyek" id="nama_proyek">
                            <?php $query = $this->db->query("SELECT DISTINCT nama_proyek FROM tbl_spk");
                            foreach ($query->result() as $datap) { ?>
                              <option value="<?=$datap->nama_proyek;?>"><?=$datap->nama_proyek;?></option>
                             <?php } ?>
                            </select>
                          </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="text" name="pic" id="pic">
                            <label for="nama_pic" class="active">Nama pic</label>
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
                            <input type="hidden" name="type_hidden" id="type_hidden">
                            <label for="type" class="active">type</label>
                            <select id="type">
                              <option></option>
                            </select>
                          </div>
                        </div>
                         <div class="row">
                        <div class="input-field col s12">  
                            <label for="nama_subkon" class="active">Pilih Nama Subkon</label>
                            <select name="nama_subkon" id="nama_subkon">
                            <?php $query = $this->db->query("SELECT DISTINCT nama_subkon FROM tbl_subkon");
                            foreach ($query->result() as $datap) { ?>
                              <option value="<?=$datap->nama_subkon;?>"><?=$datap->nama_subkon;?></option>
                             <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" name="pemborong_hidden" id="pemborong_hidden">
                            <label for="nama_pemborong" class="active">Nama Pemborong</label>
                            <select id="nama_pemborong">
                              <option></option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                             Uraian Pekerjaan
                          <br>
                            <div class="input-field col s12 m12 l12  login-text" id="jenis_pekerjaan"></div>
                          </div>
                        </div>
                        <br>                       
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
     var _nk = [];
          $('#print').on('click',function(e){
         var url = '<?=site_url("action/printout_ipl");?>';
         url += '?nama_proyek='+$('#nama_proyek').val();
         url += '&spk='+$('#spk_hidden').val();
 	      url += '&nama_subkon='+$('#nama_subkon').val();
          url += '&nama_pemborong='+$('#nama_pemborong').val();
 	        url += '&type='+$('#type_hidden').val();
         url += '&jenis_pekerjaan='+$('#jenis_pekerjaan').val();
         url += '&pic='+$('#pic').val();
         _nk.map(function(i,v) {
          if($('#'+i)[0].checked) {
            url += '&jenis_pekerjaan[]='+i;
          }
         });
         window.location=url;
     });
     $('#nama_proyek').on('change', function(){
     var dataProyek = $(this).val();
     $('#spk').empty();
       $.ajax({
         url: "<?php echo site_url('action/token') ?>",
         type: "POST",
         data: {proyek: dataProyek},
         success: function(notice){
          $('#pic').val(notice[0].pic);
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

             $.ajax({
               url: "<?php echo site_url('action/getkavling') ?>", 
               type: "POST", 
               data: {proyek: dataProyek, spk: value},
               success: function(dataSpk) {

                 var htmlsubkon = '';
                  var htmlpemborong = '';
                  var subkon =[];
                 var pemborong = [];
                 $('#jenis_pekerjaan').html('');
                 _nk = [];
                 console.log(dataSpk);
                 dataSpk.map(function(data_spk) {
                   if (_nk.indexOf(data_spk.nama_kavling)==-1) {
                         var html = '<input type="checkbox" id="'+data_spk.nama_kavling+'" name="jenis_pekerjaan[]" value="'+data_spk.nama_kavling+'"> <label for="'+data_spk.nama_kavling+'">'+data_spk.nama_kavling.toUpperCase()+'</label> ';
                         _nk.push(data_spk.nama_kavling);
                         $('#jenis_pekerjaan').append(html);
                   };   

                 });
                  $('#nama_pemborong').on('change', function(e) {
                  var value = $(this).val();
                  $('#pemborong_hidden').val(value);

                });
               }
             });
           });
         }
       })
   })
 })
 </script>
<script type="text/javascript">
      $("#nama_subkon").on('change', function(){
     var id = $(this).val();
     $.ajax({
       url: '<?php echo site_url("action/get_borong")?>',
       type: 'POST',
       data: {id: id},
       dataType:'json',
       success : function(data){
         console.log(data);

       $("#nama_pemborong").empty();
         $("#nama_pemborong").append('<option selected>------</option>');
         for(var index in data){
           $("#nama_pemborong").append('<option value='+data[index].nama_pemborong+'>'+data[index].nama_pemborong+'</option>');
         }
         $("#nama_pemborong").material_select();
       }
     })
     .done(function(response) {
      $("#nama_pemborong").append('<option>'+response+'</option>')
    });
  });
</script>