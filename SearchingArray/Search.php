<?php

/*
  Copyright 2016 All Rights Reserved.
 *
 * Search
 *
 * @file Search.php
 * @subpackage Search
 * @category Packages
 * @author Stoyan Genchev
 *
 */

class Search {

    private $userInput;

    public function __construct(array $userInput) {

        foreach ($userInput as $string) {
            $this->userInput[] = $string;
        }
    }

    #returns an array of the user query, the input array and the iterations needed for the search to be completed 
    public function findNumber($query) {

        $incrementor = 0;
        $start = 0;
        $end = count($this->userInput);

        while ($start <= $end) {

            $mid = ($start + $end) / 2;

            if ($mid == $query) {
                break;
            } else if ($mid < $query) {
                $end = $mid - 1;
            } else if ($mid > $query) {
                $start = $mid + 1;
            }

            $incrementor++;
        }

        $results = [];
        $results['query'] = $query;
        $results['userInput'] = count($this->userInput);
        $results['incrementor'] = $incrementor;

        return $results;
    }

}
