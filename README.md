# yii2-metaTagComponent
meta tag and link icon

# Much not implemented

>Connecting a component in the config file

```php
'components' => [
  ....
  'metaTag' => [
            'class' => 'app\components\MetaTagComponent'
   ],
  'metaLink' => [
            'class' => 'app\components\MetaLinkComponent'
  ]
]
```
----------------------------------------------------------------------------
```php
views/main/index.php
<?php
Yii::$app->metaLink->getAppleTouchIcon('/img/apple');
Yii::$app->metaLink->getSiteIcon('/img/site');
Yii::$app->metaTag->setTitle('Title name', true);
?>
```
