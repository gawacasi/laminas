<?php
namespace Album\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Helper\ViewModel;
use Laminas\View\View;

class AlbumController extends AbstractActionController
{
  public function indexAction()
  {
    return new ViewModel();
  }
  public function addAction(){
    return new ViewModel();
  }
  public function editAction(){
    return new ViewModel();
  }
  public function deleteAction(){
    return new ViewModel();
  }
}
