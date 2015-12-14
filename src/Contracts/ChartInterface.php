<?php
namespace Hopkins\Panic\Contracts;


/**
 * Interface ChartInterface
 * @package Me\Panic\Contracts
 */
interface ChartInterface
{
    /**
     * @return mixed
     */
    public function render();

    /**
     * @return mixed
     */
    public function getChartTitle();

    /**
     * @param $chartTitle
     * @return bool
     */
    public function setChartTitle($chartTitle);

    /**
     * @return mixed
     */
    public function getType();

    /**
     * @param $type
     * @return bool
     */
    public function setType($type);

    /**
     * @return mixed
     */
    public function getRefreshEveryNSeconds();

    /**
     * @param $refreshEveryNSeconds
     * @return bool
     */
    public function setRefreshEveryNSeconds($refreshEveryNSeconds);

    /**
     * @return mixed
     */
    public function getXAxis();

    /**
     * @param $xAxis
     * @return bool
     */
    public function setXAxis($xAxis);

    /**
     * @return mixed
     */
    public function getYAxis();

    /**
     * @param $yAxis
     * @return bool
     */
    public function setYAxis($yAxis);

    public function getScaleTo();

    public function setScaleTo($integer);

    public function setDatasequences(array $data);

    public function getDatasequences();
}