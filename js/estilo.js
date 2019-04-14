function hover(x, op, tp) {
    if (tp === "MV") {
        switch (op) {
            case 1:
            {
                x.style = "color: #6b747e;";
                break;
            }
            case 2:
            {
                x.style = "color: #222222;";
                break;
            }
            case 3:
            {
                x.style = "background-color: #4a69a8; border-radius:20px;\n\
                                color: #dddddd; text-transform: capitalize;";
                break;
            }
        }
    } else if (tp === "OT") {
        switch (op) {
            case 1:
            {
                x.style = "color: #46586c;";
                break;
            }
            case 2:
            {
                x.style = "color: #777777;";
                break;
            }
            case 3:
            {
                x.style = "color: #777777;";
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