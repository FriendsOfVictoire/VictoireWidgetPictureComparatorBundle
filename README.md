Victoire PictureComparator Bundle
============

## What is the purpose of this bundle

This bundle implements the [zurb twentytwenty picture comparison slider] (http://zurb.com/playground/twentytwenty)

## Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

## Install the bundle :

Run the following composer command :

    php composer.phar require friendsofvictoire/picturecomparator-widget

### Reminder

Do not forget to add the bundle in your AppKernel !

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\PictureComparatorBundle\VictoireWidgetPictureComparatorBundle(),
            );

            return $bundles;
        }
    }
