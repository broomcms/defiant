# Defiant test


Write a few lines of PHP that will read the contents of a file, use a regular expression to find all occurrences of text in square brackets, and print that text to the console. You can use lorem ipsum as your input text and insert your own occurrences of square brackets in the sample text. Please provide a link to a repository.
## Test Case

In order to test the above code, you can use the docker box I created for this project.

    mkdir defiant
    cd defiant
    git clone git@github.com:broomcms/defiant.git ./
    docker-compose up -d --build

You can than visit:
localhost:1000

The docker setup is composed of 2 containers in a defiant network. One for the nginx server and one for the php8 setup.

## Results


    (
        [0] => Array
            (
                [0] => [I]
                [1] => [can]
                [2] => [do]
                [3] => [this]
            )


    )


In a real-life situation, a programmer could then loop the results of the array in order to use the values like this:


    // Check if we found a string
    if(isset($out[1][0])){
        $string = "Result is: ";
        echo "<hr>"; // Line separation
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
 - Used jQuery and Ajax request to output the result to the console
 - Added HTML to the output to output the result in the page
 - Stripped HTML from output for console

 ## Important project files

    📦phpdocker                  | The folder that contains help files for building the docker environment
    ┣ 📂nginx                    | Folder for the server container
    ┃ ┗ 📜nginx.conf             | nginx setup
    ┗ 📂php-fpm                  | Folder for the PHP container
    ┃ ┣ 📜Dockerfile             | Server initial commands to run on install
    ┃ ┗ 📜php-ini-overrides.ini  | Extra PHP ini overrides
    📜ajax.php                   | Retreives the words inclosed in square brakets and outputs them
    📜docker-compose.yml         | Main docker setup file (Used to create containers)
    📜home.php                   | Boostrap page used for the project frontend
    📜index.php                  | Project router
    📜README.md                  | Project readme for Github
    📜text.txt                   | Lorem ipsum text that we parse in ajax.php