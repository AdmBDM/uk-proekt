<?php
$itemHead = [
	['label' => 'Меню-' . Yii::$app->user->identity->id, 'options' => ['class' => 'header']],
];

$itemsAdmin = [
	[
		'label' => 'Инструменты',
		'icon' => 'cogs',
		'url' => '#',
		'items' => [
			['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
			['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
		],
	],
//	['label' => 'Файлы', 'icon' => 'files-o', 'url' => '/admin/files',],
];

$itemsExample = [
	[
		'label' => 'Пример меню',
		'icon' => 'share',
		'url' => '#',
		'items' => [
			[
				'label' => 'Level One',
				'icon' => 'circle-o',
				'url' => '#',
				'items' => [
					['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
					[
						'label' => 'Level Two',
						'icon' => 'circle-o',
						'url' => '#',
						'items' => [
							['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
							['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
						],
					],
				],
			],
		],
	],
];

$itemsWork = [
	['label' => 'Новости', 'icon' => 'inbox', 'url' => '/admin/news',],
];

$itemsDocs = [
	[
		'label' => 'Раскрытие',
		'icon' => 'comment',
		'url' => '#',
		'items' => [
			['label' => 'Группы информации', 'icon' => 'sitemap', 'url' => ['/docs-group']],
			['label' => 'Документы УК', 'icon' => 'file', 'url' => ['/open-docs/index?gr=1']],
			['label' => 'Собственные ср-ва', 'icon' => 'list-ul', 'url' => ['/open-docs/index?gr=2']],
			['label' => 'Финансы / Аудит', 'icon' => 'book', 'url' => ['/open-docs/index?gr=3']],
			['label' => 'Общие', 'icon' => 'file', 'url' => ['/open-docs/index?gr=4']],
		],
	],
];
?>

<aside class="main-sidebar">

	<section class="sidebar">
		<?= dmstr\widgets\Menu::widget(
			[
				'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
				'items' => array_merge(
					  $itemHead
					, Yii::$app->user->identity->id <= 2 ? $itemsAdmin : []
//					, $itemsExample
					, $itemsWork
					, $itemsDocs
				),
			]
		) ?>
	</section>
</aside>
