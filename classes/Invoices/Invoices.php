<?php

namespace phpCollab\Invoices;

use Exception;
use InvalidArgumentException;
use phpCollab\Container;
use phpCollab\Database;


/**
 * Class Invoices
 * @package phpCollab\Invoices
 */
class Invoices
{
    protected $invoices_gateway;
    protected $db;

    /**
     * @var Container
     */
    private $container;

    /**
     * Invoices constructor.
     * @param Database $database
     * @param Container $container
     */
    public function __construct(Database $database, Container $container)
    {
        $this->db = $database;
        $this->container = $container;
        $this->invoices_gateway = new InvoicesGateway($this->db);
    }

    /**
     * @param $project
     * @param $status
     * @param $active
     * @param $published
     * @return string
     */
    public function addInvoice($project, $status, $active, $published): string
    {
        $created = date('Y-m-d h:i');
        return $this->invoices_gateway->addInvoice($project, $status, $active, $published, $created);
    }

    /**
     * @param $title
     * @param $description
     * @param $invoiceId
     * @param $active
     * @param $completed
     * @param $mod_type
     * @param $mod_value
     * @param $worked_hours
     * @return mixed
     * @throws Exception
     */
    public function addInvoiceItem(
        $title,
        $description,
        $invoiceId,
        $active,
        $completed,
        $mod_type,
        $mod_value,
        $worked_hours
    ) {
        if ($title) {
            $active = is_null($active) ? 0 : $active;

            return $this->invoices_gateway->addInvoiceItem($title, $description, $invoiceId, date('Y-m-d h:i'), $active,
                $completed,
                $mod_type, $mod_value, $worked_hours);

        } else {
            throw new Exception('Task name is missing or appear to be empty');
        }
    }

    /**
     * @param $invoiceId
     * @return mixed
     */
    public function getInvoiceById($invoiceId)
    {
        $invoiceId = filter_var($invoiceId, FILTER_VALIDATE_INT);

        return $this->invoices_gateway->getInvoiceById($invoiceId);
    }

    /**
     * @param $projectId
     * @return mixed
     */
    public function getInvoicesByProjectId($projectId)
    {
        $projectId = filter_var($projectId, FILTER_VALIDATE_INT);
        return $this->invoices_gateway->getInvoicesByProjectId($projectId);
    }

    /**
     * @param $projectId
     * @param $status
     * @param null $sorting
     * @return mixed
     */
    public function getActiveInvoicesByProjectId($projectId, $status, $sorting = null)
    {
        return $this->invoices_gateway->getActiveInvoicesByProjectId($projectId, $status, $sorting);
    }

    /**
     * @param $invoiceId
     * @return mixed
     */
    public function getActiveInvoiceItemsByInvoiceId($invoiceId)
    {
        $invoiceId = filter_var($invoiceId, FILTER_VALIDATE_INT);

        return $this->invoices_gateway->getActiveInvoiceItemsByInvoiceId($invoiceId);
    }

    /**
     * @param $invoiceItemId
     * @return mixed
     */
    public function getInvoiceItemById($invoiceItemId)
    {
        $invoiceItemId = filter_var($invoiceItemId, FILTER_VALIDATE_INT);

        return $this->invoices_gateway->getInvoiceItemById($invoiceItemId);
    }

    /**
     * @param $id
     * @param $headerNote
     * @param $footerNote
     * @param $published
     * @param $status
     * @param $dateDue
     * @param $dateSent
     * @param $totalExTax
     * @param $totalIncTax
     * @param $taxRate
     * @param $taxAmount
     * @return mixed
     */
    public function updateInvoice(
        $id,
        $headerNote,
        $footerNote,
        $published,
        $status,
        $dateDue,
        $dateSent,
        $totalExTax,
        $totalIncTax,
        $taxRate,
        $taxAmount
    ) {
        if (!is_int(filter_var($id, FILTER_VALIDATE_INT))) {
            throw new InvalidArgumentException('Invoice ID is missing or invalid.');
        }

        $totalExTax = (empty($totalExTax)) ? 0.00 : $totalExTax ;
        $totalIncTax = (empty($totalIncTax)) ? 0.00 : $totalIncTax ;
        $taxRate = (empty($taxRate)) ? 0.00 : $taxRate ;
        $taxAmount = (empty($taxAmount)) ? 0.00 : $taxAmount ;

        return $this->invoices_gateway->updateInvoice($id, $headerNote, $footerNote, $published, $status, $dateDue,
            $dateSent, $totalExTax, $totalIncTax, $taxRate, $taxAmount);
    }

    public function editInvoiceItems($id, $title, $position, $amountExTax)
    {
        if (!is_int(filter_var($id, FILTER_VALIDATE_INT))) {
            throw new InvalidArgumentException('Invoice Item ID is missing or invalid.');
        }

        return $this->invoices_gateway->editInvoiceItem($id, $title, $position, $amountExTax);
    }

    /**
     * @param $invoicing
     * @param $completed
     * @param $hoursWorked
     * @param $taskId
     * @return mixed
     */
    public function updateInvoiceItems($invoicing, $completed, $hoursWorked, $taskId)
    {
        return $this->invoices_gateway->updateInvoiceItems($invoicing, $completed, $hoursWorked, $taskId);
    }

    /**
     * @param $projectId
     * @param $activeFlag
     * @return mixed
     */
    public function setActive($projectId, $activeFlag)
    {
        return $this->invoices_gateway->setActive($projectId, $activeFlag);
    }

    /**
     * @param $invoiceId
     * @param $flag
     * @return bool|mixed
     * @throws Exception
     */
    public function togglePublish($invoiceId, $flag)
    {
        $pub = $this->container->getInvoicePublishService();

        try {
            if ($flag === true) {
                return $pub->add($invoiceId);
            } else {
                return $pub->remove($invoiceId);
            }
        } catch (Exception $exception) {
            error_log('Error publishing invoice', 0);
            return false;
        }
    }

    public function updateItem(int $itemId, string $rateType, string $rateAmount, string $exTaxAmount)
    {
        $invItem = new UpdateInvoiceItem($this->db);
        try {
            return $invItem->update($itemId, $rateType, $rateAmount, $exTaxAmount);
        } catch (Exception $exception) {
            error_log('Error updating invoice item', 0);
            return false;
        }
    }
}
