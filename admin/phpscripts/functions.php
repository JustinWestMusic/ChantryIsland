<?php
	
	function redirect_to($location)
	{
		if($location != NULL) 
		{
			header("Location: {$location}");
			exit;
		}
	}

	date_default_timezone_set('America/Toronto'); //Selects and sets a timezone

	function welcomeTime() //This function uses if and elseif statements to return a specific message based on the time of day. The comparison is made between certain hours of the day using the 24 hour clock system.
	{
 
	   if(date("H") < 12)
		   {
		     return "Good Morning";
		   }
	   elseif(date("H") > 11 && date("H") < 17)
		   {
		     return "Good Afternoon";
		   }
	   elseif(date("H") > 16 && date("H") < 23)
		   {
		     return "Good Evening";
		   }
		elseif(date("H") < 24)
		   {
		     return "You're up pretty late";
		   }
	 
	}

	function timeOfDay()
	{
 
	   if(date("H") < 12)
		   {
		     return "today?";
		   }
	   elseif(date("H") > 11 && date("H") < 17)
		   {
		     return "today?";
		   }
	   elseif(date("H") > 16 && date("H") < 24)
		   {
		     return "tonight?";
		   }
	}

	function addNews($newsTitle, $newsImage, $newsText, $newsDate) 
	{
		include("connect.php");

		
		$newsImage  = mysqli_real_escape_string($link, $newsImage);

		if($_FILES['news_image']['type'] == "image/jpg" || $_FILES['news_image']['type'] == "image/jpeg")//this is not a location it is a file type
		{
			//echo "this is a jpg";
			
			$targetpath = "../images/{$newsImage}";

			if(move_uploaded_file($_FILES['news_image']['tmp_name'], $targetpath))
			{
				
				$qstring = "INSERT INTO tbl_news VALUES(NULL, '{$newsTitle}', '{$newsImage}', '{$newsText}', '{$newsDate}')";
				//echo $qstring;
				$result = mysqli_query($link, $qstring);
				
				if($result == 1)
				{
					$qstring2 = "SELECT * FROM tbl_news ORDER BY news_id DESC LIMIT 1";
					$result2 = mysqli_query($link, $qstring2);
					
					$row = mysqli_fetch_array($result2);
					$lastID = $row['news_id'];
					
					
					redirect_to("admin_index.php");
				}

			}
		}
		else
		{
			echo "Sorry you have either uploaded an incompatible file type or a file larger than 2mb. Please remember that only .jpg and .jpeg files will be accepted!";
		}

		mysqli_close($link);
	}

	function addEvents($eventsTitle, $eventsText, $eventsDate) 
	{
		include("connect.php");

				
			$qstring = "INSERT INTO tbl_events VALUES(NULL, '{$eventsTitle}', '{$eventsText}', '{$eventsDate}')";

				$result = mysqli_query($link, $qstring);
				
				if($result == 1)
				{
					$qstring2 = "SELECT * FROM tbl_events ORDER BY events_id DESC LIMIT 1";
					$result2 = mysqli_query($link, $qstring2);
					
					$row = mysqli_fetch_array($result2);
					$lastID = $row['events_id'];
				
					
					redirect_to("admin_index.php");
				}


		mysqli_close($link);
	}

	function addVolunteers($volunteersName, $volunteersImage, $volunteersPosition)
	{
		include("connect.php");

		
		$volunteersImage  = mysqli_real_escape_string($link, $volunteersImage);

		if($_FILES['volunteers_img']['type'] == "image/jpg" || $_FILES['volunteers_img']['type'] == "image/jpeg")//this is not a location it is a file type
		{
			//echo "this is a jpg";
			
			$targetpath = "../images/{$volunteersImage}";

			if(move_uploaded_file($_FILES['volunteers_img']['tmp_name'], $targetpath))
			{
				
				$qstring = "INSERT INTO tbl_volunteers VALUES(NULL, '{$volunteersName}', '{$volunteersImage}', '{$volunteersPosition}')";
				//echo $qstring;
				$result = mysqli_query($link, $qstring);
				
				if($result == 1)
				{
					$qstring2 = "SELECT * FROM tbl_volunteers ORDER BY volunteers_id DESC LIMIT 1";
					$result2 = mysqli_query($link, $qstring2);
					
					$row = mysqli_fetch_array($result2);
					$lastID = $row['volunteers_id'];
					

					redirect_to("admin_index.php");
				}

			}
		}
		else
		{
			echo "Sorry you have either uploaded an incompatible file type or a file larger than 2mb. Please remember that only .jpg and .jpeg files will be accepted!";
		}

		mysqli_close($link);
	}


	function sendInfo($email, $username, $password, $fname)
	{
		$to = $email;
		$subj = "Message from admin site";
		$body = "Email: {$email}\n\nUsername: {$username}\n\nPassword: {$password}";
		$linkToSite = "Hello". " ". $fname . ", ". "you have just signed up for an acount at Chantry Island. Using the credentials below please go to https://justinwest.ca/chantryisland/admin/admin_login.php to login.";
			
		//echo $body;
		
		mail($to, $subj, $body, $linkToSite);
		
	}

	function sendMessage($name, $email, $phone, $subject, $msg, $direct)
	{
		
		$to = "justinwestmusic@hotmail.com";
		$subj = "{$subject}";
		$extra = "Reply-To: {$email}";
		$body = "Name: {$name}\n\nEmail: {$email}\n\nMessage: {$msg}\n\nPhone: {$phone}";
			
		//echo $body;
		
		
		//This will not work locally on your machine
		mail($to, $subj, $body, $extra);
		redirect_to($direct);	
	}
	
?>