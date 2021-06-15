<?php

/**
 * User management system
 */

class User extends Database{


/**
 * user add to database
 */

public function userset( $name, $email, $cell, $username)
{
    
 parent::create("INSERT INTO users (name,email, cell, username) VALUES ('$name','$email','$cell','$username') ");
    
}
/**
 * all user show
 */

public function allusershow()
{
 return  parent::all('users');

}

/**
 * delete user 
 */
public function user_delete($id)
{
    parent::delete('users',$id);

    header("location:index.php");
}

/**
 * single Show user 
 */

public function singleshow($id)
{
 return parent::show('users',$id);

}
/**
 * 
 */
public function edit_data($id)
{
   return parent::find('users',$id);
}

/**
 * update data
 */


}

?>
