<?php
helper('form');
echo form_open();

$data1=['name' =>'text1',
    'id' =>'text1',
    'value' => $var1,
    'maxlength' =>'100',
    'size' =>'30',
];

echo form_label('Text1','text1');
echo form_input($data1);

echo form_submit('submit','->');

$data2=['name' =>'text2',
    'id' =>'text2',
    'value' =>$var2,
    'maxlength' =>'100',
    'size' =>'30',
    ];
echo form_label('Text2','text2');
echo form_input($data2);
echo form_close();