<?php
/**
 *  Copyright (c) 2013-2019 EVO Payments International - All Rights Reserved.
 *
 * This software and documentation is subject to and made
 * available only pursuant to the terms of an executed license
 * agreement, and may be used only in accordance with the terms
 * of said agreement. This software may not, in whole or in part,
 * be copied, photocopied, reproduced, translated, or reduced to
 * any electronic medium or machine-readable form without
 * prior consent, in writing, from EVO Payments International
 *
 * Use, duplication or disclosure by the U.S. Government is subject
 * to restrictions set forth in an executed license agreement
 * and in subparagraph (c)(1) of the Commercial Computer
 * Software-Restricted Rights Clause at FAR 52.227-19; subparagraph
 * (c)(1)(ii) of the Rights in Technical Data and Computer Software
 * clause at DFARS 252.227-7013, subparagraph (d) of the Commercial
 * Computer Software--Licensing clause at NASA FAR supplement
 * 16-52.227-86; or their equivalent.
 *
 * Information in this software is subject to change without notice
 * and does not represent a commitment on the part of EVO Payments International.
 *
 * Sample Code is for reference Only and is intended to be used for educational purposes. It's the responsibility of
 * the software company to properly integrate into thier solution code that best meets thier production needs.
 */
namespace Evosnap\Cws\Model;

class BaseObject implements \JsonSerializable {

    public function __construct($type = null){
        if(!empty($type)){
            $this->{'$type'} = $type;
        }
    }

    public function jsonSerialize() {
        $array = (array)$this;
   		if(array_key_exists('$type', $array)){
            $oldArray = $array;
            $array = array('$type' => $oldArray['$type']);
            unset($oldArray['$type']);
            $array = array_merge($array, $oldArray);
        }
       		if(array_key_exists('$type', $array)){
                $oldArray = $array;
                $array = array('$type' => $oldArray['$type']);
                unset($oldArray['$type']);
                $array = array_merge($array, $oldArray);
            }

            return array_filter($array);
        }
    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\MerchantInfo')){

    class MerchantInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $FriendlyName;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofkeyvalueofstringstring
    	*/
    	public $MerchantMetaData;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\MerchantQueryParameters')){

    class MerchantQueryParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SalesChannel;

    	/**
    	* @var string
    	*/
    	public $MerchantName;

    	/**
    	* @var string
    	*/
    	public $Region;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\UserInfo')){

    class UserInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Role;

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $Username;

    	/**
    	* @var string
    	*/
    	public $FirstName;

    	/**
    	* @var string
    	*/
    	public $Region;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var string
    	*/
    	public $LastName;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\UserQueryParameters')){

    class UserQueryParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SalesChannel;

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var string
    	*/
    	public $Merchant;

    	/**
    	* @var string
    	*/
    	public $Username;

    	/**
    	* @var string
    	*/
    	public $FirstName;

    	/**
    	* @var string
    	*/
    	public $Region;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $Roles;

    	/**
    	* @var string
    	*/
    	public $LastName;

    	/**
    	* @var LockState
    	*/
    	public $LockState;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\PaymentApplicationQueryParameters')){

    class PaymentApplicationQueryParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SalesChannel;

    	/**
    	* @var string
    	*/
    	public $Region;

    }
}

namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

if(!class_exists('\Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\SecurityAnswer')){

    class SecurityAnswer extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Answer;

    	/**
    	* @var string
    	*/
    	public $QuestionCode;

    }
}

namespace Datacontract\I2004\I07\System;

if(!class_exists('\Datacontract\I2004\I07\System\Attribute')){

    class Attribute extends \Evosnap\Cws\Model\BaseObject {

    }
}

namespace Datacontract\I2004\I07\System;

if(!class_exists('\Datacontract\I2004\I07\System\MarshalByRefObject')){

    class MarshalByRefObject extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \W3\I2001\Xmlschema\anytype
    	*/
    	public $__identity;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Businessintelligence;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Businessintelligence\QueryCustomerTransactionsParameters')){

    class QueryCustomerTransactionsParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var string
    	*/
    	public $InvoiceReferenceId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $TransactionDateRange;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\PagingParameters')){

    class PagingParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageSize;

    	/**
    	* @var int
    	*/
    	public $Page;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\DateRange')){

    class DateRange extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $StartDateTime;

    	/**
    	* @var dateTime
    	*/
    	public $EndDateTime;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\CardTypeSummary')){

    class CardTypeSummary extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\AUUploadRequest')){

    class AUUploadRequest extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Datacontract\I2004\I07\System\Io\stream
    	*/
    	public $Contents;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $SessionToken;

    	/**
    	* @var TypeFileFormat
    	*/
    	public $FileFormat;

    	/**
    	* @var string
    	*/
    	public $AUServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\MerchantSummary')){

    class MerchantSummary extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\AccountDataResponseFile')){

    class AccountDataResponseFile extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\summary
    	*/
    	public $Summary;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\arrayofupdatedaccountdata
    	*/
    	public $UpdatedData;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\DownloadResponse')){

    class DownloadResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Datacontract\I2004\I07\System\Io\stream
    	*/
    	public $Contents;

    	/**
    	* @var dateTime
    	*/
    	public $ExpectedProcessingDate;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\UpdatedAccountData')){

    class UpdatedAccountData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $NewAccountNumber;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardBrandResponseFile;

    	/**
    	* @var string
    	*/
    	public $OldAccountExpiration;

    	/**
    	* @var string
    	*/
    	public $NewAccountExpiration;

    	/**
    	* @var string
    	*/
    	public $MerchantReferenceId;

    	/**
    	* @var boolean
    	*/
    	public $PreviouslySentFlag;

    	/**
    	* @var string
    	*/
    	public $ErrorMessage;

    	/**
    	* @var TypeReasonCode
    	*/
    	public $ReasonCode;

    	/**
    	* @var string
    	*/
    	public $OldAccountNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\AUDownloadRequest')){

    class AUDownloadRequest extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $RequestId;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $SessionToken;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\AccountDataRequestFile')){

    class AccountDataRequestFile extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\summary
    	*/
    	public $Summary;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\arrayofaccountdata
    	*/
    	public $Data;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\UpdatedTokenData')){

    class UpdatedTokenData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeCardType
    	*/
    	public $CardBrandResponseFile;

    	/**
    	* @var string
    	*/
    	public $NewMaskedAccountNumber;

    	/**
    	* @var string
    	*/
    	public $OldMaskedAccountNumber;

    	/**
    	* @var string
    	*/
    	public $OldAccountExpiration;

    	/**
    	* @var string
    	*/
    	public $NewAccountExpiration;

    	/**
    	* @var string
    	*/
    	public $MerchantReferenceId;

    	/**
    	* @var boolean
    	*/
    	public $PreviouslySentFlag;

    	/**
    	* @var string
    	*/
    	public $ErrorMessage;

    	/**
    	* @var string
    	*/
    	public $TokenId;

    	/**
    	* @var TypeReasonCode
    	*/
    	public $ReasonCode;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\UploadResponse')){

    class UploadResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $RequestId;

    	/**
    	* @var dateTime
    	*/
    	public $ExpectedProcessingDate;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\TokenDataResponseFile')){

    class TokenDataResponseFile extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\summary
    	*/
    	public $Summary;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\arrayofupdatedtokendata
    	*/
    	public $UpdatedData;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\AccountData')){

    class AccountData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $AccountExpiration;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var string
    	*/
    	public $MerchantReferenceId;

    	/**
    	* @var string
    	*/
    	public $AccountNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\AUBatch')){

    class AUBatch extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $RequestId;

    	/**
    	* @var TypeBatchState
    	*/
    	public $BatchState;

    	/**
    	* @var TypeBatchType
    	*/
    	public $BatchType;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\Summary')){

    class Summary extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\arrayofcardtypesummary
    	*/
    	public $CardTypeSummaries;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\arrayofmerchantsummary
    	*/
    	public $MerchantSummaries;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\TokenData')){

    class TokenData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var string
    	*/
    	public $MerchantReferenceId;

    	/**
    	* @var string
    	*/
    	public $TokenId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\AUSubmittedRequest')){

    class AUSubmittedRequest extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeRequestState
    	*/
    	public $RequestState;

    	/**
    	* @var string
    	*/
    	public $RequestId;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $CustomerId;

    	/**
    	* @var TypeFileFormat
    	*/
    	public $FileFormat;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    	/**
    	* @var string
    	*/
    	public $Servicekey;

    	/**
    	* @var dateTime
    	*/
    	public $ExpectedProcessingDate;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\TokenDataRequestFile')){

    class TokenDataRequestFile extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\summary
    	*/
    	public $Summary;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\arrayoftokendata
    	*/
    	public $Data;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\TransactionSummaryResponse')){

    class TransactionSummaryResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayoftransactionsummary
    	*/
    	public $TransactionSummaries;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\MerchantDetail')){

    class MerchantDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\merchant
    	*/
    	public $Merchant;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\UniqueConstraint')){

    class UniqueConstraint extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $MerchantReferenceId;

    	/**
    	* @var boolean
    	*/
    	public $TelephoneNumber;

    	/**
    	* @var boolean
    	*/
    	public $EmailAddress;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerSummary')){

    class CustomerSummary extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $LastProcessed;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var TypeISOLanguageCodeA3
    	*/
    	public $ReceiptLanguage;

    	/**
    	* @var string
    	*/
    	public $TelephoneNumber;

    	/**
    	* @var string
    	*/
    	public $MerchantCustomerId;

    	/**
    	* @var string
    	*/
    	public $EmailAddress;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\nameinfo
    	*/
    	public $Name;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\Merchant')){

    class Merchant extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\addressinfo
    	*/
    	public $Address;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\internationaladdressinfo
    	*/
    	public $InternationalAddress;

    	/**
    	* @var string
    	*/
    	public $TelephoneNumber;

    	/**
    	* @var string
    	*/
    	public $Name;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\InternationalAddressInfo')){

    class InternationalAddressInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $HouseNumber;

    	/**
    	* @var string
    	*/
    	public $Street2;

    	/**
    	* @var string
    	*/
    	public $Street1;

    	/**
    	* @var string
    	*/
    	public $StateProvince;

    	/**
    	* @var string
    	*/
    	public $POBoxNumber;

    	/**
    	* @var string
    	*/
    	public $PostalCode;

    	/**
    	* @var string
    	*/
    	public $City;

    	/**
    	* @var string
    	*/
    	public $CountryCode;

    	/**
    	* @var TypeAddressType
    	*/
    	public $AddressType;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\TransactionData')){

    class TransactionData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var guid
    	*/
    	public $InvoiceReferencIed;

    	/**
    	* @var string
    	*/
    	public $TransactionType;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $PromotionCodes;

    	/**
    	* @var decimal
    	*/
    	public $DiscountedAmount;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $TransactionClass;

    	/**
    	* @var string
    	*/
    	public $TxnCode;

    	/**
    	* @var string
    	*/
    	public $SIC;

    	/**
    	* @var dateTime
    	*/
    	public $TransactionDate;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\TelephoneInfo')){

    class TelephoneInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeTelephoneType
    	*/
    	public $TelephoneType;

    	/**
    	* @var string
    	*/
    	public $TelephoneNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\QueryCustomersParameters')){

    class QueryCustomersParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $Memberships;

    	/**
    	* @var TypeMaritalStatus
    	*/
    	public $MaritalStatus;

    	/**
    	* @var boolean
    	*/
    	public $LimitToCustomersWithoutTransactions;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CreatedDateRange;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $PostalCodes;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $BirthDateRange;

    	/**
    	* @var TypeGender
    	*/
    	public $Gender;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
    	*/
    	public $CustomerId;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $CustomerReferenceIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayoftypeinteresttype
    	*/
    	public $Interests;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerSummaryResponse')){

    class CustomerSummaryResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofcustomersummary
    	*/
    	public $CustomerSummaries;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerDetailResponse')){

    class CustomerDetailResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofcustomerdetail
    	*/
    	public $CustomerDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerProfile')){

    class CustomerProfile extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $Memberships;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\arrayofpaymentdatainfo
    	*/
    	public $PaymentData;

    	/**
    	* @var boolean
    	*/
    	public $EmailNotifications;

    	/**
    	* @var boolean
    	*/
    	public $IsActive;

    	/**
    	* @var TypeGender
    	*/
    	public $Gender;

    	/**
    	* @var dateTime
    	*/
    	public $DateMembershipsVerified;

    	/**
    	* @var string
    	*/
    	public $TelephoneNumber;

    	/**
    	* @var dateTime
    	*/
    	public $Birthdate;

    	/**
    	* @var string
    	*/
    	public $EmailAddress;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayoftypeinteresttype
    	*/
    	public $Interests;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\nameinfo
    	*/
    	public $Name;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofaddressinfo
    	*/
    	public $Addresses;

    	/**
    	* @var string
    	*/
    	public $OAuthToken;

    	/**
    	* @var TypeMaritalStatus
    	*/
    	public $MaritalStatus;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofinternationaladdressinfo
    	*/
    	public $InternationalAddresses;

    	/**
    	* @var boolean
    	*/
    	public $SMSNotifcations;

    	/**
    	* @var string
    	*/
    	public $MerchantCustomerId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerId')){

    class CustomerId extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var string
    	*/
    	public $TelephoneNumber;

    	/**
    	* @var string
    	*/
    	public $MerchantCustomerId;

    	/**
    	* @var string
    	*/
    	public $EmailAddress;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerDetail')){

    class CustomerDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $LastProcessed;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var TypeConsent
    	*/
    	public $CustomerConsent;

    	/**
    	* @var TypeISOLanguageCodeA3
    	*/
    	public $ReceiptLanguage;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerprofile
    	*/
    	public $CustomerProfile;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\AddressInfo')){

    class AddressInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Street2;

    	/**
    	* @var string
    	*/
    	public $HouseNumber;

    	/**
    	* @var string
    	*/
    	public $Street1;

    	/**
    	* @var string
    	*/
    	public $StateProvince;

    	/**
    	* @var string
    	*/
    	public $PostalCode;

    	/**
    	* @var string
    	*/
    	public $City;

    	/**
    	* @var string
    	*/
    	public $CountryCode;

    	/**
    	* @var TypeAddressType
    	*/
    	public $AddressType;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\NameInfo')){

    class NameInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Last;

    	/**
    	* @var string
    	*/
    	public $Suffix;

    	/**
    	* @var string
    	*/
    	public $Title;

    	/**
    	* @var string
    	*/
    	public $First;

    	/**
    	* @var string
    	*/
    	public $Middle;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\CustomerInfo')){

    class CustomerInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Company;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\addressinfo
    	*/
    	public $Address;

    	/**
    	* @var string
    	*/
    	public $FirstName;

    	/**
    	* @var string
    	*/
    	public $LastName;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\TransactionSummary')){

    class TransactionSummary extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $NetAmount;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
    	*/
    	public $CustomerId;

    	/**
    	* @var int
    	*/
    	public $TransactionCount;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\ProcessingResponse')){

    class ProcessingResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\response
    	*/
    	public $Response;

    	/**
    	* @var string
    	*/
    	public $InvoiceReferenceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\InvoiceResponse')){

    class InvoiceResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\arrayofinvoicedetail
    	*/
    	public $Invoices;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalFound;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Order')){

    class Order extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ShipmentId;

    	/**
    	* @var string
    	*/
    	public $ShipMethod;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\arrayofitem
    	*/
    	public $OrderItems;

    	/**
    	* @var string
    	*/
    	public $CustomerCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerinfo
    	*/
    	public $BillingData;

    	/**
    	* @var string
    	*/
    	public $PromotionCode;

    	/**
    	* @var boolean
    	*/
    	public $Enable3D;

    	/**
    	* @var string
    	*/
    	public $ShipCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\tax
    	*/
    	public $Tax;

    	/**
    	* @var string
    	*/
    	public $TaxExemptNumber;

    	/**
    	* @var decimal
    	*/
    	public $DutyAmount;

    	/**
    	* @var decimal
    	*/
    	public $SubTotal;

    	/**
    	* @var TypeISOCurrencyCodeA3
    	*/
    	public $CurrencyCode;

    	/**
    	* @var IsTaxExempt
    	*/
    	public $TaxExempt;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\arrayofitemizedtax
    	*/
    	public $ItemizedTaxes;

    	/**
    	* @var decimal
    	*/
    	public $ShippingTotal;

    	/**
    	* @var decimal
    	*/
    	public $DiscountTotal;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerinfo
    	*/
    	public $ShippingData;

    	/**
    	* @var dateTime
    	*/
    	public $OrderTimeStamp;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Invoice')){

    class Invoice extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\order
    	*/
    	public $Order;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\paymentdatainfo
    	*/
    	public $PaymentData;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $MerchantInvoiceId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\automationinfo
    	*/
    	public $AutomationInfo;

    	/**
    	* @var string
    	*/
    	public $EmployeeId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Tax')){

    class Tax extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $Rate;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\QueryInvoiceParameters')){

    class QueryInvoiceParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CreatedDateRange;

    	/**
    	* @var string
    	*/
    	public $InvoiceReferenceId;

    	/**
    	* @var string
    	*/
    	public $MerchantInvoiceId;

    	/**
    	* @var InvoiceState
    	*/
    	public $InvoiceState;

    	/**
    	* @var string
    	*/
    	public $SubscriptionReferenceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\QuerySubscriptionParameters')){

    class QuerySubscriptionParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var SubscriptionState
    	*/
    	public $SubscriptionState;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CreatedDateRange;

    	/**
    	* @var string
    	*/
    	public $MerchantSubscriptionId;

    	/**
    	* @var string
    	*/
    	public $SubscriptionReferenceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\PaymentDataInfo')){

    class PaymentDataInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $PaymentRoutingNumber;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountExpiration;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountNumber;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountName;

    	/**
    	* @var TypePaymentType
    	*/
    	public $PaymentType;

    	/**
    	* @var TypeBankAccountType
    	*/
    	public $BankAccountType;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\ItemizedTax')){

    class ItemizedTax extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeTaxType
    	*/
    	public $Type;

    	/**
    	* @var decimal
    	*/
    	public $Rate;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Item')){

    class Item extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $UnitPrice;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var TypeUnitOfMeasure
    	*/
    	public $UnitOfMeasure;

    	/**
    	* @var string
    	*/
    	public $ProductCode;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $CommodityCode;

    	/**
    	* @var decimal
    	*/
    	public $Quantity;

    	/**
    	* @var boolean
    	*/
    	public $TaxIncluded;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\tax
    	*/
    	public $Tax;

    	/**
    	* @var decimal
    	*/
    	public $DiscountAmount;

    	/**
    	* @var boolean
    	*/
    	public $DiscountIncluded;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\TransactionInfo')){

    class TransactionInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var Status
    	*/
    	public $Status;

    	/**
    	* @var string
    	*/
    	public $TransactionType;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var dateTime
    	*/
    	public $TransactionDate;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    	/**
    	* @var TypeTenderType
    	*/
    	public $TenderType;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\ProcessingInformation')){

    class ProcessingInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\paymentdatainfo
    	*/
    	public $PaymentDataInfo;

    	/**
    	* @var TypeTransactionType
    	*/
    	public $TransactionType;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\automationinfo
    	*/
    	public $AutomationInfo;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\AutomationInfo')){

    class AutomationInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $ProcessPayment;

    	/**
    	* @var boolean
    	*/
    	public $EmailInvoice;

    	/**
    	* @var boolean
    	*/
    	public $NoAutomation;

    	/**
    	* @var boolean
    	*/
    	public $CreateInvoice;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\SubscriptionResponse')){

    class SubscriptionResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\arrayofsubscriptiondetail
    	*/
    	public $Subscriptions;

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalFound;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Subscription')){

    class Subscription extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $TotalTrialInvoices;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\order
    	*/
    	public $Order;

    	/**
    	* @var int
    	*/
    	public $IntervalLength;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\paymentdatainfo
    	*/
    	public $PaymentData;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var boolean
    	*/
    	public $AutoRenew;

    	/**
    	* @var decimal
    	*/
    	public $TrialAmount;

    	/**
    	* @var string
    	*/
    	public $MerchantSubscriptionId;

    	/**
    	* @var dateTime
    	*/
    	public $EndDate;

    	/**
    	* @var dateTime
    	*/
    	public $StartDate;

    	/**
    	* @var TypeIntervalUnit
    	*/
    	public $IntervalUnit;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var int
    	*/
    	public $IntervalCount;

    	/**
    	* @var string
    	*/
    	public $EmployeeId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\TokenizeAndAuthorizeWalletPurchaseRequest')){

    class TokenizeAndAuthorizeWalletPurchaseRequest extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var guid
    	*/
    	public $UserGuid;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var boolean
    	*/
    	public $IsSubscription;

    	/**
    	* @var dateTime
    	*/
    	public $OrderTimeStamp;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\carddata
    	*/
    	public $CardData;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\TokenizeCardDataRequest')){

    class TokenizeCardDataRequest extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var guid
    	*/
    	public $UserGuid;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\carddata
    	*/
    	public $CardData;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\Wallet')){

    class Wallet extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var guid
    	*/
    	public $UserGuid;

    	/**
    	* @var boolean
    	*/
    	public $IsLocked;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\arrayofwalletaccount
    	*/
    	public $Accounts;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\WalletAccount')){

    class WalletAccount extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $LastFourMaskedPan;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var string
    	*/
    	public $FirstSixMaskedPan;

    	/**
    	* @var string
    	*/
    	public $Expiration;

    	/**
    	* @var string
    	*/
    	public $TokenId;

    	/**
    	* @var TypeTenderType
    	*/
    	public $TenderType;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\CustomerToken')){

    class CustomerToken extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $PaymentRoutingNumber;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountNumber;

    	/**
    	* @var string
    	*/
    	public $Expiration;

    	/**
    	* @var TypePaymentType
    	*/
    	public $PaymentType;

    	/**
    	* @var TypeBankAccountType
    	*/
    	public $BankAccountType;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\AuthorizeWalletPurchaseRequest')){

    class AuthorizeWalletPurchaseRequest extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var guid
    	*/
    	public $UserGuid;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var boolean
    	*/
    	public $IsSubscription;

    	/**
    	* @var guid
    	*/
    	public $TokenId;

    	/**
    	* @var dateTime
    	*/
    	public $OrderTimeStamp;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\CardData')){

    class CardData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Expire;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var string
    	*/
    	public $PAN;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\BillPayServiceData')){

    class BillPayServiceData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addressinfo
    	*/
    	public $CompanyAddress;

    	/**
    	* @var string
    	*/
    	public $CompanyName;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Geolocation')){

    class Geolocation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var double
    	*/
    	public $Latitude;

    	/**
    	* @var double
    	*/
    	public $Longitude;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Unmanaged')){

    class Unmanaged extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $Any;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Activation')){

    class Activation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Capture')){

    class Capture extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Addendum')){

    class Addendum extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\unmanaged
    	*/
    	public $Unmanaged;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\InternationalAddressInfo')){

    class InternationalAddressInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $HouseNumber;

    	/**
    	* @var string
    	*/
    	public $Street2;

    	/**
    	* @var string
    	*/
    	public $Street1;

    	/**
    	* @var string
    	*/
    	public $StateProvince;

    	/**
    	* @var string
    	*/
    	public $POBoxNumber;

    	/**
    	* @var string
    	*/
    	public $PostalCode;

    	/**
    	* @var string
    	*/
    	public $City;

    	/**
    	* @var string
    	*/
    	public $CountryCode;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\SummaryTotals')){

    class SummaryTotals extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $NetAmount;

    	/**
    	* @var int
    	*/
    	public $Count;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\TransactionCustomerData')){

    class TransactionCustomerData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\customerinfo
    	*/
    	public $BillingData;

    	/**
    	* @var string
    	*/
    	public $CustomerId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\customerinfo
    	*/
    	public $ShippingData;

    	/**
    	* @var string
    	*/
    	public $CustomerTaxId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\TransactionReportingData')){

    class TransactionReportingData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Comment;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var string
    	*/
    	public $Reference;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\SummaryData')){

    class SummaryData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $CreditReturnTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $EbtReturnTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $NetTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $CashBackTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $DebitReturnTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $EbtTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $DebitTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $CreditTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
    	*/
    	public $VoidTotals;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\ServiceTransactionDateTime')){

    class ServiceTransactionDateTime extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TimeZone;

    	/**
    	* @var string
    	*/
    	public $Time;

    	/**
    	* @var string
    	*/
    	public $Date;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\DriversLicense')){

    class DriversLicense extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Number;

    	/**
    	* @var string
    	*/
    	public $State;

    	/**
    	* @var string
    	*/
    	public $Track2;

    	/**
    	* @var string
    	*/
    	public $Track1;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\TransactionData')){

    class TransactionData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeISOCurrencyCodeA3
    	*/
    	public $CurrencyCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\geolocation
    	*/
    	public $Geolocation;

    	/**
    	* @var string
    	*/
    	public $CampaignId;

    	/**
    	* @var string
    	*/
    	public $Reference;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var dateTime
    	*/
    	public $TransactionDateTime;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\discountdata
    	*/
    	public $DiscountData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\AlternativeMerchantData')){

    class AlternativeMerchantData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerServiceInternet;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addressinfo
    	*/
    	public $Address;

    	/**
    	* @var string
    	*/
    	public $MerchantId;

    	/**
    	* @var string
    	*/
    	public $SIC;

    	/**
    	* @var string
    	*/
    	public $CustomerServicePhone;

    	/**
    	* @var string
    	*/
    	public $Name;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\CwsReturn')){

    class CwsReturn extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var dateTime
    	*/
    	public $TransactionDateTime;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Wallet')){

    class Wallet extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $AuthorizationCode;

    	/**
    	* @var string
    	*/
    	public $ConsumerId;

    	/**
    	* @var WalletIdentifier
    	*/
    	public $WalletIdentifier;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Manage')){

    class Manage extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Undo')){

    class Undo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\DiscountData')){

    class DiscountData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $PromotionCodes;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var decimal
    	*/
    	public $DiscountedAmount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\AddressInfo')){

    class AddressInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Street2;

    	/**
    	* @var string
    	*/
    	public $Street1;

    	/**
    	* @var string
    	*/
    	public $StateProvince;

    	/**
    	* @var string
    	*/
    	public $PostalCode;

    	/**
    	* @var string
    	*/
    	public $City;

    	/**
    	* @var string
    	*/
    	public $CountryCode;

    	/**
    	* @var string
    	*/
    	public $County;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\PINlessDebitData')){

    class PINlessDebitData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\billpayservicedata
    	*/
    	public $BillPayServiceData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\payeedata
    	*/
    	public $PayeeData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Response')){

    class Response extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var Status
    	*/
    	public $Status;

    	/**
    	* @var boolean
    	*/
    	public $IsAcknowledged;

    	/**
    	* @var TransactionState
    	*/
    	public $TransactionState;

    	/**
    	* @var string
    	*/
    	public $OriginatorTransactionId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\geolocation
    	*/
    	public $Geolocation;

    	/**
    	* @var string
    	*/
    	public $Reference;

    	/**
    	* @var string
    	*/
    	public $StatusCode;

    	/**
    	* @var string
    	*/
    	public $StatusMessage;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var CaptureState
    	*/
    	public $CaptureState;

    	/**
    	* @var string
    	*/
    	public $TransactionCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\servicetransactiondatetime
    	*/
    	public $ServiceTransactionDateTime;

    	/**
    	* @var string
    	*/
    	public $HostMessageId;

    	/**
    	* @var string
    	*/
    	public $TransmissionNumber;

    	/**
    	* @var string
    	*/
    	public $ServiceTransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Adjust')){

    class Adjust extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var decimal
    	*/
    	public $TipAmount;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\NameInfo')){

    class NameInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Last;

    	/**
    	* @var string
    	*/
    	public $Suffix;

    	/**
    	* @var string
    	*/
    	public $Title;

    	/**
    	* @var string
    	*/
    	public $First;

    	/**
    	* @var string
    	*/
    	public $Middle;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Transaction')){

    class Transaction extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transactioncustomerdata
    	*/
    	public $CustomerData;

    	/**
    	* @var boolean
    	*/
    	public $IsOffline;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transactionreportingdata
    	*/
    	public $ReportingData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\PersonalInfo')){

    class PersonalInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $DateOfBirth;

    	/**
    	* @var string
    	*/
    	public $Company;

    	/**
    	* @var string
    	*/
    	public $MilitaryIdNumber;

    	/**
    	* @var string
    	*/
    	public $SocialSecurityNumber;

    	/**
    	* @var string
    	*/
    	public $EmployeeIdNumber;

    	/**
    	* @var string
    	*/
    	public $GovernmentIdNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\driverslicense
    	*/
    	public $DriversLicense;

    	/**
    	* @var string
    	*/
    	public $Gender;

    	/**
    	* @var string
    	*/
    	public $TaxId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\EMVData')){

    class EMVData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TerminalVerifyResult;

    	/**
    	* @var string
    	*/
    	public $TransactionType;

    	/**
    	* @var string
    	*/
    	public $CVMResults;

    	/**
    	* @var string
    	*/
    	public $ApplicationVersionNumber;

    	/**
    	* @var string
    	*/
    	public $ApplicationInterchangeProfile;

    	/**
    	* @var string
    	*/
    	public $IssuerActionDefault;

    	/**
    	* @var string
    	*/
    	public $AuthorizationResponseCode;

    	/**
    	* @var string
    	*/
    	public $CurrencyCode;

    	/**
    	* @var string
    	*/
    	public $ApplicationUsageControl;

    	/**
    	* @var string
    	*/
    	public $FormFactorIndicator;

    	/**
    	* @var string
    	*/
    	public $SequenceNumber;

    	/**
    	* @var string
    	*/
    	public $CVMList;

    	/**
    	* @var string
    	*/
    	public $ApplicationTransactionCount;

    	/**
    	* @var string
    	*/
    	public $TerminalCountryCode;

    	/**
    	* @var string
    	*/
    	public $CashBackAmount;

    	/**
    	* @var string
    	*/
    	public $Cryptogram;

    	/**
    	* @var string
    	*/
    	public $UnpredictableNumber;

    	/**
    	* @var string
    	*/
    	public $IssuerActionDenial;

    	/**
    	* @var string
    	*/
    	public $CryptogramInformationData;

    	/**
    	* @var string
    	*/
    	public $InterfaceDeviceSerialNumber;

    	/**
    	* @var string
    	*/
    	public $CustomerExclusiveData;

    	/**
    	* @var string
    	*/
    	public $LocalTransactionDate;

    	/**
    	* @var string
    	*/
    	public $CardSequenceNumber;

    	/**
    	* @var string
    	*/
    	public $TerminalType;

    	/**
    	* @var string
    	*/
    	public $IssuerApplicationData;

    	/**
    	* @var string
    	*/
    	public $IssuerActionOnline;

    	/**
    	* @var string
    	*/
    	public $AuthorizationAmount;

    	/**
    	* @var string
    	*/
    	public $TerminalCapability;

    	/**
    	* @var string
    	*/
    	public $ApplicationId;

    	/**
    	* @var string
    	*/
    	public $DedicatedFileName;

    	/**
    	* @var string
    	*/
    	public $IssuerScriptResults;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Resubmit')){

    class Resubmit extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    	/**
    	* @var string
    	*/
    	public $CVV;

    	/**
    	* @var ResubmitReason
    	*/
    	public $ResubmitReason;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var decimal
    	*/
    	public $TipAmount;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\CustomerInfo')){

    class CustomerInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addressinfo
    	*/
    	public $Address;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\internationaladdressinfo
    	*/
    	public $InternationalAddress;

    	/**
    	* @var string
    	*/
    	public $BusinessName;

    	/**
    	* @var string
    	*/
    	public $Phone;

    	/**
    	* @var string
    	*/
    	public $Fax;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\nameinfo
    	*/
    	public $Name;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\TransactionTenderData')){

    class TransactionTenderData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SecureEMVData;

    	/**
    	* @var string
    	*/
    	public $SecurePaymentAccountData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\wallet
    	*/
    	public $Wallet;

    	/**
    	* @var string
    	*/
    	public $VendorId;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountDataToken;

    	/**
    	* @var string
    	*/
    	public $SwipeStatus;

    	/**
    	* @var string
    	*/
    	public $EMVEncryptionKeyId;

    	/**
    	* @var string
    	*/
    	public $DeviceSerialNumber;

    	/**
    	* @var string
    	*/
    	public $SecureMACData;

    	/**
    	* @var string
    	*/
    	public $EncryptionKeyId;

    	/**
    	* @var string
    	*/
    	public $MACEncryptionKeyId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\PayeeData')){

    class PayeeData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CompanyName;

    	/**
    	* @var string
    	*/
    	public $Phone;

    	/**
    	* @var string
    	*/
    	public $AccountNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\EcommerceSecurityData')){

    class EcommerceSecurityData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $XID;

    	/**
    	* @var TokenIndicator
    	*/
    	public $TokenIndicator;

    	/**
    	* @var string
    	*/
    	public $TokenData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\ThreeDSecureInformation')){

    class ThreeDSecureInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Status;

    	/**
    	* @var string
    	*/
    	public $CAVV;

    	/**
    	* @var string
    	*/
    	public $XID;

    	/**
    	* @var string
    	*/
    	public $ECI;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Level2Data')){

    class Level2Data extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ShipmentId;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var decimal
    	*/
    	public $FreightAmount;

    	/**
    	* @var string
    	*/
    	public $CustomerCode;

    	/**
    	* @var decimal
    	*/
    	public $MiscHandlingAmount;

    	/**
    	* @var string
    	*/
    	public $ShipFromPostalCode;

    	/**
    	* @var string
    	*/
    	public $OrderNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\tax
    	*/
    	public $Tax;

    	/**
    	* @var decimal
    	*/
    	public $DutyAmount;

    	/**
    	* @var string
    	*/
    	public $DestinationPostal;

    	/**
    	* @var decimal
    	*/
    	public $DiscountAmount;

    	/**
    	* @var dateTime
    	*/
    	public $OrderDate;

    	/**
    	* @var decimal
    	*/
    	public $BaseAmount;

    	/**
    	* @var string
    	*/
    	public $CompanyName;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\taxexempt
    	*/
    	public $TaxExempt;

    	/**
    	* @var string
    	*/
    	public $DestinationCountryCode;

    	/**
    	* @var string
    	*/
    	public $RequesterName;

    	/**
    	* @var string
    	*/
    	public $CommodityCode;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\InternetTransactionData')){

    class InternetTransactionData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $IpAddress;

    	/**
    	* @var string
    	*/
    	public $SessionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Tax')){

    class Tax extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayofitemizedtax
    	*/
    	public $ItemizedTaxes;

    	/**
    	* @var decimal
    	*/
    	public $Rate;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $InvoiceNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\EMVTerminalData')){

    class EMVTerminalData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TerminalOutputCapability
    	*/
    	public $TerminalOutputCapability;

    	/**
    	* @var TerminalOperator
    	*/
    	public $TerminalOperator;

    	/**
    	* @var boolean
    	*/
    	public $CardRetentionCapability;

    	/**
    	* @var PINMaxCharacters
    	*/
    	public $PINMaxCharacters;

    	/**
    	* @var CardholderAuthenticationCapability
    	*/
    	public $CardholderAuthenticationCapability;

    	/**
    	* @var CardDataOutputCapability
    	*/
    	public $CardDataOutputCapability;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\InternationalAVSOverride')){

    class InternationalAVSOverride extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $IgnoreAVS;

    	/**
    	* @var boolean
    	*/
    	public $SkipAVS;

    	/**
    	* @var string
    	*/
    	public $AVSRejectCodes;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\InstallmentDetails')){

    class InstallmentDetails extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $MonthsDeferred;

    	/**
    	* @var InstallmentPlanType
    	*/
    	public $InstallmentPlanType;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\ItemizedTax')){

    class ItemizedTax extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeTaxType
    	*/
    	public $Type;

    	/**
    	* @var decimal
    	*/
    	public $Rate;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\ItemizedTaxes')){

    class ItemizedTaxes extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayofitemizedtax
    	*/
    	public $ItemizedTax;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\InternationalAVSData')){

    class InternationalAVSData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $HouseNumber;

    	/**
    	* @var string
    	*/
    	public $StateProvince;

    	/**
    	* @var string
    	*/
    	public $POBoxNumber;

    	/**
    	* @var string
    	*/
    	public $Street;

    	/**
    	* @var string
    	*/
    	public $PostalCode;

    	/**
    	* @var string
    	*/
    	public $Country;

    	/**
    	* @var string
    	*/
    	public $City;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\ManagedBillingInstallments')){

    class ManagedBillingInstallments extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var int
    	*/
    	public $Count;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\EMVDataResponse')){

    class EMVDataResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TransactionStatusInformation;

    	/**
    	* @var string
    	*/
    	public $CashBackAmount;

    	/**
    	* @var string
    	*/
    	public $Cryptogram;

    	/**
    	* @var string
    	*/
    	public $TerminalVerifyResult;

    	/**
    	* @var string
    	*/
    	public $ResponseCode;

    	/**
    	* @var string
    	*/
    	public $TransactionType;

    	/**
    	* @var string
    	*/
    	public $ApplicationName;

    	/**
    	* @var string
    	*/
    	public $CardholderVerificationMethod;

    	/**
    	* @var string
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $IssuerAuthenticationData;

    	/**
    	* @var string
    	*/
    	public $IssuerAppData;

    	/**
    	* @var string
    	*/
    	public $CardAuthenticationResultsCode;

    	/**
    	* @var string
    	*/
    	public $AuthorizationResponseCode;

    	/**
    	* @var string
    	*/
    	public $IssuerScriptTemplate2;

    	/**
    	* @var string
    	*/
    	public $IssuerScriptTemplate1;

    	/**
    	* @var string
    	*/
    	public $CryptogramInfoData;

    	/**
    	* @var string
    	*/
    	public $ApplicationId;

    	/**
    	* @var string
    	*/
    	public $DedicatedFileName;

    	/**
    	* @var string
    	*/
    	public $ApplicationTransactionCount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\IIASData')){

    class IIASData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var IIASDesignation
    	*/
    	public $IIASDesignation;

    	/**
    	* @var decimal
    	*/
    	public $DentalAmount;

    	/**
    	* @var decimal
    	*/
    	public $VisionAmount;

    	/**
    	* @var decimal
    	*/
    	public $HealthcareAmount;

    	/**
    	* @var decimal
    	*/
    	public $PrescriptionAmount;

    	/**
    	* @var decimal
    	*/
    	public $ClinicOtherAmount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardApplicationConfigurationData')){

    class BankcardApplicationConfigurationData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $ApplicationAttended;

    	/**
    	* @var ReadCapability
    	*/
    	public $ReadCapability;

    	/**
    	* @var HardwareType
    	*/
    	public $HardwareType;

    	/**
    	* @var PINCapability
    	*/
    	public $PINCapability;

    	/**
    	* @var ApplicationLocation
    	*/
    	public $ApplicationLocation;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\emvterminaldata
    	*/
    	public $EMVTerminalData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Totals')){

    class Totals extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $NetAmount;

    	/**
    	* @var int
    	*/
    	public $Count;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\AVSResult')){

    class AVSResult extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var CardholderNameResult
    	*/
    	public $CardholderNameResult;

    	/**
    	* @var CountryResult
    	*/
    	public $CountryResult;

    	/**
    	* @var PostalCodeResult
    	*/
    	public $PostalCodeResult;

    	/**
    	* @var string
    	*/
    	public $ActualResult;

    	/**
    	* @var StateResult
    	*/
    	public $StateResult;

    	/**
    	* @var AddressResult
    	*/
    	public $AddressResult;

    	/**
    	* @var PhoneResult
    	*/
    	public $PhoneResult;

    	/**
    	* @var CityResult
    	*/
    	public $CityResult;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\CardSecurityData')){

    class CardSecurityData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\internationalavsdata
    	*/
    	public $InternationalAVSData;

    	/**
    	* @var string
    	*/
    	public $PIN;

    	/**
    	* @var CVDataProvided
    	*/
    	public $CVDataProvided;

    	/**
    	* @var string
    	*/
    	public $KeySerialNumber;

    	/**
    	* @var string
    	*/
    	public $CVData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\avsdata
    	*/
    	public $AVSData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\internationalavsoverride
    	*/
    	public $InternationalAVSOverride;

    	/**
    	* @var string
    	*/
    	public $IdentificationInformation;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\TokenInformation')){

    class TokenInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TokenExpirationDate;

    	/**
    	* @var string
    	*/
    	public $TokenAssuranceLevel;

    	/**
    	* @var string
    	*/
    	public $TokenRequestorId;

    	/**
    	* @var string
    	*/
    	public $Token;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\CardOnFileInfo')){

    class CardOnFileInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeCardOnFile
    	*/
    	public $CardOnFile;

    	/**
    	* @var string
    	*/
    	public $OriginalTransactionId;

    	/**
    	* @var TypeInitiatedBy
    	*/
    	public $InitiatedBy;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\EBTAvailableBalance')){

    class EBTAvailableBalance extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $CashAvailableBalance;

    	/**
    	* @var decimal
    	*/
    	public $SNAPAvailableBalance;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\CardData')){

    class CardData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CardholderName;

    	/**
    	* @var string
    	*/
    	public $Expire;

    	/**
    	* @var string
    	*/
    	public $CardSequenceNumber;

    	/**
    	* @var string
    	*/
    	public $Track2Data;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var string
    	*/
    	public $Track1Data;

    	/**
    	* @var string
    	*/
    	public $ChipConditionCode;

    	/**
    	* @var TypeFallbackReason
    	*/
    	public $FallbackReason;

    	/**
    	* @var string
    	*/
    	public $PAN;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\AVSData')){

    class AVSData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CardholderName;

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var string
    	*/
    	public $StateProvince;

    	/**
    	* @var string
    	*/
    	public $Phone;

    	/**
    	* @var string
    	*/
    	public $Street;

    	/**
    	* @var string
    	*/
    	public $PostalCode;

    	/**
    	* @var string
    	*/
    	public $Country;

    	/**
    	* @var string
    	*/
    	public $City;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\TaxExempt')){

    class TaxExempt extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TaxExemptNumber;

    	/**
    	* @var IsTaxExempt
    	*/
    	public $IsTaxExempt;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\TransactionSummaryData')){

    class TransactionSummaryData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $NetTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $ReturnTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $CashBackTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $EBTReturnTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $SaleTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $PINDebitReturnTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $PINDebitSaleTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $EBTSaleTotals;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\totals
    	*/
    	public $VoidTotals;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\ManagedBilling')){

    class ManagedBilling extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $StartDate;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\managedbillinginstallments
    	*/
    	public $Installments;

    	/**
    	* @var decimal
    	*/
    	public $DownPayment;

    	/**
    	* @var int
    	*/
    	public $Period;

    	/**
    	* @var Interval
    	*/
    	public $Interval;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\LineItemDetail')){

    class LineItemDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $UnitPrice;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var TypeUnitOfMeasure
    	*/
    	public $UnitOfMeasure;

    	/**
    	* @var string
    	*/
    	public $ProductCode;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $CommodityCode;

    	/**
    	* @var decimal
    	*/
    	public $Quantity;

    	/**
    	* @var boolean
    	*/
    	public $TaxIncluded;

    	/**
    	* @var string
    	*/
    	public $UPC;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\tax
    	*/
    	public $Tax;

    	/**
    	* @var decimal
    	*/
    	public $DiscountAmount;

    	/**
    	* @var boolean
    	*/
    	public $DiscountIncluded;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\ComponentKeys')){

    class ComponentKeys extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\pincomponentkey
    	*/
    	public $PINComponentKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\genericcomponentkey
    	*/
    	public $GenericComponentKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\maccomponentkey
    	*/
    	public $MACComponentKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\emvcomponentkey
    	*/
    	public $EMVComponentKey;

    	/**
    	* @var string
    	*/
    	public $RegionId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\fieldcomponentkey
    	*/
    	public $FieldComponentKey;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\GenericComponentKey')){

    class GenericComponentKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    	/**
    	* @var string
    	*/
    	public $KeyCheckValue;

    	/**
    	* @var string
    	*/
    	public $CombinedKeyCheckValue;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\InitialEncryptionKeys')){

    class InitialEncryptionKeys extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\macinitialkey
    	*/
    	public $MACInitialKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\pininitialkey
    	*/
    	public $PINInitialKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\genericinitialkey
    	*/
    	public $GenericInitialKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\fieldinitialkey
    	*/
    	public $FieldInitialKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\emvinitialkey
    	*/
    	public $EMVInitialKey;

    	/**
    	* @var string
    	*/
    	public $RegionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\EncryptionTenderData')){

    class EncryptionTenderData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $VendorId;

    	/**
    	* @var EntryMode
    	*/
    	public $EntryMode;

    	/**
    	* @var string
    	*/
    	public $RegionId;

    	/**
    	* @var string
    	*/
    	public $DeviceSerialNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\GenericInitialKey')){

    class GenericInitialKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\PINComponentKey')){

    class PINComponentKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    	/**
    	* @var string
    	*/
    	public $KeyCheckValue;

    	/**
    	* @var string
    	*/
    	public $CombinedKeyCheckValue;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\MACInitialKey')){

    class MACInitialKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\MACComponentKey')){

    class MACComponentKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    	/**
    	* @var string
    	*/
    	public $KeyCheckValue;

    	/**
    	* @var string
    	*/
    	public $CombinedKeyCheckValue;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\PINInitialKey')){

    class PINInitialKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\EMVComponentKey')){

    class EMVComponentKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    	/**
    	* @var string
    	*/
    	public $KeyCheckValue;

    	/**
    	* @var string
    	*/
    	public $CombinedKeyCheckValue;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\FieldInitialKey')){

    class FieldInitialKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\EMVInitialKey')){

    class EMVInitialKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\FieldComponentKey')){

    class FieldComponentKey extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $KeyValue;

    	/**
    	* @var string
    	*/
    	public $InitialKeySerialNumber;

    	/**
    	* @var string
    	*/
    	public $KeyCheckValue;

    	/**
    	* @var string
    	*/
    	public $CombinedKeyCheckValue;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Fault;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Fault\CMSValidationError')){

    class CMSValidationError extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $RuleMessage;

    	/**
    	* @var CMSValidationError_EErrorType
    	*/
    	public $ErrorType;

    	/**
    	* @var string
    	*/
    	public $RuleKey;

    	/**
    	* @var string
    	*/
    	public $RuleLocationKey;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault')){

    class CMSBaseFault extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $ErrorID;

    	/**
    	* @var string
    	*/
    	public $ProblemType;

    	/**
    	* @var string
    	*/
    	public $Operation;

    	/**
    	* @var string
    	*/
    	public $HelpURL;

    	/**
    	* @var string
    	*/
    	public $TransactionID;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\DistributionListDetail')){

    class DistributionListDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\distributionlist
    	*/
    	public $DistributionList;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\QueryRewardsProgramParameters')){

    class QueryRewardsProgramParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CreationDate;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $RewardProgramNames;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\PromotionItem')){

    class PromotionItem extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeISOCurrencyCodeA3
    	*/
    	public $CurrencyCode;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var string
    	*/
    	public $Category;

    	/**
    	* @var decimal
    	*/
    	public $Price;

    	/**
    	* @var string
    	*/
    	public $SubCategory;

    	/**
    	* @var string
    	*/
    	public $SKU;

    	/**
    	* @var string
    	*/
    	public $SmallIconUrl;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\Promotion')){

    class Promotion extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $Memberships;

    	/**
    	* @var boolean
    	*/
    	public $IsTemplate;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var decimal
    	*/
    	public $Discount;

    	/**
    	* @var string
    	*/
    	public $PromotionCode;

    	/**
    	* @var boolean
    	*/
    	public $IsValidWithOtherPromotions;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\promotionitem
    	*/
    	public $Item;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var dateTime
    	*/
    	public $ExpirationDate;

    	/**
    	* @var TypeDiscountType
    	*/
    	public $DiscountType;

    	/**
    	* @var boolean
    	*/
    	public $IsOneTimeOffer;

    	/**
    	* @var TypeTargetType
    	*/
    	public $TargetType;

    	/**
    	* @var string
    	*/
    	public $DistributionListName;

    	/**
    	* @var boolean
    	*/
    	public $NewCustomerOnly;

    	/**
    	* @var TypeBirthdayPromotionType
    	*/
    	public $BirthdayPromotionType;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\QueryCustomerSavingsParameters')){

    class QueryCustomerSavingsParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $TransactionDateRange;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\RewardsProgramResponse')){

    class RewardsProgramResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\arrayofrewardsprogramdetail
    	*/
    	public $RewardsPrograms;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\CustomerSavingsResponse')){

    class CustomerSavingsResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\arrayofcustomersavings
    	*/
    	public $CustomerSavings;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\QueryPromotionsParameters')){

    class QueryPromotionsParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $IncludeInactive;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $SKUs;

    	/**
    	* @var boolean
    	*/
    	public $QueryTemplates;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $ExpirationDateRange;

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var string
    	*/
    	public $PromotionCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CreatedDateRange;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\nameinfo
    	*/
    	public $CustomerName;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\PromotionDetail')){

    class PromotionDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId_x0020_;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\promotion
    	*/
    	public $Promotion;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\QueryDistributionListParameters')){

    class QueryDistributionListParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $DistributionListName;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\CampaignResponse')){

    class CampaignResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\arrayofcampaigndetail
    	*/
    	public $Campaigns;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\PromotionResponse')){

    class PromotionResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofmerchantdetail
    	*/
    	public $Merchants;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\arrayofpromotiondetail
    	*/
    	public $Promotions;

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofcustomersummary
    	*/
    	public $Customers;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\CustomerSavings')){

    class CustomerSavings extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    	/**
    	* @var string
    	*/
    	public $MerchantName;

    	/**
    	* @var decimal
    	*/
    	public $DiscountedAmount;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\QueryCampaignParameters')){

    class QueryCampaignParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $CampaignIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CreatedDateRange;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $SentDateRange;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $CampaignNames;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\RewardsProgram')){

    class RewardsProgram extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $StartDate;

    	/**
    	* @var decimal
    	*/
    	public $MinimumPurchaseAmount;

    	/**
    	* @var int
    	*/
    	public $RequiredPurchaseCount;

    	/**
    	* @var boolean
    	*/
    	public $MultiplePurchasesBasedOnAmount;

    	/**
    	* @var string
    	*/
    	public $RewardsProgramName;

    	/**
    	* @var dateTime
    	*/
    	public $EndDate;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\FrequentBuyerInfo')){

    class FrequentBuyerInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $FrequentBuyerSICs;

    	/**
    	* @var decimal
    	*/
    	public $FrequentBuyerAmount;

    	/**
    	* @var int
    	*/
    	public $FrequentBuyerPeriod;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\CampaignTestData')){

    class CampaignTestData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $TelephoneNumbers;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $EmailAddresses;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\CampaignDetail')){

    class CampaignDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $DateSent;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $CampaignName;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var dateTime
    	*/
    	public $DateCreated;

    	/**
    	* @var string
    	*/
    	public $CampaignReferenceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\RewardsProgramDetail')){

    class RewardsProgramDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\rewardsprogram
    	*/
    	public $RewardsProgram;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\DistributionList')){

    class DistributionList extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $DistributionListName;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $CustomerReferenceIds;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\DistributionListResponse')){

    class DistributionListResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\arrayofdistributionlistdetail
    	*/
    	public $DistribuionLists;

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\SubmitRewardsProgram')){

    class SubmitRewardsProgram extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\rewardsprogram
    	*/
    	public $RewardsProgram;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\promotion
    	*/
    	public $Promotion;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\QueryCampaigns')){

    class QueryCampaigns extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\querycampaignparameters
    	*/
    	public $QueryCampaignParameters;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\QuerySubscription')){

    class QuerySubscription extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\querysubscriptionparameters
    	*/
    	public $QuerySubscriptionParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\SubmitInvoicePayment')){

    class SubmitInvoicePayment extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\transactioninfo
    	*/
    	public $TransactionInfo;

    	/**
    	* @var InvoiceState
    	*/
    	public $InvoiceState;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\QueryInvoice')){

    class QueryInvoice extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\queryinvoiceparameters
    	*/
    	public $QueryInvoiceParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\SubmitInvoice')){

    class SubmitInvoice extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\invoice
    	*/
    	public $Invoice;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\QueryRewardsProgram')){

    class QueryRewardsProgram extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\queryrewardsprogramparameters
    	*/
    	public $QueryRewardsProgramParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\QueryCustomersSummary')){

    class QueryCustomersSummary extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\querycustomersparameters
    	*/
    	public $QueryCustomersParameters;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\ProcessInvoice')){

    class ProcessInvoice extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\processinginformation
    	*/
    	public $ProcessingInformation;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\QueryCustomersDetail')){

    class QueryCustomersDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\querycustomersparameters
    	*/
    	public $QueryCustomersParameters;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\SubmitDistributionList')){

    class SubmitDistributionList extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\distributionlist
    	*/
    	public $DistributionList;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\QueryCustomerTransactions')){

    class QueryCustomerTransactions extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Businessintelligence\querycustomertransactionsparameters
    	*/
    	public $QueryParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\DeleteDistributionList')){

    class DeleteDistributionList extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $DistributionListName;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\SendCampaign')){

    class SendCampaign extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CampaignId;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\campaigntestdata
    	*/
    	public $CampaignTestData;

    	/**
    	* @var TypeDistribution
    	*/
    	public $DistributionType;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\SubmitCampaign')){

    class SubmitCampaign extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $PromotionCodes;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $Content;

    	/**
    	* @var string
    	*/
    	public $CampaignName;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\QueryDistributionList')){

    class QueryDistributionList extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\querydistributionlistparameters
    	*/
    	public $QueryDistributionListParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\SubmitCustomerProfile')){

    class SubmitCustomerProfile extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeConsent
    	*/
    	public $ConsentType;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\uniqueconstraint
    	*/
    	public $UniqueConstraint;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerprofile
    	*/
    	public $CustomerProfile;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\SubmitSubscriptionState')){

    class SubmitSubscriptionState extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var SubscriptionState
    	*/
    	public $SubscriptionState;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\SubmitPromotion')){

    class SubmitPromotion extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\promotion
    	*/
    	public $Promotion;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\QueryPromotions')){

    class QueryPromotions extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\querypromotionsparameters
    	*/
    	public $QueryPromotionsParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\SubmitInvoiceState')){

    class SubmitInvoiceState extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var InvoiceState
    	*/
    	public $InvoiceState;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\SubmitCustomerProfiles')){

    class SubmitCustomerProfiles extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeConsent
    	*/
    	public $ConsentType;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofcustomerprofile
    	*/
    	public $CustomerProfiles;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\uniqueconstraint
    	*/
    	public $UniqueConstraint;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\QueryCustomerSavings')){

    class QueryCustomerSavings extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\querycustomersavingsparameters
    	*/
    	public $QueryCustomerSavingsParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Rest\SubmitSubscription')){

    class SubmitSubscription extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\subscription
    	*/
    	public $Subscription;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Fault;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Fault\TMSValidationError')){

    class TMSValidationError extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $RuleMessage;

    	/**
    	* @var TMSValidationError_EErrorType
    	*/
    	public $ErrorType;

    	/**
    	* @var string
    	*/
    	public $RuleKey;

    	/**
    	* @var string
    	*/
    	public $RuleLocationKey;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault')){

    class TMSBaseFault extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $ErrorID;

    	/**
    	* @var string
    	*/
    	public $ProblemType;

    	/**
    	* @var string
    	*/
    	public $Operation;

    	/**
    	* @var string
    	*/
    	public $HelpURL;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Rest\QueryTransactionsSummary')){

    class QueryTransactionsSummary extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var boolean
    	*/
    	public $IncludeRelated;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\querytransactionsparameters
    	*/
    	public $QueryTransactionsParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Rest\QueryBatch')){

    class QueryBatch extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\querybatchparameters
    	*/
    	public $QueryBatchParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Rest\QueryTransactionsDetail')){

    class QueryTransactionsDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var TransactionDetailFormat
    	*/
    	public $TransactionDetailFormat;

    	/**
    	* @var boolean
    	*/
    	public $IncludeRelated;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\querytransactionsparameters
    	*/
    	public $QueryTransactionsParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Rest\QueryTransactionsFamilies')){

    class QueryTransactionsFamilies extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
    	*/
    	public $PagingParameters;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\querytransactionsparameters
    	*/
    	public $QueryTransactionsParameters;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionDetailsResponse')){

    class TransactionDetailsResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayoftransactiondetail
    	*/
    	public $TransactionDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\FamilyDetail')){

    class FamilyDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $BatchId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var string
    	*/
    	public $CustomerId;

    	/**
    	* @var decimal
    	*/
    	public $CapturedAmount;

    	/**
    	* @var decimal
    	*/
    	public $LastAuthorizedAmount;

    	/**
    	* @var string
    	*/
    	public $CurrencyCode;

    	/**
    	* @var TransactionState
    	*/
    	public $FamilyState;

    	/**
    	* @var dateTime
    	*/
    	public $CaptureDateTime;

    	/**
    	* @var guid
    	*/
    	public $FamilyId;

    	/**
    	* @var decimal
    	*/
    	public $NetAmount;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $TransactionIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayoftransactionmetadata
    	*/
    	public $TransactionMetaData;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\StoredValueData')){

    class StoredValueData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $CardRestrictionValue;

    	/**
    	* @var decimal
    	*/
    	public $NewBalance;

    	/**
    	* @var decimal
    	*/
    	public $PreviousBalance;

    	/**
    	* @var CVResult
    	*/
    	public $CVResult;

    	/**
    	* @var CardStatus
    	*/
    	public $CardStatus;

    	/**
    	* @var string
    	*/
    	public $OrderId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\CWSTransaction')){

    class CWSTransaction extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\response
    	*/
    	public $Response;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\transactionmetadata
    	*/
    	public $MetaData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\applicationdata
    	*/
    	public $ApplicationData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofilemerchantdata
    	*/
    	public $MerchantProfileMerchantData;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\QueryTransactionsParameters')){

    class QueryTransactionsParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var BooleanParameter
    	*/
    	public $IsAcknowledged;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $ServiceIds;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $ApprovalCodes;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $BatchIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayofreconciliationstate
    	*/
    	public $ReconciliationStates;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $OrderNumbers;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayoftransactionclasstypepair
    	*/
    	public $TransactionClassTypePairs;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\arrayofcapturestate
    	*/
    	public $CaptureStates;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $TransactionDateRange;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofdecimal
    	*/
    	public $Amounts;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $MerchantProfileIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayoftypecardtype
    	*/
    	public $CardTypes;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $TransactionIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\arrayoftransactionstate
    	*/
    	public $TransactionStates;

    	/**
    	* @var QueryType
    	*/
    	public $QueryType;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $ServiceKeys;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $CaptureDateRange;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\CompleteTransaction')){

    class CompleteTransaction extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SerializedTransaction;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\cwstransaction
    	*/
    	public $CWSTransaction;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\QueryBatchParameters')){

    class QueryBatchParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $BatchIds;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $BatchDateRange;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $MerchantProfileIds;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $TransactionIds;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $ServiceKeys;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\BatchDetailsResponse')){

    class BatchDetailsResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayofbatchdetaildata
    	*/
    	public $TransactionDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\ElectronicCheckData')){

    class ElectronicCheckData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MaskedAccountNumber;

    	/**
    	* @var TransactionType
    	*/
    	public $TransactionType;

    	/**
    	* @var string
    	*/
    	public $CheckNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\BatchDetailData')){

    class BatchDetailData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var CaptureState
    	*/
    	public $CaptureState;

    	/**
    	* @var string
    	*/
    	public $Description;

    	/**
    	* @var dateTime
    	*/
    	public $BatchCaptureDate;

    	/**
    	* @var string
    	*/
    	public $BatchId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarydata
    	*/
    	public $SummaryData;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $TransactionIds;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionInformation')){

    class TransactionInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var BooleanParameter
    	*/
    	public $IsAcknowledged;

    	/**
    	* @var TransactionState
    	*/
    	public $TransactionState;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\storedvaluedata
    	*/
    	public $StoredValueData;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var string
    	*/
    	public $OrderNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\electroniccheckdata
    	*/
    	public $ElectronicCheckData;

    	/**
    	* @var decimal
    	*/
    	public $CapturedAmount;

    	/**
    	* @var boolean
    	*/
    	public $ProcessedAs3DSecure;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    	/**
    	* @var string
    	*/
    	public $CurrencyCode;

    	/**
    	* @var CaptureState
    	*/
    	public $CaptureState;

    	/**
    	* @var ReconciliationState
    	*/
    	public $ReconciliationState;

    	/**
    	* @var boolean
    	*/
    	public $MultiplePartialCaptureFinal;

    	/**
    	* @var string
    	*/
    	public $TransactionStatusCode;

    	/**
    	* @var dateTime
    	*/
    	public $CaptureDateTime;

    	/**
    	* @var boolean
    	*/
    	public $MultiplePartialCapture;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var string
    	*/
    	public $TipAmount;

    	/**
    	* @var Status
    	*/
    	public $Status;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\transactionclasstypepair
    	*/
    	public $TransactionClassTypePair;

    	/**
    	* @var string
    	*/
    	public $OriginatorTransactionId;

    	/**
    	* @var dateTime
    	*/
    	public $TransactionTimestamp;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $Reference;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $BatchId;

    	/**
    	* @var string
    	*/
    	public $CustomerId;

    	/**
    	* @var string
    	*/
    	public $OriginalAmount;

    	/**
    	* @var string
    	*/
    	public $ApprovalCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\bankcarddata
    	*/
    	public $BankcardData;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    	/**
    	* @var decimal
    	*/
    	public $ReconciliationBalance;

    	/**
    	* @var string
    	*/
    	public $TransactionStatusMessage;

    	/**
    	* @var string
    	*/
    	public $ServiceTransactionId;

    	/**
    	* @var string
    	*/
    	public $CaptureStatusMessage;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\FamilyInformation')){

    class FamilyInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TransactionState
    	*/
    	public $FamilyState;

    	/**
    	* @var int
    	*/
    	public $FamilySequenceNumber;

    	/**
    	* @var guid
    	*/
    	public $FamilyId;

    	/**
    	* @var decimal
    	*/
    	public $NetAmount;

    	/**
    	* @var int
    	*/
    	public $FamilySequenceCount;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\SummaryDetail')){

    class SummaryDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\transactioninformation
    	*/
    	public $TransactionInformation;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\familyinformation
    	*/
    	public $FamilyInformation;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionMetaData')){

    class TransactionMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\transactionclasstypepair
    	*/
    	public $TransactionClassTypePair;

    	/**
    	* @var TransactionState
    	*/
    	public $TransactionState;

    	/**
    	* @var string
    	*/
    	public $CardType;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $SequenceNumber;

    	/**
    	* @var dateTime
    	*/
    	public $TransactionDateTime;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var string
    	*/
    	public $WorkflowId;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionDetail')){

    class TransactionDetail extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\transactioninformation
    	*/
    	public $TransactionInformation;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\familyinformation
    	*/
    	public $FamilyInformation;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayoftransactionnotification
    	*/
    	public $TransactionNotifications;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\completetransaction
    	*/
    	public $CompleteTransaction;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionClassTypePair')){

    class TransactionClassTypePair extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $TransactionType;

    	/**
    	* @var string
    	*/
    	public $TransactionClass;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionNotification')){

    class TransactionNotification extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $NotificationDate;

    	/**
    	* @var ReconciliationState
    	*/
    	public $ReconciliationState;

    	/**
    	* @var decimal
    	*/
    	public $ReconciliationBalance;

    	/**
    	* @var string
    	*/
    	public $SerializedNotification;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\QueryRejectedParameters')){

    class QueryRejectedParameters extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\addendum
    	*/
    	public $Addendum;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionFamiliesResponse')){

    class TransactionFamiliesResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayoffamilydetail
    	*/
    	public $FamilyDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\RejectedSummary')){

    class RejectedSummary extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var decimal
    	*/
    	public $DebitTransactionTotal;

    	/**
    	* @var int
    	*/
    	public $CreditTransactionCount;

    	/**
    	* @var int
    	*/
    	public $DebitTransactionCount;

    	/**
    	* @var decimal
    	*/
    	public $CreditTransactionTotal;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Constants')){

    class Constants extends \Evosnap\Cws\Model\BaseObject {

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\BankcardData')){

    class BankcardData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\threedsecureinformation
    	*/
    	public $ThreeDSecureInformation;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\avsresult
    	*/
    	public $AVSResult;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var CVResult
    	*/
    	public $CVResult;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var string
    	*/
    	public $OrderId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\TransactionsSummaryResponse')){

    class TransactionsSummaryResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $PageNumber;

    	/**
    	* @var int
    	*/
    	public $TotalPages;

    	/**
    	* @var int
    	*/
    	public $TotalItems;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayofsummarydetail
    	*/
    	public $TransactionDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\QueryResponse')){

    class QueryResponse extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $StatusCode;

    	/**
    	* @var string
    	*/
    	public $StatusMessage;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\BankcardServices')){

    class BankcardServices extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofbankcardservice
    	*/
    	public $BankcardService;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofelectroniccheckingservice
    	*/
    	public $ElectronicCheckingService;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\EncryptionMerchantData')){

    class EncryptionMerchantData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $AgentBank;

    	/**
    	* @var string
    	*/
    	public $SecondaryTerminalId;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\ApplicationData')){

    class ApplicationData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var EncryptionType
    	*/
    	public $EncryptionType;

    	/**
    	* @var string
    	*/
    	public $ApplicationName;

    	/**
    	* @var string
    	*/
    	public $VendorId;

    	/**
    	* @var PINCapability
    	*/
    	public $PINCapability;

    	/**
    	* @var ApplicationLocation
    	*/
    	public $ApplicationLocation;

    	/**
    	* @var string
    	*/
    	public $DeviceSerialNumber;

    	/**
    	* @var dateTime
    	*/
    	public $SoftwareVersionDate;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\emvterminaldata
    	*/
    	public $EMVTerminalData;

    	/**
    	* @var boolean
    	*/
    	public $ApplicationAttended;

    	/**
    	* @var ReadCapability
    	*/
    	public $ReadCapability;

    	/**
    	* @var string
    	*/
    	public $SoftwareVersion;

    	/**
    	* @var HardwareType
    	*/
    	public $HardwareType;

    	/**
    	* @var string
    	*/
    	public $SerialNumber;

    	/**
    	* @var string
    	*/
    	public $DeveloperId;

    	/**
    	* @var string
    	*/
    	public $PTLSSocketId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\MerchantProfileMerchantData')){

    class MerchantProfileMerchantData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\addressinfo
    	*/
    	public $Address;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\encryptionmerchantdata
    	*/
    	public $EncryptionMerchantData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\bankcardmerchantdata
    	*/
    	public $BankcardMerchantData;

    	/**
    	* @var string
    	*/
    	public $MerchantId;

    	/**
    	* @var string
    	*/
    	public $TaxId;

    	/**
    	* @var string
    	*/
    	public $Name;

    	/**
    	* @var string
    	*/
    	public $CustomerServiceInternet;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\electroniccheckingmerchantdata
    	*/
    	public $ElectronicCheckingMerchantData;

    	/**
    	* @var TypeISOLanguageCodeA3
    	*/
    	public $Language;

    	/**
    	* @var string
    	*/
    	public $Phone;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\storedvaluemerchantdata
    	*/
    	public $StoredValueMerchantData;

    	/**
    	* @var string
    	*/
    	public $CustomerServicePhone;

    	/**
    	* @var string
    	*/
    	public $VersionControlValue;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\EMVTerminalData')){

    class EMVTerminalData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TerminalOutputCapability
    	*/
    	public $TerminalOutputCapability;

    	/**
    	* @var TerminalOperator
    	*/
    	public $TerminalOperator;

    	/**
    	* @var boolean
    	*/
    	public $CardRetentionCapability;

    	/**
    	* @var PINMaxCharacters
    	*/
    	public $PINMaxCharacters;

    	/**
    	* @var CardholderAuthenticationCapability
    	*/
    	public $CardholderAuthenticationCapability;

    	/**
    	* @var CardDataOutputCapability
    	*/
    	public $CardDataOutputCapability;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\ElectronicCheckingMerchantData')){

    class ElectronicCheckingMerchantData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $OriginatorId;

    	/**
    	* @var string
    	*/
    	public $SiteId;

    	/**
    	* @var string
    	*/
    	public $ProductId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\MerchantProfiles')){

    class MerchantProfiles extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofmerchantprofile
    	*/
    	public $MerchantProfile;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\WorkflowService')){

    class WorkflowService extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ServiceName;

    	/**
    	* @var string
    	*/
    	public $ServiceType;

    	/**
    	* @var int
    	*/
    	public $Ordinal;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Operations')){

    class Operations extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $CaptureAll;

    	/**
    	* @var boolean
    	*/
    	public $QueryRejected;

    	/**
    	* @var boolean
    	*/
    	public $ManageAccountById;

    	/**
    	* @var boolean
    	*/
    	public $Undo;

    	/**
    	* @var boolean
    	*/
    	public $QueryAccount;

    	/**
    	* @var CloseBatch
    	*/
    	public $CloseBatch;

    	/**
    	* @var boolean
    	*/
    	public $Capture;

    	/**
    	* @var boolean
    	*/
    	public $Authorize;

    	/**
    	* @var boolean
    	*/
    	public $Adjust;

    	/**
    	* @var boolean
    	*/
    	public $AuthAndCapture;

    	/**
    	* @var boolean
    	*/
    	public $ManageAccount;

    	/**
    	* @var boolean
    	*/
    	public $Disburse;

    	/**
    	* @var boolean
    	*/
    	public $CaptureSelective;

    	/**
    	* @var boolean
    	*/
    	public $ReturnUnlinked;

    	/**
    	* @var boolean
    	*/
    	public $RequestKey;

    	/**
    	* @var boolean
    	*/
    	public $Verify;

    	/**
    	* @var boolean
    	*/
    	public $ReturnById;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\StoredValueMerchantData')){

    class StoredValueMerchantData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $StoreId;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    	/**
    	* @var string
    	*/
    	public $AgentChain;

    	/**
    	* @var string
    	*/
    	public $SIC;

    	/**
    	* @var string
    	*/
    	public $ClientNumber;

    	/**
    	* @var IndustryType
    	*/
    	public $IndustryType;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Tenders')){

    class Tenders extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TrackDataSupportType
    	*/
    	public $TrackDataSupport;

    	/**
    	* @var CreditAuthorizeSupportType
    	*/
    	public $CreditAuthorizeSupport;

    	/**
    	* @var boolean
    	*/
    	public $PINDebitUndoTenderDataRequired;

    	/**
    	* @var boolean
    	*/
    	public $CredentialsRequired;

    	/**
    	* @var CreditReversalSupportType
    	*/
    	public $CreditReversalSupportType;

    	/**
    	* @var boolean
    	*/
    	public $Credit;

    	/**
    	* @var CreditReturnSupportType
    	*/
    	public $CreditReturnSupportType;

    	/**
    	* @var BatchAssignmentSupport
    	*/
    	public $BatchAssignmentSupport;

    	/**
    	* @var boolean
    	*/
    	public $PINlessDebit;

    	/**
    	* @var PINDebitReturnSupportType
    	*/
    	public $PINDebitReturnSupportType;

    	/**
    	* @var PinDebitUndoSupportType
    	*/
    	public $PinDebitUndoSupport;

    	/**
    	* @var QueryRejectedSupportType
    	*/
    	public $QueryRejectedSupport;

    	/**
    	* @var boolean
    	*/
    	public $PINDebit;

    	/**
    	* @var PartialApprovalSupportType
    	*/
    	public $PartialApprovalSupportType;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\MerchantProfile')){

    class MerchantProfile extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofilemerchantdata
    	*/
    	public $MerchantData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayoftyperestrictedoperation
    	*/
    	public $RestrictedOperations;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\servicecredentials
    	*/
    	public $ServiceCredentials;

    	/**
    	* @var string
    	*/
    	public $ServiceName;

    	/**
    	* @var boolean
    	*/
    	public $PurchasedTokenization;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayoftyperulecategory
    	*/
    	public $RuleCategories;

    	/**
    	* @var string
    	*/
    	public $Region;

    	/**
    	* @var dateTime
    	*/
    	public $LastUpdated;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofiletransactiondata
    	*/
    	public $TransactionData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\hostedpayments
    	*/
    	public $HostedPayments;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\AUEnrollment')){

    class AUEnrollment extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $AUCustomerId;

    	/**
    	* @var string
    	*/
    	public $AUTerminalId;

    	/**
    	* @var string
    	*/
    	public $AUMerchantId;

    	/**
    	* @var TypeAUCardType
    	*/
    	public $AUCardType;

    	/**
    	* @var string
    	*/
    	public $AUServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\ServiceCredentials')){

    class ServiceCredentials extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Username;

    	/**
    	* @var string
    	*/
    	public $Password;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\ElectronicCheckingService')){

    class ElectronicCheckingService extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ServiceName;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\operations
    	*/
    	public $Operations;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\tenders
    	*/
    	public $Tenders;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\BankcardMerchantData')){

    class BankcardMerchantData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $AgentBank;

    	/**
    	* @var string
    	*/
    	public $SecondaryTerminalId;

    	/**
    	* @var string
    	*/
    	public $BusinessGroup;

    	/**
    	* @var string
    	*/
    	public $ReimbursementAttribute;

    	/**
    	* @var string
    	*/
    	public $MerchantType;

    	/**
    	* @var string
    	*/
    	public $SettlementAgent;

    	/**
    	* @var string
    	*/
    	public $ABANumber;

    	/**
    	* @var boolean
    	*/
    	public $Aggregator;

    	/**
    	* @var boolean
    	*/
    	public $PrintCustomerServicePhone;

    	/**
    	* @var string
    	*/
    	public $SIC;

    	/**
    	* @var string
    	*/
    	public $BusinessRegion;

    	/**
    	* @var boolean
    	*/
    	public $IsAuSubmitter;

    	/**
    	* @var string
    	*/
    	public $QualificationCodes;

    	/**
    	* @var IndustryType
    	*/
    	public $IndustryType;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofauenrollment
    	*/
    	public $AUEnrollments;

    	/**
    	* @var string
    	*/
    	public $TimeZoneDifferential;

    	/**
    	* @var string
    	*/
    	public $StoreId;

    	/**
    	* @var string
    	*/
    	public $AgentChain;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    	/**
    	* @var string
    	*/
    	public $AcquirerBIN;

    	/**
    	* @var string
    	*/
    	public $SharingGroup;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofcardbrandidentifiers_3dsecure
    	*/
    	public $CardBrandIdentifiers_3DSecure;

    	/**
    	* @var string
    	*/
    	public $ClientNumber;

    	/**
    	* @var string
    	*/
    	public $Location;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\SubmitEmailTemplate')){

    class SubmitEmailTemplate extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\emailtemplate
    	*/
    	public $EmailTemplate;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\BankcardServiceAVSData')){

    class BankcardServiceAVSData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $CardholderName;

    	/**
    	* @var boolean
    	*/
    	public $StateProvince;

    	/**
    	* @var boolean
    	*/
    	public $Phone;

    	/**
    	* @var boolean
    	*/
    	public $Street;

    	/**
    	* @var boolean
    	*/
    	public $PostalCode;

    	/**
    	* @var boolean
    	*/
    	public $Country;

    	/**
    	* @var boolean
    	*/
    	public $City;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Workflow')){

    class Workflow extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofworkflowservice
    	*/
    	public $WorkflowServices;

    	/**
    	* @var string
    	*/
    	public $WorkflowId;

    	/**
    	* @var string
    	*/
    	public $Name;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\HostedPayments')){

    class HostedPayments extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Code;

    	/**
    	* @var string
    	*/
    	public $Key;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\BankcardTransactionDataDefaults')){

    class BankcardTransactionDataDefaults extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeISOCurrencyCodeA3
    	*/
    	public $CurrencyCode;

    	/**
    	* @var CustomerPresent
    	*/
    	public $CustomerPresent;

    	/**
    	* @var RequestAdvice
    	*/
    	public $RequestAdvice;

    	/**
    	* @var EntryMode
    	*/
    	public $EntryMode;

    	/**
    	* @var RequestACI
    	*/
    	public $RequestACI;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\AddressInfo')){

    class AddressInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Street2;

    	/**
    	* @var string
    	*/
    	public $Street1;

    	/**
    	* @var string
    	*/
    	public $StateProvince;

    	/**
    	* @var string
    	*/
    	public $PostalCode;

    	/**
    	* @var string
    	*/
    	public $City;

    	/**
    	* @var TypeISOCountryCodeA3
    	*/
    	public $CountryCode;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\BankcardService')){

    class BankcardService extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $AlternativeMerchantData;

    	/**
    	* @var string
    	*/
    	public $EncryptionKey;

    	/**
    	* @var long
    	*/
    	public $MaximumBatchItems;

    	/**
    	* @var PurchaseCardLevel
    	*/
    	public $PurchaseCardLevel;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\bankcardserviceavsdata
    	*/
    	public $AVSData;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    	/**
    	* @var dateTime
    	*/
    	public $CutoffTime;

    	/**
    	* @var string
    	*/
    	public $ServiceName;

    	/**
    	* @var boolean
    	*/
    	public $MultiplePartialCapture;

    	/**
    	* @var boolean
    	*/
    	public $ResubmitCorrection;

    	/**
    	* @var boolean
    	*/
    	public $ManagedBilling;

    	/**
    	* @var boolean
    	*/
    	public $AutoBatch;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\operations
    	*/
    	public $Operations;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\tenders
    	*/
    	public $Tenders;

    	/**
    	* @var long
    	*/
    	public $MaximumLineItems;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\MerchantProfileTransactionData')){

    class MerchantProfileTransactionData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\bankcardtransactiondatadefaults
    	*/
    	public $BankcardTransactionDataDefaults;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\StoredValueService')){

    class StoredValueService extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ServiceName;

    	/**
    	* @var boolean
    	*/
    	public $SecureMSRAllowed;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\operations
    	*/
    	public $Operations;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\tenders
    	*/
    	public $Tenders;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\ServiceInformation')){

    class ServiceInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofencryptionservice
    	*/
    	public $EncryptionServices;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofbankcardservice
    	*/
    	public $BankcardServices;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofworkflow
    	*/
    	public $Workflows;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofelectroniccheckingservice
    	*/
    	public $ElectronicCheckingServices;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofstoredvalueservice
    	*/
    	public $StoredValueServices;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\EncryptionService')){

    class EncryptionService extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ServiceName;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\operations
    	*/
    	public $Operations;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\EmailTemplate')){

    class EmailTemplate extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Greeting;

    	/**
    	* @var string
    	*/
    	public $TwitterLink;

    	/**
    	* @var TypeISOLanguageCodeA3
    	*/
    	public $Language;

    	/**
    	* @var string
    	*/
    	public $PrimaryColor;

    	/**
    	* @var string
    	*/
    	public $ReturnPolicy;

    	/**
    	* @var string
    	*/
    	public $SecondaryColor;

    	/**
    	* @var string
    	*/
    	public $FacebookLink;

    	/**
    	* @var string
    	*/
    	public $Closing;

    	/**
    	* @var string
    	*/
    	public $FromEmail;

    	/**
    	* @var TypeEmailFont
    	*/
    	public $Font;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\AUEnrolledMerchant')){

    class AUEnrolledMerchant extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\arrayofauenrollment
    	*/
    	public $AUEnrollments;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\CardBrandIdentifiers_3DSecure')){

    class CardBrandIdentifiers_3DSecure extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantUrl;

    	/**
    	* @var CardBrand3DSecureProgram
    	*/
    	public $CardBrand3DSecureProgram;

    	/**
    	* @var string
    	*/
    	public $MerchantNumber;

    	/**
    	* @var string
    	*/
    	public $MerchantBankId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\UserMetaData')){

    class UserMetaData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $LastPasswordResetDate;

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $AssignedRoles;

    	/**
    	* @var string
    	*/
    	public $FirstName;

    	/**
    	* @var boolean
    	*/
    	public $IsSystemLocked;

    	/**
    	* @var boolean
    	*/
    	public $UserMustChangePassword;

    	/**
    	* @var dateTime
    	*/
    	public $LastLoginDate;

    	/**
    	* @var string
    	*/
    	public $UserCredentialGuid;

    	/**
    	* @var dateTime
    	*/
    	public $SystemLockedTimeStamp;

    	/**
    	* @var int
    	*/
    	public $LockCount;

    	/**
    	* @var string
    	*/
    	public $Username;

    	/**
    	* @var string
    	*/
    	public $LastName;

    	/**
    	* @var boolean
    	*/
    	public $IsAdminLocked;

    	/**
    	* @var string
    	*/
    	public $Password;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ReturnInformation')){

    class ReturnInformation extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var dateTime
    	*/
    	public $ReturnDate;

    	/**
    	* @var string
    	*/
    	public $ReturnCode;

    	/**
    	* @var string
    	*/
    	public $ReturnReason;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\CheckData')){

    class CheckData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var CheckCountryCode
    	*/
    	public $CheckCountryCode;

    	/**
    	* @var string
    	*/
    	public $RoutingNumber;

    	/**
    	* @var OwnerType
    	*/
    	public $OwnerType;

    	/**
    	* @var UseType
    	*/
    	public $UseType;

    	/**
    	* @var string
    	*/
    	public $CheckNumber;

    	/**
    	* @var string
    	*/
    	public $AccountNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\ConsumerIdentification')){

    class ConsumerIdentification extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $IdData;

    	/**
    	* @var IdEntryMode
    	*/
    	public $IdEntryMode;

    	/**
    	* @var IdType
    	*/
    	public $IdType;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\CardSecurityData')){

    class CardSecurityData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var CVDataProvided
    	*/
    	public $CVDataProvided;

    	/**
    	* @var string
    	*/
    	public $CVData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\CardData')){

    class CardData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Expire;

    	/**
    	* @var string
    	*/
    	public $Track2Data;

    	/**
    	* @var string
    	*/
    	public $Track1Data;

    	/**
    	* @var string
    	*/
    	public $AccountNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\VirtualCardData')){

    class VirtualCardData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $AccountNumberLength;

    	/**
    	* @var string
    	*/
    	public $BIN;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSValidationErrorFault')){

    class CWSValidationErrorFault extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $RuleMessage;

    	/**
    	* @var CWSValidationErrorFault_EErrorType
    	*/
    	public $ErrorType;

    	/**
    	* @var string
    	*/
    	public $RuleKey;

    	/**
    	* @var string
    	*/
    	public $RuleLocationKey;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault')){

    class CWSBaseFault extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var int
    	*/
    	public $ErrorID;

    	/**
    	* @var string
    	*/
    	public $ProblemType;

    	/**
    	* @var string
    	*/
    	public $Operation;

    	/**
    	* @var string
    	*/
    	public $HelpURL;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Rest\MerchantProfileId')){

    class MerchantProfileId extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $id;

    	/**
    	* @var string
    	*/
    	public $href;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Rest\UserInfo')){

    class UserInfo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $SecurityQuestionToken;

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var string
    	*/
    	public $UserName;

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\arrayofsecurityanswer
    	*/
    	public $SecurityAnswers;

    	/**
    	* @var string
    	*/
    	public $Password;

    	/**
    	* @var string
    	*/
    	public $SecurityAnswer;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Rest\ApplicationProfileId')){

    class ApplicationProfileId extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $id;

    	/**
    	* @var string
    	*/
    	public $href;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Rest\NewUser')){

    class NewUser extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var boolean
    	*/
    	public $EmailPassword;

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\userinfo
    	*/
    	public $UserInfo;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardInterchangeData')){

    class BankcardInterchangeData extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var RequestCommercialCard
    	*/
    	public $RequestCommercialCard;

    	/**
    	* @var ExistingDebt
    	*/
    	public $ExistingDebt;

    	/**
    	* @var int
    	*/
    	public $CurrentInstallmentNumber;

    	/**
    	* @var BillPayment
    	*/
    	public $BillPayment;

    	/**
    	* @var RequestAdvice
    	*/
    	public $RequestAdvice;

    	/**
    	* @var int
    	*/
    	public $TotalNumberOfInstallments;

    	/**
    	* @var RequestACI
    	*/
    	public $RequestACI;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\installmentdetails
    	*/
    	public $InstallmentDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\SignOn')){

    class SignOn extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\merchantinfo
    	*/
    	public $MerchantInfo;

    	/**
    	* @var string
    	*/
    	public $FederatedIdentityToken;

    	/**
    	* @var string
    	*/
    	public $Domain;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\SubmitLogo')){

    class SubmitLogo extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var TypeFileType
    	*/
    	public $FileType;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $Logo;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\TransactionRequest')){

    class TransactionRequest extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transactiontenderdata
    	*/
    	public $TransactionTenderData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction')){

    class ChangeTransaction extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\FederatedSignOn')){

    class FederatedSignOn extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ExternalDomainToken;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureTransactions')){

    class CaptureTransactions extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\DelegatedSignOn')){

    class DelegatedSignOn extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $OnBehalfOfServiceKey;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ReceiptRequest')){

    class ReceiptRequest extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $Email;

    	/**
    	* @var string
    	*/
    	public $TransactionId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile')){

    class SubmitTransactionWithProfile extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\Authentication')){

    class Authentication extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $AuthnRequest;

    	/**
    	* @var string
    	*/
    	public $Username;

    	/**
    	* @var string
    	*/
    	public $Password;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction')){

    class SubmitTransaction extends \Evosnap\Cws\Model\BaseObject {

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    }
}

namespace Datacontract\I2004\I07\System\Io;

if(!class_exists('\Datacontract\I2004\I07\System\Io\Stream')){

    class Stream extends \Datacontract\I2004\I07\System\MarshalByRefObject {

    	public function __construct($type = 'Stream, http://schemas.datacontract.org/2004/07/System.IO') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\PaymentAttribute')){

    class PaymentAttribute extends \Datacontract\I2004\I07\System\Attribute {

    	public function __construct($type = 'PaymentAttribute, http://schemas.evosnap.com/CWS/v2.0/Transactions') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var boolean
    	*/
    	public $IsArray;

    	/**
    	* @var boolean
    	*/
    	public $IsNestedArray;

    	/**
    	* @var string
    	*/
    	public $CWSType;

    	/**
    	* @var string
    	*/
    	public $ParentPtlsArray;

    	/**
    	* @var string
    	*/
    	public $Annotation;

    	/**
    	* @var string
    	*/
    	public $IndustryType;

    	/**
    	* @var string
    	*/
    	public $CwsXPath;

    	/**
    	* @var string
    	*/
    	public $Field;

    	/**
    	* @var string
    	*/
    	public $ParentCwsArray;

    	/**
    	* @var string
    	*/
    	public $CheckType;

    	/**
    	* @var boolean
    	*/
    	public $EmitDefaultValue;

    	/**
    	* @var string
    	*/
    	public $PTLSType;

    	/**
    	* @var boolean
    	*/
    	public $IsDecimal;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\PaymentAttribute')){

    class PaymentAttribute extends \Datacontract\I2004\I07\System\Attribute {

    	public function __construct($type = 'PaymentAttribute, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $CwsXPath;

    	/**
    	* @var string
    	*/
    	public $Field;

    	/**
    	* @var boolean
    	*/
    	public $IsArray;

    	/**
    	* @var string
    	*/
    	public $CheckType;

    	/**
    	* @var boolean
    	*/
    	public $EmitDefaultValue;

    	/**
    	* @var string
    	*/
    	public $PTLSType;

    	/**
    	* @var boolean
    	*/
    	public $IsDecimal;

    	/**
    	* @var string
    	*/
    	public $CWSType;

    	/**
    	* @var string
    	*/
    	public $Annotation;

    	/**
    	* @var string
    	*/
    	public $IndustryType;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardReturn')){

    class BankcardReturn extends \Evosnap\Cws\V2\I0\Transactions\CwsReturn {

    	public function __construct($type = 'BankcardReturn, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\bankcardtenderdata
    	*/
    	public $TenderData;

    	/**
    	* @var TransactionCode
    	*/
    	public $TransactionCode;

    	/**
    	* @var decimal
    	*/
    	public $FeeAmount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueReturn')){

    class StoredValueReturn extends \Evosnap\Cws\V2\I0\Transactions\CwsReturn {

    	public function __construct($type = 'StoredValueReturn, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var TransactionCode
    	*/
    	public $TransactionCode;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\ResubmitOrderUpdate')){

    class ResubmitOrderUpdate extends \Evosnap\Cws\V2\I0\Transactions\Resubmit {

    	public function __construct($type = 'ResubmitOrderUpdate, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\level2data
    	*/
    	public $Level2Data;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayoflineitemdetail
    	*/
    	public $LineItemDetails;

    	/**
    	* @var string
    	*/
    	public $ProductIndicator;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Resubmit3DSecure')){

    class Resubmit3DSecure extends \Evosnap\Cws\V2\I0\Transactions\Resubmit {

    	public function __construct($type = 'Resubmit3DSecure, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $PaymentAuthorizationResponse;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransaction')){

    class BankcardTransaction extends \Evosnap\Cws\V2\I0\Transactions\Transaction {

    	public function __construct($type = 'BankcardTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\bankcardapplicationconfigurationdata
    	*/
    	public $ApplicationConfigurationData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\bankcardtenderdata
    	*/
    	public $TenderData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\bankcardtransactiondata
    	*/
    	public $TransactionData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\EncryptionTransaction')){

    class EncryptionTransaction extends \Evosnap\Cws\V2\I0\Transactions\Transaction {

    	public function __construct($type = 'EncryptionTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Encryption') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\encryptiontenderdata
    	*/
    	public $TenderData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\encryptiontransactiondata
    	*/
    	public $TransactionData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ElectronicCheckingTransaction')){

    class ElectronicCheckingTransaction extends \Evosnap\Cws\V2\I0\Transactions\Transaction {

    	public function __construct($type = 'ElectronicCheckingTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Electronicchecking\electroniccheckingtenderdata
    	*/
    	public $TenderData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Electronicchecking\electroniccheckingtransactiondata
    	*/
    	public $TransactionData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTransaction')){

    class StoredValueTransaction extends \Evosnap\Cws\V2\I0\Transactions\Transaction {

    	public function __construct($type = 'StoredValueTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\storedvaluetenderdata
    	*/
    	public $TenderData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\storedvaluetransactiondata
    	*/
    	public $TransactionData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardUndo')){

    class BankcardUndo extends \Evosnap\Cws\V2\I0\Transactions\Undo {

    	public function __construct($type = 'BankcardUndo, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var Reason
    	*/
    	public $UndoReason;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\bankcardtenderdata
    	*/
    	public $TenderData;

    	/**
    	* @var boolean
    	*/
    	public $ForceVoid;

    	/**
    	* @var TransactionCode
    	*/
    	public $TransactionCode;

    	/**
    	* @var PINDebitUndoReason
    	*/
    	public $PINDebitReason;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransactionResponse')){

    class BankcardTransactionResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'BankcardTransactionResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\threedsecureinformation
    	*/
    	public $ThreeDSecureInformation;

    	/**
    	* @var PrepaidCard
    	*/
    	public $PrepaidCard;

    	/**
    	* @var CVResult
    	*/
    	public $CVResult;

    	/**
    	* @var string
    	*/
    	public $MerchantId;

    	/**
    	* @var string
    	*/
    	public $AuthorizationServerUrl;

    	/**
    	* @var string
    	*/
    	public $BankResponseCode;

    	/**
    	* @var string
    	*/
    	public $ForcePostCode;

    	/**
    	* @var boolean
    	*/
    	public $IsPartialApproval;

    	/**
    	* @var string
    	*/
    	public $ErrorType;

    	/**
    	* @var decimal
    	*/
    	public $BatchAmount;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var boolean
    	*/
    	public $ProcessedAs3D;

    	/**
    	* @var TypeLevel3Added
    	*/
    	public $Level3Added;

    	/**
    	* @var decimal
    	*/
    	public $FeeAmount;

    	/**
    	* @var decimal
    	*/
    	public $CashBackAmount;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\emvdataresponse
    	*/
    	public $EMVDataResponse;

    	/**
    	* @var string
    	*/
    	public $LastPANDigits;

    	/**
    	* @var string
    	*/
    	public $MessageAuthenticationCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\arrayofinitialencryptionkeys
    	*/
    	public $InitialEncryptionKeys;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\avsresult
    	*/
    	public $AVSResult;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $BatchId;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountDataToken;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\tokeninformation
    	*/
    	public $TokenInformation;

    	/**
    	* @var string
    	*/
    	public $PaymentAuthorizationRequest;

    	/**
    	* @var string
    	*/
    	public $OrderId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\ebtavailablebalance
    	*/
    	public $EBTAvailableBalance;

    	/**
    	* @var string
    	*/
    	public $ApprovalCode;

    	/**
    	* @var IndustryType
    	*/
    	public $IndustryType;

    	/**
    	* @var string
    	*/
    	public $CardLevel;

    	/**
    	* @var string
    	*/
    	public $Expire;

    	/**
    	* @var string
    	*/
    	public $DowngradeCode;

    	/**
    	* @var dateTime
    	*/
    	public $SettlementDate;

    	/**
    	* @var string
    	*/
    	public $RetrievalReferenceNumber;

    	/**
    	* @var Resubmit
    	*/
    	public $Resubmit;

    	/**
    	* @var decimal
    	*/
    	public $FinalBalance;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardCaptureResponse')){

    class BankcardCaptureResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'BankcardCaptureResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var decimal
    	*/
    	public $CashBackAmount;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\emvdataresponse
    	*/
    	public $EMVDataResponse;

    	/**
    	* @var PrepaidCard
    	*/
    	public $PrepaidCard;

    	/**
    	* @var string
    	*/
    	public $BatchId;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountDataToken;

    	/**
    	* @var string
    	*/
    	public $MerchantId;

    	/**
    	* @var string
    	*/
    	public $OrderId;

    	/**
    	* @var string
    	*/
    	public $ApprovalCode;

    	/**
    	* @var IndustryType
    	*/
    	public $IndustryType;

    	/**
    	* @var string
    	*/
    	public $LastPanDigits;

    	/**
    	* @var string
    	*/
    	public $BankResponseCode;

    	/**
    	* @var string
    	*/
    	public $Expire;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\transactionsummarydata
    	*/
    	public $TransactionSummaryData;

    	/**
    	* @var string
    	*/
    	public $ErrorType;

    	/**
    	* @var TypeCardType
    	*/
    	public $CardType;

    	/**
    	* @var string
    	*/
    	public $RetrievalReferenceNumber;

    	/**
    	* @var Resubmit
    	*/
    	public $Resubmit;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var TypeLevel3Added
    	*/
    	public $Level3Added;

    	/**
    	* @var boolean
    	*/
    	public $ProcessedAs3D;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\EncryptionResponse')){

    class EncryptionResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'EncryptionResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/Encryption') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\arrayofcomponentkeys
    	*/
    	public $ComponentKeys;

    	/**
    	* @var string
    	*/
    	public $MessageAuthenticationCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Encryption\arrayofinitialencryptionkeys
    	*/
    	public $InitialEncryptionKeys;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ElectronicCheckingCaptureResponse')){

    class ElectronicCheckingCaptureResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'ElectronicCheckingCaptureResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarydata
    	*/
    	public $SummaryData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ElectronicCheckingTransactionResponse')){

    class ElectronicCheckingTransactionResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'ElectronicCheckingTransactionResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $ModifiedRoutingNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Electronicchecking\returninformation
    	*/
    	public $ReturnInformation;

    	/**
    	* @var boolean
    	*/
    	public $ACHCapable;

    	/**
    	* @var dateTime
    	*/
    	public $SubmitDate;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountDataToken;

    	/**
    	* @var string
    	*/
    	public $ModifiedAccountNumber;

    	/**
    	* @var string
    	*/
    	public $ApprovalCode;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueCaptureResponse')){

    class StoredValueCaptureResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'StoredValueCaptureResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $BatchId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\summarydata
    	*/
    	public $SummaryData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTransactionResponse')){

    class StoredValueTransactionResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

    	public function __construct($type = 'StoredValueTransactionResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var decimal
    	*/
    	public $CashBackAmount;

    	/**
    	* @var string
    	*/
    	public $ExchangeRate;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var CVResult
    	*/
    	public $CVResult;

    	/**
    	* @var string
    	*/
    	public $PaymentAccountDataToken;

    	/**
    	* @var decimal
    	*/
    	public $LockAmount;

    	/**
    	* @var string
    	*/
    	public $DetailedErrorMessage;

    	/**
    	* @var CardStatus
    	*/
    	public $CardStatus;

    	/**
    	* @var string
    	*/
    	public $OrderId;

    	/**
    	* @var string
    	*/
    	public $CVData;

    	/**
    	* @var string
    	*/
    	public $ApprovalCode;

    	/**
    	* @var string
    	*/
    	public $AccountNumber;

    	/**
    	* @var string
    	*/
    	public $CardRestrictionValue;

    	/**
    	* @var decimal
    	*/
    	public $NewBalance;

    	/**
    	* @var string
    	*/
    	public $Expire;

    	/**
    	* @var boolean
    	*/
    	public $IsPartialApproval;

    	/**
    	* @var decimal
    	*/
    	public $PreviousBalance;

    	/**
    	* @var string
    	*/
    	public $MaskedPAN;

    	/**
    	* @var decimal
    	*/
    	public $FeeAmount;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTenderData')){

    class BankcardTenderData extends \Evosnap\Cws\V2\I0\Transactions\TransactionTenderData {

    	public function __construct($type = 'BankcardTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\ecommercesecuritydata
    	*/
    	public $EcommerceSecurityData;

    	/**
    	* @var DeviceTypeIndicator
    	*/
    	public $DeviceTypeIndicator;

    	/**
    	* @var TypeCardholderId
    	*/
    	public $CardholderIdType;

    	/**
    	* @var string
    	*/
    	public $VoucherNumber;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\cardsecuritydata
    	*/
    	public $CardSecurityData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\tokeninformation
    	*/
    	public $TokenInformation;

    	/**
    	* @var string
    	*/
    	public $VoucherApprovalCode;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\carddata
    	*/
    	public $CardData;

    	/**
    	* @var TenderType
    	*/
    	public $TenderType;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ElectronicCheckingTenderData')){

    class ElectronicCheckingTenderData extends \Evosnap\Cws\V2\I0\Transactions\TransactionTenderData {

    	public function __construct($type = 'ElectronicCheckingTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Electronicchecking\checkdata
    	*/
    	public $CheckData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTenderData')){

    class StoredValueTenderData extends \Evosnap\Cws\V2\I0\Transactions\TransactionTenderData {

    	public function __construct($type = 'StoredValueTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $CardholderId;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\cardsecuritydata
    	*/
    	public $CardSecurityData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\arrayofconsumeridentification
    	*/
    	public $ConsumerIdentifications;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\carddata
    	*/
    	public $CardData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransactionData')){

    class BankcardTransactionData extends \Evosnap\Cws\V2\I0\Transactions\TransactionData {

    	public function __construct($type = 'BankcardTransactionData, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var boolean
    	*/
    	public $Is3DSecure;

    	/**
    	* @var GoodsType
    	*/
    	public $GoodsType;

    	/**
    	* @var string
    	*/
    	public $ContractNumber;

    	/**
    	* @var CustomerPresent
    	*/
    	public $CustomerPresent;

    	/**
    	* @var TypeEBTType
    	*/
    	public $EBTType;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\internettransactiondata
    	*/
    	public $InternetTransactionData;

    	/**
    	* @var EntryMode
    	*/
    	public $EntryMode;

    	/**
    	* @var string
    	*/
    	public $OrderNumber;

    	/**
    	* @var string
    	*/
    	public $ProductIndicator;

    	/**
    	* @var boolean
    	*/
    	public $IsQuickPaymentService;

    	/**
    	* @var string
    	*/
    	public $BatchAssignment;

    	/**
    	* @var TransactionCode
    	*/
    	public $TransactionCode;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    	/**
    	* @var boolean
    	*/
    	public $IsQuasiCash;

    	/**
    	* @var string
    	*/
    	public $InvoiceNumber;

    	/**
    	* @var decimal
    	*/
    	public $TipAmount;

    	/**
    	* @var string
    	*/
    	public $EmployeeId;

    	/**
    	* @var boolean
    	*/
    	public $CardPresence;

    	/**
    	* @var decimal
    	*/
    	public $FeeAmount;

    	/**
    	* @var decimal
    	*/
    	public $CashBackAmount;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\alternativemerchantdata
    	*/
    	public $AlternativeMerchantData;

    	/**
    	* @var string
    	*/
    	public $ScoreThreshold;

    	/**
    	* @var boolean
    	*/
    	public $SignatureCaptured;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\cardonfileinfo
    	*/
    	public $CardOnFileInfo;

    	/**
    	* @var boolean
    	*/
    	public $IsPartialShipment;

    	/**
    	* @var AccountType
    	*/
    	public $AccountType;

    	/**
    	* @var string
    	*/
    	public $ApprovalCode;

    	/**
    	* @var TypeCardholderAuthenticationEntity
    	*/
    	public $CardholderAuthenticationEntity;

    	/**
    	* @var PartialApprovalSupportType
    	*/
    	public $PartialApprovalCapable;

    	/**
    	* @var string
    	*/
    	public $LaneId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Encryption\EncryptionTransactionData')){

    class EncryptionTransactionData extends \Evosnap\Cws\V2\I0\Transactions\TransactionData {

    	public function __construct($type = 'EncryptionTransactionData, http://schemas.evosnap.com/CWS/v2.0/Transactions/Encryption') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ElectronicCheckingTransactionData')){

    class ElectronicCheckingTransactionData extends \Evosnap\Cws\V2\I0\Transactions\TransactionData {

    	public function __construct($type = 'ElectronicCheckingTransactionData, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var boolean
    	*/
    	public $IsRecurring;

    	/**
    	* @var string
    	*/
    	public $PayeeId;

    	/**
    	* @var TransactionType
    	*/
    	public $TransactionType;

    	/**
    	* @var ServiceType
    	*/
    	public $ServiceType;

    	/**
    	* @var string
    	*/
    	public $PayeeEmail;

    	/**
    	* @var SECCode
    	*/
    	public $SECCode;

    	/**
    	* @var dateTime
    	*/
    	public $EffectiveDate;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTransactionData')){

    class StoredValueTransactionData extends \Evosnap\Cws\V2\I0\Transactions\TransactionData {

    	public function __construct($type = 'StoredValueTransactionData, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $CardRestrictionValue;

    	/**
    	* @var boolean
    	*/
    	public $Unload;

    	/**
    	* @var boolean
    	*/
    	public $IsCashOut;

    	/**
    	* @var PartialApprovalSupportType
    	*/
    	public $PartialApprovalCapable;

    	/**
    	* @var TransactionCode
    	*/
    	public $TransactionCode;

    	/**
    	* @var EntryMode
    	*/
    	public $EntryMode;

    	/**
    	* @var string
    	*/
    	public $TerminalId;

    	/**
    	* @var string
    	*/
    	public $OrderNumber;

    	/**
    	* @var decimal
    	*/
    	public $TipAmount;

    	/**
    	* @var OperationType
    	*/
    	public $OperationType;

    	/**
    	* @var string
    	*/
    	public $EmployeeId;

    	/**
    	* @var CardStatus
    	*/
    	public $CardStatus;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardPayoutTenderData')){

    class BankcardPayoutTenderData extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTenderData {

    	public function __construct($type = 'BankcardPayoutTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\sendertenderdata
    	*/
    	public $SenderData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\SenderTenderData')){

    class SenderTenderData extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTenderData {

    	public function __construct($type = 'SenderTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $Id;

    	/**
    	* @var string
    	*/
    	public $AccountNumber;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardTenderDataPro')){

    class BankcardTenderDataPro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTenderData {

    	public function __construct($type = 'BankcardTenderDataPro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\emvdata
    	*/
    	public $EMVData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardCapture')){

    class BankcardCapture extends \Evosnap\Cws\V2\I0\Transactions\Capture {

    	public function __construct($type = 'BankcardCapture, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var ChargeType
    	*/
    	public $ChargeType;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var TransactionCode
    	*/
    	public $TransactionCode;

    	/**
    	* @var dateTime
    	*/
    	public $ShipDate;

    	/**
    	* @var decimal
    	*/
    	public $TipAmount;

    	/**
    	* @var string
    	*/
    	public $ProductIndicator;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueCapture')){

    class StoredValueCapture extends \Evosnap\Cws\V2\I0\Transactions\Capture {

    	public function __construct($type = 'StoredValueCapture, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSUnknownServiceKeyFault')){

    class CMSUnknownServiceKeyFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

    	public function __construct($type = 'CMSUnknownServiceKeyFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSUnavailableFault')){

    class CMSUnavailableFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

    	public function __construct($type = 'CMSUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSTransactionFailedFault')){

    class CMSTransactionFailedFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

    	public function __construct($type = 'CMSTransactionFailedFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSOperationNotSupportedFault')){

    class CMSOperationNotSupportedFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

    	public function __construct($type = 'CMSOperationNotSupportedFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSCustomerAlreadyExistsFault')){

    class CMSCustomerAlreadyExistsFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

    	public function __construct($type = 'CMSCustomerAlreadyExistsFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Faults') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $CustomerReferenceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Fault;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Fault\CMSValidationResultFault')){

    class CMSValidationResultFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

    	public function __construct($type = 'CMSValidationResultFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Fault') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Fault\arrayofcmsvalidationerror
    	*/
    	public $Errors;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\InvoiceDetail')){

    class InvoiceDetail extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Invoice {

    	public function __construct($type = 'InvoiceDetail, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Subscriptions') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var dateTime
    	*/
    	public $LastUpdatedDate;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var dateTime
    	*/
    	public $CreatedDate;

    	/**
    	* @var string
    	*/
    	public $InvoiceReferenceId;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var int
    	*/
    	public $TransactionAttempts;

    	/**
    	* @var dateTime
    	*/
    	public $DateLastAttempted;

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    	/**
    	* @var InvoiceState
    	*/
    	public $InvoiceState;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    	/**
    	* @var string
    	*/
    	public $SubscriptionReferenceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\SubscriptionDetail')){

    class SubscriptionDetail extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Subscription {

    	public function __construct($type = 'SubscriptionDetail, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Subscriptions') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var dateTime
    	*/
    	public $LastUpdatedDate;

    	/**
    	* @var TypeScope
    	*/
    	public $Scope;

    	/**
    	* @var SubscriptionState
    	*/
    	public $SubscriptionState;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    	/**
    	* @var dateTime
    	*/
    	public $NextProcessingDate;

    	/**
    	* @var int
    	*/
    	public $InvoiceCount;

    	/**
    	* @var dateTime
    	*/
    	public $CreatedDate;

    	/**
    	* @var string
    	*/
    	public $ServiceKey;

    	/**
    	* @var string
    	*/
    	public $ApplicationProfileId;

    	/**
    	* @var int
    	*/
    	public $TrialInvoiceCount;

    	/**
    	* @var string
    	*/
    	public $SubscriptionReferenceId;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSUnknownServiceKeyFault')){

    class TMSUnknownServiceKeyFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

    	public function __construct($type = 'TMSUnknownServiceKeyFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSCaptureInProgressExceptionFault')){

    class TMSCaptureInProgressExceptionFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

    	public function __construct($type = 'TMSCaptureInProgressExceptionFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSUnavailableFault')){

    class TMSUnavailableFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

    	public function __construct($type = 'TMSUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSTransactionFailedFault')){

    class TMSTransactionFailedFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

    	public function __construct($type = 'TMSTransactionFailedFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSOperationNotSupportedFault')){

    class TMSOperationNotSupportedFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

    	public function __construct($type = 'TMSOperationNotSupportedFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Fault;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\Fault\TMSValidationResultFault')){

    class TMSValidationResultFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

    	public function __construct($type = 'TMSValidationResultFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Fault') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\Fault\arrayoftmsvalidationerror
    	*/
    	public $Errors;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Electronicchecking\ElectronicCheckingCustomerData')){

    class ElectronicCheckingCustomerData extends \Evosnap\Cws\V2\I0\Transactions\TransactionCustomerData {

    	public function __construct($type = 'ElectronicCheckingCustomerData, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\personalinfo
    	*/
    	public $AdditionalBillingData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueManage')){

    class StoredValueManage extends \Evosnap\Cws\V2\I0\Transactions\Manage {

    	public function __construct($type = 'StoredValueManage, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var boolean
    	*/
    	public $IsCashOut;

    	/**
    	* @var decimal
    	*/
    	public $Amount;

    	/**
    	* @var OperationType
    	*/
    	public $OperationType;

    	/**
    	* @var CardStatus
    	*/
    	public $CardStatus;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueBalanceTransferTenderData')){

    class StoredValueBalanceTransferTenderData extends \Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTenderData {

    	public function __construct($type = 'StoredValueBalanceTransferTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\sourcetenderdata
    	*/
    	public $SourceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\SourceTenderData')){

    class SourceTenderData extends \Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTenderData {

    	public function __construct($type = 'SourceTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueActivateTenderData')){

    class StoredValueActivateTenderData extends \Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTenderData {

    	public function __construct($type = 'StoredValueActivateTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\virtualcarddata
    	*/
    	public $VirtualCardData;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\ElectronicCheckingRejectedSummaryResponse')){

    class ElectronicCheckingRejectedSummaryResponse extends \Evosnap\Cws\V2\I0\Dataservices\Tms\QueryResponse {

    	public function __construct($type = 'ElectronicCheckingRejectedSummaryResponse, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayofsummarydetail
    	*/
    	public $Transactions;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\rejectedsummary
    	*/
    	public $Summary;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\ElectronicCheckingRejectedDetailResponse')){

    class ElectronicCheckingRejectedDetailResponse extends \Evosnap\Cws\V2\I0\Dataservices\Tms\QueryResponse {

    	public function __construct($type = 'ElectronicCheckingRejectedDetailResponse, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayoftransactiondetail
    	*/
    	public $Transactions;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\rejectedsummary
    	*/
    	public $Summary;

    }
}

namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

if(!class_exists('\Evosnap\Cws\V2\I0\Dataservices\Tms\ElectronicCheckQueryRejectedParameters')){

    class ElectronicCheckQueryRejectedParameters extends \Evosnap\Cws\V2\I0\Dataservices\Tms\QueryRejectedParameters {

    	public function __construct($type = 'ElectronicCheckQueryRejectedParameters, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var TypeDateType
    	*/
    	public $QueryDateType;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
    	*/
    	public $QueryDateRange;

    	/**
    	* @var string
    	*/
    	public $ServiceId;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSCommerceSafeOnlyFault')){

    class CWSCommerceSafeOnlyFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSCommerceSafeOnlyFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSSocketConfigurationFailedFault')){

    class CWSSocketConfigurationFailedFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSSocketConfigurationFailedFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSAdminTxnFailedFault')){

    class CWSAdminTxnFailedFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSAdminTxnFailedFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSPasswordChangeFailedFault')){

    class CWSPasswordChangeFailedFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSPasswordChangeFailedFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSValidationResultFault')){

    class CWSValidationResultFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSValidationResultFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\Faults\arrayofcwsvalidationerrorfault
    	*/
    	public $Errors;

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSProductionTestMismatchFault')){

    class CWSProductionTestMismatchFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSProductionTestMismatchFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSSignOnServiceUnavailableFault')){

    class CWSSignOnServiceUnavailableFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSSignOnServiceUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSServiceInformationUnavailableFault')){

    class CWSServiceInformationUnavailableFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSServiceInformationUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSTransactionServiceUnavailableFault')){

    class CWSTransactionServiceUnavailableFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSTransactionServiceUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSInvalidOperationFault')){

    class CWSInvalidOperationFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSInvalidOperationFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSFault')){

    class CWSFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

if(!class_exists('\Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSPasswordResetFailedFault')){

    class CWSPasswordResetFailedFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

    	public function __construct($type = 'CWSPasswordResetFailedFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardCapturePro')){

    class BankcardCapturePro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardCapture {

    	public function __construct($type = 'BankcardCapturePro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\level2data
    	*/
    	public $Level2Data;

    	/**
    	* @var boolean
    	*/
    	public $MultiplePartialCaptureFinal;

    	/**
    	* @var boolean
    	*/
    	public $MultiplePartialCapture;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayoflineitemdetail
    	*/
    	public $LineItemDetails;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\customerinfo
    	*/
    	public $ShippingData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardReturnPro')){

    class BankcardReturnPro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardReturn {

    	public function __construct($type = 'BankcardReturnPro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayoflineitemdetail
    	*/
    	public $LineItemDetails;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardCaptureResponsePro')){

    class BankcardCaptureResponsePro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardCaptureResponse {

    	public function __construct($type = 'BankcardCaptureResponsePro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardTransactionResponsePro')){

    class BankcardTransactionResponsePro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransactionResponse {

    	public function __construct($type = 'BankcardTransactionResponsePro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var string
    	*/
    	public $ReturnedACI;

    	/**
    	* @var CommercialCardResponse
    	*/
    	public $CommercialCardResponse;

    	/**
    	* @var AdviceResponse
    	*/
    	public $AdviceResponse;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardTransactionDataPro')){

    class BankcardTransactionDataPro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransactionData {

    	public function __construct($type = 'BankcardTransactionDataPro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\level2data
    	*/
    	public $Level2Data;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\iiasdata
    	*/
    	public $IIASData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayoflineitemdetail
    	*/
    	public $LineItemDetails;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\managedbilling
    	*/
    	public $ManagedBilling;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\pinlessdebitdata
    	*/
    	public $PINlessDebitData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\BankcardTransactionPro')){

    class BankcardTransactionPro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransaction {

    	public function __construct($type = 'BankcardTransactionPro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\bankcardinterchangedata
    	*/
    	public $InterchangeData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAllWithProfile')){

    class CaptureAllWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureTransactions {

    	public function __construct($type = 'CaptureAllWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $BatchIds;

    	/**
    	* @var boolean
    	*/
    	public $ForceClose;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\arrayofcapture
    	*/
    	public $DifferenceData;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofile
    	*/
    	public $MerchantProfile;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureSelective')){

    class CaptureSelective extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureTransactions {

    	public function __construct($type = 'CaptureSelective, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\arrayofcapture
    	*/
    	public $DifferenceData;

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $TransactionIds;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAll')){

    class CaptureAll extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureTransactions {

    	public function __construct($type = 'CaptureAll, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
    	*/
    	public $BatchIds;

    	/**
    	* @var boolean
    	*/
    	public $ForceClose;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\arrayofcapture
    	*/
    	public $DifferenceData;

    	/**
    	* @var string
    	*/
    	public $MerchantProfileId;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\Acknowledge')){

    class Acknowledge extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

    	public function __construct($type = 'Acknowledge, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ManageAccountById')){

    class ManageAccountById extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

    	public function __construct($type = 'ManageAccountById, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\manage
    	*/
    	public $DifferenceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\Undo')){

    class Undo extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

    	public function __construct($type = 'Undo, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\undo
    	*/
    	public $DifferenceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\Adjust')){

    class Adjust extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

    	public function __construct($type = 'Adjust, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\adjust
    	*/
    	public $DifferenceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\Capture')){

    class Capture extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

    	public function __construct($type = 'Capture, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\capture
    	*/
    	public $DifferenceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\DisburseWithProfile')){

    class DisburseWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile {

    	public function __construct($type = 'DisburseWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofile
    	*/
    	public $MerchantProfile;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransactionWithProfile')){

    class AuthorizeTransactionWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile {

    	public function __construct($type = 'AuthorizeTransactionWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofile
    	*/
    	public $MerchantProfile;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ReturnByIdWithProfile')){

    class ReturnByIdWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile {

    	public function __construct($type = 'ReturnByIdWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\cwsreturn
    	*/
    	public $DifferenceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ResubmitTransactionWithProfile')){

    class ResubmitTransactionWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile {

    	public function __construct($type = 'ResubmitTransactionWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ManageAccountWithProfile')){

    class ManageAccountWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile {

    	public function __construct($type = 'ManageAccountWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    	/**
    	* @var \Evosnap\Cws\V2\I0\Serviceinformation\merchantprofile
    	*/
    	public $MerchantProfile;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ResubmitTransaction')){

    class ResubmitTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

    	public function __construct($type = 'ResubmitTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\resubmit
    	*/
    	public $Transaction;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\DisburseTransaction')){

    class DisburseTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

    	public function __construct($type = 'DisburseTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ReturnById')){

    class ReturnById extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

    	public function __construct($type = 'ReturnById, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\cwsreturn
    	*/
    	public $DifferenceData;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransaction')){

    class AuthorizeTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

    	public function __construct($type = 'AuthorizeTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ManageAccount')){

    class ManageAccount extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

    	public function __construct($type = 'ManageAccount, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\KeyTransaction')){

    class KeyTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

    	public function __construct($type = 'KeyTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    	/**
    	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
    	*/
    	public $Transaction;

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAllAsync')){

    class CaptureAllAsync extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAll {

    	public function __construct($type = 'CaptureAllAsync, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ReturnTransactionWithProfile')){

    class ReturnTransactionWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransactionWithProfile {

    	public function __construct($type = 'ReturnTransactionWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeAndCaptureTransactionWithProfile')){

    class AuthorizeAndCaptureTransactionWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransactionWithProfile {

    	public function __construct($type = 'AuthorizeAndCaptureTransactionWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAllAsyncWithProfile')){

    class CaptureAllAsyncWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAllWithProfile {

    	public function __construct($type = 'CaptureAllAsyncWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\ReturnTransaction')){

    class ReturnTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransaction {

    	public function __construct($type = 'ReturnTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeAndCaptureTransaction')){

    class AuthorizeAndCaptureTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransaction {

    	public function __construct($type = 'AuthorizeAndCaptureTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

namespace Evosnap\Cws\V2\I0\Transactions\Rest;

if(!class_exists('\Evosnap\Cws\V2\I0\Transactions\Rest\CaptureSelectiveAsync')){

    class CaptureSelectiveAsync extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureSelective {

    	public function __construct($type = 'CaptureSelectiveAsync, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
    	    parent::__construct($type);
    	}

    }
}

