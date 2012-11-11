<?php
$this->pageTitle = 'Пользователи';
$this->breadcrumbs = array(
	'Пользователи',
);
?>
<div class="row-fluid">
	<div class="box gradient">

		<div class="title">

			<h4>
				<span class="icon16 icomoon-icon-users"></span>
				<span>Список пользователей</span>
			</h4>
		</div>
		<div class="content noPad clearfix">
			<?php
			$this->widget('zii.widgets.grid.CGridView', array(
				'dataProvider' => $dataProvider,
				'cssFile' => '',
				'itemsCssClass' => 'responsive table table-bordered',
				'summaryCssClass' => 'dataTables_info',
				'summaryText' => 'Показаны пользователи с {start} по {end} из {count}',
				'template' => '{items}{summary}{pager}',
				'pager' => array(
					'cssFile' => '',
					'header' => '',
					'selectedPageCssClass' => 'active',
					'hiddenPageCssClass' => '',
					'firstPageLabel' => 'Первая',
					'prevPageLabel' => 'Предыдущая',
					'nextPageLabel' => 'Следующая',
					'lastPageLabel' => 'Последняя',
				),
				'pagerCssClass' => 'pagination',
				'columns' => array(
					array('name'=>'id', 'header'=>'ID'),
					array('name'=>'first_name', 'header'=>'Имя'),
					array('name'=>'last_name', 'header'=>'Фамилия'),
					array('name'=>'service', 'header'=>'Сервис'),
					array('name'=>'last_activity', 'header'=>'Последний вход'),
					array('name'=>'create_time', 'header'=>'Регистрация'),
					array(
						'class' => 'CButtonColumn',
						'template'=>'{update}',
						'updateButtonOptions'=>array('class'=>'tip', 'title'=>'Редактировать', 'aria-describedby'=>'ui-tooltip-9'),
						'updateButtonLabel'=>'<span class="icon12 icomoon-icon-pencil"></span>',
						'updateButtonImageUrl'=>false,
					),
				),
			));
			?>
		</div>
	</div>
</div>
