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
         <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="JS/lesFonctions.js"></script>
         <script type="text/javascript">
              $
           (
               function()
                {
                    
                    
                   // Au chargement de la page
                        getNombresHeures();
                        
                  }
            );
             
             
             
             
         </script>
    </head>
    <body>
          <div id="Tableau">
    
       
    <table cellspacing="2px" cellpadding="2px;" rules="all" style="border:solid 1px black;">
        <h2> Listes des employes</h2>
        <tr> 
            
             
              <th>num Employer</th>
              <th> Nom employer</th>
           
        </tr>    
       
        <?php 
        
        foreach($lesEmployes as $employes){
            echo "<tr>";
           
          
            echo"<td>".$employes->numE."</td>";
            echo"<td>".$employes->prenomE."</td>";
           echo"<td>".$employes->date."</td>";
          echo"<td>".$employes->temps."</td>";
            
        
            
            
            echo "</tr>";
        }
        ?>
           
    </table> 
            </div>
    </body>
</html>
