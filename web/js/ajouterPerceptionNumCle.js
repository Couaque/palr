


$(document).ready(function(){
    $(".has-error").show();

    $('.js-porte').select2({
        placeholder: "Sélectionnez une porte",
        allowClear: true,
        width : '400px',
        theme: "classic"
    });
    $('.js-local').select2({
        placeholder: "Sélectionnez une localisation",
        allowClear: true,
        width : '600px',
        theme: "classic"
    });


var list1 = $("#Porte");
$('.js-porte').val('').trigger('change');
$('.js-local').val('').trigger('change');
$("#paragVariure").hide();
$("#paragPass").hide();
$("#paragPorte").hide();

$("#scrollPortes").hide();

list1.on('change', function(event) {
  $("#paragVariure").show();
  $("#paragPass").show();
  for (var leI=0; leI<6000; leI++){

    if ( ($("#Porte option:selected").data('id')) != ($(".clecachee"+leI).data('id'))){

    $(".clecachee"+leI).hide();
    }else{
    $(".clecachee"+leI).show();
    }
  }
});


$("#Localisation").on('change', function(event) {
$("#scrollPortes").show();
$("#paragPorte").show();
    for(var leI=1; leI<6000; leI++){

    if ( ($("#Localisation option:selected").data('id')) != ($("#PorteLocal"+leI).data('id'))
    || ( ($("#PorteLocal"+leI).data('id2') != ($("#PorteLocal"+leI).data('id3'))))) {

    $("#PorteLocal"+leI).hide();
    }else{
    $("#PorteLocal"+leI).show();
    }
  }
});

$('.js-example-basic-single-percep').select2({
   placeholder: "Sélectionnez un percepteur",
   allowClear: true,
   theme: "classic"
});


$('.js-example-basic-single-pp1').select2({
   placeholder: "Sélectionnez un Pass 1",
   allowClear: true,

});
$('.js-example-basic-single-pp2').select2({
   placeholder: "Sélectionnez un Pass 2",
   allowClear: true,

});
$('.js-example-basic-single-pp3').select2({
    placeholder: "Sélectionnez un Pass 3",
    allowClear: true,

});
$('.js-example-basic-single-variure').select2({
    placeholder: "Sélectionnez une clé",
    allowClear: true,
    theme: "classic"
});



$('.js-example-basic-single-pp1').on("change", function () {
    if(($("#administrateurbundle_perception_passPartiel1 option:selected")).text() != null){
        $("#administrateurbundle_perception_passPartiel3").prop('disabled', true);
        $("#administrateurbundle_perception_passPartiel2").prop('disabled', true);
    }

    if (($("#administrateurbundle_perception_passPartiel1 option:selected")).data('select2-id') == ($("#administrateurbundle_perception_passPartiel1 option:first-child")).data('select2-id')) {
        $("#administrateurbundle_perception_passPartiel3").removeAttr("disabled");
        $("#administrateurbundle_perception_passPartiel2").removeAttr("disabled");
    }
});

$('.js-example-basic-single-pp2').on("change", function () {
    if(($("#administrateurbundle_perception_passPartiel2 option:selected")).text() != null){

        $("#administrateurbundle_perception_passPartiel1").prop('disabled', true);
        $("#h5pp1").show();
        $("#administrateurbundle_perception_passPartiel3").prop('disabled', true);
    }

    if (($("#administrateurbundle_perception_passPartiel2 option:selected")).data('select2-id') == ($("#administrateurbundle_perception_passPartiel2 option:first-child")).data('select2-id')) {

        $("#administrateurbundle_perception_passPartiel1").removeAttr("disabled");
        $("#h5pp1").hide();
        $("#administrateurbundle_perception_passPartiel3").removeAttr("disabled");
    }
});

    $('.js-example-basic-single-pp3').on("change", function () {
        if(($("#administrateurbundle_perception_passPartiel3 option:selected")).text() != null){

            $("#administrateurbundle_perception_passPartiel1").prop('disabled', true);
            $("#administrateurbundle_perception_passPartiel2").prop('disabled', true);
            $("#h5pp2").show();
            $("#h5pp1-3").show();
        }

        if (($("#administrateurbundle_perception_passPartiel3 option:selected")).data('select2-id') == ($("#administrateurbundle_perception_passPartiel3 option:first-child")).data('select2-id')) {

            $("#administrateurbundle_perception_passPartiel1").removeAttr("disabled");
            $("#h5pp2").hide();
            $("#h5pp1-3").hide();
            $("#administrateurbundle_perception_passPartiel2").removeAttr("disabled");
        }
    });



$('#administrateurbundle_perception_passPartiel1').next(".select2-container").hide();
$('#administrateurbundle_perception_passPartiel2').next(".select2-container").hide();
$('#administrateurbundle_perception_passPartiel3').next(".select2-container").hide();
$('#administrateurbundle_perception_variure').next(".select2-container").hide();



var list2 = $("#administrateurbundle_perception_passPartiel2");
var list3 = $("#administrateurbundle_perception_passPartiel3");
var list4 = $("#administrateurbundle_perception_percepteur");
var list5 = $("#administrateurbundle_perception_variure");

list2.hide();


$("#administrateurbundle_perception_passPartiel1").prepend("<option selected='selected'></option>");
$("#administrateurbundle_perception_percepteur").prepend("<option selected='selected'></option>");
$("#administrateurbundle_perception_passPartiel2").prepend("<option selected='selected'></option>");
$("#administrateurbundle_perception_passPartiel3").prepend("<option selected='selected'></option>");
$("#administrateurbundle_perception_variure").prepend("<option selected='selected'></option>");

for (var leI=1; leI<6000; leI++){
  $(".cachee"+leI).hide();
  $(".ofcachee"+leI).hide();
  $(".pass1cache"+leI).hide();
  $(".pass2cache"+leI).hide();
  $(".pass1-3cache"+leI).hide();
  $("#PorteLocal").attr('id', 'PorteLocal'+leI);
  $("#PorteLocal"+leI).hide();
  $(".clecachee"+leI).hide();
}

    $("#h5").hide();
    $("#h5pp1").hide();
    $("#h5pp2").hide();
    $("#h5pp1-3").hide();
    $("#pp").hide();
    $("#porte").hide();
    $("#scroll").hide();


list4.on('change', function(event) {
    $("#h5").show();
  for (var leI=1; leI<100; leI++){
    if( ($("#administrateurbundle_perception_percepteur option:selected").data('id')) != ($(".cachee"+leI).data('idpartiel')) ) {

      $(".cachee"+leI).hide();
    }else{
      $(".cachee"+leI).show();
    }
  }
});



list5.on('change', function(event) {
    $("#pp").show();
    $("#scroll").show();
    $("#porte").show();
    for (var leI=1; leI<500; leI++){

        if( ($("#administrateurbundle_perception_variure option:selected").data('idof')) != ($(".ofcachee"+leI).data('idpartielof'))) {
            $(".ofcachee"+leI).hide();
        }else{
            $(".ofcachee"+leI).show();
        }
    }
});




list2.on('change', function(event) {

  for (var leI=1; leI<124; leI++){
    if(($("#administrateurbundle_perception_passPartiel2 option:selected").data('idpartiel')) != ($(".pass1cache"+leI).data('idpartiel'))){

      $(".pass1cache"+leI).hide();

    }else{
      $(".pass1cache"+leI).show();
    }
  }
});

list3.on('change', function(event) {
  for (var leI=1; leI<150; leI++){
    if(($("#administrateurbundle_perception_passPartiel3 option:selected").data('idpp2')) != ($(".pass2cache"+leI).data('idpartiel'))){

      $(".pass2cache"+leI).hide();

    }else{
      $(".pass2cache"+leI).show();
    }
    if(($("#administrateurbundle_perception_passPartiel3 option:selected").data('idpp1')) != ($(".pass1-3cache"+leI).data('idpartiel'))){

      $(".pass1-3cache"+leI).hide();

    }else{
      $(".pass1-3cache"+leI).show();
    }

  }
});


 var textField = $("#administrateurbundle_perception_percepteur_organisation"),

 label = $("label[for='administrateurbundle_perception_percepteur_organisation']"),
 label2 = $("label[for='administrateurbundle_perception_percepteur_service']"),
 label3 = $("label[for='administrateurbundle_perception_passPartiel1']"),
 label4 = $("label[for='administrateurbundle_perception_passPartiel2']"),
 label5 = $("label[for='administrateurbundle_perception_passPartiel3']"),

 select = $( "#administrateurbundle_perception_percepteur_service" ),
 select2 = $( "#administrateurbundle_perception_passPartiel1" ),
 select3 = $( "#administrateurbundle_perception_passPartiel2" ),
 select4 = $( "#administrateurbundle_perception_passPartiel3" ),
 h4=$("#h4PP2"),
 parag1= $("#paragpp1"),
 parag2= $("#paragpp2"),
 parag3= $("#paragpp3"),

 select6 = $("#Pass1"),
 select7 = $("#Pass2"),
 select8 = $("#Pass3"),

 divid2 = $('#dateFin'),
 label6 = $("label[for='administrateurbundle_perception_variure']");
 select9 = $("#administrateurbundle_perception_variure" );



 h4.hide();
 textField.hide();
 label.hide();
 select.hide();
 label2.hide();
 select2.hide();
 select3.hide();
 select4.hide();
 label3.hide();
 label4.hide();
 label5.hide();
 label6.hide();
 select9.hide();
 parag1.hide();
 parag2.hide();
 parag3.hide();
 select6.hide();
 select7.hide();
 select8.hide();

 $('#administrateurbundle_perception_choixPerception_0').change(function(){
  if($(this).val() == 'Clé'){
    select2.hide();
    select3.hide();
    select4.hide();

    label3.hide();
    label4.hide();
    label5.hide();
    label6.show();
    select9.show();
    h4.show();
    parag1.show();
    parag2.show();
    parag3.show();
    select6.show();
    select7.show();
    $("#h5pp1").hide();
    $("#h5pp2").hide();
    $("#h5pp1-3").hide();
    for (var leI=1; leI<1000; leI++){
        $(".pass1cache"+leI).hide();
        $(".pass2cache"+leI).hide();
        $(".pass1-3cache"+leI).hide();
    }
    $('.js-example-basic-single-pp1').val('').trigger('change');
    $('.js-example-basic-single-pp2').val('').trigger('change');
    $('.js-example-basic-single-pp3').val('').trigger('change');


    $("#administrateurbundle_perception_variure").val (null);
    $("#administrateurbundle_perception_passPartiel1").val (null);
    $("#administrateurbundle_perception_passPartiel2").val (null);
    $("#administrateurbundle_perception_passPartiel3").val (null);
      $('#administrateurbundle_perception_passPartiel1').next(".select2-container").hide();
      $('#administrateurbundle_perception_passPartiel2').next(".select2-container").hide();
      $('#administrateurbundle_perception_passPartiel3').next(".select2-container").hide();
      $('#administrateurbundle_perception_variure').next(".select2-container").show();
  }
});

 $('#administrateurbundle_perception_choixPerception_1').change(function(){
  if($(this).val() == 'Pass'){
    select2.show();
    select3.show();
    select4.show();
    label3.show();
    $('.js-example-basic-single-variure').val('').trigger('change');
    label4.show();
    label5.show();
    h4.hide();
    $("#pp").hide();
    $("#porte").hide();
    $("#scroll").hide();
      for (var leI=1; leI<1000; leI++){
          $(".deuxcachee"+leI).hide();
          $(".troiscachee"+leI).hide();

      }

    $('#administrateurbundle_perception_passPartiel1').next(".select2-container").show();
    $('#administrateurbundle_perception_passPartiel2').next(".select2-container").show();
    $('#administrateurbundle_perception_passPartiel3').next(".select2-container").show();
    $('#administrateurbundle_perception_variure').next(".select2-container").hide();



    parag1.hide();
    parag2.hide();
    parag3.hide();
    select6.hide();
    select7.hide();
    select8.hide();
    $("#administrateurbundle_perception_variure").val (null);
    $("#administrateurbundle_perception_passPartiel1").val (null);
    $("#administrateurbundle_perception_passPartiel2").val (null);
    $("#administrateurbundle_perception_passPartiel3").val (null);
    label6.hide();
    select9.hide();
  }
});


 $('#administrateurbundle_perception_percepteur_typePercepteur_0').change(function(){
  if($(this).val() == 'EmployePort'){
    select.show();
    textField.hide();
    label.hide();
    label2.show();
    $("#administrateurbundle_perception_percepteur_organisation").val ("PALR");

  }
});

 $('#administrateurbundle_perception_percepteur_typePercepteur_1').change(function(){
  if($(this).val() == 'CollabExt'){
    textField.show();
    label.show();
    select.hide();
    label2.hide();
    $("#administrateurbundle_perception_percepteur_organisation").val (null);
    $("#administrateurbundle_perception_percepteur_service").val (null);


  }
});



 $('#administrateurbundle_perception_typePerception_0').change(function(){
  if($(this).val() == 'Permanente'){
    divid2.hide();
  }
});

 $('#administrateurbundle_perception_typePerception_1').change(function(){
  if($(this).val() == 'Temporaire'){
   divid2.show();
 }
});


});
