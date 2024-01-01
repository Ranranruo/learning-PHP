<?php
  $reg = "/a[0-9]b/";
  // a0b, aa0b
  echo $reg. "<br/>";
  echo preg_match($reg, "a0b"). "<br/>";
  echo preg_match($reg, "aa0b"). "<br/>";
  echo preg_match($reg, "a0111b"). "<br/>";
  echo preg_match($reg, "ab"). "<br/>";
?>