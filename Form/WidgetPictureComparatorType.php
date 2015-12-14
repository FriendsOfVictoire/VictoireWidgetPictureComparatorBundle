<?php

namespace Victoire\Widget\PictureComparatorBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Victoire\Bundle\CoreBundle\Form\WidgetType;


/**
 * WidgetPictureComparator form type
 */
class WidgetPictureComparatorType extends WidgetType
{
    /**
     * define form fields
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('leftPicture', 'media', array(
                'label' => 'widget_picturecomparator.form.leftPicture.label'
            ))
            ->add('leftPictureLabel', null, array(
                'label' => 'widget_picturecomparator.form.leftPictureLabel.label'
            ))
            ->add('rightPicture', 'media', array(
                'label' => 'widget_picturecomparator.form.rightPicture.label'
            ))
            ->add('rightPictureLabel', null, array(
                'label' => 'widget_picturecomparator.form.rightPictureLabel.label'
            ));
        parent::buildForm($builder, $options);

    }


    /**
     * bind form to WidgetPictureComparator entity
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        parent::setDefaultOptions($resolver);

        $resolver->setDefaults(array(
            'data_class'         => 'Victoire\Widget\PictureComparatorBundle\Entity\WidgetPictureComparator',
            'widget'             => 'PictureComparator',
            'translation_domain' => 'victoire'
        ));
    }

    /**
     * get form name
     *
     * @return string The form name
     */
    public function getName()
    {
        return 'victoire_widget_form_picturecomparator';
    }
}
