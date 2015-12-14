<?php

namespace Hopkins\Panic;

class CustomChart{

    protected $chartTitle;

    protected $type;

    protected $refreshEveryNSeconds;

    protected $xAxis;

    protected $yAxis;

    protected $dataSequences;

    protected $scaleTo;

    public function __construct($title="set title",$type="bar",$yAxis=null,$xAxis=null,$refreshEveryNSeconds=900)
    {
        $this->title=$title;
        $this->type=$type;
        $this->refreshEveryNSeconds=$refreshEveryNSeconds;
        $this->xAxis=($xAxis)?$xAxis:null;
        $this->yAxis=($yAxis)?$yAxis:null;
    }

    public function render()
    {
        $graph = [
            "title" => $this->getChartTitle(),
            "type" => $this->getType(),
        ];
        if($this->getXAxis()){
            $graph['xAxis'] = $this->getXAxis();
        }
        if($this->getYAxis()){
            $graph['yAxis'] = $this->getYAxis();
        }
        $graph['refreshEveryNSeconds'] = $this->getRefreshEveryNSeconds();
        $graph['datasequences'] = $this->getDatasequences();
        return ["graph" => $graph];
    }

    public function getDatasequences()
    {
        return $this->dataSequences;
    }

    public function setDatasequences(array $data)
    {
        return ($this->dataSequences = $data) ? true : false;
    }

    public function getScaleTo()
    {
        return $this->scaleTo;
    }

    public function setScaleTo($integer)
    {
        return ($this->scaleTo = $integer) ? true : false;
    }

    /**
     * @return mixed
     */
    public function getChartTitle()
    {
        return $this->chartTitle;
    }

    /**
     * @param $chartTitle
     * @return bool
     */
    public function setChartTitle($chartTitle)
    {
        return ($this->chartTitle = $chartTitle) ? true : false;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     * @return bool
     */
    public function setType($type)
    {
        return ($this->type = $type) ? true : false;
    }

    /**
     * @return mixed
     */
    public function getRefreshEveryNSeconds()
    {
        return $this->refreshEveryNSeconds;
    }

    /**
     * @param $refreshEveryNSeconds
     * @return bool
     */
    public function setRefreshEveryNSeconds($refreshEveryNSeconds)
    {
        return ($this->refreshEveryNSeconds = $refreshEveryNSeconds) ? true : false;
    }

    /**
     * @return mixed
     */
    public function getXAxis()
    {
        return $this->xAxis;
    }

    /**
     * @param $xAxis
     * @return bool
     */
    public function setXAxis($xAxis)
    {
        return ($this->xAxis = $xAxis) ? true : false;
    }

    /**
     * @return mixed
     */
    public function getYAxis()
    {
        return $this->yAxis;
    }

    /**
     * @param $yAxis
     * @return bool
     */
    public function setYAxis($yAxis)
    {
        return ($this->yAxis = $yAxis) ? true : false;
    }
}