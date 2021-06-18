<div class="right_col">
<center>
    <p class="lead">Followed</p>
  </center>
<div class="col-md-6 ">
  <?php
    $i = 1;
    foreach ($data['promo'] as $promo) {?>
    
    <div class="container secondary mt-2 pt-2 pb-2 rounded shadow-lg" style="background-color:white;">
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >begin</strong>
        </div>
        <div class="text-left col ml-5" > <?= $promo['begin']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >store/product</strong>
        </div>
        <div class="text-left col ml-5"> <?= $promo['store']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >description</strong>
        </div>
        <div class="text-left col ml-5"> <?= $promo['description']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >bounty</strong>
        </div>
        <div class="text-left col ml-5"> <?= $promo['bounty']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >target</strong>
        </div>
        <div class="text-left col ml-5"> <?= $promo['target']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >hit</strong>
        </div>
        <div class="text-left col ml-5"> <?= $promo['hit']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >reward</strong>
        </div>
        <div class="text-left col ml-5"> <?= $promo['reward']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >url</strong>
        </div>
        <div class="text-left col ml-5">
        <input type="text" id="myInput" value="<?= $promo['url'] ?>">
          <button type="button"  onclick="copyUrl()" class="btn mt-1 btn-warning btn-sm">
            copy
          </button>
          <button type="button" class="btn mt-1 btn-info btn-sm">
            <a style="color:white;" href="<?= $promo['url']?>">view store</a> 
          </button>
        </div>
      </div>
    
    </div>

  <?php
      $i++;
    }
  ?>
    
   
  </div>
</div>
</div>

<script>
function copyUrl() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>