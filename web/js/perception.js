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
   },
   error:function(err){
      console.log(err.responseText);
    }
  });
});
