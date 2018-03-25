

    <div class="login">
      <div class="login-body">
        <a class="login-brand" href="index-2.html">
          <img class="img-responsive" src="<?php echo base_url(); ?>assets/img/logo.svg" alt="Elephant">
        </a>
        <h3 class="login-heading">Sign in</h3>
        <div class="login-form">
          <form data-toggle="validator" action="authentication/login" method="post">
            <div class="form-group">
              <label for="username" class="control-label"><?= $uname; ?></label>
              <input id="username" class="form-control" type="text" name="username" spellcheck="false" autocomplete="off" data-msg-required="Please enter your username." required>
            </div>
            <div class="form-group">
              <label for="password" class="control-label"><?= $pname; ?></label>
              <input id="password" class="form-control" type="password" name="password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Sign in</button>
            </div>
            <div class="form-group">
              <ul class="list-inline">
                <li>
                  <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="checkbox">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">Keep me signed in</span>
                  </label>
                </li>
              </ul>
              <ul class="list-inline">
                <li><a href="password-1.html">Forgot username?</a></li>
                <li>
                  <span aria-hidden="true"> · </span>
                </li>
                <li><a href="password-1.html">Forgot password?</a></li>
              </ul>
            </div>
          </form>
        </div>
      </div>
      <div class="login-footer">
        <ul class="list-inline">
          <li><a class="link-muted" href="signup-1.html">Sign up</a></li>
          <li>|</li>
          <li><a class="link-muted" href="#">Privacy Policy</a></li>
          <li>|</li>
          <li><a class="link-muted" href="#">Terms</a></li>
          <li>|</li>
          <li><a class="link-muted" href="#">Cookie Policy</a></li>
          <li>|</li>
          <li>© Elephant 2017</li>
        </ul>
      </div>
    </div>