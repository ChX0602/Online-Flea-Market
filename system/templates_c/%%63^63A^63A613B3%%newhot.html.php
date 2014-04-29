<?php /* Smarty version 2.6.19, created on 2009-12-05 11:40:05
         compiled from newhot.html */ ?>
<link rel="stylesheet" href="css/newhot.css" />
<link href="css/top.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/showcommo.js"></script>
<table id="__01" width="643" height="380" border="0" cellpadding="0" cellspacing="0" style=" border: 3px solid #f0f0f0;" >
	<tr>
		<td colspan="5" width="643" height="15"></td>
	</tr>
	<tr>
		<td width="309" height="38" colspan="2" align="center" background="images/newhot_02.gif"><div class="new"><a href="?page=new" class="top">>>more<<</a></div></td>
	  <td colspan="2" align="right" background="images/newhot_03.gif" width="322" height="38"><div class="hot"><a href="?page=hot" class="top">>>more<<</a></div></td>
		<td rowspan="3" width="12" height="365">&nbsp;</td>
  </tr>
	<tr>
		<td rowspan="2">
			<img src="images/newhot_05.gif" width="14" height="327" alt=""></td>
		<td width="295" height="307" align="left" valign="top" style="border-right: 1px solid #f0f0f0;">
<table width="295" height="307" align="center" border="0" cellpadding="0" cellspacing="0">
        	<tr>
        <?php $_from = $this->_tpl_vars['newarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nkey'] => $this->_tpl_vars['nitem']):
?>
        	<td align="left" valign="top">
            	<table width="147" height="150" align="left" border="0" cellpadding="0" cellspacing="0">
                	<tr>
                    	<td height="100" align="center" valign="middle"><a style="cursor:hand;" onclick=""><img src="<?php echo $this->_tpl_vars['nitem']['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['nitem']['name']; ?>
" style="border:1px solid #f0f0f0;" onclick="openshowcommo(<?php echo $this->_tpl_vars['nitem']['id']; ?>
)"></a></td>
                    </tr>
                    <tr>
                    	<td height="17" align="center" valign="middle"><?php echo $this->_tpl_vars['nitem']['name']; ?>
</td>
                    </tr>
                    <tr>
                    	<td height="17" align="center" valign="middle">市场价：<?php echo $this->_tpl_vars['nitem']['m_price']; ?>
&nbsp;元</td>
                    </tr>
                    <tr>
                    	<td height="16" align="center" valign="middle">会员价：<?php echo $this->_tpl_vars['nitem']['v_price']; ?>
&nbsp;元</td>
                    </tr>
              </table> 
            </td>
           <?php if ($this->_tpl_vars['nkey'] % 2 != 0): ?>
           	</tr><tr>
           <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        	</tr>
        </table>
        </td>
        
		<td width="302" height="307" align="left" valign="top" style="border-left: 1px solid #f0f0f0;"> 
        <table width="295" height="307" align="center" border="0" cellpadding="0" cellspacing="0">
        	<tr>
        <?php $_from = $this->_tpl_vars['hotarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['hkey'] => $this->_tpl_vars['hitem']):
?>
        	<td align="left" valign="top">
            	<table width="147" height="150" align="left" border="0" cellpadding="0" cellspacing="0">
                	<tr>
                    	<td height="100" align="center" valign="middle"><a style="cursor:hand;" onclick=""><img src="<?php echo $this->_tpl_vars['hitem']['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['hitem']['name']; ?>
" style="border:1px solid #f0f0f0;" onclick="openshowcommo(<?php echo $this->_tpl_vars['hitem']['id']; ?>
)"></a></td>
                    </tr>
                    <tr>
                    	<td height="17" align="center" valign="middle"><?php echo $this->_tpl_vars['hitem']['name']; ?>
</td>
                    </tr>
                    <tr>
                    	<td height="17" align="center" valign="middle">市场价：<?php echo $this->_tpl_vars['hitem']['m_price']; ?>
</td>
                    </tr>
                    <tr>
                    	<td height="16" align="center" valign="middle">会员价：<?php echo $this->_tpl_vars['hitem']['v_price']; ?>
</td>
                    </tr>
              </table> 
            </td>
           <?php if ($this->_tpl_vars['hkey'] % 2 != 0): ?>
           	</tr><tr>
           <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        	</tr>
        </table>
         </td>
<td rowspan="2">
			<img src="images/newhot_08.gif" width="20" height="327" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="images/newhot_09.gif" width="295" height="20" alt=""></td>
		<td>
			<img src="images/newhot_10.gif" width="302" height="20" alt=""></td>
	</tr>
</table>