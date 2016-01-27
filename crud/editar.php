<?php

include "acao/conexao.php"; // Chama a conexao com o banco de dados
$id = $_GET["id"];
$buscar = mysql_query("SELECT * FROM tbl_conteudo WHERE id_conteudo= $id")or die(mysql_error());
if(mysql_num_rows($buscar) > 0){

include "head.php";
?>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p> <h2>Editar Contéudo</h2></p>

                <div class="col-md-12">

                    <?php
                    while($ver = mysql_fetch_array($buscar)) { ?>
                    <fieldset>
                        <legend><?php echo $ver[1]; ?></legend>
                        <div class="form-group">

                            <form name="frm-edit-one" action="acao/editar.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $ver[0]; ?>"

										   <labe>Titulo</labe><br/>
                                        <input name="titulo" type="text" class="form-control" width="400" value="<?php echo $ver[1]; ?>">
                                    <br/>
                                            <labe>Texto</labe><br/>
                                            <textarea name="conteudo" class="form-control widgEditor nothing  nothing" rows="6"><?php echo $ver[2]; ?></textarea><br/>
                                            <input name="btnEdite-one" class="form-control" type="submit">

                                </form>

                            </div>
                        </fieldset>
                        <?php
                    }
                    }
                    ?>
                </div>
                   
                </div>
            </div>
        </div>


    </div>

</body>
</html>