function is_cpf (c) {

    if((c = c.replace(/[^\d]/g,"")).length != 11)
      return false;

    if (c == "00000000000")
      return false;

    var r;
    var s = 0;

    for (i=1; i<=9; i++)
      s = s + parseInt(c[i-1]) * (11 - i);

    r = (s * 10) % 11;

    if ((r == 10) || (r == 11))
      r = 0;

    if (r != parseInt(c[9]))
      return false;

    s = 0;

    for (i = 1; i <= 10; i++)
      s = s + parseInt(c[i-1]) * (12 - i);

    r = (s * 10) % 11;

    if ((r == 10) || (r == 11))
      r = 0;

    if (r != parseInt(c[10]))
      return false;

    return true;
  }

  $(document).ready(function() {

    $('#data_nascimento').mask('00/00/0000');

    $('#cpf').blur(function(){

         let cpf = $("#cpf").val();
         let  valida = is_cpf(cpf);
         if(valida){
            /// alert("cpf válido");
         }else{
            $("#cpf").val("");
             alert("CPF inválido");

         }

    });

 });
