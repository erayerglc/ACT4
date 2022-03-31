<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>my page</title>
    </head>
    <body>
        <?php
            if(empty($_POST['Name'])== false)
            {
                echo $_POST['Name']."<br>";
            }
            else
            {
                echo "Name: Not provided!"."<br>";
            }


            if(empty($_POST['Username'])== false)
            {
                echo $_POST['Username']."<br>";
            }
            else
            {
                echo "Username: Not provided!"."<br>";
            }

            if(empty($_POST['password'])== false)
            {
                echo $_POST['password']."<br>";
            }
            else
            {
                echo "password: Not provided!"."<br>";
            }

            if(empty($_POST['Address'])== false)
            {
                echo $_POST['Address']."<br>";
            }
            else
            {
                echo "Address: Not provided!"."<br>";
            }

            if(empty($_POST['Country'])== false)
            {
                echo $_POST['Country']."<br>";
            }
            else
            {
                echo "Country: Not provided!"."<br>";
            }

            if(empty($_POST['ZIPCode'])== false)
            {
                echo $_POST['ZIPCode']."<br>";
            }
            else
            {
                echo "ZIP Code: Not provided!"."<br>";
            }

            if(empty($_POST['Email'])== false)
            {
                echo $_POST['Email']."<br>";
            }
            else
            {
                echo "Email: Not provided!"."<br>";
            }

            if(empty($_POST['Sex'])== false)
            {
                echo $_POST['Sex']."<br>";
            }
            else
            {
                echo "Sex: Not provided!"."<br>";
            }

            if(empty($_POST['Language'])== false)
            {
                $Language = $_POST['Language'];
                foreach ($Language as $key => $value){
                    echo $value."<br>";
                }
            }
            else
            {
                echo "Language: Not provided!"."<br>";
            }

            if(empty($_POST['About'])== false)
            {
                echo $_POST['About']."<br>";
            }
            else
            {
                echo "About: Not provided!"."<br>";
            }


        ?>
    </body>
</html>
