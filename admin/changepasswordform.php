<html>
   <head>
    <title>change password</title>
    <script>
        function pass()
{
  var x = document.getElementById("currentpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function pass1()
{
  var x = document.getElementById("newpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function pass2()
{
  var x = document.getElementById("confirmpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    <?php
             include'header_link.php';
   ?>


   </head>
   <body style="position:fixed; width:100%;">
      
        <?php
             include'header.php';
        ?>
          <!-- Password: <input type="password" value=" " id="myInput">-->
    
    <!--<div>--><br><hr>
    <h3 style=' border-radius: 25px;
          border: 2px solid #73AD21;
          padding: 12px;
          width: 300px;
          height: 60px;
          align:center;
          background-color:orange;
          text-align: center;
          margin-left: 500px;
        '>Change Password</h3><br><br><br><hr>
        <!--<h2 style="color:#fff;">change password</h2>-->
    <form method="POST" action="changepassword.php" style=" margin-left: 400px;">
        <table border="0">
            <tr>
                <td>Current password</td>
                <td><input type="password" id="currentpassword" onclick="myFunction()" required autofocus ></td>
                <td><input type="checkbox" onclick="pass()">show </td>

            </tr>
            <tr>
                <td>New Password</td>
                <td><input type="password" name="newpassword" id="newpassword"  required ></td>
                <td><input type="checkbox" onclick="pass1()">show</td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="confirmpassword" id="confirmpassword"  required ></td>
                <td><input type="checkbox" onclick="pass2()">show </td>
            </tr>
            <tr>
             <tr>
                <td colspan="2"><input type="submit" value="update"  name="btn" id="btn" disabled style=" margin-left: 150px;"></td>
             </tr>
        </table>
        <div id="result">
        </div>
    </form>
    <!--</div>-->
    <?php
             include'footer.php';
        ?>
        <script>
            document.getElementById("confirmpassword").addEventListener("blur",function(){
                var cupassword=document.getElementById("currentpassword").value;
                var npassword=document.getElementById("newpassword").value;
                var cpassword=document.getElementById("confirmpassword").value;
                
                if(cupassword==npassword)
                {
                    var msg="current and new password should not be same";
                    document.getElementById("result").innerHTML=msg;
                    document.getElementById("btn").disabled=true;
                   
                }
                else if(npassword!=cpassword)
                {
                    var msg="new password and confirm password do not match";
                    document.getElementById("result").innerHTML=msg;
                    document.getElementById("btn").disabled=true;
                   
                }
                else
                {
                    document.getElementById("result").innerHTML="";
                    document.getElementById("btn").disabled=false;
                }
            });

      </script>
    </body>
</html>