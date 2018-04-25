var submit = document.getElementById("submit");
var company = document.getElementById("company");
var aanwezigen = document.getElementById("aanwezigen");
var tijd = document.getElementById("tijd");

submit.addEventListener("click", function () {
    if (company.value != "" && aanwezigen.value != "" && tijd.value != "") {
        window.location.replace("welkom.php?company="+ company.value +"&aanwezigen="+ aanwezigen.value +"&tijd="+tijd.value);
    }
});
