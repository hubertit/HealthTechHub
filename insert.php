<?php
$link = mysqli_connect("localhost", "root", "", "hth");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "INSERT INTO `responses`(`response_id`, `names`, `email`, `nameofcompany`, `doesyourstartuphaveanexistinglegalentityinafrica?`, `companyurl`, `describewhatyouarebuildingin100charactersorless`, `whatyeardidyoustartworkingonthisidea`, `whichcountryisyourcompanybasedin`, `isyourcompanylegallyregisteredinthesamecountry`, `howmanypeopledoesyourstartupcurrentlyimpact`, `whatsyourcurrentrevenue`, `whatsyourcurrentfundingamount`, `howmanyfoundersareyou`, `nameallcofoundersandwhatroletheyhaveinyourcompany.`, `whatmadeyouworktogetheronthisideaandwhyisyourteamth`, `inwhichmainhealthtechareaareyouaimingtoachieveimpact`, `whatistheprimarycomponentofyourbusinessmodel`, `whatisyourcustomerbase`, `whoarethemainbeneficiariesusersofthesolution`, `whatistheproblemyouaretryingtosolvefortheminsimplet`, `howfarhaveyougottenwithyourstartupgrowth`, `howdoesyourteamknowthatpeoplewantyoursolutioninstead`, `whoareyourcompetitorstodayandinthefuture?behonest`, `whatisyourprimaryfocusforproductdevelopmentrightnow`, `whatchallengeswillyouhavewithscalinglegalaspects`, `whatpopulationhealthinsightsdrivenbydatadoesthesolution`, `howisyourtechnologyfittouselowincomesettings`, `isyourimpactintegratedintoyourproductonaperunitorper`, `howlongwilltheimpactfromoneunitofyourproductservice`, `sharealinktoa3minvideoofyourfounderspitchingyour`, `uploadyourpitchdeckmax10 slides`, `wheredidyouhearaboutthehealthtechhubafrica`, `isthereanythingyouwanttoaddabouttheimpactyourinnovati`) VALUES (NULL,'','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')";
if(mysqli_query($link, $sql)){
    echo "Responses inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>