<div class="row">
  <div class="col-lg-5">
    <?php Flasher::flash(); ?>
  </div>
</div>
<div>
  <a class="hiddenanchor" id="signup"></a>
  <a class="hiddenanchor" id="signin"></a>

  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form action="<?= BASEURL; ?>/home/masuk" method="POST">
          <div>
            <img src="<?= BASEURL; ?>/asset/icon.png" alt="" style="height:50px; ">
          </div>
          <h1 class="mt-3">Login Form</h1>
          <div>
            <input name="email-username" type="text" class="form-control" placeholder="Username" required="" />
          </div>
          <div>
            <input name="password" type="password" class="form-control" placeholder="Password" required="" />
          </div>
          <div>
            <a class="btn btn-default" href="index.html"><button type="submit" class="btn">Log in</button></a>
            <a class="btn btn-default" href="#"><button class="btn">Lost your password?</button> </a>
          </div>

          <div class="clearfix"></div>

          <div class="separator">
            <p class="change_link">New to site?
              <a href="<?= BASEURL; ?>/home/register" class="to_register"> Create Account </a>
            </p>

            <div class="clearfix"></div>
            <br />


          </div>
        </form>
      </section>
    </div>
  </div>
</div>