<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<head>

    <style>


        .container{
            position: absolute;
            left: 50px;
            top: 150px;

        }


    </style>

</head>

<div class="container">
    <h1> Edit Summery of Organization</h1>
    <form class="form-group" method="post" action="update">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{!! $soo["id"] !!}">
        Name of Organization: <input class="form-control" type="text" name="name" required value="{!! $soo["name"] !!}"> <br>
        Summery of organization: <input class="form-control" type="text" name="txt" required  value="{!! $soo["txt"] !!}">
<br>

        <input type="submit" value="Update">

    </form>

</div>

