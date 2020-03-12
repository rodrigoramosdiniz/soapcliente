<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Calculadora</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
   
   
    
              <form method="POST" enctype="multipart/form-data">
                  
                      <label>N1</label>
                      <input name="n1">
                  
                  
                      <label>N2</label>
                      <input name="n2" >
                 
                  <button  id="botaoSoma">+</button>
                  <button  id="botaoSub">-</button>
                  <button  id="botaoDiv">/</button>
                  <button  id="botaoMult">*</button>
                  <?php if(isset($_SESSION["result"])): ?>
                  <p class="text-primary" style="font-size: 3em;"><?= $_SESSION["result"]; ?></p>
                    <?php unset($_SESSION["result"]); ?>
                  <?php else: ?>
                  <p class="text-primary" style="font-size: 3em;">0.0</p>
                  <?php endif; ?>
              </form>
       
   
    <!-- Fim Home -->
    
  </body>
    <script src="js/jquery-3.4.1.min.js"></script>
   
    
    <script>
        $("#botaoSoma").click(function(){
            $("form").attr("action", "calcula.php?operacao=somar");
        });
        
        $("#botaoSub").click(function(){
            $("form").attr("action", "calcula.php?operacao=sub");
        });
        
        $("#botaoDiv").click(function(){
            $("form").attr("action", "calcula.php?operacao=div");
        });
        
        $("#botaoMult").click(function(){
            $("form").attr("action", "calcula.php?operacao=mult");
        });
    </script>
</html>