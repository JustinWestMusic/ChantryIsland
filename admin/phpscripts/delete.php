<?php	

	function deleteNews($id)
	{
		include("connect.php");
		$delstring = "DELETE FROM tbl_news WHERE news_id = {$id}";
		$delquery = mysqli_query($link, $delstring);

		if($delquery)
		{
			redirect_to("../admin_index.php");
		}
		else
		{
			echo "This news item cannot be deleted.";
		}

		mysqli_close($link);
	}

	function deleteEvents($id)
	{
		include("connect.php");
		$delstring = "DELETE FROM tbl_events WHERE events_id = {$id}";
		$delquery = mysqli_query($link, $delstring);

		if($delquery)
		{
			redirect_to("../admin_index.php");
		}
		else
		{
			echo "This event item cannot be deleted.";
		}

		mysqli_close($link);
	}

	function deleteVolunteers($id)
	{
		include("connect.php");
		$delstring = "DELETE FROM tbl_volunteers WHERE volunteers_id = {$id}";
		$delquery = mysqli_query($link, $delstring);

		if($delquery)
		{
			redirect_to("../admin_index.php");
		}
		else
		{
			echo "This event item cannot be deleted.";
		}

		mysqli_close($link);
	}

?>