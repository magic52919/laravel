<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
</head>
<body>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 首頁</font></td>
  </tr>
  <tr>
      @if ($name == 'guest') 
      <td align="center" valign="baseline"><a href="/member/login">登入</a> | <a href="/home/member">會員專用頁</a></td>
      @else
      <td align="center" valign="baseline"><a href="/member/logout">登出</a> | <a href="/home/member">會員專用頁</a></td>
      @endif
    
  </tr>
  <tr>
      
    <td align="center" bgcolor="#CCCCCC">{{$name}}</td>
  </tr>
</table>


</body>
</html>