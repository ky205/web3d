<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"  ></script>
        <script src="./application/js/bootstrap.js"></script>
        <script src="./application/js/getJsonData.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="./application/css/custom.css">
        <link rel="stylesheet" href="./application/css/bootstrap.css">


        <script src="https://kit.fontawesome.com/202c94eaf3.js" crossorigin="anonymous"></script>
        
        <!-- FancyBox -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" integrity="sha512-nNlU0WK2QfKsuEmdcTwkeh+lhGs6uyOxuUs+n+0oXSYDok5qy0EI0lt01ZynHq6+p/tbgpZ7P+yUb+r71wqdXg==" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==" crossorigin="anonymous"></script>

            <!-- X3D  -->
             <script src="http://www.x3dom.org/release/x3dom.js"></script>
             <link rel="stylesheet" href="http://www.x3dom.org/release/x3dom.css">


        <!-- JavaScript -->
      
        <script>
        
function wireFrame()
{
	var e = document.getElementById("wire");
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

function cokeScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function spriteScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function pepperScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function cokeDescription() {
	$("button").click(function(){
		
		$("#cokeDescription").show();
        $("#spriteDescription").hide();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").hide();

    }); 
}

function spriteDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#spriteDescription").show();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").show();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").show();
		$("#x3dCreationMethod_pepper").hide();
    }); 
}

function pepperDescription() {
    $("button").click(function(){

        $("#cokeDescription").hide();
        $("#spriteDescription").hide();
		$("#pepperDescription").show();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").show();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").show();
    }); 
}

function cameraFront()
{
	document.getElementById('model__front').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__back').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__left').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__right').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__top').setAttribute('bind', 'true');
}

function lightSwitch(id){
     var light = document.getElementById(id);
     if(light.getAttribute('on')!='TRUE')
        light.setAttribute('on','TRUE');
     else
         light.setAttribute('on','FALSE');
 }

 function headlight()
  {
       var h = document.getElementById("head");
      if(h.getAttribute('headlight')=='true')
        h.setAttribute('headlight', 'false');
      else
          h.setAttribute('headlight', 'true');
  }


            $(document).ready(function(){
                    $("#modelsContents").hide();
                    $("#homeContents").show();
                    $("#backgroundContents").show();
                    $("#galleryContents").hide();
                    $("#aboutContents").hide();
                    $("#downloadContents").hide();
               
                

                
                $("#btnHome").click(function(){
      
                    $("#homeContents").fadeIn(2000);
                    $("#backgroundContents").fadeIn(1000);
                    $("#galleryContents").hide();
                    $("#aboutContents").hide();
                    $("#downloadContents").hide();
                    $("#modelsContents").hide();
                });

                $("#btnGallery").click(function(){
                    $("#homeContents").hide();
                    $("#backgroundContents").hide();
                    $("#galleryContents").show();
                    $("#aboutContents").hide();
                    $("#downloadContents").hide();
                    $("#modelsContents").hide();
                });

                $("#btnAbout").click(function(){
                    $("#homeContents").hide();
                    $("#backgroundContents").fadeIn(2000);
                    $("#galleryContents").hide();
                    $("#aboutContents").show();
                   
                    $("#modelsContents").hide();
                });

                $("#btnDownload").click(function(){
                    $("#homeContents").hide();
                    $("#backgroundContents").hide();
                    $("#galleryContents").hide();
                    $("#aboutContents").hide();
                   
                    $("#modelsContents").hide();
                });
                
                $("#btnModel").click(function(){
                    
                    $("#homeContents").hide();
                    $("#backgroundContents").hide();
                    $("#galleryContents").hide();
                    $("#aboutContents").hide();
                    
                    $("#modelsContents").show();
                    $("#cokeDescription").show();
                });
                
            });

            

    function changeLook1() {
	document.getElementById('homeContents').style.backgroundColor = 'rgba(255,255,255, 0.9)';
	document.getElementById('galleryContents').style.backgroundColor = 'rgba(255,255,255, 0.9)';
	document.getElementById('aboutContents').style.backgroundColor = 'rgba(255,255,255, 0.9)';
	document.getElementById('modelsContents').style.backgroundColor = 'rgba(255,255,255, 0.9)';
   
	document.getElementById('backgroundContents').style.backgroundColor = 'rgba(255,255,255, 0.9)';	
	document.getElementById('cokeDescription').style.backgroundColor = 'rgba(255,255,255, 0.9)';
	
}



function changeLook2() {
	document.getElementById('homeContents').style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
	document.getElementById('galleryContents').style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
	document.getElementById('aboutContents').style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
	document.getElementById('modelsContents').style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    document.getElementById('cokeDescription').style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    document.getElementById('backgroundContents').style.backgroundColor = 'rgba(0, 0, 0, 0.5)';	
}

        </script>
  </head>


    <body>

        <!-- Header -->
        <nav class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
            <div class="container">
                <!-- Brand -->
                <div class="logo">
                    <a class="navbar-brand" href="#">
               
                    <h1>CokeCola Journey~</h1>

                  
                    </a>
                </div>

                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

               
                <div class="collapse navbar-collapse" id="collapsibleNavbar" id="logo">
                    <!-- Links -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" id="btnHome" >Home</a>
                        </li>
                         
                        <li class="nav-item">
                            <a class="nav-link" id="btnGallery">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="btnModel">Models</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="btnAbout">About</a>
                        </li>

                  
                        <!-- Dropdown -->




                        <li class="nav-item dropdown">
                        
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Theme</a>
                        
                            <div class="dropdown-menu">
                                
                                <a href="javascript:changeLook1()" class="dropdown-item" >Day Theme</a>
                                <a href="javascript:changeLook2()" class="dropdown-item">Night Theme</a>
              
                                </div>
                            </div>
                        </li> 
                          
                    </ul>
                </div>
            </div>
            
        </nav>   
        
       
           <!-- Three main model Bodies 
           <div id="homeContents">
               This is home contents.
           </div>
           
           

           <div id="spriteContents">
               This is sprite contents.
           </div>

           <div id="pepperContents">
               This is pepper contents.
           </div>

           <button id="btnHome"></div>
           <button id="btnCoke"></div>
           <button id="btnSprite"></div>
           <button id="homePepper"></div>-->
        <div id="backgroundContents">
        <img src="../assignment/assets/images/galleryImage/background2.jpeg" style="width:100%;height:60%">
        </div>
        <!-- Main Body -->
        <div class="container main_contents">
            <!-- Introduction Body -->
            
            <!-- Gallery home page -->
             
            <div id="homeContents">
                <div id="title1"></div>
                <div class="row">
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                      <div id="colaBImgt"></div>                         
                                <div id="colaBImg1"></div>                         
                            <div id="colaBImgb"></div>                         
                          <div class="card-body">
                        <div id="colaBTitle"></div>
                        <div id="colaBDescription"></div>  
                                <a href="https://en.wikipedia.org/wiki/Coca-Cola" id="btnModel"  class="btn btn-danger btngallery">Find Out More</a>         
                                      
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card">
                      <div id="ColaPImgt"></div>                         
                                <div id="colaPImg1"></div>                         
                            <div id="ColaPImgb"></div>                         
                          <div class="card-body">
                        <div id="colaPTitle"></div>
                        <div id="colaPDescription"></div>  
                            <a href="https://en.wikipedia.org/wiki/Coca-Cola" id="btnModel"  class="btn btn-danger">Find Out More</a>   
                          </div>
                          
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                        
                            <div id="pesiImgt"></div>                         
                                <div id="pesiImg1"></div>                         
                            <div id="pesiImgb"></div>                         
                          <div class="card-body">
                        <div id="pesiTitle"></div>
                        <div id="pesiDescription"></div>  
            
                            <a href="https://en.wikipedia.org/wiki/Pepsi" id="btnModel"  class="btn btn-danger">Find Out More</a>   
                           
                          </div>
                      </div>
                  </div>
            </div>
          </div>  

        </div>
        </div>
        
        <!-- Gallery Page -->
        <div id="galleryContents">
                <div class="row">

                <div class="col-sm-4">
                        <div class="card text-left">
                            <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                            <!-- Dropdown nav-tab -->
                            <li class="nav-item">
                                <a class="nav-link">Cola Bottle</a>

                                </li>
                            </ul>
                            </div>
                            <div class="card-body">
                            <div class="card-Title x3dCamera_Subtitle drinksText">
                                <h3>Cola Bottle Gallery</h3>
                            </div>                            
                            <a href="../assignment/assets/archive/bottle.zip" class="btn btn-danger btn-responsive">Download Picture</a> 

                            
                            <div class="card-text x3dCameraDescription drinksText">
                                <p>Click download button to download images</p>
                            </div>
                            
                           
                            <div id="colaBImgt"></div>                         
                                <div id="colaBImgx"></div>                         
                            <div id="colaBImgb"></div>   

                            <div id="colaBImgt"></div>                         
                                <div id="colaBImg2"></div>                         
                            <div id="colaBImgb"></div>   

                            <div id="colaBImgt"></div>                         
                                <div id="colaBImg3"></div>                         
                            <div id="colaBImgb"></div>

                            <div id="colaBImgt"></div>                         
                                <div id="colaBImg4"></div>                         
                            <div id="colaBImgb"></div>
                            

                           
                                
                            </div>
                        </div>
                </div>   


                    <div class="col-sm-4">
                        <div class="card text-left">
                            <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                            <!-- Dropdown nav-tab -->
                            <li class="nav-item">
                                <a class="nav-link">Cola Glass</a>
                        
                                </li>
                            </ul>
                            </div>
                            <div class="card-body">
                            <div class="card-Title x3dCamera_Subtitle drinksText">
                                <h3>Cola Glass Gallery</h3>
                            </div>         

                            <a href="../assignment/assets/archive/plate.zip" class="btn btn-danger btn-responsive">Download Picture</a> 

                            
                            <div class="card-text x3dCameraDescription drinksText">
                                <p>Click download button to download images</p>
                            </div>
                            
                            <div id="colaBImgt"></div>                         
                                <div id="colaPImgx"></div>                         
                            <div id="colaBImgb"></div>   

                            <div id="colaBImgt"></div>                         
                                <div id="colaPImg2"></div>                         
                            <div id="colaBImgb"></div>   

                            <div id="colaBImgt"></div>                         
                                <div id="colaPImg3"></div>                         
                            <div id="colaBImgb"></div>

                            <div id="colaBImgt"></div>                         
                                <div id="colaPImg4"></div>                         
                            <div id="colaBImgb"></div>
                                
                            </div>
                        </div>
                </div>   




                    <div class="col-sm-4">
                        <div class="card text-left">
                            <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                            <!-- Dropdown nav-tab -->
                            <li class="nav-item">
                                <a class="nav-link">Pepsi Can</a>
                        
                                </li>
                            </ul>
                            </div>
                            <div class="card-body">
                            <div class="card-Title x3dCamera_Subtitle drinksText">
                                <h3>Pepsi Can Gallery</h3>
                            </div>                            
                            
                            <a href="../assignment/assets/archive/can.zip" class="btn btn-danger btn-responsive">Download Picture</a> 

                            
                            <div class="card-text x3dCameraDescription drinksText">
                                <p>Click download button to download images</p>
                            </div>
                            
                            <div id="colaBImgt"></div>                         
                                <div id="pesiImgx"></div>                         
                            <div id="colaBImgb"></div>   

                            <div id="colaBImgt"></div>                         
                                <div id="pesiImg2"></div>                         
                            <div id="colaBImgb"></div>   

                            <div id="colaBImgt"></div>                         
                                <div id="pesiImg3"></div>                         
                            <div id="colaBImgb"></div>

                            <div id="colaBImgt"></div>                         
                                <div id="pesiImg4"></div>                         
                            <div id="colaBImgb"></div>
                                
                            </div>
                        </div>
                </div>   



            </div> <!-- End of gallery  row -->

        </div><!--End of gallery-->
        
        
        <div id="aboutContents">
         

        <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                      <h2>About</h2>
                      <p>CandNo:221483</p></br>
                      <p>Github link : https://github.com/ky205/web3d.git</p></br>
                      <p>Logo and font design is partial depend on https://codepen.io/TajShireen/pen/abzmoRE </p></br>
                    <p>This website choose pepsi texture because there is no other suitable can texture on internet</p>  
                    </div>
                  </div>
              </div>
          </div> <!-- End sprite description contents -->
        
            </div>
        </div>








        <div id="modelsContents">
        <div class="col-sm-12"> 
        <h2>X3D Model</h2>
                <x3d id="wire" width='1600px' height='600px'>
                    <scene>
        <directionalLight id="directional" direction='0 -1 0' on ="TRUE" intensity='2.0' shadowIntensity='0.0'>
        </directionalLight>
        <directionalLight id="directional2" direction='1000 -3000 1000' on ="TRUE" intensity='2.0' shadowIntensity='0.0'>
        </directionalLight>
        <directionalLight id="directional3" direction='1500 -6000 4000' on ="TRUE" intensity='2.0' shadowIntensity='0.0'>
        </directionalLight>
       
        
        <PointLight id='point1' on='TRUE' intensity='0.9000' ambientIntensity='0.0000' color='0.0 0.6 0.0' location='479.7 0 152.8'  attenuation='0 0 0' radius='5705'> </PointLight>
        <PointLight id='point2' on='TRUE' intensity='0.9000' ambientIntensity='0.0000' color='0.0 0.6 0.0' location='-326.1 347.9 -399.7'  attenuation='0 0 0' radius='5705'> </PointLight>
        <PointLight id='point3' on='TRUE' intensity='0.9000' ambientIntensity='0.0000' color='0.0 0.6 0.0' location='-2.231 766.6 270.1'  attenuation='0 0 0' radius='5705'> </PointLight>    
        <PointLight id='point4' on='TRUE' intensity='0.9000' ambientIntensity='0.0000' color='0.0 0.6 0.0' location='-377.1 429.8 -53.57'  attenuation='0 0 0' radius='5705'> </PointLight>
        <PointLight id='point5' on='TRUE' intensity='0.9000' ambientIntensity='0.0000' color='0.0 0.6 0.0' location='602.1 949 61.88'  attenuation='0 0 0' radius='5705'> </PointLight>
        <PointLight id='point6' on='TRUE' intensity='0.9000' ambientIntensity='0.0000' color='0.0 0.6 0.0' location='151.8 0 232.5'  attenuation='0 0 0' radius='5705'> </PointLight>
        <PointLight id='point7' on='TRUE' intensity='0.9000' ambientIntensity='0.0000' color='0.0 0.6 0.0' location='246.846 240.428 337.595'  attenuation='0 0 0' radius='5705'> </PointLight>
        <PointLight id='point8' on='TRUE' intensity='0.9000' ambientIntensity='0.0000' color='0.0 0.6 0.0' location='369.555 812.051 359.796'  attenuation='0 0 0' radius='5705'> </PointLight>

                        <Switch whichChoice="0" id='SceneSwitch'>
                        <transform>
                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/assets/x3d/pesi.x3d" > </inline>
                            </transform>
                        <transform>
                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/assets/x3d/plate.x3d"> </inline>
                        </transform>
                        <transform>
                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../assignment/assets/x3d/bottle.x3d"> </inline>
                            </transform>
                        
                        
                            
                            </Switch>

                    </scene>
                </x3d>
                <div id="tools" style="width: 1000px;">

<input type="checkbox" checked="true" onclick="lightSwitch('directional')">
    <label>Direct light 1</label>
    <input type="checkbox" checked="true" onclick="lightSwitch('directional2')">
    <label>Direct light 2</label>
    <input type="checkbox" checked="true" onclick="lightSwitch('directional3')">
    <label>Direct light 3</label>

    <input type="checkbox" checked="true" onclick="lightSwitch('point1')">
    <label>spot light 1</label>
    <input type="checkbox" checked="true" onclick="lightSwitch('point2')">
    <label>spot light 2</label>
    <input type="checkbox" checked="true" onclick="lightSwitch('point3')">
    <label>spot light 3</label>
    <input type="checkbox" checked="true" onclick="lightSwitch('point4')">
    <label>spot light 4</label>
    <input type="checkbox" checked="true" onclick="lightSwitch('point5')">
    <label>spot light 5</label>
    <input type="checkbox" checked="true" onclick="lightSwitch('point6')">
    <label>spot light 6</label>

  
</div>
           
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item">
                              <a class="nav-link active" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                      
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                        
                          
                          <a href="#" class="btn btn-danger btn-responsive" onclick="cameraFront();">Front</a>
                          <a href="#" class="btn btn-danger btn-responsive" onclick="cameraBack();">Back</a>
                          <a href="#" class="btn btn-danger btn-responsive" onclick="cameraLeft();">Left</a>
                          <a href="#" class="btn btn-danger btn-responsive" onclick="cameraRight();">Right</a>
                          <a href="#" class="btn btn-danger btn-responsive" onclick="cameraTop();">Top</a>
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>Click these buttons to change camera view</p>
                          </div>
                        </div>
                      </div>
                </div>   
              
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item">
                              <a class="nav-link active" href="#" id="navbardrop" data-toggle="dropdown">Models and Wire</a>
                      
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Models</h3>
                          </div>                            
                          <button type="button" class="btn btn-danger btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Pepsi Can</button>
                         <button type="button" class="btn btn-danger btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Cola Glass</button>
                         <button type="button" class="btn btn-danger btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Cola Bottle</button>
                         <a href="#" class="btn btn-primary btn-responsive" onclick="wireFrame();">Wire</a> 

                          
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>Click these buttons to see different models and change wire</p>
                          </div>
                        </div>
                      </div>
                </div>   

                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item">
                              <a class="nav-link active" href="#" id="navbardrop" data-toggle="dropdown">Downloads Code and Models</a>
                      
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Download</h3>
                          </div>                            
                          
                          <a href="../assignment/assets/archive/assignment.zip" class="btn btn-danger btn-responsive" download>Download Code</a>
                          <a href="../assignment/assets/archive/canx3d.zip" class="btn btn-danger btn-responsive" download>Download pesi</a>
                          <a href="../assignment/assets/archive/platex3d.zip" class="btn btn-danger btn-responsive" download>Download Cola plate</a>
                          <a href="../assignment/assets/archive/bottlex3d.zip" class="btn btn-danger btn-responsive" download>Download Cola bottle</a>
                       
                          <div class="card-text x3dCameraDescription drinksText">
                            <p>Click these button to download code and models</p>
                          </div>
                        </div>
                      </div>
                </div>   
            </div>        <!-- Action button row -->

            <!-- gallery  row -->
            
            <div id="cokeDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                  <div id="pesiTitlex"></div>
                      <div class="card-body">
                        <div id="pesiDescriptionx"></div>  
                        <a href="https://www.coca-cola.co.uk/home" class="btn btn-danger btn-responsive">Find Out More..</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End coke description contents -->

          <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
          <div id="spriteDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                      <div id="colaPTitlex"></div>
                        <div id="colaPDescriptionx"></div>  
                        <a href="https://www.coca-cola.co.uk/home" class="btn btn-danger btn-responsive">Find Out More..</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End sprite description contents -->

          <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
          <div id="pepperDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      
                      <div class="card-body">
                      <div id="colaBTitlex"></div>
                        <div id="colaBDescriptionx"></div>  
                        <a href="https://www.coca-cola.co.uk/home" class="btn btn-danger btn-responisve">Find Out More..</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End pepper description contents -->
    
    </div>
</div>

      

        







        <!-- Footer -->
        <nav class="navbar navbar-expand-sm footer">
            <div class="container">
                <div class="navbar-text float-left copyright">
                <p><span class="align-baseline"></span>&copy 2021 Mobile Web 3D Application</span></p>
            </div>
            
            <div class="navbar-text float-right social">
                <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>          
                <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
                <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
            </div>
        </nav>
            
        
    </body>
</html>
