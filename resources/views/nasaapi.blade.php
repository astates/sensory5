<!DOCTYPE html>
<html lang="en">
    @include('header')

    <body>
    <canvas id="space"></canvas>
    <div class="container">
    @include('nav')
        <div class="position-ref fullHeight padded-top">
            <div class="content">
                <div class="sub_container">
                    <p class="intro_text_big">NASA API</p>
                      
  <img id="apod_img_id" width="100%"/>
  
  <p id="copyright"></p>
  
  <h3 id="apod_title"></h3>
  <p id="apod_explaination"></p>
  
                    
                </div>
                
            </div>
        </div>@include('footer')
        
        </div>
<script>
        var url = "https://api.nasa.gov/planetary/apod?api_key=QdoNiUu89neCYnO55Rjbpb3LzJoTmQCs4oBFpsxp";


$.ajax({
  url: url,
  success: function(result){
  if("copyright" in result) {
    $("#copyright").text("Image Credits: " + result.copyright);
  }
  else {
    $("#copyright").text("Image Credits: " + "Public Domain");
  }
  
  if(result.media_type == "video") {
    $("#apod_img_id").css("display", "none"); 
    $("#apod_vid_id").attr("src", result.url);
  }
  else {
    $("#apod_vid_id").css("display", "none"); 
    $("#apod_img_id").attr("src", result.url);
  }
  $("#reqObject").text(url);
  $("#returnObject").text(JSON.stringify(result, null, 4));  
  $("#apod_explaination").text(result.explanation);
  $("#apod_title").text(result.title);
}
});
</script>
    </body>
</html>
