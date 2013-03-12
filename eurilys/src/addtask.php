<?php include 'logged_in_header.php'; ?>	

<!-- Web Content -->
<section>
	<div id="navbar">
		<div id="short_profile">
			<img id="profile_picture" src="../img/avatar1.png" alt="">
			<div id="profile_info">
				Ruth Natasha 
				<br><br>
				<div class="link_tosca" id="edit_profile_button"> Edit Profile </div>
			</div>
		</div>
		<div id="category_list">
			<div class="link_blue_rect" id="category_title"><a href="#" onclick="catchange(0)">All Categories </a> </div>
			<ul id="category_item">
				<li><a href="Dashboard.php" onclick="catchange(1)" id="kuliah">Kuliah</a></li>
				<li><a href="Dashboard.php" onclick="catchange(2)" id="proyek">Proyek</a></li>
				<li><a href="Dashboard.php" onclick="catchange(3)" id="tugas">Tugas</a></li>
				<li><a href="Dashboard.php" onclick="catchange(4)" id="lomba">Lomba</a></li>
			</ul>
			<div id="add_task_link"> <a href="addtask.php"> + new task </a> </div>
			<div id="add_new_category" onclick="toggle_visibility('category_form');"> + new category </div>
			<div id="category_form">
				<div id="category_form_inner">
					Category name : <br>
					<input type="text" id="add_category_name" value="">
					<br><br>
					Assignee(s) : <br>
					<input type="text" id="add_category_asignee_name" value="">
					<br><br>
					<div id="add_category_button" class="link_red" onclick="add_category()"> Add </div>
				</div>
			</div>
		</div>
	</div>
	<div id="dynamic_content">
		<div id="add_task_container">
			<div id="add_task_header" class="left top30 dynamic_content_head">
				Add New Task
			</div>
	
			<div id="row1_addtask" class="left top30 dynamic_content_row">
				<div id="task_name_lat" class="left dynamic_content_left">Task Name</div>
				<div id="task_name_rat" class="left dynamic_content_right">
					<input id="task_name_input" onkeydown="javascript:checkTaskName();" type="text" name="task_name_input" class="left">
					<img src="../img/yes.png" id="taskname_validation" class="left signup_form_validation" alt="validation image"/>
				</div>
			</div>
			
			<div id="row2_addtask" class="left top10 dynamic_content_row">
				<div id="attachment_lat" class="left dynamic_content_left">Attachment</div>
				<div id="attachment_rat" class="left dynamic_content_right">
					<input id="attachment_upload" type="file" onchange="javascript:checkTaskAttachment();" name="attachment_file" class="left">
					<img src="../img/yes.png" id="task_attachment_validation" class="left signup_form_validation" alt="validation image"/>
				</div>
			</div>
			
			<div id="row3_addtask" class="left top10 dynamic_content_row">
				<div id="deadline_lat" class="left dynamic_content_left">Deadline</div>
				<div id="deadline_rat" class="left dynamic_content_right">
					<input id="deadline_input" type="date" name="deadline_input">
				</div>
			</div>
			
			<div id="row4_addtask" class="left top10 dynamic_content_row">
				<div id="assignee_lat" class="left dynamic_content_left">Assignee</div>
				<div id="assignee_rat" class="left dynamic_content_right">
					<input id="assignee_input" type="text" name="assignee_input" autocomplete="on">
				</div>
			</div>
		
			<div id="row5_addtask" class="left top10 dynamic_content_row">
				<div id="tag_lat" class="left dynamic_content_left">Tag</div>
				<div id="tag_rat" class="left dynamic_content_right">
					<input id="tag_input" type="text" name="tag_input" >
				</div>
			</div>
			
			<div id="row6_addtask" class="left top10 dynamic_content_row">
				<input id="add_task_button" type="button" value="Add Task" class="link_blue_rect">
			</div>
		</div>
	</div>
</section>
		
<?php include '../footer.php'; ?>	