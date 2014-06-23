


  <body>


  <!--  ventana Modal -->

  	<div id="ventanamodal">

	 <div class="jumbotron"  id="ventana">
	 	<br>
	 	
	<div class="panel-body">
	  <form  class="form-signin" METHOD="POST" >

	          <form class="form-signin" role="form" >
	                <div align="center"  class="form-group has-success has-feedback"><h2 class="form-signin-heading"></h2>
	                <div class="input-group input-group-lg">
					  <span class="input-group-addon">CURP</span>
					  <input type="text" class="form-control" placeholder="Introdusca su CURP de su hijo">
					</div>
	                </div>
	                <br>
	        		<br>
	            
	                <button class="btn btn-lg btn-primary btn-block" id="entrar" type="submit">Entrar</button>
	                

	          </form>

	        </form>

            	<br>
            	
	             <button   id="extranjero" class="btn btn-lg  btn-success btn-block" type="submit">Soy extranjero</button>
                
	              <br>
                  <form  class="form-signin" METHOD="POST"  target="_blank" action="http://consultas.curp.gob.mx/CurpSP/">
	              	<button   id="obtener"  class="btn btn-lg btn-info btn-block" type="submit">Obtener la Curp </button>
                  </form>
	              <br>
	              
	          <div align ="center">
                 
                 <form  class="form-signin" METHOD="POST"  action="http://localhost/ccfreinet/">
	               <button type="submit" class="btn btn-danger">
	                  Cancelar
	               </button>
	              </form>
	          </div>


	   
	   <p></p>
	   </div>
	 </div>
	 
	</div>

  <!-- 

  Fin de la ventana Modal
  -->

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Celestin Freinet</a>
        </div>
        <div class="navbar-collapse collapse">
          
          	<ul class="nav navbar-nav">
	            <li class="active"><a href="#">Inicio</a></li>
	            <li><a href="#about">Contacto</a></li>
          	</ul>
          
        </div>
      </div>
    </div>

    <div class="container theme-showcase" role="main">
      <div class="jumbotron">
		<h1>Ingresa tus Datos!<button id="terminar" class="btn btn-primary btn_big">Terminar</button></h1>
		<div class="progress">
			  <div class="progress-bar" id="proceso" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
				60%
			  </div>
		</div>
			<ul class="nav nav-tabs ">
				<li id="tab-alumno"><a href="#bar">ALUMNO</a></li>
				<li  id="tab-padre"><a href="#rar">PADRES</a></li>
				<li  id="tab-madre" ><a href="#">MADRE</a></li>
				<li  id="tab-otros" ><a href="#">PERSONAS AUTORIZADAS</a></li>
			</ul>
			
			<!-- datos del alumno-->
            <div id="panel-alumno" class="panel panel-default panel-tab" >
				<div class="panel-body">
					<form id="form-alumno">
						<table class="table table-hover">
							<thead>
							</thead>
							<tbody>
								<tr>
									<td class="col-md-3"  ><b>Fecha de pre-inscripcion:</b></td>
									<td><input id="input-fechapre" type="text" class="validate[required]  form-control" placeholder="" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Nombre:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Nombre" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Apellido Paterno</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Apellido Paterno" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3" ><b>Apellido Materno:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Apellido Materno" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Fecha de Nacimiento:</b></td>
									<td><input id="fecha_nace" type="text" class="validate[required,custom[date]] form-control" value="" /></td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
            </div>
			<!-- datos del padre-->
            <div id="panel-padre" class="panel panel-default panel-tab">
				<div class="panel-body">
					 <form id="form-padre">
						<table class="table table-hover">
							<thead>
							</thead>
							<tbody>
								<tr>
									<td class="col-md-3"  ><b>Nombre:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Nombre" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Apellido Paterno:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Apellido Paterno" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Apellido Materno:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Apellido Materno" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3" ><b>Lugar de Trabajo:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Lugar de Trabajo" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Tel. del trabajo:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Tel. del trabajo" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3"   ><b>Tel. de celular:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Tel. de celular" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3"  ><b>Domicilio:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Domicilio" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Correo electrónico:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Correo Electronico" value=""/></td>
								</tr>
							</tbody>
						</table>
					</form>
					
				</div>
            </div>
			<!-- datos del madre-->
            <div id="panel-madre" class="panel panel-default panel-tab">
				<div class="panel-body">
					<form id="form-madre">
						<table class="table table-hover">
							<thead>
							</thead>
							<tbody>
								<tr>
									<td class="col-md-3"  ><b>Nombre:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Nombre" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Apellido Paterno:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Apellido Paterno" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Apellido Materno:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Apellido Materno" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3" ><b>Lugar de Trabajo:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Lugar de Trabajo" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Tel. del trabajo:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Tel. del trabajo" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3"   ><b>Tel. de celular:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Tel. de celular" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3"  ><b>Domicilio:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Domicilio" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Correo electrónico:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Correo electrónico" value=""/></td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
            </div>
			
			<!-- datos del otros-->
            <div id="panel-otros" class="panel panel-default panel-tab">
				<div class="panel-body">
					<h2>Persona Autorizada1<h2>
					 <form id="form-otro1">
						<table class="table table-hover">
							<thead>
							</thead>
							<tbody>
								<tr>
									<td class="col-md-3"  ><b>Nombre:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Nombre" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Apellido Paterno:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Apellido Paterno" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Apellido Materno:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Apellido Materno" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3" ><b>Lugar de Trabajo:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Lugar de Trabajo" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Tel. del trabajo:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Tel. del trabajo" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3"   ><b>Tel. de celular:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Tel. de celular" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3"  ><b>Telefono de Casa:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Telefono de Casa" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Parentesco:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Parentesco" value=""/></td>
								</tr>
							</tbody>
						</table>
					</form>
					<h2>Persona Autorizada2<h2>
					
					 <form id="form-padre">
						<table class="table table-hover">
							<thead>
							</thead>
							<tbody>
								<tr>
									<td class="col-md-3"  ><b>Nombre:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Nombre" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Apellido Paterno:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Apellido Paterno" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Apellido Materno:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Apellido Materno" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3" ><b>Lugar de Trabajo:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Lugar de Trabajo" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Tel. del trabajo:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Tel. del trabajo" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3"   ><b>Tel. de celular:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Tel. de celular" value=""/></td>
								</tr>
								<tr>
									<td class="col-md-3"  ><b>Domicilio:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Domicilio" value=""/></td>
								</tr>
								<tr>
									<td  class="col-md-3" ><b>Correo electrónico:</b></td>
									<td><input id="input-nombre" type="text" class="validate[required]  form-control" placeholder="Correo electrónico" value=""/></td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
            </div>
			
			
			
      </div>

		      
    </div>
        

  </body>
</html>