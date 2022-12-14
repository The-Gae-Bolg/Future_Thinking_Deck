<?php
      //Sirve para ver errores
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  //
  include('config/setup.php');
  include('config/data.php');

  $deckId = $_COOKIE["deck_id"];
  $slabId = $_COOKIE["slab_id"];
  //Obtener los datos generales que se ocupan en el slab
  //según el id del slab
  getAllSlabsData($slabId);
  $slabProgress = $_SESSION["slab_progress"];
  $slabNum = $_SESSION["slab_num"];
  $progress = $_SESSION["progress"];
  $act2 = $_SESSION["act_2"];

  if(isset($_POST["submit"])){
    //echo "<br>Se le dio clic a Continuar";
    //function addProgress($table, $column, $tableId, $inputId, $currentProgress, $value){
    if($act2 == 0){
      $progress = addProgress("metrics", "progress", "deck_id", $deckId, $progress, 3);
      $_SESSION["progress"] = $progress;
      //echo "<br>El nuevo progreso es: ".$progress;
      $slabProgress = addProgress("slab", "slab_progress", "id", $slabId, $slabProgress, 33);
      $_SESSION["slab_progress"] = $slabProgress;
      $act2 = finishAct(2, $slabId);
      $_SESSION["act_2"] = $act2;
      header("Location: autoev.php");
    } else {
      //echo "<br> La act ya fue terminada";
      header("Location: autoev.php");
    }
    
  }

//Trackers
$slabTrackers = getTrackersSlab($slabId);
$ts_4 = $slabTrackers["ts_4"];
$ts_5 = $slabTrackers["ts_5"];
$ts_6 = $slabTrackers["ts_6"];

//echo "<br>El valor inicial de ts_4 es: ".$slabTrackers["ts_4"];
$name = $slabId."_ts_4";
if(isset($_COOKIE[$name])){
  if($slabTrackers["ts_4"]==0){
    setSlabTracker("ts_4", $slabId, $_COOKIE[$name]);
    //Borra la cookie
    unset($_COOKIE[$name]);
    setcookie($name, "", time() - 3600);
  }
}
$name = $slabId."_ts_5";
if(isset($_COOKIE[$name])){
  if($slabTrackers["ts_5"]==0){
    setSlabTracker("ts_5", $slabId, $_COOKIE[$name]);
    //Borra la cookie
    unset($_COOKIE[$name]);
    setcookie($name, "", time() - 3600);
  }
}
$name = $slabId."_ts_6";
if(isset($_COOKIE[$name])){
  if($slabTrackers["ts_6"]==0){
    setSlabTracker("ts_6", $slabId, $_COOKIE[$name]);
    //Borra la cookie
    unset($_COOKIE[$name]);
    setcookie($name, "", time() - 3600);
  }
}

$case = null;


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demuestra</title>
    <!--Bootsrap-->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/actividades.css" />
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript'
      src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <title>Slab</title>
  </head>
  <body>
    <input type="hidden" id="value_ts_4" value="<?php echo $ts_4?>" name="value_ts_4">
    <input type="hidden" id="value_ts_5" value="<?php echo $ts_5?>" name="value_ts_5">
    <input type="hidden" id="value_ts_6" value="<?php echo $ts_6?>" name="value_ts_6">
    <input type="hidden" id="slabId"  value="<?= $slabId?>" name="slabId">

    <header class="pb-5">
      <div class="container w-75 menu">
        <nav>
          <a href="index.php" class="logo">
            <img src="img/logos/lxlab.png" alt="Logo" />
          </a>
        </nav>
      </div>
      <div class="container w-75">
        <!--BEGIN: Status-->
        <div class="status d-flex align-items-center justify-content-between row">
          
          <a class="w-70 regresar" href="slab.php">Regresar</a>
          
          <div class="progreso d-flex align-items-center justify-content-end w-30 row">
            <div class="col">
              <!--Barra de progreso-->
              <div class="progress mt-0">
                <div
                  class="progress-bar"
                  role="progressbar"
                  style="width: <?php echo $progress;?>%"
                  aria-valuenow="<?php echo $progress;?>"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
            </div>
            <div class="col-1 pl-0 pr">
              <p class="porcentaje m-0"><?php echo $progress;?>%</p>
            </div>
          </div>
        </div>
        <!--END: Status-->
      </div>
    </header>
    <main class="container w-75">
      <h2 class="heading">Demuestra</h2>
      <div class="instrucciones">
        <h3 class="subtiitle">Instrucciones</h3>
        <p class="mb-5">Sigue los pasos que se te piden a continuación:</p>
        
        <!--Prueba dinámica-->
        <div class="pasos">
          <?php for($i = 0; $i < count($act2_instructions[$slabNum-1]["instruction_list"]); $i++){?>
            <!--Si hay una instrucción-->
            <?php if (isset($act2_instructions[$slabNum-1]["instruction_list"][$i]["instruction"])) {?>
              
              <div class="paso">
            <!--Indicador paso--> 
            <div class="indicador-paso">
              <div class="indicador-paso-bg d-flex justify-content-center align-items-center">
              <p class="mb-0"><?php if(isset($case)) { echo $i;} else {echo ($i + 1);}?></p>
              </div>
            </div> <!--END: Indicador paso-->
            <!--Instrucción principal del paso-->
            <div class="instrucciones-paso">
              <p>
                <?php echo $act2_instructions[$slabNum-1]["instruction_list"][$i]["instruction"];?>
              </p>
            </div> <!--END: Instrucción principal del paso-->
            <!--Verificación de existencia de lista-->
            <?php if(isset($act2_instructions[$slabNum-1]["instruction_list"][$i]["list"])){?>
              <!--Lista-->
              <ul>
                <!--Ciclo para recorrer la lista de elementos-->
                <?php for($j = 0;$j<count($act2_instructions[$slabNum-1]["instruction_list"][$i]["list"]);$j++){?>
                  <li><?php echo $act2_instructions[$slabNum-1]["instruction_list"][$i]["list"][$j]["item"]?></li>
                <?php }?>
              </ul>
            <?php }?>
            <!--Verificar si hay un extra-->
            <?php if(isset($act2_instructions[$slabNum-1]["instruction_list"][$i]["instruction_extra"])){?>
              <div class="d-flex justify-content-center logo-tools align-items-center">
                <!--Enlace a la herramienta-->
                <?php echo $act2_instructions[$slabNum-1]["instruction_list"][$i]["instruction_extra"];?>
              </div>
            <?php }?>
            </div> <!--END: Paso-->
            <!--Verificación de existencia de subpasos-->
            <?php if(isset($act2_instructions[$slabNum-1]["instruction_list"][$i]["subinstruction_list"])){?>
              <!--Ciclo para recorrer las subinstrucciones-->
              <div class="container">
                  <div class="subpasos row">
                  <?php for($j = 0;$j<count($act2_instructions[$slabNum-1]["instruction_list"][$i]["subinstruction_list"]);$j++){?>
                        <div class="subpaso">
                          <h4><?php if(isset($case)) { echo ($i).".".($j+1);} else { echo ($i+1).".".($j+1);}?></h4>
                          <p><?php echo $act2_instructions[$slabNum-1]["instruction_list"][$i]["subinstruction_list"][$j]["subinstruction"]?></p>
                          <!--Verificar si hay extras en el subpaso-->
                          <?php if(isset($act2_instructions[$slabNum-1]["instruction_list"][$i]["subinstruction_list"][$j]["subinstruction_sublist"])){?>
                              <ul>
                                <!--Ciclo para recorrer los items de la sublista-->
                                <?php for($k = 0;$k<count($act2_instructions[$slabNum-1]["instruction_list"][$i]["subinstruction_list"][$j]["subinstruction_sublist"]);$k++){?>
                                  <li><?php echo $act2_instructions[$slabNum-1]["instruction_list"][$i]["subinstruction_list"][$j]["subinstruction_sublist"][$k]["item"]?></li>
                                <?php }?>  
                              </ul>
                          <?php }?>
                          <!--Verificar si hay extras en el subpaso-->
                          <?php if(isset($act2_instructions[$slabNum-1]["instruction_list"][$i]["subinstruction_list"][$j]["subinstruction_extra"])){?>
                            <div class="d-flex justify-content-center logo-tools align-items-center">
                              <?php echo $act2_instructions[$slabNum-1]["instruction_list"][$i]["subinstruction_list"][$j]["subinstruction_extra"];?>
                            </div>
                          <?php }?>
                        </div>
                      
                  <?php }?> <!--END: Cliclo subisntrucciones-->
              </div>
                </div>
            <?php }?>

            <?php } else if (isset($act2_instructions[$slabNum-1]["instruction_list"][$i]["case_title"])) {?>
              <!--Caso existe-->
              <?php $case = true?>
              <!--Si hay un caso de estudio-->
              <h5 class="mt-5 mb-3"><?php echo $act2_instructions[$slabNum-1]["instruction_list"][$i]["case_title"]?></h5>
              <!--Texto e imagen del caso-->
              <div class="row">
                <div class="col-md text-col">
                  <div class="text-block">
                  <p class="text-content"><?php echo $act2_instructions[$slabNum-1]["instruction_list"][$i]["text"]?></p>
                  </div>
                </div>
                <div class="col-md case-img">
                  <img src="<?php echo $act2_instructions[$slabNum-1]["instruction_list"][$i]["img"]?>" alt="Img case">
                </div>
              </div>
              <div class="mt-lg">
                <?php echo $act2_instructions[$slabNum-1]["instruction_list"][$i]["diagnostic"]?>
              </div>
            <?php }?> 
          <?php }?>
        </div>
        <!--END: Lista de instrucciones extra_element-->
        <?php if(isset($act2_instructions[$slabNum-1]["extra_element"])){?>
          <p><?php echo $act2_instructions[$slabNum-1]["extra_element"]["extra_intro"];?></p>
          <ol>
            <?php for($i = 0; $i< count($act2_instructions[$slabNum-1]["extra_element"]["extra_instruction_list"]);$i++) { ?>
              <li><?php echo $act2_instructions[$slabNum-1]["extra_element"]["extra_instruction_list"][$i]["extra_instruction"]?></li>
            <?php }?>
        <?php }?>
          </ol>
        <!--Finalización-->

      </div>
      <!--BTN Siguiente-->
      <div class="d-flex justify-content-center align-items-center my-4">
      <form action="demuestra.php" method="POST">
          <input value="Continuar" type="submit" name="submit" class="btn btn-primary"></input>
        </form>
      </div>
      <!--Modal Youtube/Videos-->
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span class="closing-modal-x" aria-hidden="true">&times;</span>
                </button>        

                <!-- 16:9 aspect ratio -->
                <div id="materialCont">
                    
                </div>
              </div>

            </div>
          </div>
        </div> 
      <!--Modal Youtube-->
    </main>
    <footer class="p-4 mt-3 d-flex justify-content-center align-items-center">
      Copyright 2021. Tecmilenio.
    </footer>
    <!--Scripts-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
      crossorigin="anonymous"
    ></script>
    <script type="module" src="js/demuestra.js" ></script>
    <script src="js/modalVideo.js"></script>
  </body>
</html>
