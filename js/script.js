const name = document.getElementById('name');
const phone = document.getElementById('phone');
const mail = document.getElementById('mail');
const sms = document.getElementById('sms');
const form = document.getElementById('form');
const errorel = document.getElementById('error');

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function guardar(){
    if (window["localStorage"]) {
        localStorage.Nombre = document.getElementById("name").value;
        setCookie("Name", name.value, 30);       
        localStorage.Correo = document.getElementById("mail").value;
        setCookie("Mail", mail.value, 30);

        if (phone.value.length === 8){
            localStorage.Telefono = document.getElementById("phone").value;
            setCookie("Phone", phone.value, 30);
        }   
        if (sms.value.length >= 10  && sms.value.length <= 25 ){
            localStorage.Mensaje = document.getElementById("sms").value;
            setCookie("Producto", sms.value, 30);
        }
    }
    
}

form.addEventListener('submit', (e) => {
    let messages = []
    if (name.value === '' || name.value === null){
        messages.push('Necesitas colocar un nombre')
    }
    

    if (phone.value.length <= 7  || phone.value.length >= 9 ){
        messages.push('Solo aceptamos numeros conformados por 8 caracteres')
    }

    if (sms.value.length <= 10  || sms.value.length >= 25 ){
        messages.push('El mensaje debe ser mayor a los 10 caracteres y menor a los 25')
    }

    if(messages.length > 0){

        e.preventDefault()
        errorel.innerText = messages.join(', ')
    }
    
})

function validaEliminacion() {
    var retorno = false;
    try {
        if (confirm("¿Esta segura(o) que desea eliminar este dato?")) {
            retorno = true;
        }

    } catch (error) {
        retorno = false;
    }
    return retorno
}