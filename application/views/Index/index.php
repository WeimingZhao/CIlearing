<?php
$attributes = array('class' => 'login', 'id' => 'login');
$data['username'] = array(
    'name'      => 'username',
    'id'        => 'username',
    'value'     => '用户名/手机号',
);
$data['password'] = array('name' => 'password', 'id' => 'password', 'value' => '');
$data['submit'] = array('name' => 'submit', 'id' => 'submit', 'value' => '提交');
$data['endtag'] = '</div>';
?>

<div>
<div><?php echo form_open('login/checkuser', $attributes);  ?></div>
<div><span><?php echo  form_label($data['username']['name'],$data['username']['value']); ?></span><span><?php echo form_input($data['username']);  ?></span></div>
<div><span><?php echo  form_label($data['password']['name'],$data['password']['value']);  ?></span><span><?php echo form_password($data['password']);  ?></span></div>
<div><?php echo form_submit($data['submit']);  ?></div>

<?php
echo form_close($data['endtag']);
?>