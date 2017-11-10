
<nav class="navbar navbar-inverse  navbar-fixed-top">
	<div class="container fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav">
				@if(Auth::guest())

				@elseif (Auth::user()->type =='Admin')
					<li class="dropdown">
			  			<a href="#" class="drop-toggle" data-toggle="dropdown"><i class="fa fa-users" aria-hidden="true"></i> Recursos humanos<span class="caret"></span>	</a>

				  		<ul class="dropdown-menu">
							<li><a href="{{ url('/alumnos') }}"><i class="fa fa-users"></i> Alumnos</a></li>
					
			  				<li><a href="{{ url('/profesores') }}"><i class="fa fa-users" aria-hidden="true"></i> Profesores</a></li>
			  				<li><a href="{{ url('/coordinadores') }}"><i class="fa fa-users" aria-hidden="true"></i>Coordinadores</a></li>
			  			</ul>
				  	</li>
			  		<li class="dropdown">
			  			<a href="#" class="drop-toggle" data-toggle="dropdown"><i class="fa fa-folder-open" aria-hidden="true"></i> Administrativos<span class="caret"></span>	</a>

				  		<ul class="dropdown-menu">
				  			<li><a href="{{ url('/materias') }}" ><i class="fa fa-book" aria-hidden="true"></i> Materias</a></li>
				  			<li><a href="{{ url('/aulas') }}" ><i class="fa fa-book" aria-hidden="true"></i> Aulas</a></li>
				  			<li><a href="{{ url('/licenciaturas') }}"><i class="fa fa-book" aria-hidden="true"></i> Licenciaturas</a></li>
				  			<li><a href="{{ url('/grupos') }}"><i class="fa fa-book" aria-hidden="true"></i> Grupos</a></li>
				  		</ul>
				  	</li>
				  	<li class="dropdown">
			  			<a href="#" class="drop-toggle" data-toggle="dropdown"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Academico<span class="caret"></span>	</a>
						<ul class="dropdown-menu">  	
						  	<li><a href="{{ url('/horarios') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Horarios</a></li>
						  	<li><a href="{{ url('/calificaciones/grupos') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Calificaciones</a></li>
						  	<li><a href="{{ url('/fin') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Fin Cuatrimestre</a></li>
				  		</ul>
				  	</li>
				  	<form class="navbar-form navbar-left" action="{{url('alumno/buscar')}}" method="POST">
 					<div class="form-group">{{ csrf_field() }}
  					<input type="text" class="form-control" name='matricula' placeholder="Matricula del alumno" />
					 </div>
					 <button type="submit" class="btn btn-default">Buscar</button>
					</form>
				@elseif (Auth::user()->type =='Administrativo')
					<li class="dropdown">
			  			<a href="#" class="drop-toggle" data-toggle="dropdown"><i class="fa fa-users" aria-hidden="true"></i> Recursos humanos<span class="caret"></span>	</a>

				  		<ul class="dropdown-menu">
							<li><a href="{{ url('/alumnos') }}"><i class="fa fa-users"></i> Alumnos</a></li>
					
			  				<li><a href="{{ url('/profesores') }}"><i class="fa fa-users" aria-hidden="true"></i> Profesores</a></li>
			  				<li><a href="{{ url('/coordinadores') }}"><i class="fa fa-users" aria-hidden="true"></i>Coordinadores</a></li>
			  			</ul>
				  	</li>
				  	<li class="dropdown">
			  			<a href="#" class="drop-toggle" data-toggle="dropdown"><i class="fa fa-folder-open" aria-hidden="true"></i> Academico<span class="caret"></span>	</a>

				  		<ul class="dropdown-menu">
				  			<li><a href="{{ url('/horarios') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Horarios</a></li>
						  	<li><a href="{{ url('/calificaciones/grupos') }}"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Calificaciones</a></li>
				  			<li><a href="{{ url('/grupos') }}"><i class="fa fa-book" aria-hidden="true"></i> Grupos</a></li>
				  		</ul>
				  	</li>
				  	<form class="navbar-form navbar-left" action="{{url('alumno/buscar')}}" method="POST">
 					<div class="form-group">{{ csrf_field() }}
  					<input type="text" class="form-control" name='matricula' placeholder="Matricula del alumno" />
					 </div>
					 <button type="submit" class="btn btn-default">Buscar</button>
					</form>
				@elseif (Auth::user()->type =='Coordinador')
					<li><a href="{{ url('/grupo/coordinador') }}"><i class="fa fa-users" aria-hidden="true"></i> Grupos</a></li>
					<form class="navbar-form navbar-left" action="{{url('alumno/buscar')}}" method="POST">
 					<div class="form-group">{{ csrf_field() }}
  					<input type="text" class="form-control" name='matricula' placeholder="Matricula del alumno" />
					 </div>
					 <button type="submit" class="btn btn-default">Buscar</button>
					</form>
				@elseif (Auth::user()->type =='Profesor')
					<li><a href="{{ url('/horario/profesor') }}"><i class="fa fa-users" aria-hidden="true"></i> Horario</a></li>
				@elseif (Auth::user()->type =='Alumno')
					<li><a href="{{ url('/horario/alumno') }}"><i class="fa fa-users" aria-hidden="true"></i> Horario</a></li>
					<li><a href="{{ url('/calificacion') }}"><i class="fa fa-users" aria-hidden="true"></i> Calificaciones</a></li>
					<li><a href="{{ url('/kardexx') }}"><i class="fa fa-users" aria-hidden="true"></i> Kardex</a></li>
				@else
				@endif
				</ul>
				<ul class="nav navbar-nav navbar-right"> 
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                    @if(Auth::user()->type =='Admin')
                    <li><a href="{{ url('/usuarios') }}"><i class="fa fa-id-card" aria-hidden="true"></i> Usuarios</a></li>
                    @endif
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->nombre }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                       <i class="fa fa-fw fa-power-off"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
		</div>
	</div>
</nav>
