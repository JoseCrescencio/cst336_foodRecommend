$(document).ready(function(){
    
    $("#login_btn").click(function() {
        window.location.href="login.php";
        return false;
        
    });
    
    $("#choose").hide();
    
    $.ajax({
        type:"POST",
        url:"fillCuisine.php",
        dataType:"json",
        success:function(data){
            $("#cuisines").html("<option value='0'> Select One </option>");
            for(var i = 0; i < data.length; ++i){
                $("#cuisines").append("<option value='" + data[i].type + "'>" + data[i].type + "</option>");
            }
        },
        complete:function(data,status){
        }
    }); //Ajax
    
    $.ajax({
        type:"POST",
        url:"fillcity.php",
        dataType:"json",
        success:function(data){
            $("#city").html("<option value='0'> Select One </option>");
            for(var i = 0; i < data.length; ++i){
                $("#city").append("<option value='" + data[i].city + "'>" + data[i].city + "</option>");
            }
        },
        complete:function(data,status){
        }
    });
    
    $("#choose").change(function(){
        
        $.ajax({
            type:"POST",
            url:"displayresults.php",
            dataType:"json",
            data:{"name" : $("#choose").val()},
            success: function (data){
                $("#choose").hide();
                $("#result").html("Name:" + data.name + "</br> Address: " + data.address + ", " + data.city + ", CA" );
            },
            complete: function(data,status){
                // alert(status);
            }
        });//Ajax
    });
    
    $("#mainForm").on("submit",function() {
            $("#result").html("");
            
            $.ajax({
                type:"POST",
                url:"getresturants.php",
                dataType:"json",
                data: {"cost" : $("#cost").val(), "city" : $("#city").val(), "cuisine" : $("#cuisines").val()},
                success:function(data){
                    if(data.length == 1){
                        $("#result").html("Name:" + data[0].name + "</br> Address: " + data[0].address + ", " + data[0].city + ", CA" );
                    }
                    else if(data.length > 1){
                        $("#choose").show();
                        $("#choose").html("<option value='0'> Select One </option>");
                        for(var i = 0; i < data.length; ++i){
                            $("#choose").append("<option value='" + data[i].name + "'>" + data[i].name + "</option>");
                    }
                    }
                    else{
                        $("#result").html("NO SUCH PLACE");
                    }
                },
                complete: function(data,status){
                    // alert(status);
                }
            });//Ajax
            
            
        return false;
    });
    
});
