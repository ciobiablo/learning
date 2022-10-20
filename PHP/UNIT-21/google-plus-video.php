<?php

$ch = curl_init('https://plus.google.com/photos/photo/118350564946431190693/6520187422587813042');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true
]);
$source = curl_exec($ch);
curl_close($ch);

preg_match_all('/https:\/\/lh3.googleusercontent.com\/(.*?)\\\u003d(m[0-9]+)/', $source, $videos);

$videoLinks = [];
foreach ($videos[2] as $key => $quality) {
    if ($quality == 'm18') {
        $videoLinks['360p'] = 'https://lh3.googleusercontent.com/' . $videos[1][$key] . '=m18';
    }
    if ($quality == 'm22') {
        $videoLinks['720p'] = 'https://lh3.googleusercontent.com/' . $videos[1][$key] . '=m22';
    }
}

?>

<video width="320" height="240" controls>
    <source src="<?php echo $videoLinks['360p'] ?>" type="video/mp4">
</video>