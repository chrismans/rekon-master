
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
                            <h5 class="breadcrumbs-title">New Progres perunit</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo site_url('administrator'); ?>">Dashboard</a></li>
                                <li><a href="<?php echo site_url('administrator/main/progres_unit');?>">Progres perUnit</a></li>
                                <li class="active">New Progres perUnit</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>          

        <div class="col s12 m12 l6">
                  <div class="card-panel">
                <div class="col s12 m12 l6"  style="width:100%;">
                  <div class="card-panel" style="width:100%;">                  
                    <h4 class="header2">New Progres perUnit</h4>
                    <div class="row">
                        <div class="row">
                     <?=form_open('action/save_progresunit');?>
                          <div class="input-field col s12">
                            <label for="spk" class="active">SPK</label>
                            <select name="spk" id="spk">
                            <?php $query = $this->db->query("SELECT DISTINCT spk FROM tbl_resume");
                            foreach ($query->result() as $datap) { ?>
                              <option value="<?=$datap->spk;?>"><?=$datap->spk;?></option>
                             <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" name="nama_kavling_hidden" id="nama_kavling_hidden">
                            <label for="nama_kavling" class="active">Kavling</label>
                            <select id="nama_kavling" name="nama_kavling">
                              <option></option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="sdmingguini" type="text" name="sdmingguini">
                            <label for="sdmingguini" class="active">Progres</label>
                          </div>
                        </div>
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
                </form>
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
    $("#nama_kavling").empty();
    $.ajax({
      url: '<?php echo site_url("action/get_rsm")?>',
      type: 'POST',
      data: {spk: $(this).val()},
      dataType:'json',
      success : function(data){
        console.log(data);
        for(var index in data){
        $("#nama_kavling").append('<option value='+data[index].nama_kavling+'>'+data[index].nama_kavling+'</option>');
        }
        $("#nama_kavling").material_select();
      }

    })
    .done(function(response) {
      $("#nama_kavling").append('<option>'+response+'</option>')
    });
    $("#nama_kavling").on('change', function(){
      $('#nama_kavling_hidden').val($(this).val());
      $.ajax({
        url: '<?php echo site_url("action/getdata")?>',
        type: 'POST',
        data: {nama_kavling : $(this).val()},
        dataType : 'json',
        success : function(data){
        $("#sdmingguini").val(data.sdmingguini)
        console.log(data);
        }
      })
      
    })
  })
$("#nama_kavling").on('change', function(){
      $('#nama_kavling_hidden').val($(this).val());
      $.ajax({
        url: '<?php echo site_url("action/getdata")?>',
        type: 'POST',
        data: {nama_kavling : $(this).val()},
        dataType : 'json',
        success : function(data){
        $("#sdmingguini").val(data.sdmingguini)
        console.log(data);
        }
      })
      
    })
</script>
