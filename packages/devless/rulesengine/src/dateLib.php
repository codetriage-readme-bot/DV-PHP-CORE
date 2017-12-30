<?php

namespace Devless\RulesEngine;

trait dateLib
{
    /**
     * The `getTimestamp` method returns the current timestamp. eg: `->beforeQuerying()->getTimestamp()->storeAs($timestamp)->succeedWith($timestamp) #1514656911`
     * @return $this
     */
    public function getTimestamp()
    {
        if (!$this->execOrNot) {
                return $this;
        }
        $this->results = time();
        $this->cleanOutput();
        return $this;
    }

    /**
     * Get the current year using the `getCurrentYear` method eg:`->beforeQuerying()->getCurrentYear()->storeAs($currentYear)->succeedWith($currentYear) #2017`
     *
     * @return $this
     */
    public function getCurrentYear($word = false)
    {
        if (!$this->execOrNot) {
                return $this;
        }
        $word = ($word)?'y':'Y';
        $this->results = date($word);
        $this->cleanOutput();
        return $this;
    }

    /**
     *Get the current month using the `getCurrentMonth` method eg:`->beforeQuerying()->getCurrentMonth()->storeAs($currentMonth)->succeedWith($currentMonth) #12`
     *
     * @return $this
     */
    public function getCurrentMonth($word = false)
    {
        if (!$this->execOrNot) {
                return $this;
        }
        $word = ($word)?'M':'m';
        $this->results = date($word);
        $this->cleanOutput();
        return $this;
    }

    /**
     * Get the current day using the `getCurrentDay` method eg:`->beforeQuerying()->getCurrentDay()->storeAs($currentDay)->succeedWith($currentDay) #30`
     *
     * @return $this
     */
    public function getCurrentDay($word = false)
    {
        if (!$this->execOrNot) {
                return $this;
        }
        $word = ($word)?'D':'d';
        $this->results = date($word);
        $this->cleanOutput();
        return $this;
    }

    /**
     Get the current hour using the `getCurrentHour` method eg:`->beforeQuerying()->getCurrentHour()->storeAs($currentHour)->succeedWith($currentHour) #06`
     *
     * @return $this
     */
    public function getCurrentHour()
    {
        if (!$this->execOrNot) {
                return $this;
        }
        $this->results = date('h');
        $this->cleanOutput();
        return $this;
    }

    /**
     * Get the current minute using the `getCurrentMinute` method eg:`->beforeQuerying()->getCurrentMinute()->storeAs($currentMinute)->succeedWith($currentMinute) #27`
     *
     * @return $this
     */
    public function getCurrentMinute()
    {
        if (!$this->execOrNot) {
                return $this;
        }
        $this->results = date('i');
        $this->cleanOutput();
        return $this;
    }

    /**
    * Get the current second using the `getCurrentSecond` method eg:`->beforeQuerying()->getCurrentSecond()->storeAs($currentSecond)->succeedWith($currentSecond) #02`
     *
     * @return $this
     */
    public function getCurrentSecond()
    {
        if (!$this->execOrNot) {
                return $this;
        }
        $this->results = date('s');
        $this->cleanOutput();
        return $this;
    }

    /**
     * Get the human readable date using `getFormattedDate` method eg:->beforeQuerying()->getFormattedDate()->storeAs($formattedDate)->succeedWith($formattedDate) #Saturday 30th of December 2017 06:28:35 PM
     *
     * @return $this
     */
    public function getFormattedDate()
    {
        if (!$this->execOrNot) {
                return $this;
        }
        $this->results = date('l jS \of F Y h:i:s A');
        $this->cleanOutput();
        return $this;
    }
}
