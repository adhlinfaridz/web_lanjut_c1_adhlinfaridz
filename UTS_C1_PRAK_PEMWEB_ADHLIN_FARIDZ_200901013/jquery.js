$("#login").click(function(){
    var username = $("#username").val()
    if (username == ""){
        $("#username").text("username mohon diisi")
    }else{
        $("#username").text("")
    }

    var Password = $("Password").val()
    if (Password == ""){
        $("#Password").text("Password mohon diisi")
    }else{
        $("#Password").text("")
    }

})