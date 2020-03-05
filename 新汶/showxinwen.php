
<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
$link=connect();
?>
<?php
include 'admin/inc/showxinwen.inc.php';
?>
	<div style="margin-top:55px;"></div>
	<div id="hot" class="auto">
		<div class="title">综合新闻</div>
		<table class="newlist">
			<?php
				$query="select * from xinwen where shenhe='已审核' AND leixing='综合新闻' order by fabushijian desc";
				$result=execute($link,$query);
				while ($date=mysqli_fetch_assoc($result))
				{
$html=<<<A
				<tr>
					<td>{$date['fabushijian']}</td>
					<td><a href="xinwen.php?ID={$date['ID']}" target="new_blank">{$date['biaoti']}</a></td>
				</tr>
A;
			echo $html;
				}
				?>
		</table>
		<div style="clear:both;"></div>
	</div>
	<div class="box auto">
		<div class="title">学校要闻</div>
		<table class="newList">
			<?php
				$query="select * from xinwen where shenhe='已审核' AND leixing='学校要闻' order by fabushijian desc";
				$result=execute($link,$query);
				while ($date=mysqli_fetch_assoc($result))
				{
$html=<<<A
				<tr>
					<td>{$date['fabushijian']}</td>
					<td><a href="xinwen.php?ID={$date['ID']}">{$date['biaoti']}</a></td>
				</tr>
A;
			echo $html;
				}
				?>
		</table>
	</div>
	<div class="box auto">
		<div class="title">通知公告</div>
		<table class="newList">
			<?php
				$query="select * from xinwen where shenhe='已审核' AND leixing='通知公告' order by fabushijian desc";
				$result=execute($link,$query);
				while ($date=mysqli_fetch_assoc($result))
				{
$html=<<<A
				<tr>
					<td>{$date['fabushijian']}</td>
					<td><a href="xinwen.php?ID={$date['ID']}">{$date['biaoti']}</a></td>
				</tr>
A;
			echo $html;
				}
				?>
			<div style="clear:both;"></div>
		</table>
	</div>
	
	</div>
	<div id="footer" class="auto">
		<div class="bottom">
			<a>黄淮学院</a>
		</div>
		<div class="copyright">Powered by huanghuaixueyuan ©2019 huanghuai.edu.cn</div>
	</div>
<?php
include 'admin/inc/footer.inc.php'
?>
