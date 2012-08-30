<div class="navbar navbar-static-top">
	<?php session_start(); ?>
	<div class="navbar-inner">
		<div class="container">
			<a type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="/~alex/Harbinger2/">The Harbinger Online</a>
			<div class="nav-collapse">
				<ul class="nav">
					<li id="nav_home" class="active"><a href="/~alex/Harbinger2/">Home</a></li>
					<li id="nav_sports"><a href="/~alex/Harbinger2/sports/">Sports</a></li>
					<li id="nav_clubs"><a href="/~alex/Harbinger2/clubs">Clubs</a></li>
				</ul>
				<!-- if the user is signed in, display the user menu -->
				<?php
					if(isset($_SESSION['myusername'])) {
						echo "<ul class=\"nav pull-right\">
							<li class=\"dropdown pull-right\">
								<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
						echo "<i class=\"icon-white icon-user\"></i> " . $_SESSION['myusername'] . " ";
						echo "<b class=\"caret\"></b>
								</a>
								<ul class=\"dropdown-menu\">
									<li><a href=\"logout.php\">Sign Out</a></li>
								</ul>
							</li>
						</ul>";
					}
				?>
				<!-- if no one is signed in, display the login fields -->
				<?php 
					if(!isset($_SESSION['myusername'])) {
						echo "<a href=\"#signup\" role=\"button\" class=\"btn pull-right\" data-toggle=\"modal\" style=\"margin-left: 4px\">Sign Up</a>
							<form method=\"POST\" action=\"check.php\" class=\"navbar-form pull-right\">
								<input type=\"text\" name=\"username\" class=\"span2\" placeholder=\"Username\">
								<input type=\"password\" name=\"password\" class=\"span2\" placeholder=\"Password\">
								<button type=\"submit\" class=\"btn\">Login</button>
							</form>";	
					}
				?>
				<div class="modal hide fade" id="signup">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 style="text-align: center;">Sign Up for a Harbinger Account!</h3>
					</div><!-- end "modal-header"-->
					<div class="modal-body">
					
					</div><!-- end "modal-body" -->
					<div class="modal-footer">
					
					</div><!-- end "modal-footer" -->
				</div><!-- end "modal" -->
			</div>
		</div>
	</div>
</div>