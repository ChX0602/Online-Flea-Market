<?php /* Smarty version 2.6.19, created on 2009-12-05 11:40:05
         compiled from links.html */ ?>
<link href="css/links.css" rel="stylesheet" type="text/css" />
<table id="__01" width="207" height="399" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="173" colspan="7"><img src="images/link_00.gif" width="207" height="173" alt="" /></td>
  </tr>
  <tr>
    <td colspan="7" background="images/link_01.gif" width="207" height="62"></td>
  </tr>
  <tr>
    <td colspan="2" width="16" height="21"></td>
    <td background="images/link_03.gif" width="6" height="21"></td>
    <td rowspan="2" align="center" valign="top" style="line-height: 25px;">
    <?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['links']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <a href="<?php echo $this->_tpl_vars['links'][$this->_sections['id']['index']]['url']; ?>
" target="_blank" class="lk"><?php echo $this->_tpl_vars['links'][$this->_sections['id']['index']]['name']; ?>
</a><br />
    <?php endfor; endif; ?>
    </td>
    <td background="images/link_05.gif" width="6" height="21"></td>
    <td colspan="2" width="12" height="21"></td>
  </tr>
  <tr>
    <td width="12" height="134"></td>
    <td colspan="2" background="images/link_08.gif" width="10" height="134"></td>
    <td colspan="2" background="images/link_09.gif" width="11" height="134"></td>
    <td width="7" height="134"></td>
  </tr>
  <tr>
    <td height="8" width="12"></td>
    <td colspan="5" background="images/link_12.gif" width="188" height="8"></td>
    <td width="7" height="8"></td>
  </tr>
  <tr>
    <td><img src="images/·Ö¸ô·û.gif" width="12" height="1" alt="" /></td>
    <td><img src="images/·Ö¸ô·û.gif" width="4" height="1" alt="" /></td>
    <td><img src="images/·Ö¸ô·û.gif" width="6" height="1" alt="" /></td>
    <td><img src="images/·Ö¸ô·û.gif" width="167" height="1" alt="" /></td>
    <td><img src="images/·Ö¸ô·û.gif" width="6" height="1" alt="" /></td>
    <td><img src="images/·Ö¸ô·û.gif" width="5" height="1" alt="" /></td>
    <td><img src="images/·Ö¸ô·û.gif" width="7" height="1" alt="" /></td>
  </tr>
</table>