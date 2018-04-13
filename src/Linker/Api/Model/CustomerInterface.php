<?php

namespace Linker\Api\Model;

/**
 * Interface CustomerInterface
 *
 */
interface CustomerInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return CustomerInterface
     */
    public function setId($id);

    /**
     * @return int
     */
    public function getExternalId();

    /**
     * @param int $externalId
     * @return CustomerInterface
     */
    public function setExternalId($externalId);

    /**
     * @return string
     */
    public function getCode();

    /**
     * @param string $code
     * @return CustomerInterface
     */
    public function setCode($code);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     * @return CustomerInterface
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getFullName();

    /**
     * @param string $fullName
     * @return CustomerInterface
     */
    public function setFullName($fullName);

    /**
     * @return string
     */
    public function getNip();

    /**
     * @param string $nip
     * @return CustomerInterface
     */
    public function setNip($nip);

    /**
     * @return string
     */
    public function getRegon();

    /**
     * @param string $regon
     * @return CustomerInterface
     */
    public function setRegon($regon);

    /**
     * @return string
     */
    public function getPostCode();

    /**
     * @param string $postCode
     * @return CustomerInterface
     */
    public function setPostCode($postCode);

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param string $city
     * @return CustomerInterface
     */
    public function setCity($city);

    /**
     * @return string
     */
    public function getStreet();

    /**
     * @param string $street
     * @return CustomerInterface
     */
    public function setStreet($street);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     * @return CustomerInterface
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getPhone();

    /**
     * @param string $phone
     * @return CustomerInterface
     */
    public function setPhone($phone);

    /**
     * @return int
     */
    public function getDepotId();

    /**
     * @param int $depotId
     * @return Customer
     */
    public function setDepotId($depotId);
}
