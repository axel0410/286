// file: js/index.js
// purpose: js code for a rudimentary single page application
// author: Hong Xie
// date: 7/10/2018

var pages = ["#page1", "#page2", "#page3", "#page4", "#page5","#page6","#page7"];
var curPage = pages[0];

$(document).ready(function(){

   // if the hash is one of page2 to page3, 
   // render the page 
   var newPage = getPage(window.location.hash);
   render(newPage);

   // click event handler: 
   // 1) prevent loading of the new url
   // 2) may trigger hashchange event
   $('nav a').click(function(e){
       e.preventDefault();
       var newPage = $(this).attr('href');
       window.location.hash=newPage;
   });
   
   // hashchange event handler: 
   // convert the hash to one of the three 
   // page names and render the page
   $(window).on('hashchange', function(){
       var newPage = getPage(window.location.hash);
       render(newPage);
   });

});

// render the new page if it is different 
// from the current page 
function render(newPage){
    if (newPage == curPage) return;
    $(curPage).hide();
    $(newPage).show();
    curPage = newPage; 
}

// convert the hash to one of the three page names
// other hash values are converted to page[0] (ie, page1)
function getPage(hash){
   var i = pages.indexOf(window.location.hash);
   return i < 1 ? pages[0] : pages[i];
}

