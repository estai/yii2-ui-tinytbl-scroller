#Yii2-UITinytblWidget Widget



## Install

Either run

```composer require estai/yii2-ui-tinytbl-scroller "@dev"```

or add

```"estai/yii2-ui-tinytbl-scroller": "@dev"```

to the ```require``` section of your `composer.json` file.

## Usage

```php
<? \estai\uitinytbl\UITinytblWidget::widget([
    'container' => '.block',
    'wheelSpeed' => 40,
    'settings' => [
        // Plugin options (https://github.com/mkkeck/jquery-ui-tinytbl)
    ]
]); ?>
 <div class='block'>
	<table>
	    ...
	</table>
</div>
```
