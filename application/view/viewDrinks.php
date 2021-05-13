<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Drinks Image View</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  ></script>
    
</head>

<body>
    <h1 style="margin: 5px; padding: 10px;">Choose a drink brand to see more details</h1>
    <b style="margin: 5px; padding: 10px;">Select a drinks brand name: </Select></b>
    <from style="margin: 5px; padding: 10px;">
        <select id="select">
            <?php
                for($i=0; $i<= count($data); $i++)
                    echo '<option value="'.$data[$i].'">'.$data[$i].'</option>';
            ?>
        </select>
    </from>

    <div id="placeholder" style="margin: 5px; padding: 10px;">Insert data here</div>

    <script>
    $(document).ready(function(){
        $("#select").change(function(){
            var model = $(this).val();
            console.log('Drinks Model:',model,'has been selected');
            var str = "";
            $("select option:selected").each(function(){
                    str += "<div><b>Drinks Brand:</b> "+ $(this).text()+"</div>"+"</br>";
                    console.log('HTML Title is:',$(this).text());
                    var selection = $(this).text();
                    console.log('Selected brand model:',selection);
                    var brandUrl ="../application/model/modelDrinkDetails.php?brand=" + selection;
                    console.log('URL to PHP Model is:',brandUrl);
                    var debugUrl = "../application/model/phpDebug.php";
                    $.getJSON(brandUrl)
                        .done(function(json){
                            console.log('Web service response for drink brand data ', json);
                            str +="<div width=90% style='float:left; margin:5px; border:1px solid; border-color: blue; padding:10px;'>";

                            for(var i=0; i<json.length; i++){
                                str +=
                                "<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;'>" + json[i].brand + "</div>" +
                                "<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;'>" + json[i].x3dModelTitle + "</div>" +
                                "<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;'>" + json[i].x3dCreationMethod + "</div>" +
                                "<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;'>" + json[i].modelTitle + "</div>" +
                                "<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;'>" + json[i].modelSubtitle + "</div>" +
                                "<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;'>" + json[i].modelDescription + "</div>";
                                
                                str+=
                                "<div width='15%' style='float:left; color:blue; margin:5px; border:1px solid; border-color: red; padding:10px;'>"+
                                "<img width='300px' src='../assets/images/gallery_images/" + json[i].brand + ".jpg'></img>" +"</div>";
                            }
                            str+="</div>";
                            document.getElementById("placeholder").innerHTML=str;
                        })
                        .fail(function(){
                            console.log('viewDrinks JS Handler: Server returned an Error');
                        });
            });
        });
    });
    
    
    </script>

</body>

</html>