
  <body>
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
	            <li ><a href="inscripciones">Inscripciones</a></li>
	            <li><a href="#about">Alumnos</a></li>
              <li><a href="#about">Formatos</a></li>
              <li><a href="#about">Personal</a></li>
              




          	</ul>
           
          
        </div>
      </div>
    </div>

    <div class="container theme-showcase" role="main">
	   

      <div class="jumbotron">
        <br>
        <table width="100%">
          <tr>
            <td whidth="70%">
              <h1>BIENVENIDO!</h1>
              <div align = "center"><h2><?php echo $nombre; ?></h2></div>
              <br>
              <br>
            </td>
            <td whidth="30%">
              <div align="center">
              <img class="img-circle"   data-src="holder.js/150x150" alt="150x150" src="../../img/Contacts.png" style="width: 150px; height: 150px;">
              <p></p>
              <button type="button" class="btn btn-primary">Editar Perfil</button>
             </div>
            </td>
          </tr>

        </table>
        
        <br>
         <div id="logo"> 
          <br>
         <table align="center" width="80%">
          <tr>
            <td>
              <div align="left">
                <img src="../../img/logo.png" width="200" heigth="200"><p></p>
                
              </div>
            </td>
            <td>
              <h1>Celestin Freinet</h1>
              <h3>Formando individuos y transformando al mundo</h3>
            </td>
          </tr>
         </table>
          <br>
         </div>
         <br>

          <form action="../login.html">

          <div align ="center"><button type="submit"  class="btn btn-primary btn-lg btn-block">Cerrar Sesion</button></div>		
		      
          </form>
		
		

  </body>
</html>