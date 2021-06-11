
document.addEventListener('DOMContentLoaded',function(){
    const busq = document.getElementById('busqueda');
    const test = document.getElementsByName('busqueda');
    busq.addEventListener('change',function(){
        console.log(test[0].value);
        buscar(test[0].value)
    });
});


function buscar(busqueda){
    const test = document.getElementsByName('busqueda')[0];
    const sp = document.createElement("h1");
    const text = document.createTextNode("Hola mundo");
    sp.appendChild(text);
    test.appendChild(sp);
   

}
