<?php 
 echo nl2br("
 <hr class='featurette-divider'>
<center>  <h3><a class='nav-link' href='/categorias/$categoria/$id'> Receita de $nomeReceita</a></h3> </center>
<center>  <h2>Autor da receita $nomeUser</h2> </center>

<center>
 ●Rende até $porcaoReceita porcões(ão)<font class='texto-right'> </font>
      ●Ingredientes:
     $ingredienteReceita
      ●Tempo de Preparo: $tempoPreparo minutos
     Essa receita foi favoritada $curtidas vezes
     <a class='nav-link' href='/categorias/$categoria/$id'>continue lendo...</a><br>
     
     </center>
     
     ");
     