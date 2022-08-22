<?php 
include('handels/connect.php');
$id=$_GET['id'];
$user="SELECT * FROM users where id=$id";
$user=mysqli_query($conn,$user);
$user=mysqli_fetch_assoc($user);

?>

<!DOCTYPE html>

<html lang="en">

<head>

    
    <meta charset="UTF-8">

     <title>facebook</title>

    
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="imgs/logo-facebook.png" type="icon">

</head>

<body>

     <div class="header">

        

         </div>

     <div class="main" style="width:100%;">

          <div class="left-side">

               <img src="imgs/community.png" alt="">

              </div>

          <div class="right-side">

             
               <h1 style="color:#212121;">update user account</h1>


               <form name="user-sign-up" action="handels/updateUser.php?id=<?= $user['id']     ?>" method="POST">

                    <div class="sign-up-form">

                         <div class="sign-up-name">

                         <input type="hidden" value="<?= $user['id'] ?>" name="id" />

                              <input value="<?= $user['firstName'] ?>" type="text" name="first-name" id="first-name" class="text-field" placeholder="First Name">

                              <input value="<?= $user['lastName'] ?>" type="text" name="last-name" id="last-name" placeholder="Last Name" class="text-field">

                             </div>

                         <div class="sign-wrap-mobile">

                              <input value="<?= $user['contact'] ?>" type="text" name="email-mobile" id="up-email" placeholder="Mobile number or email address" class="text-input">

                             </div>


                       
                         <div class="gender-wrap">

                              <input type="radio" name="gen" id="fem" value="1" class="m0" <?php if($user['gender']==1){?> checked <?php } ?>>

                              <label for="fem" class="gender">Female</label>

                              <input type="radio" name="gen" id="male" value="2" class="m0" <?php if($user['gender']==2){?> checked <?php } ?>>

                              <label for="male" class="gender">Male</label>

                             </div>

                        
                         <input type="submit" name="update" value="update" class="sign-up">

                        </div>

                   </form>

              </div>

         </div>

     <script src="jquery.js"></script>

    </script>

    <script>
       for (let i = new Date().getFullYear();i>1950;i--){
            $("#years").append(
                `<option>${i}</option>`
        );}

        for(let i=1;i<13;i++){
            $("#months").append(
                `<option>${i}</option>`
            );}
      updateNumberOfDays();
      
      function updateNumberOfDays(){
          $("#days").html('');
          let month=$("#months").val();
          let year = $("#years").val();
          let days = daysInMonth(month,year);
          for(i=1;i<days;i++){
              $("#days").append(

                `<option>${i}</option>`
              );
          }
      }
      $("#years,#months").on('change',function(){
        updateNumberOfDays();
      })
      function daysInMonth(month,year){
          return new Date(year,month,0).getDate();

      }
    </script>
</body>

</html>
