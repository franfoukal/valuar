// Los botones suma y resta te creaban un querystring 
// y se rompia todo
// Asique aca hay un muy complejo algoritmo en js que soluciona 
// este problema 

function setAmount(){
    document.getElementById('cantidad').value = 1;
}
function suma (){
    document.getElementById('cantidad').value++;
    
}

function resta (){
    console.log(document.getElementById('cantidad').value);
    if (document.getElementById('cantidad').value > 1){            
        document.getElementById('cantidad').value--;
        
    }
}

window.onload = setAmount();