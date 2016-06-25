<?php

namespace ContactManagement\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    const PREFERRED_CONTACT_METHOD_EMAIL = 'email';
    const PREFERRED_CONTACT_METHOD_PHONE = 'phone';

    static $PREFERRED_CONTACT_METHODS = [
        self::PREFERRED_CONTACT_METHOD_EMAIL,
        self::PREFERRED_CONTACT_METHOD_PHONE,
    ];

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * @param mixed $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return mixed
     */
    public function getDateMet()
    {
        return $this->date_met;
    }

    /**
     * @param mixed $date_met
     */
    public function setDateMet($date_met)
    {
        $this->date_met = $date_met;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param mixed $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return mixed
     */
    public function getPreferredContactMethod()
    {
        return $this->preferred_contact_method;
    }

    /**
     * @param mixed $preferred_contact_method
     */
    public function setPreferredContactMethod($preferred_contact_method)
    {
        if (!in_array($preferred_contact_method, self::$PREFERRED_CONTACT_METHODS)) {
            return; //silent fail. Can throw an Exception instead, whichever way you prefer it
        }
        $this->preferred_contact_method = $preferred_contact_method;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getOtherContactInfoType()
    {
        return $this->other_contact_info_type;
    }

    /**
     * @param mixed $other_contact_info_type
     */
    public function setOtherContactInfoType($other_contact_info_type)
    {
        $this->other_contact_info_type = $other_contact_info_type;
    }

    /**
     * @return mixed
     */
    public function getOtherContactInfoText()
    {
        return $this->other_contact_info_text;
    }

    /**
     * @param mixed $other_contact_info_text
     */
    public function setOtherContactInfoText($other_contact_info_text)
    {
        $this->other_contact_info_text = $other_contact_info_text;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param DateTime $created_at
     */
    public function setCreatedAt(DateTime $created_at)
    {
        $this->created_at = $created_at;
    }

}