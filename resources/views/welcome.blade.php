<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Anti Traffik Alert</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
   <link rel="stylesheet" href={{ asset("css/bootstrap.min.css") }} /> 
    
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
    
    <link rel="stylesheet" href={{ asset("css/mdb.min.css") }} /> 
    <link rel="stylesheet" href={{ asset("css/style.css") }} /> 
   
  </head>
  <body>
    <div id="app">
        <main-component></main-component>
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> --}}
    
    <script type="text/javascript" src={{asset("js/jquery.min.js")}}></script>

    <script type="text/javascript" src={{asset("js/mdb.min.js")}}></script> 
    <script type="text/javascript" src={{ asset("js/popper.min.js")}}></script>
    <script type="text/javascript" src={{asset("js/bootstrap.min.js")}}></script>
    
    <script type="text/javascript" src={{asset("js/index.js")}}></script>

    <script src={{ asset("js/app.js") }}></script>
  </body>
</html>
