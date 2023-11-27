//Variables
let agency_table = {
    '1':{
        'type':1,
        'agency':'',
        'departamento':'Guatemala',
        'municipio':'Cda Guatemala',
        'address':''
    },
    '2':{
        'type':2,
        'agency':'Agencia Zona 10',
        'departamento':'Guatemala',
        'municipio':'Cda Guatemala',
        'address':'5ta. Avenida 15-45 Zona 10 Edificio Centro Empresarial'
    },
    '3':{
        'type':3,
        'agency':'Agencia El Dorado',
        'departamento':'Guatemala',
        'municipio':'Mixco',
        'address':'Blvd San Cristobal Centro Comercial El Dorado Zona 8'
    },
    '4':{
        'type':4,
        'agency':'Agencia Chiquimula',
        'departamento':'Chiquimula',
        'municipio':'Chiquimula',
        'address':'10a avenida 4-70 zona 1'
    },
    '5':{
        'type':5,
        'agency':'Agencia Quetzaltenango',
        'departamento':'Quetzaltenango',
        'municipio':'Quetzaltenango',
        'address':'Dirección Agencia Quetzaltenango'
    }
}

// General Functions

// Visibility Scripts
function QuoterNavColor(_quoter){
    let color_1 = 'blue';
    let color_2 = 'green';
    let color_3 = 'red';
    let color;

    _quoter == 'cn' ? color = color_1:false;
    _quoter == 'mg' ? color = color_2:false;
    _quoter == 'cg' ? color = color_3:false;

    // Selected
    $('#home_'+_quoter+'_title').addClass('bg-'+color+'-500');
    $('#home_'+_quoter+'_title').addClass('text-'+color+'-100');
    $('#home_'+_quoter+'_title').removeClass('text-'+color+'-700');

    let quoters = ['cn','mg','cg'];

    // Not Selected
    $.each(quoters, function(index,quoter){
        if(quoter != _quoter){
            quoter == 'cn' ? color = color_1:false;
            quoter == 'mg' ? color = color_2:false;
            quoter == 'cg' ? color = color_3:false;
            $('#home_'+quoter+'_title').removeClass('bg-'+color+'-500');
            $('#home_'+quoter+'_title').addClass('text-'+color+'-700');
            $('#home_'+quoter+'_title').removeClass('text-'+color+'-100');
        }
    });
}

function QuoterDivVisibility(_quoter,_templates,_visibility){
    let id;
    $('.home_quoters_base').hide();

    $.each(_templates, function(index,template){
        template == 0 ? id = 'home_'+_quoter+'_base_div':false;
        template == 1 ? id = 'home_'+_quoter+'_location_package_div':false;
        template == 2 ? id = 'home_'+_quoter+'_quotation':false;
        template == 3 ? id = 'home_'+_quoter+'_order':false;
        template == 4 ? id = 'home_'+_quoter+'_osc':false;
        template == 5 ? id = 'home_'+_quoter+'_success':false;
        $('#'+id).fadeIn(400);
    });
    clearQuoters();
}

function QuoterPackageVisibility(_quoter,_action){
    _action ? $('#home_'+_quoter+'_package_div').animate({height:_action}):
    $('#home_'+_quoter+'_package_div').animate({height:'show'});
}

function clearQuoters(){
    $('#home_cn_origin_select').val(0);
    $('#home_cn_destination_select').val(0);

    $('#home_mg_service_select').val(1);
    $('#home_mg_link').val('');
    $('#home_mg_price').val('');
    $('#home_mg_shipping').val('');
    $('#home_mg_weight').val('');
    $('#home_mg_description').val('-');
    $('#home_mg_premier').val('');
    $('#home_mg_prepaid').val('');

    $('#home_cg_service_select').val(1);
    $('#home_cg_link').val('');
    $('#home_cg_price').val('');
    $('#home_cg_shipping').val('');
    $('#home_cg_weight').val('');
    $('#home_cg_description').val('-');
    $('#home_cg_premier').val('');
    $('#home_cg_prepaid').val('');

    $('#home_mg_conditions_order_div').animate({ height: 'hide'});
    $('#home_cg_conditions_order_div').animate({ height: 'hide'});


    input_price, input_shipping , input_weight= undefined;
    input_description = '-';
    input_premier, input_prepaid = undefined;
    cleanQuotationMg();
    cleanQuotationCg();
}

// National
$('#home_cn_title').click(function(){
    // Change Location Visibility
    QuoterDivVisibility('cn',[0,1]);
    // Selected Color
    QuoterNavColor('cn');
});

$('#home_cn_origin_select').change(function(){
    // Change Package Visibility
    $('#home_cn_origin_select').val() != 0 &&
    $('#home_cn_destination_select').val() != 0 ?
    QuoterPackageVisibility('cn'):
    QuoterPackageVisibility('cn','hide');
});

$('#home_cn_destination_select').change(function(){
    // Change Package Visibility
    $('#home_cn_origin_select').val() != 0 &&
    $('#home_cn_destination_select').val() != 0 ?
    QuoterPackageVisibility('cn'):
    QuoterPackageVisibility('cn','hide');
});

// Miami
$('#home_mg_title').click(function(){
    // Change Location Visibility
    QuoterDivVisibility('mg',[0,1]);
    QuoterPackageVisibility('mg');
    // Selected Color
    QuoterNavColor('mg');
});

// China
$('#home_cg_title').click(function(){
    // Change Location Visibility
    QuoterDivVisibility('cg',[0,1]);
    QuoterPackageVisibility('cg');
    // Selected Color
    QuoterNavColor('cg');
});


// Form Scripts
// National Quoter Script
function setPackage(_nmbr,_type,_fr,_dg,_ps,_pr){
    let set_package =
        '<div class="bg-gray-100 rounded-xl w-8/12 mx-auto p-5 items-center">'+
            '<h3 class="ml-36 font-bold text-center sm:text-left">Paquete # '+_nmbr+'</h3>'+
            '<div class="flex">'+
                '<div class="ml-36 w-96">'+
                    '<img class="w-14 h-10 mx-auto" src="../images/Home/box'+_type+'.png" alt="">'+
                    '<div class="text-center font-bold">'+
                        '<h3 class="text-blue-950 text-sm lg:text-md">(';
                            _type == 1 ? set_package += '28-36cm)</h3>':false;
                            _type == 2 ? set_package += '36-47cm)</h3>':false;
                            _type == 3 ? set_package += '47-51cm)</h3>':false;
                            _type == 4 ? set_package += '+51cm)</h3>':false;
                            set_package +=
                        '<h3 class="text-blue-950 text-sm lg:text-md">(';
                            _type == 1 ? set_package += '1-10lb)</h3>':false;
                            _type == 2 ? set_package += '20.1-40lb)</h3>':false;
                            _type == 3 ? set_package += '40.1-50lb)</h3>':false;
                            _type == 4 ? set_package += '+50.1lb)</h3>':false;
                            set_package +=
                    '</div>'+
                '</div>'+
                '<div class="ml-16 mx-auto grid lg:gap-x-36 grid-cols-2 sm:grid-cols-4 text-center items-center text-xs md:text-sm font-bold ">'+
                    '<div class="w-fit">'+
                        '<h3>Fragil</h3>';
                        if(_fr){
                            set_package +=
                            '<svg class="mt-5 sm:mt-0 w-4 h-4 mx-auto text-lime-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">'+
                                '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>'+
                            '</svg>';
                        }else{
                            // set_package +=
                            // '<svg class="w-4 h-4 mx-auto text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">'+
                            //     '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>'+
                            // '</svg>';
                        }
                        set_package +=
                    '</div>'+
                    '<div class="w-fit">'+
                        '<h3>Contenido Peligroso</h3>';
                        if(_dg){
                            set_package +=
                            '<svg class="mt-5 sm:mt-0 w-4 h-4 mx-auto text-lime-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">'+
                                '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>'+
                            '</svg>';
                        }else{
                            // set_package +=
                            // '<svg class="w-4 h-4 mx-auto text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">'+
                            //     '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>'+
                            // '</svg>';
                        }
                        set_package +=
                    '</div>'+
                    '<div class="w-fit">'+
                        '<h3>Perecedero</h3>';
                        if(_ps){
                            set_package +=
                            '<svg class="mt-5 sm:mt-0 w-4 h-4 mx-auto text-lime-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">'+
                                '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>'+
                            '</svg>';
                        }else{
                            // set_package +=
                            // '<svg class="w-4 h-4 mx-auto text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">'+
                            //     '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>'+
                            // '</svg>';
                        }
                        set_package +=
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div>';

    $('#home_cn_set_packages').append(set_package);
};

let n = 2;
function addPackage() {

    let add_package =
                    '<div class="bg-white border-t h-fit p-5">'+
                        '<h3 class="text-blue-600 font-bold">Paquete # '+n+'</h3>'+
                        '<div class="lg:flex">'+
                            '<div class="mx-auto grid gap-4 grid-cols-2 sm:gap-x-10 md:grid-cols-4">'+
                                '<div class="text-center">'+
                                    '<img class="w-14 h-10 mx-auto" src="../images/quoter/box1.png" alt="">'+
                                    '<div class="items-center xl:grid xl:grid-cols-3 xl:gap-0">'+
                                        '<h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">Paquete</h3>'+
                                        '<h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(28-36cm)</h3>'+
                                        '<h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(1-10lb)</h3>'+
                                    '</div>'+
                                    '<input name="pk_'+n+'_1" class="rounded-sm" type="checkbox" checked>'+
                                '</div>'+
                                '<div class="text-center">'+
                                    '<img class="w-14 h-10 mx-auto" src="../images/quoter/box2.png" alt="">'+
                                    '<div class="items-center xl:grid xl:grid-cols-3 xl:gap-0">'+
                                        '<h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">Paquete</h3>'+
                                        '<h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(36-47cm)</h3>'+
                                        '<h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(20.1-40lb)</h3>'+
                                    '</div>'+
                                    '<input name="pk_'+n+'_2" class="rounded-sm" type="checkbox">'+
                                '</div>'+
                                '<div class="text-center">'+
                                    '<img class="w-14 h-10 mx-auto" src="../images/quoter/box3.png" alt="">'+
                                    '<div class="items-center xl:grid xl:grid-cols-3 xl:gap-0">'+
                                        '<h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">Paquete</h3>'+
                                        '<h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(47-51cm)</h3>'+
                                        '<h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(40.1-50lb)</h3>'+
                                    '</div>'+
                                    '<input name="pk_'+n+'_3" class="rounded-sm" type="checkbox">'+
                                '</div>'+
                                '<div class="text-center">'+
                                    '<img class="w-14 h-10 mx-auto" src="../images/quoter/box4.png" alt="">'+
                                    '<div class="items-center xl:grid xl:grid-cols-3 xl:gap-0">'+
                                        '<h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">Paquete</h3>'+
                                        '<h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(+51cm)</h3>'+
                                        '<h3 class="text-blue-900 text-sm font-bold whitespace-nowrap">(+50.1lb)</h3>'+
                                    '</div>'+
                                    '<input name="pk_'+n+'_4" class="rounded-sm" type="checkbox">'+
                                '</div>'+
                            '</div>'+
                            '<div class="mx-auto mt-5 font-bold ml-5 grid grid-cols-3 lg:grid-cols-1 text-center items-end text-sm lg:mt-0">'+
                                '<div class="lg:flex">'+
                                    '<h3 class="lg:hidden">Fragil</h3>'+
                                    '<input name="fr_'+n+'" type="checkbox">'+
                                    '<h3 class="hidden lg:grid lg:ml-4 whitespace-nowrap">Fragil</h3>'+
                                '</div>'+
                                '<div class="lg:flex">'+
                                    '<h3 class="lg:hidden">Contenido Peligroso</h3>'+
                                    '<input name="dg_'+n+'" type="checkbox">'+
                                    '<h3 class="hidden lg:grid lg:ml-4 whitespace-nowrap">Contenido Peligroso</h3>'+
                                '</div>'+
                                '<div class="lg:flex">'+
                                    '<h3 class="lg:hidden">Perecedero</h3>'+
                                    '<input name="ps_'+n+'" type="checkbox">'+
                                    '<h3 class="hidden lg:grid lg:ml-4 whitespace-nowrap">Perecedero</h3>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
    $('#home_cn_package_add').append(add_package);
    n+=1;
};

function addForm(_type,_location,_address,_departamento,_municipio,_quoter){
    let id, location, quoter;

    _location == 'sender' ? location = 'Recolección En:':location = 'Entregar en:';
    let add_form_blank =
        '<h3 class="font-bold text-center">'+location+'</h3>'+
        '<div class="items-center lg:flex lg:space-x-1">'+
            '<h3 class="mr-auto">Cda. Guatemala, Guatemala: </h3>'+
            '<div>'+
                '<input name="address_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text"  placeholder="Dirección">'+
            '</div>'+
        '</div>'+
        '<div class="items-center space-y-2 sm:flex sm:space-x-1 sm:space-y-0">'+
            '<div>'+
                '<input name="name_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text"  placeholder="Nombre">'+
            '</div>'+
            '<div>'+
                '<input name="phone_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text"  placeholder="Telefono">'+
            '</div>'+
        '</div>'+
        '<div class="lg:space-x-1">'+
            '<input name="email_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text" placeholder="Email">'+
        '</div>'+
        '<div class="lg:space-x-1">'+
            '<input name="cui_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text" placeholder="CUI">'+
        '</div>'+
        '<div class="lg:space-x-1">'+
            '<textarea name="comments_'+_location+'" class="rounded-lg w-full p-1 border-gray-200" placeholder="Declara tu Mercadería"></textarea>'+
        '</div>';
        _location == 'sender' ?
            add_form_blank +=
            '<span>Fecha de Recolección</span>'+
            '<input name="date_'+_location+'" class="rounded-lg h-10 mx-1 border-gray-200" type="date">'
            :false;

        // Hora AM - PM
        // '<label class="relative inline-flex items-center cursor-pointer">'+
        // '<input name="time_'+_location+'" type="checkbox" class="sr-only peer" checked>'+
        // '<div class="flex px-2 w-20 h-6 bg-blue-600 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-transparent rounded-lg peer peer-checked:after:translate-x-full peer-checked:after:border-gray-400  after:absolute after:top-[0px] after:left-[0px] after:bg-white after:border-gray-400 after:border after:rounded-full after:h-6 after:w-10 after:transition-all  peer-checked:bg-blue-600">'+
        //     '<span class="mr-auto text-white">AM</span>'+
        //     '<span class="ml-auto text-white">PM</span>'+
        // '</div>'+
        // '</label>'
    let add_form_fill =
        '<h3 class="font-bold text-center">'+location+'</h3>'+
        '<div class="flex space-x-1 items-center">'+
            '<h3 class="mr-auto">'+_municipio+', '+_departamento+': '+_address+'</h3>'+
        '</div>'+
        '<div class="items-center space-y-2 sm:flex sm:space-x-1 sm:space-y-0">'+
            '<div>'+
                '<input name="name_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text"  placeholder="Nombre">'+
            '</div>'+
            '<div>'+
                '<input name="phone_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text"  placeholder="Telefono">'+
            '</div>'+
        '</div>'+
        '<div class="my-2 space-x-1">'+
            '<input name="email_'+_location+'" class="rounded-lg h-10 mx-auto w-full border-gray-200" type="text"  placeholder="Email">'+
        '</div>'+
        '<div class="lg:space-x-1">'+
            '<input name="cui_'+_location+'" class="rounded-lg h-10 w-full border-gray-200" type="text" placeholder="CUI">'+
        '</div>';


    id = "home_"+_quoter+"_order_"+_location+"";
    _type == 'blank'?  $('#'+id).html(add_form_blank):$('#'+id).html(add_form_fill);
};


$('#home_cn_btn_add_package').click(function(){
    addPackage();
    // Only one package checked Reload
    inputs = $('#home_cn_packages_form :input');
    $(inputs).click(function() {
        let name = this.name.split("_");
        $.each(inputs, function(index,checkbox){
            checkbox.name.split("_")[1] == name[1] &&
            name[0] == 'pk' &&
            checkbox.name.split("_")[0] == 'pk'
            ?
            checkbox.checked = false:true;
        });
        name[0] == 'pk' ? this.checked = true:false;
    });
});

// national-quoter-quotation
$('#home_cn_btn_quotation').click(function(){
    // $('#home_cn_packages_form').submit();
    $('#home_cn_packages_form').ajaxSubmit({
        success: function(res, status, xhr, form) {

            QuoterDivVisibility('cn',[0,2]);

            $('#home_cn_span_subtotal').html("SubTotal: Q"+(res.total-res.total*0.12).toFixed(2));
            $('#home_cn_span_iva').html("IVA: Q"+(res.total*0.12).toFixed(2));
            $('#home_cn_span_total').html("Total: Q"+res.total.toFixed(2));
        },
        error: function(res, status, xhr, form){
            console.log(status);
            console.log(xhr);
        }
    });
});

// Terms And Conditions
$('#home_cn_chk_terms').change(function(){
    this.checked ? $('#home_cn_btn_quotation_order').prop('disabled',false):$('#home_cn_btn_quotation_order').prop('disabled',true);
    this.checked ? $('#home_cn_btn_quotation_order').removeClass('opacity-70'):$('#home_cn_btn_quotation_order').addClass('opacity-70');
});

// national-quoter-order
$('#home_cn_btn_quotation_order').click(function(){
    // $('#home_cn_form_quotation_order').submit();
    $('#home_cn_form_quotation_order').ajaxSubmit({
        success: function(res, status, xhr, form) {
            let sender = res[0][0];
            let destination = res[1][0];
            addForm(sender.type,sender.location,sender.address,sender.departamento,sender.municipio,'cn');
            addForm(destination.type,destination.location,destination.address,destination.departamento,destination.municipio,'cn');
            QuoterDivVisibility('cn',[0,3]);
        }
    });
});

// national-order-osc
$('#home_cn_btn_order').click(function(){
    let fields = [
        {'name':'address','validation':['blank']},
        {'name':'name','validation':['alpha','blank']},
        {'name':'phone','validation':['number:8-13','blank']},
        {'name':'email','validation':['@','blank']},
        {'name':'cui','validation':['number:1','blank']},
        {'name':'comments','validation':['blank']},
        {'name':'date','validation':['date:>=','blank']},
    ]

    let form = '#'+$(this).closest("form").attr('id');
    let validator_sender = Validation(form,fields,'_sender');
    let validator_destination = Validation(form,fields,'_destination');

    if(!validator_sender.fail && !validator_destination.fail){
        LoadingAnimation(this,'loading');
        // $('#home_cn_form_order_osc').submit();
        $('#home_cn_form_order_osc').ajaxSubmit({
            success: function(res, status, xhr, form) {
                $('.home_cn_osc_total').text('Total Q'+res.total.toFixed(2));
                QuoterDivVisibility('cn',[0,4])
            },
            error: function(){
                LoadingAnimation(this,'fail');
            }
        });
    }
});

// national-quoter-osc
$('#home_cn_payment_type').change(function(){
    this.value == 0 ? $('#home_cn_payment_blank').show():$('#home_cn_payment_blank').hide();
    this.value == 1 ? $('#home_cn_payment_cc').show():$('#home_cn_payment_cc').hide();
    this.value == 2 ? $('#home_cn_payment_bt').show():$('#home_cn_payment_bt').hide();
    this.value == 3 ? $('#home_cn_payment_agency').show():$('#home_cn_payment_agency').hide();
    this.value == 4 ? $('#home_cn_payment_cod').show():$('#home_cn_payment_cod').hide();
});

$('.invoice_cf').change(function(){
    let fields = [
        {'name':'bill_name'},
        {'name':'bill_address'},
        {'name':'bill_nit'},
    ];

    let form = '#'+$(this).closest("form").attr('id');
    let input_CF = this;

    $.each(fields, function(index,field){
        if(input_CF.checked){
            $(form + ' input[name='+field.name+']').val('');
            $(form + ' input[name='+field.name+']').addClass('opacity-50');
            $(form + ' input[name='+field.name+']').attr('disabled',true);
        }else{
            $(form + ' input[name='+field.name+']').removeClass('opacity-50');
            $(form + ' input[name='+field.name+']').attr('disabled',false);
        }
    });
});

$('#home_cn_btn_osc').click(function(){
    let fields = [
        {'name':'bill_name','validation':['alpha','blank']},
        {'name':'bill_address','validation':['blank']},
        {'name':'bill_nit','validation':['blank']},
        {'name':'payment_cn','validation':['isSelect']},
    ]

    let form = '#'+$(this).closest("form").attr('id');

    $(form + ' input[name=bill_cf]:checked').length ?
    fields = [
        {'name':'bill_name','validation':['']},
        {'name':'bill_address','validation':['']},
        {'name':'bill_nit','validation':['']},
        {'name':'bill_dpi','validation':['blank']},
        {'name':'payment_cn','validation':['isSelect']},
    ]:
    false;

    let validator = Validation(form,fields);

    if(!validator.fail){
        LoadingAnimation(this,'loading');
        // $('#home_cn_form_osc').submit();
        $('#home_cn_form_osc').ajaxSubmit({
            success: function(res, status, xhr, form) {
                $('#home_cn_order_success').text('Orden procesada con exito')
                QuoterDivVisibility('cn',[0,5]);
            }
        });
    }
});


// Only one package checked Initialized
let inputs = $('#home_cn_packages_form :input');
$(inputs).click(function() {
    let name = this.name.split("_");
    $.each(inputs, function(index,checkbox){
        checkbox.name.split("_")[1] == name[1] &&
        name[0] == 'pk' &&
        checkbox.name.split("_")[0] == 'pk'
        ?
        checkbox.checked = false:true;
    });
    name[0] == 'pk' ? this.checked = true:false;
});


//Miami Script

let input_price, input_shipping , input_weight, input_description,
input_premier, input_prepaid, input_volumetric_height, input_volumetric_width
, input_volumetric_depth;
let input_service = 1;
let US = 8.13;
// US = 8.01;
// Select Service(POBOX, Todo Incluido)
$("#home_mg_service_select").change(function(){
    $("#home_mg_service_select").val() == 1 ?
    $("#home_mg_link").parent().animate({height:"hide"}):
    $("#home_mg_link").parent().animate({height:"show"});
    input_service =  parseFloat(this.value);

    $("#home_mg_service_select").val() == 1 ?
    $("#home_mg_commission").parent().animate({height:"hide"}):
    $("#home_mg_commission").parent().animate({height:"show"});

    $("#home_mg_service_select").val() == 1 ?
    $("#home_mg_total_include").parent().animate({height:"hide"}):
    $("#home_mg_total_include").parent().animate({height:"show"});

    $("#home_mg_service_select").val() == 1 ?
    $("#home_mg_total_pobox").parent().animate({height:"show"}):
    $("#home_mg_total_pobox").parent().animate({height:"hide"});
    getQuotationMg();
});

// Miami Quoter JS
function getQuotationMg(){
    if((!isNaN(input_price)) && (!isNaN(input_shipping)) && (!isNaN(input_weight)) && (!isNaN(input_description))){
        let commission = 0;

        input_service == 2 ?
        input_price < 200 ? commission = 15:
        commission = (input_price)*0.12:
        false;

        let exchange_btn = !($('#home_mg_exchange_btn').prop('checked'));
        let exchange = US*exchange_btn + !exchange_btn;
        let premier, prepaid;

        let duca = 0;
        input_price > 999.99 ?
        duca = 1350/US:
        duca = 0;

        let sed = 0;
        input_price > 2500.00 ?
        sed = 75:
        sed = 0;

        input_premier ?  premier = (0.5 * input_weight)*input_premier:premier = 0;
        input_prepaid ?  prepaid = (0.5 * input_weight)*input_prepaid:prepaid = 0;

        let transport = (input_weight *3.7);
        let desaduanaje = (4.5);
        let insurance = ((input_price + transport) * 0.022);
        let services = (transport + desaduanaje);
        let dai = ((input_price + transport + insurance) * (input_description/100));
        let iva = ((input_price + insurance + transport + dai) *0.12);
        let taxes = dai + iva;
        let total_pobox = services + taxes + insurance - premier - prepaid + duca + sed;
        let total_include = input_price + commission + services + taxes + insurance - premier - prepaid + duca + sed;

        let currency;
        exchange_btn ? currency = 'Q':currency = '$';

        $('#home_mg_transport').text(currency+(transport*exchange).toFixed(2));
        $('#home_mg_desaduanaje').text(currency+(4.25*exchange).toFixed(2));
        $('#home_mg_services').text(currency+(services*exchange).toFixed(2));
        $('#home_mg_dai').text(currency+(dai*exchange).toFixed(2));
        $('#home_mg_iva').text(currency+(iva*exchange).toFixed(2));
        $('#home_mg_taxes').text(currency+(taxes*exchange).toFixed(2));
        $('#home_mg_commission').text(currency+(commission*exchange).toFixed(2));
        $('#home_mg_total_pobox').text(currency+(total_pobox*exchange).toFixed(2));
        $('#home_mg_total_include').text(currency+(total_include*exchange).toFixed(2));


        $('#home_mg_conditions_order_div').animate({ height: 'show'});
    }else{
        $('#home_mg_conditions_order_div').animate({ height: 'hide'});
        cleanQuotationMg();
    }
}

// Clean Miami Quoter
function cleanQuotationMg(){
    $('#home_mg_transport').text('0.00');
    $('#home_mg_desaduanaje').text('0.00');
    $('#home_mg_services').text('0.00');
    $('#home_mg_dai').text('0.00');
    $('#home_mg_iva').text('0.00');
    $('#home_mg_taxes').text('0.00');
    $('#home_mg_commission').text('0.00');
    $('#home_mg_total_pobox').text('0.00');
    $('#home_mg_total_include').text('0.00');
}


// Price, Shipping , Weight Keyup Event
$('.home_quotation_keyup').keyup(function() {
    this.id == 'home_mg_price'? input_price =  parseFloat(this.value):false;
    this.id == 'home_mg_shipping'? input_shipping =  parseFloat(this.value):false;
    this.id == 'home_mg_weight'? input_weight =  parseFloat(this.value):false;
    getQuotationMg();
});


// Description, Premier, Prepaid Change Event
$('.home_quotation_change').change(function() {
    this.id == 'home_mg_description'? input_description =  parseFloat(this.value):false;
    this.id == 'home_mg_premier'? input_premier =  this.checked:false;
    this.id == 'home_mg_prepaid'? input_prepaid =  this.checked:false;
    getQuotationMg();
});

// Exchange Button
$("#home_mg_exchange_btn").change(function(){
    getQuotationMg();
});

// Terms And Conditions
$('#home_mg_chk_terms').change(function(){
    this.checked ? $('#home_mg_btn_quotation_order').prop('disabled',false):$('#home_mg_btn_quotation_order').prop('disabled',true);
    this.checked ? $('#home_mg_btn_quotation_order').removeClass('opacity-70'):$('#home_mg_btn_quotation_order').addClass('opacity-70');
});

// miami-quoter-quotation
$('#home_mg_btn_quotation_order').click(function(){
    let fields = [
        {'name':'link','validation':['blank']},
    ]

    let form = '#'+$(this).closest("form").attr('id');
    let validator = Validation(form,fields);

    if(!validator.fail || input_service == 1){
        LoadingAnimation(this,'loading');
        // $('#home_mg_form_packages').submit();
        $('#home_mg_form_packages').ajaxSubmit({
            success: function(res, status, xhr, form) {
                QuoterDivVisibility('mg',[0,3]);
            }

        });
    }
});

// Miami China Html for Destination Form (Address, Name, Phone, Email)
function addFormDestination(_quoter,_agency){
    let form =
        '<div>'+
            '<h3 class="font-bold">'+agency_table[_agency].municipio+','+agency_table[_agency].departamento+': </h3>';
            if(_agency == 1){
                form += '<div>';
                form += '<input name="address_destination" class="rounded-lg border-gray-200 mx-auto w-full" type="text"  placeholder="Dirección">';
                form += '</div>';
            }else{
                form += '<h3 class="w-fit">'+agency_table[_agency].address+'</h3>';
            }
        form +=
        '</div>'+
        '<div class="my-2  lg:flex lg:space-x-1">'+
            '<div class="my-2 lg:my-0">'+
                '<input name="name_destination" class="rounded-lg border-gray-200 mx-auto w-full" type="text"  placeholder="Nombre">'+
            '</div>'+
            '<div class="my-2 lg:my-0">'+
                '<input name="phone_destination" class="rounded-lg border-gray-200 mx-auto w-full" type="text"  placeholder="Telefono">'+
            '</div>'+
        '</div>'+
        '<div class="my-2 space-x-1">'+
            '<div>'+
                '<input name="email_destination" class="rounded-lg border-gray-200 mx-auto w-full" type="email" placeholder="Email">'+
            '</div>'+
            '<div>'+
                '<input name="cui_destination" class="rounded-lg border-gray-200 mx-auto w-full" type="text" placeholder="Cui">'+
            '</div>'+
        '</div>'+
        '<div class="my-2">'+
            '<textarea name="comments_destination" class="rounded-lg border-gray-200 w-full p-1" placeholder="Comentarios Adicionales (opcional)"></textarea>'+
        '</div>'+
        '<button id="home_'+_quoter+'_btn_order" type="button" class="flex bg-blue-950 px-4 py-2 ml-auto rounded-xl text-white">Continuar</button>';


    $('#home_'+_quoter+'_order_destination').html(form);
    $('#home_'+_quoter+'_order_destination').fadeIn();

}

// AddFormDestination for order destination
$('#home_mg_destination_select').change(function() {
    $('#home_mg_order_destination').hide();
    $('#home_mg_btn_order').hide();
    this.value > 0 ? addFormDestination('mg',this.value):false;
    this.value > 0 ? $('#home_mg_btn_order').fadeIn():false;
});

// miami-quoter-osc
$('body').on('click','#home_mg_btn_order',function(){
    let fields = [
        {'name':'address','validation':['blank']},
        {'name':'name','validation':['alpha','blank']},
        {'name':'phone','validation':['number:8-13','blank']},
        {'name':'email','validation':['@','blank']},
        {'name':'cui','validation':['number:1','blank']},
        {'name':'comments','validation':['blank']},
    ]

    let form = '#'+$(this).closest("form").attr('id');
    let validator_destination = Validation(form,fields,'_destination');

    if(!validator_destination.fail){
        LoadingAnimation(this,'loading');
        // $('#home_mg_form_order_osc').submit();
        $('#home_mg_form_order_osc').ajaxSubmit({
            success: function(res, status, xhr, form) {
                $('.home_mg_osc_total').text('Total '+res.currency+' '+res.total.toFixed(2));
                // res.service == 2 ? $('#home_mg_bill_div').hide():false;
                QuoterDivVisibility('mg',[0,4]);
            }
        });
    }
});

$('#home_mg_payment_type').change(function(){
    this.value == 0 ? $('#home_mg_payment_blank').show():$('#home_mg_payment_blank').hide();
    this.value == 1 ? $('#home_mg_payment_cc').show():$('#home_mg_payment_cc').hide();
    this.value == 2 ? $('#home_mg_payment_bt').show():$('#home_mg_payment_bt').hide();
    this.value == 3 ? $('#home_mg_payment_agency').show():$('#home_mg_payment_agency').hide();
    this.value == 4 ? $('#home_mg_payment_cod').show():$('#home_mg_payment_cod').hide();
});

$('#home_mg_btn_osc').click(function(){
    let fields = [
        {'name':'bill_name','validation':['alpha','blank']},
        {'name':'bill_address','validation':['blank']},
        {'name':'bill_nit','validation':['blank']},
        {'name':'payment_mg','validation':['isSelect']},
    ]

    let form = '#'+$(this).closest("form").attr('id');

    $(form + ' input[name=bill_cf]:checked').length ?
    fields = [
        {'name':'bill_name','validation':['']},
        {'name':'bill_address','validation':['']},
        {'name':'bill_nit','validation':['']},
        {'name':'bill_dpi','validation':['blank']},
        {'name':'payment_mg','validation':['isSelect']},
    ]:
    false;

    let validator = Validation(form,fields);
    console.log(validator);
    if(!validator.fail){
        LoadingAnimation(this,'loading');
        // $('#home_mg_form_osc').submit();
        $('#home_mg_form_osc').ajaxSubmit({
            success: function(res, status, xhr, form) {
                $('#home_mg_order_success').text('Orden procesada con exito')
                QuoterDivVisibility('mg',[0,5]);
            }
        });
    }
});


// China
// Select Service(POBOX, Todo Incluido)
$("#home_cg_service_select").change(function(){
    $("#home_cg_service_select").val() == 1 ?
    $("#home_cg_link").parent().animate({height:"hide"}):
    $("#home_cg_link").parent().animate({height:"show"});
    input_service = parseFloat(this.value);

    $("#home_cg_service_select").val() == 1 ?
    $("#home_cg_commission").parent().animate({height:"hide"}):
    $("#home_cg_commission").parent().animate({height:"show"});

    $("#home_cg_service_select").val() == 1 ?
    $("#home_cg_total_include").parent().animate({height:"hide"}):
    $("#home_cg_total_include").parent().animate({height:"show"});

    $("#home_cg_service_select").val() == 1 ?
    $("#home_cg_total_pobox").parent().animate({height:"show"}):
    $("#home_cg_total_pobox").parent().animate({height:"hide"});
    getQuotationCg();
});

// China Quoter JS
function getQuotationCg(){
    if((!isNaN(input_price)) && (!isNaN(input_shipping)) && (!isNaN(input_weight)) &&
        (!isNaN(input_description)) && (!isNaN(input_volumetric_height)) &&
        (!isNaN(input_volumetric_width)) && (!isNaN(input_volumetric_depth))){
        let commission = 0;

        input_service == 2 ?
        input_price < 200 ? commission = 15:
        commission = (input_price)*0.12:
        false;

        let exchange_btn = !($('#home_cg_exchange_btn').prop('checked'));
        let exchange = US*exchange_btn + !exchange_btn;
        let premier, prepaid;

        let duca = 0;
        input_price > 999.99 ?
        duca = 1350/US:
        duca = 0;

        let sed = 0;
        input_price > 2500.00 ?
        sed = 75:
        sed = 0;

        input_premier ?  premier = (1.9)*input_premier:premier = 0;
        input_prepaid ?  prepaid = (0.75 * input_weight)*input_prepaid:prepaid = 0;

        let volumetric_weight = input_volumetric_height*input_volumetric_width*input_volumetric_depth;

        volumetric_weight = volumetric_weight/5000 *2.2046;

        input_weight > volumetric_weight?
        weight = input_weight:
        weight = volumetric_weight;

        let transport = (weight *10.5);
        let desaduanaje = (4.25);
        let insurance = ((input_price + transport) * 0.022);
        let services = (transport + desaduanaje);
        let dai = ((input_price + transport + insurance) * (input_description/100));
        let iva = ((input_price + insurance + transport + dai) *0.12);
        let taxes = dai + iva;
        let total_pobox = services + taxes + insurance - premier - prepaid + duca + sed;
        let total_include = input_price + commission +services + taxes + insurance - premier - prepaid + duca + sed;

        let currency;
        exchange_btn ? currency = 'Q':currency = '$';

        $('#home_cg_transport').text(currency+(transport*exchange).toFixed(2));
        $('#home_cg_desaduanaje').text(currency+(4.25*exchange).toFixed(2));
        $('#home_cg_services').text(currency+(services*exchange).toFixed(2));
        $('#home_cg_dai').text(currency+(dai*exchange).toFixed(2));
        $('#home_cg_iva').text(currency+(iva*exchange).toFixed(2));
        $('#home_cg_taxes').text(currency+(taxes*exchange).toFixed(2));
        $('#home_cg_commission').text(currency+(commission*exchange).toFixed(2));
        $('#home_cg_total_pobox').text(currency+(total_pobox*exchange).toFixed(2));
        $('#home_cg_total_include').text(currency+(total_include*exchange).toFixed(2));

        $('#home_cg_conditions_order_div').animate({ height: 'show'});
    }else{
        $('#home_cg_conditions_order_div').animate({ height: 'hide'});
        cleanQuotationCg();
    }
}

// Clean China Quoter
function cleanQuotationCg(){
    $('#home_cg_transport').text('0.00');
    $('#home_cg_desaduanaje').text('0.00');
    $('#home_cg_services').text('0.00');
    $('#home_cg_dai').text('0.00');
    $('#home_cg_iva').text('0.00');
    $('#home_cg_taxes').text('0.00');
    $('#home_cg_commission').text('0.00');
    $('#home_cg_total_pobox').text('0.00');
    $('#home_cg_total_include').text('0.00');
}

// Price, Shipping , Weight Keyup Event
$('.home_quotation_keyup').keyup(function() {
    this.id == 'home_cg_price'? input_price =  parseFloat(this.value):false;
    this.id == 'home_cg_shipping'? input_shipping =  parseFloat(this.value):false;
    this.id == 'home_cg_weight'? input_weight =  parseFloat(this.value):false;
    this.id == 'home_cg_volumetric_height'? input_volumetric_height =  parseFloat(this.value):false;
    this.id == 'home_cg_volumetric_width'? input_volumetric_width =  parseFloat(this.value):false;
    this.id == 'home_cg_volumetric_depth'? input_volumetric_depth =  parseFloat(this.value):false;
    getQuotationCg();
});

// Description, Premier, Prepaid Change Event
$('.home_quotation_change').change(function() {
    this.id == 'home_cg_description'? input_description =  parseFloat(this.value):false;
    this.id == 'home_cg_premier'? input_premier =  this.checked:false;
    this.id == 'home_cg_prepaid'? input_prepaid =  this.checked:false;
    getQuotationCg();
});

// Exchange Button
$("#home_cg_exchange_btn").change(function(){
    getQuotationCg();
});

// Terms And Conditions
$('#home_cg_chk_terms').change(function(){
    this.checked ? $('#home_cg_btn_quotation_order').prop('disabled',false):$('#home_cg_btn_quotation_order').prop('disabled',true);
    this.checked ? $('#home_cg_btn_quotation_order').removeClass('opacity-70'):$('#home_cg_btn_quotation_order').addClass('opacity-70');
});

// China-quoter-quotation
$('#home_cg_btn_quotation_order').click(function(){
    let fields = [
        {'name':'link','validation':['blank']},
    ]

    let form = '#'+$(this).closest("form").attr('id');
    let validator = Validation(form,fields);

    if(!validator.fail || input_service == 1){
        LoadingAnimation(this,'loading');
        // $('#home_cg_form_packages').submit();
        $('#home_cg_form_packages').ajaxSubmit({
            success: function(res, status, xhr, form) {
                QuoterDivVisibility('cg',[0,3]);
            }
        });
    }
});

// AddFormDestination for order destination
$('#home_cg_destination_select').change(function() {
    $('#home_cg_order_destination').hide();
    this.value > 0 ? addFormDestination('cg',this.value):false;
});

// china-quoter-osc
$('body').on('click','#home_cg_btn_order',function(){
    let fields = [
        {'name':'address','validation':['blank']},
        {'name':'name','validation':['alpha','blank']},
        {'name':'phone','validation':['number:8-13','blank']},
        {'name':'email','validation':['@','blank']},
        {'name':'cui','validation':['number:1','blank']},
        {'name':'comments','validation':['blank']},
    ]

    let form = '#'+$(this).closest("form").attr('id');
    let validator_destination = Validation(form,fields,'_destination');

    if(!validator_destination.fail){
        LoadingAnimation(this,'loading');
        // $('#home_cg_form_order_osc').submit();
        $('#home_cg_form_order_osc').ajaxSubmit({
            success: function(res, status, xhr, form) {
                $('.home_cg_osc_total').text('Total '+res.currency+' '+res.total.toFixed(2));
                // res.service == 2 ? $('#home_cg_bill_div').hide():false;
                QuoterDivVisibility('cg',[0,4]);
            }
        });
    }
});

$('#home_cg_payment_type').change(function(){
    this.value == 0 ? $('#home_cg_payment_blank').show():$('#home_cg_payment_blank').hide();
    this.value == 1 ? $('#home_cg_payment_cc').show():$('#home_cg_payment_cc').hide();
    this.value == 2 ? $('#home_cg_payment_bt').show():$('#home_cg_payment_bt').hide();
    this.value == 3 ? $('#home_cg_payment_agency').show():$('#home_cg_payment_agency').hide();
    this.value == 4 ? $('#home_cg_payment_cod').show():$('#home_cg_payment_cod').hide();
});

$('#home_cg_btn_osc').click(function(){
    let fields = [
        {'name':'bill_name','validation':['alpha','blank']},
        {'name':'bill_address','validation':['blank']},
        {'name':'bill_nit','validation':['blank']},
        {'name':'payment_cg','validation':['isSelect']},
    ]

    let form = '#'+$(this).closest("form").attr('id');

    $(form + ' input[name=bill_cf]:checked').length ?
    fields = [
        {'name':'bill_name','validation':['']},
        {'name':'bill_address','validation':['']},
        {'name':'bill_nit','validation':['']},
        {'name':'bill_dpi','validation':['blank']},
        {'name':'payment_cg','validation':['isSelect']},
    ]:
    false;

    let validator = Validation(form,fields);

    if(!validator.fail){
        LoadingAnimation(this,'loading');
        // $('#home_cg_form_osc').submit();
        $('#home_cg_form_osc').ajaxSubmit({
            success: function(res, status, xhr, form) {
                $('#home_cg_order_success').text('Orden procesada con exito')
                QuoterDivVisibility('cg',[0,5]);
            }
        });
    }
});



// function image(_this){
//     //JS PARA PREVISUALIZAR IMAGEN SELECCIONADA
//   const $seleccionArchivos = $("#"+_this.id)[0]

//   // Los archivos seleccionados, pueden ser muchos o uno
//   const archivos = $seleccionArchivos.files;
//   // Ahora tomamos el primer archivo, el cual vamos a previsualizar
//   const primerArchivo = archivos[0];

//     //convirtiendo a base64
//   let reader = new FileReader();
//   reader.readAsDataURL(primerArchivo);
//   reader.onload = function () {
//     $('#'+_this.id).parent().html('<label for="'+_this.id+'"><img src="'+reader.result+'" width="200px" height="200px" alt=""></label><input id="'+_this.id+'"  onchange="image(this);" type="file" style="display:none;"/>');

//     //Añadiendo archivos al formulario
//     file = (primerArchivo);
//     let fileInput = $('.images')[0];
//     const dataTransfer = new DataTransfer();
//     dataTransfer.items.add(file);
//     fileInput.files = dataTransfer.files;
//   };
// }


