<?php
  // b앞에 a가 0번 이상 등장
  $reg = "/a*b/";
  echo $reg. "<br/>";

  echo preg_match($reg, "b"). "<br/>";
  echo preg_match($reg, "ab"). "<br/>";
  echo preg_match($reg, "aab"). "<br/>";
  echo preg_match($reg, "c"). "<br/>";

  // +: b 앞에 a가 한번이상 등장
  // b 앞에 a 가 있어야함
  $reg = "/a+b/";
  echo $reg. "<br/>";

  echo preg_match($reg, "b"). "<br/>";
  echo preg_match($reg, "ab"). "<br/>";
  echo preg_match($reg, "aab"). "<br/>";
  echo preg_match($reg, "aaaabcd"). "<br/>";
?>