function validarFormulario(){
       $('#formLogin').validate({
           rules: {
           usuario : {required: true, maxlength:20},
           password : {required: true, maxlength:20}
           },
       messages: {
            usuario: {  
                required: "Debe ingresar su nombre de usuario",  
                maxlength: "La longitud máxima del password son 20 carácteres"  
            },  
            password: {  
                required: "Debe ingresar su password",  
                maxlength: "La longitud máxima del password son 20 carácteres"  
            }           
       }
   });
}

window.addEventListener("load",validarFormulario,false);