<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset='<?php bloginfo('charset') ?>'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodomo Gakuen</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="header">
      <div id="pre-nav" class="pre-nav top">
        <div>
          <a href="mailto:info@kodomogakuen.com"
            ><i class="fas fa-envelope"></i>
            <span style="font-family: Montserrat, sans-serif"
              >info@kodomogakuen.com</span
            ></a
          >
        </div>

        <div>
          <ul>
            <li>
              <a href="./en/index.html" language="english"
                ><i class="flag-icon flag-icon-gb"></i> English</a
              >
            </li>
            <!-- <li>
              <a href="#"><i class="fas fa-user"></i> Login</a>
            </li> -->
            <li>
              <!-- <a href="#"><i class="fas fa-envelope"></i> お問い合わせ</a> -->
            </li>
          </ul>
        </div>
      </div>

      <div id="navbar" class="navbar top">
        <h1 id="logo" class="logo">
          <a href="<?php echo site_url() ?>"
            ><span class="text-color-1"><i class="fas fa-school"></i> </span
            >こども学園<span style="font-family: Montserrat, sans-serif">
              Kodomo Gakuen</span
            ></a
          >
        </h1>

        <nav>
          <ul class="nav-menu__list">
            <li class="nav-menu__item nav-menu__item--1"><a class="nav-menu__link current" href="<?php echo site_url() ?>"><span>ホーム</span> </a></li>
            
            <li class="nav-menu__item nav-menu__item--2">
              <a class="nav-menu__link nav-menu__link--2" href="#" data-nav="1">インフォメーション</a>
              <ul class="submenu-list">
                <li class="submenu__item">
                  <a href="<?php echo site_url('/about') ?>" class="submenu__link">
                    <svg class="navbar__icon">
                      <use xlink:href="./images/sprite.svg#icon-import_contacts"></use>
                    </svg>
                     <span>保育方針</span> 
                  </a>
                </li>
                <li class="submenu__item">
                  <a href="<?php echo site_url('/fees') ?>" class="submenu__link">
                    <svg class="navbar__icon">
                      <use xlink:href="./images/sprite.svg#icon-coin-yen"></use>
                    </svg>


                    <span>保育料</span>
                  </a>
                </li>
                <li class="submenu__item">
                  <a href="<?php echo site_url('/privacy-policy') ?>" class="submenu__link">
                    <svg class="navbar__icon">
                      <use xlink:href="./images/sprite1.svg#icon-lock"></use>
                    </svg>


                    <span>プライバシーポリシー</span>
                  </a>
                </li>
                <li class="submenu__item">
                  <a href="<?php echo site_url('/menu') ?>" class="submenu__link">
                    <svg class="navbar__icon">
                      <use xlink:href="./images/sprite1.svg#icon-spoon-knife"></use>
                    </svg>


                    <span>給食</span>
                  </a>
                </li>
              </ul>
            </li>
       
            <li class="nav-menu__item nav-menu__item--3">
              <a class="nav-menu__link nav-menu__link--3" href="#" data-nav="2">書類</a>
              <ul class="submenu-list">
                <li class="submenu__item">
                  <a href="<?php echo site_url('/saturedaycare') ?>" class="submenu__link">
                    <svg class="navbar__icon">
                      <use xlink:href="./images/sprite.svg#icon-import_contacts"></use>
                    </svg>
                     <span>土曜保育利用</span> 
                  </a>
                </li>
                <li class="submenu__item">
                  <a href="<?php echo site_url('/healthforms') ?>" class="submenu__link">
                    <svg class="navbar__icon">
                      <use xlink:href="./images/sprite.svg#icon-coin-yen"></use>
                    </svg>


                    <span>健康管理票</span>
                  </a>
                </li>
              </ul>
            </li>
           
            <li class="nav-menu__item nav-menu__item--4">
              <a class="nav-menu__link  nav-menu__link--4" href="#" data-nav="3">クラス</a>
              <ul class="submenu-list">
                <li class="submenu__item">
                  <a href="<?php echo site_url('/nyuuji') ?>" class="submenu__link"><svg class="navbar__icon">
                    <use xlink:href="./images/sprite.svg#icon-child_care"></use>
                  </svg><span>乳児</span> </a>
                </li>
                <li class="submenu__item">
                  <a href="<?php echo site_url('/youji') ?>" class="submenu__link"><svg class="navbar__icon">
                    <use xlink:href="./images/sprite.svg#icon-child"></use>
                  </svg><span>幼児</span> </a>
                </li>
                <li class="submenu__item">
                  <a href="<?php echo site_url('/star') ?>" class="submenu__link"><svg class="navbar__icon">
                    <use xlink:href="./images/sprite.svg#icon-earth"></use>
                  </svg><span>国際クラス</span> </a>
                </li>
              </ul>
            </li>
            
            <li class="nav-menu__item nav-menu__item--5"><a class="nav-menu__link" href="<?php echo site_url('/blog') ?>">お知らせ・ニューズ</a></li>
            
            <li class="nav-menu__item nav-menu__item--6">
              <a class="nav-menu__link" href="<?php echo site_url('/activities') ?>">課外教室</a>
            </li>
            
          </ul>

          


        </nav>
      </div>

      <nav id="nav-phone">
        <div class="hamburger-menu">
          <input type="checkbox" id="hamburger-toggle" class="hamburger-menu__check">

          <label for="hamburger-toggle" class="hamburger-menu__btn">
            <span class="hamburger-menu__icon">&nbsp;</span>
          </label>
        </div>
        <ul class="nav-menu__list">
          <li class="nav-menu__item nav-menu__item--1"><a class="nav-menu__link current" href="<?php echo site_url() ?>"><span>ホーム</span> </a></li>
          
          <li class="nav-menu__item nav-menu__item--2">
            <a class="nav-menu__link nav-menu__link--2" href="#" data-nav="1">インフォメーション</a>
            <ul class="submenu-phone__list">
              <li class="submenu-phone__item">
                <a href="<?php echo site_url('/about') ?>" class="submenu-phone__link">
                  <svg class="navbar__icon">
                    <use xlink:href="./images/sprite.svg#icon-import_contacts"></use>
                  </svg>
                   <span>保育方針</span> 
                </a>
              </li>
              <li class="submenu-phone__item">
                <a href="<?php echo site_url('/fees') ?>" class="submenu-phone__link">
                  <svg class="navbar__icon">
                    <use xlink:href="./images/sprite.svg#icon-coin-yen"></use>
                  </svg>


                  <span>保育料</span>
                </a>
              </li>
              <li class="submenu-phone__item">
                <a href="<?php echo site_url('/privacy-policy') ?>" class="submenu-phone__link">
                  <svg class="navbar__icon">
                    <use xlink:href="./images/sprite1.svg#icon-lock"></use>
                  </svg>


                  <span>プライバシーポリシー</span>
                </a>
              </li>
              <li class="submenu-phone__item">
                <a href="<?php echo site_url('/menu') ?>" class="submenu-phone__link">
                  <svg class="navbar__icon">
                    <use xlink:href="./images/sprite1.svg#icon-spoon-knife"></use>
                  </svg>


                  <span>給食</span>
                </a>
              </li>
            </ul>
          </li>
     
          <li class="nav-menu__item nav-menu__item--3">
            <a class="nav-menu__link nav-menu__link--3" href="#" data-nav="2">書類</a>
            <ul class="submenu-phone__list">
              <li class="submenu-phone__item">
                <a href="<?php echo site_url('/saturdaycare') ?>" class="submenu-phone__link">
                  <svg class="navbar__icon">
                    <use xlink:href="./images/sprite.svg#icon-import_contacts"></use>
                  </svg>
                   <span>土曜保育利用</span> 
                </a>
              </li>
              <li class="submenu-phone__item">
                <a href="<?php echo site_url('/healthforms') ?>" class="submenu-phone__link">
                  <svg class="navbar__icon">
                    <use xlink:href="./images/sprite.svg#icon-coin-yen"></use>
                  </svg>


                  <span>健康管理票</span>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-menu__item nav-menu__item--4">
            <a class="nav-menu__link nav-menu__link--4" href="#" data-nav="3">クラス</a>
            <ul class="submenu-phone__list">
              <li class="submenu-phone__item">
                <a href="<?php echo site_url('/nyuuji') ?>" class="submenu-phone__link"><svg class="navbar__icon">
                  <use xlink:href="./images/sprite.svg#icon-child_care"></use>
                </svg><span>乳児</span> </a>
              </li>
              <li class="submenu-phone__item">
                <a href="<?php echo site_url('/youji') ?>" class="submenu-phone__link"><svg class="navbar__icon">
                  <use xlink:href="./images/sprite.svg#icon-child"></use>
                </svg><span>幼児</span> </a>
              </li>
              <li class="submenu-phone__item">
                <a href="<?php echo site_url('/star') ?>" class="submenu-phone__link"><svg class="navbar__icon">
                  <use xlink:href="./images/sprite.svg#icon-earth"></use>
                </svg><span>国際クラス</span> </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-menu__item nav-menu__item--5"><a class="nav-menu__link" href="<?php echo site_url('/blog') ?>">お知らせ・ニューズ</a></li>
          
          <li class="nav-menu__item nav-menu__item--6">
            <a class="nav-menu__link" href="<?php echo site_url('/activities') ?>">課外教室</a>
          </li>

        </ul>

        


      </nav>
      

      

    </div>
    
