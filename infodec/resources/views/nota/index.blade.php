<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infodec</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      body{
          margin:10px;
          padding:10px;
          font-family:sans-serif;
      }
      .color-container{
          border-radius:4px;
          background: #f5f0f5;
          padding-bottom:50px;

      }

      td, th {border: 1px solid gray; padding: 0; margin: 0; text-align: center}

      .tableNota {width: 80%}

      .eliminar {
        font-size: 0.8em;
        margin: 5px 2px; 
        padding: 3px 8px; 
        text-decoration: bold;
        -webkit-box-shadow: 3px 3px 3px 0px rgba(212,208,212,1);
        -moz-box-shadow: 3px 3px 3px 0px rgba(212,208,212,1);
        box-shadow: 3px 3px 3px 0px rgba(212,208,212,1); 
      }

      h3 {padding: 8px 0 8px 0}

      .txtlink {text-align: right; width: 90%; margin-bottom: 15px}

      .txtlink button a {text-decoration-style: none;  color: #ffffff; padding: 4px 8px}

      .btnGuardar {margin-top: 15px}

  </style>

</head>

<body>

  <div class="container color-container">
    <h3>Prueba INFODEC Laravel</h3>
    <div class="txtlink">
        <button type="button" class="btn btn-success">
          <a href="{{ url('/nota/create')}}"> Registrar </a>
        </button>
    </div>
    <table class=" container tableNota">
      <thead>
        <tr>
          <th scope="col">Nombre completo</th>
          <th scope="col">Parcial 1</th>
          <th scope="col">Parcial 2</th>
          <th scope="col">Parcial 3</th>
          <th scope="col">Nota Final</th>
          <th scope="col">Opciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($notas as $nota)
          <tr>
            <td>{{ $nota-> nombre}}</td>
            <td>{{ $nota-> parcial1}}</td>
            <td>{{ $nota-> parcial2}}</td>
            <td>{{ $nota-> parcial3}}</td>
            <td>{{ $nota-> final}}</td>
            <td>
              <form action="{{ url('/nota/'.$nota->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" class= "eliminar" onclick="return confirm('Desea eliminar este registro')" value="Eliminar">
                
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
  </table>
  </div>

</body>