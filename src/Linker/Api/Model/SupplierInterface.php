<?php

namespace Linker\Api\Model;

/**
 * Interface SupplierInterface
 */
interface SupplierInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return SupplierInterface
     */
    public function setId($id);

    /**
     * @return int
     */
    public function getExternalId();

    /**
     * @param int $externalId
     * @return SupplierInterface
     */
    public function setExternalId($externalId);

    /**
     * @return string
     */
    public function getCode();

    /**
     * @param string $code
     * @return SupplierInterface
     */
    public function setCode($code);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return SupplierInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     * @return SupplierInterface
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getPhone();

    /**
     * @param string $phone
     * @return SupplierInterface
     */
    public function setPhone($phone);

    /**
     * @return string
     */
    public function getFullName();

    /**
     * @param string $fullName
     * @return SupplierInterface
     */
    public function setFullName($fullName);

    /**
     * @return string
     */
    public function getNip();

    /**
     * @param string $nip
     * @return SupplierInterface
     */
    public function setNip($nip);

    /**
     * @return string
     */
    public function getRegon();

    /**
     * @param string $regon
     * @return SupplierInterface
     */
    public function setRegon($regon);

    /**
     * @return string
     */
    public function getPostCode();

    /**
     * @param string $postCode
     * @return SupplierInterface
     */
    public function setPostCode($postCode);

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param string $city
     * @return SupplierInterface
     */
    public function setCity($city);

    /**
     * @return string
     */
    public function getStreet();

    /**
     * @param string $street
     * @return SupplierInterface
     */
    public function setStreet($street);

    /**
     * @return mixed
     */
    public function getCountry();

    /**
     * @param $country
     * @return SupplierInterface
     */
    public function setCountry($country);

    /**
     * @return int
     */
    public function getDepotId();

    /**
     * @param int $depotId
     * @return SupplierInterface
     */
    public function setDepotId($depotId);

    /**
     * @return string
     */
    public function getWmsId();

    /**
     * @param string $wmsId
     * @return SupplierInterface
     */
    public function setWmsId($wmsId);
}