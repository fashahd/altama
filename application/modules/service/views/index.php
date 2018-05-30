<?php
    $sql 	= "SELECT * FROM services";
    $query 	= $this->db->query($sql);
    $listservice = "";
    if($query->num_rows()>0){
        foreach($query->result() as $row){
            $listservice .= '
            <div class="list-group-item">
                <a href="#">
                    <h5>'.$row->service_store.'</h5>
                </a>
                <p>'.$row->service_address.'
                <br>'.$row->service_phone.'</p>
            </div>
            ';
        }
    }
?>
<div class="section-empty ">
    <div class="section-slider white">
        <div class="flexslider advanced-slider slider visible-dir-nav" data-options="animation:fade">
            <ul class="slides">
                <li data-slider-anima="fade-left" data-time="1000">
                    <div class="section-slide">
                        <div class="bg-cover" style="background-image:url('<?=base_url()?>appsources/banner/service_center.jpg')">
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
                <div class="google-map" id="googleMap"></div>
			</div>
            <div class="col-lg-4">
                <!-- <div class="input-group search-blog list-blog">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn" type="button"><i class="fa fa-search" style="font-size:13pt;color:#7a7a7a"></i></button>
                    </span>
                </div> -->
                <hr class="space s" />
                <div class="list-group list-blog" style="height:385px;overflow:auto">
                <?=$listservice?>
                </div>
            </div>
		</div>
    </div>
</div>

    <!-- <script>
      function initMap() {
        var infoWindow = new google.maps.InfoWindow;
        var infowincontent = document.createElement('div');
        var strong = document.createElement('strong');
        strong.textContent = "Altama Surya Anugrah"
        infowincontent.appendChild(strong);
        infowincontent.appendChild(document.createElement('br'));

        var text = document.createElement('text');
        text.textContent = "Jalan Bandengan Utara 85A No. 4, Penjaringan, RT.3/RW.16, Penjaringan, Kota Jkt Utara";
        infowincontent.appendChild(text);
        infowincontent.appendChild(document.createElement('br'));
        
        var strong1 = document.createElement('text');
        strong1.textContent = "(021) 6680180"
        infowincontent.appendChild(strong1);
        infowincontent.appendChild(document.createElement('br'));
        
        var uluru = {lat: -6.1368109, lng: 106.794745};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru
        });

        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });

        marker.addListener('click', function() {
            infoWindow.setContent(infowincontent);
            infoWindow.open(map, marker);
        });
      }
    </script> -->
    
<script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('googleMap'), {
          center: new google.maps.LatLng(-6.167537, 106.826463),
          zoom: 5
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('<?=base_url()?>service/getlokasi', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('name');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('telpon');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
			  infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              infowincontent.appendChild(document.createElement('br'));
			  
              var strong1 = document.createElement('text');
              strong1.textContent = type
              infowincontent.appendChild(strong1);
              infowincontent.appendChild(document.createElement('br'));
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });
              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8ZhCy850j37UFvNd5XUTAQ8VLzg55Qtc&callback=initMap">
    </script>
