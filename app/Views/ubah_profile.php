<?php 
	$inputs=Session()->getflashdata("inputs");
?>
<div class="container-fluid">
		<div class="container mb-5">
                <div class="row">
                    <div class="col">
                    
                    </div>
                    <div class="col-6 mt-5">
					<h3 style="text-align:center; color: white"><b>Ubah Profile-mu</b></h3>
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
						<a href="<?=base_url('home/profile');?>" style="color:white;">Back</a>
					<?php } else{?>
                    <form action="#" method="POST" style="color: white">                    
                        <div>
                            <label>Nama:</label><br>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="<?php 
						if(isset($inputs['nama'])) echo $inputs['nama'];?>"><?php ?>
                        </div>
						<br>
						<div>
                            <label>Email:</label><br>
                            <input type="email" name="email" class="form-control" id="email1" placeholder="Email" value="<?php
						if(isset($inputs['email'])) echo $inputs['email'];?>"><?php ?>
                        </div>
						
				        <div class="mt-3">
                            <button type="submit" class="btn btn-dark" value="submit" name="submit">Update Profile</button>
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