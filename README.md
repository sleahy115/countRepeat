# Count Repeat using PHPUnit, Silex and Twig

#### Epicodus PHP Week 2 project, 2/17/2017

#### By Sarah Leahy

## Description

This project counts the frequency of a word appearing in a phrase. The user will enter both a phrase and a word inside the phrase to search for. They will then be taken to a page that displays the number of times the word appears in the phrase.

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Mac.
* See https://getcomposer.org for details on installing _composer_.
* Clone project
* From project root, run > composer install --prefer-source --no-interaction
* From web folder in project, Start PHP > php -S localhost:8000
* In web browser open localhost:8000

## Known Bugs
* No known bugs

## Specifications
* Phase 1 - Dependencies and .gitignore.
* Phase 2 - RepeatCounter class: exceptions property and empty constructor, getter, setter and countRepeats() methods.
* Phase 3 - Build Test cases and implement RepeatCounter methods

| Behavior - Our Program should Handle?| Input         | Output |             
|----------------------------------------------------------|----------|
|  Single number                             | "hi", "h" |  1|
|  Single letter with multiple occurrences    | "How are you?", "o"   |  2|
|  Single number                             | 2017, 2   |  1|
|  Single number with multiple occurrences           | 201722021, 2   |  4|
|  Single word                               | "How are you?", "How" |  1|
|  Single word with using capitalization.    |  "How are you?", "HOW"|  1|
|  Single word in long string with capital, non capital letters, and punctuation|"How are you Megan? I am good Tom. How was your weekend?", "how" | 2
|  Partial match     |  "How are you?", "ow"|  0|

* Phase 4 - Initial Silex framework with "Hello" on home page
* Phase 5 - Create twig framework with a form to enter word, and string to be searched.
* Phase 6 - Create twig template for output page.


## Support and contact details
* Please contact Sarah Leahy at Sleahy115@gmail.com with any questions.

## Technologies Used
* PHP
* Composer
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* 2017 Sarah Leahy

## License
* MIT
