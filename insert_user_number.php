    
    
  <?php
$con=mysqli_connect("localhost","root","","project")or die(mysqli_error());
$id = $_GET["id"];
$query=mysqli_query($con,"select * from registration where id='".$id."'");
$S=mysqli_fetch_assoc($query)
?>    
        
   <style>
 form, .content {
            width: 100%;
            margin: 0px auto;
            padding: 20px;
            border: 1px solid #b0c4de;
            background: white;
            border-radius: 0px 0px 10px 10px;
        }
          .content2 {
            width: 100%;
            margin: 0px auto;
           color: white; 
            background:#343a40 ;
        }
</style>

      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="content" style="background-color: #fff;">          
<h3>INSERT STUDENT RESULT</h3>
          <form  method="post" action="result_no_insert.php" enctype="multipart/form-data">
            <br>
            <label>Username:</label> <br>
            <input type="text" name="name" value="<?php echo $S["First_name"]; ?>" class="form-control input-sm"> <br>
            <br>
            <label>Maths:</label> <br>
            <input type="text" name="maths"class="form-control input-sm"> <br>
               
            <br>
            <label>Physic:</label> <br>
            <input type="text" name="physic"class="form-control input-sm"> <br>
               
            <br>
            <label>Hindi:</label> <br>
            <input type="text" name="hindi"class="form-control input-sm"> <br>
               
            <br>
            <label>English:</label> <br>
            <input type="text" name="english"class="form-control input-sm"> <br>
               
               
               <br>
              
              <!-- For success/fail messages -->
              <button type="submit" name="submit" class="btn btn-block"> SUBMIT </button>         
          </form>
    </div>
