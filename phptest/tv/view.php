<?php
	
	
	$id = $_REQUEST["id"];
	
	
	require("../db_connect.php");
 
	$query = $db->query("SELECT * ,COUNT(genres.genres_name) as count , GROUP_CONCAT(genres.genres_name) AS genre_id  from tv left join genres ON tv.genre_id LIKE  CONCAT('%',genres.genre_id,'%')  where id='$id'  group by tv.id");
    if ($row = $query->fetch()) {
		$original_title  = str_replace(" ", "&nbsp;", $row["original_title"]);
		$title = str_replace(" ", "&nbsp;", $row["title"]);
		$poster_path = str_replace(" ", "&nbsp;", $row["poster_path"]);
		$age  = str_replace(" ", "&nbsp;", $row["age"]);
		$genre_id  = $row["genre_id"];
		$director = str_replace(" ", "&nbsp;", $row["director"]);
		$cast = str_replace(" ", "&nbsp;", $row["cast"]);
		$overview = str_replace(" ", "&nbsp;", $row["overview"]);
		$backdrop_path = str_replace(" ", "&nbsp;", $row["backdrop_path"]);
		$original_language = str_replace(" ", "&nbsp;", $row["original_language"]);
		$popularity = str_replace(" ", "&nbsp;", $row["popularity"]);
		$vote_average = str_replace(" ", "&nbsp;", $row["vote_average"]);
		$vote_count = str_replace(" ", "&nbsp;", $row["vote_count"]);
		$provider_id = $row["provider_id"];
		$site_path =  str_replace(" ", "&nbsp;", $row["site_path"]);


	}




?>
<br>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        table { width:1000px; text-align:center; }
        th    { width:200px; background-color:#3482EA; }
        td    { text-align:center; border:1px solid gray; word-break:break-all;table-layout:fixed;} 
		
		
		html, body {
			width:100%;
			padding-top: 24.5px;
			height:100%;
		}
		
        
        a:link    { text-decoration:none; color:black; }
        a:visited { text-decoration:none; color:black; }
        a:hover   { text-decoration:none; color:red;  }
        
		.review_num      { width: 100px; }
        .review_date     	{ width:120px; }
        
		.member_num		{ width:80px; }
		.review			{ width:550px;  }
		.star_rating	{ width:50px; }	
		.good			{ width:50px; }
		.del		{ width:50px; }
		
        .logo {
		    cursor: pointer;
		    position: absolute;
		    width: 212px;
		    height: 40px;
		    left: 10px;
		    top: 30px;
		}
        
        .all {
		    width: 100%;
		    height: 100%;
		    margin: 0 auto;
		}
        
        
        .head {
		    position: fixed;
		    width: 1920px;
		    height: 100px;
		    left: 0px;
		    top: 0px;
		    background: #FFFFFF;
		    border: 1px solid #3482EA;
		    box-sizing: border-box;
		}
		
		.sidenav {
		    height: 100vh;
		    width: 300px;
		    position: fixed;
		    margin-left: -10px;
		    background-color: white;
		    overflow-x: hidden;
		    padding-top: 20px;
			padding-left: 20px;
			font-size:20px;
			color:#ffffff;
			background-color:#3482EA;
		    float: left;
		    border: 1px solid #bcbcbc;
		}
		
	
	.rect2{
	 
	  
	  
	  background-color: #3482EA; 
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
	}
		
	.rect3{
			
			
	  
	  background-color: #3482EA; 
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
	}
		
		
		
    </style>
</head>

<body>
<div class="all">
 <div class="head">
	<a href="/movieverse/index.php"><img class="logo"src="/movieverse/img/logo.png"></a>			<!-- ???????????? -->
</div>

<div class="sidenav">
  <a href="../list.php">????????? ?????????</p>
  <a href="../user/list.php">?????? ??????</a>
  <br><br>
  <a href="../movie/list.php">?????? ??????</a>
  <br><br>
  <a href="../tv/list.php">TV ??????</a>
</div>


<h1 style="text-align: center;"> ????????? ????????? </h1>
<h2 style="text-align: center;"> TV ?????? </h2>



<table style="margin-left: auto; margin-right: auto;">

	
	<tr>
        <th>??????ID</th>
        <td><?=$row["id"]?><br></td>
    </tr>
	<tr>
        <th>???????????? ??????</th>
        <td><?=$row["original_title"]?><br></td>
    </tr>
    <tr>
        <th>??????</th>
        <td><?=$row["title"]?><br></td>
    </tr>
    <tr>
        <th>??????????????????</th>
        <td><img src="https://image.tmdb.org/t/p/w220_and_h330_face<?=$row["poster_path"]?>"width="300" height="450"><br></td>
		
		    
    </tr>
    <tr>
        <th>????????????</th>
       <td><?=$row["age"]?><br></td>
    </tr>
    <tr>
        <th>??????</th>
        <td><?=$row["genre_id"]?><br></td>
    </tr>
	
	<tr>
        <th>?????????</th>
        <td><?=$row["release_date"]?><br></td>
    </tr>
	
	<tr>
        <th>??????</th>
        <td><?=$row["director"]?><br></td>
    </tr>
	<tr>
        <th>??????</th>
        <td><?=$row["cast"]?><br></td>
    </tr>
	<tr>
        <th>????????????</th>
        <td><?=$row["overview"]?><br></td>
    </tr>
    <tr>
        <th>??????</th>
        <td><?=$row["original_language"]?><br></td>
    </tr>
	<tr>
        <th>??????</th>
        <td><?=$row["popularity"]?><br></td>
    </tr>
	<tr>
        <th>??????</th>
        <td><?=$row["vote_average"]?><br></td>
    </tr>
	<tr>
        <th>?????????</th>
        <td><?=$row["vote_count"]?><br></td>
    </tr>
	

	<tr>
        <th>OTT</th>
        <td><?php
		
		$providers_id = array( "1", "337", "8", "97" );
		$provider_name = array( "Wavve", "Disney Plus", "Netflix", "Watcha" );	
		$result = str_replace( $providers_id , $provider_name, $provider_id);
		echo $result;
		
?><br></td>
		
		
    </tr>
	
	
	<tr>
        <th>???????????????</th>
        <td><a href="<?=$row["site_path"]?>"><?=$row["site_path"]?></a><br></td>
    </tr>
	<tr>
        <th>????????????????????????</th>
        <td><img src="https://image.tmdb.org/t/p/original<?=$row["backdrop_path"]?>"width="200" height="200"><br></td>
    </tr>
	
	<tr>
        <th>??????/??????</th>
        <td><input class="rect2" type="button" value="??????" onclick="location.href='write.php?id=<?=$id?>'">
			<input class="rect3" type="button" value="??????" onclick="location.href='delete.php?id=<?=$id?>'"></td>
    </tr>
    
</table>




<h2 style="text-align: center;"> ???????????? </h2>


<table style="margin-left: auto; margin-right: auto;">

    <tr style="font-size:20px; color: #ffffff;">
        <th class="review_num"    >????????????    </th>
        <th class="review_date"  >????????????    </th>
		<th class="member_num	"  >??????    </th>
		<th class="review"  >??????    </th>
		<th class="star_rating"  >??????    </th>
		<th class="good"  >good   </th>
		<th class="del"  >??????   </th>
			
      
    </tr>
<?php
	
	require("../db_connect.php");
	 
	$query = $db->query("select *  from review");	
	
    while ($row = $query->fetch()) {

	if($row["tv_id"]==$id){
?>
		<tr style="border-bottom: 50px solid #fffff;">
            <td style="text-align:center"><?=$row["review_num"]?></td>
            <td style="text-align:center"><?=$row["review_date"]?></td>
			<td style="text-align:center"><?=$row["member_num"]?></td>
			<td style="text-align:center"><?=$row["review"]?></td>
			<td style="text-align:center"><?=$row["star_rating"]?></td>
			<td style="text-align:center"><?=$row["good"]?>
			<a href="rvdel.php?review_num=<?=$row["review_num"]?>&id=<?=$id?>">????????????</a></td>
			
        </tr>
<?php
	}
}
?>

</table>


</div>




</body>
</html>