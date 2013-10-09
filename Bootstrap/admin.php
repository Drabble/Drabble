<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Portfolio</title>
    <meta name="description" content="Portfolio" />
    <meta name="author" content="Antoine Drabble" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" />
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
	<link href="css/design.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	

	<!--[if IE 7]>
		<link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.min.css">
	<![endif]-->
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="span3">
                <a href="/Bootstrap/"><h1>Portfolio</h1></a>
            </div>
            <div class="span9">
				<br/>
                <p class="pull-right">
					<a href="#"><i rel="tooltip" data-original-title="Twitter" class="icon-twitter"></i></a>
					<a href="#"><i rel="tooltip" data-original-title="Facebook" class="icon-facebook"></i></a>
					<a href="#"><i rel="tooltip" data-original-title="Youtube" class="icon-youtube"></i></a>
					<a href="#"><i rel="tooltip" data-original-title="Google plus" class="icon-google-plus"></i></a>
					<a href="#"><i rel="tooltip" data-original-title="Pinterest" class="icon-pinterest"></i></a>
                </p>
            </div>
        </div>
        <hr />
		
        <div class="row">  
			<div class="span6">  
				<ul class="nav nav-tabs">  
					<li class="active">  
					<a href="#">Home</a> </li>   
					<li><a href="#">Tutorials</a></li>  
					<li><a href="#">Practice Editor </a></li>   
					<li><a href="#">Gallery</a></li>   
					<li><a href="#">Contact</a></li>   
				</ul>  
			</div> 
		</div>
		
		
		
		<div class="row">
			<form class="span9">
				<div class="span3">
					<label>Name</label>
					<input type="text" class="span3" placeholder="Title">

				</div>
				<div class="span5">
					<label>Description</label>
					<textarea name="description" id="description" class="input-xlarge span5" rows="10"></textarea>
					<button type="submit" class="btn btn-primary pull-right">Send</button>
					
				</div>
				<input id="fileupload" type="file" name="files[]" data-url="server/php/" multiple>
				<div id="progress">
					<div class="bar" style="width: 0%;"></div>
				</div>
			</form>
		</div>
	</div>

	
	
	
</div>
		<script src="js/vendor/jquery.ui.widget.js"></script>
		<script src="js/jquery.iframe-transport.js"></script>
		<script src="js/jquery.fileupload.js"></script>
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type='text/javascript'>
		$(function (){
		    $("[rel='tooltip']").tooltip();
		   
			$('#fileupload').fileupload({
				dataType: 'json',
				done: function (e, data) {
					$.each(data.result.files, function (index, file) {
						$('<p/>').text(file.name).appendTo(document.body);
					});
				}
			});

		
			$('#fileupload').fileupload({
				/* ... */
				progressall: function (e, data) {
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$('#progress .bar').css(
						'width',
						progress + '%'
					);
				}
			});
		});
		</script>
</body>

</html>