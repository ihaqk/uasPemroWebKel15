
  <div class="row">
        <div class="col-lg-5">
        <?php Flasher::flash();?>    
        </div>
    </div>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?= BASEURL;?>/home/registrasi" method="POST">
              <div>
                <img src="<?= BASEURL;?>/asset/icon.png" alt="" style="height:50px; " >
              </div>
              <h1 class="mt-3">Signup Form</h1>
              <div style="margin-top:-10px;">
                <input name="username" type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input name="email" type="text" class="form-control" placeholder="email" required="" />
              </div>
              <div>
                <input name="firstname" type="text" class="form-control" placeholder="first name" required="" />
              </div>
              <div>
                <input name="lastname" type="text" class="form-control" placeholder="last name" required="" />
              </div>
              <div>
                <input name="nomor_telepon" type="text" class="form-control" placeholder="phone number" required="" />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="password" required="" />
              </div>
              <div style="margin-top:-30px;">
                <a class="btn btn-default" href="index.html"><button type="submit" class="btn">submit</button></a>
              </div>

              <div class="separator" style="margin-top:-10px;" >
                <p class="change_link">Already a member?
                  <a href="<?= BASEURL;?>/home/" class="to_register"> log in </a>
                </p>
                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
   