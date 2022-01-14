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

In a real life situation, a programmer could then loop the results od the array in order to use the values like this:

    // Check if we found a string
    if(isset($out[0][0])){
        // Loop the out array
        foreach($out[0] as $key=>$value){
            // Concatenate the values separated by spaces
            $string .= $value." ";
        }
        // Echo the string minus 1 character to remove the extra space
        echo "<b>".substr($string, 0, 1)."</b>";
    }

And that will output

    I can do this