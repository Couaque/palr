//Gestion du formulaire de filtrage sur la perception

var list1 = $("#Pass1");
var list2 = $("#Pass2");
var list3 = $("#Pass3");
list1.on('change', function(event) {
  for (var leI=1; leI<26; leI++){
    if(($("#Pass1 option:selected").data('id')) != ($("#Pass2 option:eq("+leI+")").data('idpartiel'))){
      $(".pass2cacher"+leI).hide();
    }else{
      $(".pass2cacher"+leI).show();
    }
  }
  $("#Pass2").removeAttr("disabled");
});

list2.on('change', function(event) {
  for (var leI=1; leI<124; leI++){
    if(($("#Pass2 option:selected").data('id')) != ($("#Pass3 option:eq("+leI+")").data('idpartiel'))){
      $(".pass3cacher"+leI).hide();
    }else{
      $(".pass3cacher"+leI).show();
    }
  }
  $("#Pass3").removeAttr("disabled");
});


//Gestion affichage du tableau
$(".tableau-modif").hide();
$("#formFiltrage").addClass("col-centered");
// $('.btn-filtrer').on('click',function(){
//   $("#formFiltrage").removeClass("col-centered");
//   $(".tableau-modif").show();
// })

//Gestion des informations du tableau
$('.btn-filtrer').on('click',function ajaxCall(){
  // $('#tableauModif').html('<img src="/img/ajax-loader.gif">');
  // $.post('/perception/filtrerPerception',
  // {
  //   nom: $("#nom").val(),
  //   prenom: $("#prenom").val(),
  //   numeroCle: $("#numeroCle").val(),
  //   Pass1: $("#Pass1").text(),
  //   Pass2: $("#Pass2").text(),
  //   Pass3: $("#Pass3").text(),
  //   organisation: $("#organisation").val()
  // }, function(data) {
  //creation du tableau de data
  // });

  var nom = $('#nom');
  $.ajax({
    url: "/perception/filtrerPerception",
    method: "post",
    data: {nom:  $("#nom").val()}
  }).done(function(msg){
      console.log($("#nom").val());
    refreshList();
  });
});

function refresList(){
  nom.innerHTML = "";
  $.each(JSON.parse(msg['data']),function(i,item){
    var li = document.createElement('li');
    var text = document.createTextNode( item.prenom + " " + item.nom);
    li.appendChild(text);
    list.appendChild(li);
  });
};
