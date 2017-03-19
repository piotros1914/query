<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="answers")
 * @ORM\Entity
 */
class Answer {
	
	/**
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id()
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\Column(name="answerText", type="text")
	 */
	private $answerText;
	
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="questionId", type="integer")
	 */
	private $questionId;
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="surveyId", type="integer")
	 */
	private $surveyId;
	

 

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set qestionId
     *
     * @param integer $qestionId
     *
     * @return Option
     */
    public function setQestionId($qestionId)
    {
        $this->qestionId = $qestionId;

        return $this;
    }

    /**
     * Get qestionId
     *
     * @return integer
     */
    public function getQestionId()
    {
        return $this->qestionId;
    }

    /**
     * Set surveyId
     *
     * @param integer $surveyId
     *
     * @return Option
     */
    public function setSurveyId($surveyId)
    {
        $this->surveyId = $surveyId;

        return $this;
    }

    /**
     * Get surveyId
     *
     * @return integer
     */
    public function getSurveyId()
    {
        return $this->surveyId;
    }

    /**
     * Set questionId
     *
     * @param integer $questionId
     *
     * @return Option
     */
    public function setQuestionId($questionId)
    {
        $this->questionId = $questionId;

        return $this;
    }

    /**
     * Get questionId
     *
     * @return integer
     */
    public function getQuestionId()
    {
        return $this->questionId;
    }

    /**
     * Set answerText
     *
     * @param string $answerText
     *
     * @return Answer
     */
    public function setAnswerText($answerText)
    {
        $this->answerText = $answerText;

        return $this;
    }

    /**
     * Get answerText
     *
     * @return string
     */
    public function getAnswerText()
    {
        return $this->answerText;
    }
}
