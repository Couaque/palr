$(document).ready(function(){

var list1 = $("#administrateurbundle_perception_passPartiel1");
var list2 = $("#administrateurbundle_perception_passPartiel2");
var list3 = $("#administrateurbundle_perception_passPartiel3");
var textField = $("#administrateurbundle_perception_percepteur_organisation"),
    label = $("label[for='administrateurbundle_perception_percepteur_organisation']"),
    label2 = $("label[for='administrateurbundle_perception_percepteur_service']"),
    label3 = $("label[for='administrateurbundle_perception_passPartiel1']"),
    label4 = $("label[for='administrateurbundle_perception_passPartiel2']"),
    label5 = $("label[for='administrateurbundle_perception_passPartiel3']"),
    typePercepteur = $('#typePercepteur'),
    choixPerception0 = $("#administrateurbundle_perception_choixPerception_0"),
    choixPerception1 = $("#administrateurbundle_perception_choixPerception_1"),
    typePerception1 = $("#administrateurbundle_perception_typePerception_1"),
    typePerception0 = $("#administrateurbundle_perception_typePerception_0"),
    organisation = $('#organisation'),
    service=$('#service'),
    parag=$("#parag"),
    pass=$('#pass'),
    typePercepteur1 = $("#administrateurbundle_perception_typePercepteur_1"),
    typePercepteur0 = $("#administrateurbundle_perception_typePerception_0"),
    select = $( "#administrateurbundle_perception_percepteur_service" ),
    select2 = $( "#administrateurbundle_perception_passPartiel1" ),
    select3 = $( "#administrateurbundle_perception_passPartiel2" ),
    select4 = $( "#administrateurbundle_perception_passPartiel3" ),
    variure= $('#variure'),
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
divid2.hide();
if(typePercepteur1.val()=='EmployePort')
{
  select.show();
  textField.hide();
  label.hide();
  label2.show();
  organisation.hide();
  $("#administrateurbundle_perception_percepteur_organisation").val ("PALR");
}

if(typePercepteur0.val()=='CollabExt')
{
  textField.show();
  label.show();
  select.hide();
  label2.hide();
  service.hide();
}

if(typePerception0.val() == 'Permanente'){
  divid2.hide();
}

if(typePerception1.val() == 'Temporaire'){
  divid2.show();
}

if(choixPerception0.val()=='Clé'){
  pass.hide();
  divid.show();
  h4.show();
  parag.show();
}

if(choixPerception1.val()=='Pass'){
  pass.show();
  variure.hide();
  h4.hide();
  parag.hide();
  divid.hide();
}
if(select4.val()=='X'){
  select4.hide();
}
typePercepteur.hide();
parag1.hide();
parag2.hide();
parag3.hide();
select6.hide();
select7.hide();
select8.hide();

$("#administrateurbundle_perception_passPartiel1").prepend("<option></option>");
$("#administrateurbundle_perception_passPartiel2").prepend("<option></option>");
$("#administrateurbundle_perception_passPartiel3").prepend("<option></option>");

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
  }
});

 $('#administrateurbundle_perception_choixPerception_1').change(function(){
  if($(this).val() == 'Pass'){
    select2.show();
    select3.show();
    select4.show();
    variure.hide();
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
