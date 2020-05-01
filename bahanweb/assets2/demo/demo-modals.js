    
    $('#bootbox-demo-1').click(function(){
        bootbox.alert("Hello world!");    
    });
    

    $('#bootbox-demo-2').click(function(){
        bootbox.alert("Hello world!", function() {
            alert("Hello world callback");
        });  
    });
    

    $('#bootbox-demo-3').click(function(){
        bootbox.confirm("Are you sure?", function(result) {
         alert("Confirm result: "+result);
     }); 
    });
    

    $('#bootbox-demo-4').click(function(){
        bootbox.prompt("What is your name?", function(result) {
            if (result === null) {
                alert("Prompt dismissed");
            } else {
                alert("Hi <b>"+result+"</b>");
            }
        });
    });
    

