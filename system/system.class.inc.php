<?php
class ConnDB{
	var $dbtype;
	var $host;
    	var $user;
    	var $pwd;
    	var $dbname;
    	var $debug;
    	var $conn;    
    function ConnDB($dbtype,$host,$user,$pwd,$dbname,$debug=false){	
		$this->dbtype=$dbtype;
    		$this->host=$host;
		$this->user=$user;
		$this->pwd=$pwd;
		$this->dbname=$dbname;
		$this->debug=$debug;
	}
    function GetConnId(){		    		
  	require("adodb/adodb.inc.php");						
    		if($this->dbtype=="mysql"){		
    		   		$this->conn=NewADOConnection("mysql");		
    	    		$this->conn->Connect($this->host,$this->user,$this->pwd,$this->dbname);	
		}
    		$this->conn->Execute("set names gb2312");
    		if($this->dbtype=="mysql")
    	    		$this->conn->debug=$this->debug;
    		return $this->conn;				
    }
	function CloseConnId(){					
    		$this->conn->Disconnect();							
    }
}	

class AdminDB{
	function ExecSQL($sqlstr,$conn){					
		$sqltype=strtolower(substr(trim($sqlstr),0,6));	
		$rs=$conn->Execute($sqlstr);					
		if($sqltype=="select"){						
			$array=$rs->GetRows();				
			if(count($array)==0 || $rs==false)			
				return false;		
			else
				return $array;				
		}elseif ($sqltype=="update" || $sqltype=="insert" || $sqltype=="delete"){
			if($rs)
			    return true;						
			else 
			    return false;    					
		}
	}
}


class SepPage{
	var $rs;
	var $pagesize;
	var $nowpage;
	var $nowpages;
	var $array;
	var $conn;
	var $sqlstr;
	function ShowDate($sqlstr,$conn,$pagesize,$nowpage){	
		if(!isset($nowpage) || $nowpage=="")			
			$this->nowpage=10;				
		else
			$this->nowpage=$nowpage;
		$this->pagesize=$pagesize;					
		$this->conn=$conn;							
		$this->sqlstr=$sqlstr;							
		$this->rs=$this->conn->PageExecute($this->sqlstr,$this->pagesize,$this->nowpage);
		@$this->array=$this->rs->GetRows();			
			if(count($this->array)==0 || $this->rs==false)
				return false;
			else
				return $this->array;
	}
	function ShowPage($contentname,$utits,$anothersearchstr,$class,$page){
		$allrs=$this->conn->Execute($this->sqlstr);		
		$record=count($allrs->GetRows());				
		$pagecount=ceil($record/$this->pagesize);		
		$str.="����".$contentname."&nbsp;".$record."&nbsp;".$utits."&nbsp;ÿҳ��ʾ&nbsp;".$this->pagesize."&nbsp;".$utits."&nbsp;��&nbsp;".$this->rs->AbsolutePage()."&nbsp;ҳ/��&nbsp;".$pagecount."&nbsp;ҳ";
		$str.="&nbsp;&nbsp;&nbsp;&nbsp;";
		if(!$this->rs->AtFirstPage())
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$page."&pages=1".$anothersearchstr." class=".$class.">��ҳ</a>";
		else
			$str.="<font color='#555555'>��ҳ</font>";
		$str.="&nbsp;";
		if(!$this->rs->AtFirstPage())
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$page."&pages=".($this->rs->AbsolutePage()-1).$anothersearchstr." class=".$class.">��һҳ</a>";
		else
			$str.="<font color='#555555'>��һҳ</font>";
		$str.="&nbsp;";	
		if(!$this->rs->AtLastPage())
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$page."&pages=".($this->rs->AbsolutePage()+1).$anothersearchstr." class=".$class.">��һҳ</a>";
		else
			$str.="<font color='#555555'>��һҳ</font>";	
		$str.="&nbsp;";
		if(!$this->rs->AtLastPage())
			$str.="<a href=".$_SERVER['PHP_SELF']."?page=".$page."&pages=".$pagecount.$anothersearchstr." class=".$class.">βҳ</a>";
		else
			$str.="<font color='#555555'>βҳ</font>";
		if(count($this->array)==0 || $this->rs==false)			
			return "";
		else
		    return $str;	
	}
}


class UseFun{
	
	function UnHtml($text){
	   $content=(nl2br(htmlspecialchars($text)));
	   $content=str_replace("[strong]","<strong>",$content);
	   $content=str_replace("[/strong]","</strong>",$content);
	   $content=str_replace("[em]","<em>",$content);
	   $content=str_replace("[/em]","</em>",$content);
	   $content=str_replace("[u]","<u>",$content);
	   $content=str_replace("[/u]","</u>",$content);
	
	
	   $content=str_replace("[font color=#FF0000]","<font color=#FF0000>",$content);
	   $content=str_replace("[font color=#00FF00]","<font color=#00FF00>",$content);
	   $content=str_replace("[font color=#0000FF]","<font color=#0000FF>",$content);
	
	   $content=str_replace("[font face=����_GB2312]","<font face=����_GB2312>",$content);
	   $content=str_replace("[font face=����]","<font face=������>",$content);
	   $content=str_replace("[font face=����]","<font face=����>",$content);
       $content=str_replace("[/font]","</font>",$content);
	   //$content=str_replace(chr(32)," ",$content);
	   $content=str_replace("[font size=1]","<font size=1>",$content);
	   $content=str_replace("[font size=2]","<font size=2>",$content);
	   $content=str_replace("[font size=3]","<font size=3>",$content);
	   $content=str_replace("[font size=4]","<font size=4>",$content);
       $content=str_replace("[font size=5]","<font size=5>",$content);
	   $content=str_replace("[font size=6]","<font size=6>",$content);
	   
	   $content=str_replace("[FIELDSET][LEGEND]","<FIELDSET><LEGEND>",$content);
	   $content=str_replace("[/LEGEND]","</LEGEND>",$content);
	   $content=str_replace("[/FIELDSET]","</FIELDSET>",$content);
	   return $content;
	}
	
}

?>