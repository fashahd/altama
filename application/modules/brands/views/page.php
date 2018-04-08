<?php
    $optsidePage = "";
    if($menu_side){
        foreach($menu_side as $key){
            if($key->menu_id == $module_id){
                $active = "active";
            }else{
                $active = "";
            }
            $optsidePage .= '<a class="list-group-item '.$active.'" href="'.base_url().'profile/page/'.$key->menu_id.'">'.$key->menu_title.'</a>';
        }
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
							<img class="pos-slider pos-middle pos-right anima anima-fade-bottom hidden-xs" src="<?=base_url()?>appsources/logo/ryu_logo.png" alt="" />
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
							<h1 id="rBIkI">Powertools</h1></div>
							<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
							<p style="padding-left:15px;line-height:2.2">
								RYU Powertools
								is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
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
			<div class="text-center">
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="http://localhost/altama/appsources/repo/tekiro.png" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="http://localhost/altama/appsources/repo/ryu.png" alt="">
					</a>
				</div>
				<div class="col-md-4">
					<a class="img-box" href="#">
						<img style="width:300px" src="http://localhost/altama/appsources/repo/rexco.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>