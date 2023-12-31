<?php
/**
 * FuseApiErrorCode
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Fuse
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FuseClient\Model;
use \FuseClient\ObjectSerializer;

/**
 * FuseApiErrorCode Class Doc Comment
 *
 * @category Class
 * @package  FuseClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FuseApiErrorCode
{
    /**
     * Possible values of this enum
     */
    public const ASSET_REPORT_GENERATION_FAILED = 'asset_report_generation_failed';

    public const ASSET_REPORT_NOT_READY = 'asset_report_not_ready';

    public const CLIENT_ERROR = 'client_error';

    public const INVALID_HEADERS = 'invalid_headers';

    public const INVALID_REQUEST_BODY = 'invalid_request_body';

    public const INTERNAL_SERVER_ERROR = 'internal_server_error';

    public const ORGANIZATION_NOT_FOUND = 'organization_not_found';

    public const ENTITY_NOT_FOUND = 'entity_not_found';

    public const SESSION_NOT_FOUND = 'session_not_found';

    public const FINANCIAL_INSTITUTION_NOT_FOUND = 'financial_institution_not_found';

    public const CONSUMER_RISK_REPORT_NOT_FOUND = 'consumer_risk_report_not_found';

    public const CONSUMER_RISK_REPORT_CUSTOMIZATION_NOT_FOUND = 'consumer_risk_report_customization_not_found';

    public const MISSING_ACCESS_TOKEN = 'missing_access_token';

    public const MISSING_PLAID_CLIENT_ID_HEADER = 'missing_plaid_client_id_header';

    public const MISSING_PLAID_SECRET_HEADER = 'missing_plaid_secret_header';

    public const MISSING_MX_CLIENT_ID_HEADER = 'missing_mx_client_id_header';

    public const MISSING_MX_API_KEY_HEADER = 'missing_mx_api_key_header';

    public const MISSING_TELLER_PRIVATE_KEY_HEADER = 'missing_teller_private_key_header';

    public const MISSING_TELLER_CERTIFICATE_HEADER = 'missing_teller_certificate_header';

    public const MISSING_TELLER_APPLICATION_ID_HEADER = 'missing_teller_application_id_header';

    public const MISSING_TELLER_SIGNING_SECRET_HEADER = 'missing_teller_signing_secret_header';

    public const MISSING_SNAPTRADE_CLIENT_ID_HEADER = 'missing_snaptrade_client_id_header';

    public const MISSING_SNAPTRADE_CONSUMER_KEY_HEADER = 'missing_snaptrade_consumer_key_header';

    public const MISSING_FLINKS_CA_CUSTOMER_ID_HEADER = 'missing_flinks_ca_customer_id_header';

    public const MISSING_FLINKS_US_CUSTOMER_ID_HEADER = 'missing_flinks_us_customer_id_header';

    public const MISSING_FLINKS_CA_INSTANCE_ID_HEADER = 'missing_flinks_ca_instance_id_header';

    public const MISSING_FLINKS_US_INSTANCE_ID_HEADER = 'missing_flinks_us_instance_id_header';

    public const MISSING_MONO_PUBLIC_KEY_HEADER = 'missing_mono_public_key_header';

    public const MISSING_MONO_SECRET_KEY_HEADER = 'missing_mono_secret_key_header';

    public const MISSING_MONO_WEBHOOK_SECRET_HEADER = 'missing_mono_webhook_secret_header';

    public const MISSING_TRUELAYER_CLIENT_ID_HEADER = 'missing_truelayer_client_id_header';

    public const MISSING_TRUELAYER_CLIENT_SECRET_HEADER = 'missing_truelayer_client_secret_header';

    public const MISSING_TRUELAYER_REDIRECT_URI_HEADER = 'missing_truelayer_redirect_uri_header';

    public const MISSING_FINVERSE_CLIENT_ID_HEADER = 'missing_finverse_client_id_header';

    public const MISSING_FINVERSE_CLIENT_SECRET_HEADER = 'missing_finverse_client_secret_header';

    public const MISSING_FINVERSE_REDIRECT_URI_HEADER = 'missing_finverse_redirect_uri_header';

    public const MISSING_BASIQ_API_KEY_HEADER = 'missing_basiq_api_key_header';

    public const MISSING_BELVO_SECRET_ID_HEADER = 'missing_belvo_secret_id_header';

    public const MISSING_BELVO_SECRET_PASSWORD_HEADER = 'missing_belvo_secret_password_header';

    public const MISSING_FINICITY_PARTNER_ID_HEADER = 'missing_finicity_partner_id_header';

    public const MISSING_FINICITY_APP_KEY_HEADER = 'missing_finicity_app_key_header';

    public const MISSING_FINICITY_PARTNER_SECRET_HEADER = 'missing_finicity_partner_secret_header';

    public const MISSING_FUSE_VERIFICATION_HEADER = 'missing_fuse_verification_header';

    public const MISSING_AKOYA_CLIENT_ID_HEADER = 'missing_akoya_client_id_header';

    public const MISSING_AKOYA_CLIENT_SECRET_HEADER = 'missing_akoya_client_secret_header';

    public const MISSING_SALTEDGE_APP_ID_HEADER = 'missing_saltedge_app_id_header';

    public const MISSING_SALTEDGE_APP_SECRET_HEADER = 'missing_saltedge_app_secret_header';

    public const AGGREGATOR_ERROR = 'aggregator_error';

    public const AGGREGATOR_DISCONNECTED_ERROR = 'aggregator_disconnected_error';

    public const AGGREGATOR_CONNECTION_FINISHED_ERROR = 'aggregator_connection_finished_error';

    public const AGGREGATOR_RATE_LIMIT_ERROR = 'aggregator_rate_limit_error';

    public const REQUEST_BODY_MISSING = 'request_body_missing';

    public const REQUEST_CONTENT_TYPE_INVALID = 'request_content_type_invalid';

    public const REQUEST_BODY_INVALID_JSON = 'request_body_invalid_json';

    public const WEBHOOK_ERROR = 'webhook_error';

    public const TIMEOUT = 'timeout';

    public const INVALID_CERTIFICATE = 'invalid_certificate';

    public const INVALID_PRIVATE_KEY = 'invalid_private_key';

    public const OTHER = 'other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASSET_REPORT_GENERATION_FAILED,
            self::ASSET_REPORT_NOT_READY,
            self::CLIENT_ERROR,
            self::INVALID_HEADERS,
            self::INVALID_REQUEST_BODY,
            self::INTERNAL_SERVER_ERROR,
            self::ORGANIZATION_NOT_FOUND,
            self::ENTITY_NOT_FOUND,
            self::SESSION_NOT_FOUND,
            self::FINANCIAL_INSTITUTION_NOT_FOUND,
            self::CONSUMER_RISK_REPORT_NOT_FOUND,
            self::CONSUMER_RISK_REPORT_CUSTOMIZATION_NOT_FOUND,
            self::MISSING_ACCESS_TOKEN,
            self::MISSING_PLAID_CLIENT_ID_HEADER,
            self::MISSING_PLAID_SECRET_HEADER,
            self::MISSING_MX_CLIENT_ID_HEADER,
            self::MISSING_MX_API_KEY_HEADER,
            self::MISSING_TELLER_PRIVATE_KEY_HEADER,
            self::MISSING_TELLER_CERTIFICATE_HEADER,
            self::MISSING_TELLER_APPLICATION_ID_HEADER,
            self::MISSING_TELLER_SIGNING_SECRET_HEADER,
            self::MISSING_SNAPTRADE_CLIENT_ID_HEADER,
            self::MISSING_SNAPTRADE_CONSUMER_KEY_HEADER,
            self::MISSING_FLINKS_CA_CUSTOMER_ID_HEADER,
            self::MISSING_FLINKS_US_CUSTOMER_ID_HEADER,
            self::MISSING_FLINKS_CA_INSTANCE_ID_HEADER,
            self::MISSING_FLINKS_US_INSTANCE_ID_HEADER,
            self::MISSING_MONO_PUBLIC_KEY_HEADER,
            self::MISSING_MONO_SECRET_KEY_HEADER,
            self::MISSING_MONO_WEBHOOK_SECRET_HEADER,
            self::MISSING_TRUELAYER_CLIENT_ID_HEADER,
            self::MISSING_TRUELAYER_CLIENT_SECRET_HEADER,
            self::MISSING_TRUELAYER_REDIRECT_URI_HEADER,
            self::MISSING_FINVERSE_CLIENT_ID_HEADER,
            self::MISSING_FINVERSE_CLIENT_SECRET_HEADER,
            self::MISSING_FINVERSE_REDIRECT_URI_HEADER,
            self::MISSING_BASIQ_API_KEY_HEADER,
            self::MISSING_BELVO_SECRET_ID_HEADER,
            self::MISSING_BELVO_SECRET_PASSWORD_HEADER,
            self::MISSING_FINICITY_PARTNER_ID_HEADER,
            self::MISSING_FINICITY_APP_KEY_HEADER,
            self::MISSING_FINICITY_PARTNER_SECRET_HEADER,
            self::MISSING_FUSE_VERIFICATION_HEADER,
            self::MISSING_AKOYA_CLIENT_ID_HEADER,
            self::MISSING_AKOYA_CLIENT_SECRET_HEADER,
            self::MISSING_SALTEDGE_APP_ID_HEADER,
            self::MISSING_SALTEDGE_APP_SECRET_HEADER,
            self::AGGREGATOR_ERROR,
            self::AGGREGATOR_DISCONNECTED_ERROR,
            self::AGGREGATOR_CONNECTION_FINISHED_ERROR,
            self::AGGREGATOR_RATE_LIMIT_ERROR,
            self::REQUEST_BODY_MISSING,
            self::REQUEST_CONTENT_TYPE_INVALID,
            self::REQUEST_BODY_INVALID_JSON,
            self::WEBHOOK_ERROR,
            self::TIMEOUT,
            self::INVALID_CERTIFICATE,
            self::INVALID_PRIVATE_KEY,
            self::OTHER
        ];
    }
}


