<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Kasra Korminejad - Shiva Radmanesh - Sahar Sheikholeslami - Ali Nasiri - Mohsen Mahmoud zadeh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css"
</head>
<body class="bg-light">
    <div class="container-fluid">
        

        <!-- <div class="row bg-dark header"> -->
        <div class="row bg-dark header">
            <div class="input-group  mb-3 col-3">
                <input type="text" class="form-control search-bar" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <div class="input-group-append search-button">
                  <button class="btn btn-outline-secondary btn-sm" type="submit" id="button-addon2">Go</button>
                </div>
            </div>

            <div class="col-6 logo">
                Book<b id="logo-bold">Reads</b>
            </div>


            <div class="col-2" style="margin-top: auto; margin-bottom: auto;">
                <a class="profile-link">Profile</a>
            </div>

            <div class="col-1"></div>
        </div>


        <div id="page-cover" class="row">
            <img src="./asset/images/bg_img2.jpg" style="width: 100%;">
        </div>


        <div class="row" style="margin-top: 8vw;">
            <h2 class="h2" style="margin-left: 2vw;">Recommended books</h2>
            <hr style="width: 90%; display: block;  margin-bottom: 4vw; margin-left: auto; margin-right: auto;">
        </div>
        
        <?php
        $mysql = pdodb::getInstance();
        $query = "SELECT * FROM Books";
        $res = $mysql->Execute($query);

        $ind = 0;
        while($rec = $res->fetch()){
            
            $html_text = '';

            if ($i == 3){
                $i = 0;
            }

            if($i == 0){
                $html_text = "<div class='row book-row'><div class='col-4 book-container'><img class='rounded book' src='".$rec['image']."'><br><a href='".$rec['like']."' class='link-primary text-center book-text'>'".$rec['title']."'</a></div>";
            }
            else if($i == 1){
                $html_text = "<div class='row book-row'><div class='row book-row'><div class='col-4 book-container'><img class='rounded book' src='".$rec['image']."'><br><a href='".$rec['like']."' class='link-primary text-center book-text'>'".$rec['title']."'</a></div>";
            }
            else if($i == 2)
                $html_text = "<div class='row book-row'><div class='row book-row'><div class='col-4 book-container'><img class='rounded book' src='".$rec['image']."'><br><a href='".$rec['like']."' class='link-primary text-center book-text'>'".$rec['title']."'</a></div></div>";
            $i++;
        }


        ?>
    </div> <!-- container div--> 
</body>
</html>