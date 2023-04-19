<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me livra da Maldição</title>
</head>
<body>
    <h1 id="titulo">
    O emblema do rei
    </h1>
    <p id="paragrafo">Vamos tentar nos livrar da maldição</p>
</body>
<script>

    let _titulo = document.getElementById("titulo")
    var escuro = false

    _titulo.addEventListener("click", function(){
        
        escuro = !escuro
        console.log(escuro)
        if(escuro == true){
        _titulo.style.backgroundColor = "#555" 
    } else{
        _titulo.style.background = "#fff"
    }
    })

    

</script>
</html>