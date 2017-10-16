<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       
    <div id="Tableau">
    
       
    <table cellspacing="2px" cellpadding="2px;" rules="all" style="border:solid 1px black;">
       <h2>Nombres heures au total </h2>
        <tr> 
            
             
              <th>dates</th>
              <th>heures</th>
            
           
        </tr>    
       
        <?php 
        
        foreach($lesHeures as $heures){
            echo "<tr>";
           
     
           echo"<td>".$heures->date."</td>";
           echo"<td>".$heures->temps."</td>";
            
        
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
            </div>
    </body>
</html>
