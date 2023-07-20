
<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CC Checker - Free Credit card checker</title>
  <link rel='icon' href='https://raw.githubusercontent.com/RISHAB-CREATOR/ItzRishabTools/main/icons/icon_64.png'>
  <meta name="description" content="Uncoder.eu.org is free credit card checker. Our CC Checker are working very well to check your real,valid credit card details.Uncoder.eu.org is also providing visa card number credit card checker and credit card generator and validator.our cc checker and credit card checker also provide bin checker.">
   <meta name="keywords" content="cc checker, credit card checker, card checker, cc, bin, cc generator , bin checker , cc checker , visa card checker ,  card checker , visa card checker">
   <link rel="canonical" href="https://uncoder.eu.org/cc-checker/" />
  <meta name="robots" content="index, follow">
  <meta name="author" content="OshekharO">
  <meta property="og:url" content="https://uncoder.eu.org/cc-checker/">
  <meta property="og:image" content="https://rawcdn.githack.com/OshekharO/Entertainment-Index/17d005915d5e20780a46aef227f08367ca8efb3a/img/apple-touch-icon.png" />
  <meta property="og:locale" content="en_US">
  <meta property="og:type" content="website">
  <meta name="copyright" content="Copyright © 2023 OshekharO">
  <meta property="og:image" content="https://rawcdn.githack.com/OshekharO/Entertainment-Index/17d005915d5e20780a46aef227f08367ca8efb3a/img/android-chrome-512x512.png" />
  <link rel="shortcut icon" href="https://rawcdn.githack.com/OshekharO/Entertainment-Index/17d005915d5e20780a46aef227f08367ca8efb3a/img/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" sizes="180x180" href="https://rawcdn.githack.com/OshekharO/Entertainment-Index/17d005915d5e20780a46aef227f08367ca8efb3a/img/apple-touch-icon.png" />
  <link rel="icon" type="image/png" href="https://rawcdn.githack.com/OshekharO/Entertainment-Index/17d005915d5e20780a46aef227f08367ca8efb3a/img/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="https://github.com/OshekharO/Entertainment-Index/blob/master/img/favicon-16x16.png" sizes="16x16" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
  <link href="style.css" rel="stylesheet" />
 </head>

 <body>
  <div class="fs-3 fw-bold mb-5 text-uppercase mx-auto text-center text-light">Credit Card Checker
    </div>
  <form method="post" action="api.php" role="form" id="form">
   <div class="box-body">
    <div class="box-content">
     <label for="cc" class="form-label fs-6 font-monospace badge bg-danger text-light">Card Numbers</label>
     <div>
      <textarea class="form-control" rows="10" id="cc" name="cc" title="53012724539xxxxx|05|2022|653" placeholder="53012724539xxxxx|05|2022|653" required></textarea>
     </div>
     <div class="button text-center mb-3 mt-3">
      <button type="submit" name="valid" class="btn btn-outline-success text-light">START</button>
      <button type="button" id="stop" class="btn btn-outline-danger text-light" disabled>STOP</button>
     </div>
    </div>
   </div>

   <!-- Info success -->
   <div class="box-title">
    <h3 class="panel-title alert alert-primary font-monospace">Live - <span class="badge bg-success live">0</span></h3>
   </div>
   <div class="box-body">
    <div class="box-content alert alert-success">
     <div class="panel-body success"></div>
    </div>
   </div>

   <!-- Info error -->
   <div class="box-title">
    <h3 class="panel-title alert alert-primary font-monospace">Die - <span class="badge bg-danger die">0</span></h3>
   </div>
   <div class="box-body">
    <div class="box-content alert alert-danger">
     <div class="panel-body danger"></div>
    </div>
   </div>
   
    <!-- Info unknown -->
      <div class="box-title">
      <h3 class="panel-title alert alert-primary font-monospace">Unknown - <span class="badge bg-warning unknown">0</span></h3>
      </div>
      <div class="box-body">
        <div class="box-content alert alert-warning">
          <div class="panel-body warning"></div>
        </div>
      </div>
  </form>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
    // Enables the button with the name "valid" and disables the button with the id "stop"
    $("button[name='valid']").attr("disabled",false);
    $("button[id='stop']").attr("disabled",true);

    var intervalId;
    
    $("#form").submit(function(event){
        event.preventDefault();
        event.stopImmediatePropagation();

        var form = $(this);
        var inputLines = $("#cc").val().split("\n");

        if(inputLines != "" || typeof inputLines != "object"){
            var index = 0,
                liveCount = 0 + $(".live").text(),
                dieCount = 0 + $(".die").text(),
                unknownCount = 0 + $(".unknown").text(),
                linesCount = inputLines.length;
                
            intervalId = setInterval(function(){
                $.post(form.attr("action"), {"data":inputLines[index]}, function(response, textStatus){
                    if(textStatus == "success"){
                        var parsedResponse = JSON.parse(response);
                        if(parsedResponse.error == 1){
                            $(".success").prepend(parsedResponse.msg);
                            liveCount++;
                            $(".live").text(liveCount);
                        } else if(parsedResponse.error == 2){
                            $(".danger").prepend(parsedResponse.msg);
                            dieCount++;
                            $(".die").text(dieCount);
                        } else if(parsedResponse.error == 3){
                            $(".warning").prepend(parsedResponse.msg);
                            unknownCount++;
                            $(".unknown").text(unknownCount);
                        } else if(parsedResponse.error == 4){
                            $(".info").show().prepend(parsedResponse.msg + "<br>");
                        }
                    }
                });
                
                if(index == linesCount){
                    clearInterval(intervalId);
                    $("#cc").val("");
                    $("#cc").attr("disabled",false);
                    $("button[name='valid']").attr("disabled",false);
                    $("button[id='stop']").attr("disabled",true);
                } else {
                    index++;
                    $("#cc").attr("disabled",true);
                    $("button[id='stop']").attr("disabled",false);
                    $("button[name='valid']").attr("disabled",true);
                }
            },1500);
        } else {
            $(".info").show().html("<b>Error</b>");
        }

        return false;
    });

    // Cancels the operation when the stop button is clicked
    $("#stop").click(function(){
        clearInterval(intervalId);
        $("#cc").attr("disabled",false);
        $("button[name='valid']").attr("disabled",false);
        $("button[id='stop']").attr("disabled",true);
    })
});
</script>

 </body>
</html>
