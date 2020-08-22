<?php

class Job {
    private $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description)
    {
      $this->setTitle =$title;
      $this->description = $description;
    }

  public function setTitle($t){
    if($t == '') {
           $this->title = 'N/A';
    } else {
           $this->title = $t;
    }
  }
    

   public  function getTitle() {

     return $this->title;

  }

  public function getDurationAsString(){
    $years = floor($this->months / 12);
    $extraMonths = $this->months % 12;


    return " $years years $extraMonths months";


  }

}

$job1 = new Job('PHP Devoloper','this is an awasome job!!!');

$job1->visible = true;
$job1->months = 16;

$job2 = new Job('Python Dev', 'this is an awasome job!!!' );
$job2->months = 24;

$job3 = new Job('', 'this is an awasome job!!!' );

$job3->months = 32;

$jobs = [
 
       $job1,
       $job2,
       $job3
    

    // [
    //   'title' => 
    //   'description' => 'this is an awasome job!!!',
    //   'visible' => true,
    //   'months' => 16
    //  ],
  
    // [
    //   'title' => 'Python Dev',
    //   'description' => 'best experience!!!',
    //   'visible' => false,
    //   'months' => 14  ],
  
    // [
    //   'title' => 'Devops',
    //   'description' => 'best experience!!!',
    //   'visible' => false,
    //   'months' => 5
    // ],
  
    // [
    //   'title' => 'Node Dev',
    //   'description' => 'best experience!!!',
    //   'visible' => true,
    //   'months' => 24
    // ],
  
    // [
    //   'title' => 'Frontend Dev',
    //   'description' => 'best experience!!!',
    //   'visible' => false,
    //   'months' => 3
    // ]
  
     ];
     
  
     function printJob($job) {
       
      if($job->visible == false) { 
        return;
      }
  
      echo '<li class="work-position">';
      echo '<h5>'. $job->getTitle().'</h5>';
      echo '<p>'. $job->description . '</p>';
      echo '<p>'. $job->getDurationAsString() . '</p>';
      echo '<strong>Achievements:</strong>';
      echo '<ul>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
      echo '</ul>';
      echo '</li>';
     }
  