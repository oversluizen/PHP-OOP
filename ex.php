<?php

use Acme\Users\Person;
use Acme\Business;
use Acme\Staff;

$jaco = new Person('Jaco Oversluizen');

$staff = new Staff([$jaco]);

$baken = new Business($staff);

$baken->hire(new Person('Jane Doe'));

var_dump($baken->getStaffMembers());