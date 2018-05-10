<?php
	$menu_side = array("News"=>"NEWS", "Event"=>"EVENT");
    $optsidePage = "";
    if($menu_side){
        foreach($menu_side as $key => $title){
            if($key == $module_id){
                $active = "active";
            }else{
                $active = "";
            }
            $optsidePage .= '<a class="list-group-item '.$active.'" href="'.base_url().'news/index/'.$key.'">'.$title.'</a>';
        }
    }
?>
<div class="section-empty">
    <div class="container content">
        <?php if($module_id == "News"){ ?>
        <div class="row">
            <div class="col-md-3 widget">
                <div class="list-group list-blog">
                    <?=$optsidePage?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
							<h1 id="rBIkI">News</h1></div>
							<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
							<div class="row">
								<div class="col-md-12 hc_pt_grid_list_cnt">
									<div class="grid-list one-row-list" style="">
										<div class="grid-item col-md-12" style='padding:30px'>
											<div class="advs-box-content">
												<div class="tag-row icon-row">
													<span><i class="fa fa-calendar"></i><a> 15 Aug 2017</a></span>
												</div>
												<h3>
													Disukai Konsumen, Tekiro Rebut Top Brand 4 Tahun Berturut-turut
												</h3>
												<p style="text-align:left">JAKARTA - Tekiro tools kembali mendapatkan Top Brand Award untuk kategori Handtools di tahun 2017. Penghargaan ini menjadi penghargaan keempat yang di terima Tekiro secara berturut-turut sejak 2014 lalu.
Penghargaan itu merupakan bukti nyata atas kepercayaan konsumen yang telah menggunakan produk Tekiro selama bertahun-tahun. Tekiro merupakan perusahaan yang sudah 20 tahun melayani kebutuhan masyarakat terhadap peralatan pendukung keperluannya sehari-hari, termasuk di dalamnya kebutuhan di industri automotif.</p>
												<h3><a>Read More ...</a></h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 hc_pt_grid_list_cnt">
									<div class="grid-list one-row-list" style="">
										<div class="grid-item col-md-12" style='padding:30px'>
											<div class="advs-box-content">
												<div class="tag-row icon-row">
													<span><i class="fa fa-calendar"></i><a> 15 Aug 2017</a></span>
												</div>
												<h3>
													Tips Merawat Kunci Sock
												</h3>
												<p style="text-align:left">
													Pengendara.com - Perkakas tersebut rusak, karatan bahkan hilang, sudah pasti akan merepotkan dan membuat kesal kita sebagai pemiliknya. Pengendara.com memberikan referensi tips merawat kunci yang dipersembahkan Tekiro. Berikut tipsnya.
												</p>
												<h3><a>Read More ...</a></h3>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
				<div class="pagination-inner list-nav">
					<ul class="pagination-lg hide-first-last pagination-grid pagination" data-page-items="6" data-options="scrollTop:true,prev:<i class='fa fa-angle-left'></i> Prev,next:Next<i class='fa fa-angle-right'></i>">
					<li class="first disabled"><a href="#"><i class="fa fa-angle-double-left"></i> <span>First</span></a></li><li class="prev disabled"><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li><li class="page active"><a href="#">1</a></li><li class="page"><a href="#">2</a></li><li class="next"><a href="#">Next<i class="fa fa-angle-right"></i></a></li><li class="last"><a href="#"><span>Last</span> <i class="fa fa-angle-double-right"></i></a></li></ul>
				</div>
            </div>
        </div>
        <?php } ?>
        <?php if($module_id == "Event"){ ?>
        <div class="row">
            <div class="col-md-3 widget">
                <div class="list-group list-blog">
                    <?=$optsidePage?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12">
                        <div class="row">
                            <div class="col-md-12 hc_title_tag_cnt">
							<h1 id="rBIkI">Event</h1></div>
							<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
							<div class="row">
								<div class="col-md-12 hc_pt_grid_list_cnt">
									<div class="grid-list one-row-list" style="">
										<div class="grid-item col-md-12" style='padding:30px'>
											<div class="advs-box-content">
												<div class="tag-row icon-row">
													<span><i class="fa fa-calendar"></i><a> 15 Aug 2017</a></span>
												</div>
												<h3>
													Disukai Konsumen, Tekiro Rebut Top Brand 4 Tahun Berturut-turut
												</h3>
												<p style="text-align:left">JAKARTA - Tekiro tools kembali mendapatkan Top Brand Award untuk kategori Handtools di tahun 2017. Penghargaan ini menjadi penghargaan keempat yang di terima Tekiro secara berturut-turut sejak 2014 lalu.
Penghargaan itu merupakan bukti nyata atas kepercayaan konsumen yang telah menggunakan produk Tekiro selama bertahun-tahun. Tekiro merupakan perusahaan yang sudah 20 tahun melayani kebutuhan masyarakat terhadap peralatan pendukung keperluannya sehari-hari, termasuk di dalamnya kebutuhan di industri automotif.</p>
												<h3><a>Read More ...</a></h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 hc_pt_grid_list_cnt">
									<div class="grid-list one-row-list" style="">
										<div class="grid-item col-md-12" style='padding:30px'>
											<div class="advs-box-content">
												<div class="tag-row icon-row">
													<span><i class="fa fa-calendar"></i><a> 15 Aug 2017</a></span>
												</div>
												<h3>
													Tips Merawat Kunci Sock
												</h3>
												<p style="text-align:left">
													Pengendara.com—Perkakas tersebut rusak, karatan bahkan hilang, sudah pasti akan merepotkan dan membuat kesal kita sebagai pemiliknya. Pengendara.com memberikan referensi tips merawat kunci yang dipersembahkan Tekiro. Berikut tipsnya.
												</p>
												<h3><a>Read More ...</a></h3>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
				<div class="pagination-inner list-nav">
					<ul class="pagination-lg hide-first-last pagination-grid pagination" data-page-items="6" data-options="scrollTop:true,prev:<i class='fa fa-angle-left'></i> Prev,next:Next<i class='fa fa-angle-right'></i>">
						<li class="first disabled"><a href="#"><i class="fa fa-angle-double-left"></i> <span>First</span></a></li>
						<li class="prev disabled"><a href="#"><i class="fa fa-angle-left"></i> Prev</a></li>
						<li class="page active"><a href="#">1</a></li>
						<li class="page"><a href="#">2</a></li>
						<li class="next"><a href="#">Next<i class="fa fa-angle-right"></i></a></li>
						<li class="last"><a href="#"><span>Last</span> <i class="fa fa-angle-double-right"></i></a></li>
					</ul>
				</div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>