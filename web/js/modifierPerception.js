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
    divTypePercepteur = $('#typePercepteur'),
    typePercepteur=$("administrateurbundle_perception_percepteur_typePercepteur"),
    choixPerception0 = $("#administrateurbundle_perception_choixPerception_0"),
    choixPerception1 = $("#administrateurbundle_perception_choixPerception_1"),
    typePerception1 = $("#administrateurbundle_perception_typePerception_1"),
    typePerception0 = $("#administrateurbundle_perception_typePerception_0"),
    organisation = $('#organisationdiv'),
    service=$('#servicediv'),
    parag=$("#parag"),
    pass=$('#pass'),
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
    divid = $('#variure'),
    etatPerception=$('#etatPerception');
var passPartiel2test=$('#passPartiel2test');
var passPartiel3test=$('#passPartiel3test');
//var JsVars = jQuery('#js-vars').data('vars');
//var passPartiel2js = JsVars.chartData;


select2.select2();
select3.select2();
select4.select2();
$( "#administrateurbundle_perception_variure").select2();


h4.hide();

if(typePercepteur.val()=="EmployePort")
{
  organisation.hide();
  service.show();
}
else{
  organisation.show();
  service.hide();
}

if(typePerception0.is(':checked')){
  divid2.hide();
}else{
  divid2.show();
}
if(choixPerception1.is(':checked')){
  pass.show();
  variure.hide();
  h4.hide();
  parag.hide();
  divid.hide();
}
else{
  pass.hide();
  divid.show();
  h4.show();
  parag.show();
}


divTypePercepteur.hide();




for (var leI=1; leI<26; leI++){
  if(($("#administrateurbundle_perception_passPartiel1 option:selected").data('id')) != ($("#administrateurbundle_perception_passPartiel2 option:eq("+leI+")").data('idpartiel'))){
    $(".pass2cacher"+leI).hide();
  }else{
    $(".pass2cacher"+leI).show();
  }
}
for (var leI=1; leI<124; leI++){
  if(($("#administrateurbundle_perception_passPartiel2 option:selected").data('id')) != ($("#administrateurbundle_perception_passPartiel3 option:eq("+leI+")").data('idpartiel'))){
    $(".pass3cacher"+leI).hide();
  }else{
    $(".pass3cacher"+leI).show();
  }
}

parag1.hide();
parag2.hide();
parag3.hide();
select6.hide();
select7.hide();
select8.hide();
etatPerception.hide();



list1.on('change', function(event) {
  for (var leI=1; leI<26; leI++){
    if(($("#administrateurbundle_perception_passPartiel1 option:selected").data('id')) != ($("#administrateurbundle_perception_passPartiel2 option:eq("+leI+")").data('idpartiel'))){
      $(".pass2cacher"+leI).hide();
    }else{
      $(".pass2cacher"+leI).show();
    }
  }
});

list2.on('change', function(event) {
  if(select4.val()==null){
    for (var leI=1; leI<124; leI++){
      $(".pass3cacher"+leI).hide();
    }
  }else for (var leI=1; leI<124; leI++){
    if(($("#administrateurbundle_perception_passPartiel2 option:selected").data('id')) != ($("#administrateurbundle_perception_passPartiel3 option:eq("+leI+")").data('idpartiel'))){
      $(".pass3cacher"+leI).hide();
    }else{
      $(".pass3cacher"+leI).show();
    }
  }
});



 $('#administrateurbundle_perception_choixPerception_0').change(function(){
  if($(this).val() == 'Clé'){
    pass.hide();
    divid.show();
    h4.show();
    parag1.show();
    parag2.show();
    parag3.show();
    select6.show();
    select7.show();
    select8.show();
    variure.show();
  }
});

 $('#administrateurbundle_perception_choixPerception_1').change(function(){
  if($(this).val() == 'Pass'){
    pass.show();
    variure.hide();
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
    organisation.hide();
    service.show();
    $("#administrateurbundle_perception_percepteur_organisation").val ("PALR");
}
});

 $('#administrateurbundle_perception_percepteur_typePercepteur_1').change(function(){
  if($(this).val() == 'CollabExt'){
    textField.show();
    label.show();
    select.hide();
    label2.hide();
    organisation.show();
    service.hide();
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
