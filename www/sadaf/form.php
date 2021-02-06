<!DOCTYPE html>

<?php

// $servername = "localhost";
// $username = "user1";
// $password = "user1";
// $dbname = "sadaf";

$isbn = $title = $author = $page = $publisher = $date= $pdf = $imge = $desc = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = test_input($_REQUEST["title"]);
        $isbn = test_input($_REQUEST["isbn"]);
        $publisher = test_input($_REQUEST["publisher"]);
        $page = test_input($_REQUEST["pages"]);
        $author = test_input($_REQUEST["author"]);
        $date = test_input($_REQUEST["date"]);
        $desc = test_input($_REQUEST["desc"]);

    if(isset($_FILES['pdf']) && $_FILES['pdf']['name'] != ""){
        $pdf_content = file_get_contents($_FILES["pdf"]["tmp_name"]);
        $pdf_name = $_FILES["pdf"]["name"];
        move_uploaded_file($_FILES["pdf"]["tmp_name"], "UploadFile/".$pdf_name);
        $file_path = "UploadFile/".$pdf_name;
    }

    if(isset($_FILES['img']) && $_FILES['img']['name'] != ""){
        $img_content = file_get_contents($_FILES["img"]["tmp_name"]);
        $img_name = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"], "UploadFile/".$img_name);
        $img_path = "UploadFile/".$img_name;
    }
}
//INSERT INTO Books (title , ISBN , publisher , numberofPage  ,  author , dates  ,  descriptions , image , files , AccountSpecID)
// VALUES ( $title  , $isbn , $publisher , $page , $author , $date , $desc , $img_path , $file_path , $user);"



// $mysql = pdodb::get->Instance()
// $query = "INSERT INTO Books (ISBN, publisher , descriptions , numberofPage , link ,  title , dates  , Author)
// VALUES ('123Y'  , 'pooya' , "a book about dogs" , 121 , 'bookreads.com/book2' '102 sag khaldar' , '2001-12-4' , 'img/file.pdf' , "Shiva" , 1);"
// $res = $mysql->Execute($query)


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<html>
  <head>
    <title>New Book Form </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, label {
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 13px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      line-height: 50px;
      font-size: 50px;
      color: #fff;
      z-index: 2;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 20px 0  #004d00;
      }
      .banner {
      position: relative;
      height: 320px;
      background-image: url("/uploads/media/default/0001/02/c80634ee5d31493e4ef09a6c21a6fbe0c5936c01.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4);
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input , textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input , textarea {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:#004d00;
      }
      .item input:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #004d00;
      color:#004d00;
      }
      .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #004d00;
      color:#004d00;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #004d00;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #008000;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .city-item input,.name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>   
    <div class="testbox">
        <form method="post" enctype = "multipart/form-data">
        <div class="banner">
          <h1>New Book Form</h1>
          <img src="./images/bg_img2.jpg" width="1600" height="320">
        </div>
          
        <div class="item">
            <div class="name-item">
                <div>
                    <label for="isbn">ISBN<span>*</span></label>
                    <input id="isbn" type="text" name="isbn"  placeholder="Example : 9780393958041" required >
                </div>
            </div>
        </div>
        <div class="item">
            <label for="title">Title<span>*</span></label>
            <div class="name-item">
                <input id="title" type="text" name="title" placeholder="Example : Alice in wonderland" required>
            </div>
            <label for="publisher">Publisher<span>*</span></label>
            <div class="name-item">
                <input id="publisher" type="text" name="publisher" placeholder="Example : Norton Critical " required >
            </div>
        </div>
        <div class="item">
            <label for="date">Date<span>*</span></label>
            <input id="date" type="date" name="date" required/>
            <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
            <div class="name-item">
                <div>
                    <label for="author">Author <span>*</span> </label>
                    <input id="author" type="text" name="auhtor" placeholder="Example : Lewis Carroll" required>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="name-item">
                <div>
                    <label for="Number of Pages"> Number of Pages <span>*</span> </label>
                    <input id="pages" type="text" name="pages" placeholder="Example : 1111" required>
                </div>
            </div>
        </div>
        <div class="item">
          <label for="apply">Description</label>
        <textarea id="desc" rows="3"></textarea>
        </div>
        <div class="item">
          <label for="cv">Upload PDF File<span>*</span></label>
          <input  id="pdf" name = "pdf" type="file" >
        </div>
        <div class="item">
          <label for="cover">Upload Cover Image<span>*</span></label>
          <input  id="img" name = "img" type="file" >
        </div>
        <div class="btn-block">
          <button type="submit" >Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>

