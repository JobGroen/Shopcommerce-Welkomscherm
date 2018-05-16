var submit = document.getElementById("submit");
var company = document.getElementById("company");
var aanwezigen = document.getElementById("aanwezigen");
var tijd = document.getElementById("tijd");

submit.addEventListener("click", function () {
    if (company.value != "" && aanwezigen.value != "" && tijd.value != "") {

        let companyd = encodeURIComponent(company.value);
        let aanwezigend = encodeURIComponent(aanwezigen.value);
        let tijdd = encodeURIComponent(tijd.value);

        window.location.href = "welkom.php?company="+ companyd +"&aanwezigen="+ aanwezigend +"&tijd="+tijdd;
    }
});
