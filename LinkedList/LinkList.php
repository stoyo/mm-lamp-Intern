<?php

/*  
 Copyright 2016 All Rights Reserved.
 *
 * LinkList
 *
 * @file LinkList.php
 * @subpackage LinkList
 * @category Packages
 * @author Stoyan Genchev
 *
*/

class LinkList {

    private $firstNode;
    private $lastNode;
    private $counter;

    function __construct() {

        $this->firstNode = null;
        $this->lastNode = null;
        $this->counter = 0;
    }
    
    #insert info and initialise a LinkNode object
    public function insertFirst($info) {

        $con = new ListNode($info);
        $con->next = $this->firstNode;

        $this->firstNode = &$con;
        $this->lastNode = &$con;

        $this->counter++;
    }
    
    #insert info and initialise a LinkNode object
    public function insert($info) {

        if ($this->firstNode == null) {
            $this->insertFirst($info);
            return;
        }

        $con = new ListNode($info);
        $con->next = null;
        $con->prev = null;

        $this->lastNode->next = $con;
        $this->lastNode = &$con;


        if ($this->firstNode->next != null) {

            $previous = $this->firstNode;
            $current = $this->firstNode->next;

            while ($current->next != null) {
                $previous = $current;
                $current = $current->next;
            }

            $this->lastNode->prev = $previous->info;
        }

        $this->counter++;
    }

    #find a specific LinkNode object info by passing as an argument its index
    public function findNodeByIndex($index) {

        $current = $this->firstNode;

        for ($i = 0; $this->counter; $i++) {

            if ($i == $index) {
                return $current->info;
            }

            if ($current->next == null) {
                return;
            }

            $current = $current->next;
        }
    }

    #find a specific LinkNode object index by passing as an argument its info
    public function findNodeByInfo($info) {

        $current = $this->firstNode;

        for ($i = 0; $this->counter; $i++) {

            if ($current->info == $info) {
                return $i;
            }

            if ($current->next == null) {
                return;
            }

            $current = $current->next;
        }
    }
    
    #find a specific LinkNode object by passing as an argument either its index or value
    public function displayChild($param) {
        if (gettype($param) == "integer") {

            $current = $this->firstNode;

            for ($i = 0; $this->counter; $i++) {

                if ($i == $param) {
                    return $current;
                }

                if ($current->next == null) {
                    return;
                }

                $current = $current->next;
            }
        } else if (gettype($param) == "string") {

            $current = $this->firstNode;

            for ($i = 0; $this->counter; $i++) {

                if ($current->info == $param) {
                    return $current;
                }

                if ($current->next == null) {
                    return;
                }

                $current = $current->next;
            }
        } else {
            return;
        }
    }

    #delete the first LinkNode object
    public function deleteFirstNode() {

        $this->firstNode = $this->firstNode->next;
        $this->counter--;
    }

    #delete the last LinkNode object
    public function deleteLastNode() {

        if ($this->firstNode->next == null) {

            $this->firstNode = null;
            $this->counter--;
        } else {

            $previous = $this->firstNode;
            $current = $this->firstNode->next;

            while ($current->next != null) {
                $previous = $current;
                $current = $current->next;
            }

            $previous->next = null;
            $this->lastNode = $previous;
            $this->counter--;
        }
    }

    #delete a specific LinkNode object by passing as an argument its info
    public function deleteNodeByInfo($info) {

        $current = $this->firstNode;
        $previous = $this->firstNode;

        while ($current->info != $info) {

            if ($current->next == null) {
                return;
            } else {
                $previous = $current;
                $current = $current->next;
            }
        }

        if ($current == $this->firstNode) {

            if ($this->counter == 1) {
                $this->lastNode = $this->firstNode;
            }

            $this->firstNode = $this->firstNode->next;
        } else {

            if ($this->lastNode == $current) {
                $this->lastNode = $previous;
            }

            $previous->next = $current->next;
            $previous->next->prev = $current->prev;
        }

        $this->counter--;
    }

    #delete a specific LinkNode object by passing as an argument its index
    public function deleteNodeByIndex($index) {

        $current = $this->firstNode;
        $previous = $this->firstNode;
        $start = 0;

        while ($start != $index) {

            if ($current->next == null) {
                return;
            } else {
                $previous = $current;
                $current = $current->next;
                $start++;
            }
        }

        if ($current == $this->firstNode) {

            if ($this->counter == 1) {
                $this->lastNode = $this->firstNode;
            }

            $this->firstNode = $this->firstNode->next;
        } else {

            if ($this->lastNode == $current) {
                $this->lastNode = $previous;
            }

            $previous->next = $current->next;
            $previous->next->prev = $current->prev;
        }

        $this->counter--;
    }

    #returns the LinkList object with all the data
    public function readList() {
        return $this;
    }

}
