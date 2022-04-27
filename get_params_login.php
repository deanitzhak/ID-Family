<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">

        <title>ID Family</title>

    </head>

    <body>

        <section>

            <?php

                echo '<style>';
                require_once("css/style.css");
                echo '</style>';

                $FullName = $_GET["fullName"];

                $Password = $_GET["password"];

                $Release = $_GET["release"];

                $Terms = $_GET["termsOfService"];

                $Phone = $_GET["phone"];

                $Contacts = $_GET["contacts"];

                $Gender = $_GET["gender"];

                $WorkPermits = $_GET["workPermits"];

                $Address = $_GET["address"];

                $Birth = $_GET["dateOfBirth"];

                echo '<div id="Php">';

                echo "<span> :שם מלא " . $FullName . "</span>";

                echo "<span>:סיסמא שנבחרה " . $Password . "</span>";

                echo "<span>:תאריך לידה " . $Birth . "</span>";

                echo "<span>:מספר טלפון " . $Phone . "</span>";

                echo "<span>:מין " . $Gender . "</span>";

                echo "<span>:אנשי קשר למקרה חירום " . $Contacts . "</span>";

                echo "<span>:כתובת " . $Address . "</span>";
                
                //echo "<span>:פטורים " . $Release . "</span>";

                //echo "<span>:תנאי שירות " . $Terms . "</span>";

                //echo "<span>:אישורי עבודה " . $WorkPermits . "</span>";

                echo '</div>';
                
                echo '<script> 
                setTimeout(function(){
                    
                  location.href = "index.html";
              },1000) ;
              </script>'
            ?>      
        </section>
    </body>

</html>