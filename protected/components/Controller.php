<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	public function saveFile($files, $field = 'files')
	{
		if (!empty($files) and !empty($files[$field]['name'])) {
			$ext = pathinfo($files[$field]['name'], PATHINFO_EXTENSION);

			$originalName = str_replace(".$ext", '', $files[$field]['name']);
			if ($originalName and preg_match('/^(\w|-)+$/', $originalName))
				$name = $originalName . ".$ext";
			else
				$name = md5(rand()) . ".$ext";

			copy($files[$field]['tmp_name'], Yii::app()->params->uploadPath . $name);
			return Yii::app()->params->htmlPath . $name; // поменять если не исп. Yii
		}
		return null;
	}
}