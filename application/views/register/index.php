<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 4px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 40%;
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
  width: 40%;
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
     width: 40%;
  }
}
</style>
</head>
<body>
	<div class="wrapper">
		<div class="inner">
		<?php echo form_open('Register/proses_register'); ?>
		<center>
			<form method="post">
				<img src="<?php echo base_url('asset/register/images/image-1.png'); ?>" alt="" class="image-1">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
						<p> <?php echo form_error('nama'); ?> </p>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" class="form-control" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<p> <?php echo form_error('email'); ?> </p>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="username" id="username" placeholder="Username">
						<span class="focus-input100"></span>
						<p> <?php echo form_error('username'); ?> </p>
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" name=" password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<p> <?php echo form_error('password'); ?> </p>
					</div>
					<!-- <div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Confirm Password">
					</div> -->
					<button>
						<span>Register</span>
					</button>
					<div class="form-holder">
						<span></span>
						<h4><a href="<?php echo site_url('login'); ?>">Login</a>
					</div>
				</form>
				<img src="<?php echo base_url('asset/register/images/image-2.png'); ?>" alt="" class="image-2">
				<?= form_close(); ?>
		</div>

	</div>

	<script src="<?php echo base_url('asset/register/js/jquery-3.3.1.min.js'); ?>"></script>
	<script src="<?php echo base_url('asset/register/js/main.js'); ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>