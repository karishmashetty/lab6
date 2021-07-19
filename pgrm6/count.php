<div><?php 
$f=fopen("count.txt","r+");
$line=fgets($f);
fseek($f,0);
$line++;
echo" number of times visited the web page   ". $line;
fwrite($f,$line);
fclose($f);
?>
</div>
 <style>
      div{
          height: 200px;
          width: 400px;
          background-color: navajowhite;
        text-align: center;
        color: black;
        font-size: 20px;
        text-align: center;
        margin-left: 500px;
        margin-top: 300px;
        
      }
    </style>