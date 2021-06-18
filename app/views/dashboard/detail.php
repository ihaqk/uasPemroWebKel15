<div class="right_col">
<div class="col-md-6">
  <p class="lead">Detail Promo</p>
    <div class="container secondary mt-2 pt-2 pb-2 rounded shadow-lg" style="background-color:white;">
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >begin</strong>
        </div>
        <div class="text-left col ml-5" > <?= $data['promo']['begin']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >store/product</strong>
        </div>
        <div class="text-left col ml-5"> <?= $data['promo']['store']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >description</strong>
        </div>
        <div class="text-left col ml-5"> <?= $data['promo']['description']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >bounty</strong>
        </div>
        <div class="text-left col ml-5"> <?= $data['promo']['bounty']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >target</strong>
        </div>
        <div class="text-left col ml-5"> <?= $data['promo']['target']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >hit</strong>
        </div>
        <div class="text-left col ml-5"> <?= $data['promo']['hit']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >reward</strong>
        </div>
        <div class="text-left col ml-5"> <?= $data['promo']['reward']?></div>
      </div>
      <div class="row">
        <div class="text-left col-lg-2" style="margin-left:3%;">
          <strong >url</strong>
        </div>
        <div class="text-left col ml-5">
        <input type="text" id="myInput" value="<?= $data['promo']['url'] ?>">
          <button type="button"  onclick="copyUrl()" class="btn mt-1 btn-warning btn-sm">
            copy
          </button>
        </div>
      </div>
    <button type="button" class="btn btn-info ml-3 mt-4"  data-toggle="modal" data-target="#exampleModal" >edit</button>
    <button type="button" class="btn btn-danger mt-4"><a style="color:white;" href="<?= BASEURL;?>/dashboard/deletepromo/<?= $data['promo']['id_promo']?>">delete</a> </button>
    <button type="button" class="btn btn-dark mt-4"> <a style="color:white;" href="<?= BASEURL;?>/dashboard/mypromo">back</a> </button>
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">edit data promo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form class="" action="<?= BASEURL; ?>/dashboard/updatepromo" method="post" >
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <textarea class="resizable_textarea form-control" name="description" ><?= $data['promo']['description']?></textarea></div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">bounty<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input value="<?= $data['promo']['bounty']?>" class="form-control" class='optional' name="bounty" data-validate-length-range="5,15"
                          type="text" />
                        <input type="hidden" value="<?= $data['promo']['id_promo']?>" class="form-control" class='optional' name="id_promo" data-validate-length-range="5,15"
                          type="text" />
                      </div>
                        
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">target<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input value="<?= $data['promo']['target']?>" class="form-control" name="target" class='email' required="required" type="text" /></div>
                    </div>  
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">reward<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input value="<?= $data['promo']['reward']?>" class="form-control" name="reward" class='email' required="required" type="text" /></div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">store/product<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input value="<?= $data['promo']['store']?>" class="form-control" name="store" class='email' required="required" type="text" /></div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">link usaha<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input value="<?= $data['promo']['url']?>" class="form-control" data-validate-length-range="6" data-validate-words="2" name="url"
                          placeholder="https://" required="required" />
                      </div>
                    </div>
                    
                    <div class="ln_solid">
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                          <button type="submit" class="btn btn-primary">save</button>
                        </div>
                      </div>
                    </div>
          </form>
        </div>
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
