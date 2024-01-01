<?php
  $dir = "C:\\xampp\\htdocs\\sample\\ch3"; // 파일 목록을 읽어올 폴더명 지정
  
  $handle = opendir($dir); // 해당 디렉터리의 핸들을 획득해야한다.

  $files = array(); // 파일 목록을 담을 배열을 만든다.

  $Filename = readdir($handle); // 첫 번째 파일을 읽는다
  while($Filename != false){
    if($Filename != "." && $Filename != '..'){
        $path = "$dir/$Filename";
        if(is_file($path))
          $files[] = $Filename;
    }
    $Filename = readdir($handle);
    // echo "Filename : $Filename<br/>";
  }

  // 핸들 해제
  closedir($handle);

  // 정렬, 역순으로 정렬하려면 rsort 사용
  sort($files);

  // 파일명을 출력한다.
  foreach($files as $f){
    echo "$f<br/>";
  }

?>