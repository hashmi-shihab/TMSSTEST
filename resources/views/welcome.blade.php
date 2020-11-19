<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('testCss/bootstrap.min.css')}}">

        <!-- Styles -->
    </head>
    <body>
        <section class="container-fluid">
            <button class="btn btn-info" id="showAllData" style="float: right;margin: 20px">show</button>
            <table class="table" style="padding: 20px">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Father's Name</th>
                    <th scope="col">Student Mother's Name</th>
                    <th scope="col">Student Blood's Group</th>
                    <th scope="col">Student Blood's Group Name</th>
                </tr>
                </thead>
                <tbody id="dyData">

                </tbody>
            </table>
        </section>
        <script src="{{asset('testJs/jquery.min.js')}}"></script>

        <script>
            $(document).on('click','#showAllData',function(){
                $.ajax({
                    type:'GET',
                    url:'{{route('studentInfo')}}',
                    dataType:'json',
                    success:function(data) {
                        console.log(data);
                        $.each(data, function(key,value){
                            $('#dyData').append('<tr>' +
                                '<td>' + value.id +'</td>' +
                                '<td>' + value.student_name +'</td>' +
                                '<td>' + value.student_father_name +'</td>' +
                                '<td>' + value.student_mother_name +'</td>' +
                                '<td>' + value.student_blood_group +'</td>' +
                                '<td>' + value.student_blood_group_name +'</td>' +
                                '</tr>');
                        });
                    }
                });
            });
        </script>
    </body>
</html>
