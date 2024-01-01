<?php
  // 배열에 별도의 키값을 주지 않고 수너대로 저장함
  $persons = Array();
  
  array_push($persons, Array("name" => "홍길동", "age" => 23, "phone" => "010-1111-1111"));
  array_push($persons, Array("name" => "임꺽정", "age" => 25, "phone" => "010-2222-2222"));
  array_push($persons, Array("name" => "장길한", "age" => 27, "phone" => "010-3333-3333"));
  array_push($persons, Array("name" => "임경업", "age" => 29, "phone" => "010-4444-4444"));

  $persons[4] = Array("name" => "홍경래", "age" => 31, "phone" => "010-5555-5555");

  for($i = 0; $i < count($persons); $i++)
    echo "$i => ". $persons[$i]['name']. " ". $persons[$i]['age']. " ". $persons[$i]['phone']. "<br/>";
?>  