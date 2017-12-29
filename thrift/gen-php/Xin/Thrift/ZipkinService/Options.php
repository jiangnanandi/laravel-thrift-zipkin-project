<?php
namespace Xin\Thrift\ZipkinService;

/**
 * Autogenerated by Thrift Compiler (0.10.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


class Options {
  static $_TSPEC;

  /**
   * @var string
   */
  public $traceId = null;
  /**
   * @var string
   */
  public $parentSpanId = null;
  /**
   * @var string
   */
  public $spanId = null;
  /**
   * @var string
   */
  public $sampled = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'traceId',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'parentSpanId',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'spanId',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'sampled',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['traceId'])) {
        $this->traceId = $vals['traceId'];
      }
      if (isset($vals['parentSpanId'])) {
        $this->parentSpanId = $vals['parentSpanId'];
      }
      if (isset($vals['spanId'])) {
        $this->spanId = $vals['spanId'];
      }
      if (isset($vals['sampled'])) {
        $this->sampled = $vals['sampled'];
      }
    }
  }

  public function getName() {
    return 'Options';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->traceId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->parentSpanId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->spanId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->sampled);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Options');
    if ($this->traceId !== null) {
      $xfer += $output->writeFieldBegin('traceId', TType::STRING, 1);
      $xfer += $output->writeString($this->traceId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->parentSpanId !== null) {
      $xfer += $output->writeFieldBegin('parentSpanId', TType::STRING, 2);
      $xfer += $output->writeString($this->parentSpanId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->spanId !== null) {
      $xfer += $output->writeFieldBegin('spanId', TType::STRING, 3);
      $xfer += $output->writeString($this->spanId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->sampled !== null) {
      $xfer += $output->writeFieldBegin('sampled', TType::STRING, 4);
      $xfer += $output->writeString($this->sampled);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

