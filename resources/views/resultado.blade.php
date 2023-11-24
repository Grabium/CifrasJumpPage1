<!DOCTYPE html>
<html> 
    <title>Cifras Jump</title>
  </head>
  <body>
    <h1>Resultado</h1>
    @foreach($response['msg']['texto_convertido'] as $linha)
      <br />{{$linha}}
    @endforeach
  </body>
</html>