<?php
require_once "TeachingResource.php";
require_once "ResourceType.php";
require_once "Theme.php";

$resource = new TeachingResource("Task 3", Theme::CSS, "www.bitalk.com", ResourceType::Video);
echo $resource->toString();

?>