# Count Repeat

#### Epicodus PHP Week 2 project, 2/17/2017

#### By Sarah Leahy

## Description

This project counts the frequency of a word appearing in a paper. The user will enter both a paper or phrase and a word to search for inside the paper. The user will then be taken to a page that displays the number of times the word appears in the paper as well as the number of characters, and words used.

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Macs.
* See https://getcomposer.org for details on installing _composer_.
* Clone repository
* From project root, run > composer install --prefer-source --no-interaction
* From web folder in project, Start PHP > php -S localhost:8000
* In web browser open localhost:8000

## Known Bugs
* No known bugs

## Specifications
* Phase 1 - Dependencies and .gitignore.
* Phase 2 - RepeatCounter class: exceptions property and empty constructor, getter, setter and countRepeats(), countWords(), and countChars() methods.
* Phase 3 - Build Test cases and implement RepeatCounter methods

| Behavior - Our Program should Handle?| Input         | Output |             
|----------------------------------------------------------|----------|
|  Single letter                            | "hi", "h" |  0|
|  Single letter with multiple occurrences    | "How are you?", "o"   |  0|
|  Single number                             | 2017, 2   |  1|
|  Single number with multiple occurrences           | 201722021, 2   |  4|
|  Single word                               | "How are you?", "How" |  1|
|  Single word with using capitalization.    |  "How are you?", "HOW"|  1|
|  Single word in long string with capital, non capital letters, and punctuation.|"How are you Megan? I am good Tom. How was your weekend?", "how" | 2
|  Partial match     |  "How are you?", "ow"|  0|
|  Partial match -match that is the same length as other words in phrase    |  "Hello how are you?", "ell"|  0|
| Count total number of characters entered  |"hello"| 5|
| Count total number of words entered  |"hello"| 1|

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
