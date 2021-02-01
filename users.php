<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:user1pass' => array(
            'uid' => array('1'),
            'givenName' => ['Emp'],
            'sn' => ['Loyee'],
            'eduPersonAffiliation' => array('member', 'staff'),
            'email' => 'user1@example.com',
        ),
        'user2:user2pass' => array(
            'uid' => array('2'),
            'givenName' => ['Stu'],
            'sn' => ['Dent'],
            'eduPersonAffiliation' => array('member', 'student'),
            'email' => 'user2@example.com',
        ),
    ),

);