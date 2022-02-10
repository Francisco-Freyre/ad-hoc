window.addEventListener('load', function(){
    $('.portfolio-link').on('click', function(){
        let seleccionado = $(this);
        let imagen = seleccionado.data('pic');
        $('#titulo').text(seleccionado.data('titulo'));
        $('#descripcion').text(seleccionado.data('texto'));
        $('#imagen').replaceWith(`<img id="imagen" class="img-fluid d-block mx-auto" src="/storage/`+imagen+`" />`);
    });

});