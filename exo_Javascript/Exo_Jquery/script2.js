



$("#values-btn").click(function(e){

    let href= $('a').attr("href");
    let type= $('a').attr("type");
    let hreflang=$('a').attr("hreflang");
    let rel=$('a').attr('rel');

    $('<li>').html("href --> "+ href).appendTo("body");
    $('<li>').html("type --> "+type).appendTo("body");
    $('<li>').html("hreflang --> "+hreflang).appendTo("body");
    $('<li>').html("rel --> "+rel).appendTo("body");
    
    console.log(href,type,hreflang,rel)
    });