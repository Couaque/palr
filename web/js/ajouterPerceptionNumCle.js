


$(document).ready(function(){

var list1 = $("#administrateurbundle_perception_passPartiel1");
var list2 = $("#administrateurbundle_perception_passPartiel2");
var list3 = $("#administrateurbundle_perception_passPartiel3");


$("#administrateurbundle_perception_passPartiel1").prepend("<option selected='selected'>- Sélectionnez le pass 1 -</option>");

$("#administrateurbundle_perception_passPartiel2").prepend("<option selected='selected'>- Sélectionnez le pass 2 -</option>");
$("#administrateurbundle_perception_passPartiel3").prepend("<option selected='selected'>- Sélectionnez le pass 3 -</option>");



list1.on('change', function(event) {
  for (var leI=1; leI<26; leI++){
    if(($("#administrateurbundle_perception_passPartiel1 option:selected").data('id')) != ($("#administrateurbundle_perception_passPartiel2 option:eq("+leI+")").data('idpartiel'))){

      $(".pass2cacher"+leI).hide();

    }else{
      $(".pass2cacher"+leI).show();
    }
  }
  $("#administrateurbundle_perception_passPartiel2").removeAttr("disabled");
});

list2.on('change', function(event) {
  for (var leI=1; leI<124; leI++){
    if(($("#administrateurbundle_perception_passPartiel2 option:selected").data('id')) != ($("#administrateurbundle_perception_passPartiel3 option:eq("+leI+")").data('idpartiel'))){

      $(".pass3cacher"+leI).hide();

    }else{
      $(".pass3cacher"+leI).show();
    }
  }
  $("#administrateurbundle_perception_passPartiel3").removeAttr("disabled");
});



var pass1variure = $("#Pass1");
var pass2variure = $("#Pass2");
var pass3variure = $("#Pass3");
pass1variure.on('change', function(event) {
  for (var leI=1; leI<26; leI++){
    if(($("#Pass1 option:selected").data('id')) != ($("#Pass2 option:eq("+leI+")").data('idpartiel'))){
      $(".pass2cacher"+leI).hide();
    }else{
      $(".pass2cacher"+leI).show();
    }
  }
  $("#Pass2").removeAttr("disabled");
});

pass2variure.on('change', function(event) {
  for (var leI=1; leI<124; leI++){
    if(($("#Pass2 option:selected").data('id')) != ($("#Pass3 option:eq("+leI+")").data('idpartiel'))){
      $(".pass3cacher"+leI).hide();
    }else{
      $(".pass3cacher"+leI).show();
    }
  }

  $("#Pass3").removeAttr("disabled");
});

pass2variure.on('change', function(event) {
  for (var leI=0; leI<124; leI++){
   if(($("#Pass2 option:selected").data('id')) != ($("#administrateurbundle_perception_variure option:eq("+leI+")").data('idpartielpp2'))){
    $("#administrateurbundle_perception_variure option:eq("+leI+")").hide();
  }else{
    $("#administrateurbundle_perception_variure option:eq("+leI+")").show();
  }
}
$("#Pass3").removeAttr("disabled");
$("#administrateurbundle_perception_variure").removeAttr("disabled")
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
 divid = $('#variure');



 h4.hide();
 textField.hide();
 label.hide();
 select.hide();
 label2.hide();
 divid2.hide();
 select2.hide();
 select3.hide();
 select4.hide();
 label3.hide();
 label4.hide();
 label5.hide();
 divid.hide();

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
    divid.show();
    h4.show();
    parag1.show();
    parag2.show();
    parag3.show();
    select6.show();
    select7.show();
    select8.show();
    $("#administrateurbundle_perception_variure").val (null);
    $("#administrateurbundle_perception_passPartiel1").val (null);
    $("#administrateurbundle_perception_passPartiel2").val (null);
    $("#administrateurbundle_perception_passPartiel3").val (null);
  }
});

 $('#administrateurbundle_perception_choixPerception_1').change(function(){
  if($(this).val() == 'Pass'){
    select2.show();
    select3.show();
    select4.show();
    label3.show();
    label4.show();
    label5.show();
    h4.hide();


    parag1.hide();
    parag2.hide();
    parag3.hide();
    select6.hide();
    select7.hide();
    select8.hide();
    $("#administrateurbundle_perception_variure").val (null);
    divid.hide();
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
