Yii-PHPJavaBridge
=================

Yii component for connecting PHP with Java Virtual Machine

## Installation

Copy this repo to yii extensions dir.

## Configure

Add this component to config.php:

```
return array(
	...
	
	'components' => array(
		...
		'java' => array(
			'class' => 'application.extensions.YiiPHPJavaBridge.Wrapper',
		),
	),
	
	...
);
```

## Usage

```
$bridge = Yii::app()->java->getInstance();
echo $bridge->java("java.lang.Long")->MAX_VALUE;
```
