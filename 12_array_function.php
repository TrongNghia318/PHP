<?php
//khai bao 1 array
$studentList = ["Mint Tai", "Dance Khoa", "Mank Hug"];

//them 1 phan tu vao cuoi array-->array-push()
array_push($studentList, "Gia Bao");
print_r($studentList);
//them 1 phan tu vao cuoi array
$studentList[] = "Minh Hieu";
echo '<br> $studentList[] = "Minh Hieu" <br>';
print_r($studentList);


//array_unshift(): them phan tu vao dau` array
array_unshift($studentList, "Lam Phonk");
echo '<br>After array_unshift($studentList,"Lam Phonk"):<br>';
print_r($studentList);

//array_pop: xoa phan tu cuoi cung ra khoi array
array_pop($studentList);
echo '<br>After array_pop($studentList):<br>';
print_r($studentList);

//array_shift(): xoa phan tu dau tien ra khoi array
array_shift($studentList);
echo '<br>After array_shift($studentList):<br>';
print_r($studentList);

//array_splice(): xoa phan tu o vi tri bat ki
array_splice($studentList, 1, 1);
echo '<br>After array_splice($studentList):<br>';
print_r($studentList);
//array_splice(): them phan tu vao vi tri bat ki
array_splice($studentList, 2,0,"Hoang Fuck");
echo '<br>After array_splice($studentList, 2, 0,"Hoang Fuck")';
print_r($studentList);

$studentList = ["Mint Tai", "Dance Khoa", "Mank Hug","Lam Phonk"];
//array_slice(): cat 1 mang nho trong mang lon
$newArray = array_slice($studentList,2);
echo '<br> studentList: <br>';
print_r($studentList);
echo '<br> newArray: <br>';
print_r($newArray);

//chuoi dinh dang file: abc.jpg, abc.jpeg, abc.png, abc.gif
$image = "abc_add_234_333.jpg";
//cat string thanh array
$newImage = explode(".",$image);
echo "<br>BRMBRM";
print_r($newImage);
//get phan tu cuoi cung`, end() chi dung dc voi array
$ext = end($newImage);
echo "<br>BRMBRM";
print_r($newImage);
//khai bao 1 mang chua cac extension hop le
$accept_ext = ['jpg','jpeg','png','gif'];
//kiem tra xem extension cua file co hop le ko
$result = in_array($ext, $accept_ext);
if($result)
{
    echo "<br> Hinh anh hop le";
}
else
{
    echo "Hinh anh ko hop le";
}

