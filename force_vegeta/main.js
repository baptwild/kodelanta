const enemies = [265, 851, 899, 1193];

function launch() {
    console.clear();
    let vegetaLvl = 1;
    let vegetaForce = 165;
    let puissance = 0;

    puissance = vegetaForce * vegetaLvl;

    let index = 0;
    enemies.forEach((enemy) => {
        console.log("ennemis numéro: " + index);

        while (vegetaForce * vegetaLvl < enemy) {
            vegetaLvl++;
        }

        vegetaForce += Math.floor(enemy / 10);
        puissance = vegetaForce * vegetaLvl;

        console.log("puissance: " + puissance);
        console.log("niveau: " + vegetaLvl);
        index++;
    });
}
