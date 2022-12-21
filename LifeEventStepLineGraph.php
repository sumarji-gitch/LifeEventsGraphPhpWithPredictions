<!DOCTYPE html>
<html>
<body bgcolor=''>
 <!--<body bgcolor="lightgray">-->
 <marquee font style="bold" scrolldelay="70"><font size="6" face="Verdana"><font color="green">***FOR APPOINTMENTS CONTACT 8073029417 WhatsApp/Telegram***</marquee>
      <center>
          <a href="https://kshemasolutions-1.paiza-user-free.cloud/~ubuntu/LifeEventsGraphWithBriefPredictions.php"> Home Page </a>
          <a href="https://kshemaastrosolutions.weebly.com"> Visit Our Web Page </a>
          <a href="https://kshemaastrosolutions.weebly.com/contact-us.html"> Contact Us </a>
        <h1 style="color:blue;">
            KSHEMA ASTRO SOLUTIONS
        </h1>
        <form method="POST">
		   <h3> Enter Date Month and Year as Valid Numeric Values</h3><br>
            Enter a Date: 
            <input type="number" name="num1">
            Enter a Month: 
            <input type="number" name="num2">  
			Enter a Year: 
            <input type="number" name="num3"> 
            <input type="Submit" 
                value="SUBMIT"><br><br>
        </form>
		
		
    </center>
</body>
  
</html>
  
<?php
 $dm = NULL;
 $total = NULL;
  $dob = NULL;
 $dobs = NULL;
 $dobsum = NULL;
 $dobsum1 = NULL;
 $dobsum3 = 1;
 $d = 9;
 $m = 8;
 $y = 1986;
 $array1 = NULL;
 $array1[0]= NULL;
 $array1[1] = NULL;
 $array1[2] = NULL;
 $array1[3] = NULL;
 $array1[4] = NULL;
 $array1[5] = NULL;
if($_POST) {
    $d = $_POST["num1"];
    $m = $_POST["num2"];
	$y = $_POST["num3"];
	
	echo(" DOB :");
	echo(" Date: " . $d);
	echo(" Month: " . $m);
	echo(" Year: " . $y);
		
	      
   $dob=array($d,$m,$y);
   $dobs=array_sum($dob);
   $dobsum= str_split($dobs);
   $dobsum1=array_sum($dobsum);
   $dobsum2=str_split($dobsum1);
   $dobsum3=array_sum($dobsum2);
   #echo $dobs;
  #echo $dobsum3;
    function randomColor(){
		$rcolor = '#';
		for($i=0;$i<6;$i++){
		$rNumber = rand(0,15);
		switch ($rNumber) {
		case 10:$rNumber='A';
		break;
		case 11:$rNumber='B';
		break;
		case 12:$rNumber='C';
		break;
		case 13:$rNumber='D';
		break;
		case 14:$rNumber='E';
		break;
		case 15:$rNumber='F';
		break;
	}
		$rcolor .= $rNumber;
	}
		#$rcolor = '#FF0000';
		return $rcolor;
	}	
	echo '<h3 style="text-align:center; background-color:'.randomColor().';color:'.randomColor().'">Tentative Life Events Graph Based on Sanchit(accumulated works) KARMA only. Prarabdha(fructifying works) And Aagami(current or up-coming works) KARMA 
and Sat Gurus (True Master) Blessing May Vary the GraphLine to greater extent!!</h3>';
}
	switch ($dobsum3) {
  case "9":
    echo "The opposite of longevity. Nines are distinguished by their ability to die early. The cause of death can be absolutely anything. Here it is impossible to single out critical years or dangerous elements. Nines must accept their fate and fulfill their life purpose. Strengths: Nines are idealistic and deeply principled, unwilling to compromise their values in favor of convenience. They tend to be stylish, agreeable, and generous.
 Challenges: This type risks codependency in personal relationships and may have trouble enjoying the present rather than focusing so heavily on their dreams for the future.";
    break;
  case "8":
    echo "Eights must beware of adrenaline: racing, jumping, sports, tourism. All this leads to death or irreparable illness. If you lead the right lifestyle, a person with this code lives up to 64 years. Critical years: 44, 47.49 and 56. Eights should avoid extreme sports
	Strengths: Eights are good with money, aware of its omnipresence from a very young age. They’re ambitious and willing to work hard to be self-sufficient and comfortable.
Challenges: This type’s skill with money means they might be susceptible to grifters, whether professionally or personally. They’re also at risk of becoming workaholics.";
    break;
  case "7":
    echo "The Guardian Angel of the Seven is always there. It is necessary to beware of fire and water. These are the only elements that can take life ahead of time. Sevens live up to 78-85 years. Their lives are going well. However, they may have health problems that will shorten the last stretch of life. Critical years: 5, 11, 22, 37, 41.
	Strengths: Deeply creative with a strong and vivid imagination, sevens thrive in the internal world. They’re able to entertain themselves endlessly and are rarely bored.
Challenges: Unsurprisingly, this type can be a bit shy and may have a hard time connecting with other people. They may also have a hard time relaxing, moving constantly between work and constructive hobby.";
    break;
	case "6":
    echo "One of the most dangerous numbers(just like Punit Rajkumar sir his life was extended to 45 46age eventhough he had only life span of 24 to 36age) in your natal chart. With these natives, anything can happen. You can’t lose heart and attract trouble, you need to think only about the good, then the sixes live up to 45 years and more. Critical years: 16, 18 and 34. Strengths: This type is likely to be an impassioned speaker and activist, whether professionally or personally, on behalf of one’s loved ones. Their curiosity and compassion make them great lawyers, speakers, and therapists.
Challenges: Sixes may have a hard time with consistency, especially when it comes to taking care of themselves (sort of the “Mark Ruffalo eating cold pizza in Spotlight” type).";
	 break;
	 case "5":
	 echo "A good figure, but not a long-liver. They are lucky all their lives, but this will not help to go over 70+. They just die a natural death, without pain. Approximate years of death from 45 to 68.
Critical years: 17, 24, 32, 36, 39, 45, 47, 55, 58, 61. During this period, irreparable things can happen: accident, illness, misfortune. Fives must always be on the alert.
Strengths: Fives are inquisitive and intellectual, often making for great journalists and educators. Strong communication skills with a childlike sense of wonder for simple pleasures.

Challenges: Fives may indulge a little too much in their favorite hobbies/vices, like shopping or partying. May also come off a bit superficial and noncommittal in relationships.";
	 break;
	 case "4":
	 echo "Real longevity. They are never in danger. They easily cross the border in 100 years. These people have health problems, but not critical ones. All accidents turn into good luck and will not bring any grief. Fours do not have critical years. All that is required of them is the right way of life. Strengths: This is generally a very principled, reliable person, which makes them a desirable friend and co-worker. People generally know what to expect from a four.
Challenges: This type can become rigid, too fixated on rules and norms. Fours may find themselves easily frustrated by people who create their own guidelines or stray too far outside the box.";
	 break;
	 case "3":
	 echo "Longevity is average. Exactly half of their lives, threes live carefree and healthy. Good luck and prosperity are constant companions of these people. They say they were born in a shirt. But after 40 years everything changes. They begin to hurt sharply and severely. They are haunted by strange and absurd cases. Rarely do threesomes live to be 70 years old. However, if you lead the right lifestyle, there is a chance to attend the wedding of grandchildren.
A healthy lifestyle will help triplets live longer. Strengths: Threes love attention and generally come by it easily. They can achieve a great many things and are likely precocious as children. Always high energy.
Challenges: Just as easily as threes start big, exciting projects, they often abandon them. Threes likely find it difficult to focus/commit and may become too focused on others’ perceptions of them.";
	 break;
	 case "11":
	 case "2":
	 echo "The opposite of unity. Unfortunate characteristic number. For such a person, there is a high probability of tragedy, death. Twos must take care of their health, beware of dangerous areas and people. Trouble follows them. A constant series of troubles and illnesses does not allow deuces to cross the threshold of 65 +. Critical years: 16, 19, 21.26, 29, 35, 39, 48, 51. Strengths: These people are deeply kind, caring, and empathetic. They’re often artists, though their skill for diffusing tense situations may also make them skilled as politicians.
Challenges: Deep sensitivity and conflict aversion can make 2s overly dependent in their personal relationships. They may have a hard time standing up for their needs.";
	 break;
	 case "1":
	 case "10":
	 echo "You are a long-liver. Units often cross the threshold of 85+. They are healthy and active for most of their lives. In declining years, problems with joints and blood vessels begin, but nothing dangerous happens. They are not threatened by a tragic accident or misfortune. Critical years speak of some dangers, but they will not take away vitality or time, rather one should be more vigilant in everything. Critical years: 5, 12, 18, 26, 28, 34 and 42. Strengths: Ones are natural-born leaders, ambitious, and usually successful in the professional realm. Charming, diplomatic, and always interesting to be around.
Challenges: Ones are caring to the point that they may be overprotective and domineering. May also be prone to anger issues.";
	 break;
  default:
    echo "Zero 0 is a low energy level, possibly a disease. Man is on the border between life and death.";
}
 switch ($d) {
  case "9":
  case "18":
  case "27":
    echo " Hard Worker, Impatient, Generous and Angry Nature; Relationship issues with many peole due to striaght forward and cut-throught communication; Native needs to Learn Diplomacy Policy";
    break;
  case "8":
  case "17":
  case "26":
	echo "Professional, Deep thinker, Angry and Ambitious, Judicious and can be corrupted by other means easily by authoratative persons";
	break;
	case "7":
	case "16":
	case "25:":
	echo "Very Clever, Restless, Attractive and Holly nature";
	break;
	case "6":
	case "15":
	case "24":
	echo "Friendly, Romantic and Magnetic, Love marriage possiblities indicated, Glamarous,Soft Spoken and Impatient";
	break;
	case "5":
	case "14":
	case "23":
	echo "Intelligent, Quick Learner, Sharp minded, Will be able to get a Big Picture, Restless both physically and mentally unless sleeping, very very Friendly";
	break;
	case "4":
	case "13":
	case "22":
	case "31":
	echo "Very Clever, Stubborn, Interested in Debates and a very Good Planner and stategy makers, native will see a boom and bursts suddenly and unexpectedly, Reseach oriented inclination possible";
	break;
	case "3":
	case "12":
	case "21":
	case "30":
	echo "Spiritual, Religious, Sometimes Romantic, Very Ambitious, Creative and try to be Happy";
	break;
	case "2":
	case "11":
	case "20":
	case "29":
	echo "Social, Friendly, Very less(or No) enemies otherthan close relatives at-times not always, Overconfident";
	break;
	case "1":
	case "10":
	case "19":
	case "28":
	echo "Honest Stubborn, Family care taker, Angry, Prideful, Wants a private space and people misunderstand his loneliness(solitude or introvert) as not a social and egostic since they talk only when necessary ";
	 break;
  default:
    echo "Not a valid Date";
 }
	$dm = ($d * $m);
	$total = ($dm * $y);
	#echo $total;
	$array1  = array_map('intval', str_split($total));
    
	#var_dump($array);
	$dataPoints = array(
	array("y"=>$array1[0], "label"=> "12age"),
	array("y"=>$array1[1], "label"=> "24age"),
	array("y"=>$array1[2], "label"=> "36age"),
	array("y"=>$array1[3], "label"=> "48age"),
	array("y"=>$array1[4], "label"=> "60age"),
	array("y"=>$array1[5], "label"=> "72age")
	);
?>
<!DOCTYPE HTML>
<html>
<head>
<script>

window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Life EVENTS with Ups and Downs "
	},
	subtitles: [{
		text: "Indicated in this LineGraph with X-Axis As Age"
	}],
	axisY: {
		title: "Life Events -Y AXIS"
	},
	data: [{
		type: "spline",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}],
	
});
chart.render();
}
</script>

</head>
<body> 
<center>
<div id="chartContainer" style="height: 270px; width: 60%;"></div>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<h3 style='color:red';> <p> "NOTE: Upward Trend in Graph indicates Gains or Rewards or Improvements in Life at that Stage;</p>
<p>Downward Trend in Graph may indicated Physical/Mental(Emotional)Health Issues or Financial or Career Related SetBacks." </p>
<p> If the GraphLine is touching Zero(0) low energy level, possibly a disease. Native is on the border between life and death.</p>
</h3>
<script>
  var widgetApp = "calendar";
  var widgetLanguage = "en";
  var widgetSize = 0;
  var widgetMainBg = "cceefa";
  var widgetText = "0033bb";
  var widgetBorder = "1";
  var widgetStyle = "outset";
  var widgetRadius = "12";
  var widgetGmtBg = "ddffdd";
  var widgetGmtColor = "003377";
  var widgetRetro = "b";
</script>
<script src="https://astro-app.net/js/widget.js" style="height: 370px; width: 40%;"></script>
<iframe name='iframe4' id='iframe4' 
src="https://www.mypanchang.com/jatakam/kundliwidget.php" 
scrolling="no" width="260px" height="280px" 
frameborder="0" style="border:none;" 
allowTransparency="true"></iframe> <br>
 <iframe 
src="https://www.mypanchang.com/mypanchangwidget.php" 
scrolling="no" width="275px" height="240px" frameborder="0" 
style="border:none;" allowTransparency="true">
</iframe>
</center>

</body>
</html>   