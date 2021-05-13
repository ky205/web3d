$(document).ready(function(){
    $.getJSON('../assignment/application/model/modelData.php',function(jsonObj){
    console.log("this is json");
    console.log(jsonObj);
    $('#pesiTitle').html('<h2>'+jsonObj[0].title+'</h2>');
    $('#pesiTitlex').html('<h2>'+jsonObj[0].title+'</h2>');
    $('#pesiDescription').html('<p>'+jsonObj[0].description + '</p>');
    $('#pesiDescriptionx').html('<p>'+jsonObj[0].description + '</p>');
    $('#pesiImgt').html('<a href="../assignment/assets/images/galleryImage/'+jsonObj[0].model1+'.png" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">');
    $('#pesiImg1').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[0].model1+'.png" alt="Dr Pepper">');
    $('#pesiImgx').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[0].model1+'.png" alt="Dr Pepper">');
    $('#pesiImg2').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[0].model2+'.png" alt="Dr Pepper">');
    $('#pesiImg3').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[0].model3+'.png" alt="Dr Pepper">');
    $('#pesiImg4').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[0].model4+'.png" alt="Dr Pepper">');
    $('#pesiImgb').html('</a>');

    $('#colaPTitle').html('<h2>'+jsonObj[1].title+'</h2>');
    $('#colaPTitlex').html('<h2>'+jsonObj[1].title+'</h2>');
    $('#colaPDescription').html('<p>'+jsonObj[1].description + '</p>');
    $('#colaPDescriptionx').html('<p>'+jsonObj[1].description + '</p>');
    $('#ColaPImgt').html('<a href="../assignment/assets/images/galleryImage/'+jsonObj[1].model1+'.png" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">');
    $('#colaPImg1').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[1].model1+'.png" alt="Dr Pepper">');
    $('#colaPImgx').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[1].model1+'.png" alt="Dr Pepper">');
    $('#colaPImg2').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[1].model2+'.png" alt="Dr Pepper">');
    $('#colaPImg3').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[1].model3+'.png" alt="Dr Pepper">');
    $('#colaPImg4').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[1].model4+'.png" alt="Dr Pepper">');

    $('#colaPImgb').html('</a>');

    $('#colaBTitle').html('<h2>'+jsonObj[2].title+'</h2>');
    $('#colaBTitlex').html('<h2>'+jsonObj[2].title+'</h2>');
    $('#colaBDescription').html('<p>'+jsonObj[2].description + '</p>');
    $('#colaBDescriptionx').html('<p>'+jsonObj[2].description + '</p>');
    $('#colaBImgt').html('<a href="../assignment/assets/images/galleryImage/'+jsonObj[2].model1+'.png" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">');
    $('#colaBImg1').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[2].model1+'.png" alt="Dr Pepper">');
    $('#colaBImgx').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[2].model1+'.png" alt="Dr Pepper">');
    $('#colaBImg2').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[2].model2+'.png" alt="Dr Pepper">');
    $('#colaBImg3').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[2].model3+'.png" alt="Dr Pepper">');
    $('#colaBImg4').html('<img class="card-img-top img-fluid img-thumbnail" src="../assignment/assets/images/galleryImage/'+jsonObj[2].model4+'.png" alt="Dr Pepper">');

    $('#colaBImgb').html('</a>');

});

});