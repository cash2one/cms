<? $this->magic_include(array('file' => "header.html", 'vars' => array()));?>


<!--����Ŀ ��ʼ-->

<?
$this->magic_vars['_G']['uurl'] = url_format($this->magic_vars['_G']['nowurl'],"order");
$this->magic_vars['_G']['epurl'] = url_format($this->magic_vars['_G']['nowurl'],"epage");
?>

<!--����Ŀ ����-->
<? if (!isset($_REQUEST['type'])) $_REQUEST['type']=''; ;if (  $_REQUEST['type']==late): ?>

<div class="wrap950 invest">
	<div class="invest_order"> 
		<div class="floatl">
			<strong>���ڵĽ����</strong>
		</div>
		<div class="floatr">
			��ʾ�� <a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=20"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_20.gif" align="absmiddle" /></a> 
			<a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=40"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_40.gif" align="absmiddle" /></a> 
			<a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=60"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_60.gif" align="absmiddle" /></a> &nbsp;&nbsp;
		</div>
	</div>
	<div class="invest_list">
		<? $this->magic_vars['query_type']='GetLateList';$data = array('var'=>'loop','late_day'=>'1');$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetLateList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
		<table  border="0"  cellspacing="0"  width="100%">
			<tr  class="title">
			  <td width="18%" class="tou">ͷ��</td>
			  <td  >����</td>
			  <td >��ϵ��ʽ</td>
			   <td >��������</td>
			</tr>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
			<tr  class="tr1">
			  <td align="center" >
			  	<div style="margin-left:20px;" >
					<a href="/u/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" target="_blank" ><img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0" class="picborder"/></a>
				</div>
			  </td>
			  <td >
			  	<ul class="li">
					<li class="cu" style="height:30px; overflow:hidden"><a href="/u/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" title="<? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?>"><? if (!isset($this->magic_vars['var']['realname'])) $this->magic_vars['var']['realname'] = ''; echo $this->magic_vars['var']['realname']; ?></a></li>
					<li>�Ա�<? if (!isset($this->magic_vars['var']['sex'])) $this->magic_vars['var']['sex']=''; ;if (  $this->magic_vars['var']['sex']==1): ?>��<? else: ?>Ů<? endif; ?></li>
					<li>����֤��:<? if (!isset($this->magic_vars['var']['card_id'])) $this->magic_vars['var']['card_id'] = ''; echo $this->magic_vars['var']['card_id']; ?></li>
					<li>�� �� �أ�<? if (!isset($this->magic_vars['var']['area'])) $this->magic_vars['var']['area'] = '';$_tmp = $this->magic_vars['var']['area'];$_tmp = $this->magic_modifier("area",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
				</ul>
			  </td>
			  <td ><ul class="li">
			  	<li class="cu"><font color="#FF0000">Ƿ���ܶ��<? if (!isset($this->magic_vars['var']['late_account'])) $this->magic_vars['var']['late_account'] = ''; echo $this->magic_vars['var']['late_account']; ?></font></li>
					<li >Email��<? if (!isset($this->magic_vars['var']['email'])) $this->magic_vars['var']['email'] = ''; echo $this->magic_vars['var']['email']; ?></li>
					<li>�绰��<? if (!isset($this->magic_vars['var']['phone'])) $this->magic_vars['var']['phone'] = ''; echo $this->magic_vars['var']['phone']; ?></li>
					<li>QQ:<? if (!isset($this->magic_vars['var']['qq'])) $this->magic_vars['var']['qq'] = ''; echo $this->magic_vars['var']['qq']; ?></li>
				</ul></td>
			   <td >
			   <ul class="li">
					<li class="cu"><font color="#FF0000">���ڱ�����<? if (!isset($this->magic_vars['var']['late_num'])) $this->magic_vars['var']['late_num'] = ''; echo $this->magic_vars['var']['late_num']; ?>��</font></li>
					<li>��վ����������<? if (!isset($this->magic_vars['var']['late_webnum'])) $this->magic_vars['var']['late_webnum'] = '';$_tmp = $this->magic_vars['var']['late_webnum'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?></li>
					<li>���������:<? if (!isset($this->magic_vars['var']['late_numdays'])) $this->magic_vars['var']['late_numdays'] = ''; echo $this->magic_vars['var']['late_numdays']; ?>��</li>
					<li >����ʱ�䣺<? if (!isset($this->magic_vars['_G']['nowtime'])) $this->magic_vars['_G']['nowtime'] = '';$_tmp = $this->magic_vars['_G']['nowtime'];$_tmp = $this->magic_modifier("date_format",$_tmp,"Y-m-d H:i:s");echo $_tmp;unset($_tmp); ?></li>
				</ul></td>
			   
			</tr>
			<? endforeach; endif; unset($_from); ?>
		</table> 
		
	</div>
	<!--��ҳ��ʼ-->
				<div>
					<table align="center" class="list_table_page">
						<tr align="center">
							<td height="25" ><Div align="center" ><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></Div></td>
						</tr>
					</table>
				</div>
				<!--��ҳ����-->
	
<? unset($_magic_vars); ?>
</div>



<? else: ?>
<!--Ͷ������  ��ʼ-->
<div class="wrap950 list_1">
	<form action="" method="get">
	<div class="title"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_4.gif" /> ��ϸ����</div>
	<div class="content">
		<div class="bor">
			<div class="bo_t">�ؼ��֣�</div>
			<div class="bo_c">
				<input type="text" name="keywords" size="20" value="<? if (!isset($_REQUEST['keywords'])) $_REQUEST['keywords'] = '';$_tmp = $_REQUEST['keywords'];$_tmp = $this->magic_modifier("urldecode",$_tmp,"");echo $_tmp;unset($_tmp); ?>" />
			</div>
			<div class="bo_t">���ʽ��</div>
			<div class="bo_c">
				<? $result = $this->magic_vars['_G']['_linkage']['borrow_style']; echo "<select name='style' id=style >"; echo "<option value=''>û������</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['style']==$val['id'] ) { echo "<option value='{$val['id']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['id']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?> 
			</div>
			<div class="bo_t">���Ŀ�ģ�</div>
			<div class="bo_c">
				<? $result = $this->magic_vars['_G']['_linkage']['borrow_use']; echo "<select name='use' id=use >"; echo "<option value=''>û������</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['use']==$val['id'] ) { echo "<option value='{$val['id']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['id']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>  
			</div>
		</div>
		
		<div class="bor">
			<div class="bo_t">��Χ��</div>
			<div class="bo_c">
				<? $result = $this->magic_vars['_G']['_linkage']['account_amange']; echo "<select name='account1' id=account1 >"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['account1']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>  
				
				�� 
				<? $result = $this->magic_vars['_G']['_linkage']['account_amange']; echo "<select name='account2' id=account2 >"; echo "<option value=''>û������</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['account2']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>  
				
			</div>
			<div class="bo_t">�� �ޣ�</div>
			<div class="bo_c">
				
				<? $result = $this->magic_vars['_G']['_linkage']['borrow_time_limit']; echo "<select name='limittime' id=limittime >"; echo "<option value=''>û������</option>"; if ($result!=''): foreach ($result as $key => $val): if ($_REQUEST['limittime']==$val['value']) { echo "<option value='{$val['value']}' selected>{$val['name']}</option>"; }else{echo "<option value='{$val['value']}' >{$val['name']}</option>";} endforeach;echo "</select>";endif; ?>  
				
			</div>
			<div class="bo_t">�� ����</div>
			<div class="bo_c">
				<select name="award">
					<option value="">������</option>
					<option value="1" <? if (!isset($_REQUEST['award'])) $_REQUEST['award']=''; ;if (  $_REQUEST['award']=="1"): ?> selected="selected"<? endif; ?>>ֻ��ʾ�н�����</option>
					<option value="2" <? if (!isset($_REQUEST['award'])) $_REQUEST['award']=''; ;if (  $_REQUEST['award']=="2"): ?> selected="selected"<? endif; ?>>ֻ��ʾû������</option>
				</select> 
			</div>
		</div>
		
		<div class="bor">
			<div class="bo_t">���ڵ�����</div>
			<div class="bo_c" style="width:230px;">
				<script src="/plugins/index.php?q=area&type=p,c&area=<? if (!isset($_REQUEST['city'])) $_REQUEST['city'] = '';$_tmp = $_REQUEST['city']; if (!isset($_REQUEST['province'])) $_REQUEST['province'] = '';
$_tmp = $this->magic_modifier("default",$_tmp,$_REQUEST['province']);echo $_tmp;unset($_tmp); ?>"></script> 
			</div>
			
			<div class="bo_c">
				<input type="image" src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/sousuo.gif"> <input type="hidden" name="type" value="<? if (!isset($_REQUEST['type'])) $_REQUEST['type'] = ''; echo $_REQUEST['type']; ?>" />
			</div>
		</div>
	</div>
	</form>
	<div class="foot"></div>
</div>
<!--Ͷ������ ����-->

<div class="wrap950 invest">
	<div class="invest_order"> 
		<div class="floatl">
		<? if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['var']['is_vouch']!=1): ?>
			<span><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/order.gif" align="absmiddle" /></span> 
			<span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='account_up'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=account_down"><font color="#FF0000">����</font></a>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='account_down'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=account_up"><font color="#FF0000">����</font></a>
				<? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=account_up">���</a><? endif; ?>
			</span> 
			<span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='apr_up'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=apr_down"><font color="#FF0000">���ʡ�</font></a>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='apr_down'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=apr_up"><font color="#FF0000">���ʡ�</font></a>
				<? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=apr_up">����</a><? endif; ?>
			</span> 
			<span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='jindu_up'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=jindu_down"><font color="#FF0000">���ȡ�</font></a>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='jindu_down'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=jindu_up"><font color="#FF0000">���ȡ�</font></a>
				<? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=jindu_up">����</a><? endif; ?>
			</span> 
			<span>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;if (  $_REQUEST['order']=='credit_up'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=credit_down"><font color="#FF0000">���á�</font></a>
				<? if (!isset($_REQUEST['order'])) $_REQUEST['order']=''; ;elseif (  $_REQUEST['order']=='credit_down'): ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=credit_up"><font color="#FF0000">���á�</font></a>
				<? else: ?><a href="<? if (!isset($this->magic_vars['_G']['uurl'])) $this->magic_vars['_G']['uurl'] = ''; echo $this->magic_vars['_G']['uurl']; ?>&order=credit_up">����</a><? endif; ?>
			</span>  
			<? endif; ?>
		</div>
		<div class="floatr">
			��ʾ�� <a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=20"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_20.gif" align="absmiddle" /></a> 
			<a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=40"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_40.gif" align="absmiddle" /></a> 
			<a href="<? if (!isset($this->magic_vars['_G']['epurl'])) $this->magic_vars['_G']['epurl'] = ''; echo $this->magic_vars['_G']['epurl']; ?>&epage=60"><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/ico_60.gif" align="absmiddle" /></a> &nbsp;&nbsp;
		</div>
	</div>
	<div class="invest_list">
		<? $this->magic_vars['query_type']='GetList';$data = array('var'=>'loop','keywords'=>isset($_REQUEST['keywords'])?$_REQUEST['keywords']:'','type'=>isset($_REQUEST['type'])?$_REQUEST['type']:'','use'=>isset($_REQUEST['use'])?$_REQUEST['use']:'','account1'=>isset($_REQUEST['account1'])?$_REQUEST['account1']:'','account2'=>isset($_REQUEST['account2'])?$_REQUEST['account2']:'','limittime'=>isset($_REQUEST['limittime'])?$_REQUEST['limittime']:'','award'=>isset($_REQUEST['award'])?$_REQUEST['award']:'','province'=>isset($_REQUEST['province'])?$_REQUEST['province']:'','city'=>isset($_REQUEST['city'])?$_REQUEST['city']:'','epage'=>isset($_REQUEST['epage'])?$_REQUEST['epage']:'','order'=>$_REQUEST['order'],'site_id'=>$this->magic_vars['_G']['site_result']['site_id']);$data['page'] = isset($_REQUEST['page'])?$_REQUEST['page']:'';  include_once(ROOT_PATH.'modules/borrow/borrow.class.php');$this->magic_vars['magic_result'] = borrowClass::GetList($data); $this->magic_vars['loop']['list'] =  $this->magic_vars['magic_result']['list']; $this->magic_vars['loop']['page'] =  $this->magic_vars['magic_result']['page']; $this->magic_vars['loop']['epage'] =  $this->magic_vars['magic_result']['epage']; $this->magic_vars['loop']['total'] =  $this->magic_vars['magic_result']['total']; $this->magic_vars['loop']['showpage'] =  show_pages($this->magic_vars['magic_result']);?>
		<table  border="0"  cellspacing="0"  width="100%">
			<tr  class="title">
			  <td width="18%" class="tou">ͷ��</td>
			  <td width="16%" >����/�����</td>
			  <td width="16%" >���/����/��;</td>
			   <td width="24%" >����/״̬</td>
			   <td width="16%" >����/���ڵ�/�ȼ�</td>
			   <td width="*" ></td>
			</tr>
			<?  if(!isset($this->magic_vars['loop']['list']) || $this->magic_vars['loop']['list']=='') $this->magic_vars['loop']['list'] = array();  $_from = $this->magic_vars['loop']['list']; 
 if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); } 
if (count($_from)>0):
;    foreach ($_from as $this->magic_vars['key'] =>  $this->magic_vars['var']):
?>
			<tr  class="tr1">
			  <td align="center" >
			  	<div style="margin-left:20px;" >
					<a href="a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" ><img src="<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = '';$_tmp = $this->magic_vars['var']['user_id'];$_tmp = $this->magic_modifier("avatar",$_tmp,"middle");$_tmp = $this->magic_modifier("imgurl_format",$_tmp,"");echo $_tmp;unset($_tmp); ?>" border="0" class="picborder" width="100px" height="90px"/></a>
				</div>
			  </td>
			  <td >
			  	<ul class="li">
					<li class="cu" style="height:30px; overflow:hidden"><a href="a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html" title="<? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?>"><? if (!isset($this->magic_vars['var']['name'])) $this->magic_vars['var']['name'] = ''; echo $this->magic_vars['var']['name']; ?></a> </li>
					<li>����ţ�<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?><? if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['var']['is_vouch']==1): ?><img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" /><? endif; ?> <? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;if (  $this->magic_vars['var']['flag']==1): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/tuijian.gif" align="absmiddle" /><? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;elseif (   $this->magic_vars['var']['flag']==2): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/danbao.gif" align="absmiddle"/><? if (!isset($this->magic_vars['var']['flag'])) $this->magic_vars['var']['flag']=''; ;elseif (   $this->magic_vars['var']['flag']==3): ?> <img src="<? if (!isset($this->magic_vars['tpldir'])) $this->magic_vars['tpldir'] = ''; echo $this->magic_vars['tpldir']; ?>/images/diya.gif" align="absmiddle"/><? endif; ?></li>
					<li>�����ߣ�<a href="/u/<? if (!isset($this->magic_vars['var']['user_id'])) $this->magic_vars['var']['user_id'] = ''; echo $this->magic_vars['var']['user_id']; ?>" target="_blank"><? if (!isset($this->magic_vars['var']['username'])) $this->magic_vars['var']['username'] = ''; echo $this->magic_vars['var']['username']; ?></a></li>
					<li>�� &nbsp;����<? if (!isset($this->magic_vars['var']['kefu_username'])) $this->magic_vars['var']['kefu_username'] = '';$_tmp = $this->magic_vars['var']['kefu_username'];$_tmp = $this->magic_modifier("default",$_tmp,"-");echo $_tmp;unset($_tmp); ?></li>
				</ul>
			  </td>
			  <td ><ul class="li">
					<li class="cu"><font color="#FF0000">��<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account'] = ''; echo $this->magic_vars['var']['account']; ?> Ԫ</font></li>
					<li>�����ʣ�<? if (!isset($this->magic_vars['var']['apr'])) $this->magic_vars['var']['apr'] = ''; echo $this->magic_vars['var']['apr']; ?>%</li>
					<li><? if (!isset($this->magic_vars['var']['use'])) $this->magic_vars['var']['use'] = '';$_tmp = $this->magic_vars['var']['use'];$_tmp = $this->magic_modifier("linkage",$_tmp,"");echo $_tmp;unset($_tmp); ?></li>
					<li><? if (!isset($this->magic_vars['var']['style'])) $this->magic_vars['var']['style'] = '';$_tmp = $this->magic_vars['var']['style'];$_tmp = $this->magic_modifier("linkage",$_tmp,"borrow_style");echo $_tmp;unset($_tmp); ?></li>
				</ul></td>
				
				<? if (!isset($this->magic_vars['var']['is_vouch'])) $this->magic_vars['var']['is_vouch']=''; ;if (  $this->magic_vars['var']['is_vouch']==1): ?>
				<td ><ul class="li">
					<li >
						<div class="rate_bg ">
							<div class="rate_tiao" style="width:<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
						</div>
					</li>
					<li>
					Ͷ����ɣ�<span >&nbsp;<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = ''; echo $this->magic_vars['var']['scale']; ?>% ��<? if (!isset($this->magic_vars['var']['account_yes'])) $this->magic_vars['var']['account_yes'] = ''; echo $this->magic_vars['var']['account_yes']; ?>Ԫ��</span></li>
					<li>
					<div class="rate_bg ">
							<div class="rate_tiao" style="width:<? if (!isset($this->magic_vars['var']['vouch_scale'])) $this->magic_vars['var']['vouch_scale'] = '';$_tmp = $this->magic_vars['var']['vouch_scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
						</div></li>
					<li>������ɣ�<span >&nbsp;<? if (!isset($this->magic_vars['var']['vouch_scale'])) $this->magic_vars['var']['vouch_scale'] = ''; echo $this->magic_vars['var']['vouch_scale']; ?>% ��<? if (!isset($this->magic_vars['var']['vouch_account'])) $this->magic_vars['var']['vouch_account'] = ''; echo $this->magic_vars['var']['vouch_account']; ?>Ԫ��</span></li></li>
				</ul></td>
				<? else: ?>
			   <td ><ul class="li">
					<li >
						<div class="rate_bg ">
							<div class="rate_tiao" style=" width:<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = '';$_tmp = $this->magic_vars['var']['scale'];$_tmp = $this->magic_modifier("default",$_tmp,"0");echo $_tmp;unset($_tmp); ?>%"></div>
						</div>
					</li>
					<li>
					�Ѿ���ɣ�
						
						<span >&nbsp;<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale'] = ''; echo $this->magic_vars['var']['scale']; ?>%</span></li>
					<li>�����Ͷ�꣺<? if (!isset($this->magic_vars['var']['account_yes'])) $this->magic_vars['var']['account_yes'] = ''; echo $this->magic_vars['var']['account_yes']; ?></li>
					<li>Ͷ���״̬��<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==3): ?>�ɹ��б�<? if (!isset($this->magic_vars['var']['scale'])) $this->magic_vars['var']['scale']=''; ;elseif (  $this->magic_vars['var']['scale']==100): ?>���������<? else: ?>�����б���<? endif; ?></li>
				</ul></td>
				<? endif; ?>
				
			   <td  ><ul class="li">
					<li class="cu"><img src="<? if (!isset($this->magic_vars['_G']['system']['con_credit_picurl'])) $this->magic_vars['_G']['system']['con_credit_picurl'] = ''; echo $this->magic_vars['_G']['system']['con_credit_picurl']; ?><? if (!isset($this->magic_vars['var']['credit_pic'])) $this->magic_vars['var']['credit_pic'] = ''; echo $this->magic_vars['var']['credit_pic']; ?>" title="<? if (!isset($this->magic_vars['var']['credit_jifen'])) $this->magic_vars['var']['credit_jifen'] = ''; echo $this->magic_vars['var']['credit_jifen']; ?>��"  /></li>
					<li>�б����ޣ�<? if (!isset($this->magic_vars['var']['time_limit'])) $this->magic_vars['var']['time_limit'] = ''; echo $this->magic_vars['var']['time_limit']; ?>����</li>
					<li>�� �� �أ�<? if (!isset($this->magic_vars['var']['user_area'])) $this->magic_vars['var']['user_area'] = '';$_tmp = $this->magic_vars['var']['user_area'];$_tmp = $this->magic_modifier("area",$_tmp,"p,c");echo $_tmp;unset($_tmp); ?></li>
					<li>���û��֣�<? if (!isset($this->magic_vars['var']['credit_jifen'])) $this->magic_vars['var']['credit_jifen'] = ''; echo $this->magic_vars['var']['credit_jifen']; ?>��</li>
				</ul></td>
			   <td  valign="top">
			   <? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;if (  $this->magic_vars['var']['status']==3): ?>
					<? if (!isset($this->magic_vars['var']['repayment_account'])) $this->magic_vars['var']['repayment_account']='';if (!isset($this->magic_vars['var']['repayment_yesaccount'])) $this->magic_vars['var']['repayment_yesaccount']=''; ;if (  $this->magic_vars['var']['repayment_account'] ==  $this->magic_vars['var']['repayment_yesaccount']): ?>
					<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/tender_achieve.jpg" />
					<? else: ?>
					<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/loan_repayment.jpg" />
					<? endif; ?>
				<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==5): ?>
				�û�ȡ��
				<? if (!isset($this->magic_vars['var']['status'])) $this->magic_vars['var']['status']=''; ;elseif (  $this->magic_vars['var']['status']==4): ?>
				<? if (!isset($this->magic_vars['var']['account'])) $this->magic_vars['var']['account']='';if (!isset($this->magic_vars['var']['account_yes'])) $this->magic_vars['var']['account_yes']=''; ;elseif (  $this->magic_vars['var']['account']> $this->magic_vars['var']['account_yes']): ?>
				<a href="/invest/a<? if (!isset($this->magic_vars['var']['id'])) $this->magic_vars['var']['id'] = ''; echo $this->magic_vars['var']['id']; ?>.html?detail=true">
				<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/tender.gif" /></a>
				<? else: ?>
				<img src="<? if (!isset($this->magic_vars['tempdir'])) $this->magic_vars['tempdir'] = ''; echo $this->magic_vars['tempdir']; ?>/images/tender_wait.jpg" />
				<? endif; ?></a>
</td>
			</tr>
			<? endforeach; endif; unset($_from); ?>
		</table> 
		
	</div>
	<!--��ҳ��ʼ-->
				<div>
					<table align="center" class="list_table_page">
						<tr align="center">
							<td height="25" ><Div align="center" ><? if (!isset($this->magic_vars['loop']['showpage'])) $this->magic_vars['loop']['showpage'] = ''; echo $this->magic_vars['loop']['showpage']; ?></Div></td>
						</tr>
					</table>
				</div>
				<!--��ҳ����-->
	
<? unset($_magic_vars); ?>
</div>
<? endif; ?>
<? $this->magic_include(array('file' => "footer.html", 'vars' => array()));?>