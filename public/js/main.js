function countLetters(){
    let name = $('#addproduct_name').val();
    let description = $('#addproduct_description').val();

    $('#name_text_limit').html('<div>'+name.length+'/150</div>');
    $('#description_text_limit').html('<div>'+description.length+'/1500</div>');

    description = description.replace(/\n/g,'-n');

    $('#addproduct_description').next().val(description);
}

$('#register_btn').click(function(){
    let fields = [
        {'name':'name','validation':['alpha','blank']},
        {'name':'last_name','validation':['alpha','blank']},
        {'name':'email','validation':['@','blank']},
        {'name':'country','validation':[]},
        {'name':'password','validation':['password','blank']},
        {'name':'password_confirmation','validation':['same:password','blank']},
    ]

    let form = '#'+$(this).closest("form").attr('id');
    let $validator = Validation(form,fields);

    if(!$validator.fail){
        $(form).submit();
    }
});

$('#home_register_btn').click(function(){
    $('#home_register').slideDown();
    $('#home_login').fadeOut();
});

$('#home_login_btn').click(function(){
    $('#home_login').slideDown();
    $('#home_register').fadeOut();
});

function Validation(_form,_fields,_name_id){
    let error_messages = [];
    let fail;

    _name_id == null ? _name_id = '':false;
    // Fields Foerch Validation

    $.each(_fields, function(index,field){
        let field_value = $(_form + ' input[name=' + field.name + _name_id +']').val();
        $.each(field.validation, function(index,validation){
            // Regex Validations
            if(!validation.indexOf('blank')){
                field_value == "" ? error_messages[field.name] = ('No puedes dejar este campo vacio.'):false;
            }else if (!validation.indexOf('alpha')){
                !(/^[a-zA-Z\s]+$/).test(field_value) ? error_messages[field.name] = 'El campo '+field.name+' solo admite letras.':false;
            }else if (!validation.indexOf('number')){
                let range = validation.split(':')[1];
                if(range){
                    let min  = range.split('-')[0];
                    let max = range.split('-')[1];
                    if(max){
                        let regex = new RegExp("^[0-9]{"+min+","+max+"}$");
                        !regex.test(field_value) ? error_messages[field.name] = ('El campo '+field.name+' solo admite numeros con ('+min+'-'+max+') digitos.'):false;
                    }else{
                        let regex = new RegExp("^[0-9]{"+min+"}$");
                        !regex.test(field_value) ? error_messages[field.name] = ('El campo '+field.name+' solo admite numeros con ('+min+') digitos.'):false;
                    }

                }else{
                    !(/^[0-9]$/).test(field_value) ? error_messages[field.name] = ('El campo '+field.name+' solo admite numeros.'):false;
                }

            }else if (!validation.indexOf('@')){
                !(/^\w.+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/).test(field_value) ? error_messages[field.name] = ('Coloca un email valido.'):false;
            }else if (!validation.indexOf('password')){
                !(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-,.]).{6,}$/).test(field_value) ? error_messages[field.name] = ('La contraseña debe tener al menos 6 caracteres, una letra mayuscula, una letra minuscula, un numero y un caracter especial #?!@$%^&*-,.'):false;
            }else if (!validation.indexOf('same')){
                let comparison_field  = validation.split(':')[1];
                let field_comparison_value = $(_form + ' input[name=' + comparison_field + _name_id +']').val();
                field_value != field_comparison_value  ? error_messages[field.name] = ('Los campos '+field.name+' y '+comparison_field+' no son iguales.'):false;
            }else if (!validation.indexOf('date')){
                if(field_value != null){
                    let comparisson = validation.split(':')[1];
                    let date1 = new Date();
                    date1.setHours(0,0,0,0);
                        let list_date = field_value.split('-');
                        let date2 = new Date(list_date[1]+'-'+list_date[2]+'-'+list_date[0]);
                        date2.setHours(0,0,0,0);

                    if(comparisson == '='){
                        date1 == date2 ? error_messages[field.name] = ('Ingresar una fecha valida'):false;
                    }else if(comparisson == '>'){
                        date2 > date1 ? true:error_messages[field.name] = ('Ingresar una fecha valida');
                    }
                    else if(comparisson == '<'){
                        date2 < date1 ? true:error_messages[field.name] = ('Ingresar una fecha valida');
                    }
                    else if(comparisson == '<='){
                        date2 <= date1 ? true:error_messages[field.name] = ('Ingresar una fecha valida');
                    }
                    else if(comparisson == '>='){
                        date2 >= date1  ? true:error_messages[field.name] = ('Ingresar una fecha valida');
                    }
                }
            }else if (!validation.indexOf('isFile')){
                $(_form + ' input[name=' + field.name + _name_id +']')[0].files.length == 0? error_messages[field.name] = ('Debes cargar un archivo.'):false;
            }else if (!validation.indexOf('isSelect')){
                field_value = $('select[name='+field.name+']').val();
                field_value == 0? error_messages[field.name] = {msg:'Debes Seleccionar una opción.',type:'select'}:false;
                // field_value == 0? error_messages[field.name.type] = 'select':false;
            }

        });
    });


    //Clear Messages
    $.each(_fields, function(index,field){
        if(field.validation == 'isSelect'){
            $('select[name=' + field.name + _name_id +']').hasClass('border-red-600')? $('select[name=' + field.name + _name_id +']').removeClass('border-red-600'):false;
            $('select[name=' + field.name + _name_id +']').next().is("h3") ? $('select[name=' + field.name + _name_id +']').next().remove():false;
        }else{
            $(_form + ' input[name=' + field.name + _name_id +']').hasClass('border-red-600')? $(_form + ' input[name=' + field.name + _name_id +']').removeClass('border-red-600'):false;
            $(_form + ' input[name=' + field.name + _name_id +']').next().is("h3") ? $(_form + ' input[name=' + field.name + _name_id +']').next().remove():false;
        }

    });

    //Show Messages

    $.each(Object.keys(error_messages), function(index,input_name){
        if(typeof error_messages[input_name] === 'object'){
            $('select[name=' + input_name + _name_id +']').hasClass('border-gray-300')? $('select[name=' + input_name + _name_id +']').removeClass('border-gray-300'):false;
            $('select[name=' + input_name + _name_id +']').addClass('border-red-600');
            $('select[name=' + input_name + _name_id +']').after('<h3  class="text-xs text-red-500 p-1">'+error_messages[input_name].msg+'</h3>');
        }else{
            $(_form + ' input[name=' + input_name + _name_id +']').hasClass('border-gray-300')? $(_form + ' input[name=' + input_name + _name_id +']').removeClass('border-gray-300'):false;
            $(_form + ' input[name=' + input_name + _name_id +']').addClass('border-red-600');
            $(_form + ' input[name=' + input_name + _name_id +']').after('<h3  class="text-xs text-red-500 p-1">'+error_messages[input_name]+'</h3>');
        }
    });


    Object.keys(error_messages).length > 0 ? fail = true:fail = false;

    return({'fail':fail,'error_messages':error_messages});
}


// Reloading animation
$('body').on('click','.wait', function(){
    LoadingAnimation(this,'loading');
});

function LoadingAnimation(_this,_status,_text){
    let html_loading =
        '<div role="status">'+
            '<svg aria-hidden="true" class="w-5 h-5 mr-2  animate-spin text-blue-950 fill-white" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">'+
                '<path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>'+
                '<path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>'+
            '</svg>'+
        '</div>';
        _text ?
        html_loading += _text:
        html_loading += 'Cargando';

    let html_success;
        _text ?
        html_success += _text:
        html_success += 'Todo Listo';

    let html_fail;
    _text ?
    html_fail += '<h3 class="text-xs text-red-500 w-28">'+_text+'</h3>':
    html_fail += '<h3 class="text-xs text-red-500 w-28">Lo sentimos error de conexión, intenta de nuevo mas tarde</h3>';

    console.log(_this);
    console.log(html_loading);
    _status == 'loading'? $(_this).html(html_loading):false;
    _status == 'success'? $(_this).html(html_success):false;
    _status == 'fail'? $(_this).after(html_fail):false;
}

// Upload button
$('body').on('click','.upload', function(){
    const input_file  = $(this).nextAll('input').first().focus();
    input_file.click();
    const button = $(this);
    $(input_file).change(function(){
        const filename = (this).files[0].name;
        // this.value = "";
        button.next('h3') ? button.next('h3').html(''):false;
        button.after('<h3 class="text-xs font-bold">'+filename+'</h3>');
    });

});

// Rate Us
$('.star').click(function(){
    let star_rating = $(this).parent().next('input').attr('id').split('_')[1];
    let star_id = $(this).parent().next('input').attr('id').split('_')[0];
    let form = $(this).closest("form")[0];

    $("#"+form.id+" :input").each(function(){
        if(this.id.indexOf(star_id) == 0){
            $('label[for="'+this.id+'"]').children('svg').hasClass('text-yellow-500')?
            $('label[for="'+this.id+'"]').children('svg').addClass('text-gray-400'):
            false;

            $('label[for="'+this.id+'"]').children('svg').hasClass('text-yellow-500')?
            $('label[for="'+this.id+'"]').children('svg').removeClass('text-yellow-500'):
            false;
        }
    });


    $("#"+form.id+" :input").each(function(){
        if(this.id.indexOf(star_id) == 0){
            let inputs_id = this.id.split('_')[1];
            inputs_id <= star_rating?
            $('label[for="'+this.id+'"]').children('svg').hasClass('text-yellow-500')?true:
            $('label[for="'+this.id+'"]').children('svg').toggleClass('text-gray-400 text-yellow-500'):
            false;
        }
    });
});
