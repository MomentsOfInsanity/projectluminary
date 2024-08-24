<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.themoviedb.org/3/search/movie?query=baby%20driver&include_adult=false&language=en-US&page=1",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIyNmE3ODRiNWFiYjg0YzJmNDI1MWZiMzE5YzNkZDU2MyIsIm5iZiI6MTcyNDQ2ODM3MC45NjYxNDksInN1YiI6IjY2Yzk0YWM1MDNlZTViNjYwNjE1YmM4NiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.iyRcJYwQ5DHWhj4iZDfD0AQ65AkbTfJjf2MTG3NJ4mQ",
    "accept: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response->poster_path;
}
?>