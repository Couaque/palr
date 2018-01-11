var list1 = $("#Pass1");
var list2 = $("#Pass2");
var list3 = $("#Pass3");
list1.on('change', function(event) {
  console.log($("#Pass1 option:selected").data('id'));
  $("#Pass2").removeAttr("disabled");
});

list2.on('change', function(event) {
  console.log($("#Pass2 option:selected").data('idpartiel'));
  console.log($("#Pass2 option:selected").data('id'));
  $("#Pass3").removeAttr("disabled");
});

list3.on('change', function(event) {
  console.log($("#Pass3 option:selected").data('idpartiel'));
  console.log($("#Pass3 option:selected").data('id'));
});
