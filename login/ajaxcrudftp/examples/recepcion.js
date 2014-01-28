function init(){
    $('#vAddRecepcion').click(function(){
        adicionarRecepcion();      
    });     
    
    $('#cant').keyup(function(e) {
        if (e.keyCode == 13){
          adicionarRecepcion(); 
        }  
    });
    
    $('.recepcionDel').click(function(){
        eliminarRecepcion($(this).attr('alt'));      
    }); 
       
    $('#date').removeClass('hasDatepicker');
    $('#date').datepicker({
        dateFormat: 'yy-mm-dd',
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic']
    });
    
    $('#busq_inicio').removeClass('hasDatepicker');
    $('#busq_inicio').datepicker({
        dateFormat: 'yy-mm-dd',
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic']
    });
    
    $('#busq_fin').removeClass('hasDatepicker');
    $('#busq_fin').datepicker({
        dateFormat: 'yy-mm-dd',
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
        monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic']
    });
    
    var codigo;
    $('#auto').keyup(function(){
        codigo = $(this).val();
        seleccionarPorCodigo(codigo)
    });
    
    var alterno;
    $('#alterno').keyup(function(){
        alterno = $(this).val();
        seleccionarPorAlterno(alterno)
    });
    
    $('#auto').focus();
}

function actualizarVistaRecepciones(contenido){
    var mi_html = "";
    mi_html  = "<tr>"+$("#tabRecepciones tr:eq(0)").html()+"</tr>";
    mi_html += "<tr>"+$("#tabRecepciones tr:eq(1)").html()+"</tr>";
    mi_html += contenido;
    $("#tabRecepciones").html(mi_html);
    init();
}

function eliminarRecepcion(id){
    if(confirmDelete()){
        var recepcion = $('#recepcion').val();
        if(id != ''){
            $.ajax({
                type: "POST",
                url: "http://www.proalba.com.co/innmilk/operacion/recepcion/eliminar-recepcion/",
                data: {
                    id: id,
                    recepcion: recepcion
                },
                cache: false
            }).done(function(response) {
                actualizarVistaRecepciones(response);
            });                
        }  
    }
}

function adicionarRecepcion(){
    var recepcion = $('#recepcion').val();
    var estados = $('#estados').val();
    var cant = $('#cant').val();
//    if(estados != '' && cant != ''){
        $.ajax({
            type: "POST",
            url: "http://www.proalba.com.co/innmilk/operacion/recepcion/adicionar-recepcion/",
            data: {
                recepcion: recepcion,
                estados: estados, 
                cant: cant
            },
            cache: false,
            success: function(data, status, xhr){if(xhr.getResponseHeader("OK") != 'OK'){
                            alert(xhr.getResponseHeader("OK"));
                    } 
            }
        }).done(function(response) {
            
            actualizarVistaRecepciones(response);
        });                
//    }     
}

function seleccionarPorCodigo(texto){
    var texto_select;
    var value_select;
    var array_texto;
    if(texto.length >= 2){
        $("#estados option").each(function(){
            $(this).attr('selected', false);
        });
        
        $("#estados option").each(function(){
            texto_select = $(this).text();
            value_select = $(this).val();
            
            if(value_select != ''){
                array_texto = texto_select.split(' - ');
                if(array_texto[0] == texto){
                    console.log(value_select);
                    $(this).attr('selected', true); 
                    $("#estados").val(value_select);
                }
            }
        });
    }
}

function seleccionarPorAlterno(texto){
    var texto_select;
    var value_select;
    var array_texto;
    if(texto.length >= 2){
        $("#estados option").each(function(){
            $(this).attr('selected', false);
        });
        
        $("#estados option").each(function(){
            texto_select = $(this).text();
            value_select = $(this).val();
            
            if(value_select != ''){
                array_texto = texto_select.split(' - ');
                if(array_texto[0] == texto){
                    console.log(value_select);
                    $(this).attr('selected', true); 
                    $("#estados").val(value_select);
                }
            }
        });
    }
}

function confirmDelete() {
    return confirm('Esta seguro de eliminar el registro?');
}

$(document).ready(function(){	
    init(); 
});