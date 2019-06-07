$(document).ready(function(){
    $(".filter-box").hide();
 
    $("#aa-search-input").click(function(){
        $(".filter-box").show(700);
        $(".algolia-autocomplete").addClass("input-background");
        $(".aa-input").addClass("aa-input-placeholder");

    });

    $("main").click(function() {
        $(".filter-box").hide(700);
        $(".algolia-autocomplete").removeClass("input-background");
        $(".aa-input").removeClass("aa-input-placeholder");
    });

 });