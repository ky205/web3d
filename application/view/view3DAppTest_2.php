<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Test View</title>
    <style>
        h1{
            color: red;
            margin-left: 5px;
        }
        .imgBox{
            padding: 0.25rem;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid royalblue;
            border-radius: 0.25rem;
            width: 300px;
        }

        .box{
            border: 1px solid rgba(red, green, blue, alpha);
            padding: 5px;
            float:left;
            margin: 5px;
            height: 280px;
        }
        
    </style>
</head>
    <body>
        <h1>Second 3D App Test View</h1>
        <div class="box">
            <h2><?php echo $model1 ?></h2>;
            <img class="imgBox" src='../lab7/assets/images/gallery_images/<?php echo $image3D_1?>.jpg'>
        </div>

        <div class="box">
            <h2><?php echo $model2 ?></h2>;
            <img class="imgBox" src='../lab7/assets/images/gallery_images/<?php echo $image3D_2?>.jpg'>
        </div>

        <div class="box">
            <h2><?php echo $model3 ?></h2>;
            <img class="imgBox" src='../lab7/assets/images/gallery_images/<?php echo $image3D_3?>.png'>
        </div>

        <div class="box">
            <h2><?php echo $model4 ?></h2>;
            <img class="imgBox" src='../lab7/assets/images/gallery_images/<?php echo $image3D_4?>.png'>
        </div>

        <div class="box">
            <h2><?php echo $model5 ?></h2>;
            <img class="imgBox" src='../lab7/assets/images/gallery_images/<?php echo $image3D_5?>.png'>
        </div>

        <div class="box">
            <h2><?php echo $model6 ?></h2>;
            <img class="imgBox" src='../lab7/assets/images/gallery_images/<?php echo $image3D_6?>.png'>
        </div>
        
        <p>If you are seeing the test data above, that mean your mvc is working</p>
    </body>
</html>