<?php
    // 배열로 받는다
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    $upload_directory = "\\xampp\\htdocs\\sample\\ch4\\upload\\";
    $ext_str = "jpg,gif,png,jpeg";
    $allowed_extensions = explode(',', $ext_str);
    $max_file_size = 50 * 1024 * 1024; // 50M까지 첨부 가능함

    $names = $_FILES['upfile']['name'];
    $types = $_FILES['upfile']['type'];
    $tmp_names = $_FILES['upfile']['tmp_name'];
    $errors = $_FILES['upfile']['error'];
    $sizes = $_FILES['upfile']['size'];

    echo "<ul style='list-style-type: none'>";
    for($i = 0; $i <count($names); $i++){
        $ext = substr($names[$i], strrpos($names[$i], '.') + 1);
        // 확장자 체크
        if(!in_array($ext, $allowed_extensions)){
            echo "업로드할 수 없는 확장자 입니다.";
            continue;
        }
        // 파일 크기 체크
        if($sizes[$i] >= $max_file_size){
            echo "50MB 까지만 업로드 가능합니다.";
            continue; //해당 파일은 건너뛴다.
        }
        // 별도의 파일명을 부여한다. 서로 충동리 나지 않도록
        $path = md5(microtime()). '.'. $ext;
        if(move_uploaded_file($tmp_names[$i], $upload_directory.$path)){
            $name_orig = $names[$i];
            $name_save = $path;
            // echo "oldname : $name_orig    newname : $name_save<br/>";\
            $src = "/sample/ch4/upload/". $path;
            echo "<li><img src='$src' width=300px></li>";
        }
        echo "</count>";
    }
?>