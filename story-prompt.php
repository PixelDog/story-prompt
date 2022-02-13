<?php

require_once("./src/services/StoryPromptService.php");
use  KMS\Services\StoryPromptService;

$required = ['json', 'template'];
$argv = $_SERVER['argv'];

$storyPromptService = new StoryPromptService($_SERVER['argv'], $required );
$storyPromptService->processTemplate();
