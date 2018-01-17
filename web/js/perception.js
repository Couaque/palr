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
$('.btn-filtrer').on('click',function(){
  $("#formFiltrage").removeClass("col-centered");
  $(".tableau-modif").show();
})

//Gestion des informations du tableau
$('.btn-filtrer').on('click',function ajaxCall(){
  var nom = $('#nom').val();
  var organisation = $('#organisation').val();
  var numeroCle = $('#numeroCle').val();
  var Pass1 = $('#Pass1 option:selected').val();
  var Pass2 = $('#Pass2 option:selected').val();
  var Pass3 = $('#Pass3 option:selected').val();
  $.ajax({
    url: "/perception/filtrerPerception",
    method: "post",
    data: {nom,
      organisation,
      numeroCle,
      Pass1,
      Pass2,
      Pass3
    },
    success : function(data){
      console.log(data);
      var leI = 0;
      for (leI in data) {
        var maDate = Date.parse(data[leI].date_debut).toString("dd/MM/yyyy");

        var variure = "";
        if(data[leI].variure != undefined) {
           variure = data[leI].variure.nom_variure
        }else {
          variure = "X";
        }

        var pass1 = "";
        if(data[leI].pass_partiel1.nom_pass1 != undefined) {
           pass1 = data[leI].pass_partiel1.nom_pass1
        }else {
          pass1 = "X";
        }

        var pass2 = "";
        if(data[leI].pass_partiel2 != undefined) {
           pass2 = data[leI].pass_partiel2.nom_pass2
        }else {
          pass2 = "X";
        }

        var pass3 = "";
        if(data[leI].pass_partiel3 != undefined) {
           pass3 = data[leI].pass_partiel3.nom_pass3
        } else {
          pass3 = "X";
        }

        var icone = "<a href="+"perception/modifierPerception/"+data[leI].id+" class="+"a-modif-perception"+
        "></a><span class="+"span2-modif-perception"+
        "></span><span class="+"span1-modif-perception"+"></span>";

        $("#table>tbody:last").append("<tr><td>"+data[leI].percepteur.nom_percepteur+
        "</td><td>"+data[leI].percepteur.prenom_percepteur+
        "</td><td>"+variure+
        "</td><td>"+maDate+"</td><td>"+data[leI].percepteur.organisation+
        "</td><td>"+data[leI].type_perception+
        "</td><td>"+pass1+
        "</td><td>"+pass2+
        "</td><td>"+pass3+
        "</td><td>"+icone+"</td></tr>");
      }
      $(".a-modif-perception").addClass("btn btn-success btn-modif-filtre glyphicon glyphicon-pencil");
      $(".span1-modif-perception").addClass("btn btn-success btn-modif-filtre glyphicon glyphicon-remove");
      $(".span2-modif-perception").addClass("btn btn-success btn-modif-filtre glyphicon glyphicon-print");
    },
    error:function(err){
      console.log(err.responseText);
    }
  });
});
