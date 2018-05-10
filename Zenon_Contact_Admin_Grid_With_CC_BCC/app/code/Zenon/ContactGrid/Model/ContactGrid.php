<?php
namespace Zenon\ContactGrid\Model;

use Zenon\ContactGrid\Api\Data\ContactGridInterface;

class ContactGrid extends \Magento\Framework\Model\AbstractModel implements ContactGridInterface
{
    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'zenon_contactGrid';

    /**
     * @var string
     */
    protected $_cacheTag = 'zenon_contactGrid';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'zenon_contactGrid';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Zenon\ContactGrid\Model\ResourceModel\ContactGrid');
    }
    /**
     * Get entityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set entityId.
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get Name.
     *
     * @return varchar
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Set name.
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * Set email.
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }


    /**
     * Get getComment.
     *
     * @return varchar
     */
    public function getComment()
    {
        return $this->getData(self::COMMENT);
    }

    /**
     * Set comment.
     */
    public function setComment($comment)
    {
        return $this->setData(self::COMMENT, $comment);
    }

    /**
     * Get getCreationTime.
     *
     * @return mixed
     */
    public function getCreationTime(){

        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Set creationTime.
     */
    public function setCreationTime($creationTime){

        return $this->setData(self::CREATION_TIME, $creationTime);
    }
}