<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>toets</title>
</head>
<body>
 <div class="form-background">
  <form method="post" action="
  <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    
  Vul in uw naam: <input type="text" name="name" value="">

    <input type="submit" class="loginButtonBodyBG" value="submit">



<?php
  $name = "";

  echo "<p>Hoi ";
  echo $_POST["name"];
  
  ?>
  
 <br>
<div class="checkboxes">

    <input type="checkbox" class="box-een" name='Filter' id="Check1" value="Value1" onclick="selectOnlyThis(this.id)" /> lightBlue
    <input type="checkbox" class="box-twee" name='Filter' id="Check2" value="Value1" onclick="selectOnlyThis(this.id)" /> lightRed 
    <input type="checkbox" class="box-drie" name='Filter' id="Check3" value="Value1" onclick="selectOnlyThis(this.id)" /> lightYellow
    <input type="checkbox" class="box-vier" name='Filter' id="Check4" value="Value1" onclick="selectOnlyThis(this.id)" /> lightGray
</div>

<script type="text/javascript">
  function selectOnlyThis(id) {
    for (var i = 1;i <=4; i++)
    {
        document.getElementById("Check" + i).checked = false;
    }
    document.getElementById(id).checked = true;

    document.getElementById(id).checked
                document.getElementsByTagName("body")[0].style.backgroundColor="lightBlue";

  }
$("#checkbox-container :checkbox").on("change", function(){
  alert("The checkbox with the ID '" + this.id + "' changed");
});

</script>
</body>
</html>