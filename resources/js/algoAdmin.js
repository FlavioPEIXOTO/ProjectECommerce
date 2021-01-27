function code_activ(code){
    for (i=0; i < 5; i++){
        for (j=0; j<4; j++){
            nbr = Math.floor(Math.random() * 10);
            nbr.toString();
            code += nbr;
        }
        if (i !=4){
            code+="-";
        }
    }
    return code;
}