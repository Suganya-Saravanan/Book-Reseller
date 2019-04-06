<?php
          $Con = mysqli_connect("localhost","root","");
          mysqli_select_db($Con,"book reseller");
          $NameP=$EmailP='';
          $ContactP=$PwdP='';

          if (isset($_POST["submit"])) {
            $NameP = $_POST['name'];
            $ContactP=$_POST['Contact'];
            $EmailP=$_POST['email'];
            $PwdP = $_POST['password'];
            $PwdP1=$_POST['pass'];
            if($PwdP < 6){
              if($PwdP==$PwdP1 )
              {
                $sql = "UPDATE INTO `user`(`Name`,`Email`,`Contact`,`Pwd`) WHERE ('$NameP','$EmailP','$ContactP','$PwdP') ";
                $result = mysqli_query($Con, $sql);
                if($result){
                  echo "Thanks for registering";
                 }
                 else{
                   echo "Registration Failed";
                 }
              }
              else{?> 
                <script type="text/javascript">
                  alert( "Password does not match");
                </script>
              <?php
              }
            }
          else
          {?>
            <script type="text/javascript">
               alert( "Password should be greater than 6");
              </script>
              <?php
          }

                        
          }

          mysqli_close($Con);
        ?>