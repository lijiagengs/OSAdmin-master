<{include file ="header.tpl"}>
<{include file ="navibar.tpl"}>
<{include file ="sidebar.tpl"}>
<!-- START 以上内容不需更改，保证该TPL页内的标签匹配即可 -->

<{$osadmin_action_alert}>
<{$osadmin_quick_note}>

<div class="well">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">请填写健康资讯</a></li>
    </ul>	

    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="home">

            <form id="tab" method="post" action="" enctype="multipart/form-data">
                <label>标题</label>
                <input type="text" name="title" value="<{$healthinquiry.title}>" class="input-xlarge" required="true" autofocus="true" >
                <label>图片上传</label>
                <input type="file" name="file" id="file" /> 
                <label>描述</label>
                <!-- 加载编辑器的容器 -->
                <script id="container" name="desc" type="text/plain" style="width:98%;height:400px;">
                    <{$healthinquiry.content}>
                </script>                
                <div class="btn-toolbar">
                    <button type="submit" class="btn btn-primary"><strong>提交</strong></button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 -->
<{include file="footer.tpl" }>
