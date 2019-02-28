### **MetaTag and Link Yii2 framework**
-------------

** Documentation `v1.0`**
-------------

>To connect a component, you need to open the `config / web.php` file and place the following code in it:

```php
return [
    ...
    
    'components' => [
        'metaTag' => [
            'class' => 'app\components\MetaTagComponent'
        ],
        'metaLink' => [
            'class' => 'app\components\MetaLinkComponent'
        ]
    ]
    
    ...
]
```

>Go to our views `views / main / index.php` and place these lines here.

#### It is not necessary to specify everything!

```php
<?php
    Yii::$app->metaLink->getAppleTouchIcon('/img/apple');
    Yii::$app->metaLink->getSiteIcon('/img/site');
    Yii::$app->metaTag->setTitle('Title name', true);
?>
```


