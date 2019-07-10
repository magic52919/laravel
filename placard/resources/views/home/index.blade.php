<!DOCTYPE html>
<html lang="en">
<head>
  <title>Placard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>最新公告 <a href="/placard/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a></h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Number</th>
        <th>內容</th>
        <th>日期</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
@foreach ($placardList as $val)
<tr>
        <td>{{$val->id}}</td>
        <td>{{$val->values}}</td>
        <td>{{$val->updated_at}}</td>
        <td>
            <span class="pull-right">
                <form method="post" action="/placard/{{$val->id}}"> 
                    <a href="/placard/{{$val->id}}/edit" class="btn">修改</a>  
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">刪除</button>
                </form>
            </span>
        </td>
    </tr>
@endforeach
    
    
   
   


    </tbody>
  </table>
</div>

</body>
</html>