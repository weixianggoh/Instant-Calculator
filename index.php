<?php

  include "header.php";

?>

    <p>Class of Development*/发展类型＊</p>
    <form action="type_of_development.php" method="post">
      <select name="class_of_development">
        <option value="residental">Residental</option>
        <option value="commercial">Commercial</option>
        <option value="industrial">Industrial</option>
      </select>
      <br>
      <br>
      <input class="btn btn-primary" type="submit" name="submit" value="Next"/>
    </form>

<?php

  include "footer.php";

?>
