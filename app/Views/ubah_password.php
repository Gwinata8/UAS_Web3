
<div class="container-fluid">
		<div class="container mb-5">
                <div class="row">
                    <div class="col">
                    
                    </div>
                    <div class="col-6 mt-5">
					<h3 style="text-align:center; color: white"><b>Ubah Password?</b></h3>
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
						<a href="<?=base_url('home/password');?>" style="color:white;">Back</a>
					<?php } else{?>
                    <form action="#" method="POST" style="color: white">                    
                        <div>
                            <label>Password:</label><br>
                            <input type="Password" name="password" class="form-control" id="password" placeholder="Password" value="<?php
						if(isset($inputs['password'])) echo $inputs['password'];?>">
                        </div><br>
						<div>
                            <label>Ulangi password:</label><br>
                            <input type="password" name="password2" class="form-control" id="password2" placeholder="Ulangi password" value="<?php
						if(isset($inputs['password2'])) echo $inputs['password2'];?>">
                        </div>
                     
						
				        <div class="mt-3">
                            <button type="submit" class="btn btn-dark" value="submit" name="submit">Update password</button>
							<a type="button" class="btn btn-danger" href="<?=base_url('home/index');?>">Cancel</a>
                        </div>						
                    </form>
					<?php }?>
                    </div>
                    <div class="col">
                    
                    </div>
                </div>
            </div>
</div>

</body>