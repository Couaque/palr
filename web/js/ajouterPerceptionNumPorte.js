


$(document).ready(function(){

    $('.js-porte').select2({
        placeholder: "Sélectionnez une porte",
        allowClear: true
    });


var list1 = $("#Porte");
var list2 = $("#administrateurbundle_perception_variure");
$("#administrateurbundle_perception_variure").val (null);
$(".variuresansequip").hide();

list1.on('change', function(event) {
  for (var leI=0; leI<50; leI++){
    console.log($("#Porte option:selected").data('id'));
      console.log($("#administrateurbundle_perception_variure option:eq("+leI+")").data('idpartielporte'));

    if(($("#Porte option:selected").data('id')) != ($("#administrateurbundle_perception_variure option:eq("+leI+")").data('idpartielporte'))){

    $("#administrateurbundle_perception_variure option:eq("+leI+")").hide();
    }else{
    $("#administrateurbundle_perception_variure option:eq("+leI+")").show();
    }
  }

  $("#administrateurbundle_perception_variure").removeAttr("disabled");
});

var porte = $("#Porte");


 var textField = $("#administrateurbundle_perception_percepteur_organisation"),

 label = $("label[for='administrateurbundle_perception_percepteur_organisation']"),
 label2 = $("label[for='administrateurbundle_perception_percepteur_service']"),

 select = $( "#administrateurbundle_perception_percepteur_service" ),

 divid2 = $('#dateFin'),

 divid = $('#variure');

 textField.hide();
 label.hide();
 select.hide();
 label2.hide();
 divid2.hide();
 $("#administrateurbundle_perception_passPartiel1").hide();
  $("#administrateurbundle_perception_passPartiel2").hide();
   $("#administrateurbundle_perception_passPartiel3").hide();

    $("#administrateurbundle_perception_passPartiel1").val (null);
  $("#administrateurbundle_perception_passPartiel2").val(null);
   $("#administrateurbundle_perception_passPartiel3").val(null);

   $("label[for='administrateurbundle_perception_passPartiel1']").hide();

   $("label[for='administrateurbundle_perception_passPartiel2']").hide();

  $("label[for='administrateurbundle_perception_passPartiel3']").hide();






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

