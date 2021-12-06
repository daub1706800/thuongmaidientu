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
namespace Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights;

class PagespeedApiPagespeedResponseV5 extends \Google\Site_Kit_Dependencies\Google\Model
{
    public $analysisUTCTimestamp;
    public $captchaResult;
    public $id;
    public $kind;
    protected $lighthouseResultType = \Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights\LighthouseResultV5::class;
    protected $lighthouseResultDataType = '';
    protected $loadingExperienceType = \Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights\PagespeedApiLoadingExperienceV5::class;
    protected $loadingExperienceDataType = '';
    protected $originLoadingExperienceType = \Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights\PagespeedApiLoadingExperienceV5::class;
    protected $originLoadingExperienceDataType = '';
    protected $versionType = \Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights\PagespeedVersion::class;
    protected $versionDataType = '';
    public function setAnalysisUTCTimestamp($analysisUTCTimestamp)
    {
        $this->analysisUTCTimestamp = $analysisUTCTimestamp;
    }
    public function getAnalysisUTCTimestamp()
    {
        return $this->analysisUTCTimestamp;
    }
    public function setCaptchaResult($captchaResult)
    {
        $this->captchaResult = $captchaResult;
    }
    public function getCaptchaResult()
    {
        return $this->captchaResult;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    /**
     * @param LighthouseResultV5
     */
    public function setLighthouseResult(\Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights\LighthouseResultV5 $lighthouseResult)
    {
        $this->lighthouseResult = $lighthouseResult;
    }
    /**
     * @return LighthouseResultV5
     */
    public function getLighthouseResult()
    {
        return $this->lighthouseResult;
    }
    /**
     * @param PagespeedApiLoadingExperienceV5
     */
    public function setLoadingExperience(\Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights\PagespeedApiLoadingExperienceV5 $loadingExperience)
    {
        $this->loadingExperience = $loadingExperience;
    }
    /**
     * @return PagespeedApiLoadingExperienceV5
     */
    public function getLoadingExperience()
    {
        return $this->loadingExperience;
    }
    /**
     * @param PagespeedApiLoadingExperienceV5
     */
    public function setOriginLoadingExperience(\Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights\PagespeedApiLoadingExperienceV5 $originLoadingExperience)
    {
        $this->originLoadingExperience = $originLoadingExperience;
    }
    /**
     * @return PagespeedApiLoadingExperienceV5
     */
    public function getOriginLoadingExperience()
    {
        return $this->originLoadingExperience;
    }
    /**
     * @param PagespeedVersion
     */
    public function setVersion(\Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights\PagespeedVersion $version)
    {
        $this->version = $version;
    }
    /**
     * @return PagespeedVersion
     */
    public function getVersion()
    {
        return $this->version;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\PagespeedInsights\PagespeedApiPagespeedResponseV5::class, 'Google\\Site_Kit_Dependencies\\Google_Service_PagespeedInsights_PagespeedApiPagespeedResponseV5');