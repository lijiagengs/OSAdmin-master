<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>

<!--- START 以上内容不需更改，保证该TPL页内的标签匹配即可 --->

<{$osadmin_action_alert}>
<{$osadmin_quick_note}>

<div class="btn-toolbar" style="margin-bottom:2px;">
    <a href="medical_news_add.php" class="btn btn-primary"><i class="icon-plus"></i>医疗新闻</a>
</div>

</div>
    <div class="block">
        <a href="#page-stats" class="block-heading" data-toggle="collapse">医疗新闻列表</a>
        <div id="page-stats" class="block-body collapse in">
               <table class="table table-striped">
              <thead>
                <tr>
					<th >#</th>
					<th >标题</th>
					<th >创建时间</th>
					<th style="width:80px">操作</th>
                </tr>
              </thead>
              <tbody>			
                   <{foreach name=medical_news from=$medical_news item=medical}>
					<tr>
					<td><{$medical.id}></td>
					<td><{$medical.title}></td>
					<td><{$medical.create_time}></td>
					<td>
                                            <a href="medical_news_modify.php?id=<{$medical.id}>" title= "修改" ><i class="icon-pencil"></i></a>
                                        &nbsp;&nbsp;
					<a data-toggle="modal" href="#medical_news" title= "删除" ><i class="icon-remove" href="medical_news.php?page_no=<{$page_no}>&method=del&id=<{$medical.id}>" ></i></a>
					</td>
					</tr>
                   <{/foreach}>
              </tbody>
            </table>
				<!--- START 分页模板 --->
				
               <{$page_html}>
					
			   <!--- END --->              
        </div>
    </div>
<!---操作的确认层，相当于javascript:confirm函数--->
<{$osadmin_action_confirm}>               
<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
<{include file="footer.tpl" }>