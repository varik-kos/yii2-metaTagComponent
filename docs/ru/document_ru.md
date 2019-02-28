### **MetaTag and Link Yii2 framework**
-------------

** Документация `v1.0`**
-------------

>Для подключения компонента, нужно открыть файл `config/web.php` и разместить в нем
следующий код:

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

>Переходим в наши виды `views/main/index.php` и размещаем вот такие строки. 

#### Не обязательно указывать все!

```php
<?php
    Yii::$app->metaLink->getAppleTouchIcon('/img/apple');
    Yii::$app->metaLink->getSiteIcon('/img/site');
    Yii::$app->metaTag->setTitle('Title name', true);
?>
```


