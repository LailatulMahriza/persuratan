<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 4px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 30%;
  padding: 9px 10px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 30%;
  }
}
</style>
</head>
<body>

<center>
<section class="sign-in">
            <div class="container">
			<div class="imgcontainer">
    			<img src="img_avatar2.png" alt="Avatar" class="avatar">
			  </div>
			  
				<?php if (validation_errors()) : ?>
					<div class="alert alert-danger" role="alert">
						<?php echo validation_errors(); ?>
					</div>
					<?php endif; ?>

						<div class="inner">
							<?= form_open('login/proses_login') ?>
								<h2 class="form-title">LOGIN</h2>
								<div class="form-holder">
									<span class="lnr lnr-user"></span>
									<input type="text" class="zmdi zmdi-account material-icons-name" name='uname1' placeholder="Username" data-validate="Username is required">
								</div>
								<div class="form-holder">
									<span class="lnr lnr-lock"></span>
									<input type="password" class="zmdi zmdi-account material-icons-name" name='pwd1' placeholder="Password" data-validate="Password is required">
								</div>
								<div class="form-holder">
									<span></span>
									<!-- <a href="<?php echo base_url('register'); ?>">Lupa Password?</a> -->
								</div>
								<button>
									<span>Login</span>
								</button>
								<div class="form-holder">
									<span></span>
									<h4><a href="<?php echo site_url('register'); ?>">Create Account</a>
								</div>
								<br>
								<div class="alert alert-danger fade in" role="alert">
									<?php
									if (isset($pesan)) {
										echo $pesan;
									} else {
										echo "Masukkan Username Dan Password Anda";
									}
									?>
								</div>
								</center>
								<div class="container" style="background-color:#f1f1f1">
    								<button type="button" class="cancelbtn">Cancel</button>
    									<span class="psw">Copyright...</span>
  								</div>
						</form>
								<?= form_close(); ?>
							</div>
						</div>
					</section>
				


	<script src="<?php echo base_url('asset/register/js/jquery-3.3.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('asset/register/js/main.js'); ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>