<!DOCTYPE html>
<html lang="en">
	<head>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/pdf.css') }}">
	
		<title>@yield('title', '') | Panel de Administracion\</title>
	</head>
	<body>
		<header>

			


					 <img src="{{ asset('images/ieso.png') }}" align="center" height="70%" width="70%">

					<img src="{{ asset('images/seplogo.png') }}" align="center" height="70%" width="70%">


	
			
			
			
			
		</header>
		

		<div class="container">
			
			<div class="panel panel-primary">
		    	<div class= "panel-heading">
		    		<h1 class="panel-title">@yield('title')</h1>
		    	</div>

				<div class="panel-body">
					<div class="container-">
						<div class="row">
							
							<div class="col-xs-12">
								
						
						@yield('content')	
							</div>
						</div>
					</div>	 
				</div>
			</div>		
		</div>
	</body>

</html>
