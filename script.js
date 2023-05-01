function mainpage(){
    window.open("https://petrik.hu","_self");
}

async function test() {
    try {
      const response = await fetch('http://localhost:80/test.php');
      if (response) {
        console.log('A válasz érkezett.', response);
        const data = await response.json();
        data.forEach(e => {
            createElement(e.id, e.name, e.descript, e.image);
        });
      } else {
        console.log('A válasz null vagy undefined.');
      }
    } catch (error) {
      console.log('Hiba történt a kérés során:', error);
    }
  }

  function createElement(id, name, description, image) {
    const cont = document.getElementById("cont");
    element = document.createElement("div");
    element.setAttribute("class", "card");
    element.innerHTML = `<div class="name">${name}</div><div class="disc">${description}</div><form "method="post" class="botton_cont" action="https://helyettesites.petrik.hu/api/index.php?status=ikszOpp&ikszOpName=${name}"><label for="email">Ide írd azt az email címed amit figyelsz is :D</label><input type="email" name="email" id=email class="email_field" placeholder="email"><input type="submit" value="Jelentkezés" class="join_btn"></form>`
    cont.appendChild(element);
}

test();