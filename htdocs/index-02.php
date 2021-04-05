<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
<?php 

    if (empty($_POST)) {
    	echo "formulário vasio";
    } else{
      
      $texto = $_POST['dados'];
      $linhas = explode(",", $texto);
     
    } 
    

?>

<form action="index-02.php" method="post" >
    
    <div>
        <label for="msg">Mensagem:</label><br/>
        <textarea id="msg" name="dados" rows="10" cols="80">
Disciplina, Programação WEB,Pesos,0.2,0.3,0,0, Matricula,Nome,T11,T12,T13,T1A,Pv1, 000000001,FULANO DA SILVA,9.0,6.0,NE ,ND,6.0,
 000000002,BELTRANO CARANGO,3.0,6.0,8.0,ND,3.0, 000000003,ANTO GERALDO,6.0,7.0,8.0,ND,3.0
</textarea>
    </div>
    <div class="button">
        <button type="submit">Enviar</button>
    </div>
</form>
<?php  
   //$x % 2 == 0 pares $x % 2 == 1 impar
  foreach ($linhas as $x => $value) {//PRIMEIRA LINHA COM Disciplina, Programação WEB 
     
      
  } echo $linhas[0].", &nbsp;&nbsp; ". $linhas[1].", &nbsp;&nbsp;<br/> ";

  foreach ($linhas as $x => $value) {
    if ($x >= 2 & $x <= 6) {//SEGUNDA LINHA COM  Pesos , 0.2,  0.3,  0,0  
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$linhas[$x]." ";
    }
  }

  foreach ($linhas as $x => $value) {
       if ($x >= 7 & $x <= 13) {//TERCEIRA LINHA COM CABEÇALHOS  Matricula , Nome, T11,  T12,  T13,  T1A,  Pv1
          echo $linhas[$x]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
       }
  }
     $cont = 0;  
   foreach ($linhas as $x => $value) {//INICIO LAÇO SÓ COM DADOS DOS ALUNOS
     if ($x >= 14){//PARA COMEÇAR A IMPRIMIR A PARTIR DO PRIMEIRO ALUNO
          echo $linhas[$x].$x."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        $cont++;//conta a quantidade de alunos, se dividir por 7
        if ($cont % 7 == 0) {
          echo "<br/>";
        }
        
      }
       
      
   }     
    echo "<br/><br/>TOTAL DE ".($cont/7)." ALUNOS";
//echo"oooo".(14% 7);
 ?>


  </body>
</html>