<section id="content">

        <!--start container-->

        <div id="breadcrumbs-wrapper" style="width:100%;">
                      <div class="container">
                        <div class="row">
                          <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">New Visual Report</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator') ?>">Dashboard</a></li>
                                <li><a href="<?=site_url('administrator/main/visual')?>">Visual Report</a></li>
                                <li class="active">New Visual Report</li>
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
                        <?=form_open_multipart('action/save_visual');?>
                          <div class="input-field col s12">
                        <div class="file-field input-field">
                      <input class="file-path validate" type="text">
                      <div class="btn">
                        <span>Foto</span>
                        <input name="userfile" id="foto" type="file">
                      </div>
                    </div>
                          </div>
                          <div class="input-field col s12">
                            <label for="nama_proyek" class="active">Nama Proyek</label>
                            <select name="nama_proyek" id="nama_proyek">
                            <?php $query = $this->db->query("SELECT DISTINCT nama_proyek FROM tbl_spk");
                            foreach ($query->result() as $datap) { ?>
                              <option value="<?=$datap->nama_proyek;?>"><?=$datap->nama_proyek;?></option>
                             <?php } ?>
                            </select>
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
                            <select name="suratpk" id="suratpk">
                              <option>
                                
                              </option>
                            </select>
                            <label for="suratpk" class="">Nomor SPK</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="number" name="progres" id="progres">
                            <label for="progres" class="">Progres</label>
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

  
<script>
  $("#nama_proyek").on('change', function(){
    var id = $(this).val();
    $.ajax({
      url: '<?php echo site_url("action/get_kav")?>',
      type: 'POST',
      data: {id: id},
      dataType:'json',
      success : function(data){
        console.log(data);

      $("#nama_kavling").empty();
        $("#nama_kavling").append('<option selected>------</option>');
        for(var index in data){
          $("#nama_kavling").append('<option value='+data[index].nama_kavling+'>'+data[index].nama_kavling+'</option>');
        }
        $("#nama_kavling").material_select();
      }
    })
    .done(function(response) {
      $("#nama_kavling").append('<option>'+response+'</option>')
    });
  });
  // $("#nama_kavling").on('change', function(){
  //   $("#spk").empty();
  //   $("#spk").html('<option>------</option>');
  //   $.ajax({
  //     url: '<?php echo site_url("action/getSpk")?>',
  //     type: 'POST',
  //     data: {nama_kavling: $(this).val()},
  //     dataType:'json',
  //     success : function(data){
  //       console.log(data);
  //       $("#spk").html('<option selected>------</option>')
  //       for(var index in data){
  //       $("#spk").append('<option value='+data[index].spk+'>'+data[index].spk+'</option>');
  //       }
  //       $("#spk").material_select();
  //     }

  //   })
  //   .done(function(response) {
  //     $("#spk").append('<option>'+response+'</option>')
  //   });
    $("#nama_kavling").on('change', function(){
      $.ajax({
        url: '<?php echo site_url("action/spkvisual")?>',
        type: 'POST',
        data: {nama_kavling : $(this).val()},
        dataType : 'json',
        success : function(data){
        $("#suratpk").html('<option selected>------</option>')
        for(var index in data){
          $("#suratpk").append('<option value='+data[index].spk+'>'+data[index].spk+'</option>');
        }
        $("#suratpk").material_select();
        console.log(data);
        }
      })
      
    }) 
  // })

</script>


