<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        td,th{
            text-indent: 50px;
        }
        .button {
            background-color: #673ab7;
            border: none;
            color: white;
            padding: 15px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 1100px;
            cursor: pointer;
        }
    </style>
</head>
<!--Author      : @arboshiki-->
<div id="invoice">

    <div class="toolbar hidden-print">
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">

                    </div>


                </div>
            </header>
            <main>

                <div class="row contacts">

                    <div class="col invoice-details">
                        <h1 class="invoice-id"></h1>
                    </div>
                </div>


                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th class="text-left"><h4>user name</h4></th>
                        <th class="text-right"><h4>user email</h4></th>
                        <th class="text-right"><h4>content</h4></th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr>
                            <td class="text-left"><h4>{{$messages->Name}}</h4></td>
                            <td class="unit"><h4>{{$messages->email}}</h4></td>
                            <td class="qty"><h4>{{$messages->content}}</h4></td>
                        </tr>


                    </tbody>

                </table>

                '<a href="{{route('messages.all')}}"> <button class="button"> Back</button></a>' ;


        </div>
    </div>
