<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:100:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/addons/cms/view/default1/channel_contact.html";i:1688723145;s:95:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/addons/cms/view/default1/common/top.html";i:1688612883;s:96:"/Users/pan.liu/Documents/privateProject/guiwei/guiwei1/addons/cms/view/default1/common/foot.html";i:1688698032;}*/ ?>
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
       <?php $__uBS6lbRDkq__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__uBS6lbRDkq__) || $__uBS6lbRDkq__ instanceof \think\Collection || $__uBS6lbRDkq__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__uBS6lbRDkq__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li>
            <a href="<?php echo $nav['url']; ?>"><?php echo $nav['name']; ?></a>
            <?php if($nav['has_child']): ?>
                <ul>
                    <?php $__oQuwMmfbH9__ = \addons\cms\model\Channel::getChannelList(["id"=>"son","type"=>"son","condition"=>"1=isnav","typeid"=>$nav['id'],"cache"=>"0","row"=>"20"]); if(is_array($__oQuwMmfbH9__) || $__oQuwMmfbH9__ instanceof \think\Collection || $__oQuwMmfbH9__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__oQuwMmfbH9__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?>
                        <li><a href="<?php echo $son['url']; ?>"><?php echo $son['name']; ?></a>
                        <?php if($son['has_child']): ?>
                            <ul>
                            <?php $__vVjRiKaTfs__ = \addons\cms\model\Channel::getChannelList(["id"=>"sons","condition"=>"1=isnav","type"=>"son","typeid"=>$son['id'],"cache"=>"0"]); if(is_array($__vVjRiKaTfs__) || $__vVjRiKaTfs__ instanceof \think\Collection || $__vVjRiKaTfs__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__vVjRiKaTfs__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sons): $mod = ($i % 2 );++$i;?>
                                <li><a href="<?php echo $sons['url']; ?>"><?php echo $sons['name']; ?></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__vVjRiKaTfs__; ?>
                            </ul> 
                        <?php endif; ?>
                        </li>
                    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__oQuwMmfbH9__; ?>
                </ul>
            <?php endif; ?>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__uBS6lbRDkq__; ?>
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
<div class="main wp">
    <div class="contact cl">
      <div class="contact-info">
        <h3>Contact information</h3>
        <p class="p1"><?php echo $site['name']; ?></p>
  <?php $__jrHpFlRxsL__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"id","orderway"=>"desc"]); if(is_array($__jrHpFlRxsL__) || $__jrHpFlRxsL__ instanceof \think\Collection || $__jrHpFlRxsL__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__jrHpFlRxsL__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;if($block['title'] == 'tel'): ?>
      <p class="p2"><a href="tel:<?php echo str_replace(['<p>','</p>'], '', $block['content']); ?>" rel="nofollow"><?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p>
    <?php endif; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__jrHpFlRxsL__; $__bpRH6vqXSF__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"id","orderway"=>"desc"]); if(is_array($__bpRH6vqXSF__) || $__bpRH6vqXSF__ instanceof \think\Collection || $__bpRH6vqXSF__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__bpRH6vqXSF__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;if($block['title'] == 'Fax'): ?>
    <p class="p3">Fax: <?php echo $block['title']; ?>:<?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></p>
    <?php endif; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__bpRH6vqXSF__; $__2PhnazS6r7__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"id","orderway"=>"desc"]); if(is_array($__2PhnazS6r7__) || $__2PhnazS6r7__ instanceof \think\Collection || $__2PhnazS6r7__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2PhnazS6r7__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;if($block['title'] == 'Add'): ?>
    <p class="p4">Add: <?php echo $block['title']; ?>:<?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></p>
    <?php endif; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__2PhnazS6r7__; $__UiwPDNTHZ7__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"contact","orderby"=>"id","orderway"=>"desc"]); if(is_array($__UiwPDNTHZ7__) || $__UiwPDNTHZ7__ instanceof \think\Collection || $__UiwPDNTHZ7__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__UiwPDNTHZ7__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;if($block['title'] == 'Email'): ?>
    <p class="p5"><a href="mailto:<?php echo str_replace(['<p>','</p>'], '', $block['content']); ?>" rel="nofollow"><?php echo str_replace(["<p>","</p>"], "", $block['content']); ?></a></p>
    <?php endif; endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__UiwPDNTHZ7__; ?>
      </div>
      <div class="contact-inquiry">
  <!--aifeedback v2 start -->
  <div class="crm-form">
    <div class="create-form-wrap">
      <div class="create-form-title" style="background:#0F74A5;">Contact Us</div>
      <div class="create-form-inner">
        <div class="create-form-ul">
          <form class="contact-from" onsubmit="return $('.formPoint').show();" method="POST" action="/d/customer/post.html">
            <input type="hidden" name="__diyname__" value="customer">
            <?php echo token(); ?>
                <div class="create-form-li">
              <div class="create-form-input">
                <label>Name<span style="color:#F00">*</span>:</label>
                <input type="text" name="row[name]">
              </div>
            </div>
  <div class="create-form-li">
              <div class="create-form-input">
                <label>Country:</label>
                <input type="text" name="row[country]">
              </div>
            </div>
  <div class="create-form-li">
              <div class="create-form-input">
                <label>Company:</label>
                <input type="text" name="row[company]">
              </div>
            </div>
  <div class="create-form-li">
              <div class="create-form-input">
                <label>Email<span style="color:#F00">*</span>:</label>
                <input type="text" name="row[email]">
              </div>
            </div>
  <div class="create-form-li">
              <div class="create-form-input">
                <label>Tel:</label>
                <input type="text" name="row[telephone]">
              </div>
            </div>
  <div class="create-form-block create-form-li create-form-message">
              <div class="create-form-textarea">
                <label>Message<span style="color:#F00">*</span>:</label>
                <textarea name="row[content]"></textarea>
              </div>
            </div>
          </div>
          <div class="create-form-block create-form-cen create-form-action">
            <input type="hidden" class="cid" name="cid" value="381">
            <button type="submit" class="create-form-submit" style="background:#0F74A5;">Submit</button>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--aifeedback v2 end -->
  <!-- <script type="text/javascript" src="/group/js/form.js"></script> -->
      </div>
    </div>
<footer class="web_footer"> 
    <ul class="foot_nav wow fadeInUpA" data-wow-delay="1s" data-wow-duration=".8s"> 
     <?php $__d6IBH87Dz5__ = \addons\cms\model\Channel::getChannelList(["id"=>"nav","type"=>"top","cache"=>"0","condition"=>"1=isnav","row"=>"20","orderby"=>"weigh","orderway"=>"desc"]); if(is_array($__d6IBH87Dz5__) || $__d6IBH87Dz5__ instanceof \think\Collection || $__d6IBH87Dz5__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__d6IBH87Dz5__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav): $mod = ($i % 2 );++$i;?>
        <li><a href="<?php echo $nav['url']; ?>"><?php echo $nav['name']; ?></a> </li>
     <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__d6IBH87Dz5__; ?>
    </ul> 
    <div class="foot_bottom layout"> 
     <ul class="foot_contact wow fadeInUpA" data-wow-delay="1.3s" data-wow-duration=".8s"> 
      <li class="foot_email"><a style="text-transform: lowercase;" href="mailto:<?php echo $site['email']; ?>"><?php echo $site['emaill']; ?></a></li> 
      <li class="foot_address">Address:West of Yaodu Avenue, Tuojiang Town, Jianghua Yao Autonomous County, Yongzhou City, Hunan Province, P.R,China</li> 
      <li class="foot_phone"><a href="tel:{site.tell}">Tel:<?php echo $site['tell']; ?></a></li> 
     </ul> 
     <ul class="foot_sns wow fadeInUpA" data-wow-delay="1.5s" data-wow-duration=".8s"> 
        <?php $__iVwC6tZy18__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"media","orderby"=>"weigh","orderway"=>"asc"]); if(is_array($__iVwC6tZy18__) || $__iVwC6tZy18__ instanceof \think\Collection || $__iVwC6tZy18__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__iVwC6tZy18__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
            <li><a href="<?php echo $block['url']; ?>"><img src="<?php echo $block['image']; ?>" alt="<?php echo $block['title']; ?>"></a></li> 
        <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__iVwC6tZy18__; ?>
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
    <?php $__2uQm8L5ltC__ = \addons\cms\model\Block::getBlockList(["id"=>"block","name"=>"online-service","orderby"=>"weigh","orderway"=>"asc"]); if(is_array($__2uQm8L5ltC__) || $__2uQm8L5ltC__ instanceof \think\Collection || $__2uQm8L5ltC__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__2uQm8L5ltC__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$block): $mod = ($i % 2 );++$i;?>
      <img src="<?php echo $block['image']; ?>">
    <?php endforeach; endif; else: echo "" ;endif; $__LASTLIST__=$__2uQm8L5ltC__; ?>
      
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