
		<div class = "container">
			<div class = "row">
				<div class = "col-12">
				<br>
				<div>
					<div class="card-body">
					<h2 class = "text-center mt-3"><?=$title;?></h2>
					<div style="box-sizing: content-box">
					<table id="myTable" class="table" style="text-align: center; color: white">
						<thead>
							<th>Username</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Status</th>
							<th>Reset Password</th>
						</thead>
						<?php
							foreach($user as $row){
								echo '<tr>';
								echo '<td>'.$row["username"].'</td>';
								echo '<td>'.$row["nama"].'</td>';
								echo '<td>'.$row["email"].'</td>';
								if($row["status"]=='Enable')
									echo '<td><a type="button" href="'.base_url('admin/status/'.$row['username'].'/Disable').'" class = "btn btn-danger">Disable</a></td>';
								else
									echo '<td><a type="button" href="'.base_url('admin/status/'.$row['username'].'/Enable').'" class = "btn btn-success">Enable</a></td>';
								echo '<td><a type="button" href="'.base_url('admin/password/'.$row['username']).'" class = "btn btn-info">Reset Password</a></td>';
								echo '</tr>';
							}
						?>
					</table>
					</div>
					</div>
					</div>
				</div>
			</div>
		</div>		
	