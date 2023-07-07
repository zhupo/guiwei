<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:97:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/addons/cms/view/default1/show_product.html";i:1688720911;s:95:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/addons/cms/view/default1/common/top.html";i:1688612883;s:95:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/addons/cms/view/default1/common/mbx.html";i:1688701138;s:96:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/addons/cms/view/default1/common/left.html";i:1688712927;s:96:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/addons/cms/view/default1/common/foot.html";i:1688698032;}*/ ?>
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
       <?php $__ZRI2tA4ijJ__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__ZRI2tA4ijJ__) || $__ZRI2tA4ijJ__ instanceof \think\Collection || $__ZRI2tA4ijJ__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ZRI2tA4ijJ__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a href="<?php echo $nav['url']; ?>"><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
                <ul>
                    <?php $__vBQSuAIgnK__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__vBQSuAIgnK__) || $__vBQSuAIgnK__ instanceof \think\Collection || $__vBQSuAIgnK__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__vBQSuAIgnK__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $son['url']; ?>"><?php echo $son['name']; ?></a>
                        <?php if($son['has_child']): ?>
                            <ul>
                            <?php $__xaiULVzk5W__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0"]); if(is_array($__xaiULVzk5W__) || $__xaiULVzk5W__ instanceof \think\Collection || $__xaiULVzk5W__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__xaiULVzk5W__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                                <li><a href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__xaiULVzk5W__; ?>
                            </ul> 
                        <?php endif; ?>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__vBQSuAIgnK__; ?>
                </ul>
            <?php endif; ?>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ZRI2tA4ijJ__; ?>
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
   <section class="sys_sub_head"> 
    <div class="head_bn_item">
     <img src="<?php echo $__CHANNEL__['image']; ?>" alt="">
    </div> 
    <h2 class="pagnation_title"><?php echo $__CHANNEL__['name']; ?></h2> 
   </section> 
   <section class="path_bar"> 
    <ul> 
     <!-- <li>Products</li>  -->
     <?php $__3BgwWuRTF2__ = \addons\cms\model\Channel::getBreadcrumb($__CHANNEL__??[], $__ARCHIVES__??[], $__TAGS__??[], $__PAGE__??[], $__DIYFORM__??[]); if(is_array($__3BgwWuRTF2__) || $__3BgwWuRTF2__ instanceof \think\Collection || $__3BgwWuRTF2__ instanceof \think\Paginator): $k = 0; $__LIST__ = $__3BgwWuRTF2__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($k % 2 );++$k;?>
     <li class="nav_current"><a title="<?php echo $item['name']; ?>" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a></li> 
     <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__3BgwWuRTF2__; ?>
    </ul> 
   </section>  
   <!-- page-layout start --> 
   <section class="web_main page_main"> 
    <div class="layout"> 
     <!-- aside start --> 
     <aside class="aside"> 
    <div class="aside-wrap"> 
     <div class="side-widget"> 
      <div class="side-tit-bar"> 
       <h2 class="side-tit">Product Categories</h2> 
      </div> 
      <ul class="side-cate"> 
        <?php $__ulW5NE1Aq8__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>"44","row"=>"100"]); if(is_array($__ulW5NE1Aq8__) || $__ulW5NE1Aq8__ instanceof \think\Collection || $__ulW5NE1Aq8__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__ulW5NE1Aq8__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;?>
            <li class="<?php if($channel['is_active']): ?>nav-current<?php endif; ?>"><a href="<?php echo $channel['url']; ?>"><?php echo $channel['name']; ?></a> 
                <?php if($channel['has_child']): ?>
                <ul class="sub-menu"> 
                    <?php $__gdseLm5x9G__ = \addons\cms\model\Channel::getChannelList(["id"=>"sonChannel","type"=>"son","typeid"=>$channel['id'],"row"=>"100"]); if(is_array($__gdseLm5x9G__) || $__gdseLm5x9G__ instanceof \think\Collection || $__gdseLm5x9G__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__gdseLm5x9G__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sonChannel): $mod = ($i % 2 );++$i;?>
                        <li class="<?php if($sonChannel['is_active']): ?>nav-current<?php endif; ?>"><a href="<?php echo $sonChannel['url']; ?>"><?php echo $sonChannel['name']; ?></a></li> 
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__gdseLm5x9G__; ?>
                </ul> 
                <?php endif; ?>
            </li> 
       <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__ulW5NE1Aq8__; ?>
      </ul> 
     </div> 
     <div class="side-widget"> 
      <div class="side-tit-bar"> 
       <h2 class="side-tit">Featured Products</h2> 
      </div> 
      <div class="side-product-items"> 
       <div class="items_content"> 
        <div class="side_slider"> 
         <ul class="swiper-wrapper"> 
            <?php $__qotILUx49k__ = \addons\cms\model\Channel::getChannelList(["id"=>"channel","type"=>"son","typeid"=>"44","orderby"=>"weigh","orderway"=>"asc"]); if(is_array($__qotILUx49k__) || $__qotILUx49k__ instanceof \think\Collection || $__qotILUx49k__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__qotILUx49k__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$channel): $mod = ($i % 2 );++$i;$__JyxnrCK1FS__ = \addons\cms\model\Archives::getArchivesList(["id"=>"prod","channel"=>$channel['id'],"orderby"=>"weigh","orderway"=>"desc","row"=>"20"]); if(is_array($__JyxnrCK1FS__) || $__JyxnrCK1FS__ instanceof \think\Collection || $__JyxnrCK1FS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__JyxnrCK1FS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$prod): $mod = ($i % 2 );++$i;?>
                <li class="swiper-slide gm-sep side_product_item"> 
                    <figure> 
                     <a href="<?php echo $prod['url']; ?>" class="item-img"><img src="<?php echo $prod['image']; ?>" alt=""></a> 
                     <figcaption> 
                      <h3 class="item_title"><a href="<?php echo $prod['url']; ?>"><?php echo $prod['title']; ?></a></h3> 
                     </figcaption> 
                    </figure> 
                </li>
            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__JyxnrCK1FS__; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__qotILUx49k__; ?>
         </ul> 
        </div> 
        <div class="btn-prev"></div> 
        <div class="btn-next"></div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </aside> 
     <!--// aside end --> 
     <section class="main"> 
      <!-- product info --> 
      <div class="product-intro"> 
       <div class="product-view"> 
        <div class="product-image"> 
         <a class="cloud-zoom" id="zoom1" data-zoom="adjustX:0, adjustY:0" href="template/img/demo/top_pd01.jpg" title=""> <img src="images/top_pd01.jpg" itemprop="image" title="" alt="" style="width:100%"></a> 
        </div> 
        <div class="image-additional-wrap"> 
         <div class="image-additional"> 
          <ul class="swiper-wrapper"> 
           <li class="swiper-slide image-item current"> <a class="cloud-zoom-gallery item" href="template/img/demo/top_pd01.jpg" data-zoom="useZoom:zoom1, smallImage:template/img/demo/top_pd01.jpg" title=""><img src="images/top_pd01.jpg" title="" alt=""></a> </li> 
           <li class="swiper-slide image-item"> <a class="cloud-zoom-gallery item" href="template/img/demo/top_pd02.jpg" data-zoom="useZoom:zoom1, smallImage:template/img/demo/top_pd02.jpg" title=""><img src="images/top_pd02.jpg" title="" alt=""></a> </li> 
           <li class="swiper-slide image-item"> <a class="cloud-zoom-gallery item" href="template/img/demo/top_pd03.jpg" data-zoom="useZoom:zoom1, smallImage:template/img/demo/top_pd03.jpg" title=""><img src="images/top_pd03.jpg" title="" alt=""></a> </li> 
           <li class="swiper-slide image-item"> <a class="cloud-zoom-gallery item" href="template/img/demo/top_pd01.jpg" data-zoom="useZoom:zoom1, smallImage:template/img/demo/top_pd01.jpg" title=""><img src="images/top_pd01.jpg" title="" alt=""></a> </li> 
           <li class="swiper-slide image-item"> <a class="cloud-zoom-gallery item" href="template/img/demo/top_pd02.jpg" data-zoom="useZoom:zoom1, smallImage:template/img/demo/top_pd02.jpg" title=""><img src="images/top_pd02.jpg" title="" alt=""></a> </li> 
           <li class="swiper-slide image-item"> <a class="cloud-zoom-gallery item" href="template/img/demo/top_pd03.jpg" data-zoom="useZoom:zoom1, smallImage:template/img/demo/top_pd03.jpg" title=""><img src="images/top_pd03.jpg" title="" alt=""></a> </li> 
          </ul> 
          <div class="swiper-pagination swiper-pagination-white"></div> 
         </div> 
         <div class="swiper-button-next swiper-button-white"></div> 
         <div class="swiper-button-prev swiper-button-white"></div> 
        </div> 
       </div> 
       <div class="product-summary"> 
        <h2 class="page_title">Lorem ipsum dolor</h2> 
        <div class="product-meta"> 
         <p>The LifeSource UT-302 ear thermometer is a lightweight portable medical thermometer that is made to take fast, accurate temperture measurments through the ear in just one second. The UT-302 thermometer scans the ear 512 times in just one second. Reads in fahrenheit and celsius. 10 memory recall. One button activation. Led Illuminated digital screen.</p> 
         <br> 
         <ul> 
          <li><em>Specification: </em> <span class="item-val">20kg</span></li> 
          <li><em>Use Parts:</em> <span class="item-val">Interior wall</span></li> 
          <li><em>Layer: </em> <span class="item-val">Finish</span></li> 
          <li><em>Gloss: </em> <span class="item-val">Matt</span></li> 
          <li><em>Can mix colors:</em> <span class="item-val">No</span></li> 
          <li><em>Construction Method:</em> <span class="item-val">Brushing, roll coating</span></li> 
         </ul> 
        </div> 
        <div class="gm-sep product-btn-wrap"> 
         <a href="javascript:" class="email">CONTACT NOW</a> 
         <a href="#" class="pdf">down load to pdf</a> 
        </div> 
       </div> 
      </div> 
      <!-- product-detail --> 
      <div class="tab-content-wrap product-detail"> 
       <div class="gm-sep tab-title-bar detail-tabs"> 
        <h2 class="tab-title title current"><span>Details</span></h2> 
        <h2 class="tab-title title"><span>Tags</span></h2> 
       </div> 
       <div class="tab-panel-wrap"> 
        <div class="tab-panel disabled"> 
         <div class="tab-panel-content entry"> 
          <div class="fl-rich-text"> 
           <table class="tt"> 
            <tbody> 
             <tr class="firstRow"> 
              <th colspan="2"><strong>Specification</strong></th> 
             </tr> 
             <tr> 
              <th>Faucet Type</th> 
              <td>Bathroom Sink Faucets,</td> 
             </tr> 
             <tr> 
              <th>Installation Type</th> 
              <td>Centerset,</td> 
             </tr> 
             <tr> 
              <th>Installation Holes</th> 
              <td>One Hole,</td> 
             </tr> 
             <tr> 
              <th>Number of Handles</th> 
              <td>Single Handle,</td> 
             </tr> 
             <tr> 
              <th>Finish</th> 
              <td>Ti-PVD,</td> 
             </tr> 
             <tr> 
              <th>Style</th> 
              <td>Country,</td> 
             </tr> 
             <tr> 
              <th>Flow Rate</th> 
              <td>1.5 GPM (5.7 L/min) max,</td> 
             </tr> 
             <tr> 
              <th>Valve Type</th> 
              <td>Ceramic Valve,</td> 
             </tr> 
             <tr> 
              <th>Cold and Hot Switch</th> 
              <td>Yes,</td> 
             </tr> 
             <tr> 
              <th colspan="2"><strong>Dimensions</strong></th> 
             </tr> 
             <tr> 
              <th>Overall Height</th> 
              <td>240 mm ( 9.5 " ),</td> 
             </tr> 
             <tr> 
              <th>Spout Height</th> 
              <td>155 mm ( 6.1 " ),</td> 
             </tr> 
             <tr> 
              <th>Spout Length</th> 
              <td>160 mm ( 6.3 " ),</td> 
             </tr> 
             <tr> 
              <th>Faucet center</th> 
              <td>Single Hole,</td> 
             </tr> 
             <tr> 
              <th colspan="2"><strong>Material</strong></th> 
             </tr> 
             <tr> 
              <th>Faucet Body Material</th> 
              <td>Brass,</td> 
             </tr> 
             <tr> 
              <th>Faucet Spout Material</th> 
              <td>Brass,</td> 
             </tr> 
             <tr> 
              <th>Faucet Handle Material</th> 
              <td>Brass,</td> 
             </tr> 
             <tr> 
              <th colspan="2"><strong>Accessories Information</strong></th> 
             </tr> 
             <tr> 
              <th>Valve included</th> 
              <td>Yes,</td> 
             </tr> 
             <tr> 
              <th>Drain included</th> 
              <td>No,</td> 
             </tr> 
             <tr> 
              <th colspan="2"><strong>Weights</strong></th> 
             </tr> 
             <tr> 
              <th>Net Weight (kg)</th> 
              <td>0.99,</td> 
             </tr> 
             <tr> 
              <th>Shipping Weight (kg)</th> 
              <td>1.17,</td> 
             </tr> 
            </tbody> 
           </table> 
          </div> 
          <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p> 
          <p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p> 
         </div> 
        </div> 
        <div class="tab-panel disabled entry"> 
         <div class="tab-panel-content">
           dd 
         </div> 
        </div> 
       </div> 
      </div> 
      <!-- inquiry form --> 
      <div class="inquiry-form-wrap"> 
       <!-- <script type="text/javascript" src="https://www.globalso.site/php/app.php?widget-init-inline.js"></script>--> 
       <div class="ad_prompt">
        Write your message here and send it to us
       </div> 
      </div> 
     </section> 
     <!--main end--> 
    </div> 
   </section> 
   <!-- RELATED PRODUCTS --> 
   <div class="goods-may-like"> 
    <div class="layout"> 
     <div class="index_title_bar"> 
      <h2 class="good_title">related products</h2> 
     </div> 
     <div class="layer-bd"> 
      <div class="swiper-slider"> 
       <ul class="swiper-wrapper"> 
        <li class="swiper-slide wow fadeInUpA product_item" data-wow-delay=".1s"> 
         <figure> 
          <span class="item_img"><img src="images/pd03.jpg" alt=""><a href="product.html" class="img_shadow"></a></span> 
          <figcaption> 
           <h3 class="item_title"><a href="">pink leather bag</a></h3> 
          </figcaption> 
         </figure> </li> 
        <li class="swiper-slide wow fadeInUpA product_item" data-wow-delay=".1s"> 
         <figure> 
          <span class="item_img"><img src="images/pd04.jpg" alt=""><a href="product.html" class="img_shadow"></a></span> 
          <figcaption> 
           <h3 class="item_title"><a href="">pink leather bag</a></h3> 
          </figcaption> 
         </figure> </li> 
        <li class="swiper-slide wow fadeInUpA product_item" data-wow-delay=".1s"> 
         <figure> 
          <span class="item_img"><img src="images/pd03.jpg" alt=""><a href="product.html" class="img_shadow"></a></span> 
          <figcaption> 
           <h3 class="item_title"><a href="">pink leather bag</a></h3> 
          </figcaption> 
         </figure> </li> 
        <li class="swiper-slide wow fadeInUpA product_item" data-wow-delay=".1s"> 
         <figure> 
          <span class="item_img"><img src="images/pd04.jpg" alt=""><a href="product.html" class="img_shadow"></a></span> 
          <figcaption> 
           <h3 class="item_title"><a href="">pink leather bag</a></h3> 
          </figcaption> 
         </figure> </li> 
        <li class="swiper-slide wow fadeInUpA product_item" data-wow-delay=".1s"> 
         <figure> 
          <span class="item_img"><img src="images/pd03.jpg" alt=""><a href="product.html" class="img_shadow"></a></span> 
          <figcaption> 
           <h3 class="item_title"><a href="">pink leather bag</a></h3> 
          </figcaption> 
         </figure> </li> 
        <li class="swiper-slide wow fadeInUpA product_item" data-wow-delay=".1s"> 
         <figure> 
          <span class="item_img"><img src="images/pd04.jpg" alt=""><a href="product.html" class="img_shadow"></a></span> 
          <figcaption> 
           <h3 class="item_title"><a href="">pink leather bag</a></h3> 
          </figcaption> 
         </figure> </li> 
        <li class="swiper-slide wow fadeInUpA product_item" data-wow-delay=".1s"> 
         <figure> 
          <span class="item_img"><img src="images/pd03.jpg" alt=""><a href="product.html" class="img_shadow"></a></span> 
          <figcaption> 
           <h3 class="item_title"><a href="">pink leather bag</a></h3> 
          </figcaption> 
         </figure> </li> 
        <li class="swiper-slide wow fadeInUpA product_item" data-wow-delay=".1s"> 
         <figure> 
          <span class="item_img"><img src="images/pd04.jpg" alt=""><a href="product.html" class="img_shadow"></a></span> 
          <figcaption> 
           <h3 class="item_title"><a href="">pink leather bag</a></h3> 
          </figcaption> 
         </figure> </li> 
       </ul> 
       <div class="product-pagination swiper-pagination-white"></div> 
      </div> 
      <div class="navigate_button_prev swiper-button-prev"></div> 
      <div class="navigate_button_next swiper-button-next"></div> 
     </div> 
    </div> 
   </div> 
   <!--// page-layout end --> 
   <!-- web_footer start --> 
   <footer class="web_footer"> 
    <ul class="foot_nav wow fadeInUpA" data-wow-delay="1s" data-wow-duration=".8s"> 
     <?php $__jsRQUZ93mP__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__jsRQUZ93mP__) || $__jsRQUZ93mP__ instanceof \think\Collection || $__jsRQUZ93mP__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__jsRQUZ93mP__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li><a href="<?php echo $nav['url']; ?>"><?php echo $nav['name']; ?></a> </li>
     <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__jsRQUZ93mP__; ?>
    </ul> 
    <div class="foot_bottom layout"> 
     <ul class="foot_contact wow fadeInUpA" data-wow-delay="1.3s" data-wow-duration=".8s"> 
      <li class="foot_email"><a style="text-transform: lowercase;" href="mailto:<?php echo $site['email']; ?>"><?php echo $site['emaill']; ?></a></li> 
      <li class="foot_address">Address:West of Yaodu Avenue, Tuojiang Town, Jianghua Yao Autonomous County, Yongzhou City, Hunan Province, P.R,China</li> 
      <li class="foot_phone"><a href="tel:{site.tell}">Tel:<?php echo $site['tell']; ?></a></li> 
     </ul> 
     <ul class="foot_sns wow fadeInUpA" data-wow-delay="1.5s" data-wow-duration=".8s"> 
        <?php $__8JIc2N5LFn__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"media","orderby"=>"weigh","orderway"=>"asc"]); if(is_array($__8JIc2N5LFn__) || $__8JIc2N5LFn__ instanceof \think\Collection || $__8JIc2N5LFn__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__8JIc2N5LFn__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo $block['url']; ?>"><img src="<?php echo $block['image']; ?>" alt="<?php echo $block['title']; ?>"></a></li> 
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__8JIc2N5LFn__; ?>
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
    <?php $__gbiqNzX6Zy__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"online-service","orderby"=>"weigh","orderway"=>"asc"]); if(is_array($__gbiqNzX6Zy__) || $__gbiqNzX6Zy__ instanceof \think\Collection || $__gbiqNzX6Zy__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__gbiqNzX6Zy__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
      <img src="<?php echo $block['image']; ?>">
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__gbiqNzX6Zy__; ?>
      
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