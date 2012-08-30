<div class="navbar navbar-static-top">
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
				<?php 
					if(!isset($_SESSION['myusername'])) {
						echo "<form method=\"POST\" action=\"check.php\" class=\"navbar-form pull-right\">
								<input type=\"text\" name=\"username\" class=\"span2\" placeholder=\"Username\">
								<input type=\"password\" name=\"password\" class=\"span2\" placeholder=\"Password\">
								<button type=\"submit\" class=\"btn\">Login</button>
							</form>";
					} else {
						print "goodbye";
					}
				?>
			</div>
		</div>
	</div>
</div>