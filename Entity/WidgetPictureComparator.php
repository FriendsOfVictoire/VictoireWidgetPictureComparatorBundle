<?php

namespace Victoire\Widget\PictureComparatorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\CoreBundle\Annotations as VIC;
use Victoire\Bundle\MediaBundle\Entity\Media;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetPictureComparator.
 *
 * @ORM\Table("vic_widget_picturecomparator")
 * @ORM\Entity
 */
class WidgetPictureComparator extends Widget
{
    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="\Victoire\Bundle\MediaBundle\Entity\Media")
     * @ORM\JoinColumn(name="leftPicture_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     * @VIC\ReceiverProperty("imageable")
     */
    protected $leftPicture;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="\Victoire\Bundle\MediaBundle\Entity\Media")
     * @ORM\JoinColumn(name="rightPicture_id", referencedColumnName="id", onDelete="CASCADE", nullable=true)
     * @VIC\ReceiverProperty("imageable")
     */
    protected $rightPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="leftPictureLabel", type="string", length=55, nullable=true)
     * @VIC\ReceiverProperty("textable")
     */
    protected $leftPictureLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="rightPictureLabel", type="string", length=55, nullable=true)
     * @VIC\ReceiverProperty("textable")
     */
    protected $rightPictureLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="orientation", type="string", length=55, nullable=true)
     */
    protected $orientation;

    /**
     * @var string
     *
     * @ORM\Column(name="initialOffset", type="integer", nullable=true)
     */
    protected $initialOffset = 50;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle).
     *
     * @return string
     */
    public function __toString()
    {
        return 'PictureComparator #'.$this->id;
    }

    /**
     * @return Media
     */
    public function getLeftPicture()
    {
        return $this->leftPicture;
    }

    /**
     * @param Media $leftPicture
     */
    public function setLeftPicture(Media $leftPicture)
    {
        $this->leftPicture = $leftPicture;
    }

    /**
     * @return Media
     */
    public function getRightPicture()
    {
        return $this->rightPicture;
    }

    /**
     * @param Media $rightPicture
     */
    public function setRightPicture(Media $rightPicture)
    {
        $this->rightPicture = $rightPicture;
    }

    /**
     * @return string
     */
    public function getLeftPictureLabel()
    {
        return $this->leftPictureLabel;
    }

    /**
     * @param string $leftPictureLabel
     */
    public function setLeftPictureLabel($leftPictureLabel)
    {
        $this->leftPictureLabel = $leftPictureLabel;
    }

    /**
     * @return string
     */
    public function getRightPictureLabel()
    {
        return $this->rightPictureLabel;
    }

    /**
     * @param string $rightPictureLabel
     */
    public function setRightPictureLabel($rightPictureLabel)
    {
        $this->rightPictureLabel = $rightPictureLabel;
    }

    /**
     * @return string
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * @param string $orientation
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
    }

    /**
     * @return string
     */
    public function getInitialOffset()
    {
        return $this->initialOffset;
    }

    /**
     * @param string $initialOffset
     */
    public function setInitialOffset($initialOffset)
    {
        $this->initialOffset = $initialOffset;
    }
}
