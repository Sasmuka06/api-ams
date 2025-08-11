<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>revisao de Javascript<h1>
        <script>
            const nome = "Samuel"
            var numero = 11
            let idade = 35
            let meninas = 
            [
                "Luana",
                "Maryellen",
                "Maria Eduarda",
                "Maria Clara",
                "Manuela",
                "Nathally",
                "Shadenis"
            ]
            for (let i = 0; i < meninas.length; i++) 
            {
                document.write(meninas[i] + "<br/>")
                
            }

            let marcelo = {
                "Nome"   :  "Marcelo",
                "Idade"  :  "17",
                "Peso"   :  "62",
                "Altura" :  "1,79" 
            }

            let pedro = 
            {
                "Nome"  :  "pedro",
                "Idade" :   "31",
                "Peso"  :   "70",
                "Altura":   "1.76",
            }

            let yago = 
            {
                "Nome"  :  "yago",
                "Idade" :   "17",
                "Peso"  :   "65",
                "Altura":   "1.64",
            }

            let meninos = [ marcelo, pedro, yago]
            for (let i = 0;  < meninos.length; i++) {
               document.write(meninos[i] + "<br/>")
                
            }

            </script>
</body>
</html>