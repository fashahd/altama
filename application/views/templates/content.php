<?=$this->layout->headersource($module)?>
<body>
    <div id="preloader"></div>
    <header class="fixed-top scroll-change" data-menu-anima="fade-in">
        <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
            <div class="navbar navbar-main">
                <div class="container">
                    <div class="navbar-header" style="margin-right:50px;margin-top:-15px">
                        <button type="button" class="navbar-toggle">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand row-4" href="<?=base_url()?>" id="#headerlogo">
                            <img class="logo-default" src="<?=base_url()?>appsources/logo_altama.png" alt="logo" />
                            <img class="logo-retina" src="<?=base_url()?>appsources/logo_altama.png" alt="logo" />
                        </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <?=$this->menu->treemenu()?>
                        </ul>
                        <div class="nav navbar-nav navbar-right" style="margin-top:10px">
                            <div class="search-box-menu">
                                <div class="search-box scrolldown">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                </div>
                                <button type="button" class="btn btn-default btn-search">
                                    <span class="fa fa-search"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?=$this->load->view($pages)?>
    <i class="scroll-top scroll-top-mobile show fa fa-sort-asc"></i>
    <footer class="footer-base">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-center text-left">
						<h5><b>PT. Altama Surya Anugerah</b></h5>
                        <p class="text-s">Jl. Bandengan Utara<br> No.85A, RT.3/RW.16,<br> Penjaringan, North Jakarta City<br> Jakarta 14440 Indonesia</p>
                        <p class="text-s">Telp :  (021) 6680180</p>
						<p><a>Open in Google Maps</a></p>
                    </div>
                    <div class="col-md-6 footer-left text-left">
                        <div class="row">
                            <div class="col-md-6 text-s">
                                <h3></h3>
                                <a href="<?=base_url()?>contact" class="text-s">Company Overview & Milestone</a><br />
                                <a href="<?=base_url()?>career" class="text-s">Vision, Missions & Company Value</a><br />
                                <a href="<?=base_url()?>news" class="text-s">Award & Recognition</a><br />
                                <a href="<?=base_url()?>service" class="text-s">Board of Commisioner</a><br />
                                <a href="<?=base_url()?>service" class="text-s">Board of Director</a><br />

                            </div>
                            <div class="col-md-3 text-s">
                                <h3></h3>
                                <a href="<?=base_url()?>contact" class="text-s">Contactus</a><br />
                                <a href="<?=base_url()?>career" class="text-s">Career</a><br />
                                <a href="<?=base_url()?>news" class="text-s">News & Event</a><br />
                                <a href="<?=base_url()?>service" class="text-s">Service Center</a><br />

                            </div>
                            <div class="col-md-3 text-s">
                                <h3></h3>
                                <a href="#" class="text-s">Tekiro</a><br />
                                <a href="#" class="text-s">RYU</a><br />
                                <a href="#" class="text-s">REXCO</a><br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?=$this->layout->headersourcejs()?>
    </footer>
</body>
<script>
    $( document ).ready(function() {
        var docElem = document.documentElement,
            header = document.querySelector( '.navbar-brand' ),
            didScroll = false,
            changeHeaderOn = 300;

        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }

        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                console.log("test");
                classie.add( header, 'navbar-brand-shrink' );
            }
            else {
                console.log("test2");
                classie.remove( header, 'navbar-brand-shrink' );
            }
            didScroll = false;
        }

        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }

        init();
    });
</script>

