
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
        <div class="row">
            <div class="col-md-12 hc_title_tag_cnt">
                <h1 id="rBIkI">Service Center</h1></div>
                <div class="col-md-12 hc_separator_cnt"><hr class="default"/></div>
            </div>
            <div class="col-lg-8 widget no-paddings">				
                <div class="google-map" id="map"></div>
			</div>
            <div class="col-lg-4">
                <div class="input-group search-blog list-blog">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn" type="button"><i class="fa fa-search" style="font-size:13pt;color:#7a7a7a"></i></button>
                    </span>
                </div>
                <hr class="space s" />
                <div class="list-group list-blog" style="height:385px;overflow:auto">
                    <div class="list-group-item">
                        <a href="#">
                            <h5>Location 1</h5>
                        </a>
                        <p>Jakarta Selatan
                        <br>Jalan Sudirman</p>
                    </div>
                    <div class="list-group-item">
                        <a href="#">
                            <h5>Location 1</h5>
                        </a>
                        <p>Jakarta Selatan
                        <br>Jalan Sudirman</p>
                    </div>
                    <div class="list-group-item">
                        <a href="#">
                            <h5>Location 1</h5>
                        </a>
                        <p>Jakarta Selatan
                        <br>Jalan Sudirman</p>
                    </div>
                    <div class="list-group-item">
                        <a href="#">
                            <h5>Location 1</h5>
                        </a>
                        <p>Jakarta Selatan
                        <br>Jalan Sudirman</p>
                    </div>
                    <div class="list-group-item">
                        <a href="#">
                            <h5>Location 1</h5>
                        </a>
                        <p>Jakarta Selatan
                        <br>Jalan Sudirman</p>
                    </div>
                    <div class="list-group-item">
                        <a href="#">
                            <h5>Location 1</h5>
                        </a>
                        <p>Jakarta Selatan
                        <br>Jalan Sudirman</p>
                    </div>
                </div>
            </div>
		</div>
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
