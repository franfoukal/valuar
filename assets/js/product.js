// Los botones suma y resta te creaban un querystring 
// y se rompia todo
// Asique aca hay un muy complejo algoritmo en js que soluciona 
// este problema 


function suma (){
    document.getElementById('cantidad').value++;
}

function resta (){
    if (document.getElementById('cantidad').value > 1){            
        document.getElementById('cantidad').value--;
    }
}