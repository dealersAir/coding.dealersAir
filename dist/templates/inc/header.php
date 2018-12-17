<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
   <link rel="stylesheet" href="/templates/css/style.css">
   <title>
      <?php echo $meta['title']; ?>
   </title>
   
</head>

<body>
   <!--HEADER/-->
   <header id="header" class="header">
      <div class="row row_wrp row_col-middle header__row">
         <div class="col p-y-0">
            <a href="/" class="header__logo"><img src="/templates/images/coding.svg" alt="coding.dealersAir"></a>
         </div>
         <div class="col col_grow p-y-0">
            <div class="row row_col-middle">
               <nav class="col p-y-0">
                  <!--Menu/-->
                  <ul class="menu">
                     <li class="menu__item menu__item_has-children">
                        <span class="menu__a">Записки прогера</span>
                        <button class="menu__arr"></button>
                        <ul class="sub-menu menu__sub-menu">
                           <!-- <li class="sub-menu__item">
                              <a href="/css" class="sub-menu__a">CSS</a>
                           </li> -->
                           <li class="sub-menu__item">
                              <a href="/javascript" class="sub-menu__a">JavaScript</a>
                           </li>
                           <!-- <li class="sub-menu__item">
                              <a href="/html" class="sub-menu__a">HTML</a>
                           </li> -->
                        </ul>
                     </li>
                     <!-- <li class="menu__item menu__item_has-children">
                        <span class="menu__a">Практикум</span>
                        <button class="menu__arr"></button>
                        <ul class="sub-menu menu__sub-menu">
                           <li class="sub-menu__item">
                              <a href="/layout" class="sub-menu__a">HTML - верстка</a>
                           </li>
                        </ul>
                     </li> -->
                  </ul>
                  <!--/Menu-->
               </nav>
               <div class="col col-right p-0">
                  
               </div>
            </div>
         </div>
         <button class="js-close-menu menu-close-btn"></button>
      </div>
      <button class="js-open-menu open-menu-btn"><span></span><span></span><span></span><span></span></button>
   </header>
   <!--/HEADER-->