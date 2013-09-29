<?php
/**
 * dmFilesystem provides basic utility to manipulate the file system.
 *
 * @package    diem
 * @author     Robin Parker <robin.parker@theolymp.net>
 */
class dmFilesystem extends sfFilesystem{
  /**
   * Calculates the relative path from one to another directory.
   *
   * If the paths share no common path the absolute target dir is returned.
   *
   * @param string $from The directory from which to calculate the relative path
   * @param string $to   The target directory
   *
   * @return string
   */ 
  public function calculateRelativeDir($from, $to){
    return parent::calculateRelativeDir($from, $to);
  }

  /**
   * @param string A filesystem path
   *
   * @return string
   */
  public function canonicalizePath($path){
    return parent::canonicalizePath($path);
  }
  
  /**
   * @param sfFilesystem a symfony-filesystem
   *
   * @return dmFilesystem
   */
  public static function fromSfFilesystem(sfFilesystem $sfFilesystem){
    return new dmFilesystem($sfFilesystem->dispatcher, $sfFilesystem->formatter);
  }
}