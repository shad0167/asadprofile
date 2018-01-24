<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<head>

    <style>

        td{

            width:100px;
            height:50px


        }

        .container{
            position: absolute;
            left: 50px;
            top: 150px;

        }


    </style>

</head>




<div class="container">

    <div class="navbar">

        <a href="create"><button type="button" class="btn btn-primary btn-lg">Add New</button></a>
    </div>

    <form method="post" action="search_result">

        {!! csrf_field() !!}

        <input type="text" name="keyword">
        <input type="submit" value="Search">

    </form>



    Total: {!! $allBooktitles->total() !!} Booktitle(s) <br>

    Showing: {!! $allBooktitles->count() !!} Booktitle(s) <br>

    {!! $allBooktitles->links() !!}
    <table class="table table-bordered table table-striped" >

        <th>Video Link</th>
        <th>Title</th>
        <th>Short Description</th>
        <th>Date</th>

        <th>Action Buttons</th>

        @foreach($allBooktitles as $booktitle)

            <tr>

                <td>  {!! $booktitle['video_link'] !!} </td>
                <td>  {!! $booktitle['title'] !!} </td>

                <td>  {!! $booktitle['short_description'] !!} </td>
                <td>  {!! $booktitle['date'] !!} </td>

                <td>
                    <a href="view/{!! $booktitle['id'] !!}"><button class="btn btn-info">View</button></a>
                    <a href="edit/{!! $booktitle['id'] !!}"><button class="btn btn-primary">Edit</button></a>
                    <a href="delete/{!! $booktitle['id'] !!}"><button class="btn btn-danger">Delete</button></a>

                </td>

            </tr>


        @endforeach


    </table>
    {!! $allBooktitles->links() !!}
</div>
