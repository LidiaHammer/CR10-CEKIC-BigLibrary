<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<?php
	require_once 'db_connect.php';

	if ($_POST) {
		$title = $_POST["title"];
		$author_firstname = $_POST["author_firstname"];
		$author_lastname = $_POST["author_lastname"];
		$ISBN= $_POST["ISBN"];
		$short_description= $_POST["short_description"];
		$publish_date= $_POST["publish_date"];
		$publisher_name= $_POST["publisher_name"];
		$publisher_address= $_POST["publisher_address"];
		$publisher_size= $_POST["publisher_size"];
		$type= $_POST["type"];
		$image = $_POST["image"];

		$sql = "INSERT INTO data(title, author_firstname, author_lastname, ISBN, short_description, publish_date, publisher_name, publisher_address, publisher_size, type, image) VALUES ('$title', '$author_firstname', '$author_lastname', '$ISBN', '$short_description','$publish_date','$publisher_name','$publisher_address','$publisher_size','$type','$image')";

		if(mysqli_query($conn, $sql)) {
			echo "<h3 class='ml-5 mt-5'>A new media has been successfully added to your library. </h3><br><a href='../index.php'> <button type='button' class='btn btn-success ml-5'>Back to the home page</button> </a>";
		} else {
			echo "error blabla";
		}
	}
?>