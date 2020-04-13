<?php
require_once('include/include.php');

$sources = getSources();

foreach ($sources as $sourceName => $sourceUrl) {
    $html = getSourceHtml($sourceUrl);
    if (empty($html)){
        continue;
    }

    $title = getContentTitle($html, $sourceName);
    $url = getContentUrl($html, $sourceName);
    $titleUrl = array_combine($title, $url);

        foreach ($titleUrl as $title => $url) {
            $text = getContentText($url, $sourceName);
            $newsId = getNewsId($title, $url);
            getSourceItem($title, $url, $newsId, $sourceName, $text);
        }
}

