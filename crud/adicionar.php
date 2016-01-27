<?php
include "acao/conexao.php"; 
include "head.php";
?>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p> <h2>Adicionar</h2></p>

                <div class="col-md-12">

                    <fieldset>
                        <legend>Conteúdo</legend>
                        <div class="form-group">
					
                            <form name="frm-edit-one" action="acao/adicionar.php" method="post">
									<input name="id" type="hidden" value="<?php echo $id;?>"/>
										   <labe>Titulo</labe><br/>
                                        <input name="titulo" type="text" class="form-control" width="400">
                                    <br/>
                                            <labe>Descrição</labe><br/>
                                            <textarea name="conteudo" class="form-control  widgEditor nothing" rows="6"></textarea><br/>
                                            <input name="btnEdite-one" class="form-control" type="submit">

                                </form>

                            </div>
                        </fieldset>
                       
                </div>
                
                   
                </div>
            </div>
        </div>


    </div>

</body>
</html>