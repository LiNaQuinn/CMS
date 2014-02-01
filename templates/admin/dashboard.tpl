{include file='admin/i_header.tpl'}

<div id="top-menu">
	<ul>
		<li><a href="#">test</a></li>
		<li><a href="#">test</a></li>
		<li><a href="#">test</a></li>
	</ul>
</div>

<div id="main">
	<div class="module">
        <h2>Content</h2>
        {if $CONTENT_MODULE == 'add'}
            <form action="dashboard.php?content=add" method="post">
                <input type="text" name="content_text">
                <input type="submit" name="content" value="Pridat">
            </form>
        {/if}
		<ul>
		{foreach from=$CONTENT_DATA item=content}
			<li class="{cycle values="odd,even"}">{$content.content}</li>
		{/foreach}
		</ul>
	</div>
</div>

<a href="?session=destroy">sessionDestroy</a><br>
<a href="?content=add">addContent</a>