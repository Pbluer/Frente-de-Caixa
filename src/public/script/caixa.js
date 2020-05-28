
function teste(){

    const codigoDeBarra = document.getElementById("codigo-de-barra").value;

    xhttp.onreadystatechange = () =>{        

            if(xhttp.readyState === 4 && xhttp.status == 200){
                var tabela = JSON.parse(xhttp.responseText)
                console.log(tabela)
            }
        }

    xhttp.open('POST','../database/codigoDeBarra.php');
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send('codigo-de-barra=' + encodeURIComponent(codigoDeBarra));
}