<!DOCTYPE html>
<html>

<head>

	<title>Harborfields High School</title>
	
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	
	<link rel="stylesheet" href="css/header.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/footer.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/all.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css">
	<link rel="stylesheet" href="css.css" type="text/css">
	
	<script src="js/jquery-1.8.0.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.news_stories.js"></script>
	<script src="js/jquery.beforeAfter.min.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
	

	<script type="text/javascript">
		// Fancybox
		$(function() {
			$('.fancy').fancybox({
				'hideOnContentClick' : false,
				'openEffect' : 'fade',
			});
		});
		
		$(function() {
			$(document)
				.beforeAfter();
		});
		
	</script>
	
	<?php
	$starttime = explode(' ', microtime());
	$starttime = $starttime[1] + $starttime[0];
	include_once('autoloader.php');
	include_once('idn/idna_convert.class.php');
	$feed = new SimplePie();
	$feed->set_feed_url('http://hfannouncements.blogspot.com/feeds/posts/default');
	$feed->enable_cache(false);
	$success = $feed->init();
	$feed->handle_content_type();
	?>


	<style type="text/css">

		li#home {
			background-color: #629b63 !important;
		}
		
	</style>

</head>

<body>

<!-- !Content -->
	<div class="content">
	
	<!--#include file="header.shtml"-->
	
		<!-- !News -->
		
		<div id="news">
		
			<div id="news_title_container">
		
				<img id="talk_bubble" src="images/talk_bubble.png" alt="talk_bubble" width="30" height="32" />
			
				<span id="news_title">Harborfields News</span>
				
			</div><!-- end "news title container" -->
				
			<div id="container_box">
			<img id="back_button" src="images/Prev.png" alt="Prev" width="35" height="35" />
			<img id="forward_button" src="images/Next.png" alt="Next" width="35" height="35" />

				<div id="outerbox">
					<div id="innerbox">
					
						<a class="fancy fancybox.iframe" href="harbinger/2012/september/manning.html"><div id="manning" class="article">
							
							<h3>Meet Dr. Manning</h3>
							
							<img src="stories/Meet%20Dr.%20Manning/manning.jpg" alt="manning" width="170" height="230" />
							
							<p>Click here to learn more and read our interview with HF's new principal!</p>
							
						</div></a> <!-- end "manning" --> 
						
						<div class="article">
						
							<div class="empty_article">
							
								<a href="pages/getinvolved.html"><h2>Your article could appear here!</h2></a>
							
							</div>
							
						</div>
						
						<div class="article">
						
							<div class="empty_article">
							
								<a href="pages/getinvolved.html"><h2>Your article could appear here!</h2></a>
							
							</div>
						
						</div>
						
						<div class="article">
						
							<div class="empty_article">
							
								<a href="pages/getinvolved.html"><h2>Your article could appear here!</h2></a>
							
							</div>
						
						</div>
						
						<div class="article">
						
							<div class="empty_article">
							
								<a href="pages/getinvolved.html"><h2>Your article could appear here!</h2></a>
							
							</div>
						
						</div>
						
						<div class="article">
						
							<div class="empty_article">
							
								<a href="pages/getinvolved.html"><h2>Your article could appear here!</h2></a>
							
							</div>
						
						</div>
						

					</div> <!-- end "innerbox" -->
				</div> <!-- end "outerbox" -->
			</div> <!-- end "container_box" -->
		</div> <!-- end "news" -->
		
		<!-- !Important Stuff -->
		<div id="important_stuff">
			<div id="announcements_wrap">
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
								</div>
			
							<!-- Stop looping through each item once we've gone through all of them. -->
							<?php endforeach; ?>
			
						<!-- From here on, we're no longer using data from the feed. -->
						<?php endif; ?>
			
					</div>
					
					
					
				</div><!-- end "announcements" -->
			</div><!-- end "announcements wrap" -->
			
			<div id="important_wrap">
				<div id="important">
					<h2>Important Reminders</h2>
					
					<ul>
						<li>This is only a rough copy of the "final" site. There is a major re-vamping that is already underway which will include a mobile version. Things may looks a little rough around the edges right now, but over time that'll get cleaned up.</li>
						<li>There are no other reminders at this time.</li>
					</ul>

				</div>
			</div><!-- end "important wrap" -->
			<div style="clear:both"></div>
		</div><!-- end "important stuff" -->
		
	<!-- !Footer Spacer -->
		<div class="footer_spacer"></div>
		
	</div> <!-- end "content" -->
	
	<div class="footer">
	
		<!--#include file="footer.shtml" -->
		
		<span id="edited_by">Last edited by Alex LaFroscia on August 2, 2012.</span>
	
	</div> <!-- end "footer" -->
	


</body>

</html>