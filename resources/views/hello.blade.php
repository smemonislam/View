<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>Laravel View</title>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
 
            .title {
                font-size: 26px;
            }
 
             
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
         
 
            <div class="content">
                <div class="title m-b-md">
                    <center>Welcome to Laravel World</center>
                </div>
                {{-- <div>
                    <center>
                        <h1>Data passing with array</h1>
                        <p> Your Name is {{ $fname }} {{ $lname}} and age {{ $age }}</p>
                    </center>
                </div> --}}
                {{-- <div>
                    <center>
                        <h1>Data passing with compact</h1>
                        <p> Your Name is {{ $data['fname'] }} {{ $data['lname']}} and age {{ $data['age'] }}</p>
                    </center>
                </div> --}}
                <div>
                    <center>
                        <h1>Data passing with view</h1>
                        <p>{{ $status }}</p>
                    </center>
                </div>
                <div>
                    <h2>Sharing Data With All Views</h2>
                    <ul>
                        @foreach ($customers as $customer)                        
                        <li>{{ $customer->first_name }} {{ $customer->last_name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
    </body>
</html>