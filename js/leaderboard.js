$(document).delegate('.ui-page', 'pageshow', function () {
    var userInfo = JSON.parse(localStorage.getItem("loggedUser"));
    var userName = userInfo.username;
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
        $(document).ready(function(){
            $.each(rankingArray, function(key, value){
                if(value.userName==userName){
                    $("#leaders").append(
                        '<div class="ui-grid-b" id="ui-grid-ranks-self">'+
                        '<div class="ui-block-a" style="text-align:center; height:40px; padding-top:10px;"><b>'+value.rank+'</b></div>'+
                        '<div class="ui-block-b" style="text-align:center;padding-top:10px;"><b>'+value.userName+'</b></div>'+
                        '<div class="ui-block-c" style="text-align:center;padding-top:10px;"><b>'+value.weekPoints+'</b></div>'
                    );
                }else{
                    $("#leaders").append(
                        '<div class="ui-grid-b" id="ui-grid-ranks">'+
                        '<div class="ui-block-a" style="text-align:center; height:40px; padding-top:10px;"><b>'+value.rank+'</b></div>'+
                        '<div class="ui-block-b" style="text-align:center;padding-top:10px;"><b>'+value.userName+'</b></div>'+
                        '<div class="ui-block-c" style="text-align:center;padding-top:10px;"><b>'+value.weekPoints+'</b></div>'
                    );
                }
            });
        });
        // document.getElementById("rank").innerHTML=rankingArray[i].rank;
    

});