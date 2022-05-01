
<!------------------------------------------------------------------------------------------->
<!---> 
<!--- PowerWeb 3.0 - translated by fallenfate at RageZone (https://forum.ragezone.com/f587/)-> 
<!---> 
<!------------------------------------------------------------------------------------------->

<script type="text/javascript" src="<?php echo Yii::app()->homeUrl; ?>js/jquery.xslider.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#slide').xslider({
    timeout: 3000,
    effect: 'roll',
    navigation: true,
    onLoaded: function(current, last, currentItem, lastItem, elements) {
      $('.caption', currentItem).fadeIn(200);
	  document.getElementById('fon').value=current+1;
    },
    onBefore: function(current, last, currentItem, lastItem, elements) {
      $('.caption', lastItem).hide();
      $('.caption', currentItem).hide();
	  document.getElementById('fon').value=current+1;
    },
    onComplete: function(current, last, currentItem, lastItem, elements) {
      $('.caption', currentItem).fadeIn(200);
	  document.getElementById('fon').value=current+1;
    }
  });
});
</script>

<script type="text/javascript" src="<?php echo Yii::app()->homeUrl; ?>js/iColorPicker.js"></script>
<script>
	function select_field (field) {field.focus(); field.select();}
</script>
	
<div class="note mb15">
	<div class="note_title">Charakterbar Erstellung</div>
	<div class="note_body">
		<?php echo CHtml::beginForm(); ?>
		<div class="form"><?php echo CHtml::errorSummary($model)?></div>
		<table class="table_info">
			<tr>
				<td width="200px">Charakter</td>
				<td>
					<select name="UserbarForm[player_id]" id="UserbarForm_player_id">
						<?php foreach ($players as $player): ?>
						<option value="<?php echo $player->id; ?>"><?php echo $player->name; ?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="bold">Farbwahl:</td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input class="iColorPicker" type="text" name="UserbarForm[name]" id="UserbarForm_name" value="#ffcc00"></td>
			</tr>
			<tr>
				<td>Legion</td>
				<td><input class="iColorPicker" type="text" name="UserbarForm[legion]" id="UserbarForm_legion" value="#00aeef"></td>
			</tr>
			<tr>
				<td>Volk, class</td>
				<td><input class="iColorPicker" type="text" name="UserbarForm[class_race]" id="UserbarForm_class_race" value="#ffffff"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input class="iColorPicker" type="text" name="UserbarForm[level]" id="UserbarForm_level" value="#ff3300"></td>
			</tr>
			<tr>
				<td>PvP</td>
				<td><input class="iColorPicker" type="text" name="UserbarForm[kills]" id="UserbarForm_kills" value="#00aeef"></td>
			</tr>
			<tr>
				<td>Leben, mana</td>
				<td><input class="iColorPicker" type="text" name="UserbarForm[stats]" id="UserbarForm_stats" value="#acd372"></td>
			</tr>
			<tr>
				<td>Schatten</td>
				<td><input class="iColorPicker" type="text" name="UserbarForm[shadow]" id="UserbarForm_shadow" value="#000000"></td>
			</tr>
			<tr>
				<td colspan="2" class="bold">Hintergrundbild:</td>
			</tr>
			<tr>
				<td colspan="2">
					<div id="slide-wrapper">
						<ul id="slide">
						<li><img id="1" src="images/userbars/ub1.png" width="400" height="80" /></li>
						<li><img id="1" src="images/userbars/ub2.png" width="400" height="80" /></li>
						<li><img id="1" src="images/userbars/ub3.png" width="400" height="80" /></li>
						<li><img id="1" src="images/userbars/ub4.png" width="400" height="80" /></li>
						<li><img id="1" src="images/userbars/ub5.png" width="400" height="80" /></li>
						<li><img id="1" src="images/userbars/ub6.png" width="400" height="80" /></li>
						<li><img id="1" src="images/userbars/ub7.png" width="400" height="80" /></li>
						</ul>
						<input type="hidden" id="fon" name="UserbarForm[fon]" />
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="center"><input class="button" type="submit" value="Erstellen" name="yt0"></td>
			</tr>
		</table>
		<?php echo CHtml::endForm(); ?>
	</div>
</div>

<?php if ($image): ?>
<div class="note">
	<div class="note_title">Charakterbar Verweise</div>
	<div class="note_body">
		<?php echo CHtml::beginForm(); ?>
		<div class="form"><?php echo CHtml::errorSummary($model)?></div>
		<table class="table_info">
			<tr>
				<td width="200px">Ergebnis</td>
				<td><img src="<?php echo $image; ?>" /></td>
			</tr>
			<tr>
				<td>Links to avatar image</td>
				<td><?php echo $image; ?></td>
			</tr>
			<tr>
				<td>Als HTML</td>
				<td><input size="62" type="text" value="&lt;a href=&#34<?php echo Yii::app()->homeUrl; ?>&#34;>&lt;img src=&#34;<?php echo $image; ?>&#34; /&gt;&lt;/a&gt;" onClick="select_field(this);"></td>
			</tr>
			<tr>
				<td>Als [BB]</td>
				<td><input size="62" type="text" value="[url=<?php echo Yii::app()->homeUrl; ?>][img]<?php echo $image; ?>[/img][/url]" onClick="select_field(this);"></td>
			</tr>
		</table>
		<?php echo CHtml::endForm(); ?>
	</div>
</div>
<?php endif; ?>