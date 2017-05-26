# Yii 2 Serializers 扩展

序列化类

## 安装

使用 [composer](https://getcomposer.org/) 安装:

使用命令

```bash
php composer.phar require --prefer-dist ipaya/yii2-serializers
```

或在 `composer.json` 文件的 `require` 段增加如下代码

```json
"ipaya/yii2-serializers": "*"
```

使用

```php
<?php

$model = new User();
$serializer = new JsonSerializer();
// 将对象序列化为字符串
$json = $serializer->serialize($model);
// 将字符串反序列话为对象
$user = $serializer->unserializ($json);
```
