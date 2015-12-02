$(function(){
    
    /**
     * Retira o evento de click, depois do primeiro click, do botão de cadastro de formulários
     * assim só é registrado um formulário quando o usuário clica várias vezes no botão cadastrar.
    */
    $('.j_cadastar').click(function(){
        $(this).unbind('click');
    });
    
    // Eventos dos checkbox da lista de formulários
    
    $('.j_cadastar').click(function(){
        $(this).unbind('click');
    });
});