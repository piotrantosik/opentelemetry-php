<?php
namespace Jaeger\Thrift\Agent;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
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

class DependencyLink
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'parent',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'child',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'callCount',
            'isRequired' => true,
            'type' => TType::I64,
        ),
    );

    /**
     * @var string
     */
    public $parent = null;
    /**
     * @var string
     */
    public $child = null;
    /**
     * @var int
     */
    public $callCount = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['parent'])) {
                $this->parent = $vals['parent'];
            }
            if (isset($vals['child'])) {
                $this->child = $vals['child'];
            }
            if (isset($vals['callCount'])) {
                $this->callCount = $vals['callCount'];
            }
        }
    }

    public function getName()
    {
        return 'DependencyLink';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->parent);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->child);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->callCount);
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('DependencyLink');
        if ($this->parent !== null) {
            $xfer += $output->writeFieldBegin('parent', TType::STRING, 1);
            $xfer += $output->writeString($this->parent);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->child !== null) {
            $xfer += $output->writeFieldBegin('child', TType::STRING, 2);
            $xfer += $output->writeString($this->child);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->callCount !== null) {
            $xfer += $output->writeFieldBegin('callCount', TType::I64, 4);
            $xfer += $output->writeI64($this->callCount);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
