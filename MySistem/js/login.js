function logar(){

    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if(username == "admin" && password == "exhddhf991"){
        location.href = "gerenUsu.html";
        
    }
    else{
        alert('Usuario ou senha incorretos');
    }

}
