<section class="container clearfix">
			<div class="logo"><a href="index.php"><img alt="" src="images/logo.png"></a></div>
			<nav class="navigation">
				<ul>
					<li  <?php if ($current_page == "home") { ?>class="current_page_item"<?php } ?> ><a href="index.php">Home</a>
						
					</li>
				
				
					<li  <?php if ($current_page == "category") { ?>class="current_page_item"<?php } ?>><a href="#">Category</a>
						<ul>
							<li><a href="cat_question.php?id=1">Information Technology </a></li>
							<li><a href="cat_question.php?id=2">Education</a></li>
							<li><a href="cat_question.php?id=3">Politics</a></li>
							<li><a href="cat_question.php?id=4">Sports</a></li>
							<li><a href="cat_question.php?id=5">Miscellaneous</a></li>
						</ul>
					</li>
                    <li  <?php if ($current_page == "about") { ?>class="current_page_item"<?php } ?>><a href="aboutus.php">About Us</a></li>
              <?php ?>      
                  <?php   if (!isset( $_SESSION['username'])) { ?>
					<li  <?php if ($current_page == "login") { ?>class="current_page_item"<?php } ?>><a href="login.php">Login</a></li>
                    <li  <?php if ($current_page == "signup") { ?>class="current_page_item"<?php } ?>><a href="signUp.php">Sign Up</a></li>
				<?php
    			  } ?><?php ?>
					<li <?php  if ($current_page == "contact") { ?>class="current_page_item"<?php } ?>><a href="contact_us.php">Contact Us</a></li>
				</ul>
			</nav>
		</section><!-- End container -->