<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Polar\Models\Components;


class BenefitCustomUpdate
{
    /**
     * The description of the benefit. Will be displayed on products having this benefit.
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?BenefitCustomProperties $properties
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('properties')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitCustomProperties|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BenefitCustomProperties $properties = null;

    /**
     *
     * @var BenefitCustomUpdateType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Polar\Models\Components\BenefitCustomUpdateType')]
    public BenefitCustomUpdateType $type;

    /**
     * @param  BenefitCustomUpdateType  $type
     * @param  ?string  $description
     * @param  ?BenefitCustomProperties  $properties
     */
    public function __construct(?string $description = null, ?BenefitCustomProperties $properties = null, BenefitCustomUpdateType $type = BenefitCustomUpdateType::Custom)
    {
        $this->description = $description;
        $this->properties = $properties;
        $this->type = $type;
    }
}