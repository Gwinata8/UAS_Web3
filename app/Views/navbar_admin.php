		<div class="container-fluid;p-3 mb-2 text-white" style="background: #29a19c; font-family: 'Century Gothic', cursive;">
				<header>
					<h2 style="text-align:center; background-color:#222831;">G-Phone</h2>
				</header>
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				  <a class="navbar-brand" href="#">GPHONE</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav">
							<a class="nav-link" href="<?=base_url('admin');?>">Home</a>
						</li>
						<li class="nav">
							<a class="nav-link" href="<?=base_url('admin/user_list');?>">user</a>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<?php
								if(isset($_SESSION['nama'])){?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hey <?=$_SESSION['nama']?>, apa kabar?
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="<?=base_URL('user/logout');?>">Log Out</a>
							</div>
						</li>
						<?php };?>
					</ul>
				  </div>
				</nav>
		</div>

	</head>

		<body style="background: #29a19c; font-family: 'Century Gothic', cursive;">	
		<div class="container-fluid;p-3 mb-2  text-white">
				
				<div class="content"style="text-align:center; background: #29a19c;">