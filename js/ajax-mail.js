$(function(){var e=$(".contact100-form"),t=$(".response");$(e).submit(function(r){r.preventDefault();var s=$(e).serialize();$.ajax({type:"POST",url:$(e).attr("action"),data:s}).done(function(e){$(t).removeClass("error"),$(t).addClass("success"),$(t).text(e),$(".contact100-form input,.contact100-form textarea").val("")}).fail(function(e){$(t).removeClass("success"),$(t).addClass("error"),""!==e.responseText?$(t).text(e.responseText):$(t).text("Oops! An error occured and your message could not be sent.")})})});