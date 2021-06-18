
<div class="right_col" role="main">
  <button type="button" class="fa fa-plus-square btn btn-primary btn-lg mt-3" style="margin-left:89%;  " data-toggle="modal" data-target="#exampleModal">
   create promo
  </button>
  <div class="row">
        <div class="col-lg-5">
        <?php Flasher::flash();?>    
        </div>
    </div>
    <?php if (!$data['promos']) {?>
      <center>
        <div><h2>Data kosong</h2></div>
      </center>
    <?php } else { ?>
  <div class="table-responsive mt-2">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">No</th>
                            <th class="column-title">Store/Product </th>
                            <th class="column-title">Bounty </th>
                            <th class="column-title">Target</th>
                            <th class="column-title">reward </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;

                        foreach ($data['promos'] as $promo ) {?>
                          
                          <tr class="even pointer">
                            <td class="a-center ">
                              <?= $i;?>
                            </td>
                            <td class=" "><?= $promo['store']?></td>
                            <td class=" "><?= $promo['bounty']?></td>
                            <td class=" "><?= $promo['target']?><i class="success "></i></td>
                            <td class=" "><?= $promo['reward']?></td>
                            <td class=" "><a href="<?=BASEURL;?>/dashboard/detail/<?= $promo['id_promo']?>">Detail</a>
                            </td>
                          </tr>
                          <?php $i++;?>

                    <?php    }   ?>
                        
                        </tbody>
                      </table>
                    </div>
    <?php } ?>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form class="" action="<?= BASEURL; ?>/dashboard/createPromo" method="post" novalidate>
                    <input type="hidden" name="tanggal" value="<?php echo date("yyy-MM-dd"); ?>">
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <textarea class="resizable_textarea form-control" name="description"  ></textarea></div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">bounty<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" class='optional' name="bounty" data-validate-length-range="5,15"
                          type="text" /></div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">target<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="target" class='email' required="required" type="text" /></div>
                    </div>  
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">reward<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="reward" class='email' required="required" type="text" /></div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">store/product<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="store" class='email' required="required" type="text" /></div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">link usaha<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="url"
                          placeholder="https://" required="required" />
                      </div>
                    </div>
                    
                    <div class="ln_solid">
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                    <button type='submit' class="btn btn-primary">Submit</button>
                    <button type='reset' class="btn btn-success">Reset</button>
                        </div>
                      </div>
                    </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>