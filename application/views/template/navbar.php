
	<br />
	<div class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="<?=base_url();?>">KasApp</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
				<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarColor01">
	  		<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?=base_url();?>"><?php if ($this->session->userdata('logged_in') == TRUE) {?><i class="fa fa-home"></i> &nbsp;Beranda<?php } else { ?><i class="fa fa-sign-in"></i> &nbsp;Login<?php } ?> <span class="sr-only">(current)</span></a>
				</li>
		<?php if ($this->session->userdata('logged_in') == TRUE) {?>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('p/masuk');?>"><i class="fa fa-level-up"></i> &nbsp;Pemasukan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('p/keluar');?>"><i class="fa fa-level-down"></i> &nbsp;Pengeluaran</a>
				</li>
		<?php } ?>
			    <li class="nav-item">
	    			<a class="nav-link" href="<?=base_url('p/laporan');?>"><i class="fa fa-line-chart"></i> &nbsp;Laporan</a>
	    		</li>
		<?php if ($this->session->userdata('logged_in') == TRUE) {?>
		   		<li class="nav-item">
	    			<a class="nav-link" href="<?=base_url('p/bersihkan');?>"><i class="fa fa-trash"></i> &nbsp;Bersihkan Data</a>
	    		</li>
	    		<li class="nav-item">
	    			<a class="nav-link" href="<?=base_url('p/logout');?>"><i class="fa fa-sign-out"></i> &nbsp;Logout</a>
	    		</li>
	    <?php } ?>
	    	</ul>
	    	<form class="form-inline my-2 my-lg-0" action="<?=base_url('p/cari');?>" method="GET">
	    		<input name="s" class="form-control mr-sm-2" type="text" placeholder="Cari disini">
	    		<button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
	<br />
	