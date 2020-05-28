var xhttp = new XMLHttpRequest;


function xmlHttpPost(url,callback,params =''){
    
    xhttp.onreadystatechange = callback;

    xhttp.open('POST',url+'.php',true)

    xhttp.send(params)
}