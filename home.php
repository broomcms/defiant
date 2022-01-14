<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Defiant test</title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    
        <link href="main.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-6 col-md-9 col-sm-11">
                    <div class="back">
                        <h1>Defiant</h1>

                        <div class="error-details">
                            Write a few lines of PHP that will read the contents of a file, use a regular 
                            expression to find all occurrences of text in square brackets, and print that 
                            text to the console. You can use lorem ipsum as your input text and insert 
                            your own occurrences of square brackets in the sample text. Please provide a 
                            link to a repository.
                        </div>

                        <br>

                        Repo: <a href="https://github.com/broomcms/defiant" target="_blanc">broomcms/defiant</a>

                        <br>
                        <div id="result" class="sucess">Click on the (Trigger console event!) button</div>
                        <button type="button" id="again" class="btn btn-block mybtn btn-primary tx-tfm">Trigger console event!</button>
                        <br>
                        
                        <div class="error-details">
                            Dont forget to open up the console before you click!
                        </div>

                    </div>
                </div>
            </div>
        </div>   

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>

        <script>
            $(document).ready(function(){

                function eventTrigger(){
                    $.get( "index.php?ajax=1", function( data ) {
                        $( "#result" ).html( data );
                        var StrippedString = data.replace(/(<([^>]+)>)/ig,"");
                        console.log(StrippedString);
                    });
                }

                $( "#again" ).click(function( event ) {
                    eventTrigger();
                });

                // Trigger on load
                // eventTrigger();

            });
        </script>
    </body>
</html>


