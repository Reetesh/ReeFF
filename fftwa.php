<html>
<?php $xmlobj = simplexml_load_file("http://search.twitter.com/search.atom?q=from%3Areetesh"); ?>

<?php
$i=0;
while($i<15)
{ 
?>
<div class="twtb"><a href="<? print $xmlobj->entry[$i]->author->uri;?>"><? print $xmlobj->entry[$i]->author->name; ?></a> : <a class="twtb" href="<?php print $xmlobj->entry[$i]->link[href]; ?>"><?php print $xmlobj->entry[$i]->title; ?></a></div>

<? $i++; } ?>
</html>