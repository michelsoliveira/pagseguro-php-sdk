<?php
/**
 * 2007-2016 [PagSeguro Internet Ltda.]
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @author    PagSeguro Internet Ltda.
 * @copyright 2007-2016 PagSeguro Internet Ltda.
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 *
 */

namespace PagSeguro\Domains\Requests\DirectPreApproval;

use PagSeguro\Domains\DirectPreApproval\Traits\ParserTrait;

class QueryRequest
{
    use ParserTrait;
    public $page;
    public $maxPageResults;
    public $initialDate;
    public $finalDate;
    public $status;
    public $preApprovalRequest;
    public $senderEmail;

    /**
     * QueryRequest constructor.
     *
     * @param $page
     * @param $maxPageResults
     * @param $initialDate
     * @param $finalDate
     * @param $status
     * @param $preApprovalRequest
     * @param $senderEmail
     */
    public function __construct(
        $page = 1,
        $maxPageResults = 50,
        $initialDate,
        $finalDate = null,
        $status = null,
        $preApprovalRequest = null,
        $senderEmail = null
    ) {
        $this->page = $page;
        $this->maxPageResults = $maxPageResults;
        $this->initialDate = gmdate('Y-m-d\TH:i:s.z\T\Z\D', strtotime($initialDate));
        $this->finalDate = gmdate('Y-m-d\TH:i:s.z\T\Z\D', strtotime($finalDate));
        $this->status = $status;
        $this->preApprovalRequest = $preApprovalRequest;
        $this->senderEmail = $senderEmail;
    }
}
