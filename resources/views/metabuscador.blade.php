<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.css" integrity="sha512-mG7Xo6XLlQ13JGPQLgLxI7bz8QlErrsE9rYQDRgF+6AlQHm9Tn5bh/vaIKxBmM9mULPC6yizAhEmKyGgNHCIvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form class="card text-white bg-info mb-3" method="POST"
          action="{{ url('buscar_termino') }}"
          class="form-horizontal">
        @csrf

        <fieldset>

        <!-- Form Name -->
        <legend class="text-info" style="text-align: center;"> <b>Realizar busquedas en varios motores </b></legend>



        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">1. Ingrese el término de búsqueda</label>
          <div class="col-md-5">
          <input id="textinput" name="termino" type="text" placeholder="" class="form-control input-md">

          </div>
        </div>

        <!-- Multiple Radios -->
        <div class="form-group ">
          <label class="col-md-4 control-label" for="motores">2. Seleccione el motor de búsqueda</label>
          <div class="col-md-4">
            <div class="radio">
                <label for="motores-0">
                <input type="radio" name="motores" id="motores-0" value="1" checked="checked">
                Google
                </label>
            </div>
            <div class="radio">
                <label for="motores-1">
                <input type="radio" name="motores" id="motores-1" value="2">
                Youtube
                </label>
            </div>
            <div class="radio">
                <label for="motores-1">
                <input type="radio" name="motores" id="motores-1" value="3">
                Yahoo!
                </label>
            </div>
            <div class="radio">
                <label for="motores-1">
                <input type="radio" name="motores" id="motores-1" value="4">
                Yandex
                </label>
            </div>
            <div class="radio">
                <label for="motores-1">
                <input type="radio" name="motores" id="motores-1" value="5">
                DuckDuckGo
                </label>
            </div>


          <div class="radio">
            <label for="motores-1">
            <input type="radio" name="motores" id="motores-1" value="6">
             Ask
            </label>
        </div>
        <div class="radio">
            <label for="motores-1">
            <input type="radio" name="motores" id="motores-1" value="7">
             WolframAlpha
            </label>
        </div>
        <div class="radio">
            <label for="motores-1">
            <input type="radio" name="motores" id="motores-1" value="8">
            Ecosia
            </label>
        </div>
        <div class="radio">
            <label for="motores-1">
            <input type="radio" name="motores" id="motores-1" value="9">
             Qwant
            </label>
        </div>
        <div class="radio">
            <label for="motores-1">
            <input type="radio" name="motores" id="motores-1" value="10">
             Baidu
            </label>
        </div>
        <div class="radio">
            <label for="motores-1">
            <input type="radio" name="motores" id="motores-1" value="11">
            Pinterest
            </label>
        </div>
      </div>
        </div>
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for=""></label>
                    <div style="text-align:center;" class="col-md-4">
                      <button id="" name="miboton" value="boton" class="btn btn-warning">Buscar</button>
                    </div>
                  </div>

        </fieldset>
        </form>

</body>
</html>
