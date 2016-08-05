<?php

/*  
 Copyright 2016 All Rights Reserved.
 *
 * LinkNode
 *
 * @file LinkNode.php
 * @subpackage LinkNode
 * @category Packages
 * @author Stoyan Genchev
 *
*/

class ListNode
{
    
    public $info;
    public $prev;
    public $next;
 
    function __construct($info)
    {
        
        $this->info = $info;
        $this->prev = null;
        $this->next = null;
        
    }
 
}