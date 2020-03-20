<?php
// source: D:\wamp64\www\projects\NETTE\app\presenters/templates/Dvorak/default.latte

use Latte\Runtime as LR;

class Template317a475cf3 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
?>

<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['item'])) trigger_error('Variable $item overwritten in foreach on line 6, 9, 12, 26');
		if (isset($this->params['key'])) trigger_error('Variable $key overwritten in foreach on line 26');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<?php echo LR\Filters::escapeHtmlText($radek) /* line 4 */ ?>

<?php echo LR\Filters::escapeHtmlText($predek) /* line 5 */ ?><br>
<?php
		$iterations = 0;
		foreach ($users as $item) {
			echo LR\Filters::escapeHtmlText($item) /* line 7 */ ?><br>
<?php
			$iterations++;
		}
		$iterations = 0;
		foreach ($iterator = $this->global->its[] = new LR\CachingIterator($users) as $item) {
			?>    <?php echo LR\Filters::escapeHtmlText($iterator->getCounter()) /* line 10 */ ?>.<?php echo LR\Filters::escapeHtmlText($item) /* line 10 */ ?><br>
<?php
			$iterations++;
		}
		array_pop($this->global->its);
		$iterator = end($this->global->its);
		$iterations = 0;
		foreach ($iterator = $this->global->its[] = new LR\CachingIterator($users) as $item) {
			?>   <?php
			echo LR\Filters::escapeHtmlText($item) /* line 13 */;
			if (!$iterator->isLast()) {
				?>,<?php
			}
?>

<?php
			$iterations++;
		}
		array_pop($this->global->its);
		$iterator = end($this->global->its);
?>
<table width="200" border="1">
<?php
		for ($i=1;
		$i < $radek+1;
		$i++) {
?>
        <tr>
<?php
			for ($h=1;
			$h < $predek+1;
			$h++) {
				?>            <td><?php echo LR\Filters::escapeHtmlText($i) /* line 19 */ ?>-<?php echo LR\Filters::escapeHtmlText($h) /* line 19 */ ?></td>
<?php
			}
?>
        <tr>
<?php
		}
?>
    
</table>
<table width="200" border="1">
<?php
		$iterations = 0;
		foreach ($users as $key =>$item) {
?>
        <tr>
            
            
            <td>
                <?php echo LR\Filters::escapeHtmlText($key +1) /* line 31 */ ?>

            </td>
            <td>
                <?php echo LR\Filters::escapeHtmlText($item) /* line 34 */ ?>

             </td>        
        <tr>
<?php
			$iterations++;
		}
?>
    
</table>
<?php
	}

}
