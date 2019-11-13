<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>знакомство с php</title>
</head>
<body>
  <table border='1' rules='cols'>
    <tr>
     <?
    /* //таблица умножения//
     for($i=1; $i<10; $i++){ //внешний цикл-строка tr//
      echo '<tr>';
      for ($j=2; $j<=10; $j++) //внутренний цикл-колонки td//
        echo '<td>'.$i. '*'.$j.'='.$i*$j.'</td>';
      echo'</tr>';  
       
     }
     
     */ 
     /*//случайные числа примеры сложения//
    
     for($i=1; $i<35; $i++){
      echo '<tr>';
      for ($j=1; $j<=5; $j++){
       $num1= rand ( 1,20); $num2 = rand(1,20);
       echo "<td algin='right'>$num1+$num2=_____</td>";
      }
      echo'</tr>';
     }*/
     
     /*$operators = ['+','-','*','/'];
     for($i=1; $i<35; $i++){
      echo '<tr>';
      for ($j=1; $j<=5; $j++){
       $operator= $operators [rand ( 0,3)];
       $num1= rand ( 1,20); $num2 = rand(1,20);
       echo "<td algin='right'>$num1$operator$num2=_____</td>";
      }
      echo'</tr>';
     }*/
     
     /*таблица примеров:сложениеб умножениеБ делениеБ вычитание по 35 шт на странице.
     условие: при делении число без остатка,при умножении меньше 100, при вычитании без отрицательных числах*/ 
     /*$operators = ['+','-','*','/'];
     for($i=1; $i<35; $i++){
      echo '<tr>';
      for ($j=1; $j<=5; $j++){
       $operator= $operators [rand ( 0,3)];
       $num1= rand ( 1,20); $num2 = rand(1,20);
       if ($operator=='/' and $num1%$num2!=0){
         --$j;
         continue;
       }
         else if($operator=='*' and $num1*$num2>100){
         --$j;
         continue;
        }
        else if($operator=='-' and $num1-$num2>0){
         --$j;
        
         continue;
        }
       echo "<td algin='right'>$num1$operator$num2=_____</td>";
      }
      echo'</tr>';
     }*/
     ?>
     </tr>
    </table>
</body>
</html>
