<?
	header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE HTML>
<html>
<title>Latest Google Doodle</title>
<style>
img
{
	width: 230px;
	max-heigt: 20px;
}
p
{
	font-size: 12px;
}
</style>
<body>
<?

$url = "http://www.google.com/doodles/doodles.xml";
$xml = simplexml_load_file($url);

if($xml != null)
{
	echo "<div style='font-weight: bold; font-size: 10px;'>" . $xml->channel->item[0]->title . "</div>\n";
	preg_match_all('/<img[^>]+>/i',$xml->channel->item[0]->description, $img);
	echo $img[0][0] . "\n";
}
?>
<p>Source: <a href="http://www.google.com/doodles/doodles.xml" rel="nofollow" target="_blank">Google Doodles</a></p>
</body>
</html> 