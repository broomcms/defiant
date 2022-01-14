![image](https://user-images.githubusercontent.com/63425041/149531644-1a917a04-e181-41e0-b2a4-06f680bb74b0.png)

# Defiant test


Write a few lines of PHP that will read the contents of a file, use a regular expression to find all occurrences of text in square brackets, and print that text to the console. You can use lorem ipsum as your input text and insert your own occurrences of square brackets in the sample text. Please provide a link to a repository.

 ## Project files description

    📦phpdocker                  | The folder that contains help files for building the docker environment
    ┣ 📂nginx                    | Folder for the server container
    ┃ ┗ 📜nginx.conf             | nginx setup
    ┗ 📂php-fpm                  | Folder for the PHP container
    ┃ ┣ 📜Dockerfile             | Server initial commands to run on install
    ┃ ┗ 📜php-ini-overrides.ini  | Extra PHP ini overrides
    📜ajax.php                   | (*) Retreives the words inclosed in square brakets and outputs them
    📜main.css                   | (*) A few CSS rules to tidy up the home page
    📜docker-compose.yml         | Main docker setup file (Used to create containers)
    📜home.php                   | (*) Boostrap page used for the project frontend
    📜index.php                  | (*) Project router
    📜README.md                  | Project readme for Github
    📜text.txt                   | (*) Lorem ipsum text that we parse in ajax.php

## Project flow

![image](https://user-images.githubusercontent.com/63425041/149442644-1311a5e1-a0eb-4237-827f-f664eac671ad.png)

## Test out this repo

In order to test the above code, you can use the docker box I created for this project.

    mkdir defiant
    cd defiant
    git clone git@github.com:broomcms/defiant.git ./
    docker-compose up -d --build

You can than visit:
localhost:1000

The docker setup is composed of 2 containers in a defiant network. One for the nginx server and one for the php8 setup.

You can also upload the files with (*) in the project files description to your server public directory

![image](https://user-images.githubusercontent.com/63425041/149439833-b8c5e58b-95cc-4b12-b49f-4473c0be7114.png)

    // Retreive the text content
    $txt = file_get_contents('text.txt');

    // Retreive all string that starts with [ and ends with ]
    preg_match_all("|\[(.*)\]|U","$txt",$out, PREG_PATTERN_ORDER);

## Results

    (
        [0] => Array
            (
                [0] => [I]
                [1] => [can]
                [2] => [do]
                [3] => [this]
            )
        [1] => Array
            (
                [0] => I
                [1] => can
                [2] => do
                [3] => this
            )
    )

In a real-life situation, a programmer could then loop the results of the array in order to use the values like this:

    // Check if we found a string
    if(isset($out[1][0])){
        $string = "Result is: ";
        // Loop the out array
        foreach($out[1] as $key=>$value){
            // Concatenate the values separated by spaces
            $string .= $value." ";
        }
        // Echo the string minus 1 character to remove the extra space
        echo "<b>".substr($string, 0, -1)."</b>";
    }


And that will output

    Result is: I can do this

## Auto project review

 - Added docker to the project to showcase that I can create a local environment
 - Added bootstrap to the project to show that I understand how responsiveness works
 - Added HTML to the output to show it on the page
 - Used jQuery and Ajax request to output the result to the console
 - Stripped HTML out from output for console
 - Created a nice readme file to show that I can document when needed


