function hover(x, op, tp) {
    //recebe 3 parametros, o x = o elemento, op é a opção
    //do mouse entrando ou saindo
    if (tp === "MV") {
        //define o tipo como mouse move, mouse em cima
        switch (op) {
            //seleciona a opção de efeito
            case 1:
            //opção 1 é para o sombreamento das opções do menu
            {
                x.style = "color: #6b747e;";
                break;
            }
            case 2:
            //opção dois é para o efeito dod links no rodapé
            {
                x.style = "color: #222222;";
                break;
            }
            case 3:
            //opção três é para o efeito do logo do facebook
            {
                x.style = "background-color: #4a69a8; border-radius:20px;";
                document.getElementById("linkFaceCic").style="color: #dddddd";
                document.getElementById("logoFace").src="img/fbwhite.png";
                break;
            }
        }
    } else if (tp === "OT") {
        //define o tipo com OUT ou seja mouse fora
        switch (op) {
            //seleciona a opção de efeito
            case 1:
            //opção 1 é para o sombreamento das opções do menu
            {
                x.style = "color: #46586c;";
                break;
            }
            case 2:
            //opção dois é para o efeito dod links no rodapé
            {
                x.style = "color: #777777;";
                break;
            }
            case 3:
            //opção três é para o efeito do logo do facebook
            {
                document.getElementById("logoFace").src="img/fb.png";
                document.getElementById("linkFaceCic").style="#333333";
                x.style = "color: #777777;";
                x.src="img/fb.png";
                break;
            }
        }
    }
}
function overButton(bt, op){
    if(op === 'in'){
        bt.style = "background-color: #FF9708;";
    }else if(op === 'out'){
        bt.style = "background-color: rgba(255, 165, 56, 1);";
    }
}