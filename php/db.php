<?php
require_once('connection.php');
if(isset($_POST['movie']) && isset($_POST['time'])){
  $count = 0;
  $stmt = $conn->prepare("INSERT INTO movie (id_movie, movie_overview, release_date, name_movie, movie_image, runtime, rating) VALUES (?, ?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssssi", $id, $overview, $date, $name, $image, $time, $rating);
  $stmt1 = $conn->prepare("INSERT INTO movie_genre (id_movie, id_genre) VALUES(?, ?)");
  $stmt1->bind_param("ss",$idM, $idG);
  foreach($_POST['movie'] as $i){
    $id = $i['id'];
    $overview = $i['overview'];
    $date = $i['release_date'];
    $name = $i['title'];
    $image = 'https://image.tmdb.org/t/p/w500/'.$i['poster_path'];
    $time = $_POST['time'][$count];
    $rating = $i['vote_average'];
    $count++;
    $stmt->execute();
    foreach($i['genre_ids'] as $j){
      $idM = $i['id'];
      $idG = $j;
      $stmt1->execute();
    }
  }
  $stmt->close();
  $stmt1->close();
  $conn->close();
  // echo $_POST['movie'];
}
if(isset($_POST['cast']) && isset($_POST['dic']) && isset($_POST['idMovie'])){
  $stmt = $conn->prepare("INSERT INTO caster (id_cast, cast_name) VALUES (?, ?)");
  $stmt->bind_param("ss",$id, $name);
  $stmt1 = $conn->prepare("INSERT INTO movie_caster (id_movie, id_cast) VALUES (?, ?)");
  $stmt1->bind_param("ss",$idM, $idC);
  foreach($_POST['cast'] as $i){
    $id = $i['id'];
    $name = $i['name'];
    $idM = $_POST['idMovie'];
    $idC = $i['id'];
    $stmt->execute();
    $stmt1->execute();
  }
  $stmt = $conn->prepare("INSERT INTO director (id_director, director_name) VALUES (?, ?)");
  $stmt->bind_param("ss",$idD, $nameD);
  $stmt1 = $conn->prepare("INSERT INTO movie_director (id_movie, id_director) VALUES (?, ?)");
  $stmt1->bind_param("ss",$idM, $idDic);
  foreach($_POST['cast'] as $j){
    $idD = $j['id'];
    $nameD = $j['name'];
    $idM = $_POST['idMovie'];
    $idDic = $i['id'];
    $stmt->execute();
    $stmt1->execute();
  }
  $stmt->close();
  $stmt1->close();
  $conn->close();
  // echo $_POST['idMovie'];
}
if(isset($_POST['trailer'])){
  $trailer = "https://www.youtube.com/embed/".$_POST['trailer'];
  $id = $_POST['id'];
  $sql = "UPDATE movie set trailer='$trailer' where id_movie = '$id'";
  if($conn->query($sql) === TRUE){
    echo "Success";
  }else{
    echo "Fail";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
<p></p>
</body>
<script>
  $(document).ready(function(){
    const API_KEY = "api_key=582118d727a442d47c146c982576a944";
    const BASE_URL = "https://api.themoviedb.org/3";
    const HOME_URL =
          BASE_URL +
           "/discover/movie?language=en-US&sort_by=popularity.desc&" +
          API_KEY;
    function getMovies(HOME_URL) {
        lastUrl = HOME_URL;
    
        fetch(HOME_URL).then((response) => {
          if (response.status !== 200) {
            console.log("Error, error code: " + response.status);
            return;
          }
        response.json().then((data) => {
          let movies = data.results;
          let movie_time = [];

          movies.forEach((i) => {
            fetch(
          BASE_URL + "/movie/" + i.id + "?" + API_KEY + "&language=en-US"
        ).then(async(response_time) => {
          if (response_time.status !== 200) {
            console.log("Error, error code: " + response_time.status);
            return;
          }
          let temp = await response_time.json().then(time=>{
            return time.runtime;
          })
          movie_time.push(temp);
          if(movie_time.length == movies.length){
              $.post("db.php",
              {
                movie:movies,
                time:movie_time
              },function(result){
                // $('p').text(result)
              },'text');
            }
        })
          let cast = []
          let dic = []
          fetch(BASE_URL+"/movie/"+i.id+"/credits?"+API_KEY).then((response)=>{
            if (response.status !== 200) {
            console.log("Error, error code: " + response.status);
            return;
            }
            response.json().then((data)=>{
                data.cast.forEach((j) =>{
                  if(cast.length!=3){
                    if(j.known_for_department == "Acting")
                      cast.push(j)
                  }
                })
                data.crew.forEach((k) =>{
                  if(dic.length!=1){
                    if(k.known_for_department == "Directing")
                      dic.push(k)
                  }
                })
                $.post("db.php",
                {
                  idMovie:i.id,
                  cast:cast,
                  dic:dic
                },function(result){
                  
                },'text')

              })
            })
          fetch(BASE_URL+"/movie/"+i.id+"/videos?"+API_KEY).then(res=>res.json())
          .then(videoData =>{
            if(videoData.results.length>0)
              $.post("db.php",{trailer:videoData.results[0].key, id:i.id},function(){},'text')
            else 
              $.post("db.php",{trailer:"null", id:videoData.id},function(){},'text')
          })

          });
        });
      });
    }
    for(i=1;i<=1;i++){
      getMovies(HOME_URL+'&page='+i)
    }
  })
</script>
</html>