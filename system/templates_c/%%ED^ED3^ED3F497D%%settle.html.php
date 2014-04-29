<?php /* Smarty version 2.6.19, created on 2009-12-05 15:38:40
         compiled from settle.html */ ?>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/settle.js"></script>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<table width="400" border="0" cellspacing="0" cellpadding="0" align="center">
 <tr>
    <td height="25" colspan="4" align="center" valign="middle"></td>
  </tr>
<form id="buyform" name="buyform" method="post" action="settle_chk.php" onSubmit="return chkform(buyform)">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">订单信息</td>
  </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left">收货人姓名：</td>
    <td width="120" height="25" align="left" valign="middle" class="center">&nbsp;<input id="taker" name="taker" type="text" class="txt" /></td>
    <td width="80" align="right" valign="middle" class="center">邮编：</td>
    <td width="120" align="left" valign="middle" class="right">&nbsp;<input id="code" name="code" type="text" class="txt" /></td>
  </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left">联系电话：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<input id="tel" name="tel" type="text" class="txt" />
    </td>
    <td height="25" colspan="2" align="left" valign="middle" class="center">&nbsp;</td>
    </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left">地址：</td>
    <td height="25" colspan="3" align="left" valign="middle" class="right">&nbsp;<input id="address" name="address" type="text" class="langtxt" /></td>
  </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left">送货方式：</td>
    <td height="25" colspan="3" align="left" valign="middle" class="right">&nbsp;<select id="del" name="del">
    	<option value="平邮">平邮</option>
        <option value="快递">快递</option>
        <option value="送货上门">送货上门</option>
    </select>    </td>
  </tr>
  <tr>
    <td width="80" height="25" align="right" valign="middle" class="left"> 付款方式：</td>
    <td height="25" colspan="3" align="left" valign="middle" class="right">&nbsp;<select id="pay" name="pay">
    	<option value="银行转账">银行转账</option>
        <option value="邮局汇款">邮局汇款</option>
        <option value="支付宝">支付宝</option>
    </select>    </td>
  </tr>
  <tr>
    <td height="30" colspan="4" align="center" valign="middle"><input id="enter" name="enter" type="submit" value="提交订单" class="btn" /><input id="fst" name="fst" type="hidden" value="<?php echo $this->_tpl_vars['fst']; ?>
" /><input id="snd" name="snd" type="hidden" value="<?php echo $this->_tpl_vars['snd']; ?>
" /><input id="uid" name="uid" type="hidden" value="<?php echo $this->_tpl_vars['uid']; ?>
" ></td>
  </tr>
</form>
</table>