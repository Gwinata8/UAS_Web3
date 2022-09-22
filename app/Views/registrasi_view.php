<!doctype html>
  
    </head>
	<title><?=$title?></title>

    <body style="background: #29a19c; font-family: 'Century Gothic', cursive;">
    <br><br><br><br>
         <h1 style="color: white; text-align:center;" > Regis? Kuy lah!</h1>
            <div class="container mb-5">
                <div class="row">
                    <div class="col">
                    
                    </div>
                    <div class="col-6">
					<?php				
					$errors = session()->getFlashData('errors');
					$success = session()->getFlashData('success');
					$inputs = session()->getFlashData('inputs');				
				
					if(!empty($errors)){ ?>
						<div class="alert alert-danger" role="alert">
							<ul>
								<?php foreach ($errors as $error) : ?>
								<li><?= esc($error) ?></li>
							<?php endforeach; ?>
							</ul>
						</div>
					<?php
					}
					
					if(!empty($success)){?>
						<div class="alert alert-primary" role="alert">
							<?php echo $success; ?>
						</div>
						<a href="../" style="color:white;">Login</a>
					<?php } else{?>
                    <form action="#" method="POST" style="color: white">                    
                        <div>
                            <label>Nama:</label><br>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="<?php
						if(isset($inputs['nama'])) echo $inputs['nama'];?>">
                        </div><br>
						<div>
                            <label>Username:</label><br>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="<?php
						if(isset($inputs['username'])) echo $inputs['username'];?>">
                        </div>
                        <br>
						<div>
                            <label>Email:</label><br>
                            <input type="email" name="email" class="form-control" id="email1" placeholder="Email" value="<?php
						if(isset($inputs['email'])) echo $inputs['email'];?>">
                        </div>
                        <br>
                        <div>
                            <label>Password:</label><br>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="<?php
						if(isset($inputs['password'])) echo $inputs['password'];?>">
                        </div>
						<br>
                        <div>
                            <label>Ulangi password:</label><br>
                            <input type="password" name="password2" class="form-control" id="password2" placeholder="Ulangi password" value="<?php
						if(isset($inputs['password2'])) echo $inputs['password2'];?>">
                        </div>
				        <div class="mt-3">
                            <button type="submit" class="btn btn-dark" value="submit" name="submit">Registrasi</button>
                        </div>
						<small>Sudah memiliki akun? Login <u><a href="<?=base_URL();?>" style="color:white;">disini </a></u></small>
                    </form>
					<?php }?>
                    </div>
                    <div class="col">
                    
                    </div>
                </div>
            </div>
    </body>
</html>


