<?php
require_once "TeachingResource.php";

enum Theme : string {
    case PHP = 'PHP';
    case CSS = 'CSS';
    case HTML = 'HTML';
    case SQL = 'SQL';
    case Laravel = 'Laravel';
}

enum ResourceType : string {
    case File = "File";
    case WebArticle = "Web Article";
    case Video = "Video";
}

$resource = new TeachingResource("Task 3", Theme::CSS, "www.bitalk.com", ResourceType::Video);
echo $resource->toString();

?>