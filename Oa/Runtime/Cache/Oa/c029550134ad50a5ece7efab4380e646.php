<?php if (!defined('THINK_PATH')) exit();?><div style='word-break:break-all;'>
	<form id='addGroup' method='post' action="<?php echo U('Oa/System/addGroup');?>">
		<div style='width:100%;height:30px;'>
			<span>角色名称：</span>
			<input id='Group-title' name='title' />
		</div>
		<div style='width:100%;height:30px;'>
			<span>角色状态：</span>
			<input id='status1' name='status' type='radio' value='1' checked />  <label for='status1'>启用</label>
			<input id='status0' name='status' type='radio' value='0' />  <label for='status0'>禁用</label>
		</div>
		<div style='width:100%;height:30px;'>
			<span>授权规则：</span>
			<input id='Group-rules' name='rules[]'>
		</div>
		<input type='hidden' name='addGroup' value='addGroup' />
	</form>
</div>
<script type="text/javascript">
$("#Group-title").textbox({
    required: true,
    validType:['length[2,40]','remote[\'<?php echo U("Oa/Common/checkAddGroup");?>\',\'title\']'],
    missingMessage: "必须填写角色名称",
    invalidMessage: "已经存在该角色",
});
$("#Group-status").textbox({
	width: 190,
	require: true,
	missingMessage: "必须选择角色状态",
});
$("#Group-rules").combotree({
	width: 192,
	checkbox:true,
	multiple:true,
	cascadeCheck:false,
	value:[17,18,19,20],
	url: '<?php echo U("Oa/Common/treeGroup");?>',
	missingMessage: "必须选择角色规则",
});
</script>