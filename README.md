## Panic Statusboard Data Formatter

This package helps return custom data to be used in the charts for Panic's [StatusBoard](https://panic.com/statusboard/) iOS application. By providing getters and setters for the various fields it aims to make it more clear to new developers what data is required and how it should be formatted. Panic provides [this](http://library.panic.com/status-board/graph_tutorial/) documentation in regards to making custom charts.

---

#Installation

 Require this package in your `composer.json` and update composer.

```php
"hopkins/panic": "dev-master"
```
or
```shell
composer require hopkins/panic
```

After updating composer, you're all set to start using the Class. You can either new up the class with parameters, or set them as you go.

New with parameters
```php
$data = [
    [
        "title" => "location1",
        "color" => "blue",
        "datapoints" => [
            "title" => '24 Forcast',
            "value" => "70"
        ]
    ],[
        "title" => "location2",
        "color" => "green",
        "datapoints" => [
            "title" => '24 Forcast',
            "value" => "75"
        ]
    ]
];

$panic = new \Hopkins\Panic\CustomChart("Chart title","type","xAxisModifications","yAxisModifications","refreshEveryNSeconds");

$panic->setDataSequences($data);
return $panic->render();

```

New with setters (same dataset)
```php
$panic = new CustomChart();
$panic->setChartTitle("24 Forcast");
$panic->setType("bar");
$panic->setXAxis(["showEveryLabel" => true]);
$panic->setRefreshEveryNSeconds(900);
$panic->setDataSequences($result);
$panic->setDataSequences($data);
return $panic->render();
```


# License

This project is licensed using [DBAD](http://www.dbad-license.org/). Go have a blast.