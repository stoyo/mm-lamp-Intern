<?php

/*
  Copyright 2016 All Rights Reserved.
 *
 * Sort
 *
 * @file Sort.php
 * @subpackage Sort
 * @category Packages
 * @author Stoyan Genchev
 *
 */

class Sort {

    private $userInput;
    private $arrayCount;

    public function __construct(array $userInput) {

        foreach ($userInput as $string) {
            $this->userInput[] = $string;
        }

        $this->arrayCount = count($userInput);
    }

    public function sort($type) {
        if ($type == "desc") {

            for ($i = 0; $i < $this->arrayCount; $i++) {
                for ($l = 0; $l < $this->arrayCount - 1; $l++) {
                    if ($this->userInput[$l] < $this->userInput[$l + 1]) {
                        $foo = $this->userInput[$l + 1];
                        $this->userInput[$l + 1] = $this->userInput[$l];
                        $this->userInput[$l] = $foo;
                    }
                }
            }

            return $this->userInput;
        } else {

            for ($i = 0; $i < $this->arrayCount; $i++) {
                for ($l = 0; $l < $this->arrayCount - 1; $l++) {
                    if ($this->userInput[$l] > $this->userInput[$l + 1]) {
                        $foo = $this->userInput[$l + 1];
                        $this->userInput[$l + 1] = $this->userInput[$l];
                        $this->userInput[$l] = $foo;
                    }
                }
            }

            return $this->userInput;
        }
    }

}
