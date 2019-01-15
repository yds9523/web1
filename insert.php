<?php
$conn = mysqli_connect("localhost","root","dbsehdwn","example");
mysqli_query($conn,"
  INSERT  INTO topic
  (title, description, created)
  VALUE(
    'test',
    'abc',
    NOW()
    )
");
?>
