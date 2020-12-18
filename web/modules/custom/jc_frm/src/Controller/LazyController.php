<?php
namespace Drupal\Jc_frm\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\node\Entity\Node;
use Drupal\file\Entity\File;
use Drupal\Core\Link;
use Drupal\paragraphs\Entity\Paragraph;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *  
*/
use Drupal\Core\Controller\ControllerBase;


class LazyController extends ControllerBase{
    function lazy(){
        
        return ['#create_placeholder' => TRUE,
            '#lazy_builder' => [
                'jc_frm.lazy_builders:page',
                ['test'],
            ]];
    }
}

 
