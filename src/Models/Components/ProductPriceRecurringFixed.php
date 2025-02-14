<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


/** ProductPriceRecurringFixed - A recurring price for a product, i.e. a subscription. */
class ProductPriceRecurringFixed
{
    /**
     * Creation timestamp of the object.
     *
     * @var \DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    public \DateTime $createdAt;

    /**
     * The ID of the price.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * Whether the price is archived and no longer available.
     *
     * @var bool $isArchived
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_archived')]
    public bool $isArchived;

    /**
     * The ID of the product owning the price.
     *
     * @var string $productId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('product_id')]
    public string $productId;

    /**
     * The currency.
     *
     * @var string $priceCurrency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('price_currency')]
    public string $priceCurrency;

    /**
     * The price in cents.
     *
     * @var int $priceAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('price_amount')]
    public int $priceAmount;

    /**
     *
     * @var SubscriptionRecurringInterval $recurringInterval
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('recurring_interval')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\SubscriptionRecurringInterval')]
    public SubscriptionRecurringInterval $recurringInterval;

    /**
     * Last modification timestamp of the object.
     *
     * @var ?\DateTime $modifiedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('modified_at')]
    public ?\DateTime $modifiedAt;

    /**
     *
     * @var AmountType $amountType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\AmountType')]
    public AmountType $amountType;

    /**
     * The type of the price.
     *
     * @var Type $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\Type')]
    public Type $type;

    /**
     * @param  \DateTime  $createdAt
     * @param  string  $id
     * @param  AmountType  $amountType
     * @param  bool  $isArchived
     * @param  string  $productId
     * @param  string  $priceCurrency
     * @param  int  $priceAmount
     * @param  Type  $type
     * @param  SubscriptionRecurringInterval  $recurringInterval
     * @param  ?\DateTime  $modifiedAt
     */
    public function __construct(\DateTime $createdAt, string $id, bool $isArchived, string $productId, string $priceCurrency, int $priceAmount, SubscriptionRecurringInterval $recurringInterval, ?\DateTime $modifiedAt = null, AmountType $amountType = AmountType::Fixed, Type $type = Type::Recurring)
    {
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->isArchived = $isArchived;
        $this->productId = $productId;
        $this->priceCurrency = $priceCurrency;
        $this->priceAmount = $priceAmount;
        $this->recurringInterval = $recurringInterval;
        $this->modifiedAt = $modifiedAt;
        $this->amountType = $amountType;
        $this->type = $type;
    }
}