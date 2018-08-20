<!-- Note:
* Para mabawasan ang mga pages at maiwasan ang complex inclusion, 
minabuti ko na baguhin at gawin simple.
Plano ko na ihiwalay lang ang mismong PHP codes sa mga HTML sturucture. 

* Si navbar_dashboard.php na naka include si dropdown.php
ay pinag isa ko na lang sa page ni navbar_dashboard.php

* Madaming navbar, pero binura ko..
Ang bawat navbar ay naka active base sa link na naka target sa kanya.
Nag focus ako sa isang navbar lang para mabawasan yun page.
Ang disadvantage, nawala yun class="active" sa bawat link target.
-->


<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <!-- .nav, .navbar-search, .navbar-form, etc -->
			<ul class="nav">
			<li><a href="dashboard.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
			<li><a href="admin.php"><i class="icon-user icon-large"></i>&nbsp;Admin</a></li>
			<li><!-- <?php /*include('dropdown.php')*/; ?> -->		
				<a href="borrow.php"  data-toggle="dropdown" ><i class="icon-file icon-large"></i> Transaction</a>
				<ul class="dropdown-menu">
				<li><a href="borrow.php"><i class="icon-pencil icon-large"></i>&nbsp;Borrow</a></li>
				<li><a href="returned.php"><i class="icon-cog icon-large"></i>&nbsp;View Returned Books</a></li>
				<li><a href="borrowed_view.php"><i class="icon-reorder icon-large"></i>&nbsp;View Borrowed Books</a></li>
				</ul>
			</li><!-- <?php /*include('dropdown.php')*/; ?> -->
			<li><a href="book_all.php"><i class="icon-book icon-large"></i>&nbsp;Books</a></li>
			<li><a href="member.php"><i class="icon-group icon-large"></i>&nbsp;member</a></li>
			<li><a href="archive.php"><i class="icon-list-alt icon-large"></i>&nbsp;Archive</a></li>
			<li><a href="#search_form_modal" data-toggle="modal"><i class="icon-search icon-large"></i>&nbsp;Advance Search</a></li>
			

			<!-- <li><a href="section.php"><i class="icon-group icon-large"></i>&nbsp;Sections</a></li> -->
			<li><a href="logout.php"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
			</ul>
			 <div class="pull-right">
				<div class="admin">Welcome: Admin Rex</div>
             </div>
            </div>
        </div>
    </div>
</div>
		
<?php include('search_form.php'); ?>
 
