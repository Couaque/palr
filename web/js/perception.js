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
  $("#table tr td").remove();

  var etat = "enCours";
  var nom = $('#nom').val();
  var organisation = $('#organisation').val();
  var numeroCle = $('#numeroCle').val();
  var Pass1 = $('#Pass1 option:selected').val();
  var Pass2 = $('#Pass2 option:selected').val();
  var Pass3 = $('#Pass3 option:selected').val();
  $.ajax({
    url: "/perception/filtrerPerception",
    method: "post",
    data: {etat,
      nom,
      organisation,
      numeroCle,
      Pass1,
      Pass2,
      Pass3
    },
    success : function(data){
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
        "></a><a onclick="+"imprimer("+data[leI].id+")"+" class="+"a2-modif-perception"+
        "></a><a onclick="+"confirmeArchivee("+data[leI].id+")"+" id="+data[leI].id+" class="+"a1-modif-perception"+"></a>";

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
      $(".a1-modif-perception").addClass("btn btn-success btn-modif-filtre glyphicon glyphicon-remove");
      $(".a2-modif-perception").addClass("btn btn-success btn-modif-filtre glyphicon glyphicon-print");

    },
    error:function(err){
      console.log(err.responseText);
    }
  });
});

function confirmeArchivee(id){
  var conf = confirm("Voulez-vous vraiment archivee cette perception ?");
  if (conf == true) {
       window.location.replace("/perception/archiveePerception/"+id+"");
   }
}

function imprimer(id){
  confirm("Fonctionnalitée à venir !");
}

function afficherPopupConfirmationArchivee(question, lien, id) {
  // crée la division qui sera convertie en popup
  $('.tableau-modif').append('<div id="popupconfirmation" title="Confirmation"></div>');
  $("#popupconfirmation").html(question);
  // transforme la division en popup
  var popup = $("#popupconfirmation").dialog({
    autoOpen: true,
    width: 400,
    dialogClass: 'dialogstyleperso',
    hide: "fade",
    buttons: [
      {
        text: "Oui",
        class: "ui-state-question",
        click: function () {
          $(this).dialog("close");
          var hrefdefini = false;
          if (lien != null) {
            if ($(lien).attr("href") != undefined) {
              hrefdefini = true;
              // affiche la page de l'attribut href
              window.location.href = $(lien).attr("href");
            }
          }
          if (!hrefdefini) {
            window.location.reload();
          }
          $("#popupconfirmation").remove();
        }
      },
      {
        text: "Non",
        class: "ui-state-question",
        click: function () {
          $(this).dialog("close");
          $("#popupconfirmation").remove();
        }
      }
    ]
  });
  $("#popupconfirmation").prev().addClass('ui-state-question');
  return popup;
}
