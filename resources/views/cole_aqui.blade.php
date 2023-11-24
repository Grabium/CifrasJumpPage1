@extends('top')
@section('content')
<div id="div_page">
<div id="div_coleabaixo"><h2>Cole o texto abaixo</h2></div>


<?php 
  $semiTons = 0;
?>

  <form action="{{ route('enviaTexto') }}" method='POST'>
  @csrf
    <hr />
    <div id="div_alterar"><div id="div_filha_alterar">
      <input name="semiTons" id="semiTons" value={{ $semiTons }} />
      <label id="lab_semitons">0</label>
      <button id="but_alterar"class="btn btn-danger" '>Alterar</button>
    </div></div>
    <hr />
    <button id="diminuir" class="btn btn-danger" onclick="intervalo('-')">-</button>
    <button id="aumentar" class="btn btn-danger" onclick='intervalo("+")'>+</button>
    <!--button class="btn btn-danger" >Alterar</button-->
    <br/><br/>
    <textarea name="aSeparar" rows="40" cols="120" class="container-fluid -body-color"></textarea>
  </form>
</div><!-- page -->


<script type="text/javascript">
function intervalo(operacao){
  event.preventDefault();
  var st = document.getElementById("semiTons").value;
  st = parseInt(st);
  if((st>-11)&&(operacao == "-")){
    st = st - 1;
  }else if((st<11)&&(operacao == "+")){
    st = st + 1;
  }
  document.getElementById("semiTons").value = st;
  document.getElementById("lab_semitons").innerHTML = document.getElementById("semiTons").value;
}
</script>

@endsection('content')