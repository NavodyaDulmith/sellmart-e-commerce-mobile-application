$(document).delegate('.ui-page', 'pageshow', function () {
    var pointsRedeemed = JSON.parse(sessionStorage.getItem('pointsRedeemed'));
    document.getElementById("redeemedPoints").innerHTML= pointsRedeemed;

});