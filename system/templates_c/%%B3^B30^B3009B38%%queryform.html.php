<?php /* Smarty version 2.6.19, created on 2010-01-11 11:43:24
         compiled from queryform.html */ ?>
<link rel='stylesheet' href='css/table.css' />
<script language='javascript' src='js/createxmlhttp.js'></script>
<script language='javascript' src='js/queryform.js'></script>
<br />
<table width='630' border='0' align='center' cellpadding='0' cellspacing='0'>
<form id='queryform' name='queryform' method='post' action='#'>
  <tr>
    <td height='25' colspan='4' align='center' valign='middle' class='first'>查询订单</td>
  </tr>
  <tr>
    <td width='75' height='25' align='right' class='left'>查询用户：</td>
    <td width='125' height='25' align='left'class='center'>
    	&nbsp;<input id='name' name='name' type='text' class='txt' /></td>
    <td width='75' height='25' align='right' class='center'>查询订单号：</td>
    <td width='125' height='25' align='left' class='right'>
    	&nbsp;<input id='formid' name='formid' type='text' class='txt' /></td>
  </tr>
  <tr>
    <td height='25' colspan="4" align='center' class='left'> <input id='enters' name='enters' type='button' value='查询' class='btn' onClick='return queryrst(queryform)'/></td>
    </tr>
</form>
</table>

<div id='exam'></div>

