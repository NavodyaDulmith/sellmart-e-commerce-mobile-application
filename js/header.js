var userInfo = {
    "username": "Charaka",
    "weekPoints": 22,
    "points": 150
};

var pointsInfo = [
    {
        "userName": "Charaka",
        "weekPoints": 22,
    },
    {
        "userName": "Navodya",
        "weekPoints": 40, 
    },
    {
        "userName": "Himasha",
        "weekPoints": 30, 
    },
    {
        "userName": "Uvindu",
        "weekPoints": 25, 
    }    
]

//Store the object in local storage
localStorage.setItem('loggedUser', JSON.stringify(userInfo));
localStorage.setItem('pointInfo', JSON.stringify(pointsInfo));