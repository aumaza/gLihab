// ====================================================================================== //
// GUARDA NUEVO REGISTRO //

/*
** funcion guarda un nuevo gremio a base de datos
*/

$(document).ready(function(){
    $('#add_new_gremio').click(function(){
        
        var datos = $('#fr_add_new_gremio_ajax').serialize();
        
        $.ajax({
            type:"POST",
            url:"../../lib_gremios/nuevo_gremio.php",
            data:datos,
            success:function(r){
                if(r == 1){
                    alert("Registro Guardado Exitosamente!!");
                    $('#cod_gremio').val('');
                    $('#descripcion').val('');
                    $('#cod_gremio').focus('');
                    console.log("Datos: " + datos);
                }else if(r == -1){
                    alert("Error. Hubo un problema al intentar guardar el Concepto");
                    console.log("Datos: " + datos);
                }else if(r == 5){
                    alert("Error, Hay campos sin completar!!");
                    console.log("Datos: " + datos);
                }else if(r == 4){
                    alert("Error. Gremio Existente!!");
                    $('#cod_gremio').val('');
                    $('#descripcion').val('');
                    $('#cod_gremio').focus('');
                    console.log("Datos: " + datos);
                }else if(r == 7){
                    alert("Error de conexion dentro de la funcion principal!!");                    
                }else if(r == 13){
                    alert("Error de conexion!!");                    
                }
                
            }
        });

        return false;
    
});
}); 


// ====================================================================================== //
// GUARDA EDICION REALIZADA //


/*
** funcion editar concepto a base de datos
*/

$(document).ready(function(){
    $('#update_gremio').click(function(){
        
        var datos = $('#fr_update_gremio_ajax').serialize();
        
        $.ajax({
            type:"POST",
            url:"../../lib_gremios/update_gremio.php",
            data:datos,
            success:function(r){
                if(r == 1){
                    alert("Registro Actualizado Exitosamente!!");
                    window.location.href="main.php";
                }else if(r == -1){
                    alert("Error. Hubo un problema al intentar Actualizar el Registro");
                    console.log("Datos: " + datos);
                }else if(r == 5){
                    alert("Error, Hay campos sin completar!!");
                    console.log("Datos: " + datos);
                }else if(r == 7){
                    alert("Error de conexion dentro de la funcion principal!!");                    
                }else if(r == 13){
                    alert("Error de conexion!!");                    
                }
                
            }
        });

        return false;
    
});
});


// ====================================================================================== //
// DSBLOQUEAR INPUT O SELECTS EN FORMUALRIOS DE EDICION //

/*
** BLOQUEA LOS CAMPOS A EDITAR HASTA QUE EL USUARIO SELECCIONE EL QUE DESEA
*/
 var callEditGremio = function(x){
            
    if((x == 'edit_cod_gremio') || 
            (x == 'edit_descripcion')){
                
        document.getElementById(x).readOnly = false;
    }
}
