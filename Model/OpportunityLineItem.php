<?php

namespace Ddeboer\Salesforce\MapperBundle\Model;

use Ddeboer\Salesforce\MapperBundle\Annotation as Salesforce;

/**
 * OpportunityLineItem proxy object
 * 
 * @Salesforce\Object(name="OpportunityLineItem")
 */
class OpportunityLineItem extends AbstractModel
{
    /**
     * @var xsdstring
     * @Salesforce\Field(name="Description")
     */
    protected $description;
    
    /**
     * @var xsdboolean
     */
    protected $isDeleted;
    
    /**
     * @var xsddouble
     * @Salesforce\Field(name="ListPrice")
     */
    protected $listPrice;
    
    /**
     * @var ensOpportunity
     * @Salesforce\Relation(field="Opportunity", class="Ddeboer\Salesforce\MapperBundle\Model\Opportunity")
     */
    protected $opportunity;
    
    /**
     * @var string
     * @Salesforce\Field(name="OpportunityId")
     */
    protected $opportunityId;
    
    /**
     * @var ensPricebookEntry
     */
    protected $pricebookEntry;
    
    /**
     * @var string
     * @Salesforce\Field(name="PricebookEntryId")
     */
    protected $pricebookEntryId;
    
    /**
     * @var double
     * @Salesforce\Field(name="Quantity")
     */
    protected $quantity;
    
    /**
     * @var \DateTime
     */
    protected $serviceDate;
    
    /**
     * @var xsdint
     */
    protected $sortOrder;
    
    /**
     * @var double
     * @Salesforce\Field(name="TotalPrice")
     */
    protected $totalPrice;
    
    /**
     * @var double
     * @Salesforce\Field(name="UnitPrice")
     */
    protected $unitPrice;
    
    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function isDeleted()
    {
        return $this->isDeleted;
    }

    public function getListPrice()
    {
        return $this->listPrice;
    }

    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;
    }

    public function getOpportunity()
    {
        return $this->opportunity;
    }

    public function setOpportunity(Opportunity $opportunity)
    {
        $this->opportunity = $opportunity;
        $this->opportunityId = $opportunity->getId();
    }

    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;
    }

    public function getPricebookEntry()
    {
        return $this->pricebookEntry;
    }

    public function setPricebookEntry($pricebookEntry)
    {
        $this->pricebookEntry = $pricebookEntry;
    }

    public function getPricebookEntryId()
    {
        return $this->pricebookEntryId;
    }

    public function setPricebookEntryId($pricebookEntryId)
    {
        $this->pricebookEntryId = $pricebookEntryId;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getServiceDate()
    {
        return $this->serviceDate;
    }

    public function setServiceDate(\DateTime $serviceDate)
    {
        $this->serviceDate = $serviceDate;
    }

    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }

    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }
}