
    $(document).ready(function() {
    $(".deg_hide").hide();
    $("input[name$='type']").click(function() {
        var test = $(this).val();
                if(test == 1){
             $(".deg_hide").show();
        }else{
         $(".deg_hide").hide();
        }
       
       
    });
       $('#deg_id').change(function(){

    var deg_id = $(this).val(); 
  
    if(deg_id){
        $.ajax({
           type:"GET",
             url: base_url +"/"+deg_id,

            
           
           success:function(data){  
            console.log(data);    
            if(data){
                $("#pro_id").empty();
                $("#pro_id").append('<option>Select</option>');
                $.each(data,function(key,value){
                    $("#pro_id").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#pro_id").empty();
            }
           }
        });
    }else{
        $("#pro_id").empty();
        $("#pro_id").empty();
       
    }      
   });

  });
