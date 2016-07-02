<?php

/**
 * Created by PhpStorm.
 * User: Elaine
 * Date: 16/7/2
 * Time: 15:44
 */
class Activity
{

    private $act_id;
    private $act_startTime;
    private $act_location;
    private $act_description;
    private $act_sponsor;
    private $act_photoList;#活动相关的图片url list
    private $act_UserList;

    /**
     * Activity constructor.
     * @param $act_id
     * @param $act_startTime
     * @param $act_location
     * @param $act_description
     * @param $act_sponsor
     * @param $act_photoList
     * @param $act_UserList
     */
    public function __construct($act_id, $act_startTime, $act_location, $act_description, $act_sponsor, $act_photoList, $act_UserList)
    {
        $this->act_id = $act_id;
        $this->act_startTime = $act_startTime;
        $this->act_location = $act_location;
        $this->act_description = $act_description;
        $this->act_sponsor = $act_sponsor;
        $this->act_photoList = $act_photoList;
        $this->act_UserList = $act_UserList;
    }

    /**
     * @return mixed
     */
    public function getActId()
    {
        return $this->act_id;
    }

    /**
     * @param mixed $act_id
     */
    public function setActId($act_id)
    {
        $this->act_id = $act_id;
    }

    /**
     * @return mixed
     */
    public function getActStartTime()
    {
        return $this->act_startTime;
    }

    /**
     * @param mixed $act_startTime
     */
    public function setActStartTime($act_startTime)
    {
        $this->act_startTime = $act_startTime;
    }

    /**
     * @return mixed
     */
    public function getActLocation()
    {
        return $this->act_location;
    }

    /**
     * @param mixed $act_location
     */
    public function setActLocation($act_location)
    {
        $this->act_location = $act_location;
    }

    /**
     * @return mixed
     */
    public function getActDescription()
    {
        return $this->act_description;
    }

    /**
     * @param mixed $act_description
     */
    public function setActDescription($act_description)
    {
        $this->act_description = $act_description;
    }

    /**
     * @return mixed
     */
    public function getActSponsor()
    {
        return $this->act_sponsor;
    }

    /**
     * @param mixed $act_sponsor
     */
    public function setActSponsor($act_sponsor)
    {
        $this->act_sponsor = $act_sponsor;
    }

    /**
     * @return mixed
     */
    public function getActPhotoList()
    {
        return $this->act_photoList;
    }

    /**
     * @param mixed $act_photoList
     */
    public function setActPhotoList($act_photoList)
    {
        $this->act_photoList = $act_photoList;
    }

    /**
     * @return mixed
     */
    public function getActUserList()
    {
        return $this->act_UserList;
    }

    /**
     * @param mixed $act_UserList
     */
    public function setActUserList($act_UserList)
    {
        $this->act_UserList = $act_UserList;
    }//参与活动人的list




}