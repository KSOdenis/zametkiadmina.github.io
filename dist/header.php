<!DOCTYPE html>
<!--[if lt IE 9]>      <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ru"> <!--<![endif]-->
<head profile="http://gmpg.org/xfn/11"> 
<meta name='yandex-verification' content='6e1796249e86565b' />
<meta name="google-site-verification" content="8vZXux8nvb3AImx_TNUTy3LhjjBldP0YHWPHXEAz9rs" />
<meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=1, maximum-scale=3.0">

<?$APPLICATION->ShowHead()?>  

<?
$rsSites = CSite::GetByID("s1");
$arSite = $rsSites->Fetch();
?>
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/app.css" media="screen" />
    <link href="bootstr/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="bootstr/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="bootstr/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/modernizr.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.cycle2.carousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/js/slimbox/css/slimbox2.css" media="screen" />
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/nivo/jquery.nivo.slider.pack.js"></script>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/nivo/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/plugins.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/styles.css" type="text/css" />

<link href="<?=SITE_TEMPLATE_PATH?>/fav.gif" rel="shortcut icon" />

<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>	
<title><?$APPLICATION->ShowTitle()?></title>
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

        <header class="clearfix">
            <div class="topbg"></div>
            <div class="headline">
                <div class="wrapper">
                    <div class="col1 tal">
                        <div class="head_logo"><a href="/" title="Российский центр производства макетов и моделей"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="Российский центр производства макетов и моделей"><span>Российский центр производства макетов и моделей</span></a></div>
                    </div><div class="col2 tac">
                        <div class="head_bens">
                            <div class="head_ben head_ben1"><a href="/iso.php"><i class="sprite"></i><span>ГОСТ ISO 9001-2011</span></a></div>
                            <div class="head_ben head_ben2"><a href="http://pod-gon.ru" target="_blank"><i class="sprite"></i><span>Участники программы “Спасибо”</span></a></div>
                        </div>
                    </div><div class="col3 tac">
                        <div class="head_links">
                            <div class="head_link head_link1">
                            <?
		                		$path = "/include/header_video.php";
			                	$APPLICATION->IncludeFile(
									$APPLICATION->GetTemplatePath($path),
									Array(),
									Array("MODE"=>"text")
								);
							?></div>
                            <div class="head_link head_link2"><a href="/tsenyi-i-skidki/aktsii/"><i class="sprite"></i><span><b>Внимание, акция!</b> узнать подробнее</span></a></div>
                        </div>
                    </div><div class="col4 tar">
                        <div class="phone"><b>8&nbsp;(800)&nbsp;200&nbsp;13&nbsp;49</b> звонок бесплатный по всей России</div>
                        <div class="email"><a href="mailto:mail@maket-russia.ru">mail@maket-russia.ru</a></div>
                        <div class="feedlink"><a href="#order_form" class="feedback"><i class="sprite"></i><span>Оставить заявку</span></a></div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="wrapper">
                    <div class="navicon">
                    	<div class="icon">
	                        <span></span>
	                        <span></span>
	                        <span></span>
	                    </div>
	                    <div class="text">
	                    	Меню сайта
	                    </div>
                    </div>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
						"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
						"MAX_LEVEL" => "1",	// Уровень вложенности меню
						"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
						"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						"DELAY" => "N",	// Откладывать выполнение шаблона меню
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
						"MENU_CACHE_TYPE" => "N",	// Тип кеширования
						"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
						"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
						"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
						),
						false
					);?> 
                </div>
            </nav>
        </header>


        <div class="holder">

			<?
			//если это раздел статей, но не заглавная страница
			if(strpos($_SERVER['REQUEST_URI'], "/stati/")===0 && $_SERVER['REQUEST_URI']!="/stati/"):?>
			<div class="breadcrumb">
				<div class="wrapper">
					<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "maket_russia_default", array(
						"START_FROM" => "0",
						"PATH" => "",
						"SITE_ID" => "s1"
						),
						false,
						array(
						"ACTIVE_COMPONENT" => "Y"
						)
					);?>
				</div>
			</div>
			<?endif?>

			
				<?
			//если это раздел статей, но не заглавная страница
			if(strpos($_SERVER['REQUEST_URI'], "/portfolio/")===0 && $_SERVER['REQUEST_URI']!="/portfolio/"):?>
			<div class="breadcrumb">
				<div class="wrapper">
					<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "maket_russia_default", array(
						"START_FROM" => "0",
						"PATH" => "",
						"SITE_ID" => "s1"
						),
						false,
						array(
						"ACTIVE_COMPONENT" => "Y"
						)
					);?>
				</div>
			</div>
			<?endif?>
			

			 <?if(strpos($_SERVER['REQUEST_URI'], "/portfolio/")===0):?>

			 <div class="page wrapper">
			 
			<?
			/*if ($_SERVER['REQUEST_URI'] == '/portfolio/')
			    {
			    }
			    else
			    {
			$APPLICATION->IncludeFile(
			$APPLICATION->GetTemplatePath("/index_inc.php"),
			Array(),
			Array("MODE"=>"html"));
			    }*/
			?>
			 
			 
			<?elseif($_SERVER['PHP_SELF'] == "/index.php" || $_SERVER['PHP_SELF'] == "/index2.php"):?>


			<?elseif($_SERVER['PHP_SELF'] == "/portfolio.php"):?>
			 <div class="page wrapper">

                         <?elseif(strpos($_SERVER['REQUEST_URI'], "/voennaya-tekhnika/")===0):?>
			 <?elseif(strpos($_SERVER['REQUEST_URI'], "/landshaftnye/")===0):?>
<?elseif(strpos($_SERVER['REQUEST_URI'], "/neftegaz/")===0):?>
<?elseif(strpos($_SERVER['REQUEST_URI'], "/rostovye/")===0):?>
<?elseif(strpos($_SERVER['REQUEST_URI'], "/vistavochniy/")===0):?>
<?elseif(strpos($_SERVER['REQUEST_URI'], "/arhitekturnye/")===0):?>
			




                         <?elseif(strpos($_SERVER['REQUEST_URI'], "/tsenyi-i-skidki/")===0):?>
			 <div class="page wrapper">
			<?elseif(strpos($_SERVER['REQUEST_URI'], "/garantii-i-servis/")===0):?>
			 <div class="page wrapper">
			<?elseif(strpos($_SERVER['REQUEST_URI'], "/informatsiya-po-tenderu/")===0):?>
			 <div class="page wrapper">
			<?elseif(strpos($_SERVER['REQUEST_URI'], "/kontaktyi/")===0):?>
			 <div class="page wrapper">
			<?
			//если это заглавная страница статей
			elseif(strpos($_SERVER['REQUEST_URI'], "/stati/")===0 && $_SERVER['REQUEST_URI']=="/stati/"):?>
			 <div class="page wrapper">
			<?
			//если это раздел статей, но не заглавная страница
			elseif(strpos($_SERVER['REQUEST_URI'], "/stati/")===0 && $_SERVER['REQUEST_URI']!="/stati/"):?>
			 <div class="page wrapper">
				<div class="leftpage">
				<div>
				<? 
				//если мы находимся в подразделе "Статьи о предприятиях", то покажем меню со статьями о предприятиях
				//иначе покажем меню со статьями о макетах
				if (strpos($_SERVER['REQUEST_URI'], "/o-predpriyatiyah/") > 0) { ?>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
						"ROOT_MENU_TYPE" => "portfolioleftpred",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MAX_LEVEL" => "3",
						"CHILD_MENU_TYPE" => "top",
						"USE_EXT" => "Y",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?> 
				<? } else { ?>
					<?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
						"ROOT_MENU_TYPE" => "portfolioleft",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MAX_LEVEL" => "3",
						"CHILD_MENU_TYPE" => "top",
						"USE_EXT" => "Y",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N"
						),
						false
					);?> 
				<? } ?>
				</div></div>                        
				<div class="rightpage">        
			<?else:?>

			           

			<div class="page wrapper">


			<div class="leftpage">
			<div>
			<?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
				"ROOT_MENU_TYPE" => "portfolioleft",
				"MENU_CACHE_TYPE" => "N",
				"MENU_CACHE_TIME" => "3600",
				"MENU_CACHE_USE_GROUPS" => "Y",
				"MENU_CACHE_GET_VARS" => array(
				),
				"MAX_LEVEL" => "3",
				"CHILD_MENU_TYPE" => "top",
				"USE_EXT" => "Y",
				"DELAY" => "N",
				"ALLOW_MULTI_SELECT" => "N"
				),
				false
			);?> 
			                                                             
			</div></div>                        
			<div class="rightpage">                 
			<?endif?>