<html>
    <body>
        <center>
        <top>
            <h1 style="color:green;">result page</h1>
                <?php
                    $SERVER ="localhost";
                    $username="root";
                    $password="";
                    $dbname="task3";

                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(empty($_GET['value']))
                   {
                    echo "u should give vaule <br>";
                    echo " not submit";
                   }
                   else
                   {
                    $value=$_GET['value'];
                    echo "the value is:" . $_GET['value'];
                    echo " successfully submit";
                   }

                   

                   $query= "insert into t3 values($value)" ;
                   $run=mysqli_query($conn,$query) 

                   
                ?>
            </form>
        </top>
        </center>
    </body>
</html>