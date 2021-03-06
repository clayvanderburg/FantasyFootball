//Hideseek.js .list1 is the searchable list
$('#search1').hideseek({
  list: '.list1',
});
  //adds positions classes to list item based on player position
var addPostionClass = function(){
  $("li:contains('WR')").addClass("receiver");
  $("li:contains('RB')").addClass("rback");
  $("li:contains('QB')").addClass("qback");
  $("li:contains('TE-')").addClass("tend");
  $("li:contains('DST')").addClass("dst");
  $("li:contains('K-')").addClass("kicker");
}
//gets list from local storage if it exists there
if(document.getElementById('parent')){
var theList = document.getElementById('parent');
if(localStorage.getItem('parent')){
theList.innerHTML = localStorage.getItem('parent');
}
}
if(document.getElementById('parent-ppr')){
var theListPpr = document.getElementById('parent-ppr');
if(localStorage.getItem('parent-ppr')){
theListPpr.innerHTML = localStorage.getItem('parent-ppr');
}
}
if(document.getElementById('parent-pprhalf')){
var theListHalfPpr = document.getElementById('parent-pprhalf');
if(localStorage.getItem('parent-pprhalf')){
theListHalfPpr.innerHTML = localStorage.getItem('parent-pprhalf');
}
}
//Calls function to add classes to positions
addPostionClass();
//Toggles classes of list items on click eventsf
$(".listitem1").click(function(e) {
  $(this).toggleClass('listitem2');
});
$(".listitem1").dblclick(function(f) {
  $(this).toggleClass('listitem3');
});
//Hides list items when position buttons are clicked
$(".quarterbackbt").click(function(g) {
  $("li:contains('QB')").toggleClass("hiddenbt");
  $(".quarterbackbt").toggleClass("btshrink");
});
$(".runningbackbt").click(function(g) {
  $("li:contains('RB')").toggleClass("hiddenbt");
  $(".runningbackbt").toggleClass("btshrink");
});
$(".tightendbt").click(function(g) {
  $("li:contains('TE-')").toggleClass("hiddenbt");
  $(".tightendbt").toggleClass("btshrink");
});
$(".receiverbt").click(function(g) {
  $("li:contains('WR')").toggleClass("hiddenbt");
  $(".receiverbt").toggleClass("btshrink");
});
$(".defensebt").click(function(g) {
  $("li:contains('DST')").toggleClass("hiddenbt");
  $(".defensebt").toggleClass("btshrink");
});
$(".kickerbt").click(function(g) {
  $("li:contains('K-')").toggleClass("hiddenbt");
  $(".kickerbt").toggleClass("btshrink");
});
//fixes positions bar to top on scoll down
var wrap = $("#wrap");
$(window).on("scroll", function() {
  if ($(window).scrollTop() > 125) {
    wrap.addClass("positionsbartop");
  } else {
    wrap.removeClass("positionsbartop");
  }
});
//Changes nav link to active when on that page. Stores list locally on change.
$(function() {
  var url = window.location.href;
  var page = url.substr(url.lastIndexOf('/') + 1);
  $('a[href*="' + page + '"], a[href*=index]').addClass('active');
});
//Uses jquery-ui to make list sortable
$("#parent").sortable({
  axis:"y",
  handle: '.handle',
  update: function( ) {
    localStorage.setItem('parent', theList.innerHTML);
  }
});
$("#parent-ppr").sortable({
  axis:"y",
  handle: '.handle',
  update: function( ) {
    localStorage.setItem('parent-ppr', theListPpr.innerHTML);
  }
});
$("#parent-pprhalf").sortable({
  axis:"y",
  handle: '.handle',
  update: function( ) {
    localStorage.setItem('parent-pprhalf', theListHalfPpr.innerHTML);
  }
});
