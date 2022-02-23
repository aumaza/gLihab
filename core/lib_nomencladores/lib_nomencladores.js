// ====================================================================================== //
// GUARDA NUEVO REGISTRO //

/*
** funcion guarda un nuevo concepto a base de datos
*/

$(document).ready(function(){
    $('#add_new_concepto').click(function(){
        
        var datos = $('#fr_add_new_concepto_ajax').serialize();
        
        $.ajax({
            type:"POST",
            url:"../../lib_nomencladores/nuevo_concepto.php",
            data:datos,
            success:function(r){
                if(r == 1){
                    alert("Concepto Guardado Exitosamente!!");
                    $('#descripcion').val('');
                    $('#porcentaje').val('');
                    $('#tipo_concepto').focus('');
                    console.log("Datos: " + datos);
                }else if(r == -1){
                    alert("Error. Hubo un problema al intentar guardar el Concepto");
                    console.log("Datos: " + datos);
                }else if(r == 5){
                    alert("Error, Hay campos sin completar!!");
                    console.log("Datos: " + datos);
                }else if(r == 4){
                    alert("Error. Concepto Existente!!");
                    $('#descripcion').val('');
                    $('#porcentaje').val('');
                    $('#tipo_concepto').focus('');
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


/*
** funcion guarda nueva empresa a base de datos
*/

$(document).ready(function(){
    $('#add_new_empresa').click(function(){
        
        var datos = $('#fr_add_new_empresa_ajax').serialize();
        
        $.ajax({
            type:"POST",
            url:"../../lib_nomencladores/nueva_empresa.php",
            data:datos,
            success:function(r){
                if(r == 1){
                    alert("Empresa Guardada Exitosamente!!");
                    $('#razon_social').val('');
                    $('#tipo_sociedad').val('Seleccionar');
                    $('#cuit').val('');
                    $('#direccion').val('');
                    $('#cod_localidad').val('Seleccionar');
                    $('#cod_provincia').val('Seleccionar');
                    $('#razon_social').focus('');
                    console.log("Datos: " + datos);
                }else if(r == -1){
                    alert("Error. Hubo un problema al intentar guardar el registro");
                    console.log("Datos: " + datos);
                }else if(r == 5){
                    alert("Error, Hay campos sin completar!!");
                    console.log("Datos: " + datos);
                }else if(r == 4){
                    alert("Error. Empresa Existente!!");
                    $('#razon_social').val('');
                    $('#tipo_sociedad').val('Seleccionar');
                    $('#cuit').val('');
                    $('#direccion').val('');
                    $('#cod_localidad').val('Seleccionar');
                    $('#cod_provincia').val('Seleccionar');
                    $('#razon_social').focus('');
                    console.log("Datos: " + datos);
                }else if(r == 13){
                    alert("Error de conexion!!");                    
                }else if(r == 7){
                    alert("No se pudo realizar la Consulta!!");                    
                }
                else if(r == ''){
                   console.log("Datos: " + datos);                  
                }
                
            }
        });

        return false;
    
});
});


/*
** funcion guarda nuevo agrupamiento a base de datos
*/

$(document).ready(function(){
    $('#add_new_agrupamiento').click(function(){
        
        var datos = $('#fr_add_new_agrupamiento_ajax').serialize();
        
        $.ajax({
            type:"POST",
            url:"../../lib_nomencladores/nuevo_agrupamiento.php",
            data:datos,
            success:function(r){
                if(r == 1){
                    alert("Registro Guardado Exitosamente!!");
                    $('#sector').val('');
                    $('#categoria').val('');
                    $('#nivel').val('');
                    $('#sector').focus('');
                    console.log("Datos: " + datos);
                }else if(r == -1){
                    alert("Error. Hubo un problema al intentar guardar el registro");
                    console.log("Datos: " + datos);
                }else if(r == 5){
                    alert("Error, Hay campos sin completar!!");
                    console.log("Datos: " + datos);
                }else if(r == 4){
                    alert("Error. Agrupamiento Existente!!");
                    $('#sector').val('');
                    $('#categoria').val('');
                    $('#nivel').val('');
                    $('#sector').focus('');
                    console.log("Datos: " + datos);
                }else if(r == 13){
                    alert("Error de conexion!!");                    
                }else if(r == 7){
                    alert("No se pudo realizar la Consulta!!");                    
                }
                else if(r == ''){
                   console.log("Datos: " + datos);                  
                }
                
            }
        });

        return false;
    
});
});


/*
** funcion guarda nuevo CATEGORÍA a base de datos
*/

$(document).ready(function(){
    $('#add_new_categoria').click(function(){
        
        var datos = $('#fr_add_new_categoria_ajax').serialize();
        
        $.ajax({
            type:"POST",
            url:"../../lib_nomencladores/nueva_categoria.php",
            data:datos,
            success:function(r){
                if(r == 1){
                    alert("Registro Guardado Exitosamente!!");
                    $('#sector').val('');
                    $('#categoria').val('');
                    $('#nivel').val('');
                    $('#hrs_jornada').val('');
                    $('#importe').val('');
                    $('#sector').focus('');
                    console.log("Datos: " + datos);
                }else if(r == -1){
                    alert("Error. Hubo un problema al intentar guardar el registro");
                    console.log("Datos: " + datos);
                }else if(r == 5){
                    alert("Error, Hay campos sin completar!!");
                    console.log("Datos: " + datos);
                }else if(r == 4){
                    alert("Error. Agrupamiento Existente!!");
                    $('#sector').val('');
                    $('#categoria').val('');
                    $('#nivel').val('');
                    $('#hrs_jornada').val('');
                    $('#importe').val('');
                    $('#sector').focus('');
                    console.log("Datos: " + datos);
                }else if(r == 13){
                    alert("Error de conexion!!");                    
                }else if(r == 7){
                    alert("No se pudo realizar la Consulta!!");                    
                }
                else if(r == 9){
                    alert("El valor del importe debe ser un número con decimales!!");                    
                }
                else if(r == ''){
                   console.log("Datos: " + datos);                  
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
    $('#update_concepto').click(function(){
        
        var datos = $('#fr_edit_concepto_ajax').serialize();
        
        $.ajax({
            type:"POST",
            url:"../../lib_nomencladores/update_concepto.php",
            data:datos,
            success:function(r){
                if(r == 1){
                    alert("Concepto Actualizado Exitosamente!!");
                    window.location.href="main.php";
                }else if(r == -1){
                    alert("Error. Hubo un problema al intentar Actualizar el Concepto");
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


/*
** funcion editar empresa a base de datos
*/

$(document).ready(function(){
    $('#update_empresa').click(function(){
        
        var datos = $('#fr_edit_empresa_ajax').serialize();
        
        $.ajax({
            type:"POST",
            url:"../../lib_nomencladores/update_empresa.php",
            data:datos,
            success:function(r){
                if(r == 1){
                    alert("Empresa Actualizada Exitosamente!!");
                    window.location.href="main.php";
                }else if(r == -1){
                    alert("Error. Hubo un problema al intentar Actualizar los datos de la Empresa");
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


/*
** funcion editar agrupamientos a base de datos
*/

$(document).ready(function(){
    $('#update_agrupamiento').click(function(){
        
        var datos = $('#fr_update_agrupamiento_ajax').serialize();
        
        $.ajax({
            type:"POST",
            url:"../../lib_nomencladores/update_agrupamiento.php",
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
 var callEdit = function(x){
            
    if((x == 'edit_tipo_concepto') || 
            (x == 'edit_descripcion') || 
                (x == 'edit_porcentaje')){
                
        document.getElementById(x).readOnly = false;
    }
}


/*
** DESBLOQUEA LOS CAMPOS A EDITAR HASTA QUE EL USUARIO SELECCIONE EL QUE DESEA
*/
 var callEditEmpresa = function(x){
            
    if((x == 'edit_razon_social') || 
            (x == 'edit_cuit') || 
                (x == 'edit_direccion') || 
                    (x == 'edit_album_bio')){
                
        document.getElementById(x).readOnly = false;
    }else if((x == 'edit_tipo_sociedad') ||
                (x == 'edit_cod_provincia')){ 
        document.getElementById(x).disabled = false;
    }
}

/*
** BLOQUEA LOS CAMPOS A EDITAR HASTA QUE EL USUARIO SELECCIONE EL QUE DESEA
*/
 var callEditAgrupamiento = function(x){
            
    if((x == 'edit_sector') || 
            (x == 'edit_categoria') || 
                (x == 'edit_nivel')){
                
        document.getElementById(x).readOnly = false;
    }
}


// ====================================================================================== //
// COMPLETA SELECTORES DE OPCIONES //

/*
** funcion que completa select con lo filtrado de otro select
*/

function CargarLocalidad(val){
    $.ajax({
        type: "POST",
        url: '../../lib_nomencladores/consulta_localidad.php',
        data: 'cod_provincia='+val,
        success: function(resp){
            $('#cod_localidad').html(resp);
            $('#respuesta').html("");
            console.log(resp);
        }
    });
}

/*
** funcion que completa select con lo filtrado de otro select
*/

function CargarCategoria(val){
    $.ajax({
        type: "POST",
        url: '../../lib_nomencladores/consulta_categoria.php',
        data: 'sector='+val,
        success: function(resp){
            $('#categoria').html(resp);
            $('#respuesta').html("");
            console.log(resp);
        }
    });
}


/*
** funcion que completa select con lo filtrado de otro select
*/

function CargarNivel(val){
    $.ajax({
        type: "POST",
        url: '../../lib_nomencladores/consulta_categoria.php',
        data: 'categoria='+val,
        success: function(resp){
            $('#nivel').html(resp);
            $('#respuesta2').html("");
            console.log(resp);
        }
    });
}

