 $('#degree_id').change(function(){
        var degree_id = $(this).val(); 
        getCategoriesByDegree(degree_id);
    });
    
    function getCategoriesByDegree(degree_id, category_id) {
        $("#category_id").empty();
        if(degree_id>0){
            $.ajax({
                type:"GET",
                url:cat_url+ "/"+degree_id,
                success:function(data){     
                    $("#category_id").empty(); 
                    if(data){
                        $("#category_id").append('<option>- Select -</option>');
                        $.each(data, function(key,value){
                            $("#category_id").append('<option value="'+key+'">'+value+'</option>');
                        });
                        if(category_id>0) {
                            $('[name="category_id"]').val(category_id);
                        }
                    }
                }
            });
        }
    }
    $('#category_id').change(function(){
        var category_id = $(this).val(); 
        getProgramByCategory(category_id);
    });
    
    function getProgramByCategory(category_id, program_id) {
        $("#program_id").empty();
        if(category_id>0){
            $.ajax({
                type:"GET",
                url:pro_url+"/"+category_id,
                success:function(data){     
                    $("#program_id").empty(); 
                    if(data){
                        $("#program_id").append('<option>- Select -</option>');
                        $.each(data, function(key,value){
                            $("#program_id").append('<option value="'+key+'">'+value+'</option>');
                        });
                        if(program_id>0) {
                            $('[name="program_id"]').val(program_id);
                        }
                    }
                }
            });
        }
    }