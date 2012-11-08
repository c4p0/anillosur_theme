<?php

elgg_load_css('anillosur:landing_page');

$title = elgg_echo('anillosur_theme:landing:title');
$title2 = elgg_echo('anillosur_theme:landing:title2');
$subtitle = elgg_echo('anillosur_theme:landing:subtitle');

echo <<<HTML
<div id="anillosur-landing">
<div id="anillosur-landing-inner">

<p id="anillosur-landing-title">$title</p>
<p id="anillosur-landing-subtitle">$subtitle</p>
<i><p id="anillosur-landing-title2">$title2</p></i>

</div>
</div>
HTML;
