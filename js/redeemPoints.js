$(document).delegate('.ui-page', 'pageshow', function () {
    var userInfo = JSON.parse(localStorage.getItem("loggedUser"));
    var totalPoints = userInfo.points;
    document.getElementById("availablePoints").innerHTML= totalPoints;

});


$(document).on('click', '.redeem', function(e) {

    var userInfo = JSON.parse(localStorage.getItem("loggedUser"));
    var userName = userInfo.username;
    var totalPoints = userInfo.points;
    var pointsRedeemed = 0;
    var remainingPoints = 150;

    document.getElementById("availablePoints").innerHTML= totalPoints;
    if($("#pointsAmnt").val().length == 0){
        document.getElementById("errorDiv").innerHTML = "Please enter a number";
    }else if((totalPoints- $("#pointsAmnt").val())<100){
        document.getElementById("errorDiv").innerHTML = "Minimum 100 points should remain in your wallet!";
    }else if($("#pointsAmnt").val()<0){
        document.getElementById("errorDiv").innerHTML = "Please enter a valid amount";
    }else {
        pointsRedeemed=$("#pointsAmnt").val();
        remainingPoints= totalPoints-pointsRedeemed;
        var newUserInfo={
            "username" : userName,
            "weekPoints" :userInfo.weekPoints,
            "points" : remainingPoints
        }
        localStorage.setItem('loggedUser', JSON.stringify(newUserInfo) );
        sessionStorage.setItem('pointsRedeemed',$("#pointsAmnt").val());
        console.log(sessionStorage);
        window.location.href="redeemSuccess.php";
        return false;
    }
});