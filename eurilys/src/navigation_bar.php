<?php 
	ob_start(); //You could also just output the $image via header() and bypass this buffer capture.
	
	/* Configuring Server & Database */
	$host        =    'localhost';
	$user        =    'root';
	$password    =    '';
	$database    =    'progin_405_13510086';
	$con        =    mysql_connect($host,$user,$password) or die('Server information is not correct.');
	mysql_select_db($database,$con) or die('Database information is not correct');

	
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username']; 
	}
	
	/*
	$query	= "SELECT avatar FROM user WHERE username='$username' LIMIT 1";
	$result	=  mysql_query($query) or die(mysql_error());
	
	
	while ($row = mysql_fetch_row($result)) {
		echo '<img src="data:image/jpg;base64,'.base64_encode($row[0]).'" alt="photo">';
	} */

?>
<div id="navbar">
	<div id="short_profile">
		<img id="profile_picture" src="../img/avatar1.png" alt="">
		<div id="profile_info">
			Welcome, <br>
			<a href="profile.php" class="darkBlue"> <?php if (isset($_SESSION['fullname'])) {echo $_SESSION['fullname']; }?> </a>
			<br><br>
			<div class="link_tosca" id="edit_profile_button"> <a href="edit_profile.php"> Edit Profile </a></div>
		</div>
	</div>
	<div id="category_list">
		<div class="link_blue_rect" id="category_title"><a href="#" onclick="javascript:generateTask('all')"> All Categories </a> </div>
		<ul id="category_item">
			<?php 
				$query 	= "SELECT * FROM category WHERE cat_creator = '$username'";
				$result	= mysql_query($query);
				while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
					echo "<li> <span class='categoryList' onclick='javascript:generateTask(\"".$row['cat_name']."\")'> ".$row['cat_name']." </span> </li>";
				}
			?>
		</ul>
		<div id="add_task_link"> <a id="add_task" name="" onclick="addCatName();" href="addtask.php"> + new task </a> </div>
		<div id="add_new_category" onclick="toggle_visibility('category_form');"> + new category </div>
		<div id="category_form">
			<div id="category_form_inner">
				<form method="POST" action="add_category_script.php">
					Category name : <br>
					<input type="text" name="add_category_name" id="add_category_name" value="">
					<br><br>
					Assignee(s) : <br>
					<input type="text" name="add_category_asignee_name" id="add_category_asignee_name" value="">
					<br><br>
					<button type="submit" id="add_category_button" name="add_category_button" class="link_red"> Add </div>
				</form>
			</div>
		</div>
	</div>
</div>