<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:82:"/Users/pan.liu/Documents/privateProject/guiwei/addons/cms/view/default1/index.html";i:1688454680;s:87:"/Users/pan.liu/Documents/privateProject/guiwei/addons/cms/view/default1/common/top.html";i:1688462056;s:88:"/Users/pan.liu/Documents/privateProject/guiwei/addons/cms/view/default1/common/foot.html";i:1688462069;}*/ ?>
<!doctype html>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <title>index</title> 
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 
  <link href="/template/default/css/style.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
  <link href="/template/default/css/public.css?v=<?php echo $site['version']; ?>" rel="stylesheet" type="text/css">
 </head> 
 <body> 
  <div class="container"> 
   <!-- web_head start --> 
   <header class="web_head index_web_head"> 
    <section class="top_bar"> 
     <div class="layout"> 
      <div class="head_phone">
       <a href="">Phone:12345678910</a>
      </div> 
      <div class="head-search"> 
       <form class="" action=""> 
        <input class="search-btn" type="button"> 
        <input class="search-ipt" name="search" placeholder="Search..."> 
       </form> 
      </div> 
     </div> 
    </section> 
    <div class="head_layout layout"> 
     <figure class="logo">
      <a href=""><img src="/template/default/images/logo.png" alt=""></a>
     </figure> 
     <nav class="nav_wrap"> 
      <ul class="head_nav"> 
       <?php $__ibewWAKSsU__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__ibewWAKSsU__) || $__ibewWAKSsU__ instanceof \think\Collection || $__ibewWAKSsU__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ibewWAKSsU__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a href="<?php echo $nav['url']; ?>"><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
                <ul>
                    <?php $__UlBmSftaGI__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__UlBmSftaGI__) || $__UlBmSftaGI__ instanceof \think\Collection || $__UlBmSftaGI__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__UlBmSftaGI__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $son['url']; ?>"><?php echo $son['name']; ?></a>
                        <?php if($son['has_child']): ?>
                            <ul>
                            <?php $__g5SOduQPxK__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0"]); if(is_array($__g5SOduQPxK__) || $__g5SOduQPxK__ instanceof \think\Collection || $__g5SOduQPxK__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__g5SOduQPxK__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__g5SOduQPxK__; ?>
                            </ul> 
                        <?php endif; ?>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__UlBmSftaGI__; ?>
                </ul>
            <?php endif; ?>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ibewWAKSsU__; ?>
      </ul> 
      <!--change-language--> 
      <div class="change-language ensemble"> 
       <div class="change-language-title medium-title"> 
        <div class="language-flag language-flag-en">
         <a title="English" href="javascript:;"> <b class="country-flag"></b> <span>English</span> </a> 
        </div> 
       </div> 
       <div class="change-language-cont sub-content"></div> 
      </div> 
      <!--change-language--> 
     </nav> 
    </div> 
   </header> 

  <ul class="prisna-wp-translate-seo" id="prisna-translator-seo"> 
   <li class="language-flag language-flag-en"> <a title="English" href="javascript:;"> <b class="country-flag"></b> <span>English</span> </a> </li> 
   <li class="language-flag language-flag-fr"> <a title="Français" href="javascript:;"> <b class="country-flag"></b> <span>Françai</span> </a> </li> 
   <li class="language-flag language-flag-es"> <a title="Español" href="javascript:;"> <b class="country-flag"></b> <span>Español</span> </a> </li> 
   <li class="language-flag language-flag-de"> <a title="Deutsch" href="javascript:;"> <b class="country-flag"></b> <span>Deutsch</span> </a> </li> 
   <li class="language-flag language-flag-ro"> <a title="Română" href="javascript:;"> <b class="country-flag"></b> <span>Română</span> </a> </li> 
   <li class="language-flag language-flag-ar"> <a title="العربية" href="javascript:;"> <b class="country-flag"></b> <span>العربية</span> </a> </li> 
   <li class="language-flag language-flag-ko"> <a title="한국어" href="javascript:;"> <b class="country-flag"></b> <span>한국어</span> </a> </li> 
   <li class="language-flag language-flag-ja"> <a title="日本語" href="javascript:;"> <b class="country-flag"></b> <span>日本語</span> </a> </li> 
   <li class="language-flag language-flag-it"> <a title="Italiano" href="javascript:;"> <b class="country-flag"></b> <span>Italiano</span> </a> </li> 
   <li class="language-flag language-flag-pt"> <a title="Português" href="javascript:;"> <b class="country-flag"></b> <span>Português</span> </a> </li> 
   <li class="language-flag language-flag-ga"> <a title="Gaeilge" href="javascript:;"> <b class="country-flag"></b> <span>Gaeilge</span> </a> </li> 
   <li class="language-flag language-flag-da"> <a title="Dansk" href="javascript:;"><b class="country-flag"></b> <span>Dansk</span> </a> </li> 
   <li class="language-flag language-flag-cs"> <a title="Čeština" href="javascript:;"> <b class="country-flag"></b> <span>Čeština</span> </a> </li> 
   <li class="language-flag language-flag-ru"> <a title="Русский" href="javascript:;"> <b class="country-flag"></b> <span>Русский</span> </a> </li> 
   <li class="language-flag language-flag-af"> <a title="Afrikaans" href="javascript:;"> <b class="country-flag"></b> <span>Afrikaans</span> </a> </li> 
   <li class="language-flag language-flag-eu"> <a title="Euskara" href="javascript:;"> <b class="country-flag"></b> <span>Euskara</span> </a> </li> 
   <li class="language-flag language-flag-ca"> <a title="Català" href="javascript:;"> <b class="country-flag"></b> <span>Català</span> </a> </li> 
   <li class="language-flag language-flag-eo"> <a title="Esperanto" href="javascript:;"> <b class="country-flag"></b> <span>Esperanto</span> </a> </li> 
   <li class="language-flag language-flag-hi"> <a title="हिन्दी" href="javascript:;"> <b class="country-flag"></b> <span>हिन्दी</span> </a> </li> 
   <li class="language-flag language-flag-el"> <a title="Ελληνικά" href="javascript:;"> <b class="country-flag"></b> <span>Ελληνικά</span> </a> </li> 
   <li class="language-flag language-flag-ms"> <a title="Bahasa Melayu" href="javascript:;"> <b class="country-flag"></b> <span>Bahasa Melayu</span> </a> </li> 
   <li class="language-flag language-flag-pl"> <a title="Polski" href="javascript:;"> <b class="country-flag"></b> <span>Polski</span> </a> </li> 
   <li class="language-flag language-flag-sr"> <a title="Српски" href="javascript:;"> <b class="country-flag"></b> <span>Српски</span> </a> </li> 
   <li class="language-flag language-flag-sw"> <a title="Kiswahili" href="javascript:;"> <b class="country-flag"></b> <span>Kiswahili</span> </a> </li> 
   <li class="language-flag language-flag-th"> <a title="ภาษาไทย" href="javascript:;"> <b class="country-flag"></b> <span>ภาษาไทย</span> </a> </li> 
   <li class="language-flag language-flag-vi"> <a title="Tiếng Việt" href="javascript:;"> <b class="country-flag"></b> <span>Tiếng Việt</span> </a> </li> 
   <li class="language-flag language-flag-tr"> <a title="Türkçe" href="javascript:;"> <b class="country-flag"></b> <span>Türkçe</span> </a> </li> 
   <li class="language-flag language-flag-sv"> <a title="Svenska" href="javascript:;"> <b class="country-flag"></b> <span>Svenska</span> </a> </li> 
   <li class="language-flag language-flag-cy"> <a href="javascript:;"> <b class="country-flag"></b> <span>Cymraeg</span> </a> </li> 
   <li class="language-flag language-flag-sk"> <a title="Slovenčina" href="javascript:;"> <b class="country-flag"></b> <span>Slovenčina</span> </a> </li> 
   <li class="language-flag language-flag-lv"> <a title="Latviešu" href="javascript:;"> <b class="country-flag"></b> <span>Latviešu</span> </a> </li> 
   <li class="language-flag language-flag-mt"> <a title="Malti" href="javascript:;"> <b class="country-flag"></b> <span>Malti</span> </a> </li> 
   <li class="language-flag language-flag-hu"> <a title="Magyar" href="javascript:;"> <b class="country-flag"></b> <span>Magyar</span> </a> </li> 
   <li class="language-flag language-flag-gl"> <a title="Galego" href="javascript:;"> <b class="country-flag"></b> <span>Galego</span> </a> </li> 
   <li class="language-flag language-flag-gu"> <a title="ગુજરાતી" href="javascript:;"> <b class="country-flag"></b> <span>ગુજરાતી</span> </a> </li> 
   <li class="language-flag language-flag-et"> <a title="Eesti Keel" href="javascript:;"> <b class="country-flag"></b> <span>Eesti Keel</span> </a> </li> 
   <li class="language-flag language-flag-bn"> <a title="বাংলা" href="javascript:;"> <b class="country-flag"></b> <span>বাংলা</span> </a> </li> 
   <li class="language-flag language-flag-sq"> <a title="Shqip" href="javascript:;"> <b class="country-flag"></b> <span>Shqip</span> </a> </li> 
   <li class="language-flag language-flag-be"> <a title="беларуская мова" href="javascript:;"> <b class="country-flag"></b> <span>беларуская мова</span> </a> </li> 
   <li class="language-flag language-flag-nl"> <a title="Nederlands" href="javascript:;"> <b class="country-flag"></b> <span>Nederlands</span> </a> </li> 
   <li class="language-flag language-flag-tl"> <a title="Tagalog" href="javascript:;"> <b class="country-flag"></b> <span>Tagalog</span> </a> </li> 
   <li class="language-flag language-flag-ka"> <a title="ქართული" href="javascript:;"> <b class="country-flag"></b> <span>ქართული</span> </a> </li> 
   <li class="language-flag language-flag-is"> <a title="Íslenska" href="javascript:;"> <b class="country-flag"></b> <span>Íslenska</span> </a> </li> 
   <li class="language-flag language-flag-ht"> <a title="Kreyòl Ayisyen" href="javascript:;"> <b class="country-flag"></b> <span>Kreyòl Ayisyen</span> </a> </li> 
   <li class="language-flag language-flag-lt"> <a title="Lietuvių" href="javascript:;"> <b class="country-flag"></b> <span>Lietuvių</span> </a> </li> 
   <li class="language-flag language-flag-no"> <a title="Norsk‎" href="javascript:;"> <b class="country-flag"></b> <span>Norsk‎</span> </a> </li> 
   <li class="language-flag language-flag-sl"> <a title="slovenščina" href="javascript:;"> <b class="country-flag"></b> <span>slovenščina</span> </a> </li> 
   <li class="language-flag language-flag-ta"> <a title="தமிழ்" href="javascript:;"> <b class="country-flag"></b> <span>தமிழ்</span> </a> </li> 
   <li class="language-flag language-flag-uk"> <a title="Українська" href="javascript:;"> <b class="country-flag"></b> <span>Українська</span> </a> </li> 
   <li class="language-flag language-flag-yi"> <a title="ײִדיש" href="javascript:;"> <b class="country-flag"></b> <span>ײִדיש</span> </a> </li> 
   <li class="language-flag language-flag-ur"> <a title="اردو" href="javascript:;"> <b class="country-flag"></b> <span>اردو</span> </a> </li> 
   <li class="language-flag language-flag-te"> <a title="తెలుగు" href="javascript:;"> <b class="country-flag"></b> <span>తెలుగు</span> </a> </li> 
   <li class="language-flag language-flag-fa"> <a title="فارسی" href="javascript:;"> <b class="country-flag"></b> <span>فارسی</span> </a> </li> 
   <li class="language-flag language-flag-mk"> <a title="македонски" href="javascript:;"> <b class="country-flag"></b> <span>македонски</span> </a> </li> 
   <li class="language-flag language-flag-kn"> <a title="ಕನ್ನಡ" href="javascript:;"> <b class="country-flag"></b> <span>ಕನ್ನಡ</span> </a> </li> 
   <li class="language-flag language-flag-id"> <a title="Bahasa Indonesia" href="javascript:;"> <b class="country-flag"></b> <span>Bahasa Indonesia</span> </a> </li> 
   <li class="language-flag language-flag-iw"> <a title="עברית" href="javascript:;"> <b class="country-flag"></b> <span>עברית</span> </a> </li> 
   <li class="language-flag language-flag-fi"> <a title="Suomi" href="javascript:;"> <b class="country-flag"></b> <span>Suomi</span> </a> </li> 
   <li class="language-flag language-flag-hr"> <a title="Hrvatski" href="javascript:;"> <b class="country-flag"></b> <span>Hrvatski</span> </a> </li> 
   <li class="language-flag language-flag-bg"> <a title="Български" href="javascript:;"> <b class="country-flag"></b> <span>Български</span> </a> </li> 
   <li class="language-flag language-flag-az"> <a title="Azerbaijani" href="javascript:;"> <b class="country-flag"></b> <span>Azerbaijani</span> </a> </li> 
  </ul> 
   <!--// web_head end --> 
   <!-- banner --> 
   <section class="slider_banner swiper-container"> 
    <div class="swiper-wrapper"> 
     <div class="swiper-slide">
      <a href=""><img src="/template/default/images/banner01.jpg" alt=""></a>
     </div> 
     <div class="swiper-slide">
      <a href=""><img src="/template/default/images/banner01.jpg" alt=""></a>
     </div> 
     <div class="swiper-slide">
      <a href=""><img src="/template/default/images/banner01.jpg" alt=""></a>
     </div> 
     <div class="swiper-slide">
      <a href=""><img src="/template/default/images/banner01.jpg" alt=""></a>
     </div> 
    </div> 
    <div class="slider_swiper_control"> 
     <div class="banner_button_prev"></div> 
     <div class="banner_button_next"></div> 
    </div> 
    <div class="swiper-pagination swiper-pagination-white"></div> 
   </section> 
   <!-- web_main start --> 
   <section class="web_main index_main"> 
    <!--index_product--> 
    <section class="index_feature_product" style="background-image: url(/template/default/images/productbg.jpg)"> 
     <section class="layout"> 
      <div class="index_hd wow fadeInUpA" data-wow-delay=".8s" data-wow-duration="1s"> 
       <h2 class="hd_title">product</h2> 
       <p class="sub_tit">pharmaceutical machineries, packing materials and </p> 
      </div> 
      <section class="feature_item_wrap wow fadeInUpA" data-wow-delay="1.3s" data-wow-duration=".8s"> 
       <div class="feature_items"> 
        <ul class="swiper-wrapper"> 
         <li class="feature_item swiper-slide"> 
          <figure> 
           <span class="item_img"><img src="/template/default/images/pd01.jpg"></span> 
           <h4 class="pd_tit"> <a href="">Chemical products</a></h4> 
          </figure> </li> 
         <li class="feature_item swiper-slide"> 
          <figure> 
           <span class="item_img"><img src="/template/default/images/pd02.jpg"></span> 
           <h4 class="pd_tit"> <a href="">Ingredient powder </a></h4> 
          </figure> </li> 
         <li class="feature_item swiper-slide"> 
          <figure> 
           <span class="item_img"><img src="/template/default/images/pd03.jpg"></span> 
           <h4 class="pd_tit"> <a href="">extractive </a></h4> 
          </figure> </li> 
         <li class="feature_item swiper-slide"> 
          <figure> 
           <span class="item_img"><img src="/template/default/images/pd04.jpg"></span> 
           <h4 class="pd_tit"> <a href="">Chemical products</a></h4> 
          </figure> </li> 
         <li class="feature_item swiper-slide"> 
          <figure> 
           <span class="item_img"><img src="/template/default/images/pd01.jpg"></span> 
           <h4 class="pd_tit"> <a href="">Chemical products</a></h4> 
          </figure> </li> 
         <li class="feature_item swiper-slide"> 
          <figure> 
           <span class="item_img"><img src="/template/default/images/pd02.jpg"></span> 
           <h4 class="pd_tit"> <a href="">Ingredient powder </a></h4> 
          </figure> </li> 
         <li class="feature_item swiper-slide"> 
          <figure> 
           <span class="item_img"><img src="/template/default/images/pd03.jpg"></span> 
           <h4 class="pd_tit"> <a href="">extractive </a></h4> 
          </figure> </li> 
         <li class="feature_item swiper-slide"> 
          <figure> 
           <span class="item_img"><img src="/template/default/images/pd04.jpg"></span> 
           <h4 class="pd_tit"> <a href="">Chemical products</a></h4> 
          </figure> </li> 
        </ul> 
        <div class="feature-pagination"></div> 
        <div class="feature_button_control"> 
         <div class="feature_button_prev"></div> 
         <div class="feature_button_next"></div> 
        </div> 
       </div> 
       <a href="" class="more_btn">more&gt;&gt;</a> 
      </section> 
     </section> 
    </section> 
    <!--index_product end--> 
    <section class="company_information_wrap"> 
     <section class="layout"> 
      <div class="index_hd wow fadeInUpA" data-wow-delay=".8s" data-wow-duration="1s"> 
       <h2 class="hd_title">about us</h2> 
       <p class="sub_tit">About factory description</p> 
      </div> 
      <div class="company_info_wrap"> 
       <div class="company_img wow fadeInLeftA" data-wow-delay="1s" data-wow-duration="1s">
        <img src="/template/default/images/about.jpg">
       </div> 
       <div class="company_information wow fadeInRightA" data-wow-delay="1s" data-wow-duration="1s"> 
        <h4 class="about_tit">what we do</h4> 
        <div class="about_text">
          Chengdu Chemical Co., Ltd. was founded in 2000 With mature technology and excellent R &amp; D personnel, we are getting better and better on the road of developing products In 2019, our company has successfully registered as a listed company, bringing different quality assurance to customers, which is worthy of your trust and attention Good technology makes good products
        </div> 
        <a href="" class="about_btn">more&gt;&gt;</a> 
       </div> 
      </div> 
     </section> 
    </section> 
    <section class="index_inquiry_wrap" style="background-image:url(/template/default/images/inquriybg.jpg)"> 
     <div class="inquiry_desc wow fadeInUpA" data-wow-delay=".8s" data-wow-duration="1s">
      learn more
     </div> 
     <p class=" wow fadeInUpA" data-wow-delay="1.2s" data-wow-duration="1s">Our newsletters, the latest information about our products, news and special offers.</p> 
     <a href="javascript:" class="inquiry_btn wow fadeInUpA" data-wow-delay="1.4s" data-wow-duration="1">Click for manual</a> 
    </section> 
    <section class="index_advantage_container"> 
     <section class="layout"> 
      <ul class="advantage_items"> 
       <li class="advantage_item wow fadeInUpA" data-wow-delay="1.8s" data-wow-duration="1s"> <span class="icon_img"><img src="/template/default/images/icon01.png"></span> 
        <div class="advantage_info"> 
         <h4 class="ad_tit"><a href="">personnel</a></h4> 
         <p class="ad_desc">The company introduces a large number of talents, researches projects and is responsible for customers</p> 
        </div> </li> 
       <li class="advantage_item wow fadeInUpA" data-wow-delay="2s" data-wow-duration="1s"> <span class="icon_img"><img src="/template/default/images/icon02.png"></span> 
        <div class="advantage_info"> 
         <h4 class="ad_tit"><a href="">Research</a></h4> 
         <p class="ad_desc">Professional research project team for different customer needs</p> 
        </div> </li> 
       <li class="advantage_item wow fadeInUpA" data-wow-delay="2.2s" data-wow-duration="1s"> <span class="icon_img"><img src="/template/default/images/icon03.png"></span> 
        <div class="advantage_info"> 
         <h4 class="ad_tit"><a href="">technology</a></h4> 
         <p class="ad_desc">New technology transformation mode,research high quality products </p> 
        </div> </li> 
      </ul> 
     </section> 
     <span class="position_icon wow zoomInA" data-wow-delay="2.2s" data-wow-duration="1s"><img src="/template/default/images/logo.png"></span> 
    </section> 
    <!--index_application_container--> 
    <section class="index_application_container"> 
     <section class="layout"> 
      <div class="index_hd wow fadeInUpA" data-wow-delay=".8s" data-wow-duration=".8s"> 
       <h2 class="hd_title">application</h2> 
       <p class="sub_tit">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> 
      </div> 
      <ul class="application_items"> 
       <li class="application_item wow fadeInUpA" data-wow-delay="1.2s" data-wow-duration="1s"> <span class="application_img"><img src="/template/default/images/category01.jpg"></span> <h4 class="application_info"><a href="">Cosmetic additives</a></h4> </li> 
       <li class="application_item wow fadeInUpA" data-wow-delay="1.4s" data-wow-duration="1s"> <span class="application_img"><img src="/template/default/images/category02.jpg"></span> <h4 class="application_info"><a href="">food additives</a></h4> </li> 
       <li class="application_item wow fadeInUpA" data-wow-delay="1.6s" data-wow-duration="1s"> <span class="application_img"><img src="/template/default/images/category03.jpg"></span> <h4 class="application_info"><a href="">Animal feed additive</a></h4> </li> 
       <li class="application_item wow fadeInUpA" data-wow-delay="1.8s" data-wow-duration="1s"> <span class="application_img"><img src="/template/default/images/category04.jpg"></span> <h4 class="application_info"><a href="">Agricultural fertilizer additive</a></h4> </li> 
      </ul> 
     </section> 
    </section> 
    <!--index_application_container end--> 
    <section class="icon_list_contianer layout" style="background-image: url(/template/default/images/icons_bg.jpg)"> 
     <ul class="icon_items"> 
      <li class="icon_item wow fadeInUpA" data-wow-delay=".8s" data-wow-duration="1s"> <span class="icon_img"><img src="/template/default/images/01.png" alt=""></span> <span class="icon_num">3000</span> <h3 class="icon_info">Lorem ipsum</h3> </li> 
      <li class="icon_item wow fadeInUpA" data-wow-delay=".8s" data-wow-duration="1s"> <span class="icon_img"><img src="/template/default/images/02.png" alt=""></span> <span class="icon_num">3000</span> <h3 class="icon_info">Lorem ipsum dolor</h3> </li> 
      <li class="icon_item wow fadeInUpA" data-wow-delay="1s" data-wow-duration="1s"> <span class="icon_img"><img src="/template/default/images/03.png" alt=""></span> <span class="icon_num">3000</span> <h3 class="icon_info">Lorem ipsum dolor sit ame consectetur</h3> </li> 
      <li class="icon_item wow fadeInUpA" data-wow-delay="1.2s" data-wow-duration="1s"> <span class="icon_img"><img src="/template/default/images/04.png" alt=""></span> <span class="icon_num">3000</span> <h3 class="icon_info">Lorem ipsum dolor sit amet</h3> </li> 
      <li class="icon_item wow fadeInUpA" data-wow-delay="1.4s" data-wow-duration="1s"> <span class="icon_img"><img src="/template/default/images/05.png" alt=""></span> <span class="icon_num">3000</span> <h3 class="icon_info">Lorem ipsum dolor sit</h3> </li> 
     </ul> 
    </section> 
    <!--index_news_container--> 
    <section class="index_news_container"> 
     <section class="layout"> 
      <div class="index_hd wow fadeInUpA" data-wow-delay=".8s" data-wow-duration=".8s"> 
       <h2 class="hd_title">news</h2> 
       <p class="sub_tit">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> 
      </div> 
      <div class="news_container"> 
       <div class="news_right wow fadeInRightA" data-wow-delay=".8s" data-wow-duration="1s"> 
        <span class="news_img"><img src="/template/default/images/news01.jpg"></span> 
        <div class="news_conut"> 
         <time class="news_time"><span>10</span><span>2020/1</span></time> 
         <h4 class="news_title"><a href="">Won the trophy on the same day, ranking ...</a></h4> 
         <div class="news_info">
           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
         </div> 
        </div> 
       </div> 
       <div class="news_left wow fadeInLeftA" data-wow-delay=".8s" data-wow-duration="1s"> 
        <div class="news_item"> 
         <figure> 
          <time class="news_time"><span>10</span><span>2020/1</span></time> 
          <h4 class="news_title"><a href="">Won the trophy on the same day, ranking first in the industry ...</a></h4> 
          <div class="news_info">
           Obtain certain achievements in the industry and give customers trust
          </div> 
          <a href="" class="news_more">more&gt;&gt;</a>
         </figure> 
        </div> 
        <div class="news_item"> 
         <figure> 
          <time class="news_time"><span>10</span><span>2020/1</span></time> 
          <h4 class="news_title"><a href="">Good technology makes products...</a></h4> 
          <div class="news_info">
           Absolute guarantee in quality, leading in the industry in service
          </div> 
          <a href="" class="news_more">more&gt;&gt;</a>
         </figure> 
        </div> 
       </div> 
      </div> 
     </section> 
    </section> 
    <!--index_news_container end--> 
   </section> 
   <!--// web_main end --> 
   <!-- web_footer start --> 
   <footer class="web_footer"> 
    <ul class="foot_nav wow fadeInUpA" data-wow-delay="1s" data-wow-duration=".8s"> 
     <li><a href="">home</a></li> 
     <li><a href="">about us</a></li> 
     <li><a href="">product</a></li> 
     <li><a href="">news</a></li> 
     <li><a href="">faq</a></li> 
     <li><a href="">contact us</a></li> 
    </ul> 
    <div class="foot_bottom layout"> 
     <ul class="foot_contact wow fadeInUpA" data-wow-delay="1.3s" data-wow-duration=".8s"> 
      <li class="foot_email"><a href="matial:">info@psdfreebies.com</a></li> 
      <li class="foot_address">Address:No. 18, Huashan Road, Xinbei District Changzhou, Jiangsu, China (Mainland)</li> 
      <li class="foot_phone"><a href="tel:">Tel:+123 456 7890</a></li> 
     </ul> 
     <ul class="foot_sns wow fadeInUpA" data-wow-delay="1.5s" data-wow-duration=".8s"> 
      <li><a href=""><img src="/template/default/images/sns01.png" alt=""></a></li> 
      <li><a href=""><img src="/template/default/images/sns02.png" alt=""></a></li> 
      <li><a href=""><img src="/template/default/images/sns03.png" alt=""></a></li> 
      <li><a href=""><img src="/template/default/images/sns04.png" alt=""></a></li> 
     </ul> 
     <div class="copyright wow fadeInUpA" data-wow-delay="1.7s" data-wow-duration=".8s">
      Copyright © 2019 
      <span class="txt_impt">Goodao.cn</span> All Rights Reserved
     </div> 
    </div> 
   </footer> 
   <!--// web_footer end --> 
  </div> 
  <!--// container end --> 
  <aside class="scrollsidebar" id="scrollsidebar"> 
   <section class="side_content"> 
    <div class="side_list"> 
     <header class="hd">
      <img src="/template/default/images/title_pic.png" alt="">
     </header> 
     <div class="cont"> 
      <li><a class="email" href="javascript:">Send Email</a></li> 
      <li><a class="skype" href="">Skype Chat</a></li> 
      <li><a class="inquiry" href="">Send Inquiry</a></li> 
     </div> 
     <div class="t-code">
      <img src="/template/default/images/t_code.png">
     </div> 
     <div class="side_title">
      LiveChat
      <a class="close_btn"><span>关闭</span></a>
     </div> 
    </div> 
   </section> 
   <div class="show_btn"></div> 
  </aside> 
  <div class="inquiry-pop-bd"> 
   <div class="inquiry-pop">
    <i class="ico-close-pop" onclick="hideMsgPop();"></i> 
    <!-- <script type="text/javascript" src="https://www.globalso.site/php/app.php?widget-init-inline.js"></script>--> 
   </div> 
  </div>
  <script src="/template/default/js/jquery.min.js"></script> 
  <script src="/template/default/js/common.js"></script> 
 </body>
</html> 