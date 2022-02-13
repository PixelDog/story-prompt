<?php

namespace KMS\Services;

class StoryPromptService {

  /** @var array */
  public $params;

  /** @var array */
  public $required;

  /** @var array */
  public $argv;

  public function __construct(array $argv = [], array $required){
    // assemble command line params
    foreach ($argv as $arg){
      if( strpos($arg, '=') !== false ){
        list($param,$value) = explode('=', $arg);
        $param = trim( $param );
        $this->params["$param"] = trim( $value );
      }
    }
    $this->required = $required;

    $this->checkRequired($this->required, $this->params);

  }

  /**
  * Output script usage
  *
  * @param Array $missing missing params
  *
  */
  function usage( $missing=null ){
    $usage = "";
    if( $missing ){
      $usage .= "\nYou are missing one or more required parameters: " . implode ( ",", $missing) . "\n\n";
    }
    $usage .= "USAGE:\nstory-prompt.php is a command line processing a story template with valid replacement values:\n
    PARAMS:
    @param (string) json Required the json replacements.
    @param (string) template Required the story template\n
    ";

    return $usage;
  }

  /**
  * Check for required script params
  *
  * @param Array $required the required params
  * @param Array $params the params passed to the script
  *
  */
  function checkRequired( $required, $params ){
    $missing = array_diff( $this->required, array_keys($this->params) );

    if( !empty( $missing ) ){
      die ( $this->usage( $missing ) );
    }
  }

  /**
  * Process the JSON string and template
  *
  */
  function processTemplate(){

    if( !file_exists("./src/templates/" . $this->params['template'])){
      die("Template could not be found\n\n");
    }
    include ("./src/templates/" . $this->params['template']);

    $json = json_decode($this->params['json'], true);

    if(!empty($json)){
      foreach($json as $key => $value){
        if(!in_array($value, $validInputs[$key])){
          die("You have not provided a valid input for $key\n\n");
        }
        $template = str_replace("{{".$key."}}", $value, $template);
      }
    }

    $file = fopen('stories.txt', 'a');
    fwrite($file, json_encode($json) . "\n");

    fclose($file);

    print_r($template . "\n");
  }
}
