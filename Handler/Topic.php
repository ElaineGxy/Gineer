<?php
class Topic
{
	private $topic_id;
	private $topic_subject;
	private $topic_content;
	private $topic_sponsor;
	private $topic_location;
	private $topic_receiver;
	private $topic_time;
	private $topic_tag;
	private $topic_type;
    private $topic_pic_list;

    /**
     * Topic constructor.
     * @param $topic_id
     * @param $topic_subject
     * @param $topic_content
     * @param $topic_sponsor
     * @param $topic_location
     * @param $topic_receiver
     * @param $topic_time
     * @param $topic_tag
     * @param $topic_type
     */
    public function __construct($topic_id, $topic_subject, $topic_content, $topic_sponsor, $topic_location, $topic_receiver, $topic_time, $topic_tag, $topic_type,$topic_pic_list)
    {
        $this->topic_id = $topic_id;
        $this->topic_subject = $topic_subject;
        $this->topic_content = $topic_content;
        $this->topic_sponsor = $topic_sponsor;
        $this->topic_location = $topic_location;
        $this->topic_receiver = $topic_receiver;
        $this->topic_time = $topic_time;
        $this->topic_tag = $topic_tag;
        $this->topic_type = $topic_type;
        $this->topic_pic_list = $topic_pic_list;
    }

    /**
     * @return mixed
     */
    public function getTopicPicList()
    {
        return $this->topic_pic_list;
    }

    /**
     * @param mixed $topic_pic_list
     */
    public function setTopicPicList($topic_pic_list)
    {
        $this->topic_pic_list = $topic_pic_list;
    }


    /**
     * @return mixed
     */
    public function getTopicId()
    {
        return $this->topic_id;
    }

    /**
     * @param mixed $topic_id
     */
    public function setTopicId($topic_id)
    {
        $this->topic_id = $topic_id;
    }

    /**
     * @return mixed
     */
    public function getTopicSubject()
    {
        return $this->topic_subject;
    }

    /**
     * @param mixed $topic_subject
     */
    public function setTopicSubject($topic_subject)
    {
        $this->topic_subject = $topic_subject;
    }

    /**
     * @return mixed
     */
    public function getTopicContent()
    {
        return $this->topic_content;
    }

    /**
     * @param mixed $topic_content
     */
    public function setTopicContent($topic_content)
    {
        $this->topic_content = $topic_content;
    }

    /**
     * @return mixed
     */
    public function getTopicSponsor()
    {
        return $this->topic_sponsor;
    }

    /**
     * @param mixed $topic_sponsor
     */
    public function setTopicSponsor($topic_sponsor)
    {
        $this->topic_sponsor = $topic_sponsor;
    }

    /**
     * @return mixed
     */
    public function getTopicLocation()
    {
        return $this->topic_location;
    }

    /**
     * @param mixed $topic_location
     */
    public function setTopicLocation($topic_location)
    {
        $this->topic_location = $topic_location;
    }

    /**
     * @return mixed
     */
    public function getTopicReceiver()
    {
        return $this->topic_receiver;
    }

    /**
     * @param mixed $topic_receiver
     */
    public function setTopicReceiver($topic_receiver)
    {
        $this->topic_receiver = $topic_receiver;
    }

    /**
     * @return mixed
     */
    public function getTopicTime()
    {
        return $this->topic_time;
    }

    /**
     * @param mixed $topic_time
     */
    public function setTopicTime($topic_time)
    {
        $this->topic_time = $topic_time;
    }

    /**
     * @return mixed
     */
    public function getTopicTag()
    {
        return $this->topic_tag;
    }

    /**
     * @param mixed $topic_tag
     */
    public function setTopicTag($topic_tag)
    {
        $this->topic_tag = $topic_tag;
    }

    /**
     * @return mixed
     */
    public function getTopicType()
    {
        return $this->topic_type;
    }

    /**
     * @param mixed $topic_type
     */
    public function setTopicType($topic_type)
    {
        $this->topic_type = $topic_type;
    }//提问还是分享
}
?>
