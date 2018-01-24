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
    <h1> Edit BookTitle</h1>
    <form class="form-group" method="post" action="update">
        {!! csrf_field() !!}
        <input type="hidden" name="id" value="{!! $hobbies["id"] !!}">
        Name: <input class="form-control" type="text" name="name" required value="{!! $hobbies["name"] !!}"> <br>
        Chose Your Hobies <br>
        <input type="checkbox" <?php if(array("Progrmming",$hobbies)) echo "checked" ?> name = mark[] value="Progrmming">Progrmming
        <br>
        <input type="checkbox"  <?php if(array("Swming",$hobbies)) echo "checked" ?> name = mark[] value="Swming">Swming
        <br>
        <input type="checkbox"  <?php if(array("Rideing",$hobbies)) echo "checked" ?> name = mark[] value="Rideing">Rideing
        <br>
        <input type="checkbox"  <?php if(array("Football",$hobbies)) echo "checked" ?> name = mark[] value="Football">Football
        <br>
        <input type="checkbox"  <?php if(array("Cycling",$hobbies)) echo "checked" ?> name = mark[] value="Cycling">Cycling
        <br>
        <input type="checkbox"  <?php if(array("Drawing",$hobbies)) echo "checked" ?> name = mark[] value="Drawing">Drawing
        <br><br>


        <input type="submit" value="Update">

    </form>

</div>

