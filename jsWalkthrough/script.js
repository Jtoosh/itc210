function buttonPopup() {
    alert("Hello, button!");
}

function isNumber(sample){
    if (typeof sample == 'number'){
        let t = "Number";
    }
    else{
        let t = "NotANumber";
    }
    console.log(t);
}

function trueOrFalse(x){
    if (x){
        console.log(x + "( " + typeof x + ") " + true);
    }

    else{
        console.log(x + " (" + typeof x + ") " + false);
    }
}

let myObject ={
    name: "Dart Monkey",
    cost: 200,
    range: "Short",
    paragon: true,
    description: "Throws darts at bloons"
}