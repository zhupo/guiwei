<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:90:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/addons/cms/view/default1/index.html";i:1688635876;s:95:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/addons/cms/view/default1/common/top.html";i:1688612883;s:96:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/addons/cms/view/default1/common/foot.html";i:1688698032;}*/ ?>
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
       <a href="">Phone:<?php echo $site['tell']; ?></a>
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
        <a href=""><?php if(!(empty($site['logo']) || (($site['logo'] instanceof \think\Collection || $site['logo'] instanceof \think\Paginator ) && $site['logo']->isEmpty()))): ?><img style="width: 150px; height: 42px;" src="<?php echo $site['logo']; ?>"><?php endif; ?></a>
      <!-- <img src="/template/default/images/logo.png" alt=""></a> -->
     </figure> 
     <nav class="nav_wrap"> 
      <ul class="head_nav"> 
       <?php $__x0UZaVwORK__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__x0UZaVwORK__) || $__x0UZaVwORK__ instanceof \think\Collection || $__x0UZaVwORK__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__x0UZaVwORK__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a href="<?php echo $nav['url']; ?>"><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
                <ul>
                    <?php $__TFEDglV6Wr__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__TFEDglV6Wr__) || $__TFEDglV6Wr__ instanceof \think\Collection || $__TFEDglV6Wr__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__TFEDglV6Wr__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $son['url']; ?>"><?php echo $son['name']; ?></a>
                        <?php if($son['has_child']): ?>
                            <ul>
                            <?php $__3DiOQH2P4W__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0"]); if(is_array($__3DiOQH2P4W__) || $__3DiOQH2P4W__ instanceof \think\Collection || $__3DiOQH2P4W__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__3DiOQH2P4W__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                                <li><a href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__3DiOQH2P4W__; ?>
                            </ul> 
                        <?php endif; ?>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__TFEDglV6Wr__; ?>
                </ul>
            <?php endif; ?>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__x0UZaVwORK__; ?>
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
   <li class="language-flag language-flag-frfsdajkfjasdkfjaskdfja"> <a title="Chinese" href="javascript:;"> <b class="country-flag"></b> <span>中文</span> </a> </li> 
   <!-- <li class="language-flag language-flag-es"> <a title="Español" href="javascript:;"> <b class="country-flag"></b> <span>Español</span> </a> </li> 
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
   <li class="language-flag language-flag-az"> <a title="Azerbaijani" href="javascript:;"> <b class="country-flag"></b> <span>Azerbaijani</span> </a> </li>  -->
  </ul> 
   <!--// web_head end --> 
   <!-- banner --> 
   <section class="slider_banner swiper-container"> 
    <div class="swiper-wrapper"> 
    <?php $__tIPrVO1Tgl__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"banner","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__tIPrVO1Tgl__) || $__tIPrVO1Tgl__ instanceof \think\Collection || $__tIPrVO1Tgl__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__tIPrVO1Tgl__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>   
      <div class="swiper-slide">
        <a href="<?php echo $block['url']; ?>"><img src="<?php echo $block['image']; ?>" alt=""></a>
      </div> 
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__tIPrVO1Tgl__; ?>
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
       <p class="sub_tit">Dietary fiber drink. . . </p> 
      </div> 
      <section class="feature_item_wrap wow fadeInUpA" data-wow-delay="1.3s" data-wow-duration=".8s"> 
       <div class="feature_items"> 
        <ul class="swiper-wrapper"> 
        <?php $__VnvCeikMyN__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>"44","orderby"=>"weigh","orderway"=>"asc"]); if(is_array($__VnvCeikMyN__) || $__VnvCeikMyN__ instanceof \think\Collection || $__VnvCeikMyN__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__VnvCeikMyN__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;$__QhjIYRplB8__ = \addons\cms\model\Archives::getArchivesList(["id"=>"prod","channel"=>$channel['id'],"orderby"=>"weigh","orderway"=>"desc","row"=>"20"]); if(is_array($__QhjIYRplB8__) || $__QhjIYRplB8__ instanceof \think\Collection || $__QhjIYRplB8__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__QhjIYRplB8__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$prod): $mod = ($i % 2 );++$i;?>
        <li class="feature_item swiper-slide"> 
          <figure> 
           <span class="item_img"><img src="<?php echo $prod['image']; ?>"></span> 
           <h4 class="pd_tit"> <a href="<?php echo $prod['url']; ?>"><?php echo $prod['title']; ?></a></h4> 
          </figure> </li>
          <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__QhjIYRplB8__; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__VnvCeikMyN__; ?>
        </ul> 
        <div class="feature-pagination"></div> 
        <div class="feature_button_control"> 
         <div class="feature_button_prev"></div> 
         <div class="feature_button_next"></div> 
        </div> 
       </div> 
       <a href="/Products" class="more_btn">more&gt;&gt;</a> 
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
        <?php $__1qk0IBuTXJ__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"about","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__1qk0IBuTXJ__) || $__1qk0IBuTXJ__ instanceof \think\Collection || $__1qk0IBuTXJ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__1qk0IBuTXJ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
          <img src="<?php echo $block['image']; ?>" alt="About Us">
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__1qk0IBuTXJ__; ?>
       </div> 
       <div class="company_information wow fadeInRightA" data-wow-delay="1s" data-wow-duration="1s" style="height: 500px; overflow: hidden;"> 
        <h4 class="about_tit">what we do</h4> 
        <?php $__9OEfKQcTCW__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"about","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__9OEfKQcTCW__) || $__9OEfKQcTCW__ instanceof \think\Collection || $__9OEfKQcTCW__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__9OEfKQcTCW__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
        <div class="about_text">
            <?php echo $block['content']; ?> 
        </div> 
        <a href="<?php echo $block['url']; ?>" class="about_btn">more&gt;&gt;</a> 
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__9OEfKQcTCW__; ?>
       </div> 
      </div> 
     </section> 
    </section> 
    <!-- <section class="index_inquiry_wrap" style="background-image:url(/template/default/images/inquriybg.jpg)">  -->
    <section class="index_inquiry_wrap" style="background-image:url(/template/default/images/20230703113032.jpg)"> 
     <div class="inquiry_desc wow fadeInUpA" data-wow-delay=".8s" data-wow-duration="1s">
      learn more
     </div> 
     <p class=" wow fadeInUpA" data-wow-delay="1.2s" data-wow-duration="1s">Our newsletters, the latest information about our products, news and special offers.</p> 
     <a href="/about" class="inquiry_btn wow fadeInUpA" data-wow-delay="1.4s" data-wow-duration="1">Click for manual</a> 
    </section> 
    <section class="index_advantage_container"> 
     <section class="layout"> 
      <ul class="advantage_items"> 
        <?php $__wIXZRF29EQ__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"about-info","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__wIXZRF29EQ__) || $__wIXZRF29EQ__ instanceof \think\Collection || $__wIXZRF29EQ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__wIXZRF29EQ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;if(!(empty($block['images']) || (($block['images'] instanceof \think\Collection || $block['images'] instanceof \think\Paginator ) && $block['images']->isEmpty()))): if(is_array(explode(',',$block['images'])) || explode(',',$block['images']) instanceof \think\Collection || explode(',',$block['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
              <li class="advantage_item wow fadeInUpA" data-wow-delay="1.8s" data-wow-duration="1s"> <span class="icon_img"><img src="<?php echo $image; ?>"></span> 
                <div class="advantage_info"> 
                 <h4 class="ad_tit"><a href=""><?php echo $block['intro'][$key]['info']; ?></a></h4> 
                 <p class="ad_desc"><?php echo $block['intro'][$key]['txt']; ?></p> 
                </div> </li> 
          <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__wIXZRF29EQ__; ?>
      </ul> 
     </section> 
     <span class="position_icon wow zoomInA" data-wow-delay="2.2s" data-wow-duration="1s"><img src="/template/default/images/logo.png"></span> 
    </section> 
    <!--index_application_container--> 
    <section class="index_application_container"> 
     <section class="layout"> 
      <div class="index_hd wow fadeInUpA" data-wow-delay=".8s" data-wow-duration=".8s"> 
       <h2 class="hd_title">Product Highlights</h2> 
       <!-- <p class="sub_tit">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>  -->
      </div> 
      <ul class="application_items"> 
        <?php $__AJm9CFhWXN__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"hlight","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__AJm9CFhWXN__) || $__AJm9CFhWXN__ instanceof \think\Collection || $__AJm9CFhWXN__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__AJm9CFhWXN__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;if(!(empty($block['images']) || (($block['images'] instanceof \think\Collection || $block['images'] instanceof \think\Paginator ) && $block['images']->isEmpty()))): if(is_array(explode(',',$block['images'])) || explode(',',$block['images']) instanceof \think\Collection || explode(',',$block['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
              <li class="application_item wow fadeInUpA" data-wow-delay="1.2s" data-wow-duration="1s"> <span class="application_img"><img src="<?php echo $image; ?>"></span> <h4 class="application_info"><a href=""><?php echo $block['intro'][$key]['txt']; ?></a></h4> </li> 
        <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__AJm9CFhWXN__; ?>
      </ul> 
     </section> 
    </section> 
    <!--index_application_container end--> 
    <section class="icon_list_contianer layout" style="background-image: url(/template/default/images/icons_bg.jpg)"> 
     <ul class="icon_items"> 
      <?php $__eLb62cPBED__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"abount-params","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__eLb62cPBED__) || $__eLb62cPBED__ instanceof \think\Collection || $__eLb62cPBED__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__eLb62cPBED__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;if(!(empty($block['images']) || (($block['images'] instanceof \think\Collection || $block['images'] instanceof \think\Paginator ) && $block['images']->isEmpty()))): if(is_array(explode(',',$block['images'])) || explode(',',$block['images']) instanceof \think\Collection || explode(',',$block['images']) instanceof \think\Paginator): $i = 0; $__LIST__ = explode(',',$block['images']);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$image): $mod = ($i % 2 );++$i;?>
              <li class="icon_item wow fadeInUpA" data-wow-delay=".8s" data-wow-duration="1s"> <span class="icon_img"><img src="<?php echo $image; ?>" alt=""></span> <span class="icon_num"><?php echo $block['intro'][$key]['txt']; ?></span> <h3 class="icon_info"><?php echo $block['intro'][$key]['info']; ?></h3> </li> 
        <?php endforeach; endif; else: echo "" ;endif; endif; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__eLb62cPBED__; ?>
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
        <?php $__kxdrJTGN7Z__ = \addons\cms\model\Archives::getArchivesList(["id"=>"new","channel"=>"67","orderby"=>"weigh","orderway"=>"desc","row"=>"1","addon"=>"content"]); if(is_array($__kxdrJTGN7Z__) || $__kxdrJTGN7Z__ instanceof \think\Collection || $__kxdrJTGN7Z__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__kxdrJTGN7Z__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?>
       <div class="news_right wow fadeInRightA" data-wow-delay=".8s" data-wow-duration="1s"> 
        <span class="news_img"><img src="<?php echo $new['image']; ?>"></span> 
        <div class="news_conut"> 
         <time class="news_time"><span><?php echo date("d",$new['publishtime']); ?></span><span><?php echo date("Y-m",$new['publishtime']); ?></span></time> 
         <h4 class="news_title"><a href=<?php echo $new['url']; ?>><?php echo $new['title']; ?></a></h4> 
         <div class="news_info">
           <?php echo $new['description']; ?>
         </div> 
        </div> 
       </div> 
       <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__kxdrJTGN7Z__; ?>
       <div class="news_left wow fadeInLeftA" data-wow-delay=".8s" data-wow-duration="1s"> 
        <?php $__KOogwtQqvh__ = \addons\cms\model\Archives::getArchivesList(["id"=>"new","channel"=>"68","orderby"=>"weigh","orderway"=>"desc","row"=>"2","addon"=>"content"]); if(is_array($__KOogwtQqvh__) || $__KOogwtQqvh__ instanceof \think\Collection || $__KOogwtQqvh__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__KOogwtQqvh__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?>
        <div class="news_item"> 
          <figure> 
           <time class="news_time"><span><?php echo date("d",$new['publishtime']); ?></span><span><?php echo date("Y-m",$new['publishtime']); ?></span></time> 
           <h4 class="news_title"><a href=<?php echo $new['url']; ?>><?php echo $new['title']; ?></a></h4> 
           <div class="news_info">
            <?php echo $new['description']; ?>
           </div> 
           <a href="<?php echo $new['url']; ?>" class="news_more">more&gt;&gt;</a>
          </figure> 
         </div> 
         <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__KOogwtQqvh__; ?>
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
     <?php $__8em3VadDU4__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__8em3VadDU4__) || $__8em3VadDU4__ instanceof \think\Collection || $__8em3VadDU4__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__8em3VadDU4__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li><a href="<?php echo $nav['url']; ?>"><?php echo $nav['name']; ?></a> </li>
     <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__8em3VadDU4__; ?>
    </ul> 
    <div class="foot_bottom layout"> 
     <ul class="foot_contact wow fadeInUpA" data-wow-delay="1.3s" data-wow-duration=".8s"> 
      <li class="foot_email"><a style="text-transform: lowercase;" href="mailto:<?php echo $site['email']; ?>"><?php echo $site['emaill']; ?></a></li> 
      <li class="foot_address">Address:West of Yaodu Avenue, Tuojiang Town, Jianghua Yao Autonomous County, Yongzhou City, Hunan Province, P.R,China</li> 
      <li class="foot_phone"><a href="tel:{site.tell}">Tel:<?php echo $site['tell']; ?></a></li> 
     </ul> 
     <ul class="foot_sns wow fadeInUpA" data-wow-delay="1.5s" data-wow-duration=".8s"> 
        <?php $__K8hgi0zf3d__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"media","orderby"=>"weigh","orderway"=>"asc"]); if(is_array($__K8hgi0zf3d__) || $__K8hgi0zf3d__ instanceof \think\Collection || $__K8hgi0zf3d__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__K8hgi0zf3d__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo $block['url']; ?>"><img src="<?php echo $block['image']; ?>" alt="<?php echo $block['title']; ?>"></a></li> 
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__K8hgi0zf3d__; ?>
     </ul> 
     <div class="copyright wow fadeInUpA" data-wow-delay="1.7s" data-wow-duration=".8s">
      <!-- Copyright © 2019 
      <span class="txt_impt">Goodao.cn</span> All Rights Reserved -->
      <?php echo $site['beian']; ?>
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
      <li><a class="email" href="mailto:<?php echo $site['email']; ?>">Send Email</a></li> 
      <!-- <li><a class="skype" href="">Skype Chat</a></li>
      <li><a class="inquiry" href="">Send Inquiry</a>  -->
     </div> 
     <div class="t-code">
    <?php $__md9S2zhFwy__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"online-service","orderby"=>"weigh","orderway"=>"asc"]); if(is_array($__md9S2zhFwy__) || $__md9S2zhFwy__ instanceof \think\Collection || $__md9S2zhFwy__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__md9S2zhFwy__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
      <img src="<?php echo $block['image']; ?>">
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__md9S2zhFwy__; ?>
      
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