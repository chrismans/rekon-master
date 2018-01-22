      <script type="text/javascript">

        function startCalculate(){
        interval=setInterval("Calculate()",10);

    }
          function Calculate(){
            var a=document.form1.type.value;
            var e=document.form1.harga_satuan.value;
            var b=document.form1.minggulalu.value;
            var c=document.form1.mingguini.value;
            var d=document.form1.sdmingguini.value;
            var tag1=document.form1.tagihanlalu.value=(((a*b)-(a*b*5/100))/100);
            var tag2=document.form1.tagihanini.value=(((a*c)-(a*c*5/100))/100);
            var tag3=document.form1.retensi.value=(a*d*0.05)/50;
            var tag4=document.form1.jumborong.value=(a*e);
            document.form1.tagihansisa.value=(a-tag1-tag2-tag3);
    }
    function stopCalc() 
    {
        clearInterval(interval);
    }

      </script>
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
                            <h5 class="breadcrumbs-title">New Resume</h5>
                            <ol class="breadcrumb">
                                <li><a href="index-2.html">Dashboard</a></li>
                                <li><a href="">Resume</a></li>
                                <li class="active">New Resume</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>          

        <div class="col s12 m12 l6">
                  <div class="card-panel">
                <div class="col s12 m12 l6"  style="width:100%;">
                  <div class="card-panel" style="width:100%;">                  
                    <h4 class="header2">New Resume</h4>
                    <div class="row">
                        <div class="row">
                     <form id="form1" name="form1" method="post" action="<?php echo site_url('action/saveresume');?>" > 
                          <div class="input-field col s12">
                            <label for="nama_pemborong" class="active">Mandor</label>
                            <select name="nama_pemborong" id="nama_pemborong">
                            <?php $query = $this->db->get('tbl_ipl');
                            foreach ($query->result() as $datap) { ?>
                              <option value="<?=$datap->nama_pemborong;?>"><?=$datap->nama_pemborong;?></option>
                             <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" name="spk_hidden" id="spk_hidden">
                            <label for="spk" class="active">Surat Perintah Kerja</label>
                             <select name="spk" id="spk">
                             <option></option>
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
                            <input placeholder="" id="type" readonly="1" type="text" name="type" onfocus="startCalculate()" onblur="stopCalc()">
                            <label for="type" class="active">Type/Ukuran</label>
                          </div>
                        </div>                                                                                                                                          
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="satuan" readonly="1" type="text" name="satuan">
                            <label for="satuan" class="active">Satuan</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="harga_satuan" readonly="1" type="text" name="harga_satuan" onfocus="startCalculate()" onblur="stopCalc()">
                            <label for="harga_satuan" class="active">Harga Satuan</label>
                          </div>
                        </div>  
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="jumborong" type="text"  readonly="1" name="jumborong" onfocus="startCalculate()" onblur="stopCalc()">
                            <label for="jumborong" class="active">Jumlah Borongan</label>
                          </div>
                        </div>                                                
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="minggulalu" type="text" name="minggulalu" onfocus="startCalculate()" onblur="stopCalc()">
                            <label for="minggulalu" class="active">S/D Minggu Lalu</label>
                          </div>
                        </div>                                                
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="mingguini" type="text" name="mingguini" onfocus="startCalculate()" onblur="stopCalc()">
                            <label for="mingguini" class="active">Minggu Ini</label>
                          </div>
                        </div>                                                
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="sdmingguini" type="text" readonly="1" name="sdmingguini">
                            <label for="sdmingguini" class="active">S/D Minggu Ini</label>
                          </div>
                        </div>                                                
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="sisa" type="text" readonly="1" name="sisa">
                            <label for="sisa" class="active">Sisa</label>
                          </div>
                        </div>                                                
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="tagihanlalu" type="text" name="tagihanlalu" onfocus="startCalculate()" onblur="stopCalc()">
                            <label for="tagihanlalu" class="active">Tagihan Minggu Lalu</label>
                          </div>
                        </div>                                                
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="tagihanini" type="text" name="tagihanini" onfocus="startCalculate()" onblur="stopCalc()">
                            <label for="tagihanini" class="active">Tagihan Minggu Ini</label>
                          </div>
                        </div>                                                
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="tagihansisa" type="text" readonly="1" name="tagihansisa">
                            <label for="tagihansisa" class="active">Sisa Tagihan</label>
                          </div>
                        </div>                                                
                        <div class="row">
                          <div class="input-field col s12">
                            <input placeholder="" id="retensi" type="text" readonly="1" name="retensi">
                            <label for="retensi" class="active">Retensi</label>
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
  var mingguLalu = $("#minggulalu");
  var mingguIni = $("#mingguini");
  var spMingguIni = $("#sdmingguini");

  $("#nama_pemborong").on('change', function(){
    var id = $(this).val();
    $.ajax({
      url: '<?php echo site_url("action/getspk")?>',
      type: 'POST',
      data: {id: id},
      dataType:'json',
      success : function(data){
        console.log(data);

      $("#spk").empty();
        $("#spk").html('<option>------</option>')
        for(var index in data){
        $("#spk").append('<option value='+data[index].spk+'>'+data[index].spk+'</option>');
        }
        $("#spk").material_select();
      }
    })

  });
  $("#spk").on('change', function(){
    $('#spk_hidden').val($(this).val());
    $("#nama_kavling").empty();
    $("#nama_kavling").html('<option>------</option>');
    $.ajax({
      url: '<?php echo site_url("action/getkavling")?>',
      type: 'POST',
      data: {spk: $(this).val()},
      dataType:'json',
      success : function(data){
        console.log(data);
        $("#nama_kavling").html('<option selected>------</option>')
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
        url: '<?php echo site_url("action/getdata90")?>',
        type: 'POST',
        data: {nama_kavling : $(this).val()},
        dataType : 'json',
        success : function(data){
        $("#type").val(data.type)
        $("#harga_satuan").val(data.harga_satuan)
        $("#satuan").val(data.satuan)
        console.log(data);
        }
      })
      
    })
  })

  var itungMingguIni = function(){
    spMingguIni.val( parseFloat(mingguIni.val()) + parseFloat(mingguLalu.val() ))
    // var tagihanLalu = parseFloat($("#jumborong").val()) * parseFloat(mingguLalu.val()) - ( parseFloat($("#jumborong").val()) * parseFloat(mingguLalu.val()) * 5/100 )

    // $("#tagihanlalu").val()

    if(spMingguIni.val() > 100){
      spMingguIni.css('border-color', 'red')
    }else{
      spMingguIni.css('border-color', '')
    }
    Math.round($("#sisa").val(100 - spMingguIni.val()), 2);
  }
  mingguIni.on('keyup', function(){
    itungMingguIni.apply()
  })
  mingguLalu.on('keyup', function(){
    itungMingguIni.apply()
  })
</script>
