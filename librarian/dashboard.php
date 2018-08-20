
<!-- Note:
* Para mabawasan ang mga pages at maiwasan ang complex inclusion, 
minabuti ko na baguhin at gawin simple.
Plano ko na ihiwalay lang ang mismong PHP codes sa mga HTML sturucture. 

* Si Dashboard.php na naka include si head.php, sidebar.php, at thumbnail.php
ay pinag isa ko na lang sa page ni dashboard.php
-->


<?php
    include('title/title_home.php');
    include('header.php'); 
    include('session.php'); 
    include('navbar_dashboard.php'); 
?>
    <div class="container">
		<div class="margin-top">
			<div class="row">

				<div class="span12">	<!-- <?php /*include('head.php');*/ ?> -->
						<div class="header">
							<div class="pull-left">
								<img class="stilogo" src="../images/QCPU.png">
							</div>
						</div>
						<div class="alert alert-info"><Strong>Heads Up!</strong>&nbsp;Welcome to QCPU Library
						<div class="pull-right">
							<i class="icon-calendar icon-large"></i>
							<?php
								$Today = date('y:m:d');
								$new = date('l, d F, Y', strtotime($Today));
								echo $new;
							?>
						</div>
					</div>			
				</div> <!--<?php /*include('head.php');*/ ?>-->

				<div class="span2">
					<div class="life-side-bar">	<!-- <?php /*include('sidebar.php');*/ ?> -->
						<ul class="nav nav-tabs nav-stacked">
							<li class="">
								<a   href="#"><i class="icon-phone icon-large"></i>&nbsp;Contact US</a>
							</li>
						</ul>

						<strong>Address</strong>
						<p>San Bartolome, Novaliches, Quezon City</p><br>

						<strong>School</strong>
						<p>Quezon City<br> Polytechnic University</p> <br>

						<strong>Cp. nos.:</strong>
						<p>0909.820.2040</p><br>

						<strong>Email Address:</strong>
						<p>potolin.federex@gmail.com </p>

					</div>	<!--<?php /*include('sidebar.php');*/ ?>-->
				</div>


				<div class="span2">
					<div class="span10">
						<ul id="da-thumbs" class="da-thumbs"> <!--<?php /*include('thumbnail.php');*/ ?>-->
							<li>
								<a href="">
									<img src="../images/bsit.jpg" />
									<div><span>Image 1</span></div>
								</a>
							</li>
							<li>
								<a href="">
									<img src="../images/bsece.jpg" />
									<div><span>Image 2</span></div>
								</a>
							</li>
							<li>
								<a href="">
									<img src="../images/bsem.png" />
									<div><span>Image 3</span></div>
								</a>
							</li>
							<li>
								<a href="">
									<img src="../images/bsie.jpg" />
									<div><span>Image 4</span></div>
								</a>
							</li>
						</ul> <!--<?php /*include('thumbnail.php');*/ ?>-->
					
						<div class="text_content">  <!-- text content -->
							<div class="abc">
								<h4>Vision</h4>
									<p>
									The constituents of the Philippines as a whole, 
									while starting in Quezon City in particular, enjoy 
									the good life mainly as a result of their native
									talent, gained wisdom, and hardwork.
									</p>
								
									<br/>
									<hr>
								
								<h4>Mission</h4>
									<p>
									To provide education that will awaken full understanding
									of the essence of the natural resources of the country,
									and the potentials of the human resources of the nation.
									</p>
								
									<br/>
									<hr>
							</div>
						</div>	<!-- text content end-->
					</div>	
				</div>
			</div>
    	</div>
	</div> <!--  container end -->

<?php include('footer.php') ?>