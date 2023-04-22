function sobre() {
    function enviarFormulario(e){
        e.preventDefault();
        //Fazer requisição no back-end e enviar o formulário!
        //Recuperar valores do input.

        let nome = document.getElementById('nome').value;
        let email = document.getElementById('email').value;
        let mensagem = document.getElementById('mensagem').value;

        const requestOptions = {
            method:'POST',
            headers:{'Content-Type:':'application/json'},
            body: JSON.stringify({nome:nome,email:email,mensagem:mensagem})
        }
        
        fetch('http://localhost/nextjsapi/requisicao.php',requestOptions)
        .then(response=>response.json())
        .then(data=>{
            console.log(data);
        })

        alert(nome);
    }

    return <div>
        <style jsx global>{`
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        .body{
            background-color:rgb(225,255,225)
        }

        form{
            width:40%;
            max-width:500px;
            position:absolute;
            left:50%;
            top:50%;
            transform:translate(-50%,-50%);
            padding:20px;
            background-color:white;
        }

        input[type=text],input[type=email]{
            width:100%;
            height:40px;
            display:block;
            margin-bottom:15px;
            font-size:14px;
            border:1px solid #ccc;
            padding-left:10px;
        }

        textarea{
            width: 100%;
            height: 120px;
            display:block;
            margin-bottom: 15px;
            font-size:14px;
            border:1px solid #ccc;
            padding:10px;
        }

        input[type=submit]{
            width: 100%;
            height:40px;
            background-color:#069;
            color:white;
            border:0;
            cursor:pointer;
        }

        form h2{
            text-align:center;
            padding:10px 0;
            color:#069;
        }

      `}</style>
        <form onSubmit={(e)=>enviarFormulario(e)}>
            <h2>Entrar em contato...</h2>
            <input id="nome" placeholder="Seu nome..." type="text" />
            <input id="email" placeholder="Seu e-mail..." type="text" />
            <textarea id="mensagem" placeholder="Sua mensagem..."></textarea>
            <input type="submit" />
        </form>
    </div>
}

export default sobre