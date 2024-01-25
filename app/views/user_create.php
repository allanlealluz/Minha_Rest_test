<?php
 $this->layout('master',['title' => $title]); ?>
 <p>Hello user </p>
 <form method='POST' action='\user\store'>
    <input type="text" name="firstname" id="" placeholder="firstname">
    <input type="text" name="lastName" id="" placeholder='lastname'>
    <input type="text" name="email" id="" placeholder='Email'>
    <input type="text" name="password" id="" placeholder='Password'>
    
    <input type="submit" value="Create user">
 </form>