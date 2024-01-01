<?php
  // 문장인데 cat이라는 당너가 있는지 검색을 한다.
  $reg = "/cat$/";
  $sentence1 = "I love my cat";
  $sentence2 = "cat is lovely animal";

  $result1 = preg_match($reg, $sentence1);
  $result2 = preg_match($reg, $sentence2);
  echo "result1 : $result1 result2 : $result2<br/>";

  if($result1 == 1)
    echo "$sentence1 는 cat로 끝납니다.<br/>";
  else
    echo "$sentence1 는 cat로 끝나지 않습니다.<br/>";

  if($result2 == 1)
    echo "$sentence2 는 cat로 끝납니다.<br/>";
  else
    echo "$sentence2 는 cat로 끝나지 않습니다.<br/>";
?>