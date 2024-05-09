const submit = document.getElementById("submitButton");

const title = document.getElementById("contactTitle");
const content = document.getElementById("contactContent");
const email = document.getElementById("contactEmail");

const errorSection = document.querySelector("section");

errorSection.style.display="none";

submit.addEventListener("click",submitLetter);

function submitLetter(){
    if(title.value=="" || content.value=="" || email.value==""){
        errorSection.style.display="flex";
    }
    else{
        console.log("OK");
    }
}
