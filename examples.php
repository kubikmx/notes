$this->modulos_portal[1]=array('tablamodule'=>'' ,'nameseccion'=>'contacto' ,'id_table'=>'' ,'titlemodule'=>'' ,'custom_save'=>false ,'save_file'=>'', 'extra_actions'=>'', 'sinimagen'=>true, 'fields_search'=>"nombre", 'titles_search'=>"nombre", 'fieldlist' =>"nombre,email,fecha,revisado", 'tituloslist'=>array('Nombre','Email','Fecha->fechashort','Revisado->active_check') );
$this->modulos_portal[0]=array('tablamodule'=>'' ,'nameseccion'=>'slidehome' ,'id_table'=>'' ,'titlemodule'=>'' ,'custom_save'=>false ,'save_file'=>'', 'sinimagen'=>true, 'fieldlist' =>"prioridad,nombre,idioma", 'tituloslist'=>array('Orden[width=50]->handlersort','Nombre','Idioma'), "orden"=>"prioridad ASC", "is_sortable" => true  );


array("nombre"=>"nombre",        "tipo"=>"input",    "titulo"=>"Nombre"),
array("nombre"=>"intro",        "tipo"=>"textarea",    "titulo"=>"Intro", "nota"=>"Máximo 120 caracteres"),
array("nombre"=>"id_categoria",   "tipo"=>"select",   "titulo"=>"Categoria", "extra1"=>array("tabla"=>PREFIX."categorias","nombre"=>"id_categoria","id_tabla"=>"id_categoria","orden"=>"id_padre","seleccionado"=>intval(@$_SESSION["categoria"]),"campomostrar"=>"nombre","funcionjavascript"=>"","tipodeconsuta"=>"tabla","titulovacio"=>"","preprocesa"=>"licascada")),
array("nombre"=>"oculto",   "tipo"=>"checkbox",    "titulo"=>"Oculto"),
array("nombre"=>"imagen",    "tipo"=>"imagen",   "extra1"=>array("imagen",800,0,"Imagen"), "recorta_normal"=>false, "resize_normal"=>true, "carpeta"=>"../images/actividades",
        "customsizes"=>array(
            array("carpeta"=>"thumbs","ancho"=>300,"alto"=>300)
        )
    ),
array("nombre"=>"liga",        "tipo"=>"input",    "titulo"=>"Liga",  "nota"=>"Escriba la liga de la pagina iniciando con <b>http://</b> (http://www.ejemplo.com)"),
array("nombre"=>"rutaarchivo", "tipo"=>"archivo",    "titulo"=>"Archivo descargable", "extensiones"=>"html,htm", "carpeta"=>"handicap/")
array("nombre"=>"fecha_reg", "tipo"=>"dateinput",  "titulo"=>"Fecha"),
array("nombre"=>"articulo",  "tipo"=>"modulo",     "ruta"=>"mod/articulos.php"),
array("nombre"=>"Galeria", "seccion"=>"galeria", "tipo"=>"supergaleria", "id_padre"=>"id_galeria", "tabla"=>PREFIX."galeria", "id_tabla"=>"id_imagen", "anchoimagen"=>1920, "altoimagen"=>0, "recorta_normal"=>false, "resize_normal"=>true, "carpeta"=>"../../images/galeria/", "con_titulo"=>false, "campo"=>"imagen", "orden"=>"prioridad", 
      "customsizes"=>array(
       array("carpeta"=>"thumbs","ancho"=>600,"alto"=>0)
       ), "customfields"=>array(
                  array("nombre"=>"tipo","tipo"=>"enumvalues","titulo"=>"Tipo","enum"=>"Seleccionar,Conceptos,Rendes, Mayakoba","values"=>",1,2,3")
                   //array("nombre"=>"nombre","tipo"=>"string", "titulo"=>"Nombre","resize"=>false,"recorta"=>false)
               )
           ), 
array("nombre"=>"tipo",   "tipo"=>"enumvalues",   "titulo"=>"Tipo", "enum"=>",Directo,Conmutador", "values"=>",directo,conmutador"),
array("nombre"=>"color",     "tipo"=>"color",    "titulo"=>"Color"),  //fairmont
array("nombre"=>"fecha",   "tipo"=>"datetime",    "titulo"=>"Fecha"),
array("nombre"=>"revisado",   "tipo"=>"checkbox",    "titulo"=>"Revisado"),