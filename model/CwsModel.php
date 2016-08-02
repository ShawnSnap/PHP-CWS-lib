<?php
/**
 *  Copyright (c) 2013 EVO Payments International - All Rights Reserved.
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

        return array_filter($array);
    }
}


namespace Datacontract\I2004\I07\Evosnap\Servicefactory\Endpoints\Cms;

class Constants extends \Evosnap\Cws\Model\BaseObject {

}


namespace Datacontract\I2004\I07\Ipc\Luna\Servicefactory\Endpoints\Tms\Queuerequests;

class QueryTransactionsSummaryRequest extends \Evosnap\Cws\Model\BaseObject {

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

	/**
	* @var string
	*/
	public $ServiceKey;

}


namespace Datacontract\I2004\I07\Ipc\Luna\Servicefactory\Endpoints\Tms\Queuerequests;

class QueryTransactionsDetailRequest extends \Evosnap\Cws\Model\BaseObject {

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

	/**
	* @var string
	*/
	public $ServiceKey;

}


namespace Datacontract\I2004\I07\Ipc\Luna\Servicefactory\Endpoints\Tms\Queuerequests;

class QueryBatchRequest extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
	*/
	public $PagingParameters;

	/**
	* @var string
	*/
	public $ServiceKey;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\querybatchparameters
	*/
	public $QueryBatchParameters;

}


namespace Datacontract\I2004\I07\Ipc\Luna\Servicefactory\Endpoints\Tms\Queuerequests;

class QueryTransactionFamiliesRequest extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
	*/
	public $PagingParameters;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\querytransactionsparameters
	*/
	public $QueryTransactionsParameters;

	/**
	* @var string
	*/
	public $ServiceKey;

}


namespace Evosnap\Cws\V2\I0\Dataservices;

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


namespace Evosnap\Cws\V2\I0\Dataservices;

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


namespace Evosnap\Cws\V2\I0\Dataservices;

class DSBaseFault extends \Evosnap\Cws\Model\BaseObject {

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

class FamilyDetail extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var TransactionState
	*/
	public $FamilyState;

	/**
	* @var string
	*/
	public $MerchantProfileId;

	/**
	* @var dateTime
	*/
	public $CaptureDateTime;

	/**
	* @var guid
	*/
	public $FamilyId;

	/**
	* @var string
	*/
	public $BatchId;

	/**
	* @var decimal
	*/
	public $NetAmount;

	/**
	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
	*/
	public $TransactionIds;

	/**
	* @var string
	*/
	public $ServiceKey;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\arrayoftransactionmetadata
	*/
	public $TransactionMetaData;

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

}


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\transactionsummarydata
	*/
	public $BatchSummaryData;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

class BankcardData extends \Evosnap\Cws\Model\BaseObject {

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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
	* @var string
	*/
	public $TransactionStatusCode;

	/**
	* @var dateTime
	*/
	public $CaptureDateTime;

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
	public $ServiceTransactionId;

	/**
	* @var string
	*/
	public $CaptureStatusMessage;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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
	public $IssuerAppData_x0020_;

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
	public $CryptogramInfoData_x0020_;

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
	public $CardholderVerificationMethod_x0020_;

	/**
	* @var string
	*/
	public $IssuerScriptTemplate1;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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
	public $VoidTotals;

}


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

class Unmanaged extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
	*/
	public $Any;

}


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

class Addendum extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\unmanaged
	*/
	public $Unmanaged;

}


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

class SummaryData extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\summarytotals
	*/
	public $CreditReturnTotals;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

class DriversLicense extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $Number;

	/**
	* @var TypeStateProvince
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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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
	* @var \Evosnap\Cws\V2\I0\Transactions\transactionreportingdata
	*/
	public $ReportingData;

}


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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
	* @var string
	*/
	public $TransactionId;

}


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Transactions;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

class MerchantProfileMerchantData extends \Evosnap\Cws\Model\BaseObject {

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
	* @var \Evosnap\Cws\V2\I0\Serviceinformation\addressinfo
	*/
	public $Address;

	/**
	* @var \Evosnap\Cws\V2\I0\Serviceinformation\encryptionmerchantdata
	*/
	public $EncryptionMerchantData;

	/**
	* @var string
	*/
	public $Phone;

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
	public $Name;

}


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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
	public $QualificationCodes;

	/**
	* @var IndustryType
	*/
	public $IndustryType;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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
	* @var TypeStateProvince
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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

class MerchantProfileTransactionData extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Evosnap\Cws\V2\I0\Serviceinformation\bankcardtransactiondatadefaults
	*/
	public $BankcardTransactionDataDefaults;

}


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation;

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
	public $DirectoryServerUrl;

	/**
	* @var string
	*/
	public $MerchantBankId;

	/**
	* @var string
	*/
	public $RootCertificate;

}


namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

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


namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

class UserQueryParameters extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $SalesChannel;

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


namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

class ClaimMetaData extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\scopemetadata
	*/
	public $ClaimScope;

	/**
	* @var string
	*/
	public $ClaimNS;

	/**
	* @var string
	*/
	public $ClaimValue;

	/**
	* @var string
	*/
	public $ClaimDescription;

	/**
	* @var ClaimTypeEnum
	*/
	public $ClaimType;

}


namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

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


namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

class SecurityQuestion extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $QuestionCode;

	/**
	* @var string
	*/
	public $QuestionText;

}


namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

class ScopeMetaData extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $ScopeName;

	/**
	* @var int
	*/
	public $ScopeId;

	/**
	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\arrayofidentitytypeenum
	*/
	public $AllowableIdentityTypes;

}


namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

class MerchantInfo extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $MerchantProfileId;

	/**
	* @var string
	*/
	public $ServiceKey;

	/**
	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
	*/
	public $MerchantMetaData;

}


namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

class TokenResponse extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $SessionToken;

	/**
	* @var string
	*/
	public $UserAccessToken;

}


namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

class SecurityQuestionResponse extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $SecurityQuestionToken;

	/**
	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\securityquestion
	*/
	public $SecurityQuestion;

}


namespace Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts;

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


namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

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


namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

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


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

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


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

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


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

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


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

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


namespace Evosnap\Cws\V2\I0\Administration;

class Role extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $RoleName;

	/**
	* @var string
	*/
	public $RoleDescription;

	/**
	* @var int
	*/
	public $ScopeId;

}


namespace Evosnap\Cws\V2\I0\Administration;

class PaymentApplicationQuery extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var TypeSort
	*/
	public $SortType;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
	*/
	public $PagingParameters;

	/**
	* @var TypePaymentApplicationSort
	*/
	public $SortField;

	/**
	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\paymentapplicationqueryparameters
	*/
	public $PaymentApplicationQueryParameters;

}


namespace Evosnap\Cws\V2\I0\Administration;

class UserQuery extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var TypeSort
	*/
	public $SortType;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
	*/
	public $PagingParameters;

	/**
	* @var TypeUserSort
	*/
	public $SortField;

	/**
	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\userqueryparameters
	*/
	public $UserQueryParameters;

}


namespace Evosnap\Cws\V2\I0\Administration;

class MerchantQuery extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var TypeSort
	*/
	public $SortType;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
	*/
	public $PagingParameters;

	/**
	* @var \Datacontract\I2004\I07\Evosnap\General\Security\Sts\Trust\Ext\Datacontracts\merchantqueryparameters
	*/
	public $MerchantQueryParameters;

	/**
	* @var TypeMerchantSort
	*/
	public $SortField;

}


namespace Evosnap\Cws\V2\I0\Administration;

class RoleClaim extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Evosnap\Cws\V2\I0\Administration\claim
	*/
	public $Claim;

	/**
	* @var string
	*/
	public $Name;

}


namespace Evosnap\Cws\V2\I0\Administration;

class Claim extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $ClaimValue;

	/**
	* @var string
	*/
	public $ClaimNamespace;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Billing\Rest;

class BillingRequest extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\pagingparameters
	*/
	public $PagingParameters;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Billing\querybillingeventparameters
	*/
	public $QueryBillingEventParameters;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Billing;

class QueryBillingEventParameters extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
	*/
	public $MerchantProfileIds;

	/**
	* @var BreakdownType
	*/
	public $BreakdownType;

	/**
	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
	*/
	public $BillingEventSourceIds;

	/**
	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
	*/
	public $ServiceKeys;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
	*/
	public $EventDateRange;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

class MerchantTokenSummary extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var int
	*/
	public $TotalNumberOfTokens;

	/**
	* @var string
	*/
	public $MerchantProfileId;

	/**
	* @var string
	*/
	public $ServiceKey;

	/**
	* @var string
	*/
	public $MerchantId;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

class AUTokenBatch extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $AUBatchId;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\arrayoftokendata
	*/
	public $Tokens;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

class AccountData extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $AccountExpiration;

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
	public $MerchantReferenceId;

	/**
	* @var string
	*/
	public $MerchantId;

	/**
	* @var string
	*/
	public $AccountNumber;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

class AUUpdateBatch extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var dateTime
	*/
	public $CreatedDate;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\arrayofupdatedaccountdata
	*/
	public $UpdatedAccounts;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

class CardTypeTokenSummary extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var int
	*/
	public $TotalNumberOfTokens;

	/**
	* @var TypeCardType
	*/
	public $CardType;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

class TokenData extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $MerchantProfileId;

	/**
	* @var string
	*/
	public $AUBatchId;

	/**
	* @var string
	*/
	public $ServiceKey;

	/**
	* @var string
	*/
	public $TerminalId;

	/**
	* @var string
	*/
	public $MerchantId;

	/**
	* @var string
	*/
	public $TokenId;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

class UpdatedAccountData extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $NewAccountNumber;

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
	* @var TypeReasonCode
	*/
	public $ReasonCode;

	/**
	* @var string
	*/
	public $OldAccountNumber;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement;

class TokenSummary extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var int
	*/
	public $TotalNumberOfTokens;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\arrayofcardtypetokensummary
	*/
	public $CardTypeSummaries;

	/**
	* @var int
	*/
	public $TotalNumberOfMerchants;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Accountmanagement\arrayofmerchanttokensummary
	*/
	public $MerchantSummaries;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

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
	* @var decimal
	*/
	public $TaxTotal;

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
	* @var decimal
	*/
	public $GrandTotal;

	/**
	* @var string
	*/
	public $InvoiceReferenceId;

	/**
	* @var decimal
	*/
	public $TaxRate;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerinfo
	*/
	public $ShippingData;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

class Invoice extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\order
	*/
	public $Order;

	/**
	* @var string
	*/
	public $InvoiceReferenceId;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\automationinfo
	*/
	public $AutomationInfo;

	/**
	* @var string
	*/
	public $ServiceId;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

class QueryInvoiceParameters extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
	*/
	public $MerchantProfileIds;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
	*/
	public $CreatedDate;

	/**
	* @var string
	*/
	public $InvoiceReferenceId;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
	*/
	public $CustomerId;

	/**
	* @var InvoiceState
	*/
	public $InvoiceState;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

class QuerySubscriptionParameters extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var SubscriptionState
	*/
	public $SubscriptionState;

	/**
	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
	*/
	public $MerchantProfileIds;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
	*/
	public $CreatedDate;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
	*/
	public $CustomerId;

	/**
	* @var string
	*/
	public $SubscriptionReferenceId;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

class Item extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var decimal
	*/
	public $ItemTax;

	/**
	* @var TypeUnitOfMeasure
	*/
	public $UnitOfMeasure;

	/**
	* @var decimal
	*/
	public $Amount;

	/**
	* @var int
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
	* @var string
	*/
	public $ItemDescription;

	/**
	* @var decimal
	*/
	public $DiscountAmount;

	/**
	* @var decimal
	*/
	public $Price;

	/**
	* @var string
	*/
	public $CommodityCode;

	/**
	* @var string
	*/
	public $ItemName;

	/**
	* @var string
	*/
	public $SKU;

	/**
	* @var boolean
	*/
	public $DiscountIncluded;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

class ItemizedTax extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var TypeTaxType
	*/
	public $TaxType;

	/**
	* @var decimal
	*/
	public $Amount;

	/**
	* @var decimal
	*/
	public $TaxRate;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

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

	/**
	* @var string
	*/
	public $PaymentAccountDataToken;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

class TransactionInfo extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var Status
	*/
	public $Status;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

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
	* @var string
	*/
	public $Description;

	/**
	* @var dateTime
	*/
	public $NextProcessingDate;

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
	* @var dateTime
	*/
	public $EndDate;

	/**
	* @var string
	*/
	public $SubscriptionReferenceId;

	/**
	* @var int
	*/
	public $TotalInvoices;

	/**
	* @var string
	*/
	public $ServiceId;

	/**
	* @var dateTime
	*/
	public $StartDate;

	/**
	* @var TypeIntervalUnit
	*/
	public $IntervalUnit;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

class QueryTransactionsParameters extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var int
	*/
	public $TopCustomers;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
	*/
	public $CustomerId;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
	*/
	public $TransactionDateRange;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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
	public $EmailAddress;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\nameinfo
	*/
	public $Name;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\arrayofcustomertoken
	*/
	public $Tokens;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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
	* @var TypeISOCountryCodeA3
	*/
	public $CountryCode;

	/**
	* @var TypeAddressType
	*/
	public $AddressType;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

class TransactionData extends \Evosnap\Cws\Model\BaseObject {

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayoftypeinteresttype
	*/
	public $Interests;

	/**
	* @var string
	*/
	public $TransactionId;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofcustomerdetail
	*/
	public $CustomerDetails;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

class CustomerId extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $CustomerReferenceId;

	/**
	* @var string
	*/
	public $PAN;

	/**
	* @var string
	*/
	public $TelephoneNumber;

	/**
	* @var string
	*/
	public $EmailAddress;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

class CustomerProfile extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
	*/
	public $Memberships;

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
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\arrayofcarddata
	*/
	public $CardData;

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
	* @var string
	*/
	public $CustomerReferenceId;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofinternationaladdressinfo
	*/
	public $InternationalAddresses;

	/**
	* @var boolean
	*/
	public $SMSNotifcations;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

class CustomerDetail extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var dateTime
	*/
	public $LastProcessed;

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

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Wallet\arrayofcustomertoken
	*/
	public $Tokens;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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
	* @var TypeISOCountryCodeA3
	*/
	public $CountryCode;

	/**
	* @var TypeAddressType
	*/
	public $AddressType;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Fault;

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

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

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

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
	*/
	public $CustomerId;

	/**
	* @var boolean
	*/
	public $IsValidWithOtherPromotions;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions\promotionitem
	*/
	public $Item;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

class QueryCustomerSavingsParameters extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
	*/
	public $CustomerId;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
	*/
	public $TransactionDateRange;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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
	public $PromotionCode;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\daterange
	*/
	public $CreatedDateRange;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
	*/
	public $CustomerId;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\nameinfo
	*/
	public $CustomerName;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

class QueryDistributionListParameters extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $DistributionListName;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

class DistributionList extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\arrayofcustomerid
	*/
	public $CustomerIds;

	/**
	* @var string
	*/
	public $DistributionListName;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Promotions;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

class QueryCustomerTransactionSummary extends \Evosnap\Cws\Model\BaseObject {

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
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\querytransactionsparameters
	*/
	public $QueryTransactionsParameters;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

class DeleteCustomerProfile extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var TypeScope
	*/
	public $Scope;

	/**
	* @var string
	*/
	public $MerchantProfileId;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
	*/
	public $CustomerId;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

class SubmitInvoice extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\paymentdatainfo
	*/
	public $PaymentData;

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
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
	*/
	public $CustomerId;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerprofile
	*/
	public $CustomerProfile;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Rest;

class SubmitSubscription extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\paymentdatainfo
	*/
	public $PaymentData;

	/**
	* @var TypeScope
	*/
	public $Scope;

	/**
	* @var string
	*/
	public $MerchantProfileId;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
	*/
	public $CustomerId;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\subscription
	*/
	public $Subscription;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Fault;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Rest;

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


namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Rest;

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


namespace Evosnap\Cws\V2\I0\Rest;

class ValidationError extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $RuleMessage;

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


namespace Evosnap\Cws\V2\I0\Rest;

class ErrorResponse extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var int
	*/
	public $ErrorId;

	/**
	* @var \Microsoft\I2003\I10\Serialization\Arrays\arrayofstring
	*/
	public $Messages;

	/**
	* @var \Evosnap\Cws\V2\I0\Rest\arrayofvalidationerror
	*/
	public $ValidationErrors;

	/**
	* @var string
	*/
	public $Operation;

	/**
	* @var string
	*/
	public $HelpUrl;

	/**
	* @var string
	*/
	public $Reason;

}


namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation\Rest;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation\Rest;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation\Rest;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

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

}


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

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


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSBaseFault extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var TransactionState
	*/
	public $TransactionState;

	/**
	* @var int
	*/
	public $ErrorID;

	/**
	* @var string
	*/
	public $BatchId;

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
	public $TransactionId;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

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


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

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


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class ChangeTransaction extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $ApplicationProfileId;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class CaptureTransactions extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $ApplicationProfileId;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class FederatedSignOn extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $ExternalDomainToken;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class DelegatedSignOn extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $OnBehalfOfServiceKey;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

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


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class SubmitTransactionWithProfile extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var string
	*/
	public $ApplicationProfileId;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

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


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

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


namespace Evosnap\Identity\I1\I0;

class BaseFault extends \Evosnap\Cws\Model\BaseObject {

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


namespace Evosnap\Ipc\General\Wcf\Contracts\Common\External;

class PingResponse extends \Evosnap\Cws\Model\BaseObject {

	/**
	* @var boolean
	*/
	public $IsSuccess;

	/**
	* @var string
	*/
	public $Message;

}


namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

class ElectronicCheckingTenderData extends \Evosnap\Cws\V2\I0\Transactions\TransactionTenderData {

	public function __construct($type = 'ElectronicCheckingTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\Electronicchecking\checkdata
	*/
	public $CheckData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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
	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\cardsecuritydata
	*/
	public $CardSecurityData;

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\tokeninformation
	*/
	public $TokenInformation;

	/**
	* @var WalletIdentifier
	*/
	public $WalletIdentifier;

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\carddata
	*/
	public $CardData;

	/**
	* @var TenderType
	*/
	public $TenderType;

}


namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

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


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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
	* @var CustomerPresent
	*/
	public $CustomerPresent;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

class EncryptionTransactionData extends \Evosnap\Cws\V2\I0\Transactions\TransactionData {

	public function __construct($type = 'EncryptionTransactionData, http://schemas.evosnap.com/CWS/v2.0/Transactions/Encryption') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

class ElectronicCheckingCaptureResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

	public function __construct($type = 'ElectronicCheckingCaptureResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\summarydata
	*/
	public $SummaryData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

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


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

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


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

class StoredValueTransactionResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

	public function __construct($type = 'StoredValueTransactionResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
	    parent::__construct($type);
	}

	/**
	* @var decimal
	*/
	public $CashBackAmount;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

class BankcardTransactionResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

	public function __construct($type = 'BankcardTransactionResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
	    parent::__construct($type);
	}

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
	public $ForcePostCode;

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
	* @var string
	*/
	public $ApprovalCode;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

class BankcardCaptureResponse extends \Evosnap\Cws\V2\I0\Transactions\Response {

	public function __construct($type = 'BankcardCaptureResponse, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\transactionsummarydata
	*/
	public $TransactionSummaryData;

	/**
	* @var string
	*/
	public $ErrorType;

	/**
	* @var PrepaidCard
	*/
	public $PrepaidCard;

	/**
	* @var string
	*/
	public $BatchId;

	/**
	* @var IndustryType
	*/
	public $IndustryType;

}


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

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


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Transactions\Encryption;

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


namespace Evosnap\Cws\V2\I0\Transactions\Electronicchecking;

class ElectronicCheckingCustomerData extends \Evosnap\Cws\V2\I0\Transactions\TransactionCustomerData {

	public function __construct($type = 'ElectronicCheckingCustomerData, http://schemas.evosnap.com/CWS/v2.0/Transactions/ElectronicChecking') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\personalinfo
	*/
	public $AdditionalBillingData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

class StoredValueCapture extends \Evosnap\Cws\V2\I0\Transactions\Capture {

	public function __construct($type = 'StoredValueCapture, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
	    parent::__construct($type);
	}

	/**
	* @var decimal
	*/
	public $Amount;

}


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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

}


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

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
	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\carddata
	*/
	public $SourceCardData;

	/**
	* @var OperationType
	*/
	public $OperationType;

	/**
	* @var CardStatus
	*/
	public $CardStatus;

}


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

class StoredValueBalanceTransferTenderData extends \Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTenderData {

	public function __construct($type = 'StoredValueBalanceTransferTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\consumeridentification
	*/
	public $ConsumerIdentification;

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\carddata
	*/
	public $SourceCardData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

class StoredValueActivateTenderData extends \Evosnap\Cws\V2\I0\Transactions\Storedvalue\StoredValueTenderData {

	public function __construct($type = 'StoredValueActivateTenderData, http://schemas.evosnap.com/CWS/v2.0/Transactions/StoredValue') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\Storedvalue\virtualcarddata
	*/
	public $VirtualCardData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Storedvalue;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Dataservices;

class DataServicesUnavailableFault extends \Evosnap\Cws\V2\I0\Dataservices\DSBaseFault {

	public function __construct($type = 'DataServicesUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/DataServices') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

class InvoiceDetail extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\Invoice {

	public function __construct($type = 'InvoiceDetail, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Subscriptions') {
	    parent::__construct($type);
	}

	/**
	* @var dateTime
	*/
	public $LastUpdatedDate;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions\arrayoftransactioninfo
	*/
	public $Transactions;

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
	public $ServiceKey;

	/**
	* @var int
	*/
	public $TransactionAttempts;

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
	*/
	public $CustomerId;

	/**
	* @var dateTime
	*/
	public $DateLastAttempted;

	/**
	* @var InvoiceState
	*/
	public $InvoiceState;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Subscriptions;

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
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Customermanagement\customerid
	*/
	public $CustomerId;

	/**
	* @var int
	*/
	public $TrialInvoiceCount;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

class CMSUnavailableFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

	public function __construct($type = 'CMSUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

class CMSTransactionFailedFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

	public function __construct($type = 'CMSTransactionFailedFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Faults;

class CMSUnknownServiceKeyFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

	public function __construct($type = 'CMSUnknownServiceKeyFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Dataservices\Cms\Fault;

class CMSValidationResultFault extends \Evosnap\Cws\V2\I0\Dataservices\Cms\Faults\CMSBaseFault {

	public function __construct($type = 'CMSValidationResultFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/CMS/Fault') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Cms\Fault\arrayofcmsvalidationerror
	*/
	public $Errors;

}


namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

class TMSUnknownServiceKeyFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

	public function __construct($type = 'TMSUnknownServiceKeyFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

class TMSUnavailableFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

	public function __construct($type = 'TMSUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

class TMSTransactionFailedFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

	public function __construct($type = 'TMSTransactionFailedFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Faults;

class TMSOperationNotSupportedFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

	public function __construct($type = 'TMSOperationNotSupportedFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Dataservices\Tms\Fault;

class TMSValidationResultFault extends \Evosnap\Cws\V2\I0\Dataservices\Tms\Faults\TMSBaseFault {

	public function __construct($type = 'TMSValidationResultFault, http://schemas.evosnap.com/CWS/v2.0/DataServices/TMS/Fault') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Dataservices\Tms\Fault\arrayoftmsvalidationerror
	*/
	public $Errors;

}


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

class Resubmit3DSecure extends \Evosnap\Cws\V2\I0\Transactions\Resubmit {

	public function __construct($type = 'Resubmit3DSecure, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard') {
	    parent::__construct($type);
	}

	/**
	* @var string
	*/
	public $PaymentAuthorizationResponse;

}


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard;

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


namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

class CWSValidationResultFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

	public function __construct($type = 'CWSValidationResultFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Serviceinformation\Faults\arrayofcwsvalidationerrorfault
	*/
	public $Errors;

}


namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

class CWSFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

	public function __construct($type = 'CWSFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Serviceinformation\Faults;

class CWSServiceInformationUnavailableFault extends \Evosnap\Cws\V2\I0\Serviceinformation\Faults\CWSBaseFault {

	public function __construct($type = 'CWSServiceInformationUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/ServiceInformation/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

class BankcardReturnPro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardReturn {

	public function __construct($type = 'BankcardReturnPro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\arrayoflineitemdetail
	*/
	public $LineItemDetails;

}


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

class BankcardCaptureResponsePro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardCaptureResponse {

	public function __construct($type = 'BankcardCaptureResponsePro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

class BankcardTenderDataPro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTenderData {

	public function __construct($type = 'BankcardTenderDataPro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\emvdata
	*/
	public $EMVData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

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


namespace Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro;

class BankcardTransactionPro extends \Evosnap\Cws\V2\I0\Transactions\Bankcard\BankcardTransaction {

	public function __construct($type = 'BankcardTransactionPro, http://schemas.evosnap.com/CWS/v2.0/Transactions/Bankcard/Pro') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\Bankcard\Pro\bankcardinterchangedata
	*/
	public $InterchangeData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSConnectionFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

	public function __construct($type = 'CWSConnectionFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSOperationNotSupportedFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

	public function __construct($type = 'CWSOperationNotSupportedFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSValidationResultFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

	public function __construct($type = 'CWSValidationResultFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\Faults\arrayofcwsvalidationerrorfault
	*/
	public $Errors;

}


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSTransactionAlreadySettledFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

	public function __construct($type = 'CWSTransactionAlreadySettledFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSTransactionServiceUnavailableFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

	public function __construct($type = 'CWSTransactionServiceUnavailableFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSTransactionFailedFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

	public function __construct($type = 'CWSTransactionFailedFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSExtendedDataNotSupportedFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

	public function __construct($type = 'CWSExtendedDataNotSupportedFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSInvalidOperationFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

	public function __construct($type = 'CWSInvalidOperationFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSInvalidServiceInformationFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

	public function __construct($type = 'CWSInvalidServiceInformationFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSInvalidMessageFormatFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

	public function __construct($type = 'CWSInvalidMessageFormatFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

	public function __construct($type = 'CWSFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Faults;

class CWSDeserializationFault extends \Evosnap\Cws\V2\I0\Transactions\Faults\CWSBaseFault {

	public function __construct($type = 'CWSDeserializationFault, http://schemas.evosnap.com/CWS/v2.0/Transactions/Faults') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

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


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

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


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

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


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class Acknowledge extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

	public function __construct($type = 'Acknowledge, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class ManageAccountById extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

	public function __construct($type = 'ManageAccountById, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\manage
	*/
	public $DifferenceData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class Undo extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

	public function __construct($type = 'Undo, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\undo
	*/
	public $DifferenceData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class Adjust extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

	public function __construct($type = 'Adjust, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\adjust
	*/
	public $DifferenceData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class Capture extends \Evosnap\Cws\V2\I0\Transactions\Rest\ChangeTransaction {

	public function __construct($type = 'Capture, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\capture
	*/
	public $DifferenceData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

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


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

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


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class ReturnByIdWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile {

	public function __construct($type = 'ReturnByIdWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\cwsreturn
	*/
	public $DifferenceData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class ResubmitTransactionWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransactionWithProfile {

	public function __construct($type = 'ResubmitTransactionWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
	*/
	public $Transaction;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

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


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class ResubmitTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

	public function __construct($type = 'ResubmitTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\resubmit
	*/
	public $Transaction;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class DisburseTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

	public function __construct($type = 'DisburseTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
	*/
	public $Transaction;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class ReturnById extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

	public function __construct($type = 'ReturnById, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\cwsreturn
	*/
	public $DifferenceData;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class AuthorizeTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

	public function __construct($type = 'AuthorizeTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
	*/
	public $Transaction;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class ManageAccount extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

	public function __construct($type = 'ManageAccount, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
	*/
	public $Transaction;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class KeyTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\SubmitTransaction {

	public function __construct($type = 'KeyTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

	/**
	* @var \Evosnap\Cws\V2\I0\Transactions\transaction
	*/
	public $Transaction;

}


namespace Evosnap\Identity\I1\I0;

class PasswordExpiredFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'PasswordExpiredFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class ExpiredTokenFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'ExpiredTokenFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class InvalidTokenFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'InvalidTokenFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class InvalidEmailFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'InvalidEmailFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class AuthenticationFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'AuthenticationFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class SecurityQuestionNotFoundFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'SecurityQuestionNotFoundFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class OneTimePasswordFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'OneTimePasswordFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class LockedByAdminFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'LockedByAdminFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class ArgumentNullFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'ArgumentNullFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class BadAttemptThresholdExceededFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'BadAttemptThresholdExceededFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class SendEmailFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'SendEmailFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class PasswordInvalidFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'PasswordInvalidFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class UserNotFoundFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'UserNotFoundFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class SystemFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'SystemFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Identity\I1\I0;

class STSUnavailableFault extends \Evosnap\Identity\I1\I0\BaseFault {

	public function __construct($type = 'STSUnavailableFault, http://schemas.evosnap.com/Identity/1.0/') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Administration;

class ClaimOverride extends \Evosnap\Cws\V2\I0\Administration\Claim {

	public function __construct($type = 'ClaimOverride, http://schemas.evosnap.com/CWS/v2.0/Administration') {
	    parent::__construct($type);
	}

	/**
	* @var OverrideTypeEnum
	*/
	public $OverrideTypeEnum;

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class CaptureAllAsync extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAll {

	public function __construct($type = 'CaptureAllAsync, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class ReturnTransactionWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransactionWithProfile {

	public function __construct($type = 'ReturnTransactionWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class AuthorizeAndCaptureTransactionWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransactionWithProfile {

	public function __construct($type = 'AuthorizeAndCaptureTransactionWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class CaptureAllAsyncWithProfile extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureAllWithProfile {

	public function __construct($type = 'CaptureAllAsyncWithProfile, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class ReturnTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransaction {

	public function __construct($type = 'ReturnTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class AuthorizeAndCaptureTransaction extends \Evosnap\Cws\V2\I0\Transactions\Rest\AuthorizeTransaction {

	public function __construct($type = 'AuthorizeAndCaptureTransaction, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

}


namespace Evosnap\Cws\V2\I0\Transactions\Rest;

class CaptureSelectiveAsync extends \Evosnap\Cws\V2\I0\Transactions\Rest\CaptureSelective {

	public function __construct($type = 'CaptureSelectiveAsync, http://schemas.evosnap.com/CWS/v2.0/Transactions/Rest') {
	    parent::__construct($type);
	}

}

