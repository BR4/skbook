<h1  style="text-align:center;"><?php print $title="LIBROS"; ?></h1>
<div class="tableLibros">

    
<table border='0' id='tblLibro' class='table'>
    <thead>
        <tr id="titles">
            <th style="text-align:center;">Informaci&oacute;n del libro</th>
            <th style="text-align:center;">Sinopsis </th>
            <th style="text-align:center;">Leer</th>
        </tr>
    </thead>
    <tbody id="contenidoTitle"> 
        <?php
		$x=0;
        foreach ($view->book as $book):  
			if($x+1%2==0){
				echo "<tr id='fila'".$x." class='even gradeA'>";
			}else{
				echo "<tr class='odd gradeA'>";
			}
			$x=$x+1;
         ?>
                <td>
                    
                    <div class="col-md-6 mb" style="margin-left:25%;">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5><i class="fa fa-book"></i><?php echo $book['nombreLibro'];?></h5>
								</div>
								<p>
                                    <?php $src="view/img/jpg/" . $book['isbn'] . ".jpg"; ?>
                                    <img src='<?php echo $src ?>' style="cursor:pointer;" width="25%" height="2%" title="Leer libro" />
                                </p>
								<p><b>Gabriel García Marquez</b></p>
								<div class="row">
									<div class="col-md-6">
										<p class="small mt">Año de publicación</p>
										<p>2012</p>
									</div>
									<div class="col-md-6">
										<p class="small mt">N&uacute;mero de p&aacute;ginas</p>
										<p><?php echo $book['numeroPaginas'];?> p&aacute;nas</p>
                                        
									</div>   
                                    
								</div>
							</div>
						</div>

                    
                    
                </td>
                <td style="text-align:center;">
					<p><?php echo $book['descripcion'];?> </p>
                </td>
                <td style="text-align:center;">
                    <div class="row" style="margin-top:55%;">
					<a class="delete" href="javascript:void(0);" data-id="<?php echo $book['idLibro'];?>">
					   <img src="view/img/png/read.png" style="cursor:pointer;" width="25%" height="25%" title="Leer libro" /></a>
                    </div>
                </td>
            
        <?php
         endforeach; 
         ?>
    </tbody>
</table>
</div>




