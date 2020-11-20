<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
  </head>

  <style media="screen">
    /* Estilo de Caja 1 */
    .caja1 {
      background: green;
      width: 30%;
    }
    .caja2 {
      background: purple;
      width: 30%;
    }
    .caja3 {
      background: yellow;
      width: 30%;
    }
    .position {
      display: inline-block;
    }
  </style>

  <link href="{!! url('/assets/materialize/css/materialize.css') !!}" rel="stylesheet">

  <body>
    <!-- Caja 1 -->
    <div class="">
      <header>

        <div class="row">
          <div class="col s12 m6">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">
                <span class="card-title">Card Title</span>
                <p>Ya se puso rara la pantalla otra vez, te mande un recorte por telegram.</p>
              </div>
              <div class="card-action">
                <a href="#">This is a link</a>
                <a href="#">This is a link</a>
              </div>
            </div>
          </div>
        </div>

      </header>
    </div>
    <!-- Caja 2 -->
    <div class="">
      <div class="caja1 position" id="identifier">
        CAJA 1
      </div>
      <div class="caja2 position" id="identifier">
        CAJA 2
      </div>
      <div class="caja3 position">
        CAJA 3
      </div>
    </div>


    <script src="{!! url('/assets/materialize/js/materialize.js') !!}"></script>
  </body>
</html>
