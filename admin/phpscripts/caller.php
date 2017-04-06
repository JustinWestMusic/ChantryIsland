<?php
		require_once('init.php');

		if(isset($_GET['caller_id']))
		{
			$dir = $_GET['caller_id'];

			if($dir == "logout")
			{
				logged_out();
			}
			else if($dir == "delete")
			{
				$id = $_GET['id'];
				deleteUser($id);
			}
			else if($dir == "deleteNews")
			{
				$id = $_GET['id'];
				deleteNews($id);
			}
			else if($dir == "deleteEvents")
			{
				$id = $_GET['id'];
				deleteEvents($id);
			}
			else if($dir == "deleteVolunteers")
			{
				$id = $_GET['id'];
				deleteVolunteers($id);
			}
			else
			{
				echo "caller id was passed incorrectly.";
			}
		}
		
?>