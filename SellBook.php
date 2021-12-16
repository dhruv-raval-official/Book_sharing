<?php
    $con= mysqli_connect("localhost","root","","book_sharing");
    if (!$con) {
        die("Connection failed: ");
    }
    if(isset($_POST['Sell']))
    {

      $image=$_FILES['coverimg']['name']; 
      $imageArr=explode('.',$image); //first index is file name and second index file type
      $rand=rand(10000,99999);
      $newImageName=$imageArr[0].$rand.'.'.$imageArr[1];
      $uploadPath="uploads/".$newImageName;
      $isUploaded=move_uploaded_file($_FILES["coverimg"]["tmp_name"],$uploadPath);
      if($isUploaded)
        $book_cover = $newImageName;
      else
        $book_cover = "";

        $book_name=$_POST['bname'];
        $book_author=$_POST['bauthor'];
        $book_description=$_POST['bdesc'];
        $book_publish_year=$_POST['byear'];
        $book_price=$_POST['bprice'];
        
        
        $sql = "INSERT INTO book_transaction (book_name,book_price,book_author,book_publish_year,book_description,book_coverpage)
        VALUES ('$book_name',$book_price,'$book_author',$book_publish_year,'$book_description','$book_cover')";

if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

        





    // $insertdata="INSERT INTO book_transaction (book_name,book_price,book_author,book_coerpage,book_publish_year,book_description), VALUES('$book_name',$book_price,'$book_author',$book_publish_year,'$book_description')";
            
    // $insert=mysqli_query($con,$insertdata);
    // if (!$insert) {
    //     die("insert failed: ");
    // }
    // else
    // {
    //     echo"hi";
    // }    
     }
?>