const values = ["p", "f", "c"];

function launch() {
    console.log("lancement");
    const number = document.querySelector("#number").value;

    const robotResponse = robot(number);
    const result = resolve(robotResponse);

    console.log("robot  : " + robotResponse);
    console.log("reponse: " + result);
}

function robot(length) {
    let result = "";

    for (let i = 0; i <= length; i++) {
        result += values[Math.floor(Math.random() * 3)];
    }
    return result;
}

function resolve(robotResponse) {
    let response = "";

    for (let letter of robotResponse) {
        response += getWinner(letter);
    }
    return response;
}

function getWinner(letter) {
    switch (letter) {
        case "p":
            return "f";
        case "f":
            return "c";
        case "c":
            return "p";
    }
}
