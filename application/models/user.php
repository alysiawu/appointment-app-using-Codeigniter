<?php 

class User extends CI_Model
{
 

  public function register($post){
    // this loads the built in CI form validation
    $this->load->library('form_validation');
    //change error delimiters
    $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
    $this->form_validation->set_rules('name', 'Name', 'trim|required');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|matches[confirm_pw]');
    $this->form_validation->set_rules('confirm_pw', 'Password Confirmation', 'trim|required');


    if($this->form_validation->run()){
      $query = 'INSERT INTO users (name, email, password, created_at, updated_at) VALUES (?,?,?, NOW(), NOW())';
      $values = array( $post['name'], $post['email'], md5($post['password']));
      // if query runs correctly
        if($this->db->query($query, $values)){
          $id = $this->db->insert_id();
          $success = array('valid', $id);

          return $success; 
        } else {
          return false;
        }
    } else {
      // echo 'fail';
      // var_dump(validation_errors());
      // die();
      return array(validation_errors());
    }
  }

  public function login($post){
    // var_dump($post);
    $check_user = "SELECT * FROM users WHERE users.email = ?";
    $user = $this->db->query($check_user, array($post['email']))->row_array();
    if($user){
      if(md5($post['password']) == $user['password']){
        return $user;
      }
      else {
        return false;
      }
    } else{
      return false;
    }
  }
  
 public function get_user_by_id($id){
    // echo 'in the model getting user';
    $query = "SELECT id, name FROM users WHERE id = ?";
    return $this->db->query($query, array($id))->row_array();
  }
public function add_app($app)
{  
  $user_id = $this->session->userdata('id');
  $this->load->library('form_validation');
  $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
  $this->form_validation->set_rules('time', 'Time', 'trim|required');
  $this->form_validation->set_rules('date', 'Date', "trim|required");
  $this->form_validation->set_rules('tasks', 'Tasks', 'trim|required');
// var_dump($app['date']);
// die();
  if($this->form_validation->run() && ($app['date'] >= date('Y-m-d'))){
    $query = "INSERT INTO apps (time, date, tasks, user_id, status, created_at, updated_at) VALUES(?, ?, ?, ?, ?, NOW(), NOW())";
    $values = array($app['time'], $app['date'], $app['tasks'], $user_id ,"pending");
      if( $this->db->query($query, $values)){
          $id = $this->db->insert_id();
          $success = array('valid', $id);
        return $success; 
      } else{
           return false;
        }    
    } else {
      //  echo 'fail';
      // var_dump(validation_errors());
      // die();
      return array(validation_errors(), "time needs to be in the future");
    }
  // var_dump($user_id);
  // var_dump($app['date']);
  // die();
  
}

public function get_current_app()
{
  $current= date('Y-m-d');
  // var_dump($current);
  // die();
  $user_id = $this->session->userdata('id');
  $get_query = "SELECT apps.id, apps.tasks, apps.status,apps.date, apps.time, user_id FROM apps left join users on users.id= apps.user_id where users.id = ? AND date = ?";
  return $this->db->query($get_query, array($user_id, $current))->result_array();
}

public function get_other_app()
{
  $current= date('Y-m-d');

 $user_id = $this->session->userdata('id');
  $get_query = "SELECT apps.id, apps.tasks, apps.status,apps.date, apps.time, user_id FROM apps left join users on users.id= apps.user_id where users.id = ? AND date != ?";
  return $this->db->query($get_query, array($user_id, $current))->result_array();
}
public function edit_app($post)
{
 // var_dump($post);
 //    die();
$edit_query = "UPDATE apps SET tasks=?, time=?, date=?, status=? WHERE apps.id=?";
return $this->db->query($edit_query, array($post['tasks'], $post['time'], $post['date'], $post['status'], $post['task_id']));

}

public function delete_app($task_id)
{

  $delete_query = "DELETE FROM apps WHERE apps.id = ?";
  return $this->db->query($delete_query, array($task_id));
}







}

?>