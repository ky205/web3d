

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
