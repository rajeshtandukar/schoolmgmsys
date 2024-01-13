<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Contentwarehouse;

class ClassifierPornClassifierData extends \Google\Collection
{
  protected $collection_key = 'classification';
  protected $classificationType = ClassifierPornClassifierDataClassification::class;
  protected $classificationDataType = 'array';
  /**
   * @var bool
   */
  public $imageBasedDetectionDone;
  /**
   * @var string
   */
  public $timestamp;

  /**
   * @param ClassifierPornClassifierDataClassification[]
   */
  public function setClassification($classification)
  {
    $this->classification = $classification;
  }
  /**
   * @return ClassifierPornClassifierDataClassification[]
   */
  public function getClassification()
  {
    return $this->classification;
  }
  /**
   * @param bool
   */
  public function setImageBasedDetectionDone($imageBasedDetectionDone)
  {
    $this->imageBasedDetectionDone = $imageBasedDetectionDone;
  }
  /**
   * @return bool
   */
  public function getImageBasedDetectionDone()
  {
    return $this->imageBasedDetectionDone;
  }
  /**
   * @param string
   */
  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }
  /**
   * @return string
   */
  public function getTimestamp()
  {
    return $this->timestamp;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClassifierPornClassifierData::class, 'Google_Service_Contentwarehouse_ClassifierPornClassifierData');
