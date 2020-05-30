      <?php  
      $sit=basename($_SERVER['PHP_SELF']); 
      $ac1='';
      $ac2='';
      $ac3='';
      $ac4='';
      $ac5='';
      if($sit==='inicio.php'){
        $ac1='active';
      }else if($sit==='menus.php'){
        $ac2='active';
      }else if($sit==='promociones.php'){
        $ac3='active';
      }else if($sit==='ubicacion.php'){
        $ac4='active';
      }else if($sit==='contacto.php'){
        $ac5='active';
      }else 
      ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="inicio"><img width="90" src="public/img/Logo_El_buen_paladar.webp" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03"
          aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor03">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item <?php echo $ac1 ?>">
                  <a class="nav-link" href="inicio">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item <?php echo $ac2 ?>">
                  <a class="nav-link" href="menus">Menús</a>
              </li>
              <li class="nav-item <?php echo $ac3 ?>">
                  <a class="nav-link" href="promociones">Promociones</a>
              </li>
              <li class="nav-item <?php echo $ac4 ?>">
                  <a class="nav-link" href="ubicacion">Ubicación</a>
              </li>
              <li class="nav-item <?php echo $ac5 ?>">
                  <a class="nav-link" href="contacto">Contacto</a>
              </li>
          </ul>
      </div>
  </nav>
