<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gestion supermarche</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="JS/lesFonctions.js"></script>
         <script type="text/javascript">
                  $
           (
               function()
                {
                    
                    
                   $("#lstSecteurs").change(function(){ 
                        
                       getLesRayons($(this).val());
                    });
                   }
            ),
      $
           (
               function()
                {
                    
                    
                $("#lstRayons").change(function(){
                        getLesEmployes($(this).val());
                    });
                        
                   
               }
            );
//      $
//           (
//               function()
//                {
//                    
//                    
//                    // Au chargement de la page
//                        getNombresHeures();
//                        
//                   }
//            );
         </script>
    </head>
    
    <body>
        <h2>Listes des secteurs</h2>
        <select id="lstSecteurs">
        <?php 
        foreach ($lesSecteurs as $secteur) {
      echo "<option id='opt1' value='".$secteur->numS."'>".$secteur->nomS."</option>";      
        }
        
        
        ?>
        </select>
        
        
        
        <div id="divRayons"> </div>
        
        <div id="divEmployes"></div>
        
        <div id="divHeures"></div>
        
    </body>
</html>
