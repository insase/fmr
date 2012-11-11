<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Le styles -->
	<!-- Use new way for google web fonts
	http://www.smashingmagazine.com/2012/07/11/avoiding-faux-weights-styles-google-web-fonts -->
	<!-- Headings -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />  -->
	<!-- Text -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> -->
	<!--[if lt IE 9]>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
	<![endif]-->

	<link href="/admin/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="/admin/css/bootstrap/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
	<link href="/admin/css/supr-theme/jquery.ui.supr.css" rel="stylesheet" type="text/css"/>
	<link href="/admin/css/icons.css" rel="stylesheet" type="text/css" />
	<!-- Plugin stylesheets -->
	<link href="/admin/plugins/qtip/jquery.qtip.css" rel="stylesheet" type="text/css" />
	<link href="/admin/plugins/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
	<link href="/admin/plugins/jpages/jPages.css" rel="stylesheet" type="text/css" />
	<link href="/admin/plugins/prettify/prettify.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/inputlimiter/jquery.inputlimiter.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/ibutton/jquery.ibutton.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/uniform/uniform.default.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/color-picker/color-picker.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/select/select2.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/validate/validate.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/pnotify/jquery.pnotify.default.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/pretty-photo/prettyPhoto.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/smartWizzard/smart_wizard.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/dataTables/jquery.dataTables.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/elfinder/elfinder.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/plupload/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" rel="stylesheet" />
	<link href="/admin/plugins/search/tipuesearch.css" type="text/css" rel="stylesheet" />

	<!-- Main stylesheets -->
	<link href="/admin/css/main.css" rel="stylesheet" type="text/css" />

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<link rel="shortcut icon" href="http://leafeed.com/favicon.ico" />

	<script type="text/javascript">
		//adding load class to body and hide page
		document.documentElement.className += 'loadstate';
	</script>

</head>

<body>
<!-- loading animation -->
<div id="qLoverlay"></div>
<div id="qLbar"></div>

<div id="header">
	<div class="container">
		<div class="navbar">
			<div class="navbar-inner">

				<a class="brand" href="/backend"><?php echo CHtml::encode(Yii::app()->name); ?>.<span class="slogan">admin</span></a>
				<div class="nav-no-collapse">
					<ul class="nav pull-right usernav">

						<li class="dropdown">
							<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
								<img src="/admin/images/avatar.jpg" alt="" class="image" />
								<span class="txt"><?php echo Yii::app()->user->name; ?></span>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li class="menu">
									<ul>
										<li>
											<a href="#"><span class="icon16 icomoon-icon-user-3"></span>Edit profile</a>
										</li>
										<li>
											<a href="#"><span class="icon16 icomoon-icon-comments-2"></span>Approve comments</a>
										</li>
										<li>
											<a href="#"><span class="icon16 icomoon-icon-plus-2"></span>Add user</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<?php if(!Yii::app()->user->isGuest):?>
						<li><a href="/logout"><span class="icon16 icomoon-icon-exit"></span> Выйти</a></li>
						<?php endif?>
					</ul>
				</div><!-- /.nav-collapse -->

			</div><!-- /navbar-inner -->
		</div><!-- /navbar -->
	</div>
</div><!-- End #header -->

<div id="wrapper" class="container">
<div class="row">

<!--Sidebar area -->
<div class="span3">

	<!--Responsive navigation button-->
	<div class="resBtn">
		<a href="#"><span class="icon16 minia-icon-list-3"></span></a>
	</div>

	<!--Sidebar background-->
	<div id="sidebarbg"></div>
	<!--Sidebar content-->
	<div id="sidebar">

		<div class="shortcuts">
			<ul>
				<li><a href="/" title="На сайт" class="tip"><span class="icon24 icomoon-icon-arrow-up-left-3"></span></a></li>
				<li><a href="#" title="Database backup" class="tip"><span class="icon24 icomoon-icon-database"></span></a></li>
				<li><a href="charts.html" title="Sales statistics" class="tip"><span class="icon24 icomoon-icon-pie-2"></span></a></li>
				<li><a href="#" title="Write post" class="tip"><span class="icon24 icomoon-icon-pencil"></span></a></li>
			</ul>
		</div><!-- End search -->

		<div class="sidenav">

			<div class="sidebar-widget" style="margin: -1px 0 0 0;">
				<h5 class="title" style="margin-bottom:0">Навигация</h5>
			</div><!-- End .sidenav-widget -->

			<div class="mainnav">
				<?php $this->widget('zii.widgets.CMenu',array(
					'encodeLabel'=>false,
					'items'=>array(
						array('label'=>'<span class="icon16 icomoon-icon-users"></span>Пользователи', 'url'=>array('/user/index')),
						array('label'=>'<span class="icon16 icomoon-icon-library"></span>Библиотека', 'url'=>array('/library/index')),
					),
				)); ?>
			</div>
		</div><!-- End sidenav -->

		<div class="sidebar-widget">
			<?//Подсчет дискового пространства?>
			<?$total = disk_total_space("./")/1024/1024/1024?>
			<?$free = disk_free_space("./")/1024/1024/1024?>
			<?$busy = $total - $free?>
			<?$busy_percent = round($busy*100/$total)?>


			<h5 class="title">Дисковое пространство</h5>
			<div class="content">
				<span class="icon16 icomoon-icon-drive left"></span>
				<div class="progress progress-mini progress-success left tip" title="<?=$busy_percent?>%">
					<div class="bar" style="width: <?=$busy_percent?>%;"></div>
				</div>
				<span class="percent"><?=$busy_percent?>%</span>
				<div class="stat"><?=round($busy, 2)?> / <?=round($total, 2)?> GB</div>
			</div>

		</div><!-- End .sidenav-widget -->

		<div class="sidebar-widget">
			<h5 class="title">На данный момент</h5>
			<div class="content">
				<div class="rightnow">
					<ul class="unstyled">
						<li><span class="number">34</span><span class="icon16 icomoon-icon-new-2"></span>Posts</li>
						<li><span class="number">7</span><span class="icon16 icomoon-icon-file"></span>Pages</li>
						<li><span class="number">14</span><span class="icon16 icomoon-icon-list-view"></span>Categories</li>
						<li><span class="number">201</span><span class="icon16 icomoon-icon-tag"></span>Tags</li>
					</ul>
				</div>
			</div>

		</div><!-- End .sidenav-widget -->

	</div><!-- End #sidebar -->


</div><!-- End .span4 -->

<!--content area -->
<div class="span9">

	<!--Body content-->
	<div id="content" class="clearfix">

		<div class="heading">

			<h3><?php echo CHtml::encode($this->pageTitle); ?></h3>

			<div class="resBtnSearch">
				<a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
			</div>

		</div><!-- End .heading-->

		<!-- Build page from here: -->

		<?php echo $content; ?>

		<!-- Page end here -->

		<div class="modal fade hide" id="myModal1">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span class="icon12 minia-icon-close"></span></button>
				<h3>Chat layout</h3>
			</div>
			<div class="modal-body">
				<ul class="messages">
					<li class="user clearfix">
						<a href="#" class="avatar">
							<img src="images/avatar2.jpeg" alt="" />
						</a>
						<div class="message">
							<div class="head clearfix">
								<span class="name"><strong>Lazar</strong> says:</span>
								<span class="time">25 seconds ago</span>
							</div>
							<p>
								Time to go i call you tomorrow.
							</p>
						</div>
					</li>
					<li class="admin clearfix">
						<a href="#" class="avatar">
							<img src="images/avatar3.jpeg" alt="" />
						</a>
						<div class="message">
							<div class="head clearfix">
								<span class="name"><strong>Sugge</strong> says:</span>
								<span class="time">just now</span>
							</div>
							<p>
								OK, have a nice day.
							</p>
						</div>
					</li>

					<li class="sendMsg">
						<form class="form-horizontal" action="#">
							<textarea class="elastic" id="textarea1" rows="1" placeholder="Enter your message ..." style="width:98%;"></textarea>
							<button type="submit" class="btn btn-info marginT10">Send message</button>
						</form>
					</li>

				</ul>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
			</div>
		</div>


	</div>

</div><!-- End .span9 -->

</div><!-- End #wrapper .row -->

</div><!-- End .container -->

<!-- Le javascript
================================================== -->
<!--script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script-->
<script type="text/javascript" src="/admin/js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="/admin/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/admin/js/jquery.mousewheel.js"></script>

<!-- Load plugins -->
<script type="text/javascript" src="/admin/plugins/nicescroll/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/admin/plugins/qtip/jquery.qtip.min.js"></script>
<script type="text/javascript" src="/admin/plugins/flot/jquery.flot.js"></script>
<script type="text/javascript" src="/admin/plugins/flot/jquery.flot.grow.js"></script>
<script type="text/javascript" src="/admin/plugins/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="/admin/plugins/flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="/admin/plugins/flot/jquery.flot.tooltip_0.4.4.js"></script>
<script type="text/javascript" src="/admin/plugins/flot/jquery.flot.orderBars.js"></script>

<script type="text/javascript" src="/admin/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="/admin/plugins/knob/jquery.knob.js"></script>
<script type="text/javascript" src="/admin/plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="/admin/plugins/prettify/prettify.js"></script>

<script type="text/javascript" src="/admin/plugins/watermark/jquery.watermark.min.js"></script>
<script type="text/javascript" src="/admin/plugins/elastic/jquery.elastic.js"></script>
<script type="text/javascript" src="/admin/plugins/inputlimiter/jquery.inputlimiter.1.3.min.js"></script>
<script type="text/javascript" src="/admin/plugins/maskedinput/jquery.maskedinput-1.3.min.js"></script>
<script type="text/javascript" src="/admin/plugins/ibutton/jquery.ibutton.min.js"></script>
<script type="text/javascript" src="/admin/plugins/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="/admin/plugins/stepper/ui.stepper.js"></script>
<script type="text/javascript" src="/admin/plugins/color-picker/colorpicker.js"></script>
<script type="text/javascript" src="/admin/plugins/timeentry/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="/admin/plugins/select/select2.min.js"></script>
<script type="text/javascript" src="/admin/plugins/dualselect/jquery.dualListBox-1.3.min.js"></script>
<script type="text/javascript" src="/admin/plugins/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript" src="/admin/plugins/validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="/admin/plugins/search/tipuesearch_set.js"></script>
<script type="text/javascript" src="/admin/plugins/search/tipuesearch_data.js"></script><!-- JSON for searched results -->
<script type="text/javascript" src="/admin/plugins/search/tipuesearch.js"></script>

<script type="text/javascript" src="/admin/plugins/animated-progress-bar/jquery.progressbar.js"></script>
<script type="text/javascript" src="/admin/plugins/pnotify/jquery.pnotify.min.js"></script>
<script type="text/javascript" src="/admin/plugins/lazy-load/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/admin/plugins/jpages/jPages.min.js"></script>
<script type="text/javascript" src="/admin/plugins/pretty-photo/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/admin/plugins/smartWizzard/jquery.smartWizard-2.0.min.js"></script>

<script type="text/javascript" src="/admin/plugins/ios-fix/ios-orientationchange-fix.js"></script>

<script type="text/javascript" src="/admin/plugins/elfinder/elfinder.min.js"></script>
<script type="text/javascript" src="/admin/plugins/plupload/plupload.js"></script>
<script type="text/javascript" src="/admin/plugins/plupload/plupload.html4.js"></script>
<script type="text/javascript" src="/admin/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>
<script type="text/javascript" src="/admin/plugins/totop/jquery.ui.totop.min.js"></script>

<!-- Init plugins -->
<script type="text/javascript" src="/admin/js/statistic.js"></script><!-- Control graphs ( chart, pies and etc) -->

<!-- Important Place before main.js  -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
<script type="text/javascript" src="/admin/plugins/touch-punch/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="/admin/js/main.js"></script>


</body>
</html>
