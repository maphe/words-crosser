<?php

namespace Cross\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cross\GameBundle\Entity\Word
 */
class Word
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $word
     */
    private $word;

    /**
     * @var string $type
     */
    private $type;

    /**
     * @var string $form
     */
    private $form;

    /**
     * @var string $lemme
     */
    private $lemme;


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
     * Set word
     *
     * @param string $word
     * @return Word
     */
    public function setWord($word)
    {
        $this->word = $word;
    
        return $this;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Word
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set form
     *
     * @param string $form
     * @return Word
     */
    public function setForm($form)
    {
        $this->form = $form;
    
        return $this;
    }

    /**
     * Get form
     *
     * @return string 
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set lemme
     *
     * @param string $lemme
     * @return Word
     */
    public function setLemme($lemme)
    {
        $this->lemme = $lemme;
    
        return $this;
    }

    /**
     * Get lemme
     *
     * @return string 
     */
    public function getLemme()
    {
        return $this->lemme;
    }
}
