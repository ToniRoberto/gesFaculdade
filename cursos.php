<html>
  <head>
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    $(function(){
        $("#btn-mensagem").click(function(){
        $("#modal-mensagem").modal();
        });
    });
    </script>

  </head>


  <body>
	<div id="barra_topo_aluno">
	<img src="img/logo.svg">
	</div>
    <map>
     <nav id="menu">
        <ul>
            <li>
                <a href="index.php">
                    <i class="fa fa-home fa-2x"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="alunos.php">
                    <i class="fa fa-users fa-2x"></i>
                    <span class="nav-text">Alunos</span>
                </a>
            </li>
            <li>
                <a href="professores.php">
                    <i class="fa fa-user fa-2x"></i>
                    <span class="nav-text">Professores</span>
                </a>
            </li>
            <li>
                <a href="cursos.php">
                    <i class="fa fa-book fa-2x"></i>
                    <span class="nav-text">Cursos</span>
                </a>
            </li>
            <li>
                <a href="disciplinas.php">
                    <i class="fa fa-file fa-2x"></i>
                    <span class="nav-text">Disciplinas</span>
                </a>
            </li>
            <li>
                <a href="notas.php">
                    <i class="fa fa-tag fa-2x"></i>
                    <span class="nav-text">Notas</span>
                </a>
            </li>
        </ul>
    </nav>

    <div id="titulo">
         <header class="desc_titulo">
            <span>Cursos</span>
        </header>
       
        <header class="btn_cadastro">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-mensagem">Cadastrar Cursos</button>
        </header>
        <header class="resultados">
            <div class="resultados_cadastro_aluno">
                <table>
                    <th>ID</th>
                    <th>Nome Curso</th>
                    <th>Disc 01</th>
                    <th>Disc 02</th>
                    <th>Disc 03</th>
                    <th>Disc 04</th>
                    <th>Disc 05</th>
                    <th>Disc 06</th>
                    <th>Disc 07</th>
                    <th>Disc 08</th>
                    <th>Disc 09</th>
                    <th>Disc 10</th>                    
                    <th>Ação</th>
                    <?php
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM curso WHERE visivel<>'1'") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                      
                    <tr>
                        <td><?php echo $aux["id"];?></td>
                        <td><?php echo $aux["nomecurso"];?></td>
                        <td><?php echo $aux["disciplina1"];?></td>
                        <td><?php echo $aux["disciplina2"];?></td>
                        <td><?php echo $aux["disciplina3"];?></td>
                        <td><?php echo $aux["disciplina4"];?></td>
                        <td><?php echo $aux["disciplina5"];?></td>
                        <td><?php echo $aux["disciplina6"];?></td>
                        <td><?php echo $aux["disciplina7"];?></td>
                        <td><?php echo $aux["disciplina8"];?></td>
                        <td><?php echo $aux["disciplina9"];?></td>
                        <td><?php echo $aux["disciplina10"];?></td>
                        <td><a href="editar/editarcurso.php?id=<?php echo $aux["id"];?>" class="btneditar">Editar</a> | <a href="excluir/excluircurso.php?id=<?php echo $aux["id"];?>" class="btnexcluir">Excluir</a></td>
                    </tr>
                     <?php } ?> 
                </table>
            </div>
        </header>
       

<div class="modal fade" id="modal-mensagem">
   <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                <h4 class="modal-title">Dados do aluno</h4>
            </div>
            <div class="modal-body">
                <form id="dados_cad_aluno" method="POST" action="enviardados/cad_curso.php">
                    <label>Nome Curso</label><input type="text" name="nomecurso">
                    <label>Disciplina 01</label>
                    <select name="disciplina1">
                        <option>Selecionar...</option>
                        <?php
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM disciplinas") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                        <option value="<?php echo $aux["disciplina"];?>"><?php echo $aux["disciplina"];?></option>
                        <?php } ?>
                    </select>
                    <label>Disciplina 02</label>
                    <select name="disciplina2">
                        <option>Selecionar...</option>
                        <?php
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM disciplinas") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                        <option value="<?php echo $aux["disciplina"];?>"><?php echo $aux["disciplina"];?></option>
                        <?php } ?>
                    </select>
                    <label>Disciplina 03</label>
                    <select name="disciplina3">
                        <option>Selecionar...</option>
                        <?php
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM disciplinas") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                        <option value="<?php echo $aux["disciplina"];?>"><?php echo $aux["disciplina"];?></option>
                        <?php } ?>
                    </select>
                    <label>Disciplina 04</label>
                    <select name="disciplina4">
                        <option>Selecionar...</option>
                        <?php
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM disciplinas") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                        <option value="<?php echo $aux["disciplina"];?>"><?php echo $aux["disciplina"];?></option>
                        <?php } ?>
                    </select>
                    <label>Disciplina 05</label>
                    <select name="disciplina5">
                        <option>Selecionar...</option>
                        <?php
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM disciplinas") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                        <option value="<?php echo $aux["disciplina"];?>"><?php echo $aux["disciplina"];?></option>
                        <?php } ?>
                    </select>
                    <label>Disciplina 06</label>
                    <select name="disciplina6">
                        <option>Selecionar...</option>
                        <?php
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM disciplinas") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                        <option value="<?php echo $aux["disciplina"];?>"><?php echo $aux["disciplina"];?></option>
                        <?php } ?>
                    </select>
                    <label>Disciplina 07</label>
                    <select name="disciplina7">
                        <option>Selecionar...</option>
                        <?php
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM disciplinas") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                        <option value="<?php echo $aux["disciplina"];?>"><?php echo $aux["disciplina"];?></option>
                        <?php } ?>
                    </select>
                    <label>Disciplina 08</label>
                    <select name="disciplina8">
                        <option>Selecionar...</option>
                        <?php
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM disciplinas") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                        <option value="<?php echo $aux["disciplina"];?>"><?php echo $aux["disciplina"];?></option>
                        <?php } ?>
                    </select>
                    <label>Disciplina 09</label>
                    <select name="disciplina9">
                        <option>Selecionar...</option>
                        <?php
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM disciplinas") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                        <option value="<?php echo $aux["disciplina"];?>"><?php echo $aux["disciplina"];?></option>
                        <?php } ?>
                    </select>
                    <label>Disciplina 10</label>
                    <select name="disciplina10">
                        <option>Selecionar...</option>
                        <?php
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM disciplinas") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                        <option value="<?php echo $aux["disciplina"];?>"><?php echo $aux["disciplina"];?></option>
                        <?php } ?>
                    </select>

                <button type="submit" class="">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>




    </div>
<map>
  </body>
    </html>