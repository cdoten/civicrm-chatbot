<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from /buildkit/build/chatbot/sites/all/modules/civicrm/tools/extensions/civicrm-chatbot/xml/schema/CRM/Chat/ChatUser.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:32e903e5035692797ccff3c90117bac3)
 */

/**
 * Database access object for the ChatUser entity.
 */
class CRM_Chat_DAO_ChatUser extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_chat_user';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Unique ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * FK to Contact
   *
   * @var int unsigned
   */
  public $contact_id;

  /**
   * Service that the user account belongs to
   *
   * @var string
   */
  public $service;

  /**
   * User identifier
   *
   * @var string
   */
  public $user_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_chat_user';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'contact_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'Unique ID',
          'required' => TRUE,
          'table_name' => 'civicrm_chat_user',
          'entity' => 'ChatUser',
          'bao' => 'CRM_Chat_DAO_ChatUser',
          'localizable' => 0,
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => 'FK to Contact',
          'required' => TRUE,
          'table_name' => 'civicrm_chat_user',
          'entity' => 'ChatUser',
          'bao' => 'CRM_Chat_DAO_ChatUser',
          'localizable' => 0,
        ],
        'service' => [
          'name' => 'service',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Service'),
          'description' => 'Service that the user account belongs to',
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_chat_user',
          'entity' => 'ChatUser',
          'bao' => 'CRM_Chat_DAO_ChatUser',
          'localizable' => 0,
        ],
        'user_id' => [
          'name' => 'user_id',
          'type' => CRM_Utils_Type::T_STRING,
          'description' => 'User identifier',
          'required' => TRUE,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_chat_user',
          'entity' => 'ChatUser',
          'bao' => 'CRM_Chat_DAO_ChatUser',
          'localizable' => 0,
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'chat_user', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'chat_user', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'index_service' => [
        'name' => 'index_service',
        'field' => [
          0 => 'service',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_chat_user::0::service',
      ],
      'index_user_id' => [
        'name' => 'index_user_id',
        'field' => [
          0 => 'user_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_chat_user::0::user_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}