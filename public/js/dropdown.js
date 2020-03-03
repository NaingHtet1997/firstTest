 
    $('#degree_id').change(function(){

    var degree_id = $(this).val(); 
  
    if(degree_id){
        $.ajax({
           type:"GET",
             url:base_url+ "/"+degree_id,
           
           
           success:function(data){  
                      
            if(data){
                $("#category_id").empty();
                $("#category_id").append('<option>Select Job Title</option>');
                $.each(data,function(key,value){
                    $("#category_id").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#category_id").empty();
            }
           }
        });
    }else{
        $("#category_id").empty();
      
       
    }      
   });

   $('#state').change(function(){

    var state_id = $(this).val(); 
  
    if(state_id){
        $.ajax({
           type:"GET",
             url:state_url+ "/"+state_id,
           
           
           success:function(data){  
                      
            if(data){
                $("#township").empty();
                $("#township").append('<option>Select Township</option>');
                $.each(data,function(key,value){
                    $("#township").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#township").empty();
            }
           }
        });
    }else{
        $("#township").empty();
       
       
    }      
   });

    $('#degree').change(function(){

    var degree_id = $(this).val(); 
  
    if(degree_id){
        $.ajax({
           type:"GET",
             url:major_url+ "/"+degree_id,
           
           
           success:function(data){  
                      
            if(data){
                $("#major").empty();
                $("#major").append('<option>Select Major</option>');
                $.each(data,function(key,value){
                    $("#major").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#major").empty();
            }
           }
        });
    }else{
        $("#major").empty();
      
       
    }      
   });
   

   