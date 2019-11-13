$operators = ['+','-','*','/'];
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
     }
