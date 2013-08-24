
<?php
// Voting CLASS by ShiVAs^PArAdOXx a.k.a. Audrius Karabanovas, shivas@scene.lt
// Full version with Example present at: http://fx.scene.lt/libs/voting.zip
 
// Functions:
// Show_poll(true|false,true|false,true|false,true|false,true|false,"#border_color","#bg_color",table_width,border_width1, borderwidth2)
// 1st true|false - true=poll, false=poll archyve;
// 2nd true|false - Show voting access?
// 3th true|false - Show votes given?
// 4th true|false - Show percents?
// 5th true|false - Show graphic?
// All others is like written.
 
// add_vote($atsakymas)
// This is voting mechanism, where $atsakymas is answer to the question.
 
// get_current_id()
// return is current precessing poll ID
 
// show_admin_board()
// showing admin board where you can submit new pool.
 
// Init_DB($host,$user,$pass,$db)
// Mysql database connection init.
 
class Voting {
// VARS
var $my_host="localhost";
var $my_user="";
var $my_pass="";
var $my_db="voting";
// FUNC
function Show_poll($current,$v_1,$v_2,$v_3,$v_4,$border_color,$bg_color,$table_width,$border1,$border2)
    {
    $db=mysql_connect($this->my_host,$this->my_user,$this->my_pass);
    if(!$db) {  die(sprintf("Cannot connect to mySQL, %s: %s",mysql_errno(),mysql_error()));    }
    mysql_select_db($this->my_db,$db);
     
    if($current==true){
    $this->show_current($db,$v_1,$v_2,$v_3,$v_4,$border_color,$bg_color,$table_width,$border1,$border2);
    } else {
    $this->show_archyve($db,$v_1,$v_2,$v_3,$v_4,$border_color,$bg_color,$table_width,$border1,$border2);
    }
     
     
    mysql_close();
    }
// ----------------------------        
function Init_DB($host,$user,$pass,$dbase)
{
$this->my_host=$host;
$this->my_user=$user;
$this->my_pass=$pass;
$this->my_db=$dbase;
return true;
}  
// ----------------------------        
function get_current_id()
{
    $db=mysql_connect($this->my_host,$this->my_user,$this->my_pass);
    if(!$db) {  die(sprintf("Cannot connect to mySQL, %s: %s",mysql_errno(),mysql_error()));    }
    mysql_select_db($this->my_db,$db);
    $sql="SELECT * FROM questions ORDER BY id DESC LIMIT 1";
    $result=mysql_query("$sql",$db);
    $row=mysql_fetch_array($result);
    if(mysql_num_rows($result) != 0)
    {
    mysql_free_result($result);
    mysql_close();
    return $row["id"];
    }
    mysql_free_result($result);
    mysql_close($db);
    return 0;
 
}
// ----------------------------        
function show_current($db,$v_1,$v_2,$v_3,$v_4,$border_color,$bg_color,$table_width,$border1,$border2)
{
$sql="SELECT * FROM questions ORDER BY id DESC LIMIT 1";
$result=mysql_query("$sql",$db);
$row=mysql_fetch_array($result);
$question=$row["question"];
$q_id=$row["id"];
$q1=$row["q1"];
$q2=$row["q2"];
$q3=$row["q3"];
$q4=$row["q4"];
$q5=$row["q5"];
$q6=$row["q6"];
$q7=$row["q7"];
$q8=$row["q8"];
$q9=$row["q9"];
$q10=$row["q10"];
$start_date=$row["start_date"];
mysql_free_result($result);
 
$sql="SELECT * FROM votes WHERE q_id='$q_id'";
$result=mysql_query("$sql",$db);
$row=mysql_fetch_array($result);
$a1=$row["a1"];
$a2=$row["a2"];
$a3=$row["a3"];
$a4=$row["a4"];
$a5=$row["a5"];
$a6=$row["a6"];
$a7=$row["a7"];
$a8=$row["a8"];
$a9=$row["a9"];
$a10=$row["a10"];
 
$viso=$a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10;
mysql_free_result($result);
 
echo "<form name=vote action=vote.php3 method=post>";
echo "<table cellspacing=$border1 cellpadding=0 border=0 bgcolor=$border_color width=$table_width>";
echo "<tr><td>&nbsp;".$question."</td><td>".$start_date."</td></tr><tr><td colspan=2>";
echo "<table cellspacing=$border2 cellpadding=0 border=0 width=$table_width>";
 
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a1,$q1,$viso,1,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a2,$q2,$viso,2,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a3,$q3,$viso,3,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a4,$q4,$viso,4,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a5,$q5,$viso,5,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a6,$q6,$viso,6,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a7,$q7,$viso,7,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a8,$q8,$viso,8,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a9,$q9,$viso,9,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a10,$q10,$viso,10,$bg_color);
 
echo "</table></td></tr></table></form>";
 
 
 
}          
// ----------------------------        
function show_archyve($db,$v_1,$v_2,$v_3,$v_4,$border_color,$bg_color,$table_width,$border1,$border2)
{
$sql="SELECT * FROM questions ORDER BY id DESC LIMIT 1,10";
$result=mysql_query("$sql",$db);
while($row=mysql_fetch_array($result))
{
$question=$row["question"];
$q_id=$row["id"];
$q1=$row["q1"];
$q2=$row["q2"];
$q3=$row["q3"];
$q4=$row["q4"];
$q5=$row["q5"];
$q6=$row["q6"];
$q7=$row["q7"];
$q8=$row["q8"];
$q9=$row["q9"];
$q10=$row["q10"];
$start_date=$row["start_date"];
 
$sql="SELECT * FROM votes WHERE q_id='$q_id'";
$result2=mysql_query("$sql",$db);
$row2=mysql_fetch_array($result2);
$a1=$row2["a1"];
$a2=$row2["a2"];
$a3=$row2["a3"];
$a4=$row2["a4"];
$a5=$row2["a5"];
$a6=$row2["a6"];
$a7=$row2["a7"];
$a8=$row2["a8"];
$a9=$row2["a9"];
$a10=$row2["a10"];
 
$viso=$a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9+$a10;
mysql_free_result($result2);
 
echo "<form name=vote action=vote.php3 method=post>";
echo "<table cellspacing=$border1 cellpadding=0 border=0 bgcolor=$border_color width=$table_width>";
echo "<tr><td width=".($table_width-150).">&nbsp;".$question."</td><td width=150>".$start_date." - ".$row["end_date"]."</td></tr><tr><td colspan=2>";
echo "<table cellspacing=$border2 cellpadding=0 border=0 width=$table_width>";
 
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a1,$q1,$viso,1,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a2,$q2,$viso,2,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a3,$q3,$viso,3,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a4,$q4,$viso,4,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a5,$q5,$viso,5,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a6,$q6,$viso,6,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a7,$q7,$viso,7,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a8,$q8,$viso,8,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a9,$q9,$viso,9,$bg_color);
$this->add_answer($v_1,$v_2,$v_3,$v_4,$a10,$q10,$viso,10,$bg_color);
 
echo "</table></td></tr></table></form>";
}
 
mysql_free_result($result);
 
 
}          
// ----------------------------            
function add_answer($view_ch, $view_vo, $view_per, $view_gr, $a1, $answer, $viso, $add_value, $bg_color)
{          
if($answer != "")
{
echo "<tr bgcolor=$bg_color>";
 
    if($view_ch==true)
        {
        echo "<td width=10><b><input onclick=\"JavaScript:submit();\" style=\"background: $bg_color; border=0; cursor:hand\" type=radio name=atsakymas value=$add_value></b></td>";
        }
         
echo "<td width=150>$answer</td>";
 
    if($view_vo==true)
        {
        echo "<td>$a1/$viso</td>";
        }
         
    if($view_per==true)
        {
        echo "<td>".floor($a1/$viso*100)."%</td>";
        }
             
    if($view_gr==true)
        {
        echo "<td><img src=img/pipe1.gif height=15 width=".floor(300/$viso*$a1)."></td>";
        }
         
echo "</tr>";
 
}          
}          
// ----------------------------            
function show_admin_board()
{
     
echo "<div align=center>Poll available today:<br>";
$this->Show_poll(true,false,true,true,true,"#006633","#009966",550,1,1);
 
echo "<form name=admin action=admin_b.php3 method=post>";
echo "<table cellspacing=0 cellpadding=0 border=0>";
echo "<tr><td colspan=2><b>New poll form:</b></td></tr>";
echo "<tr><td><b>Question:</b></td><td><input type=text name=question></td></tr>";
echo "<tr><td><b>Answer 1:</b></td><td><input type=text name=ans1></td></tr>";
echo "<tr><td><b>Answer 2:</b></td><td><input type=text name=ans2></td></tr>";
echo "<tr><td>Answer 3:</td><td><input type=text name=ans3></td></tr>";
echo "<tr><td>Answer 4:</td><td><input type=text name=ans4></td></tr>";
echo "<tr><td>Answer 5:</td><td><input type=text name=ans5></td></tr>";
echo "<tr><td>Answer 6:</td><td><input type=text name=ans6></td></tr>";
echo "<tr><td>Answer 7:</td><td><input type=text name=ans7></td></tr>";
echo "<tr><td>Answer 8:</td><td><input type=text name=ans8></td></tr>";
echo "<tr><td>Answer 9:</td><td><input type=text name=ans9></td></tr>";
echo "<tr><td>Answer 10:</td><td><input type=text name=ans10></td></tr>";
echo "<tr><td colspan=2 align=center><input type=submit value=\"Poll It\">&nbsp;&nbsp;<input type=reset></td></tr>";
echo "</table>";
$id=$this->get_current_id();
echo "<input type=hidden name=curid value=$id>";
echo "</form>";
echo "<b>BOLD</b> - must be entered.";
echo "</div>";           
             
}      
// ----------------------------            
function add_poll($ques,$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10)
{
    $dba=mysql_connect($this->my_host,$this->my_user,$this->my_pass);
    if(!$dba) { die(sprintf("Cannot connect to mySQL, %s: %s",mysql_errno(),mysql_error()));    }
    mysql_select_db($this->my_db,$dba);
 
    $senas=$this->get_current_id();
    mysql_query("UPDATE questions set end_date=NOW() where id='$senas'",$dba);
    $sql="INSERT INTO questions (id, question, q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,start_date,end_date) VALUES ('','$ques','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10',NOW(),'')";
    mysql_query("$sql",$dba);
    mysql_close($dba);
 
    $dba=mysql_connect($this->my_host,$this->my_user,$this->my_pass);
    if(!$dba) { die(sprintf("Cannot connect to mySQL, %s: %s",mysql_errno(),mysql_error()));    }
    mysql_select_db($this->my_db,$dba);
    $result=mysql_query("SELECT * FROM questions ORDER BY id DESC LIMIT 1",$dba);
    $row=mysql_fetch_array($result);
    $senas=$row["id"];
    $sql="INSERT INTO votes (id, q_id, a1, a2, a3, a4, a5, a6, a7, a8, a9, a10) VALUES ('', '$senas', '1', '', '', '', '', '', '', '', '', '')";
    mysql_free_result($result);
    mysql_query("$sql",$dba);
    echo mysql_errno();
    echo mysql_error();
    mysql_close($dba);
    if($senas=!$this->get_current_id())
    {
    return false;
    }
    else {
    return true;
    }
 
}
// ----------------------------            
function add_vote($answer)
{
$current=$this->get_current_id();
$db=mysql_connect($this->my_host,$this->my_user,$this->my_pass);
mysql_select_db($this->my_db,$db);
 
$result=mysql_query("SELECT * FROM questions WHERE id='$current'",$db);
$row=mysql_fetch_array($result);
mysql_free_result($result);
$ats=$answer+1;
if($row[$ats] != "")
{
mysql_query("UPDATE votes SET a$answer=a$answer+1 WHERE q_id='$current'",$db);
}
mysql_close();
 
}
// ----------------------------            
}
?>