
## REQUIREMENTS

PHP ^7.4

## SETUP

Clone the repository to your host/localhost

## TESTING / USAGE: story-prompt.php and statistics.php command line scripts

1) story-prompt.php

story-prompt.php is a command line script for processing replacements
from a JSON string into a template.

To print out usage from your terminal, run:
php story-prompt.php

Actions/parameters are as follows:
@param (string) json
@param (string) template

EXAMPLE:

// Navigate to the directory root from the terminal and run:
php story-prompt.php json="{\"UNIT_OF_MEASURE\":\"mile\",\"NUMBER\":15,\"PLACE\":\"work\",\"ATIVE\":\"green\", \"NOUN\":\"jewel\"}" template=template.php

NOTE: The JSON string must be properly escaped

Sample output:
One day Anna was walking her 15 mile commute to work and found a green jewel on the ground.

1) statistics.php
statistics.php is a script to gather statistics on all of the saved stories.
From the terminal, simply run:
php statistics.php

Sample output:
The most popular NUMBER is: 5
The most popular UNIT_OF_MEASURE is: mile
The most popular PLACE is: work
The most popular ADJECTIVE is: green
The most popular NOUN is: jewel
The minimum value for NUMBER is 1
The maximum value for NUMBER is 15

## @todo's
statistics.php should be set up to accept parameters for stat files and templates

## Instructions

Thanks for doing this project as part of your interview process. We appreciate your time and want to make this a fun experience. If you have any questions at all, please reach out to us and we'll get back to you.

Fork a copy of this repository to your Github account and when you have completed the project below, send a link to ben@commonpaper.com.

## Project

### Story Prompt Generator

One day Anna was walking her {{NUMBER}} {{UNIT_OF_MEASURE}} commute to {{PLACE}} and found a {{ADJECTIVE}} {{NOUN}} on the ground.

Write a command line application in any language that accepts a json string of key-value inputs for the template above. With valid input, the application sends to STDOUT the story using the inputs provided. For example, "One day Anna was walking her 2 mile commute to school and found a blue rock on the ground." The application stores a record of valid inputs locally in a file. For the template above, you can assume NUMBER to be numerical data and all other inputs to be strings containing spaces, special characters, etc. Set sensible string validations for length. Validate all inputs and handle validation errors gracefully.

Write a second command line application that sends to STDOUT statistics about the stored records, including the maximum and minimum values for numerical inputs, the most common responses for string inputs, and anything else you think might be relevant.

Instructions for installing and running your applications should be added to this README file.
