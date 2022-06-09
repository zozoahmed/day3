<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Register</h2>

        <form  method="get"  action="TaskDay3.php">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control"   name="name"  id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div> 


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" name="email"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputLinkedin_url">linkedin_url</label>
                <input type="URL" class="form-control" name="linkedin"  id="exampleInputLinkedin_url" aria-describedby="urlHelp" placeholder="Enter linkedin_url">
            </div>

        
            <button type="submit" class="btn btn-primary">Submit</button>



        </form>
    </div>

</body>

</html>

























  <?php


// $students = [
    
//   'student1' =>   [ 'name' => 'root','id' => 2013,'email' => 'root@localhost','gpa' => 3.4], 
//   'student2' =>   [ 'name' => 'x','id' => 2012,'email' => 'x@localhost','gpa' => 3.3],
//   'student3' =>   [ 'name' => 'y','id' => 2015,'email' => 'y@localhost','gpa' => 2.4]

//   ];
 

//   foreach($students as $key => $student)
//   {
//        echo $key."<br>";

//        foreach($student as $keyData => $studentData)
//        {
//            echo $keyData." : ".$studentData."<br>";

//        }
//        echo "<hr>";

//   }




?>  