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
        <script type="text/javascript" src="JQuery/jquery-3.1.1.min.js"></script>
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


                 $(".opt1").change(
                         function()
                 {
                     
                        getLesEmployes($(this).val());
                 });

                   }
            ),
      $
           (
               function()
                {

                  $('#lstEmployer').change(function(){
                      
                    $('#libelle').val($('#lstEmployer').val());
                    });
                    
                }
             );
         </script>
    </head>

    <body>
        <h2>Listes des secteurs</h2>
        
        <select id="lstSecteurs">
        <?php 
        foreach ($lesSecteurs as $secteur) {
      echo "<option id='opt' value='".$secteur->numS."'>".$secteur->nomS."</option>";
        }


        ?>
        </select>

        <h2>Listes des rayons  </h2>
        <div id="divRayons"></div>
        <?php

        echo "<select id='lstEmployer'>";


                    foreach ($lesEmployer as $employer)
                    {


                        echo "<option id='opt1' value='".$employer->numE."'>".$employer->prenomE."</option>";



                    }


       echo "</select>";
   ?>
        <form method="post">
        <tr>
            <td>

            <td>
                <div class="form-group">
                    <label for="Heur">Heur</label>
                    <input type="textbox" id="heur" name="heur">
                </div>
            </td>     
        </tr>

        <tr>    
            <td>
               <input type="submit" name="insert" value="Insert" />
            </td>
        </tr>
        <?php
        if($this->input->post('insert') != ''){

    $heur = $this->input->post('heur');


    $data = array(
        'temps' => $heur,
    );


    $this->db->insert('travailler',$data);
     header("refresh: 0;");
}
?>
        </form>
    </body>
</html>