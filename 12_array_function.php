<?php
    //khai bao 1 array 
    $studentList = ["Minh Tai", "Dang Khoa", "Manh Hung"];

    //array_push ():them 1 phan tu vao cuoi array
    array_push($studentList, "Gia Bao");
    print_r($studentList);

    //array_unshift(): them phan tu vao dau array
    array_unshift($studentList, "Lam Phong");
    echo '<br> After array_unshift($studentList,"LamPhong"):<br>';
    print_r($studentList); 

    //array_pop(): xoa phan tu cuoi cua mang
    array_pop($studentList);
    echo '<br> array_pop($studentList, ): <br>';
    print_r($studentList);

    //array_shift(): xoa phan tu dau tien cua mang
    array_shift($studentList);
    echo '<br> array_shift($studentList, ): <br>';
    print_r($studentList);

    // array_splice(): xoa phan tu
    array_splice($studentList, 1, 1);
    echo '<br> array_splice($studentList, 1, 1): <br>';
    print_r($studentList);

    $studentList = ["Minh Tai", "Dang Khoa", "Manh Hung", "Lam Phong"];
    //array_slice(): catws 1 mang nho trong mang llon
    $newArray = array_slice($studentList, 2);
    echo '<br> studentList: <br>';
    print_r($studentList);
    echo '<br> newArray :<br>';
    print_r($newArray);

    //them phan tu vao cuoi array
    $studentList[] = "Minh Hieu";
    echo '<br> $studentList[] = "Minh Hieu" <br>';
    print_r($studentList);

    //array_splice : nó cắt từ thằng số 2 trở về sau vì (đang xét , 2, 0)
     array_splice($studentList, 2, 0, "Hoang Phuc");
     echo '<br> array_splice($studentList, 2, 0 = "Hoang Phuc" <br>';
      print_r($studentList);


      //chuoi dinh dang file: abc.jpg, abc, jpeg, abc.pnf, abc.gif
      $image = "abc._3ab_3.jpg";
        // cat chuoi thanh mang 
        $newImage = explode(".", $image);
        //ghep  phan tu cuoi cung
        $ext = end($newImage);
        //khai bao 1 mang chua cac extention hop le
        $accept_ext = ['jpg', 'jpeg','png','gif'];
        //kiem ta
        $result = in_array($ext, $accept_ext);
        if($result)
        {
            echo "<br> hinh anh hop le";
        }
        else 
        {
            echo "<br>hinh anh ko hop le";
        }
?>