<div class="right_col">
  <center>
    <p class="lead">Promo</p>
  </center>
<div class="col-md-6 ">
  <?php
    $i = 1;
    foreach ($data['promo'] as $promo) {
  ?>
        <div class="container secondary mt-5 pt-2 pb-2 rounded shadow-lg promo" style="background-color:white;" id="<?= $promo['id_promo']?>" >
        <div class="row">
          <div class="text-left col-lg-2" style="margin-left:3%;">
            <strong >store</strong>
          </div>
          <div class="text-left col ml-5" > <?= $promo['store']?></div>
        </div>
        <div class="row">
          <div class="text-left col-lg-2" style="margin-left:3%;">
            <strong >description</strong>
          </div>
          <div class="text-left col ml-5"> <?= $promo['description']?></div>
        </div>
        <div class="row">
          <div class="text-left col-lg-2" style="margin-left:3%;">
            <strong >reward</strong>
          </div>
          <div class="text-left col ml-5"> <?= $promo['reward']?></div>
        </div>
        <div class="row">
          <div class="text-left col-lg-2" style="margin-left:3%;">
            <strong >target</strong>
          </div>
          <div class="text-left col ml-5"> <?= $promo['target']?></div>
        </div>
        <div class="row">
          <div class="text-left col-lg-2" style="margin-left:3%;">
            <strong >url</strong>
          </div>
          <div class="text-left col ml-5"> <?= $promo['url']?></div>
        </div>
        <button type="button" class="btn btn-warning ml-3 mt-4 "><a style="color:black;" href="<?= BASEURL;?>/promo/postjoin/<?= $promo['id_promo']?>">join</a></button>
      </div>  
  <?php
      $i++;
    }
  ?>
    
  </div>
</div>
</div>

<?php foreach($data['coba'] as $coba) {?>
<script>
var a = <?= $coba['id_promo'] ?>  ;
var  x = document.getElementsByClassName('promo');
var i;
for(i = 0; i < x.length ; i++){
  if(x[i].getAttribute('id') == a){
    x[i].style.visibility = "hidden";
    x[i].style.position = "absolute";
  }
}

</script>
<?php } ?>