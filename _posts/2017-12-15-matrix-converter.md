Tab 으로 구분된 문자열 매트릭스를 Json 매티릭스로 변환/역변환 해주는
composer 기반 lib 입니다.

Getting started
----------------
```
composer require socoolbear/matrix-converter
```
또는
```
git clone https://github.com/socoolbear/matrix-converter
```

Example
-------
```
<?php
require __DIR__ . '/vendor/autoload.php';

$jconv = new MatrixConverter\JsonConverter();
$jcor = $jconv->toMatrix("a\tb\r\nc\td");

$tconv = new MatrixConverter\TabConverter();
$tcor = $tconv->toMatrix($jcor);

echo 'json converter : ' . $jcor . PHP_EOL;
echo 'tab converter : ' . $tcor . PHP_EOL;
```
```
json converter : 
{
  "count": {
    "trados": 0
  },
  "data": [
    [
      {
        "from": "seo.translate_dictionary_source",
        "keyword": "a",
        "result": "a",
        "type": "head"
      },
      {
        "from": "seo.translate_dictionary_source",
        "keyword": "b\r",
        "result": "b\r",
        "type": "head"
      }
    ],
    [
      {
        "from": "seo.translate_dictionary_source",
        "keyword": "c",
        "result": "c",
        "type": "body"
      },
      {
        "from": "seo.translate_dictionary_source",
        "keyword": "d",
        "result": "d",
        "type": "body"
      }
    ]
  ]
}
```
```
tab converter :
a       b
c       d
```
