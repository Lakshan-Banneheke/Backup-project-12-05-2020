<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Medical Report </title>
    <link rel="stylesheet" href="../css/medicalReportForm.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </head>
  <body>
    <header>
      <h2>Medical Report Form - Page 7</h2>
    </header>
    <div class="form">

    <form action="includes/form7.inc.php" method="post">

      <h2>Upper Limbs and Locomotor System</h2><br>
      <h4>Upper Limbs (finger, hands, wrists, elbows, shoulder girdles, cervical and dorsal vertebrae)</h4>
      <textarea rows = "10" cols = "60" name = "upperLimbs">
      </textarea><br><br>
      <table class='short-table' border="1">
      <thead><tr><th> U </th> </tr></thead>
      <tbody><tr><td>  <input type="text" name="u"></td></tr>  </tbody>
      </table><br>
       Effect on P. if any <input id='short' type="text" name="effectUpperLimbs"><br><br>

      <h4>Locomotion (Hahax valgus/rigidus, flat feet, joints, pelvis, lumbar and sacral vertebrae, coccys, varicose veins)</h4>
      <textarea rows = "10" cols = "60" name = "locomotion">
      </textarea><br><br>
      <table class='short-table' border="1">
      <thead><tr><th> L </th> </tr></thead>
      <tbody><tr><td>  <input type="text" name="l"></td></tr>  </tbody>
      </table><br>
       Effect on P. if any <input id= 'short' type="text" name="effectLocomotion"><br>



      <br><br><button type="submit" name="next">Next</button>
    </form>
  </div>
  </body>
</html>
