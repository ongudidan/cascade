<div id="rev_slider_5_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="logistics"
    data-source="gallery"
    style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
    <!-- START REVOLUTION SLIDER 5.4.8 fullwidth mode -->
    <div id="rev_slider_5_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
        <ul>
            <!-- SLIDE  -->
            <li data-index="rs-8" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="/web/uploads/<?= $generalModel->home_banner ?? '' ?>" alt="" data-bgposition="center center"
                    data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption   tp-resizeme" id="slide-8-layer-1" data-x="['left','left','left','center']"
                    data-hoffset="['0','43','52','2']" data-y="['middle','middle','middle','middle']"
                    data-voffset="['-67','-68','-64','-56']" data-width="461" data-height="173"
                    data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                    data-frames='[{"delay":10,"speed":1140,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                    data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                    style="z-index: 5; min-width: 461px; max-width: 461px; max-width: 173px; max-width: 173px; white-space: nowrap; font-size: 50px; line-height: 59px; font-weight: 400; color:rgb(255, 255, 255); letter-spacing: -4px;font-family:Poppins;">
                    Making<br> Transportation
                    <br> Fast & Savw
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption rev-btn " id="slide-8-layer-2" data-x="['left','left','left','center']"
                    data-hoffset="['0','41','47','7']" data-y="['top','top','top','top']"
                    data-voffset="['345','372','378','375']" data-width="none" data-height="none"
                    data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off"
                    data-frames='[{"delay":640,"speed":1120,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:transparent;bc:rgb(255,255,255);"}]'
                    data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                    data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                    data-paddingleft="[35,35,35,35]"
                    style="z-index: 6; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: px;font-family:Poppins;background-color:rgb(229,57,53);border-color:rgb(229,57,53);border-style:solid;border-width:2px 2px 2px 2px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                    Contact Us </div>
            </li>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div>


<script>
    jQuery(document).ready(function() {
        if (jQuery("#rev_slider_5_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_5_1");
        } else {
            jQuery("#rev_slider_5_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "//localhost/slider/revslider/public/assets/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    onHoverStop: "off",
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1100, 1024, 778, 480],
                gridheight: [550, 600, 600, 600],
                lazyType: "none",
                shadow: 0,
                spinner: "spinner0",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
</script>