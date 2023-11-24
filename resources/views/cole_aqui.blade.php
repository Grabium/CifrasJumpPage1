@extends('top')
@section('content')
<div id="div_page">



<?php 
  $semiTons = 0;
?>

  <form action="{{ route('enviaTexto') }}" method='POST'>
  @csrf


    <div id="div_alterar"><div id="div_filha_alterar">
      <input name="semiTons" id="semiTons" value={{ $semiTons }} />
      <label id="lab_semitons">0</label>
      <button id="but_alterar" class="btn btn-danger" >Alterar</button>
    </div></div>

    <div class="div_coleabaixo">Ajuste a quantidade em SEMI-TONS:</div>

    <div id="div_operacoes"><div id="div_filha_operacoes">
      <button id="diminuir" class="btn btn-danger" onclick="intervalo('-')">-</button>
      <button id="aumentar" class="btn btn-danger" onclick='intervalo("+")'>+</button>
    </div></div>

    <div class="div_coleabaixo">Insira o texto no campo abaixo:</div>
    

    <div id="div_text">
      <textarea id="aSeparar" name="aSeparar" rows="10" cols="120" class="container-fluid -body-color"></textarea>
    </div>
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