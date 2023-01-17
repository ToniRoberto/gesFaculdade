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
            <span>Professores</span>
        </header>
       
        <header class="btn_cadastro">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modal-mensagem">Cadastrar Disciplinas</button>
        </header>
        <header class="resultados">
            <div class="resultados_cadastro_aluno">
                <table>
                    <th>ID</th>
                    <th>Nome Disciplina</th>
                    <th>Horas</th>
                    <th>Ação</th>
                    <?php
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM disciplinas WHERE visivel<>'1'") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                      
                    <tr>
                        <td><?php echo $aux["id"];?></td>
                        <td><?php echo $aux["disciplina"];?></td>
                        <td><?php echo $aux["horas"];?></td>
                        <td><a href="editar/editardisciplinas.php?id=<?php echo $aux["id"];?>" class="btneditar">Editar</a> | <a href="excluir/excluirdisciplinas.php?id=<?php echo $aux["id"];?>" class="btnexcluir">Excluir</a></td>
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
                <h4 class="modal-title">Dados da Disciplina</h4>
            </div>
            <div class="modal-body">
                <form id="dados_cad_aluno" method="POST" action="enviardados/cad_professores.php">
                    <label>Disciplina</label><input type="text" name="disciplina">
                    <label>Carga Horária</label><input type="text" name="horas">
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