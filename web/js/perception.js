
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
      console.log(data);
      var leI = 0;
      for (leI in data) {
        var mesDatesDebut = data[leI].dateDebut.split("T");
        var maDateDebut = mesDatesDebut[0];
        var mesDatesFin = data[leI].dateFin.split("T");
        var maDateFin = mesDatesFin[0];

        var passPercu = "X";

        if(data[leI].passPartiel1 != "X") {
          passPercu = data[leI].passPartiel1
        }

        if(data[leI].passPartiel2 != "X") {
          passPercu = data[leI].passPartiel2
        }

        if(data[leI].passPartiel3 != "X") {
          passPercu = data[leI].passPartiel3
        }

        var variure = "";
        if(data[leI].variure != "X") {
          variure = data[leI].variure
          passPercu = "X"
        }else {
          variure = "X";
        }

        var icone = "<a href="+"perception/modifierPerception/"+data[leI].id+" class="+"a-modif-perception"+
        "></a><a href="+"perception/imprimer/"+data[leI].id+" class="+"a2-modif-perception"+
        "></a><a onclick="+"confirmeArchivee("+data[leI].id+")"+" id="+data[leI].id+" class="+"a1-modif-perception"+"></a>";

        $("#table>tbody:last").append("<tr class="+data[leI].id+"><td>"+data[leI].nom+
        "</td><td>"+data[leI].prenom+
        "</td><td>"+data[leI].organisation+
        "</td><td>"+maDateDebut+
        "</td><td>"+maDateFin+
        "</td><td>"+data[leI].etatPerception+
        "</td><td>"+passPercu+
        "</td><td>"+variure+
        "</td><td>"+icone+"</td></tr>");
        if(data[leI].etatPerception=="archivee"){
          $("."+data[leI].id+"").addClass("danger");
        }
      }
      $(".a-modif-perception").addClass("btn btn-success btn-modif-filtre glyphicon glyphicon-pencil");
      $(".a1-modif-perception").addClass("btn btn-success btn-modif-filtre glyphicon glyphicon-remove");
      $(".a2-modif-perception").addClass("btn btn-success btn-modif-filtre glyphicon glyphicon-print");
      $("#table").dataTable({searching: false});
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
