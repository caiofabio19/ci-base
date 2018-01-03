<!doctype html>
<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
       
        <title>Vale Silicio 2018</title>
         <link rel="stylesheet" href="<?php echo base_url('index.php/assets/css/bootstrap.min.css');?>">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style> 

        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap-theme.min.css');?>">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
      
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 
    </nav>
    <div class="jumbotron">
      <div class="container">
        <h1>Vale do Silicio 2018</h1>
        <p>24/03/218 a 30/03/2018</p>
      </div>
    </div>

    <div class="container">
    

      <div class="row">
          
          <form name="vale" method="POST" action="cadastrando">                                
                <div class="form-group">
                    <label for="exampleInputNome">Nome</label>
                    <input type="text" name="nome"  class="form-control pula" id="exampleInputNome" placeholder="Nome Completo" required>                 
                </div>
              
                <div class="form-group">
                    <label for="exampleInputNome">Celular</label>
                    <input type="text" name="cel" class="form-control pula" id="exampleInputTel" placeholder="Numero com DDD" required>           
                </div>
              
                <div class="form-group">
                    <label for="exampleInputNome">Telefone Fixo</label>
                    <input type="text" name="fixo" class="form-control pula" id="exampleInputTel" placeholder="Numero com DDD">           
                </div>                            
              
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>CEP</label>
                            <input type="text" name="cep" class="form-control pula" id="cep" maxlength="12" name="cep" placeholder="Informe o CEP" required>
                        </div>
                    </div>
                    <div class="col-md-8">
                       <div class="form-group">
                            <label>Rua, Logradouro, Travessa <span>*</span> <span id='mensagem'></span></label>
                            <input type="text" name="rua" class="form-control pula" id="rua" name="rua" placeholder="Informe a Rua, Logradouro, Travessa" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                       <div class="form-group">
                            <label>Número</label>
                            <input type="text" name="numero" class="form-control pula" id="numero" name="numero" placeholder="Informe o Número" required>
                        </div>
                    </div>
                </div>  

            <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Bairro</label>
                            <input type="text" name="bairro" class="form-control pula" id="bairro" name="bairro" placeholder="Informe o Bairro" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                           <label>Cidade</label>
                            <input type="text" name="cidade" class="form-control pula" id="cidade" name="cidade" placeholder="Informe a Cidade" required>
                        </div>
                    </div>
                    <div class="col-md-1">
                       <div class="form-group">
                            <label>UF</label>
                            <input type="text" name="uf" class="form-control pula" id="uf" maxlength="2" name="uf" placeholder="UF" required>
                        </div>
                    </div>
                    <div class="col-md-5">
                       <div class="form-group">
                            <label>Complemento</label>
                            <input type="text" name="complemento" class="form-control pula" id="complemento" name="complemento" placeholder="Informe o Complemento do Endereço"> 
                        </div>
                    </div>
            </div>
              
              <label>Necessidades Especiais?
              <label class="form-check-inline">
                <input class="form-check-input" type="radio" name="necesp" id="inlineRadio1" value="option1" required> Sim
              </label>
              <label class="form-check-inline">
                <input class="form-check-input" type="radio" name="necesp" id="inlineRadio2" value="option2" required> Não
              </label>
              <div class="form-group">
                <label for="exampleTextarea">Quais ?</label>
                <textarea class="form-control pula" id="exampleTextarea" name='quais' rows="3"></textarea>
              </div>
              <div class="form-group">
                  
              <label>Formas de Pagamento:</label><br>
                <label class="form-check-inline">
                  <input class="form-check-input" type="radio" name="formpay" id="inlineRadio1" value="option1" required> A vista $3.000,00 = R$ 9.900,00
                </label>
                <label class="form-check-inline">
                  <input class="form-check-input" type="radio" name="formpay" id="inlineRadio2" value="option2" required> Parcelado em...
                </label>
                  
              <div class="form-group">
                <label for="exampleSelect1">Quantidade de Parcelas</label>
                <select class="form-control pula" name="qtdParc" id="exampleSelect1">
                  <?php 
                  
                  $valor = 9900.00;
                  $result = array();

                  for ($i = 1; $i < 13; $i++){
                      $resultado = $valor / $i;
                      $resultado = number_format($resultado, 2,',','.');
                      $result[$i] = $resultado;
                  }

                  for($i = 1; $i < 13; $i++){
                      echo "<option>".$i." x R$".$result[$i]."</option>";
                  }
                  ?>



                </select>
              </div>
              
              <label>Possui Passaporte?
              <label class="form-check-inline">
                <input class="form-check-input" type="radio" name="pass" id="inlineRadio1" value="option1" required> Sim
              </label>
              <label class="form-check-inline">
                <input class="form-check-input" type="radio" name="pass" id="inlineRadio2" value="option2" required> Não
              </label>
                  <br>
              <label>Possui GreenCard?
              <label class="form-check-inline">
                <input class="form-check-input" type="radio" name="card" id="inlineRadio1" value="option1" required> Sim
              </label>
              <label class="form-check-inline">
                <input class="form-check-input" type="radio" name="card" id="inlineRadio2" value="option2" required> Não
              </label>       


              <input type="submit" value="Cadastrar" />         
              
          </form>
          
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2018</p>
      </footer>
    </div>  
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
  <script type="text/javascript">

  $(document).ready(function () {
 
    // Método para pular campos teclando ENTER
      $('.pula').on('keypress', function(e){
          var tecla = (e.keyCode?e.keyCode:e.which);
 
          if(tecla == 13){
              campo = $('.pula');
              indice = campo.index(this);
 
              if(campo[indice+1] != null){
                  proximo = campo[indice + 1];
                  proximo.focus();
                  e.preventDefault(e);
              }
          }
      });
 
       // Inseri máscara no CEP
      $("#cep").inputmask({
          mask: ["99999-999",],
          keepStatic: true
      });
 
       // Método para consultar o CEP
    $('#cep').on('blur', function(){
 
      if($.trim($("#cep").val()) != ""){
 
        $("#mensagem").html('(Aguarde, consultando CEP ...)');
        $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#cep").val(), function(){
 
            if(resultadoCEP["resultado"]){
            $("#rua").val(unescape(resultadoCEP["tipo_logradouro"])+" "+unescape(resultadoCEP["logradouro"]));
            $("#bairro").val(unescape(resultadoCEP["bairro"]));
            $("#cidade").val(unescape(resultadoCEP["cidade"]));
            $("#uf").val(unescape(resultadoCEP["uf"]));
          }
 
          $("#mensagem").html('');
        });       
      }     
    });
  }); 
  </script>
        
        
    </body>
</html>
