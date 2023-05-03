var myText = document.getElementById("my-text");
var result = document.getElementById("result");
var limit = 160;
result.textContent = 0 + "/" + limit;
let x = []

myText.addEventListener("input",function(){
    var textLength = myText.value.length;
    result.textContent = textLength + "/" + limit;

    if(textLength > limit){
        myText.style.borderColor = "#ff2851";
        result.style.color = "#ff2851";
    }
    else{
        myText.style.borderColor = "#b2b2b2";
        result.style.color = "#737373";
    }
});

function addContact() {
    x.push(document.getElementById("contact-input").value)

    document.getElementById("hidden-numbers").value = x
}

function printContact() {
    console.log(x)
}