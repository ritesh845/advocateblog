function fn_state_code(state_code,oldCityCode =''){
    if(state_code !='0'){
        $.ajax({
            type:'get',
            url:"/get_cities/"+state_code,
            success:function(res){
                $('#city').empty();
                $('#city').append('<option value="">Select City</option>');
                $.each(res,function(i,v){
                    $('#city').append('<option value="'+v.city_code+'" '+(oldCityCode == v.city_code ? 'selected' : '')+'> '+v.city_name+' </option>')
                })
            }
        });
    }else{
        $('#city').empty();
    }
   
}

function fn_get_qual(qualCatgCode,oldQualCatgCode =''){
    if(qualCatgCode !='0'){
        $.ajax({
            type:'get',
            url:"/get_qual/"+qualCatgCode,
            success:function(res){
                $('#qual_sub').empty();
                $('#qual_sub').append('<option value="">Select Qual Sub</option>');
                $.each(res,function(i,v){
                    $('#qual_sub').append('<option value="'+v.qual_code+'" '+(oldQualCatgCode == v.qual_code ? 'selected' : '')+'> '+v.qual_desc+' </option>')
                })
            }
        });
    }else{
        $('#qual_sub').empty();
    }
   
}
