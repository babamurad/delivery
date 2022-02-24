<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layout/header.php'?>
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="#">
							<input type="text" placeholder="Name" />
							<input type="email" placeholder="Email Address" />
							<span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div>
<!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
                    <?php if (isset($errors && is_array($error))): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="#">
							<input name="name" type="text" placeholder="Name"/>
							<input name="email" type="email" placeholder="Email Address"/>
							<input name="password" type="password" placeholder="Password"/>
							<button name="submit" type="submit" class="btn btn-default">Signup</button>
						</form>
                         <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    if (isset($name)) {
                        echo '<br> name: ' . $name;
                    }
                    if (isset($email)) {
                        echo '<br> email: ' . $email;
                    }
                    if (isset($password)) {
                        echo '<br> $password: ' . $password;
                    }
                    echo '<br>';
                }
                ?>
					</div>
                    <!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->


<?php include $_SERVER['DOCUMENT_ROOT'] . '/views/layout/footer.php'?>