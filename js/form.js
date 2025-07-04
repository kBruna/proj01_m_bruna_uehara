let b_delete = document.getElementById("exclude");

function confirma(id, nome){
    if (confirm("Tem certeza que deseja excluir o contato de: " + nome + " ?"))

    window.location = "./exclude.php?id=" + id;
}

b_delete.addEventListener("click", () => {
    let id_delete = b_delete.className;
    let name_delete = document.getElementById(id_delete).value;
    confirma(id_delete, name_delete);
    console.log(id_delete);
    console.log(name_delete);
})