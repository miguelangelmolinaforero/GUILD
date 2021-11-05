<link rel="stylesheet" href="../../../../GUILD/assets/css/ventas_view.css">
<div class="panel panel-primary">
    <div class="container_vender" style="max-width: 960px; margin: 0 auto;">
        <div class=" panel-body ">
            <form name="form1 " id="form1 " method="post " action="guarda.php " enctype="multipart/form-data ">
                <h2 class="text-center ">Vender artículo</h2>
                <div class="mb-3 ">
                    <label for="nombre_articulo" class="form-label ">Nombre o Título</label>
                    <input class="form-control search_bar " id="nombre_articulo" type="text " placeholder="Producto " aria-label=" ">
                </div>
                <div class="mb-3 ">
                    <label for="exampleFormControlInput1 " class="form-label ">Categoría</label>
                    <input class="form-control search_bar " type="text " placeholder="Producto " aria-label=" ">
                </div>
                <div class="mb-3 ">
                    <label for="descripcion " class="form-label ">Descripción</label>
                    <textarea class="form-control search_bar " placeholder="Añade una descripcion ed tu producto o artículo" id="descripcion " rows="3 "></textarea>
                </div>
                <div class="mb-3 ">
                    <label for="exampleFormControlInput1 " class="form-label ">Precio</label>
                    <input class="form-control search_bar " type="text " placeholder="Producto " aria-label=" ">
                </div>
                <h2 class="text-center ">Cargar Multiple Imagenes</h2>

                <div class="form-group ">
                    <label class="col-sm-2 control-label ">Archivos</label>
                    <div class="col-sm-8 ">
                        <input type="file " class="form-control " id="archivo[] " name="archivo[] " multiple=" " accept="image/* ">
                    </div>

                    <button type="submit " class="btn btn-primary ">Cargar</button>
                </div>

            </form>

        </div>
    </div>
</div>