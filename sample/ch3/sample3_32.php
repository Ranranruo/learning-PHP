<?php
  $reg = "/a{2}b/";
  echo $reg. "<br/>";

  echo preg_match($reg, "b"). "<br/>";
  echo preg_match($reg, "ab"). "<br/>";
  echo preg_match($reg, "aab"). "<br/>";
  echo preg_match($reg, "aaab"). "<br/>"; 

  // a가 b 앞에 2번이상 4번이하 등장해야한다
  $reg = "/a{2,4}b/";
  echo $reg. "<br/>";

  echo preg_match($reg, "b"). "<br/>";
  echo preg_match($reg, "ab"). "<br/>";
  echo preg_match($reg, "aab"). "<br/>";
  echo preg_match($reg, "aaaabcd"). "<br/>";
  echo preg_match($reg, "aaaaabbcd"). "<br/>"; // a와 aaaab 와 cd로 볼 수 있다
?>