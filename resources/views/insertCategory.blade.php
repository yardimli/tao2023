<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Insert a Category</title>
</head>
<body>
<h1>Insert a Category</h1>

<form action="/insertCategory" method="post">
  @csrf
  <div class="block">
    <input type="text" name="datas" placeholder="datas..." style="width:500px;">
    {{--<input type="number" name="parentID" placeholder="parentID...">--}}
    {{--<input type="number" name="text_count" placeholder="text_count...">--}}
    {{--<input type="number" name="new_texts" placeholder="new_texts...">--}}
    {{--<input type="number" name="read_count" placeholder="read_count...">--}}
    {{--<input type="text" name="category_name" placeholder="category_name...">--}}
    {{--<input type="text" name="picture" placeholder="picture...">--}}
    {{--<input type="slug_en" name="slug_en" placeholder="slug_en...">--}}

    <button type="submit">
      Submit
    </button>

  </div>
</form>

</body>
</html>