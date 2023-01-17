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
            <span>Notas</span>
        </header>
       
        <header class="btn_cadastro">
            <form method="get" action="notas.php">
                <input name="nome" placeholder="Nome Aluno...">
                <button type="submit" class="localizar_aluno">Buscar Aluno</button>    
            </form>
        </header>
        <header class="resultados">
            <div class="resultados_cadastro_aluno">
                <style type="text/css">.btnotas{background-color: blue; padding-left: 3%; padding-right: 3%; color: #fff; }</style>
                <table>
                    <th>ID</th>
                    <th>Nome Aluno</th>
                    <th>Curso(s)</th>
                    <th>Ação</th>
                    <?php
                        $nome = $_GET['nome'];
                        $cx = mysqli_connect("localhost", "root", "");
                        $db = mysqli_select_db($cx, "magnifinance");
                        $sql = mysqli_query($cx, "SELECT * FROM alunos WHERE nome='$nome' and visivel<>'1'") or die( 
                        mysqli_error($cx) //caso haja um erro na consulta 
                        );
                        while($aux = mysqli_fetch_assoc($sql)) { ?>  
                      
                    <tr>
                        <td><?php echo $aux["id"];?></td>
                        <td><?php echo $aux["nome"];?></td>
                        <td><?php echo $aux["curso"];?></td>
                        <td><a href="notas/notasalunos.php?id=<?php echo $aux["id"];?>&curso=<?php echo $aux["curso"];?>" class="btnotas">Notas</a></td>
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
                <form id="dados_cad_aluno" method="POST" action="enviardados/cad_aluno.php">
                    <label>Nome</label><input type="text" name="nome">
                    <label>CPF</label><input type="text" name="cpf">
                    <label>RG</label><input type="text" name="rg">
                    <label>Endereço</label><input type="text" name="endereco">
                    <label>Cidade</label><input type="text" name="cidade">
                    <label>Estado</label><input type="text" name="estado">
                    <label>Curso</label>
                    <select name="curso">
                        <option>Selecionar...</option>
                        <option value="curso01">Curso 01</option>
                        <option value="curso02">Curso 02</option>
                        <option value="curso03">Curso 03</option>
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