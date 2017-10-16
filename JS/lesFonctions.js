function  getLesRayons(numSecteur){
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_Accueil/getLesRayons",
           data:"numSecteur="+numSecteur,
             success:function(data)
            {
                $('#divRayons').empty();
                $('#divRayons').append(data);
            },
            error:function()
            {
                alert('vous avez fait une  erreur');
            }
        }
        );
}
function  getLesEmployes(numE){
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_Accueil/getLesEmployes",
           data:"numE="+numE,
             success:function(data)
            {
                $('#divEmployes').empty();
                $('#divEmployes').append(data);
            },
            error:function()
            {
                alert('vous avez fait une  erreur');
            }
        }
        );
}
function getNombreHeures(){
    $.ajax(
        {  
            type:"get",
            url:"index.php/Ctrl_Accueil/getNombresHeures",
           
             success:function(data)
            {
                $('#divHeures').empty();
                $('#divHeures').append(data);
            },
            error:function()
            {
                alert('vous avez fait une  erreur');
            }
        }
        );
}