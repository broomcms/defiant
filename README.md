![image](https://user-images.githubusercontent.com/63425041/149531644-1a917a04-e181-41e0-b2a4-06f680bb74b0.png)

# Test description


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

## Reproduce

In order to test the above code, you can use the docker box I created for this project.

    mkdir defiant
    cd defiant
    git clone git@github.com:broomcms/defiant.git ./
    docker-compose up -d --build

You can than visit:
localhost:1000

The docker setup is composed of 2 containers in a defiant network. One for the nginx server and one for the php8 setup.

You can also upload the files with (*) in the project files description to your servers public directory (Ex: public_html)

![image](https://user-images.githubusercontent.com/63425041/149439833-b8c5e58b-95cc-4b12-b49f-4473c0be7114.png)

## Solution

    // Retreive the text content
    $txt = file_get_contents('text.txt');

    // Retreive all string that starts with [ and ends with ]
    preg_match_all("|\[(.*)\]|U","$txt",$out, PREG_PATTERN_ORDER);

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

In order to print it to the console, we need an ajax script that will retreive the above output and use the console.log() command

        <script>
            $(document).ready(function(){

                // Retreive the sqare bracket words
                function eventTrigger(){
                    $.get( "index.php?ajax=1", function( data ) {
                        $( "#result" ).html( data ); // Print to webpage with HTML in the string
                        var StrippedString = data.replace(/(<([^>]+)>)/ig,""); // Remove HTML
                        console.log(StrippedString); // Print to console without HTML
                    });
                }

                // Trigger on button click
                $( "#again" ).click(function( event ) {
                    eventTrigger();
                });

                // Trigger on load
                // eventTrigger();

            });
        </script>

And that will output

    Result is: I can do this

## Project highlights

 - Added docker to the project
 - Added bootstrap to the project
 - Printed output in the page
 - Used jQuery and Ajax request to output the result to the console
 - Created nice clean code and left comments
 - Created a nice readme file to show that I can document when needed
 - Created a project flow and file description
 - Explained how to reproduce the solution and how it works

# What i think about this test?

I had a lot of fun doing this. I was not sure if the test was about printing the words to the server console or printing them to the browser console. Considering it takes a little bit more setup to print it to the browser console, I opted for the more complex of the 2. I would suggest adding "browser console" or "server console" to the test description in order to make it less ambiguous. Other than that, it was fun to do. You can follow the commits and see the state of the project as it comes together. I probably over did it a bit to be honest, but I really wanted you to see how motivated I am for this job :-)

### Now what?

I can start today! Lets talk! drisate@hotmail.com (514-795-4321)
