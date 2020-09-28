<div id="bodyleft">
	<!--categories managment section-->
	<h3>Categories Managment</h3>
	<ul>
		<li>
			<a href="index.php">Dashboard</a>
		</li>
		<li>
			<a href="index.php?category">View Course Categories</a>
		</li>
		<li>
			<a href="#">View Course Sub Categories</a>
		</li>
	</ul>
	<!--categories managment section-->
	<!--course managment section-->
	<h3>Courses Managment</h3>
	<ul>
		<li>
			<a href="#">Active Courses</a>
		</li>
		<li>
			<a href="#">Pending Courses</a>
		</li>
		<li>
			<a href="#">Unpublish Courses</a>
		</li>
		<li>
			<a href="#">Advance Course Search</a>
		</li>
	</ul>
	<!--course managment section-->
	<!--user managment section-->
	<h3>User Managment</h3>
	<ul>
		<li>
			<a href="#">View All Students</a>
		</li>
		<li>
			<a href="#">View All Teachers</a>
		</li>
		<li>
			<a href="#">Advance User Search</a>
		</li>
	</ul>
	<!--user managment section-->
	<!--payment managment section-->
	<h3>Payment Managment</h3>
	<ul>
		<li>
			<a href="#">Pay to Teachers</a>
		</li>
		<li>
			<a href="#">Complete Payment</a>
		</li>
		<li>
			<a href="#">Advance Payment Searching</a>
		</li>
	</ul>
	<!--payment managment section-->
	<!--pages managment section-->
	<h3>Pages Managment</h3>
	<ul>
		<li>
			<a href="#">Terms & Conditions Page</a>
		</li>
		<li>
			<a href="#">Contacts Us Page</a>
		</li>
		<li>
			<a href="#">About Us Page</a>
		</li>
		<li>
			<a href="#">FAQs Page</a>
		</li>
		<li>
			<a href="#">Edit Slider</a>
		</li>
	</ul>
	<!--pages managment section-->
</div>

<!--php section to routing-->
<?php
# consulting the $_GET variable to check if exist & is not null
if(isset($_GET['category'])){
	include('category.php');
}	

?>



<!--php section to routing-->