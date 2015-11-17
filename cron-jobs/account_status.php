<?php
//https://www.facebook.com/alzyaat
function get_title($url){
    $str = file_get_contents($url);
    if(strlen($str)>0){
        $str = trim(preg_replace('/\s+/', ' ', $str)); // supports line breaks inside <title>
        preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title); // ignore case
        return $title[1];
    }
}

function get_tag( $attr, $value, $xml )
{
    $attr = preg_quote($attr);
    $value = preg_quote($value);

    $tag_regex = '/<div[^>]*'.$attr.'="'.$value.'">(.*?)<\\/div>/si';

    preg_match($tag_regex,
        $xml,
        $matches);
    return $matches[1];
}

$sql='';
$query='';

$db = mysql_connect("127.0.0.1", "guru", "Pr0misemethis?");
$selected = mysql_select_db("opiceisis",$db);
$result = mysql_query("SELECT id, twitter FROM isismembers WHERE twitterstatus=1");

while ($row = mysql_fetch_array($result))
{
    $twitter_url =  get_title($row{'twitter'});
    $pos = strpos($twitter_url, 'Account Suspended');

    if ($pos !== false)
    {
        $id = $row{'id'};
        mysql_query("UPDATE isismembers SET twitterstatus = 0 WHERE id = $id");
    }
}

$result_facebook = mysql_query("SELECT id, facebook FROM isismembers WHERE facebookstatus=1");

while ($row = mysql_fetch_array($result_facebook))
{
    $html = file_get_contents($row{'facebook'});
    sleep(10);
    echo $html;

    //$extract = get_tag( 'class', 'accessible_elem', $html);
    //echo $extract;
}











