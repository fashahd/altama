<?php
	$menu_side = array("Contact"=>"Contact Form", "Location"=>"Our Location");
    $optsidePage = "";
    if($menu_side){
        foreach($menu_side as $key => $title){
            if($key == $module_id){
                $active = "active";
            }else{
                $active = "";
            }
            $optsidePage .= '<a class="list-group-item '.$active.'" href="'.base_url().'contact/index/'.$key.'">'.$title.'</a>';
        }
    }
?>
<div class="section-empty no-paddings row-25">
    <div class="section-slider row-25 white">
        <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
            <ul class="slides">
                <li data-slider-anima="fade-left" data-time="1000">
                    <div class="section-slide">
                        <div class="bg-cover" style="background-image:url('<?=base_url()?>appsources/banner/banner.jpeg')">
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="section-empty">
    <div class="container content">
        <?php if($module_id == "Contact"){ ?>
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
							<h1 id="rBIkI">Contact Form</h1></div>
							<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
							<div class="row">
								<div class="col-md-12 hc_pt_grid_list_cnt">
									<div class="form-group col-md-6">
										<label>Name</label>
										<input class="form-control" />
									</div>
									<div class="form-group col-md-6">
										<label>Email</label>
										<input class="form-control" />
									</div>
									<div class="form-group col-md-12">
										<label>Subject</label>
										<input class="form-control" />
									</div>
									<div class="form-group col-md-12">
										<label>Subject</label>
										<textarea class="form-control"></textarea>
									</div>
									<div class="form-group col-md-12">
										<button class="btn btn-altama" style="background: #164892">Send Message</button>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php if($module_id == "Location"){ ?>
        <div class="row">
            <div class="col-md-3 widget">
                <div class="list-group list-blog">
                    <?=$optsidePage?>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row ">
					<div class="col-md-12 hc_title_tag_cnt">
							<h1 id="rBIkI">Our Location</h1>
					</div>
					<div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
                    <div id="column_iCycp" class="hc_column_cnt col-sm-12">
                        <div class="google-map" id="map"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8ZhCy850j37UFvNd5XUTAQ8VLzg55Qtc&callback=initMap">
    </script>
