<script rel="javascript" src="controller/js/jsLibro.js"></script>
    
<!-- Modal -->
<div id= "myModal" class="modal fade" role="dialog" data-toggle="modal">
    <div class= "modal-dialog">
            <!-- Modal content-->   
        <div class= "modal-content">
            <div class= "modal-header">
                <button type= "button" class= "close" data-dismiss= "modal"> &times; </button>
                <h4 class= "modal-title" style="text-align:center;">Publicar nuevo libro en la web</h4>
            </div>
            <div class="modal-body">
                <form role="form">
	                   <table class="contenido">
                           <tr>
			                 <td>
                                <label>Autor de libro</label> 
                            </td>
                            <td>
                                <select>
                                    <option>Ejemplo autor</option>
                                    <option>Ejemplo autor</option>
                                </select>
                            </td>
                            <td>
                                <label>Categoria de libro</label> 
                            </td>
                            <td>
                                <select>
                                    <option>Ejemplo categoria</option>
                                    <option>Ejemplo categoria</option>
                                </select>
                            </td>

                           </tr>
                           <tr>
                            <td>
                            <label>Editorial</label> 
                            </td>
                            <td>
                                <select>
                                    <option>Ejemplo editorial</option>
                                    <option>Ejemplo editorial</option>
                                </select>
                            </td>
			                 <td>
                                <label>nombre de libro</label> 
                            </td>
                            <td>
                                <input type="text" name="rfc" id="rfc"  maxlength="13"  required/>
                            </td>
                           </tr>
                        </table>
                    </fieldset>   
                </form>
            <div class= "modal-footer">
                <div style="text-align:center;">
                <button type= "button"  class= "btn btn-default" data-dismiss= "modal" id="prueba" >Guardar</button>
                <button type= "button"  class= "btn btn-default" data-dismiss= "modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</div>