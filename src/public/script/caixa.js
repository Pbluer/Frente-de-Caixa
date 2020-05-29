const produto = document.getElementById('produtos');

function codigoDeBarra(){

    const codigoDeBarra = document.getElementById("codigo-de-barra").value;   

    xhttp.onreadystatechange = () =>{

            if(xhttp.readyState === 4 && xhttp.status == 200){

                    document.location.reload(true);
                    console.log('Item adicionado')

                }               
            }
        

    xhttp.open('POST','../database/codigoDeBarra.php');
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send('codigo-de-barra=' + encodeURIComponent(codigoDeBarra));
};


window.onload = () =>{
    
    xhttp.onreadystatechange = () =>{

        if(xhttp.readyState === 4 && xhttp.status == 200){
            var tabela = JSON.parse(xhttp.responseText)
            var entradas = ``;

            tabela.forEach(tabela => {
                entradas += `<tr>`
                entradas += `<td>${tabela['codigo']}</td>`
                entradas += `<td>${tabela['produto']}</td>`
                entradas += `<td>R$ ${tabela['valor']}</td>`
                entradas += `</tr>`
                
            });
            }                
            produto.innerHTML = entradas;
        }

    xhttp.open('GET','../database/getTabela.php');
    xhttp.send();
}

