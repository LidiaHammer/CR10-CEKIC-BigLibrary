<?php
	require_once 'actions/db_connect.php';
	if ($_GET["id"]) {
		$id = $_GET["id"];
		$sql = "SELECT * FROM data WHERE id = $id";
		$result = mysqli_query($conn, $sql);
		$row = $result->fetch_assoc();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    form {
        max-width: 40em;
    }
    </style>
    
</head>
<body>
<fieldset >
   <h3 class="m-3">Update Media</h3>
	<form action="actions/a_update.php" class="form-group ml-3" method="post">
  <div class="form-row">
  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
           <div class="form-group col-md-6">
               <label>title</label>
               <input type="text" class="form-control" name="title" value="<?php echo $row['title'] ?>">
           </div>    
           <div class="form-group col-md-6">
               <label>Author Firstname</label>
               <input type="text" class="form-control" name="author_firstname" value="<?php echo $row['author_firstname'] ?>">
           </div>
           <div class="form-group col-md-6">
               <label>Autho Lastname</label>
               <input type="text" class="form-control" name="author_lastname" value="<?php echo $row['author_lastname'] ?>">
           </div>
           <div class="form-group col-md-6">
               <label>ISBN</label>
               <input type="text" class="form-control" name="ISBN" value="<?php echo $row['ISBN'] ?>">
           </div>
           <div class="form-group col-md-6">
               <label>short description</label>
               <input type="text" class="form-control" name="short_description" value="<?php echo $row['short_description'] ?>">
           </div>
           <div class="form-group col-md-6">
               <label>publish date</label>
               <input type="date" class="form-control" name="publish_date" value="<?php echo $row['publish_date'] ?>">
           </div>
           <div class="form-group col-md-6">
               <label>publish name</label>
               <input type="text" class="form-control" name="publisher_name" value="<?php echo $row['publisher_name'] ?>">
           </div>
           <div class="form-group col-md-6">
               <label>publish address</label>
               <input type="text" class="form-control" name="publisher_address" value="<?php echo $row['publisher_address'] ?>">
           </div>
           <div class="form-group col-md-6">
               <label>publisher size</label>			
               <select name="publisher_size" class="form-control" value="<?php echo $row['publisher_size'] ?>">
               <option value="big">big</option>
                <option value="medium">medium</option>
                <option value="small">small</option>
                </select>
           </div>
           <div class="form-group col-md-6">
               <label>type</label>
               <select name="type" class="form-control" value="<?php echo $row['type'] ?>">
                <option value="book">book</option>
                <option value="CD">CD</option>
                <option value="DVD">DVD</option>
                </select>
           </div>
           <div class="form-group col-md-6">
               <label>imageURL</label>
               <input type="text" class="form-control" name="image" value="<?php echo $row['image'] ?>">
           </div>
           <div class="form-group col-md-12">
               <button type ="submit" class="btn btn-primary">Save Changes</button>
               <a href= "index.php"><button  class="btn btn-secondary ml-2" type="button">Back</button></a>
           </div>
   </div>
   </form> 
   </fieldset >
	
</body>
</html>