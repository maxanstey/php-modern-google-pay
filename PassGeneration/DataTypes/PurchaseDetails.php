<?php

namespace PassGeneration\DataTypes;

use PassGeneration\DataTypes\Tickets\TicketCost;
use Google\Model as GoogleModel;

class PurchaseDetails extends GoogleModel
{
    public string|null $accountId = null;
    public string|null $confirmationCode = null;
    public string|null $purchaseDateTime = null;
    public string|null $purchaseReceiptNumber = null;
    public TicketCost|null $ticketCost = null;

    public function setAccountId($accountId): static
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function setConfirmationCode($confirmationCode): static
    {
        $this->confirmationCode = $confirmationCode;

        return $this;
    }

    public function getConfirmationCode(): string
    {
        return $this->confirmationCode;
    }

    public function setPurchaseDateTime($purchaseDateTime): static
    {
        $this->purchaseDateTime = $purchaseDateTime;

        return $this;
    }

    public function getPurchaseDateTime(): string
    {
        return $this->purchaseDateTime;
    }

    public function setPurchaseReceiptNumber($purchaseReceiptNumber): static
    {
        $this->purchaseReceiptNumber = $purchaseReceiptNumber;

        return $this;
    }

    public function getPurchaseReceiptNumber(): string
    {
        return $this->purchaseReceiptNumber;
    }

    public function setTicketCost(TicketCost $ticketCost): static
    {
        $this->ticketCost = $ticketCost;

        return $this;
    }

    public function getTicketCost(): TicketCost
    {
        return $this->ticketCost;
    }
}
