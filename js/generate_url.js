var submit = document.getElementById("submit");
var company = document.getElementById("company");
var aanwezigen = document.getElementById("aanwezigen");
var tijd = document.getElementById("tijd");

submit.addEventListener("click", function () {
    if (company.value != "" && aanwezigen.value != "" && tijd.value != "") {

        let companyd = company.value.replace("&", "%26");
        let aanwezigend = aanwezigen.value.replace("&", "%26");
        let tijdd = tijd.value.replace("&", "%26");

        window.location.href = "welkom.php?company="+ companyd +"&aanwezigen="+ aanwezigend +"&tijd="+tijdd;
    }
});
