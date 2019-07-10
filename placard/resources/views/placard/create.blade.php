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

<form method="post" action="/placard" class="form-horizontal">
     @csrf
<fieldset>

<legend>新增公告事項</legend>

<div class="form-group">
        <label for="comment"><h1>內容 :</h1></label>
        <textarea id="comment" name="comment" class="form-control" rows="5"></textarea>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="okOrCancel"></label>
  <div class="col-md-8">
    <button type="submit" id="okOrCancel" name="okOrCancel" value="add" >新增</button>
    <button type="submit" id="okOrCancel" name="okOrCancel" value="cancel">取消</button>
  </div>
</div>

</fieldset>
</form>


</div>

</body>
</html>