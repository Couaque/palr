
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

  if($('#checkbox').is(':checked')){
     var etat = "archivee";
   }else{
     var etat = "enCours";
   }
  console.log(etat);

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
        var maDateDebut = Date.parse(data[leI].date_debut).toString("dd/MM/yyyy");

        if(Date.parse(data[leI].date_fin) != null){
          var maDateFin = Date.parse(data[leI].date_fin).toString("dd/MM/yyyy");
        }else{
          var maDateFin = "X";
        }

        var passPercu = "X";

        if(data[leI].pass_partiel1 != undefined) {
          passPercu = data[leI].pass_partiel1.nom_pass1
        }

        if(data[leI].pass_partiel2 != undefined) {
          passPercu = data[leI].pass_partiel2.nom_pass2
        }

        if(data[leI].pass_partiel3 != undefined) {
          passPercu = data[leI].pass_partiel3.nom_pass3
        }

        var variure = "";
        if(data[leI].variure != undefined) {
          variure = data[leI].variure.nom_variure
          passPercu = "X"
        }else {
          variure = "X";
        }

        var icone = "<a href="+"perception/modifierPerception/"+data[leI].id+" class="+"a-modif-perception"+
        "></a><a onclick="+"imprimer("+data[leI]. id+")"+" class="+"a2-modif-perception"+
        "></a><a onclick="+"confirmeArchivee("+data[leI].id+")"+" id="+data[leI].id+" class="+"a1-modif-perception"+"></a>";

        $("#table>tbody:last").append("<tr><td>"+data[leI].percepteur.nom_percepteur+
        "</td><td>"+data[leI].percepteur.prenom_percepteur+
        "</td><td>"+data[leI].percepteur.organisation+
        "</td><td>"+maDateDebut+
        "</td><td>"+maDateFin+
        "</td><td>"+data[leI].etat_perception+
        "</td><td>"+passPercu+
        "</td><td>"+variure+
        "</td><td>"+icone+"</td></tr>");
      }
      $(".a-modif-perception").addClass("btn btn-success btn-modif-filtre glyphicon glyphicon-pencil");
      $(".a1-modif-perception").addClass("btn btn-success btn-modif-filtre glyphicon glyphicon-remove");
      $(".a2-modif-perception").addClass("btn btn-success btn-modif-filtre glyphicon glyphicon-print");
      $("#table").dataTable({searching: false, paging: false});
      $("#table").dataTable();
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
