<?php

namespace Victoire\Widget\PictureComparatorBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\WidgetType;
use Victoire\Bundle\MediaBundle\Form\Type\MediaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * WidgetPictureComparator form type.
 */
class WidgetPictureComparatorType extends WidgetType
{
    /**
     * define form fields.
     *
     * @param FormBuilderInterface $builder
     *
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('leftPicture', MediaType::class, [
                'label' => 'widget_picturecomparator.form.leftPicture.label',
            ])
            ->add('leftPictureLabel', null, [
                'label' => 'widget_picturecomparator.form.leftPictureLabel.label',
                'attr'  => [
                    'placeholder' => 'widget_picturecomparator.leftPictureLabel.default',
                ],
            ])
            ->add('rightPicture', MediaType::class, [
                'label' => 'widget_picturecomparator.form.rightPicture.label',
            ])
            ->add('rightPictureLabel', null, [
                'label' => 'widget_picturecomparator.form.rightPictureLabel.label',
                'attr'  => [
                    'placeholder' => 'widget_picturecomparator.rightPictureLabel.default',
                ],
            ])
            ->add('initialOffset', IntegerType::class, [
                'label'      => 'widget_picturecomparator.form.initialOffset.label',
                'attr'       => [
                    'min' => '0',
                    'max' => '100',
                ],
            ])
            ->add('orientation', ChoiceType::class, [
                'label'   => 'widget_picturecomparator.form.orientation.label',
                'choices' => [
                    'horizontal' => 'widget_picturecomparator.form.orientation.choice.horizontal',
                    'vertical'   => 'widget_picturecomparator.form.orientation.choice.vertical',
                ],
            ]);
        parent::buildForm($builder, $options);
    }

    /**
     * bind form to WidgetPictureComparator entity.
     *
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults([
            'data_class'         => 'Victoire\Widget\PictureComparatorBundle\Entity\WidgetPictureComparator',
            'widget'             => 'PictureComparator',
            'translation_domain' => 'victoire',
        ]);
    }

    /**
     * get form name.
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_picturecomparator';
    }
}
