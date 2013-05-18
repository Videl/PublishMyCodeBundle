<?php

namespace Videl\PublishMyCodeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Code
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Videl\PublishMyCodeBundle\Entity\CodeRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Code
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $code;

    /**
     * @ORM\OneToOne(targetEntity="Videl\PublishMyCodeBundle\Entity\Code", mappedBy="post")
     */
    protected $post;

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
     * Set code
     *
     * @param string $code
     * @return Code
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function setPost(Post $post)
    {
        $this->post = $post;

        return $this;
    }
}