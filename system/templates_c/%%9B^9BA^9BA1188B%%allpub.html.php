<?php /* Smarty version 2.6.19, created on 2010-01-11 10:29:33
         compiled from allpub.html */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/links.js"></script>
<table width="600" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" height="25" align="center" valign="middle" class="first">全部公告</td>
  </tr>
<?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['allpub']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <td width="57%" height="25" align="left" valign="middle" class="left">&nbsp;&nbsp;&nbsp;&nbsp;标题：<a href="#" onclick="return showme(<?php echo $this->_tpl_vars['allpub'][$this->_sections['id']['index']]['id']; ?>
,'showpub.php')"><?php echo $this->_tpl_vars['allpub'][$this->_sections['id']['index']]['title']; ?>
</a></td>
    <td width="43%" height="25" align="center" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['allpub'][$this->_sections['id']['index']]['addtime']; ?>
</td>
  </tr>
<?php endfor; endif; ?>
</table>