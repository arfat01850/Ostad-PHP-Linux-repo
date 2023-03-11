<?php

$students = [
    [   
        'id' => 0001,
        'Name' => "Abdur Rahim",
        'Age' => 24,

    ],
    [   
        'id' => 0001,
        'Name' => "Abdur Rahim",
        'Age' => 24,

    ],
    [   
        'id' => 0001,
        'Name' => "Abdur Rahim",
        'Age' => 24,

    ],
    [   
        'id' => 0001,
        'Name' => "Abdur Rahim",
        'Age' => 24,

    ],
];
foreach($students as $student){
    echo $student['id']."-".$student['Name']."-".$student['Age'];
    echo PHP_EOL;
}