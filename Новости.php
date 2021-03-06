<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
<?php
    require_once "functions/functions.php";
    $news=getNews(3);
?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Sample Headline, Sample Headline">
    <meta name="description" content="">
    <title>Новости</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Новости.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.21, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/sponsor.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Новости">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-b3c6"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="Главная.html" data-page-id="69757308" class="u-image u-logo u-image-1" data-image-width="261" data-image-height="108" title="Главная">
          <img src="images/sponsor.png" class="u-logo-image u-logo-image-1">
        </a>
        <h3 class="u-align-center u-headline u-text u-text-default u-text-1">
          <a href="/"> МФК&nbsp;Главная&nbsp;Дорога.&nbsp;г.Ярославль</a>
        </h3>
        <nav class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1" data-position="">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-1-base" href="Новости.html" style="padding: 10px 0px;">Новости</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-1-base" href="Команда.html" style="padding: 10px 0px;">Команда</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Статистика.html">Статистика</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Состав.html">Состав</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-1-base" href="Матчи.html" style="padding: 10px 0px;">Матчи</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-grey-90 u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-1-base" href="О-нас.html" style="padding: 10px 0px;">О нас</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Новости.html">Новости</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Команда.html">Команда</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Статистика.html">Статистика</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Состав.html">Состав</a>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Матчи.html">Матчи</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="О-нас.html">О нас</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
<?php
    for ($i=0;$i<count($news);$i++){
        echo '
    <section class="u-border-2 u-border-grey-75 u-clearfix u-section-1" id="sec-88b2">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-left-cell u-size-40 u-image-1" src="images/'.$news[$i]["id"].'.jpeg" data-image-width="1080" data-image-height="1080">
                <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-white u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <h2 class="u-text u-text-1">'.$news[$i]["title"].'</h2>
                  <p class="u-text u-text-2">'.$news[$i]["text"].'</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    ';
    }
?>
    <section class="u-border-2 u-border-grey-75 u-clearfix u-section-1" id="sec-88b2">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-left-cell u-size-40 u-image-1" src="images/sostav1.jpg" data-image-width="1080" data-image-height="1080">
                <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-white u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <h2 class="u-text u-text-1">Sample Headline</h2>
                  <p class="u-text u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-border-2 u-border-grey-75 u-clearfix u-section-2" id="sec-3888">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-left-cell u-size-40 u-image-1" src="" data-image-width="1080" data-image-height="1080">
                <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-white u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <h2 class="u-text u-text-1">Sample Headline</h2>
                  <p class="u-text u-text-2">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-b52a"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="261" data-image-height="108">
          <img src="images/sponsor.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" target="_blank" data-type="VK" title="VK" href=""><span class="u-icon u-social-icon u-social-vk u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-957e"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-957e"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M88.2,80.7l-9.8,0.1c0,0-2.1,0.4-4.9-1.5c-3.7-2.5-7.2-9.1-9.9-8.2C60.9,72,61,77.9,61,77.9s0,1.3-0.6,1.9
            c-0.7,0.7-2,0.9-2,0.9H54c0,0-9.7,0.6-18.3-8.3c-9.3-9.7-17.6-29-17.6-29s-0.5-1.3,0-1.9c0.6-0.7,2.2-0.7,2.2-0.7l10.5-0.1
            c0,0,1,0.2,1.7,0.7c0.6,0.4,0.9,1.2,0.9,1.2s1.7,4.3,4,8.2c4.4,7.6,6.4,9.3,7.9,8.4c2.2-1.2,1.5-10.7,1.5-10.7s0-3.5-1.1-5
            c-0.9-1.2-2.5-1.5-3.3-1.6c-0.6-0.1,0.4-1.5,1.6-2.1c1.9-0.9,5.2-1,9.2-0.9c3.1,0,4,0.2,5.2,0.5c3.6,0.9,2.4,4.3,2.4,12.4
            c0,2.6-0.5,6.3,1.4,7.5c0.8,0.5,2.8,0.1,7.7-8.3c2.3-4,4.1-8.6,4.1-8.6s0.4-0.8,1-1.2s1.4-0.3,1.4-0.3l11.1-0.1c0,0,3.3-0.4,3.9,1.1
            c0.6,1.6-1.2,5.3-5.8,11.3c-7.4,9.9-8.3,9-2.1,14.7c5.9,5.5,7.1,8.1,7.3,8.5C93.4,80.4,88.2,80.7,88.2,80.7z"></path></svg></span>
          </a>
        </div>
        <div class="u-border-1 u-border-white u-expanded-width u-line u-line-horizontal u-opacity u-opacity-50 u-line-1"></div>
        <p class="u-align-center u-text u-text-1">Пример текста футера сайта</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>