<?php /* Smarty version 2.6.19, created on 2010-01-11 10:29:49
         compiled from searchrst.html */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<table width="540" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">��Ʒ��Ϣ</td>
    </tr>
<?php if ($this->_tpl_vars['search'] != 'T'): ?>
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">��ѯ���Ϊ�գ�</td>
    </tr>
	<?php else: ?>
<?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['searcharr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
  <tr>
    <td width="140" height="100" rowspan="4" align="center" valign="middle" class="left"><img src="<?php echo $this->_tpl_vars['searcharr'][$this->_sections['id']['index']]['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['searcharr'][$this->_sections['id']['index']]['name']; ?>
" style="border: 1px solid #f0f0f0;"></td>
    <td width="100" height="25" align="center" valign="middle" class="center">��Ʒ���ƣ�</td>
    <td width="100" height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['searcharr'][$this->_sections['id']['index']]['name']; ?>
</td>
    <td width="100" height="25" align="center" valign="middle" class="center">��Ʒ���</td>
    <td width="100" height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['searcharr'][$this->_sections['id']['index']]['class']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">��ƷƷ�ƣ�</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['searcharr'][$this->_sections['id']['index']]['brand']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">��Ʒ�ͺţ�</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['searcharr'][$this->_sections['id']['index']]['model']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">��Ʒ���أ�</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['searcharr'][$this->_sections['id']['index']]['area']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">��Ʒ��棺</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['searcharr'][$this->_sections['id']['index']]['stocks']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">�г��۸�</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['searcharr'][$this->_sections['id']['index']]['m_price']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">��Ա�۸�</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['searcharr'][$this->_sections['id']['index']]['v_price']; ?>
</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" class="left">��Ʒ��飺</td>
    <td colspan="3" class="center">&nbsp;<?php echo $this->_tpl_vars['searcharr'][$this->_sections['id']['index']]['info']; ?>
</td>
    <td align="center" valign="middle" class="right"><input id="buy" name="buy" type="button" value="" class="buy" onclick="return subbuycommo(<?php echo $this->_tpl_vars['searcharr'][$this->_sections['id']['index']]['id']; ?>
)" ></td>
  </tr>
<?php endfor; endif; ?>
<?php endif; ?>
</table>