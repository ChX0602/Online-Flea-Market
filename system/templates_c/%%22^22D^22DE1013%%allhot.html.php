<?php /* Smarty version 2.6.19, created on 2010-01-11 10:27:59
         compiled from allhot.html */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/nominate.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<table width="636" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td height="39" align="left" valign="middle" background="images/hot_1.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="132" align="left" valign="middle"> <?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['allhot']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
      <table width="636" height="134" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="145" rowspan="5" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['pics']; ?>
" width="90" height="100" alt="<?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['name']; ?>
" style="border: 1px solid #f0f0f0;" /></td>
            <td height="35">��Ʒ���ƣ�<?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['name']; ?>
</td>
            <td width="156" height="35">��Ʒ���<?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['class']; ?>
</td>
            <td width="157">��Ʒ�ͺţ�<?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['model']; ?>
</td>
          </tr>
          <tr>
            <td height="23">��ƷƷ�ƣ�<?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['brand']; ?>
</td>
            <td height="23" colspan="2">��Ʒ���أ�<?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['area']; ?>
</td>
          </tr>
          <tr>
            <td width="178" height="23">ʣ��������<?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['stocks']; ?>
</td>
            <td colspan="2">����������<?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['sell']; ?>
</td>
          </tr>
          <tr>
            <td height="23">�г��ۣ�<font color="red"><?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['m_price']; ?>
&nbsp;Ԫ</font></td>
            <td height="23" colspan="2">�������ڣ�<?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['addtime']; ?>
</td>
          </tr>
          <tr>
            <td height="30">��Ա�۸�<font color="#FF0000"><?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['v_price']; ?>
&nbsp;Ԫ</font></td>
            <td height="30" colspan="2" align="center" valign="middle"><input id="allshow" name="allshow" type="button" value="" class="showinfo" onclick="openshowcommo(<?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['id']; ?>
)"  />
              &nbsp;
              <input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo(<?php echo $this->_tpl_vars['allhot'][$this->_sections['id']['index']]['id']; ?>
)" /></td>
          </tr>
        </table>
      <hr style="border: 1px solid #f0f0f0;" />
      <?php endfor; endif; ?> </td>
  </tr>
  <tr>
    <td height="25" align="center"><?php echo $this->_tpl_vars['showpage']; ?>
</td>
  </tr>
</table>