<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use PhpSpec\Exception\Exception;

class FollowUp extends Model
{
    const PREFERRED_FOLLOWUP_METHOD_TEXT = 'text';
    const PREFERRED_FOLLOWUP_METHOD_CALL = 'call';
    const PREFERRED_FOLLOWUP_METHOD_EMAIL = 'email';
    const PREFERRED_FOLLOWUP_METHOD_FACEBOOK = 'facebook';
    const PREFERRED_FOLLOWUP_METHOD_LINKEDIN = 'linkedin';
    const PREFERRED_FOLLOWUP_METHOD_OTHER = 'other';

    static $PREFERRED_FOLLOWUP_METHODS = [
        self::PREFERRED_FOLLOWUP_METHOD_TEXT,
        self::PREFERRED_FOLLOWUP_METHOD_CALL,
        self::PREFERRED_FOLLOWUP_METHOD_EMAIL,
        self::PREFERRED_FOLLOWUP_METHOD_FACEBOOK,
        self::PREFERRED_FOLLOWUP_METHOD_LINKEDIN,
        self::PREFERRED_FOLLOWUP_METHOD_OTHER
    ];

    /**
     * @var string
     */
    protected $table = 'followups';

    /**
     * @var array
     */
    protected $guarded = ['id'];

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getMeetingNotes()
    {
        return $this->meeting_notes;
    }

    /**
     * @param mixed $meeting_notes
     */
    public function setMeetingNotes($meeting_notes)
    {
        $this->meeting_notes = $meeting_notes;
    }

    /**
     * @return mixed
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * @param mixed $completed
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;
    }

    /**
     * @return mixed
     */
    public function getRecurringFrequency()
    {
        return $this->recurring_frequency;
    }

    /**
     * @param mixed $recurring_frequency
     */
    public function setRecurringFrequency($recurring_frequency)
    {
        $this->recurring_frequency = $recurring_frequency;
    }

    /**
     * @return mixed
     */
    public function getRecurringInterval()
    {
        return $this->recurring_interval;
    }

    /**
     * @param mixed $recurring_interval
     */
    public function setRecurringInterval($recurring_interval)
    {
        $this->recurring_interval = $recurring_interval;
    }

    /**
     * @return mixed
     */
    public function getRecurring()
    {
        return $this->recurring;
    }

    /**
     * @param mixed $recurring
     */
    public function setRecurring($recurring)
    {
        $this->recurring = $recurring;
    }

    /**
     * @return mixed
     */
    public function getNextMeeting()
    {
        return $this->next_meeting;
    }

    /**
     * @param mixed $next_meeting
     */
    public function setNextMeeting($next_meeting)
    {
        $this->next_meeting = $next_meeting;
    }

    /**
     * @return mixed
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param mixed $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return mixed
     */
    public function getFollowupMethodData()
    {
        return $this->followup_method_data;
    }

    /**
     * @param mixed $followup_method_data
     */
    public function setFollowupMethodData($followup_method_data)
    {
        $this->followup_method_data = $followup_method_data;
    }

    /**
     * @return mixed
     */
    public function getPreferredFollowupMethod()
    {
        return $this->preferred_followup_method;
    }

    /**
     * @param mixed $preferred_followup_method
     *
     * @throws \Exception
     */
    public function setPreferredFollowupMethod($preferred_followup_method)
    {
        if(!in_array($preferred_followup_method, self::$PREFERRED_FOLLOWUP_METHODS)){
            throw new \Exception('Followup method not allowed');
        }
        $this->preferred_followup_method = $preferred_followup_method;
    }

    /**
     * @return BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo('App\Model\Contact');
    }
}