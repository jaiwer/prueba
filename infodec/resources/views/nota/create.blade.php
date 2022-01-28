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

      .row {width: 540px }

      #nombre { width: 80%; display: inline-block; margin: 10px 8px;}

      #final, #parcial1, #parcial2, #parcial3{ width: 30%; display: inline-block; margin: 10px 8px;}

      .btnGuardar {margin-top: 15px}

      .text-right {text-align: right; padding-right: 30px }

  </style>

</head>

<body>
    <div class="container">
        <div class="row color-container">
            @include('nota.form')
            <div class="text-right">
                <a href="{{ url('/nota')}}"> Regresar </a>
            </div>
        </div>
    </div>
</body>
