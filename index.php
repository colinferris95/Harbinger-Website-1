<!DOCTYPE html>
<html>

<head>

	<title>The Harbinger Online</title>
	
	<!-- enable webapp on iPhone -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="img/Apple-Icon.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="img/Apple-Icon-Retina.png" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">


	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css.css" type="text/css">
	<link rel="stylesheet" href="css/all.css" type="text/css">
	<link rel="stylesheet" href="css/footer.css" type="text/css">
	
	<script src="js/jquery-1.8.0.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/jquery.news_stories.js" type="text/javascript"></script>
	<script src="js/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="js/jquery.mobile-1.2.0-alpha.1.min.js" type="text/javascript"></script>
	
	<script type="text/javascript">
	
		// Disable jquery mobile loading message
		$.mobile.loadingMessage = false;
	
		// Fancybox
		$(function() {
			$('.fancy').fancybox({
				'hideOnContentClick' : false,
				'openEffect' : 'fade',
			});
		});
		
		$(function() {
			$('#important').swipeleft(function() {
				$('#important').css('display', 'none');
			});
		});
		
	
	</script>
	
	<?php
	$starttime = explode(' ', microtime());
	$starttime = $starttime[1] + $starttime[0];
	include_once('autoloader.php');
	include_once('idn/idna_convert.class.php');
	$feed = new SimplePie();
	/* if (isset($_GET['js']))
	{
		SimplePie_Misc::output_javascript();
		die();
	} */
	$feed->set_feed_url('http://hfannouncements.blogspot.com/feeds/posts/default');
	/*if (!empty($_GET['input']))
	{
		$feed->set_input_encoding($_GET['input']);
	}
	if (!empty($_GET['orderbydate']) && $_GET['orderbydate'] == 'false')
	{
		$feed->enable_order_by_date(false);
	}
	if (!empty($_GET['force']) && $_GET['force'] == 'true')
	{
		$feed->force_feed(true);
	} */
	$success = $feed->init();
	$feed->handle_content_type();
	?>

</head>

<body>
	
	<div id="content">
		<div class="navbar navbar-static-top">
			<div class="navbar-inner">
				<div class="container">
					<a type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="#">The Harbinger Online</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Sports</a></li>
							<li><a href="#">Clubs</a></li>
							<li><a href="#">Arts</a></li>
						</ul>
						<form style="float:right;" class="navbar-search pull-left hidden-phone hidden-tablet">
							<input type="text" class="search-query" placeholder="Search">
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<div id="news">
			
			<div class="row">
				<div class="span10 offset2" id="news_title_row"><h2 id="news_title">Harborfields News</h2></div>
			</div>
				
			<div id="container_box">
			<img id="back_button" src="images/Prev.png" alt="Prev" width="35" height="35" />
			<img id="forward_button" src="images/Next.png" alt="Next" width="35" height="35" />
	
				<div id="outerbox">
					<div id="innerbox">
					
						<a class="fancy fancybox.iframe" href="harbinger/2012/september/manning.html"><div id="manning" class="article">
							
							<h3>Meet Dr. Manning</h3>
							
							<img src="stories/Meet%20Dr.%20Manning/manning.jpg" alt="manning" width="170" height="230" />
							
							<p>Click here to learn more and read our interview with HF's new principal!</p></a>
							
						</div> <!-- end "manning" --> 
						
						<div class="article">
							
						</div>
						
						<div class="article">
						
						</div>
						
						<div class="article">
						
						</div>
						
						<div class="article">
						
						</div>
						
						<div class="article">
						
						</div>
						
	
					</div> <!-- end "innerbox" -->
				</div> <!-- end "outerbox" -->
			</div> <!-- end "container_box" -->
		</div> <!-- end "news" -->
		
		<div class="container" id="important_stuff">
			<div class="row">
				<div class="span6">
					<div id="announcements">
						<a href="http://hfannouncements.blogspot.com/"><h2>Today's Announcements</h2></a>
						
						<?php
							// Check to see if there are more than zero errors (i.e. if there are any errors at all)
							if ($feed->error())
							{
								// If so, start a <div> element with a classname so we can style it.
								echo '<div class="sp_errors">' . "\r\n";
				
									// ... and display it.
									echo '<p>' . htmlspecialchars($feed->error()) . "</p>\r\n";
				
								// Close the <div> element we opened.
								echo '</div>' . "\r\n";
							}
						?>
			
						<div id="sp_results">
			
							<!-- As long as the feed has data to work with... -->
							<?php if ($success): ?>
								<!-- Let's begin looping through each individual news item in the feed. -->
								<?php foreach($feed->get_items(0, 1) as $item): ?>
									<div class="chunk">			
										<!-- Display the item's primary content. -->
										<h4><?php if ($item->get_permalink()) echo '<a href="' . $item->get_permalink() . '">'; echo $item->get_title(); if ($item->get_permalink()) echo '</a>'; ?>&nbsp;<span class="footnote"></h4>
										<?php echo $item->get_content(); ?>
									</div><!-- end "chunk" -->
				
								<!-- Stop looping through each item once we've gone through all of them. -->
								<?php endforeach; ?>
				
							<!-- From here on, we're no longer using data from the feed. -->
							<?php endif; ?>
						</div><!-- end "sp_results"-->
					</div><!-- end "announcements"-->
				</div><!-- end "span6" -->
				
				<div class="span6">
					<div id="important">
						<h2>Important Reminders</h2>
						
						<ul>
							<li>This is a very important reminder.</li>
							<li>There are very important things going on right now.</li>
							<li>It's too bad that it's summer right now, and in reality, there are no things going on.</li>
						</ul>
			
					</div><!-- end "important"-->
				</div><!-- end "span6" -->
		
				
			</div><!-- end "row" -->
			
		</div><!-- end "important_center" -->
		
		<div id="footer_spacer"></div>
		
	</div><!-- end "content"-->
	
	<div id="footer">
	
		<!--#include file="footer.shtml" -->
		
		<div class="container" id="edited_by">
			<div class="span6 offset6">
				<span id="edited_by">Last edited by Alex LaFroscia on August 22, 2012.</span>
			</div>
		</div>
	</div> <!-- end "footer" -->

</body>

</html>