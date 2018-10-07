<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>_D N W_</title>
  <link rel="stylesheet" type="text/css" href="personalsite1.css">
</head>

<body >
<br><br><br><br>

<table border="0" align="center" cellpadding=15>
  <tr>
    <td width=100></td>
    <td width=420></td>
    <td width=420></td>
    <td width=100></td>
    <tr>
      <td colspan=1></td>
      <td class="middle" height=50 colspan=2>
      <p align="center">
        <a href="index.html">Contact</a> |
        <a href="research.html">Research</a> |
        <a href="img/dnw_cv.pdf">CV</a> |
        <a href="https://gitlab.com/opensourcedave">Code</a> |
        <a href="resources.php">Resources</a>
      </p>
      </td>
      <td colspan=2></td>
    </tr>
  </tr>

  <tr>
    <td colspan="4"></td>
  </tr>
  <tr>
    <td colspan=1></td>

    <td colspan=2 width=840">
      <p align="left">
        <ul style="list-style-type:none">
             <?php
             $dir_open = opendir('resources');
             while(false !== ($filename = readdir($dir_open))){
                 if($filename != "." && $filename != ".." && $filename != "img" ){
                     $path_parts = pathinfo($filename);
		     $fn=$path_parts['filename'];
		     $fn=str_replace("_"," ",$fn);
                     $link = "<a href='resources/$filename'> $fn </a><br />";
                     echo $link;
                 }
             }
             closedir($dir_open);
             ?>
        </ul>
      </p>
    </td>

    <td colspan="1"></td>
  </tr>

  <tr><td colspan=4></tr>

  <tr>
    <td colspan=1></td>
    <td colspan=2 class="middle" width=840><br><br></td>
    <td colspan=2></td>

  </tr>

</table>
</div>

<br><br><br><br>
</body>
</html>
