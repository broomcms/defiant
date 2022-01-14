<html>
    <head>
        <title>Defiant test</title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
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
                eventTrigger()

            });
        </script>
    
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div id="first">
                        <div class="myform form ">
                            <div class="logo mb-3">
                                <div class="col-md-12 text-center">
                                    <h1>Defiant</h1>

                                    <div class="error-details">
                                        Write a few lines of PHP that will read the contents of a file, use a regular 
                                        expression to find all occurrences of text in square brackets, and print that 
                                        text to the console. You can use lorem ipsum as your input text and insert 
                                        your own occurrences of square brackets in the sample text. Please provide a 
                                        link to a repository.
                                    </div>

                                    <div id="result" class="sucess"></div>

                                    <br>
                                    
                                    <div class="col-md-12 text-center ">
                                        <button type="button" id="again" class="btn btn-block mybtn btn-primary tx-tfm">Trigger console event again!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </body>
</html>


