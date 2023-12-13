
let allValues = [];
//hardcoded graden
let degrees = [[0, 60, -45], [45, -20, 70], [310, 155, -25], [50, 160, 200], [45, -20, 250], [0, 240, -45]];
//selecteert de dobbelsteen
let roll = document.querySelector(".dice");
//op click op dobbel steen voer functie uit
roll.addEventListener("click", () =>{
  //laat de dobbelsteen draaien
  roll.classList.add("rotate");
  //random nummer tussen 1-6
  const randomNumber = Math.floor(Math.random() * 6) + 1;
  //selevteer lijsten
  const average = document.getElementById("average");
  const list = document.getElementById("list");
  //timeout zodat hij niet meteen snapt naar eind nummer
  setTimeout(function() {
    //stop rollen
    roll.classList.remove("rotate");
    //eind positie
    roll.style.transform = `rotateY(${degrees[randomNumber-1][0]}deg) rotateX(${degrees[randomNumber-1][1]}deg) rotateZ(${degrees[randomNumber-1][2]}deg)`;
    //geef waarde in console
    console.log(randomNumber);
    //voeg nummer toe aan geschiedenis
    allValues.push(randomNumber);
    //roep gemiddelde functie aan
    average.innerHTML = getAverage(allValues);
    list.innerHTML='';
    //zorgt ervoor dat het aantal keer van getal wat gerold word in lijst komt
    const counts = {};
    for (let i = 0; i < allValues.length; i++) {
      const number = allValues[i];
      counts[number] = counts[number] ? counts[number] + 1 : 1;
    }
    for (const number in counts) {
      const count = counts[number];
      const listItem = document.createElement("li");
      listItem.innerHTML = `${number}: ${count}`;
      list.appendChild(listItem);
    }
    document.body.appendChild(list);
  }, 2000);
});
//berekend het gemmiddelde
function getAverage(values) {
  return sum = values.reduce((total, value) => total + value, 0)/values.length;
}