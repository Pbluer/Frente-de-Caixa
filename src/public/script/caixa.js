function reiniciar(){
    
    xhttp.onreadystatechange = () => {
        
        if(xhttp.readyState === 4 && xhttp.status == 200){
            document.location.reload(true);
        }
    }

    xhttp.open('GET','../controller/reiniciar.php');
    xhttp.send();
    
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
                    window.location.reload();
                }               
            }

    xhttp.open('POST','../controller/codigoDeBarra.php');
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send('codigo-de-barra=' + encodeURIComponent(codigoDeBarra));
};

function valorTabela(){

    let total = document.getElementById('total');

    xhttp.onreadystatechange = () => {

        if(xhttp.readyState == 4 && xhttp.status === 200){
            var valorTotal = parseInt(xhttp.responseText);
            total.innerHTML = `R$ ${valorTotal}`;            
        }
    }

    xhttp.open('GET','../controller/valorTabela.php');
    xhttp.send();
}

function carregarTabela(){
    const produto = document.getElementById('produtos');
    
    xhttp.onreadystatechange = () =>{

        if(xhttp.readyState === 4 && xhttp.status == 200){
            var tabela = JSON.parse(xhttp.responseText)
            var entradas = ``;
            var valor = [];            

            tabela.forEach(tabela => {
                entradas += `<tr>`
                entradas += `<td style="width:11vw">${tabela['codigo']}</td>`
                entradas += `<td>${tabela['produto']}</td>`
                entradas += `<td style="width:11vw">R$ ${tabela['valor']}</td>`
                entradas += `</tr>`
                valor.push(tabela['valor']);                
            });

            produto.innerHTML = entradas;          
        }         
          
    }

    xhttp.open('GET','../controller/getTabela.php');
    xhttp.send();
}

window.onload = () =>{
    carregarTabela();
}

