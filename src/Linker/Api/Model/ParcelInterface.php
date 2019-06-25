<?php

namespace Linker\Api\Model;

/**
 * Interface ParcelInterface
 *
 */
interface ParcelInterface
{
    /**
     * @return string
     */
    public function getPackageId();

    /**
     * @param string $packageId
     * @return ParcelInterface
     */
    public function setPackageId($packageId);

    /**
     * @return string
     */
    public function getParcelId();

    /**
     * @param string $parcelId
     * @return ParcelInterface
     */
    public function setParcelId($parcelId);

    /**
     * @return string
     */
    public function getLabel();

    /**
     * @param string $label
     * @return ParcelInterface
     */
    public function setLabel($label);

    /**
     * @return string
     */
    public function getTrackingUrl();

    /**
     * @param string $trackingUrl
     * @return ParcelInterface
     */
    public function setTrackingUrl($trackingUrl);

    /**
     * @return string
     */
    public function getOperatorName();

    /**
     * @param string $operatorName
     * @return ParcelInterface
     */
    public function setOperatorName($operatorName);
}
