<?php
// Text to replace
$text = "PHP Tutorial";
  
// The preg_replace is used here to replace the 
// color of first character of the word
$text = preg_replace('/(\b[a-z])/i', 
'<span style="color:red;">\1</span>', $text);
  
// Display the text value
echo $text;
?>