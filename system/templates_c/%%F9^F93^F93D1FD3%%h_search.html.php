<?php /* Smarty version 2.6.19, created on 2010-01-11 10:28:05
         compiled from h_search.html */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/search.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<div id="showme">
<table width="540" border="0" cellpadding="0" cellspacing="0" align="center">
<form id="high" name="high" method="post" action="#">
	<tr>
		<td height="25" colspan="2" align="center" valign="middle" class="first">�߼���ѯ</td>
	</tr>
	<tr>
		<td width="150" height="25" align="right" valign="middle" class="left">��Ʒ���ƣ�</td>
	  <td class="right" style=" text-indent:20px;">&nbsp;<input id="name" name="name" type="text" class="txt" /></td>
	</tr>
	<tr>
		<td width="150" height="25" align="right" valign="middle" class="left">��Ʒ�ͺţ�</td>
	  <td class="right"  style=" text-indent:20px;">&nbsp;<input id="model" name="model" type="text" class="txt" /></td>
	</tr>
	<tr>
		<td width="150" height="25" align="right" valign="middle" class="left">��Ʒ���</td>
	  <td class="right"  style=" text-indent:20px;">&nbsp;<input id="stype" name="stype" type="text" class="txt" /></td>
	</tr>
	<tr>
	  <td height="25" colspan="2" align="center" valign="middle"  style=" text-indent:20px;">
	  <input name="hsearch" type="button" class="btn" id="hsearch" value="��ѯ" onclick="return showhsearch()" /></td>
	</tr>
</form>
</table>
</div>