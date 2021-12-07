<?php $banner = ['banner-1-depan.jpg', 'banner-2-depan.jpg'] ?>

<!--/header of the page -->
<main>
    <!-- visual/banner of the page -->
    <div class="banner banner-home">
        <!-- revolution slider starts -->
        <div id="rev_slider_279_1_wrapper" class="rev_slider_wrapper fullscreen-container"
            data-alias="restaurant-header"
            style="margin:0px auto;background-color:#000;padding:0px;margin-top:0px;margin-bottom:0px;">
            <div id="rev_slider_70_1" class="rev_slider fullscreenabanner" style="display:none;" data-version="5.1.4">
                <ul>

                    <?php $no = 1 ?>
                    <?php foreach ($banner as $b) : ?>
                    <?php $no++ ?>
                    <li class="slider-color-schema-dark" data-index="rs-<?= $no ?>" data-transition="fade"
                        data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1000"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                        <!-- main image for revolution slider -->
                        <img src="<?= base_url('assets/') ?>img/<?= $b ?>" alt="image description"
                            data-bgposition="center center" data-kenburns="on" data-duration="30000"
                            data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0"
                            data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10"
                            class="rev-slidebg" data-bgfit="cover" data-no-retina>


                        <div class="slider-sub-title text-white tp-caption tp-resizeme rs-parallaxlevel-0"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','middle','middle']" data-voffset="['145','100','10','20']"
                            data-width="['1200','960','720','540']" data-textalign="center"
                            data-fontsize="['30','28','24','20']" data-lineheight="['72','62','50','50']"
                            data-letterspacing="5" data-height="none" data-whitespace="normal"
                            data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                            DEFINE. DESIGN. DELIVER.
                        </div>
                        <div class="slider-main-title text-white tp-caption tp-resizeme rs-parallaxlevel-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','middle','middle']" data-voffset="['250','150','50','50']"
                            data-width="['1200','960','720','540']" data-textalign="center"
                            data-fontsize="['160','88','64','48']" data-fontweight="900"
                            data-letterspacing="['25','10','5','0']" data-lineheight="['184','100','72','60']"
                            data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                            ROXINE
                        </div>
                        <div class="slider-text text-white tp-caption tp-resizeme rs-parallaxlevel-2"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','middle','middle']" data-voffset="['450','230','110','110']"
                            data-width="['840','555','555','480']" data-textalign="center"
                            data-fontsize="['18','14','14','14']" data-lineheight="['30','30','22','22']"
                            data-fontweight="400" data-height="none" data-whitespace="normal" data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;" data-start="1000"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on"
                            data-paddingright="[25,25,25,25]" data-paddingleft="[25,25,25,25]">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        </div>
                        <div class="tp-caption rev-btn  rs-parallaxlevel-10" id="slide-163-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['320','60','240','220']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                            data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeOut;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_out="x:inherit;y:inherit;" data-start="1250" data-splitin="none"
                            data-splitout="none"
                            data-actions='[{"event":"click","action":"jumptoslide","slide":"rs-164","delay":""}]'
                            data-responsive_offset="on" data-paddingtop="[0,0,0,0]" data-paddingright="[25,25,25,25]"
                            data-paddingbottom="[0,0,0,0]" data-paddingleft="[25,25,25,25]">
                            <a class="btn btn-primary has-radius-small" href="#">EXPLORE WORK</a>
                        </div>
                    </li>
                    <?php endforeach ?>


                </ul>
            </div>
        </div>
    </div>
    <!--/visual/banner of the page -->
    <!-- main content wrapper -->
    <?php $divisi = ['HKI', 'Inkubator Bisnis', 'Pusat Unggulan'] ?>
    <div class="content-wrapper">
        <section class="content-block">
            <div class="container">
                <div class="block-heading bottom-space">
                    <h3 class="block-top-heading">WHO WE ARE</h3>
                    <h2 class="block-main-heading">OUR TEAM</h2>
                    <!-- <span class="block-sub-heading">We really love what we do & our work on every project truly
                        reflects that.</span> -->

                </div>
                <div class="team-container">
                    <div class="owl-carousel group-slide bottom-m-space">
                        <?php foreach ($divisi as $d) : ?>

                        <div class="slide-item">
                            <figure class="team-box caption-fade-up">
                                <div class="img-block gray-scale">
                                    <img src="<?= base_url('assets/') ?>img/team-02.jpg" alt="images description">
                                </div>
                                <figcaption class="text-right">
                                    <strong class="content-title mb-0"><?= strtoupper("Divisi " . $d) ?></strong>
                                    <!-- <span class="sub">UI/UX GURU</span> -->
                                </figcaption>
                            </figure>
                        </div>

                        <?php endforeach ?>

                    </div>
                    <p> Martin loves gossiping code on his iPhone. Consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. </p>
                </div>
            </div>
        </section>
        <section class="content-block quotation-block quotation-block-v5 black-overlay-5 parallax"
            data-stellar-background-ratio="0.55">
            <div class="container">
                <div class="inner-wrapper">
                    <div class="block-heading text-right">
                        <h3 class="block-top-heading text-white">BEST EVER DESIGN</h3>
                        <h2 class="block-main-heading text-white">WEB DESIGN</h2>
                        <span class="block-sub-heading text-white">We really love what we do & our work on every
                            project truly reflects that.</span>
                        <div class="divider"><img src="<?= base_url('assets/') ?>img/divider-white.png"
                                alt="images description"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-block">
            <div class="container">
                <div class="row multiple-row v-align-row">
                    <div class="col-lg-4 col-md-6">
                        <div class="col-wrap">
                            <div class="block-heading">
                                <h3 class="block-top-heading">WHAT WE DO</h3>
                                <h2 class="block-main-heading">EXPERTS</h2>
                                <span class="block-sub-heading">We build digital solutions.</span>
                                <div class="divider"><img src="<?= base_url('assets/') ?>img/divider.png"
                                        alt="images description"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="col-wrap">
                            <div class="ico-box bg-gray-light dark-hover">
                                <div class="icon">
                                    <span class="custom-icon-pen-tool"><span class="sr-only">&amp;</span></span>
                                </div>
                                <h4 class="content-title"><a href="#">PIXEL PERFECT</a></h4>
                                <div class="des">
                                    <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                                </div>
                                <div class="link-holder">
                                    <a class="link-more" href="#">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="col-wrap">
                            <div class="ico-box bg-gray-light dark-hover">
                                <div class="icon">
                                    <span class="custom-icon-vector"><span class="sr-only">&amp;</span></span>
                                </div>
                                <h4 class="content-title"><a href="#">VECTOR SHAPES</a></h4>
                                <div class="des">
                                    <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                                </div>
                                <div class="link-holder">
                                    <a class="link-more" href="#">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="col-wrap">
                            <div class="ico-box bg-gray-light dark-hover">
                                <div class="icon">
                                    <span class="custom-icon-font-design"><span class="sr-only">&amp;</span></span>
                                </div>
                                <h4 class="content-title"><a href="#">GOOGLE FONTS</a></h4>
                                <div class="des">
                                    <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                                </div>
                                <div class="link-holder">
                                    <a class="link-more" href="#">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="col-wrap">
                            <div class="ico-box bg-gray-light dark-hover">
                                <div class="icon">
                                    <span class="custom-icon-layers"><span class="sr-only">&amp;</span></span>
                                </div>
                                <h4 class="content-title"><a href="#">EASY LAYERS</a></h4>
                                <div class="des">
                                    <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                                </div>
                                <div class="link-holder">
                                    <a class="link-more" href="#">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="col-wrap">
                            <div class="ico-box bg-gray-light dark-hover">
                                <div class="icon">
                                    <span class="custom-icon-list"><span class="sr-only">&amp;</span></span>
                                </div>
                                <h4 class="content-title"><a href="#">BOOTSTRAP GRID</a></h4>
                                <div class="des">
                                    <p>Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet</p>
                                </div>
                                <div class="link-holder">
                                    <a class="link-more" href="#">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-block portfolio-block pt-0" id="container">
            <div class="bottom-space text-center text-uppercase">
                <h2>Our Innovation</h2>
            </div>
            <ul class="filter-nav text-center button-group filter-button-group">
                <li>
                    <button data-filter="*">ALL</button>
                </li>
                <li>
                    <button data-filter=".inovasi-pendidikan">INOVASI PENDIDIKAN</button>
                </li>
                <li>
                    <button data-filter=".inovasi-non-pendidikan">INOVASI NON-PENDIDIKAN</button>
                </li>
            </ul>
            <div class="row grid">
                <div class="gallery-item col-lg-4 col-md-6 inovasi-pendidikan">
                    <figure class="picture-item img-block shine-effect image-zoom port-v2">
                        <img src="<?= base_url('assets/') ?>img/img-01.jpg" alt="images description">
                        <figcaption>
                            <div class="link-box">
                                <a href="#">
                                    <span class="icon-heart"><span class="sr-only">&amp;</span></span>
                                </a>
                                <a href="#">
                                    <span class="icon-link"><span class="sr-only">&amp;</span></span>
                                </a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="gallery-item col-lg-4 col-md-6 inovasi-non-pendidikan">
                    <figure class="picture-item img-block shine-effect image-zoom port-v2">
                        <img src="<?= base_url('assets/') ?>img/img-02.jpg" alt="images description">
                        <figcaption>
                            <div class="link-box">
                                <a href="#">
                                    <span class="icon-heart"><span class="sr-only">&amp;</span></span>
                                </a>
                                <a href="#">
                                    <span class="icon-link"><span class="sr-only">&amp;</span></span>
                                </a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="gallery-item col-lg-4 col-md-6 inovasi-non-pendidikan">
                    <figure class="picture-item img-block shine-effect image-zoom port-v2">
                        <img src="<?= base_url('assets/') ?>img/img-03.jpg" alt="images description">
                        <figcaption>
                            <div class="link-box">
                                <a href="#">
                                    <span class="icon-heart"><span class="sr-only">&amp;</span></span>
                                </a>
                                <a href="#">
                                    <span class="icon-link"><span class="sr-only">&amp;</span></span>
                                </a>
                            </div>
                        </figcaption>
                    </figure>
                </div>

            </div>
        </section>
        <?php $employee = ['DIREKTUR', 'KADIV INKUBASI BISNIS', 'KADIV HKI', 'KADIV PUSAT UNGGULAN'] ?>
        <section class="content-block">
            <div class="container">
                <div class="block-heading bottom-space">
                    <h3 class="block-top-heading">THIS IS US</h3>
                    <h2 class="block-main-heading">THE TEAM</h2>
                    <!-- <span class="block-sub-heading">We really love what we do & our work on every project truly
                        reflects that.</span> -->

                </div>
                <div class="team-container">
                    <div class="owl-carousel group-slide bottom-m-space">
                        <?php foreach ($employee as $d) : ?>

                        <div class="slide-item">
                            <figure class="team-box caption-fade-up">
                                <div class="img-block gray-scale">
                                    <img src="<?= base_url('assets/') ?>img/employees/<?= $d ?>.jpg"
                                        alt="images description">
                                </div>
                                <figcaption class="text-right">
                                    <strong class="content-title mb-0">HASAN ABDULLAH</strong>
                                    <span class="sub"><?= $d ?></span>
                                </figcaption>
                            </figure>
                        </div>

                        <?php endforeach ?>

                    </div>
                    <p> Martin loves gossiping code on his iPhone. Consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. </p>
                </div>
            </div>
        </section>
        <section id="work-section" class="content-block work-block">
            <div class="bg-stretch">
                <img src="<?= base_url('assets/') ?>img/big-05.jpg" alt="">
            </div>
            <div class="container">
                <div class="block-heading bottom-space text-center">
                    <h3 class="block-top-heading">WORK PLACE</h3>
                    <h2 class="block-main-heading">THE CULTURE</h2>
                    <span class="block-sub-heading">Lovely people with nack for design creativity flourish
                        here.</span>
                    <div class="divider"><img src="<?= base_url('assets/') ?>img/divider.png" alt="images description">
                    </div>
                </div>
                <div class="description text-center container-md">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                        dolor in reprehenderit in voluptate velit esse.
                    </p>
                </div>
            </div>
        </section>
        <section class="content-block">
            <div class="container">
                <div class="row multiple-row v-align-row">
                    <div class="col-md-6 col-lg-4">
                        <div class="col-wrap">
                            <div class="block-heading">
                                <h3 class="block-top-heading">RECENTLY FROM</h3>
                                <h2 class="block-main-heading">OUR NEWS</h2>
                                <span class="block-sub-heading">Blogging like no tomorrow.</span>
                                <div class="divider"><img src="<?= base_url('assets/') ?>img/divider.png"
                                        alt="images description"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="col-wrap">
                            <div class="post-grid">
                                <div class="img-block">
                                    <img src="<?= base_url('assets/') ?>img/img-16.jpg" alt="images">
                                </div>
                                <div class="post-text-block bg-gray-light">
                                    <strong class="content-title mb-0">Heading South</strong>
                                    <span class="content-sub-title">Where’s Responsive Design?</span>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                    <div class="post-meta clearfix">
                                        <div class="post-link-holder">
                                            <a href="#">Read Story <span class="fa fa-arrow-right"><span
                                                        class="sr-only">&nbsp;</span></span></a>
                                        </div>
                                        <div class="post-social text-right">
                                            <ul class="social-network social-small">
                                                <li><a href="#"><span class="icon-facebook"><span
                                                                class="sr-only">&nbsp;</span></span></a></li>
                                                <li><a href="#"><span class="icon-twitter"><span
                                                                class="sr-only">&nbsp;</span></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="col-wrap">
                            <div class="post-grid">
                                <div class="img-block">
                                    <img src="<?= base_url('assets/') ?>img/img-17.jpg" alt="images">
                                </div>
                                <div class="post-text-block bg-gray-light">
                                    <strong class="content-title mb-0">Product Design</strong>
                                    <span class="content-sub-title">Thechnology and Trends</span>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                    <div class="post-meta clearfix">
                                        <div class="post-link-holder">
                                            <a href="#">Read Story <span class="fa fa-arrow-right"><span
                                                        class="sr-only">&nbsp;</span></span></a>
                                        </div>
                                        <div class="post-social text-right">
                                            <ul class="social-network social-small">
                                                <li><a href="#"><span class="icon-facebook"><span
                                                                class="sr-only">&nbsp;</span></span></a></li>
                                                <li><a href="#"><span class="icon-twitter"><span
                                                                class="sr-only">&nbsp;</span></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="col-wrap">
                            <div class="post-grid">
                                <div class="img-block">
                                    <img src="<?= base_url('assets/') ?>img/img-18.jpg" alt="images">
                                </div>
                                <div class="post-text-block bg-gray-light">
                                    <strong class="content-title mb-0">Working Remotely</strong>
                                    <span class="content-sub-title">Home office working for you.</span>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                    <div class="post-meta clearfix">
                                        <div class="post-link-holder">
                                            <a href="#">Read Story <span class="fa fa-arrow-right"><span
                                                        class="sr-only">&nbsp;</span></span></a>
                                        </div>
                                        <div class="post-social text-right">
                                            <ul class="social-network social-small">
                                                <li><a href="#"><span class="icon-facebook"><span
                                                                class="sr-only">&nbsp;</span></span></a></li>
                                                <li><a href="#"><span class="icon-twitter"><span
                                                                class="sr-only">&nbsp;</span></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="col-wrap">
                            <div class="post-grid">
                                <div class="img-block">
                                    <img src="<?= base_url('assets/') ?>img/img-08.jpg" alt="images">
                                </div>
                                <div class="post-text-block bg-gray-light">
                                    <strong class="content-title mb-0">Leaving With A Note</strong>
                                    <span class="content-sub-title">If you want to get back again.</span>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                    <div class="post-meta clearfix">
                                        <div class="post-link-holder">
                                            <a href="#">Read Story <span class="fa fa-arrow-right"><span
                                                        class="sr-only">&nbsp;</span></span></a>
                                        </div>
                                        <div class="post-social text-right">
                                            <ul class="social-network social-small">
                                                <li><a href="#"><span class="icon-facebook"><span
                                                                class="sr-only">&nbsp;</span></span></a></li>
                                                <li><a href="#"><span class="icon-twitter"><span
                                                                class="sr-only">&nbsp;</span></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="col-wrap">
                            <div class="post-grid">
                                <div class="img-block">
                                    <img src="<?= base_url('assets/') ?>img/img-07.jpg" alt="images">
                                </div>
                                <div class="post-text-block bg-gray-light">
                                    <strong class="content-title mb-0">Break Timings</strong>
                                    <span class="content-sub-title">Spending them wisely.</span>
                                    <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit
                                        auctor aliquet. Auctor, nisi elit consequat ipsum,</p>
                                    <div class="post-meta clearfix">
                                        <div class="post-link-holder">
                                            <a href="#">Read Story <span class="fa fa-arrow-right"><span
                                                        class="sr-only">&nbsp;</span></span></a>
                                        </div>
                                        <div class="post-social text-right">
                                            <ul class="social-network social-small">
                                                <li><a href="#"><span class="icon-facebook"><span
                                                                class="sr-only">&nbsp;</span></span></a></li>
                                                <li><a href="#"><span class="icon-twitter"><span
                                                                class="sr-only">&nbsp;</span></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-block count-block text-center p-0 parallax" data-stellar-background-ratio="0.55">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-sm-6 col-lg-3">
                        <div class="col-wrap">
                            <div class="icon">
                                <span class="custom-icon-projects"></span>
                            </div>
                            <h3 class="number">505</h3>
                            <div class="text text-uppercase">TOTAL PROJECTS</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="col-wrap">
                            <div class="icon">
                                <span class="custom-icon-smile"></span>
                            </div>
                            <h3 class="number">220</h3>
                            <div class="text text-uppercase">SATISFIED CLIENTS</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="col-wrap">
                            <div class="icon">
                                <span class="custom-icon-award"></span>
                            </div>
                            <h3 class="number">720</h3>
                            <div class="text text-uppercase">AWARDS WON</div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="col-wrap">
                            <div class="icon">
                                <span class="custom-icon-celebrate"></span>
                            </div>
                            <h3 class="number">707</h3>
                            <div class="text text-uppercase">MILESTONES MET</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-block">
            <div class="container">
                <div class="block-heading bottom-space text-center">
                    <h3 class="block-top-heading">VALUE FOR MONEY</h3>
                    <h2 class="block-main-heading">PRICING OPTIONS</h2>
                    <span class="block-sub-heading">Plenty more pricing options under featurs.</span>
                    <div class="divider"><img src="<?= base_url('assets/') ?>img/divider.png" alt="images description">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="pricing-block text-center">
                            <h3>Interactive Design</h3>
                            <div class="row">
                                <div class="col-wrap col-sm-6">
                                    <h4 class="content-title">Project</h4>
                                    <span class="content-sub-title">For small projects</span>
                                    <div class="price">$45 / Hr</div>
                                    <div class="btn-holder">
                                        <a href="#" class="btn btn-black btn-sm">Hire Us</a>
                                    </div>
                                </div>
                                <div class="col-wrap col-sm-6">
                                    <h4 class="content-title">Contract</h4>
                                    <span class="content-sub-title">For large projects</span>
                                    <div class="price">$35 / Hr</div>
                                    <div class="btn-holder">
                                        <a href="#" class="btn btn-black btn-sm">Hire Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pricing-block text-center">
                            <h3>C# Programming</h3>
                            <div class="row">
                                <div class="col-wrap col-sm-6">
                                    <h4 class="content-title">Project</h4>
                                    <span class="content-sub-title">For Single Project</span>
                                    <div class="price">$60 / Hr</div>
                                    <div class="btn-holder">
                                        <a href="#" class="btn btn-black btn-sm">Hire Us</a>
                                    </div>
                                </div>
                                <div class="col-wrap col-sm-6">
                                    <h4 class="content-title">Contract</h4>
                                    <span class="content-sub-title">For Ongoing Project</span>
                                    <div class="price">$45 / Hr</div>
                                    <div class="btn-holder">
                                        <a href="#" class="btn btn-black btn-sm">Hire Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content-block bg-gray-light">
            <div class="container">
                <div class="block-heading bottom-space text-center">
                    <h3 class="block-top-heading">HEAR FROM</h3>
                    <h2 class="block-main-heading">TESTIMONIALS</h2>
                    <span class="block-sub-heading">We always listen to our clients.</span>
                    <div class="divider"><img src="<?= base_url('assets/') ?>img/divider.png" alt="images description">
                    </div>
                </div>
                <div class="testimonial-container text-center">
                    <div class="owl-carousel testimonial-slide" id="waituk-owl-slide-3">
                        <div class="slide-item">
                            <div class="team-wrap">
                                <div class="img-block">
                                    <img src="<?= base_url('assets/') ?>img/people-01.jpg" alt="images description">
                                </div>
                                <div class="text-wrap">
                                    <h2>Natalie Fullick</h2>
                                    <span class="designation bottom-m-space">CEO - ENVATO INC.</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="team-wrap">
                                <div class="img-block">
                                    <img src="<?= base_url('assets/') ?>img/people-02.jpg" alt="images description">
                                </div>
                                <div class="text-wrap">
                                    <h2>Jason Doe</h2>
                                    <span class="designation bottom-m-space">CEO - ENVATO INC.</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="team-wrap">
                                <div class="img-block">
                                    <img src="<?= base_url('assets/') ?>img/people-03.jpg" alt="images description">
                                </div>
                                <div class="text-wrap">
                                    <h2>Jake Grahm</h2>
                                    <span class="designation bottom-m-space">CEO - ENVATO INC.</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="team-wrap">
                                <div class="img-block">
                                    <img src="<?= base_url('assets/') ?>img/people-02.jpg" alt="images description">
                                </div>
                                <div class="text-wrap">
                                    <h2>Natalie Fullick</h2>
                                    <span class="designation bottom-m-space">CEO - ENVATO INC.</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </div>
                        <div class="slide-item">
                            <div class="team-wrap">
                                <div class="img-block">
                                    <img src="<?= base_url('assets/') ?>img/people-01.jpg" alt="images description">
                                </div>
                                <div class="text-wrap">
                                    <h2>Natalie Fullick</h2>
                                    <span class="designation bottom-m-space">CEO - ENVATO INC.</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <aside class="content-block">
            <div class="container">
                <div class="logo-container">
                    <div class="owl-carousel logo-slide" id="waituk-owl-slide-4">
                        <div class="slide-item">
                            <img src="<?= base_url('assets/') ?>img/logo-01.png" alt="images description">
                        </div>
                        <div class="slide-item">
                            <img src="<?= base_url('assets/') ?>img/logo-02.png" alt="images description">
                        </div>
                        <div class="slide-item">
                            <img src="<?= base_url('assets/') ?>img/logo-03.png" alt="images description">
                        </div>
                        <div class="slide-item">
                            <img src="<?= base_url('assets/') ?>img/logo-04.png" alt="images description">
                        </div>
                        <div class="slide-item">
                            <img src="<?= base_url('assets/') ?>img/logo-03.png" alt="images description">
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <!--/main content wrapper -->
</main>
</div>