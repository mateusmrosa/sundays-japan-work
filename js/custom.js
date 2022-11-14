
let checkBoxFinanceiro = document.querySelector("#checkBoxFinanceiro");

function ativarCheckboxFinanceiro(checkBoxFinanceiro) {
    checkBoxFinanceiro.checked = true;

}
ativarCheckboxFinanceiro(checkBoxFinanceiro);

function desativarcheckBoxFinanceiro() {
    let checkBoxFinanceiro = document.querySelector("#checkBoxFinanceiro");
    checkBoxFinanceiro.checked = false;
}

function desativarCheckBoxCultural() {
    let checkBoxCultural = document.querySelector("#checkBoxCultural");
    checkBoxCultural.checked = false;

}

let checkBoxMasculino = document.querySelector("#checkBoxMasculino");

function ativarCheckBoxMasculino(checkBoxMasculino) {
    checkBoxMasculino.checked = true;
}
ativarCheckBoxMasculino(checkBoxMasculino)


function desativarCheckBoxMasculino() {
    checkBoxMasculino.checked = false;
}

function desativarCheckBoxFeminino() {
    let checkBoxFeminino = document.querySelector("#checkBoxFeminino")
    checkBoxFeminino.checked = false;
}

/**mascara telefone */
const mascaraTelefone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
}

const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g, '')
    value = value.replace(/(\d{2})(\d)/, "($1) $2")
    value = value.replace(/(\d)(\d{4})$/, "$1-$2")
    return value
}
/**mascara telefone */