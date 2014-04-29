<?php /* Smarty version 2.6.19, created on 2009-12-05 11:40:05
         compiled from nominate.html */ ?>
<link href="css/nominate.css" rel="stylesheet" type="text/css" />
<link href="css/links.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<table width="643" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="6" background="images/default_14.gif" width="636" height="39" align="right" valign="middle"><a href="?page=nom" class="lk">&gt;&gt;more&lt;&lt;</a></td>
		<td rowspan="3" width="7" height="238">&nbsp;</td>
	</tr>
	<tr>
    	<td width="23" height="185">&nbsp;</td>
       <?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['nomarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['id']['show'] = true;
$this->_sections['id']['max'] = $this->_sections['id']['loop'];
$this->_sections['id']['step'] = 1;
$this->_sections['id']['start'] = $this->_sections['id']['step'] > 0 ? 0 : $this->_sections['id']['loop']-1;
if ($this->_sections['id']['show']) {
    $this->_sections['id']['total'] = $this->_sections['id']['loop'];
    if ($this->_sections['id']['total'] == 0)
        $this->_sections['id']['show'] = false;
} else
    $this->_sections['id']['total'] = 0;
if ($this->_sections['id']['show']):

            for ($this->_sections['id']['index'] = $this->_sections['id']['start'], $this->_sections['id']['iteration'] = 1;
                 $this->_sections['id']['iteration'] <= $this->_sections['id']['total'];
                 $this->_sections['id']['index'] += $this->_sections['id']['step'], $this->_sections['id']['iteration']++):
$this->_sections['id']['rownum'] = $this->_sections['id']['iteration'];
$this->_sections['id']['index_prev'] = $this->_sections['id']['index'] - $this->_sections['id']['step'];
$this->_sections['id']['index_next'] = $this->_sections['id']['index'] + $this->_sections['id']['step'];
$this->_sections['id']['first']      = ($this->_sections['id']['iteration'] == 1);
$this->_sections['id']['last']       = ($this->_sections['id']['iteration'] == $this->_sections['id']['total']);
?> 
	  <td width="145" height="185" align="left" valign="top">
      
       	  <table width="145" border="0" cellpadding="0" cellspacing="0" >
<tr>
               	  <td height="100" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['nomarr'][$this->_sections['id']['index']]['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['nomarr'][$this->_sections['id']['index']]['name']; ?>
" style="border: 1px solid #f0f0f0;" ></td>
            </tr>
                <tr>
               	  <td height="17" align="center" valign="middle">&nbsp;<?php echo $this->_tpl_vars['nomarr'][$this->_sections['id']['index']]['name']; ?>
</td>
            </tr>
                <tr>
               	  <td height="17" align="center" valign="middle">市场价：<?php echo $this->_tpl_vars['nomarr'][$this->_sections['id']['index']]['m_price']; ?>
&nbsp;元</td>
            </tr>
                <tr>
                	<td height="19" align="center" valign="middle">会员价：<?php echo $this->_tpl_vars['nomarr'][$this->_sections['id']['index']]['v_price']; ?>
&nbsp;元</td>
            </tr>
                <tr>
                	<td height="32" align="center" valign="middle"><input id="showinfo" name="showinfo" type="button" value="" class="showinfo" onclick="openshowcommo(<?php echo $this->_tpl_vars['nomarr'][$this->_sections['id']['index']]['id']; ?>
)"/>&nbsp;<input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo(<?php echo $this->_tpl_vars['nomarr'][$this->_sections['id']['index']]['id']; ?>
)" /></td>
            </tr>
       	</table>
      </td>
      <?php endfor; endif; ?>
        <td width="33" height="185">&nbsp;</td>
  </tr>
	<tr>
		<td colspan="6" width="636" height="14">&nbsp;</td>
	</tr>
</table>