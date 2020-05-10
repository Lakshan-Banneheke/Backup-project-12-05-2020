<?php
class statusCheck{
    public static function check($status){
        if (!isset($_GET[$status])) {
            exit();
        }else{
            $statusCheck = $_GET[$status];
            if ($statusCheck == "empty") {
              echo "<p style = 'color: white;' class='error'>You did not fill in all information.</p>";
              exit();
            }elseif($statusCheck == "char"){
              echo "<p style = 'color: white;'style = 'color: white;' class='error'>You used invalid characters.</p>";
              exit();
            }elseif($statusCheck == "invalidemail"){
              echo "<p style = 'color: white;' class='error'>You used invalid e-mail.</p>";
              exit();
            }elseif($statusCheck == "size"){
              echo "<p style = 'color: white;' class='error'>File size is too big.</p>";
            }elseif($statusCheck == "type"){
              echo "<p style = 'color: white;' class='error'>Invalid file type.</p>";
            }elseif($statusCheck == "generic"){
              echo "<p style = 'color: white;' class='error'>The file could not be uploaded.</p>";
            }elseif($statusCheck == "error"){
              echo "<p style = 'color: white;' class='error'>The file could not be uploaded.</p>";
            }elseif($statusCheck == "success"){
              echo "<p style = 'color: white;' class='error'>Successful!</p>";
      }
    }
}
}
