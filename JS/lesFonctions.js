//
//function afficherLesSecteurs(idSecteur){
//    $.ajax(
//        {  
//            type:"get",
//            url:"index.php/Ctrl_Accueil/afficherSecteur",
//            data:"idSecteur="+idSecteur,
//             success:function(data)
//            {
//                $('#divSecteur').empty();
//                $('#divSecteur').append(data);
//            },
//            error:function()
//            {
//                alert('erreur');
//            }
//        }
//        );
//}

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
function  getLesEmployes(numEmployer){
    $.ajax(
        {
            type:"get",
            url:"index.php/Ctrl_Accueil/getLesEmployes",
            data:"numEmployer="+numEmployer,
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

