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
    <h1> Edit City</h1>
    <form class="form-group" method="post" action="update">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{!! $city["id"] !!}">
        Name: <input class="form-control" type="text" name="name" required value="{!! $city["name"] !!}"> <br>
        Update your City <br>
        <input list="cityName"name="cityName"class="form-control"required value="{!! $city["cityName"] !!}">
        <datalist id="cityName"class="input-group">
            <option value="Bangladesh">
            <option value="Belzie">
            <option value="Bhutan">
            <option value="Brazil">
            <option value="Burma">
            <option value="India">
            <option value="Pakistan">
            <option value="Canada">
            <option value="Srilanka">
            <option value="Australia">
            <option value="USA">
            <option value="UK">
            <option value="Maynmer">
            <option value="Afganistan">
            <option value="Albania">
            <option value="Ageria">
            <option value="America">
            <option value="Angola">
            <option value="Argentina">
        </datalist>

        <input type="submit" value="Update">

    </form>

</div>

