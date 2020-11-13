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
<h3 class="m-3">Insert information to create a new media in library</h3>
 
	<form action="actions/a_create.php" method="post" class="form-group ml-3">
  <div class="form-row">
           <div class="form-group col-md-6">
               <label>title</label >
               <input type="text" class="form-control" name="title"/> 
           </div>    
           <div class="form-group col-md-6">
               <label>Author Firstname</label>
               	<input type="text" class="form-control" name="author_firstname"/>
           </div>
           <div class="form-group col-md-6">
               <label>Autho Lastname</label>
               <input type="text" class="form-control" name="author_lastname"/>
           </div>
           <div class="form-group col-md-6">
               <label>ISBN</label>
            <input type="text" class="form-control m-1" name="ISBN"/>
           </div>
           <div class="form-group col-md-6">
               <label>short description</label>
               <input type="text" class="form-control" name="short_description" />
           </div>
           <div class="form-group col-md-6">
               <label>publish date</label>
               <input type="date" class="form-control" name="publish_date" />
           </div>
           <div class="form-group col-md-6">
               <label>publish name</label>
               <input type="text" class="form-control" name="publisher_name" />
           </div>
           <div class="form-group col-md-6">
               <label>publish address</label>
               <input type="text" class="form-control" name="publisher_address" />
           </div>
           <div class="form-group col-md-6">
               <label>publisher size</label>
             
                <select name="publisher_size" class="form-control ">
                <option value="big">big</option>
                <option value="medium">medium</option>
                <option value="small">small</option>
                </select>
            
           </div>
           <div class="form-group col-md-6">
               <label>type</label>
              
               <select name="type" class="form-control ">
                <option value="book">book</option>
                <option value="CD">CD</option>
                <option value="DVD">DVD</option>
                </select>
             
           </div>
           <div class="form-group col-md-6">
               <label>imageURL</label>
            <input type="text" class="form-control "name="image"/>
           </div>
               <div class="form-group col-md-12"> 
               <button type ="submit" class="btn btn-primary">Insert user</button>
               <a href= "index.php"><button  type="button" class="btn btn-secondary  ml-3">Back </button></a>
               </div>
           </div>
       </div>
   </form> 
   </fieldset >
	
</body>
</html>