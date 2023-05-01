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
            console.log(e.name);
        });
      } else {
        console.log('A válasz null vagy undefined.');
      }
    } catch (error) {
      console.log('Hiba történt a kérés során:', error);
    }
  }
  

test();