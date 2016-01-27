<?php
    include "head.php";
    include "acao/conexao.php";
	//Comando MySQL
    $buscarconteudo = mysql_query("SELECT * FROM tbl_conteudo")or die(mysql_error());
    ?>
<body>
<div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <p>
                <i class="fa fa-arrow-circle-left">
                   
                </i>
            </p>
        </div>
        </div>
   <div class="col-md-12 col-sm-12 col-xs-12">
       <div class="row">
           <div class="col-md-6 col-sm-8 col-xs-12">
               <table class="table table-condensed">
                   <tr>
                       <th>Conteúdo</th>
					   <th><th>
					   <th><a href="adicionar.php"><i class='fa fa-plus'> Adicionar Novo</i></a></th>
                   </tr>
				      <?php if(mysql_num_rows($buscarconteudo) > 0){
                               while($portugues = mysql_fetch_array($buscarconteudo)) {?>
				   <tr>
				
					   <td>
                           
                                   <?php echo "$portugues[1]";?><br/>
                               
                       </td>
					   <td>
						<?php echo "<a href='editar.php?id=$portugues[0]'><span class='fa fa-edit' aria-hidden='true'></span></a>";?><br/>
					   </td>
					   <td>
						<?php echo "<a href='acao/excluir.php?id=$portugues[0]'><span class='fa fa-remove' aria-hidden='true'></span></a>";?><br/>
					   </td>
					
					  
				   </tr>
				      <?php } }?>
               </table>
           </div>
       </div>
   </div>
</div>

</body>
</html>
