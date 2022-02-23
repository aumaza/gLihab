/*
** funcion que actualiza password usuario a base de datos
*/
    
$(document).ready(function(){
    $('#add_nuevo_password').click(function(){
   
        var datos=$('#fr_nuevo_password_ajax').serialize();
        $.ajax({
            type:"POST",
            url:"nuevo_password.php",
            data:datos,
            success:function(r){
                if(r == 1){
                    alert("Password Actualizado Exitosamente!!");
                    $('#user').val('');
                    $('#pass_1').val('');
                    $('#pass_2').val('');
                    window.location.href="../../#";
                }else if(r == -1){
                    alert("Hubo un problema al intentar actualizar el password");
                    console.log("Datos: " + datos);
                }else if(r == 2){
                    alert("Hay campos sin completar!!");
                    console.log("Datos: " + datos);
                }else if(r == 3){
                    alert("No existe registro de dicho usuario!!. Contáctese con el Administrador!!");
                    window.location.href="../../#";
                }else if(r == 4){
                    alert("Los Password no coinciden, reintente!!");
                    $('#user').val('');
                    $('#pass_1').val('');
                    $('#pass_2').val('');
                    $('#user').focus();
                }else if(r == 5){
                    alert("Los Password no pueden tener menos de 15 catacteres!!");
                    $('#user').val('');
                    $('#pass_1').val('');
                    $('#pass_2').val('');
                    $('#user').focus();
                }else if(r == 6){
                    alert("Los Password no pueden superar los 15 caracteres!!");
                    $('#user').val('');
                    $('#pass_1').val('');
                    $('#pass_2').val('');
                    $('#user').focus();
                }else if(r == 7){
                    alert("Error de conexion!!");                    
                }
                
            }
        });

        return false;
    
});
});
