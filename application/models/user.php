<?php

class User extends CI_Model
{

      public function get_all_questions()
      {
            $get_query = "SELECT * from questionaire ";
            return $this->db->query($get_query)->result_array();
      }

      public function add_answer($answer){

            $add_query ="INSERT INTO surveyresults (gender, relationship, country, sport, language, created_at, updated_at) VALUES (?, ?, ?, ?, ?,NOW(), NOW())";
            $this->db->query($add_query, array($answer['gender'], $answer['relationship'], $answer['country'], $answer['sport'], $answer['language']));

      }

      public function female_relationship()
      {
            $female_relationship = "Select count(relationship) as count_of_relationship, relationship from surveyresults where gender = 'Female' group by (relationship)
            order by count_of_relationship desc";
            return $this->db->query($female_relationship)->result_array();

      }
      public function male_relationship()
      {
            $male_relationship = "Select count(relationship) as count_of_relationship, relationship from surveyresults where gender = 'Male' group by (relationship)
            order by count_of_relationship desc";
            return $this->db->query($male_relationship)->result_array();

      }
      public function female_country()
      {
            $female_country = "SELECT count(country) as count_of_country, country from surveyresults where gender = 'Female'  group by (country)
            order by count_of_country desc";
            return $this->db->query($female_country)->result_array();
      }

      public function male_country()
      {
          $male_country = "SELECT count(country) as count_of_country, country from surveyresults where gender = 'Male'  group by (country)
          order by count_of_country desc";
          return $this->db->query($male_country)->result_array();
      }

      public function female_sport()
      {
          $female_sport= "Select count(sport) as count_of_sport, sport, gender from surveyresults where gender = 'Female'  group by (sport)
          order by count_of_sport desc";
          return $this->db->query($female_sport)->result_array();
      }
      public function male_sport()
      {
          $male_sport= "Select count(sport) as count_of_sport, sport, gender from surveyresults where gender = 'Male'  group by (sport)
          order by count_of_sport desc";
          return $this->db->query($male_sport)->result_array();
      }

      public function female_language()
      {
          $female_language = "Select count(language) as count_of_language, language, gender from surveyresults where gender = 'Female'  group by (language)
          order by count_of_language desc";
          return $this->db->query($female_language)->result_array();
      }

      public function male_language()
      {
          $male_language = "Select count(language) as count_of_language, language, gender from surveyresults where gender = 'Male'  group by (language)
          order by count_of_language desc";
          return $this->db->query($male_language)->result_array();
      }

}

?>