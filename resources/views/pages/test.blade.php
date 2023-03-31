<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>
    <form id="testForm" action="{{url('tester')}}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" class="@error('name') @enderror" name="name" id="name" placeholder="Enter your name">
        <label for="age">Age</label>
        <input type="text" class="@error('name') @enderror" name="age" id="age" placeholder="Enter your age">
        <button type="submit">Submit</button>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </form>
    
</body>
<script>
    // $('#testForm').submit(function(e) {
    //     e.preventDefault();

    //     $.ajax({
    //         url: $(this).attr('action'),
    //         type: $(this).attr("method"),
    //         dataType: 'json',
    //         data: $(this).serialize(),
    //         success:function(data){
    //             console.log(data);
    //         }

    //     });
    // })
</script>
</html>