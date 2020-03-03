  $('#deg').change(function(){
        var degree_id = $(this).val(); 
        getMajorByDegree(degree_id);
    });
    
    function getMajorByDegree(degree_id, major_id) {
        $("#maj").empty();
        if(degree_id>0){
            $.ajax({
                type:"GET",
                url:major_url+"/"+degree_id,
                success:function(data){     
                    $("#maj").empty(); 
                    if(data){
                        $("#maj").append('<option>- Select -</option>');
                        $.each(data, function(key,value){
                            $("#maj").append('<option value="'+key+'">'+value+'</option>');
                        });
                        if(major_id>0) {
                            $('[name="major_id"]').val(major_id);
                        }
                    }
                }
            });
        }
    }