<?php 
	$keterangan = "";
	if($module_id == "powertools"){
		$keterangan = '
			Sekilas Tentang RYU<br>
			Selama lebih dari 10 tahun RYU Powertools telah hadir dan melengkapi kebutuhan pasar untuk alat-alat mesin teknik serta aksesoris di Indonesia. untuk para profesional yang mengutamakan produktifitas dan efisiensi. Selaras dengan komitmen tersebut, RYU Powertools memberikan jaminan garansi servis seumur hidup dengan Service Center dan Service Dealer resmi yang tersebar di beberapa kota besar di Indonesia. RYU Powertools memiliki varian produk yang lengkap dengan kategori: Powertools, Accessories, Engine serta Welding untuk keperluan pekerjaan di Metal Working, Wood Working, maupun pekerjaan umum lainnya untuk para pengguna di segmen pertukangan, perbengkelan, industri kecil hingga rumah tangga. 
		';
		$imagelogo = base_url()."appsources/logo/ryu_logo.png";
		$title = "Powertools";
	}
	if($module_id == "hand-tools"){
		$keterangan = '
			Sekilas Tentang Tekiro<br>
			Dengan pengalaman lebih dari 18 tahun, Tekiro terus berinovasi dan telah berhasil menjadi salah satu merek perkakas presisi yang terpercaya, dengan varian produk lengkap, harga terjangkau dan jaringan distribusi yang luas di seluruh Indonesia. Kepercayaan pelanggan menjadi prioritas Tekiro, selaras dengan slogan Believe In Your Choice, Tekiro ingin para pengguna percaya akan produk pilihannya yang bisa menjadi andalan dan memberikan kenyamanan untuk pemakaian sehari-hari. Hingga saat ini Tekiro memiliki lebih dari 2000 produk dari 14 kategori, mulai dari wrench, socket, obeng, tang, dan insulation guna memenuhi kebutuhan dari berbagai segmen mulai dari industri, otomotif, bangunan hingga rumah tangga. Produk-produk tekiro sudah memenuhi standard internasional seperi JIS, ANSI, dan DIN.
		';
		$imagelogo = base_url()."appsources/logo/tekiro_logo.png";
		$title = "Hand Tools";
	}
	if($module_id == "lubricants"){
		$keterangan = '
			Sekilas Tentang Rexco<br>
			Kami mempunyai pengalaman lebih dari 30 tahun dalam memasarkan produk- produk Chemical. Selama 30 tahun kami sangat mengetahui kebutuhan pasar akan produk-produk chemical dengan kualitas, harga dan varian produk yang lengkap. Oleh karena itu di tahun 2013, kami mulai mengembangkan produk chemical untuk memenuhi kebutuhan pasar akan produk-produk MRO (Maintenance, Repair & Overhaul). REXCO 50 sudah mendapatkan award dari tabloid OTOMOTIF sebagai Produk Yang Terpercaya. Di tahun 2016 kami mengeluarkan varian baru yaitu REXCO 81, REXCO 70 & REXCO 20. Dalam waktu 4 tahun, kami sudah memasarkan hampir di seluruh Indonesia. Dan sudah banyak industri & otomotif yang menggunakan produk Rexco, seperti Indofood, Nestle, Pertamina, PLN, Jhonlin, Indopoly, Astra Otoparts, Jaguar, Land Rover, Mercedes, Hyundai  dan masih banyak lagi.
		';
		$imagelogo = base_url()."appsources/logo/ryu_logo.png";
		$title = "Lubricants";
	}
?>
<div class="section-empty no-paddings row-25">
    <div class="section-slider row-25 white">
        <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
            <ul class="slides">
                <li data-slider-anima="fade-left" data-time="1000">
                    <div class="section-slide">
                        <div class="bg-cover" style="background-image:url('<?=base_url()?>appsources/banner/ryu.jpg')">
                        </div>
						<div class="container">
							<img class="pos-slider pos-middle pos-right anima anima-fade-bottom hidden-xs" src="<?=$imagelogo?>" alt="" />
						</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="section-empty">
    <div class="container content">
        <div class="row">
            <div class="col-md-8">
				<div id="column_iCycp" class="hc_column_cnt col-sm-12">
					<div class="row">
						<div class="col-md-12 hc_title_tag_cnt">
							<h1 id="rBIkI"><?=$title?></h1></div>
							<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
							<p style="padding-left:15px;line-height:2.2">
								<?=$keterangan?>
							</p>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<div class="section-bg-color bg-color" style="padding:50px 0 50px 0;">
	<div class="front">
		<div class="content">
			<div class="col-md-4">
				<h4 class="title-front"><span class="underline">Mo</span>st Popular</h4>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="section-empty section-item text-center" style="width:100%; padding:30px; 100px; 30px;100px">
			<div class="slickslider">
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="<?=base_url()?>appsources/product/1.png" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="<?=base_url()?>appsources/product/2.jpg" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="<?=base_url()?>appsources/product/3.jpg" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="<?=base_url()?>appsources/product/4.jpg" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="<?=base_url()?>appsources/product/5.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>