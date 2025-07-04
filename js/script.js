let form = document.getElementById("contato");
let fname = document.getElementById("f_name");
let email = document.getElementById("f_email");
let curso = document.querySelectorAll("input[type='checkbox']");
let radio = document.getElementsByName("f_radio");
let err_name = document.getElementById("req_nome");
let err_email = document.getElementById("req_email");
let err_check = document.getElementById("req_check");
let err_radio = document.getElementById("req_radio");
let type_form = document.getElementById("forms").className;
let id_update = document.getElementById("id");

let err;


//RegEx
let userRegex = /^([a-zA-Z]{2,})(?:\s[a-zA-Z'’-]{2,})?(?:\s[a-zA-Z'’-]{2,})?$/;

let emailRegex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;


//Function for Radio Button
function radioValid(botoes) {
    let n = botoes.length;

    for(let i = 0; i < n; i++){
        if(botoes[i].checked)
            return botoes[i].value;
    }
}

//Submit Form
form.addEventListener("submit", function(event) {
    //Error Clear
    event.preventDefault();
    err = 0;
    err_name.innerHTML = err_email.innerHTML = err_check.innerHTML = err_radio.innerHTML = "";
    let msg_edit = "Faltam informações para o envio do formulário ou os campos foram preenchidos incorretamente.\nVerifique os campos:\n\n";

    let msg_alt = "Deseja enviar as modificações?\n\n";
    
    //Name Input Check
    fname = fname.value.trim();
    if(userRegex.test(fname)) {
        err_name.innerHTML = "&check;";
        err_name.style.color = "green";
    }
    else {
        err_name.innerText = "*Valor Inválido";
        err_name.style.color = "red";
        err++;
        msg_edit += "\t \u2022 Nome\n";
        msg_alt += "\t \u2022 Nome\n";
    }

    //Email Input Check
    email = email.value.trim();
    if(emailRegex.test(email)) {
        err_email.innerHTML = "&check;";
        err_email.style.color = "green";
    }
    else {
        err_email.innerText = "*Valor Inválido";
        err_email.style.color = "red";
        err++;
        msg_edit += "\t \u2022 Email\n";
        msg_alt += "\t \u2022 Email\n";
    }

    //Radio Input Check
    let check_radio = radioValid(radio);
    check_radio = check_radio || false;

    if(!check_radio) {
        err_radio.innerHTML = "*Selecione uma Opção";
        err++;
        msg_edit += "\t \u2022 Como ficou sabendo da gente?\n";
        msg_alt += "\t \u2022 Como ficou sabendo da gente?\n";
    }
    else {
        err_radio.innerHTML = "&check;";
        err_radio.style.color = "green";
    }

    //CheckBox Input Check
    let check_cursos;
    for(let i = 0; i < 6; i++){
        if(curso[i].checked){
            check_cursos += curso[i].value;
        }
    }
    check_cursos = check_cursos || false;

    if(!check_cursos) {
        err_check.innerHTML = "*Selecione uma Opção";
        err++;
        msg_edit += "\t \u2022 Cursos\n";
        msg_alt += "\t \u2022 Cursos\n";
    }
    else {
        err_check.innerHTML = "&check;";
        err_check.style.color = "green";
    }


    // Err Check
    if(err == 0) {
        if (type_form == "contat") {
            form.action = "process.php";
            form.method = "POST";
            form.submit();
            console.log("Foi adicionado!");
        }
        else if (type_form == "edit"){
            if(confirm(msg_alt)) {
                form.action = "alter.php";
                form.method = "POST";
                form.submit();
                console.log("Foi alterado!");
            }
            else {
                alert("Operação cancelada!");
            }
        }
    } 
    else {
        event.preventDefault();
        console.log("Não foi!");
        alert(msg_edit);
    }
})