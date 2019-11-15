<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('templates/meta', ['title' => 'Login']); ?>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      html,
			body {
			  height: 100%;
			}

			body {
			  display: -ms-flexbox;
			  display: flex;
			  -ms-flex-align: center;
			  align-items: center;
			  padding-top: 40px;
			  padding-bottom: 40px;
			  background-color: #f5f5f5;
			}

			.form-signin {
			  width: 100%;
			  max-width: 330px;
			  padding: 15px;
			  margin: auto;
			}
			.form-signin .checkbox {
			  font-weight: 400;
			}
			.form-signin .form-control {
			  position: relative;
			  box-sizing: border-box;
			  height: auto;
			  padding: 10px;
			  font-size: 16px;
			}
			.form-signin .form-control:focus {
			  z-index: 2;
			}
			.form-signin input[type="email"] {
			  margin-bottom: -1px;
			  border-bottom-right-radius: 0;
			  border-bottom-left-radius: 0;
			}
			.form-signin input[type="password"] {
			  margin-bottom: 10px;
			  border-top-left-radius: 0;
			  border-top-right-radius: 0;
			}

    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="<?php echo base_url('auth/login'); ?>" method="POST">
		  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
		  <?php echo $this->session->flashdata('message'); ?>
		  <label for="inputEmail" class="sr-only">Email address</label>
		  <input type="text" name="username" id="inputEmail" class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" placeholder="Username" autofocus>
		  <?php echo form_error('username', '<small class="invalid-feedback mb-1">', '</small>'); ?>
		  <label for="inputPassword" class="sr-only">Password</label>
		  <input type="password" name="password" id="inputPassword" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" placeholder="Password">
		  <?php echo form_error('login', '<small class="invalid-feedback mb-1">', '</small>'); ?>
		  <div class="checkbox mb-3">
		    <label>
		      <input type="checkbox" value="remember-me"> Remember me
		    </label>
		  </div>
		  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		  <p class="mt-5 mb-3 text-muted">&copy; 2019-2019</p>
		</form>
<?php $this->load->view('templates/script'); ?>
</body>
</html>