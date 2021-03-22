<?php

/**
 * @copyright Copyright (C) Ibexa AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformContentForms\Form\Type\FieldType;

use eZ\Publish\Core\FieldType\DateInterval\Value;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType as DateIntervalTypeBase;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class DateIntervalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add(
            'dateInterval',
            DateIntervalTypeBase::class,
            [
                'widget' => $options['widget'],
            ]
        );
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Value::class,
            'widget' => \eZ\Publish\Core\FieldType\DateInterval\Type::WIDGET_CHOICE,
        ])->setAllowedTypes('widget', 'string');
    }
}
