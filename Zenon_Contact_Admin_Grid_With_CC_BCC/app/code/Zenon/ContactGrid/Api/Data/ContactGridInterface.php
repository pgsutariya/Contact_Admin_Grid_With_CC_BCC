<?php
/**
 * sstech_member Interface.
 *
 */
 
namespace Zenon\ContactGrid\Api\Data;
 
interface ContactGridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
	 * assign const according to database fields available
     */
	const ENTITY_ID= 'entity_id';
	const NAME= 'name';
	const EMAIL= 'email';
	const COMMENT= 'comment';
	const CREATION_TIME= 'creation_time';
 
    /**
     * Get Contact Record Id.
     *
     * @return int
     */
    public function getEntityId();
 
    /**
     * Set Contact Record Id.
     */
    public function setEntityId($entityId);
 
    /**
     * Get Name.
     *
     * @return varchar
     */
    public function getName();
 
    /**
     * Set Name.
     */
    public function setName($name);
 
    /**
     * Get Email.
     *
     * @return varchar
     */
    public function getEmail();
 
    /**
     * Set Email.
     */
    public function setEmail($email);
 
    /**
     * Get Comment.
     *
     * @return varchar
     */
    public function getComment();
 
    /**
     * Set Comment.
     */
    public function setComment($comment);
 
    /**
     * Get creationTime.
     *
     * @return varchar
     */
    public function getCreationTime();
 
    /**
     * Set creationTime.
     */
    public function setCreationTime($creationTime);

}