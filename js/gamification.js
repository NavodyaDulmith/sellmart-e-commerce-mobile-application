$(document).delegate('.ui-page', 'pageshow', function () {
    var userInfo = JSON.parse(localStorage.getItem("loggedUser"));
    var pointsInfo = JSON.parse(localStorage.getItem("pointInfo"));
    var userName = userInfo.username;
    var weekPoints = userInfo.weekPoints;
    var points = userInfo.points;
    var rankingArray= [];
    var ranking = pointsInfo.sort(function(a, b){return b.weekPoints - a.weekPoints});
    var rank= 0;
    index = 0;
    while (index < ranking.length) { 
        var users ={ userName: ranking[index].userName, weekPoints: ranking[index].weekPoints, rank: index+1}
        rankingArray.push(users);
        if(rankingArray[index].userName==userName){
                    rank = rankingArray[index].rank;
        }
        index++; 
    }
    
    // while (index2 < rankingArray.length){
    //     if(rankingArray[index2].userName==userName){
    //         rank = rankingArray[index2].rank;
    //     }
    // }

    document.getElementById("weekPoints").innerHTML= weekPoints;
    document.getElementById("totalPoints").innerHTML= points;
    document.getElementById("rank").innerHTML= rank;

});