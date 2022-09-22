<!doctype html>

    </head>     
	<title>LOGIN</title>	

    <body style="background: #29a19c; font-family: 'Century Gothic', cursive;">
    <br><br><br><br>
         <h1 style="color: white; text-align:center;" > Login dulu gaes!</h1>
            <div class="container">
                <div class="row">
                    <div class="col">
                    
                    </div>
                    <div class="col-6">
					<?php				
					$errors = session()->getFlashData('errors');			
				
					if(!empty($errors)){ 
						
					echo '<div class="alert alert-danger" role="alert">
							
								'.$errors.' 
							
						</div>';
					}?>
					
                    <form method="POST" style="color: white">                    
                        <div>
                            <label>Username:</label><br>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                            <small>'Ex. admin_77'</small>
                        </div>
                        <br>
                        <div>
                            <label>Password:</label><br>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            <small>'Ex. admin'</small>
                        </div>
						
                        <div class="mt-3">
                            <button type="submit" class="btn btn-dark" value="submit" name="submit">Sign In</button>
							<a href="<?=base_URL('registrasi/newaccount');?>" style="color:white;">Registrasi</a>
                        </div>
                    </form>
					
                    </div>
                    <div class="col">
                    
                    </div>
                </div>
            </div>
    </body>
</html>


