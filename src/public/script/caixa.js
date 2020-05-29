function reiniciar(){
    
}

function dinheiro(){
    const dinheiro = document.getElementById('dinheiro').value;
    const subtotal = document.getElementById('subtotal');

    xhttp.onreadystatechange = () => {
        
        if(xhttp.readyState === 4 && xhttp.status == 200){
            var retorno = xhttp.responseText;             
            subtotal.innerHTML = `R$ ${retorno}`;
        }
    }

    xhttp.open('POST','../controller/subTotal.php');
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send('dinheiro=' + encodeURIComponent(dinheiro));
}

function codigoDeBarra(){

    const codigoDeBarra = document.getElementById("codigo-de-barra").value;   

    xhttp.onreadystatechange = () =>{

            if(xhttp.readyState === 4 && xhttp.status == 200){
                    document.location.reload(true);
                    console.log('Item adicionado')
                }               
            }
        

    xhttp.open('POST','../controller/codigoDeBarra.php');
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send('codigo-de-barra=' + encodeURIComponent(codigoDeBarra));
};

window.onload = () =>{
    const produto = document.getElementById('produtos');
    xhttp.onreadystatechange = () =>{

        if(xhttp.readyState === 4 && xhttp.status == 200){
            var tabela = JSON.parse(xhttp.responseText)
            var entradas = ``;

            tabela.forEach(tabela => {
                entradas += `<tr>`
                entradas += `<td style="width:11vw">${tabela['codigo']}</td>`
                entradas += `<td>${tabela['produto']}</td>`
                entradas += `<td style="width:11vw">R$ ${tabela['valor']}</td>`
                entradas += `</tr>`
                
            });
        }                
            produto.innerHTML = entradas;

        
    }

    xhttp.open('GET','../controller/getTabela.php');
    xhttp.send();
}

