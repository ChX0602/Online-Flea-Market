<?php /* Smarty version 2.6.19, created on 2009-12-05 11:40:05
         compiled from public.html */ ?>
<link rel="stylesheet" href="css/links.css" />
<link rel="stylesheet" href="css/pub.css" />
<script language="javascript" src="js/links.js"></script>
<table id="__01" width="207" height="73" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td background="images/public_01.gif" width="207" height="73"></td>
	</tr>
</table>
<table width="207" border="0" cellpadding="0" cellspacing="0">
   <?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['public']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['key']['show'] = true;
$this->_sections['key']['max'] = $this->_sections['key']['loop'];
$this->_sections['key']['step'] = 1;
$this->_sections['key']['start'] = $this->_sections['key']['step'] > 0 ? 0 : $this->_sections['key']['loop']-1;
if ($this->_sections['key']['show']) {
    $this->_sections['key']['total'] = $this->_sections['key']['loop'];
    if ($this->_sections['key']['total'] == 0)
        $this->_sections['key']['show'] = false;
} else
    $this->_sections['key']['total'] = 0;
if ($this->_sections['key']['show']):

            for ($this->_sections['key']['index'] = $this->_sections['key']['start'], $this->_sections['key']['iteration'] = 1;
                 $this->_sections['key']['iteration'] <= $this->_sections['key']['total'];
                 $this->_sections['key']['index'] += $this->_sections['key']['step'], $this->_sections['key']['iteration']++):
$this->_sections['key']['rownum'] = $this->_sections['key']['iteration'];
$this->_sections['key']['index_prev'] = $this->_sections['key']['index'] - $this->_sections['key']['step'];
$this->_sections['key']['index_next'] = $this->_sections['key']['index'] + $this->_sections['key']['step'];
$this->_sections['key']['first']      = ($this->_sections['key']['iteration'] == 1);
$this->_sections['key']['last']       = ($this->_sections['key']['iteration'] == $this->_sections['key']['total']);
?>
  	<tr>
		<td width="35" height="21" background="images/public_03_01.jpg"></td>    
	    <td width="172" height="21" align="left" valign="bottom" background="images/public_03_02.jpg" class="exam" > 
         	<a href="#" class="lk" onclick="return showme(<?php echo $this->_tpl_vars['public'][$this->_sections['key']['index']]['id']; ?>
,'showpub.php');"><?php echo $this->_tpl_vars['public'][$this->_sections['key']['index']]['title']; ?>
</a>		</td>
  </tr>
  <?php endfor; endif; ?>
  <tr>
		<td width="35" height="21" background="images/public_03_01.jpg"></td>
        <td width="172" align="left" valign="bottom" background="images/public_03_02.jpg" class="exam"><a href="?page=allpub" class="lk">>>more<<</a></td>
  </tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="207" height="22">
	<tr>
		<td width="207" height="22" align="right" valign="middle" background="images/public_05.gif"></td>
  </tr>
</table>